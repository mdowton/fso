<?php
/*
Plugin Name: WooCommerce Pickups
Plugin URI: http://www.foxrunsoftware.net/articles/wordpress/creating-custom-plugin-for-your-woocommerce-shop/
Description: WooCommerce Pickups custom plugin
Author: Acme Corp
Author URI: http://www.acme.com
Version: 1.0.0

	Copyright: © 2012 Acme Corp (email : developer@acme.com)
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

class my_plugin {

	/**
	 * @TODO Add class constructor description.
	 */
	function __construct() {
		// Register style sheet.
		add_action( 'wp_enqueue_scripts', array( $this, 'register_plugin_styles' ) );
	}

	/**
	 * Register and enqueue style sheet.
	 */
	public function register_plugin_styles() {
		wp_register_style( 'pickup-locations', plugins_url( '/woocommerce-pickups/css/pickup-locations.css' ) );
		wp_enqueue_style( 'pickup-locations' );
	}
}

/** upload pdf file in media **/
add_action('admin_enqueue_scripts', 'my_admin_scripts');
function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'add-pickups') {
        wp_enqueue_media();
        wp_register_script('my-admin-js', WP_PLUGIN_URL.'/woocommerce-pickups/my-admin.js', array('jquery'));
        wp_enqueue_script('my-admin-js');
    }
	else{
		wp_enqueue_media();
        wp_register_script('my-admin-js', WP_PLUGIN_URL.'/woocommerce-pickups/my-admin.js', array('jquery'));
        wp_enqueue_script('my-admin-js');
	}
}

