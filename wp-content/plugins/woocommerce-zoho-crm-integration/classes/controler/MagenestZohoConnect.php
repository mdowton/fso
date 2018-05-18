<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 22/01/2018
 * Time: 15:59
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly
if ( ! class_exists( 'MagenestZohoConnect' ) ) :
	class MagenestZohoConnect {
		public $target_url;
		public $base_url;
		private $messNotice;
		public $woo_side_id;
		public $log_type;

		public function __construct()
		{
			$this->base_url = "https://crm." . get_option( 'zoho_server_options' ) . "/crm/private/xml/";
		}


		public function insert_report( $woocommerce_id, $zoho_id, $type, $status, $mess )
		{
			global $wpdb;
			$tbl = $wpdb->prefix . 'hn_zoho_crm_report';
			if ( $wpdb->get_row( "SELECT * FROM {$tbl} WHERE `woocommerce_id` = {$woocommerce_id}", ARRAY_A ) == null ) {
				$wpdb->insert( $tbl, array(
					'woocommerce_id' => $woocommerce_id,
					'zoho_id'        => $zoho_id,
					'type'           => $type,
					'status'         => $status,
					'mess'           => $mess
				) );
			} else {
				$wpdb->update( $tbl, array(
					'zoho_id' => $zoho_id,
					'type'    => $type,
					'status'  => $status,
					'mess'    => $mess
				), array( 'woocommerce_id' => $woocommerce_id ) );
			}
		}

		public function getAuthKey()
		{
			$authkey = get_option( 'zoho_crm_api_auth_key' );

			if ( ! $authkey ) {
				$username = get_option( 'zoho_crm_user_id' );
				$password = get_option( 'zoho_crm_user_password' );
				if ( ! $username || ! $password ) {
					$this->messNotice = "The ZohoCRM user name or password is invalid! Cannot get Authentication token";
					add_action( 'admin_notices', array( $this, 'ErrorNotice' ), 10, 1 );

					return;
				}
				$authkey = $this->getAuthFromZoho( $username, $password );
				if ( ! $authkey ) {
					$this->messNotice = "The ZohoCRM user name or password is invalid! Cannot get Authentication token";
					add_action( 'admin_notices', array( $this, 'ErrorNotice' ), 10, 1 );

					return;
				} else {
					update_option( 'zoho_crm_api_auth_key', $authkey );
					$this->messNotice = 'Updated Auth key!';
					add_action( 'admin_notices', array( $this, 'SuccessNotice' ), 10, 1 );
				}
			}

			return $authkey;
		}

		/**
		 * get Auth Key from Zoho
		 * example
		 * string(87) "# #Wed Nov 12 06:50:51 PST 2014 AUTHTOKEN=4e3426bbeebd7296d149ca0cf0872229 RESULT=TRUE " {"authToken":"4e3426bbeebd7296d149ca0cf0872229","result":"TRUE"}NULL
		 */
		public function getAuthFromZoho( $username, $password, $server = null )
		{
			try {
				$param = "SCOPE=ZohoCRM/crmapi&EMAIL_ID=" . $username . "&PASSWORD=" . $password;
				if ( $server == null ) {
					$ch = curl_init( "https://accounts." . get_option( 'zoho_server_options' ) . "/apiauthtoken/nb/create" );
				} else {
					$ch = curl_init( "https://accounts." . $server . "/apiauthtoken/nb/create" );
				}
				curl_setopt( $ch, CURLOPT_POST, true );
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
				curl_setopt( $ch, CURLOPT_POSTFIELDS, $param );
				$result = curl_exec( $ch );
			} catch ( Exception $exception ) {
				echo 'Exception Message: ' . $exception->getMessage() . '<br/>';
				echo 'Exception Trace: ' . $exception->getTraceAsString();
			}

			$anArray   = explode( "\n", $result );
			$authToken = explode( "=", $anArray ['2'] );
			$cmp       = strcmp( $authToken ['0'], "AUTHTOKEN" );
			if ( $cmp == 0 ) {
				return $authToken ['1'];
			}
			$return_result = explode( "=", $anArray ['3'] );
			$cmp1          = strcmp( $return_result ['0'], "RESULT" );

			if ( $return_result [1] == 'FALSE' ) {
				$return_cause     = explode( "=", $anArray [2] );
				$cmp2             = strcmp( $return_cause [0], 'CAUSE' );
				$this->messNotice = "Zoho server: " . $return_cause[1];
				add_action( 'admin_notices', array( $this, 'ErrorNotice' ), 10, 1 );
			} else {

			}
			//echo json_encode ( $return_array );
			curl_close( $ch );
		}

		/*
		 * excuce
		 */
		public function sendCurlRequest( $methodname, $xmlData, $params = null, $module = null )
		{
			$xmlData = self::replaceSpecialCharacter( $xmlData );
			try {
				if ( ! empty( $module ) ) {
					$url = $this->base_url . $module . "/" . $methodname;
				} else {
					$url = $this->target_url . "/" . $methodname;
				}
				$parameter = 'scope=crmapi';
				$parameter .= "&authtoken={$this->getAuthKey()}";//Give your authtoken
				$parameter .= '&duplicateCheck=' . get_option( 'zoho_duplicate' ); //Set value as "1" to check the duplicate records and throw an error response or "2" to check the duplicate records, if exists, update the same.
				$parameter .= '&version=4';

				foreach ( $params as $param => $value ) {
					$parameter .= "&{$param}={$value}";
				}
				$parameter .= "&xmlData={$xmlData}";
				error_log( "Param: " . print_r( $parameter, true ) );

				/* initialize curl handle */
				$ch = curl_init();
				/* set url to send post request */
				curl_setopt( $ch, CURLOPT_URL, $url );
				/* allow redirects */
				curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
				/* return a response into a variable */
				curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
				/* times out after 300s */
				curl_setopt( $ch, CURLOPT_TIMEOUT, 300 );
				/* set POST method */
				curl_setopt( $ch, CURLOPT_POST, 1 );
				/* add POST fields parameters */
				curl_setopt( $ch, CURLOPT_POSTFIELDS, $parameter );
				/* execute the cURL */
				$result = curl_exec( $ch );

				if ( strpos( $result, 'xml' ) > - 1 ) {
					$xmlParse = simplexml_load_string( $result );
					if ( $xmlParse->result ) {
						if ( $xmlParse->result->row->success ) {
							/*
							 * <?xml version="1.0" encoding="UTF-8" ?>
							<response uri="/crm/private/xml/Invoices/insertRecords">
								<result>
									<row no="1">
										<success>
											<code>2002</code>
											<details>
												<FL val="Id">74812000000115062</FL>
												<FL val="Created Time">2018-01-31 10:06:52</FL>
												<FL val="Modified Time">2018-02-02 04:49:03</FL>
												<FL val="Created By"><![CDATA[admin]]></FL>
												<FL val="Modified By"><![CDATA[admin]]></FL>
											</details>
										</success>
									</row>
								</result>
							</response>
							 */
							switch ( $xmlParse->result->row->success->code ) {
								/*
								 * 2000 = Record Added Successfully
								   2001 = Record Updated Successfully
								   2002 = Record Already Exists
								 */
								case '2001':
									$fl = $xmlParse->result->details->FL[0];

									/** @var $fl SimpleXMLElement */
									$id_of_zoho = (string) $fl;
									$zoho_mess  = "Record " . $id_of_zoho . " Updated Successfully";

									$resultSend = array(
										'zoho_id'   => $id_of_zoho,
										'zoho_mess' => $zoho_mess
									);

									return $resultSend;
								case '2002':
									$resultSend = array(
										'zoho_id'   => false,
										'zoho_mess' => "Record Already Exists"
									);

									return $resultSend;
								case '2000':
									$fl = $xmlParse->result->row->success->details->FL[0];

									/** @var $fl SimpleXMLElement */
									$id_of_zoho = (string) $fl;
									$zoho_mess  = "Record Added Successfully";

									$resultSend = array(
										'zoho_id'   => $id_of_zoho,
										'zoho_mess' => $zoho_mess
									);

									return $resultSend;
							}

						} elseif ( $xmlParse->result->row->error ) {
							/*
							 * response
							 * <?xml version="1.0" encoding="UTF-8" ?>
							   <response uri="/crm/private/xml/Invoices/insertRecords">
									<result><row no="1">
										<error>
											<code>4891</code>
											<details>Mandatory Field Missing : Subject</details>
										</error>
									</row></result>
								</response>
							 */
							$resultSend = array(
								'zoho_id'   => false,
								'zoho_mess' => $xmlParse->result->row->error->code . " - " . $xmlParse->result->row->error->detail
							);

							return $resultSend;
						}
					} else {
						/*
						 * @response
						 * <response uri="/crm/private/xml/Invoices/insertRecords">
						 * <error>
								<code>4832</code>
								<message>Problem occurred while processing the request</message>
							</error>
						</response>
						 */

						$resultSend = array(
							'zoho_id'   => false,
							'zoho_mess' => $xmlParse->error->code . " - " . $xmlParse->error->message
						);

						return $resultSend;
					}
				}
			} catch ( Exception $exception ) {
				echo 'Exception Message: ' . $exception->getMessage() . '<br/>';
				echo 'Exception Trace: ' . $exception->getTraceAsString();
			}
		}

		public function SuccessNotice()
		{
			?>
			<div class="notice notice-success is-dismissible">
            <p><?php _e( $this->messNotice, 'TEXT_DOMAIN' ); ?></p>
        </div>
			<?php
		}

		public function ErrorNotice()
		{
			?>
			<div class="notice notice-error is-dismissible">
            <p><?php _e( $this->messNotice, 'TEXT_DOMAIN' ); ?></p>
        </div>
			<?php
		}

		public static function replaceSpecialCharacter( $xmlStringHasSpecialChracter )
		{
			$replaces = array(
				'%'  => '%25',
				'@' => '%40',
				'#' => '%23',
				'&'  => '%26',
				'\n' => '%0D',
				'$'  => '%24',
				'`'  => '%60',
				'^'  => '%5E',
				'['  => '%5B',
				']'  => '%5D',
			);
			$xmlData  = strtr( $xmlStringHasSpecialChracter, $replaces );

			return $xmlData;
		}
	}
endif;