/**
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	
	if ( ! class_exists( 'WC_Pickups' ) ) {
		
		/**
		 * Localisation
		 **/
		load_plugin_textdomain( 'wc_pickups', false, dirname( plugin_basename( __FILE__ ) ) . '/' );

		class WC_Pickups {
			public function __construct() {

				add_action('admin_menu', array($this, 'add_menu'));
				
				// called after all plugins have loaded
				add_action( 'plugins_loaded', array( &$this, 'plugins_loaded' ) );
				
				// indicates we are running the admin
				if ( is_admin() ) {
					// ...
				}
				
				// indicates we are being served over ssl
				if ( is_ssl() ) {
					// ...
				}
    
				// take care of anything else that needs to be done immediately upon plugin instantiation, here in the constructor
			}
			 public function add_menu()
				 {
				 $this->page_id = add_submenu_page(
				 'woocommerce',
				 __('Pickup Locations', 'woocommerce-pickups'),
				 __('Pickup Locations', 'woocommerce-pickups'),
				 'manage_woocommerce',
				 'add-pickups',
				 array($this, 'add_pickups')
				 );
				 $this->page_id = add_submenu_page(
				 'woocommerce',
				 __('Show Pickup Locations', 'woocommerce-showpickups'),
				 __('Show Pickup Locations', 'woocommerce-showpickups'),
				 'manage_woocommerce',
				 'show-pickups',
				 array($this, 'display_pickups')
				 );
				 $this->page_id = add_submenu_page(
				 'woocommerce',
				 __('', 'woocommerce-showpickups'),
				 __('', 'woocommerce-showpickups'),
				 'manage_woocommerce',
				 'update-pickups',
				 array($this, 'update_pickups')
				 );
				 $this->page_id = add_submenu_page(
				 'woocommerce',
				 __('', 'woocommerce-showpickups'),
				 __('', 'woocommerce-showpickups'),
				 'manage_woocommerce',
				 'delete-pickups',
				 array($this, 'delete_pickups')
				 );
				 }
				 
			public function add_pickups() {
	
				?>
				<form name="woocommerce_pickups" action="" method="post">
							  <h2>Add New Pickup</h2>
							  <div class="pickups">
								  <div class="form-field form-required suburb">
									<div class="suburb_label"><label for="tag-Suburb">Suburb</label></div>
									<div class="suburb_input">
										<input type="text" name="suburb" id="pickup_suburb">
									</div>
								  </div>
								  <div class="form-field form-required suburb_address">
									<div class="suburb_addresslabel"><label for="tag-Address">Address</label></div>
									<div class="suburb_addressinput">
										<input type="text" name="address" id="pickup_suburbaddress">
									</div>
								  </div>
								  <div class="form-field form-required suburb_cost">
									<div class="suburb_costlabel"><label for="tag-Cost">Cost</label></div>
									<div class="suburb_costinput">
										<input type="text" name="cost" id="pickup_suburbcost">
									</div>
								  </div>
								  <div class="form-field form-required suburb_pickup">
									<div class="suburb_pickuplabel"><label for="tag-pickup">Pickup Type(free or paid)</label></div>
									<div class="suburb_pickupinput">
										<select name="pickup" id="pickup_suburbpickup">
										<option value="free">Free</option>
										<option value="paid">Paid</option>
										</select>
										
									</div>
									<div class="suburb_pickupinput">
										<select name="state" id="state" class="">
										  <option value="">Select an option…</option>
										  <option value="ACT">Australian Capital Territory</option>
										  <option value="NSW">New South Wales</option>
										  <option value="NT">Northern Territory</option>
										  <option value="QLD">Queensland</option>
										  <option value="SA">South Australia</option>
										  <option value="TAS">Tasmania</option>
										  <option value="VIC">Victoria</option>
										  <option value="WA">Western Australia</option>
										</select>
									</div>
								  </div> 
								
								  <p>
									  <label for="pdf_upload">
										<input id="pdf_upload" type="text" size="36" name="pdf" value="" /> 
										<input id="pdf_upload_button" class="button" type="button" value="Upload PDF" />
									  </label>
								  </p>
								  
								  <p class="submit">
								  <input type="submit" name="submit_pickups" id="submit" class="button button-primary" value="Save">
								  </p>
							  </div>
				</form> 
				<?php
			}
			
			public function display_pickups() {
					
				?>
				<?php 
				global $wpdb;
                $free_pickps = $wpdb->get_results( 
					"
					SELECT * 
					FROM wp_woocommerce_pickups
					where status = 1
					"
				);    
				?>		
				<style>
				.show_pickups {
					border-collapse: collapse;
					margin-top: .5em;
					width: 100%;
					clear: both;
					font-size: 14px;
				}
				.show_pickups th, .show_pickups td {
					vertical-align: top;
					text-align: left;
					padding: 20px 10px;
					width: 200px;
					line-height: 1.3;
				}
				.show_pickups tr:nth-child(even) {
					background-color: rgba(166, 205, 230, 0.43) !important;
				}
				.show_pickups th {
					font-size: 18px;
					font-weight: 700;
				}
				.show_pickups td {
					font-weight: 600;
				}
				</style>
				<table class="show_pickups">
					  <tr>
						<th>Suburb:</th>
						<th>Address:</th>
						<th>Cost:</th>
						<th>Pickup Type:</th>
						<th>Action</th>
					  </tr>
					  
				 <?php foreach ( $free_pickps as $free_pickp ) : ?>
					  <tr>
						<td><?php echo $free_pickp->suburb; ?></td>
						<td><?php echo $free_pickp->address; ?></td>
						<td><?php echo $free_pickp->cost; ?></td>
						<td><?php echo $free_pickp->pickup; ?></td>
						<td><a href="?page=update-pickups&edit=<?php echo $free_pickp->location_id; ?>">EDIT</a> | <a href="?page=delete-pickups&delete=<?php echo $free_pickp->location_id; ?>">DELETE</a></td>
					  </tr>
				 <?php endforeach; ?>
				</table>
				
				
				<?php
			}
			public function delete_pickups() {
						global $wpdb;
							echo $location_id = $_GET['delete'];
							 $success = $wpdb->update( 
							 'wp_woocommerce_pickups', 
								 array( 
									'status' => 0
								 ),
                                 array( 'location_id' => $location_id ), 								 
								 array( 
								  '%d'    
								 ) ,
								 '%d'
							 );
										
							 if($success) {
								echo ' Delete successfully';
								wp_redirect('/wp-admin/admin.php?page=show-pickups');
							 } 
							 else {
								echo "not";
							  }
			}
			public function update_pickups() {
				global $wpdb;
				$edit = $_GET['edit'];
                $free_pickp = $wpdb->get_results( 
					"
					SELECT * 
					FROM wp_woocommerce_pickups where location_id = $edit
					"
				);				
				?>
				<form name="woocommerce_update_pickups" action="" method="post">
							  <h2>update Pickup</h2>
							  <div class="pickups">
								  <div class="form-field form-required suburb">
									<div class="suburb_label"><label for="tag-Suburb">Suburb</label></div>
									<div class="suburb_input">
								<input type="text" name="suburb" id="pickup_suburb" value="<?php echo $free_pickp[0]->suburb; ?>">
									</div>
								  </div>
								  <div class="form-field form-required suburb_address">
									<div class="suburb_addresslabel"><label for="tag-Address">Address</label></div>
									<div class="suburb_addressinput">
						<input type="text" name="address" id="pickup_suburbaddress" value="<?php echo $free_pickp[0]->address; ?>">
									</div>
								  </div>
								  <div class="form-field form-required suburb_cost">
									<div class="suburb_costlabel"><label for="tag-Cost">Cost</label></div>
									<div class="suburb_costinput">
								<input type="text" name="cost" id="pickup_suburbcost" value="<?php echo $free_pickp[0]->cost; ?>">
									</div>
								  </div>
								  <div class="form-field form-required suburb_pickup">
									<div class="suburb_pickuplabel"><label for="tag-pickup">Pickup Type(free or paid)</label></div>
									<div class="suburb_pickupinput">
										<select name="pickup" id="pickup_suburbpickup">
										<option value="free" <?php if( $free_pickp[0]->pickup == "free"){ echo "selected"; } else { ""; } ?> >Free</option>
										<option value="paid" <?php if( $free_pickp[0]->pickup == "paid"){ echo "selected"; } else { ""; } ?>>Paid</option>
										</select>
									</div>
									<div class="suburb_pickupinput">
										<select name="state" id="state" class="">
										  <option value="">Select an option…</option>
										  <option value="ACT"  <?php if( $free_pickp[0]->state == "ACT"){ echo "selected"; } else { ""; } ?>>Australian Capital Territory</option>
										  <option value="NSW"  <?php if( $free_pickp[0]->state == "NSW"){ echo "selected"; } else { ""; } ?>>New South Wales</option>
										  <option value="NT"  <?php if( $free_pickp[0]->state == "NT"){ echo "selected"; } else { ""; } ?>>Northern Territory</option>
										  <option value="QLD"  <?php if( $free_pickp[0]->state == "QLD"){ echo "selected"; } else { ""; } ?>>Queensland</option>
										  <option value="SA"  <?php if( $free_pickp[0]->state == "SA"){ echo "selected"; } else { ""; } ?>>South Australia</option>
										  <option value="TAS"  <?php if( $free_pickp[0]->state == "TAS"){ echo "selected"; } else { ""; } ?>>Tasmania</option>
										  <option value="VIC"  <?php if( $free_pickp[0]->state == "VIC"){ echo "selected"; } else { ""; } ?>>Victoria</option>
										  <option value="WA"  <?php if( $free_pickp[0]->state == "WA"){ echo "selected"; } else { ""; } ?>>Western Australia</option>
										</select>
									</div>
								  </div>
								  
								  <p>
									 <label for="pdf_upload">
										<input id="pdf_upload" type="text" size="36" name="pdf" value="<?php echo $free_pickp[0]->pdf; ?>" /> 
										<input id="pdf_upload_button" class="button" type="button" value="Upload PDF" />  
									 </label>
								  </p>
								  
								  <p class="submit">
								  <input type="submit" name="update_pickups" id="submit" class="button button-primary" value="Save">
								  </p>
							  </div>
				</form> 
				<?php
			}

			
			/**
			 * Take care of anything that needs all plugins to be loaded
			 */
			public function plugins_loaded() {
				// ...
					if(isset($_POST['submit_pickups']))
						{ 
							global $wpdb;
							$suburb = $_POST['suburb'];
							$address = $_POST['address'];
							$cost = $_POST['cost'];
							$pickup = $_POST['pickup'];
		                    $state = $_POST['state'];
							$pdf = $_POST['pdf'];
							 $success = $wpdb->insert( 
							 'wp_woocommerce_pickups', 
								 array( 
									'suburb' => $suburb, 
									'address' => $address,
									'cost' => $cost,
									'pickup' => $pickup,
									'state' => $state,
									'pdf' => $pdf,
									'status' => 1
								 ), 
								 array( 
								  '%s', 
								  '%s', 
								  '%d',
								  '%s',
                                  '%s',
								  '%s',
								  '%d'
								 ) 
							 );
										
							 if($success) {
								echo ' Inserted successfully';
							 } 
							 else {
								echo 'not';
							  }
						  
						}
					if(isset($_POST['update_pickups']))
						{ 
					
							global $wpdb;
							$location_id = $_GET['edit'];
							$suburb = $_POST['suburb'];
							$state = $_POST['state'];
							$address = $_POST['address'];
							$cost = $_POST['cost'];
							$pickup = $_POST['pickup'];
							$pdf = $_POST['pdf'];
							
							 $success = $wpdb->update( 
							 'wp_woocommerce_pickups', 
								 array( 
									'suburb' => $suburb, 
									'address' => $address,
									'state' => $state,
									'cost' => $cost,
									'pickup' => $pickup,
									'pdf' => $pdf
								 ),
                                 array( 'location_id' => $location_id ), 								 
								 array( 
								  '%s', 
								  '%s', 
								  '%s',
								  '%d',
								  '%s',
								  '%s'
								 ) ,
								 '%d'
							 );
										
							 if($success) {
								echo ' update successfully';
							 } 
							 else {
								echo "not";
							  }
						  
						}
						if(isset($_GET['page']) == 'delete-pickups' )
						{ 
					
							global $wpdb;
							$location_id = isset($_GET['delete']);
							 $success = $wpdb->update( 
							 'wp_woocommerce_pickups', 
								 array( 
									'status' => 0
								 ),
                                 array( 'location_id' => $location_id ), 								 
								 array( 
								  '%d'    
								 ) ,
								 '%d'
							 );
										
							 if($success) {
								echo ' Delete successfully';
								wp_redirect('/wp-admin/admin.php?page=show-pickups');
							 } 
							 else {
								echo "not";
							  }
						  
						}
			}
			
		}

		// finally instantiate our plugin class and add it to the set of globals
		$GLOBALS['wc_pickups'] = new WC_Pickups();
	}
}