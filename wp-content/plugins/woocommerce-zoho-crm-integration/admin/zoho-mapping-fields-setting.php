<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (  !class_exists( 'HN_Zoho_Fields_Mapping' ) ) {
	class HN_Zoho_Fields_Mapping {
	    
	    private $messNotice;

        /**
         * get field mapping
         * @param $zohoModule
         * @param $zohoFields
         * @return array|null|object
         */
        public  function getOption($zohoModule = null, $zohoFields = null, $woocAction = null) {
            global  $wpdb;
            $mapTbl = $wpdb->prefix . 'hn_zoho_crm_field_mapping';

            $query =  "SELECT * FROM {$mapTbl}";
            if (!empty($zohoModule)) {
                $query .= " WHERE `zoho_module` = '{$zohoModule}'";
                if (!empty($zohoFields)){
                    $query .= " AND `zoho_field` = '{$zohoFields}' ";
                }
                if (!empty($woocAction)){
                    $query .= " AND `wooc_action` = '{$woocAction}' ";
                }
            }
            $row = $wpdb->get_results($query);

            return $row;
        }

		public function process() {
            global  $wpdb;
            $mapTbl = $wpdb->prefix . 'hn_zoho_crm_field_mapping';
            if ($_GET['action'] == 'delete'){
                if (false != $wpdb->delete($mapTbl, array('id' =>$_GET['id'] ))){
	                set_transient( 'zoho-success', "Delete successful", 5 );
                } else {
	                set_transient( 'zoho-error', "Could not be deleted. Please try again", 5 );
                }

            }
            if (!empty($_POST)) {
                $data = array(
                    'wooc_field' => $_POST['wooc-field-mapping'],
                    'zoho_field' => $_POST['zoho-field-mapping'],
                    'zoho_module' => $_POST['zoho-module'],
                    'wooc_action' => $_POST['wooc-action'],
                    'enable' => empty($_POST['status']) ? 0 : 1
                );



                if ($_POST['submit'] == "Save edit"){
                    if (false != $wpdb->update($mapTbl, $data, array('id' =>$_POST['id'] ))){
	                    set_transient( 'zoho-success', "Edit successful", 5 );
                    } else {
	                    set_transient( 'zoho-error', "Could not be edited. Please check again", 5 );
                    }
                }


                if ($_POST['submit'] == "Save & Add new" || $_POST['submit'] == "Save"){
                    // check exitance of field mapping
                    if ( empty( $this->getOption( $_POST['zoho-module'],$_POST['zoho-field-mapping'], $_POST['wooc-action'] ) ) ){
                        if ($wpdb->insert($mapTbl, $data) != false){
	                        set_transient( 'zoho-success', "Add successful", 5 );
                        } else {
	                        set_transient( 'zoho-error', "Could not be inserted. Please check again", 5 );
                        }
	                    if ($_POST['submit'] == "Save & Add new")
                            wp_redirect(admin_url('admin.php?page=zoho-field-mapping&action=add'));
                    } else {
	                    set_transient( 'zoho-error', "The field mapping already exist. Please check again", 5 );
                    }
                }

            }
			
		}


		public function output() {
            // process edit, new, delete
            if (isset($_POST['submit']) && $_POST['submit'] == "Save edit" ) {
                $this->process();
	            wp_redirect($_SERVER['HTTP_REFERER']);
            }
            if (isset($_POST['submit']) && ($_POST['submit'] == "Save" || $_POST['submit'] == "Save & Add new" ) ) {
                $this->process() ;
	            wp_redirect($_SERVER['HTTP_REFERER']);
            }

            if ($_GET['action'] == 'delete'){
                $this->process();
	            wp_redirect($_SERVER['HTTP_REFERER']);
            }

            if ($_GET['action'] == 'edit' || $_GET['action'] == 'add'){
                $this->editFieldsMapping($_GET['id']);
            }
            else
                // show field mapping
                $this->tableMapping();
		}

		public function tableMapping(){
            $fields = $this->getOption();
            ?>
            <h2>All fields mapping sync to Zoho</h2>
            <table id="fields-mapping-table">
                <thead>
                    <th><?php echo __('ID','TEXT_DOMAIN') ?></th>
                    <th><?php echo  __('WooCommerce fields', 'TEXT_DOMAIN') ?></th>
                    <th><?php echo __('Zoho fields', 'TEXT_DOMAIN') ?></th>
                    <th><?php echo __('Zoho module', 'TEXT_DOMAIN') ?></th>
                    <th><?php echo __('Woocommerce Action', 'TEXT_DOMAIN') ?></th>
                    <th><?php echo __('Status', 'TEXT_DOMAIN') ?></th>
                    <th><?php echo __('Action', 'TEXT_DOMAIN') ?></th>
                </thead>
                <tbody>
                <?php
                foreach ( $fields as $row ) {
                    ?>
                    <tr>
                        <td> <?php echo $row->id ?></td>
                        <td> <?php echo $row->wooc_field ?></td>
                        <td> <?php echo $row->zoho_field ?></td>
                        <td> <?php echo $row->zoho_module ?></td>
                        <td> <?php echo $row->wooc_action ?></td>
                        <td> <?php echo ($row->enable == 1) ? 'on' : 'off'  ?></td>
                        <td><a href="<?php echo admin_url('admin.php?page=zoho-field-mapping&action=edit&id='.$row->id) ?>">Edit</a> | <a href="<?php echo admin_url('admin.php?page=zoho-field-mapping&action=delete&id='.$row->id) ?>">Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>

            <a href="<?php echo admin_url('admin.php?page=zoho-field-mapping&action=add') ?>" class="button">Add new</a>
            <script type="text/javascript">
                jQuery(document).ready( function () {
                    jQuery('#fields-mapping-table').DataTable();
                } );
            </script>
            <?php
        }

        public function editFieldsMapping($id){
            if (!empty($id)){
                global  $wpdb;
                $mapTbl = $wpdb->prefix . 'hn_zoho_crm_field_mapping';
                $query =  "SELECT * FROM {$mapTbl} WHERE `id` = {$id}";
                $result = $wpdb->get_row($query, ARRAY_A);
                $woocAction = $result['wooc_action'];
                $zohoModule = $result['zoho_module'];
                $wooFields = $result['wooc_field'];
                $zohoFields = $result['zoho_field'];
                $status = $result['status'];
            }
            ?>
            <br/>
            <a href="<?php echo admin_url('admin.php?page=zoho-field-mapping') ?>"><-- Back</a>
            <h2>Add/Edit Field Mapping</h2>

            <form action="<?php echo admin_url('admin.php?page=zoho-field-mapping') ?>" method="post">
                <div class="right" style="float: right; margin: 5px 25px;">
                    <div class="type" style="margin: 5px" >
                        <label for="type" style="margin-right:30px;font-weight: bold;">Zoho Module</label>
                        <select name="zoho-module" id="zoho-module" style="width:150px;">
                            <option value="Leads" <?php echo ($zohoModule == 'Leads') ? 'selected' : ''; ?> >Leads</option>
                            <option value="Accounts" <?php echo ($zohoModule == 'Accounts') ? 'selected' : ''; ?> >Accounts</option>
                            <option value="Contacts" <?php echo ($zohoModule == 'Contacts') ? 'selected' : ''; ?> >Contacts</option>
                            <option value="Campaigns" <?php echo ($zohoModule == 'Campaigns') ? 'selected' : ''; ?>  disabled="disabled">Campaigns</option>
                            <option value="Products" <?php echo ($zohoModule == 'Products') ? 'selected' : ''; ?>>Products</option>
<!--                            <option value="PriceBooks" --><?php //echo ($zohoModule == 'PriceBooks') ? 'selected' : ''; ?><!-->Price Books</option>-->
                            <option value="Invoices" <?php echo ($zohoModule == 'Invoices') ? 'selected' : ''; ?>>Invoices</option>
                            <option value="SalesOrders" <?php echo ($zohoModule == 'SalesOrders') ? 'selected' : ''; ?>>Sales Orders</option>
                            <option value="PurchaseOrders" <?php echo ($zohoModule == 'PurchaseOrders') ? 'selected' : ''; ?>>Purchase Orders</option>
                        </select>
                    </div>

                    <div class="zoho-field"  style="margin: 5px">
                        <label for="zoho-field" style="margin-right:50px;font-weight: bold;">Zoho field</label>
                        <!-- Leads -->
                        <select name="zoho-field-mapping" style="width:200px;" id="zoho-leads">
                            <option value="Lead Owner" <?php echo ($zohoFields == 'Lead Owner') ? 'selected' : ''; ?>>Lead Owner</option>
                            <option value="Salutation" <?php echo ($zohoFields == 'Salutation') ? 'selected' : ''; ?>>Salutation</option>
                            <option value="First Name" <?php echo ($zohoFields == 'First Name') ? 'selected' : ''; ?>>First Name</option>
                            <option value="Title" <?php echo ($zohoFields == 'Title') ? 'selected' : ''; ?>>Title</option>
                            <option value="Last Name" <?php echo ($zohoFields == 'Last Name') ? 'selected' : ''; ?>>Last Name</option>
                            <option value="Company" <?php echo ($zohoFields == 'Company') ? 'selected' : ''; ?>>Company</option>
                            <option value="Lead Source" <?php echo ($zohoFields == 'Lead Source') ? 'selected' : ''; ?>>Lead Source</option>
                            <option value="Industry" <?php echo ($zohoFields == 'Industry') ? 'selected' : ''; ?>>Industry</option>
                            <option value="Annual Revenue" <?php echo ($zohoFields == 'Annual Revenue') ? 'selected' : ''; ?>>Annual Revenue</option>
                            <option value="Phone" <?php echo ($zohoFields == 'Phone') ? 'selected' : ''; ?>>Phone</option>
                            <option value="Mobile" <?php echo ($zohoFields == 'Mobile') ? 'selected' : ''; ?>>Mobile</option>
                            <option value="Fax" <?php echo ($zohoFields == 'Fax') ? 'selected' : ''; ?>>Fax</option>
                            <option value="Email" <?php echo ($zohoFields == 'Email') ? 'selected' : ''; ?>>Email</option>
                            <option value="Secondary Email" <?php echo ($zohoFields == 'Secondary Email') ? 'selected' : ''; ?>>Secondary Email</option>
                            <option value="Skype ID" <?php echo ($zohoFields == 'Skype ID') ? 'selected' : ''; ?>>Skype ID</option>
                            <option value="Website" <?php echo ($zohoFields == 'Website') ? 'selected' : ''; ?>>Website</option>
                            <option value="Lead Status" <?php echo ($zohoFields == 'Lead Status') ? 'selected' : ''; ?>>Lead Status</option>
                            <option value="Street" <?php echo ($zohoFields == 'Street') ? 'selected' : ''; ?>>Street</option>
                            <option value="City" <?php echo ($zohoFields == 'City') ? 'selected' : ''; ?>>City</option>
                            <option value="State" <?php echo ($zohoFields == 'State') ? 'selected' : ''; ?>>State</option>
                            <option value="Zip Code" <?php echo ($zohoFields == 'Zip Code') ? 'selected' : ''; ?>>Zip Code</option>
                            <option value="Country" <?php echo ($zohoFields == 'Country') ? 'selected' : ''; ?>>Country</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?>>Description</option>
                        </select>

                        <!-- Accounts -->
                        <select name="zoho-field-mapping" id="zoho-accounts" style="display: none;">
                            <option value="Account Name" <?php echo ($zohoFields == 'Account Name') ? 'selected' : ''; ?> >Account Name</option>
                            <option value="Account Owner" <?php echo ($zohoFields == 'Account Owner') ? 'selected' : ''; ?> >Account Owner</option>
                            <option value="Website" <?php echo ($zohoFields == 'Website') ? 'selected' : ''; ?> >Website</option>
                            <option value="Ticker Symbol" <?php echo ($zohoFields == 'Ticker Symbol') ? 'selected' : ''; ?> >Ticker Symbol</option>
                            <option value="Parent Account" <?php echo ($zohoFields == 'Parent Account') ? 'selected' : ''; ?> >Parent Account</option>
                            <option value="Employees" <?php echo ($zohoFields == 'Employees') ? 'selected' : ''; ?> >Employees</option>
                            <option value="Ownership" <?php echo ($zohoFields == 'Ownership') ? 'selected' : ''; ?> >Ownership</option>
                            <option value="Industry" <?php echo ($zohoFields == 'Industry') ? 'selected' : ''; ?> >Industry</option>
                            <option value="Account Type" <?php echo ($zohoFields == 'Account Type') ? 'selected' : ''; ?> >Account Type</option>
                            <option value="Account Number" <?php echo ($zohoFields == 'Account Number') ? 'selected' : ''; ?> >Account Number</option>
                            <option value="Account Site" <?php echo ($zohoFields == 'Account Site') ? 'selected' : ''; ?> >Account Site</option>
                            <option value="Phone" <?php echo ($zohoFields == 'Phone') ? 'selected' : ''; ?> >Phone</option>
                            <option value="Fax" <?php echo ($zohoFields == 'Fax') ? 'selected' : ''; ?> >Fax</option>
                            <option value="E-mail" <?php echo ($zohoFields == 'E-mail') ? 'selected' : ''; ?> >E-mail</option>
                            <option value="Rating" <?php echo ($zohoFields == 'Rating') ? 'selected' : ''; ?> >Rating</option>
                            <option value="SIC Code" <?php echo ($zohoFields == 'SIC Code') ? 'selected' : ''; ?> >SIC Code</option>
                            <option value="Annual Revenue" <?php echo ($zohoFields == 'Annual Revenue') ? 'selected' : ''; ?> >Annual Revenue</option>
                            <option value="Billing Street" <?php echo ($zohoFields == 'Billing Street') ? 'selected' : ''; ?> >Billing Street</option>
                            <option value="Billing City" <?php echo ($zohoFields == 'Billing City') ? 'selected' : ''; ?> >Billing City</option>
                            <option value="Billing State" <?php echo ($zohoFields == 'Billing State') ? 'selected' : ''; ?> >Billing State</option>
                            <option value="Billing Code" <?php echo ($zohoFields == 'Billing Code') ? 'selected' : ''; ?> >Billing Code</option>
                            <option value="Billing Country" <?php echo ($zohoFields == 'Billing Country') ? 'selected' : ''; ?> >Billing Country</option>
                            <option value="Shipping Street" <?php echo ($zohoFields == 'Shipping Street') ? 'selected' : ''; ?> >Shipping Street</option>
                            <option value="Shipping City" <?php echo ($zohoFields == 'Shipping City') ? 'selected' : ''; ?> >Shipping City</option>
                            <option value="Shipping State" <?php echo ($zohoFields == 'Shipping State') ? 'selected' : ''; ?> >Shipping State</option>
                            <option value="Shipping Code" <?php echo ($zohoFields == 'Shipping Code') ? 'selected' : ''; ?> >Shipping Code</option>
                            <option value="Shipping Country" <?php echo ($zohoFields == 'Shipping Country') ? 'selected' : ''; ?> >Shipping Country</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>
                        </select>

                        <!-- Contacts -->
                        <select name="zoho-field-mapping" id="zoho-contacts" style="display: none;">
                            <option value="Contact Owner" <?php echo ($zohoFields == 'Contact Owner') ? 'selected' : ''; ?>>Contact Owner</option>
                            <option value="Salutation" <?php echo ($zohoFields == 'Salutation') ? 'selected' : ''; ?>>Salutation</option>
                            <option value="First Name" <?php echo ($zohoFields == 'First Name') ? 'selected' : ''; ?>>First Name</option>
                            <option value="Last Name" <?php echo ($zohoFields == 'Last Name') ? 'selected' : ''; ?>>Last Name</option>
                            <option value="Account Name" <?php echo ($zohoFields == 'Account Name') ? 'selected' : ''; ?>>Account Name</option>
                            <option value="Vendor Name" <?php echo ($zohoFields == 'Vendor Name') ? 'selected' : ''; ?>>Vendor Name</option>
                            <option value="Campaign Source" <?php echo ($zohoFields == 'Campaign Source') ? 'selected' : ''; ?>>Campaign Source</option>
                            <option value="Lead Source" <?php echo ($zohoFields == 'Lead Source') ? 'selected' : ''; ?>>Lead Source</option>
                            <option value="Title" <?php echo ($zohoFields == 'Title') ? 'selected' : ''; ?>>Title</option>
                            <option value="Department" <?php echo ($zohoFields == 'Department') ? 'selected' : ''; ?>>Department</option>
                            <option value="Date of Birth" <?php echo ($zohoFields == 'Date of Birth') ? 'selected' : ''; ?>>Date of Birth</option>
                            <option value="Reports To" <?php echo ($zohoFields == 'Reports To') ? 'selected' : ''; ?>>Reports To</option>
                            <option value="Email Opt Out" <?php echo ($zohoFields == 'Email Opt Out') ? 'selected' : ''; ?>>Email Opt Out</option>
                            <option value="Skype Id" <?php echo ($zohoFields == 'Skype Id') ? 'selected' : ''; ?>>Skype Id</option>
                            <option value="Phone" <?php echo ($zohoFields == 'Phone') ? 'selected' : ''; ?>>Phone</option>
                            <option value="Mobile" <?php echo ($zohoFields == 'Mobile') ? 'selected' : ''; ?>>Mobile</option>
                            <option value="Home Phone" <?php echo ($zohoFields == 'Home Phone') ? 'selected' : ''; ?>>Home Phone</option>
                            <option value="Other Phone" <?php echo ($zohoFields == 'Other Phone') ? 'selected' : ''; ?>>Other Phone</option>
                            <option value="Fax" <?php echo ($zohoFields == 'Fax') ? 'selected' : ''; ?>>Fax</option>
                            <option value="Email" <?php echo ($zohoFields == 'Email') ? 'selected' : ''; ?>>Email</option>
                            <option value="Secondary Email" <?php echo ($zohoFields == 'Secondary Email') ? 'selected' : ''; ?>>Secondary Email</option>
                            <option value="Assistant" <?php echo ($zohoFields == 'Assistant') ? 'selected' : ''; ?>>Assistant</option>
                            <option value="Asst Phone" <?php echo ($zohoFields == 'Asst Phone') ? 'selected' : ''; ?>>Asst Phone</option>
                            <option value="Mailing Street" <?php echo ($zohoFields == 'Mailing Street') ? 'selected' : ''; ?>>Mailing Street</option>
                            <option value="Mailing City" <?php echo ($zohoFields == 'Mailing City') ? 'selected' : ''; ?>>Mailing City</option>
                            <option value="Mailing State" <?php echo ($zohoFields == 'Mailing State') ? 'selected' : ''; ?>>Mailing State</option>
                            <option value="Mailing Zip" <?php echo ($zohoFields == 'Mailing Zip') ? 'selected' : ''; ?>>Mailing Zip</option>
                            <option value="Mailing Country" <?php echo ($zohoFields == 'Mailing Country') ? 'selected' : ''; ?>>Mailing Country</option>

                            <option value="Other Country" <?php echo ($zohoFields == 'Other Country') ? 'selected' : ''; ?>>Other Country</option>
                            <option value="Other Street" <?php echo ($zohoFields == 'Other Street') ? 'selected' : ''; ?>>Other Street</option>
                            <option value="Other City" <?php echo ($zohoFields == 'Other City') ? 'selected' : ''; ?>>Other City</option>
                            <option value="Other State" <?php echo ($zohoFields == 'Other State') ? 'selected' : ''; ?>>Other State</option>
                            <option value="Other Zip" <?php echo ($zohoFields == 'Other Zip') ? 'selected' : ''; ?>>Other Zip</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>

                        </select>

                        <!--Campaigns-->
                        <select name="zoho-field-mapping" id="zoho-campaingns" style="display: none;">
                            <option value="Campaign Owner" <?php echo ($zohoFields == 'Campaign Owner') ? 'selected' : ''; ?> >Campaign Owner</option>
                            <option value="Campaign Name" <?php echo ($zohoFields == 'Campaign Name') ? 'selected' : ''; ?> >Campaign Name</option>
                            <option value="Type" <?php echo ($zohoFields == 'Type') ? 'selected' : ''; ?> >Type</option>
                            <option value="Status" <?php echo ($zohoFields == 'Status') ? 'selected' : ''; ?> >Status</option>
                            <option value="Start Date" <?php echo ($zohoFields == 'Start Date') ? 'selected' : ''; ?> >Start Date</option>
                            <option value="End Date" <?php echo ($zohoFields == 'End Date') ? 'selected' : ''; ?> >End Date</option>
                            <option value="Expected Revenue" <?php echo ($zohoFields == 'Expected Revenue') ? 'selected' : ''; ?> >Expected Revenue</option>
                            <option value="Actual Cost" <?php echo ($zohoFields == 'Actual Cost') ? 'selected' : ''; ?> >Actual Cost</option>
                            <option value="Budgeted Cost" <?php echo ($zohoFields == 'Budgeted Cost') ? 'selected' : ''; ?> >Budgeted Cost</option>
                            <option value="Expected Response" <?php echo ($zohoFields == 'Expected Response') ? 'selected' : ''; ?> >Expected Response</option>
                            <option value="Num sent" <?php echo ($zohoFields == 'Num sent') ? 'selected' : ''; ?> >Num sent</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>

                        </select>

                        <!--Products-->
                        <select name="zoho-field-mapping" id="zoho-products" style="display: none;">
                            <option value="Product Name" <?php echo ($zohoFields == 'Product Name') ? 'selected' : ''; ?> >Product Name</option>
                            <option value="Product Owner" <?php echo ($zohoFields == 'Product Owner') ? 'selected' : ''; ?> >Product Owner</option>
                            <option value="Product Code" <?php echo ($zohoFields == 'Product Code') ? 'selected' : ''; ?> >Product Code</option>
                            <option value="Product Active" <?php echo ($zohoFields == 'Product Active') ? 'selected' : ''; ?> >Product Active</option>
                            <option value="Vendor Name" <?php echo ($zohoFields == 'Vendor Name') ? 'selected' : ''; ?> >Vendor Name</option>
                            <option value="Product Category" <?php echo ($zohoFields == 'Product Category') ? 'selected' : ''; ?> >Product Category</option>
                            <option value="Sales Start Date" <?php echo ($zohoFields == 'Sales Start Date') ? 'selected' : ''; ?> >Sales Start Date</option>
                            <option value="Sales End Date" <?php echo ($zohoFields == 'Sales End Date') ? 'selected' : ''; ?> >Sales End Date</option>
                            <option value="Commission Rate" <?php echo ($zohoFields == 'Commission Rate') ? 'selected' : ''; ?> >Commission Rate</option>
                            <option value="Manufacturer" <?php echo ($zohoFields == 'Manufacturer') ? 'selected' : ''; ?> >Manufacturer</option>
                            <option value="Unit Price" <?php echo ($zohoFields == 'Unit Price') ? 'selected' : ''; ?> >Unit Price</option>
                            <option value="Taxable" <?php echo ($zohoFields == 'Taxable') ? 'selected' : ''; ?> >Taxable</option>
                            <option value="Product Category" <?php echo ($zohoFields == 'Product Category') ? 'selected' : ''; ?> >Product Category</option>
                            <option value="Support Start Date" <?php echo ($zohoFields == 'Support Start Date') ? 'selected' : ''; ?> >Support Start Date</option>
                            <option value="Support Expiry Date" <?php echo ($zohoFields == 'Support Expiry Date') ? 'selected' : ''; ?> >Support Expiry Date</option>
                            <option value="Usage Unit" <?php echo ($zohoFields == 'Usage Unit') ? 'selected' : ''; ?> >Usage Unit</option>
                            <option value="Qty Ordered" <?php echo ($zohoFields == 'Qty Ordered') ? 'selected' : ''; ?> >Qty Ordered</option>
                            <option value="Qty in Stock" <?php echo ($zohoFields == 'Qty in Stock') ? 'selected' : ''; ?> >Qty in Stock</option>
                            <option value="Reorder Level" <?php echo ($zohoFields == 'Reorder Level') ? 'selected' : ''; ?> >Reorder Level</option>
                            <option value="Handler" <?php echo ($zohoFields == 'Handler') ? 'selected' : ''; ?> >Handler</option>
                            <option value="Qty in Demand" <?php echo ($zohoFields == 'Qty in Demand') ? 'selected' : ''; ?> >Qty in Demand</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>

                        </select>

                        <!--Sales Orders-->
                        <select name="zoho-field-mapping" id="zoho-sale-orders" style="display: none;">
                            <option value="Sales Order Owner" <?php echo ($zohoFields == 'Sales Order Owner') ? 'selected' : ''; ?> >Sales Order Owner</option>
                            <option value="SO Number" <?php echo ($zohoFields == 'SO Number') ? 'selected' : ''; ?> >SO Number</option>
                            <option value="Subject" <?php echo ($zohoFields == 'Subject') ? 'selected' : ''; ?> >Subject</option>
                            <option value="Potential Name" <?php echo ($zohoFields == 'Potential Name') ? 'selected' : ''; ?> >Potential Name</option>
                            <option value="Customer No" <?php echo ($zohoFields == 'Customer No') ? 'selected' : ''; ?> >Customer No</option>
                            <option value="Purchase Order" <?php echo ($zohoFields == 'Purchase Order') ? 'selected' : ''; ?> >Purchase Order</option>
                            <option value="Quote Name" <?php echo ($zohoFields == 'Quote Name') ? 'selected' : ''; ?> >Quote Name</option>
                            <option value="Contact Name" <?php echo ($zohoFields == 'Contact Name') ? 'selected' : ''; ?> >Contact Name</option>
                            <option value="Due Date" <?php echo ($zohoFields == 'Due Date') ? 'selected' : ''; ?> >Due Date</option>
                            <option value="Carrier" <?php echo ($zohoFields == 'Carrier') ? 'selected' : ''; ?> >Carrier</option>
                            <option value="Pending" <?php echo ($zohoFields == 'Pending') ? 'selected' : ''; ?> >Pending</option>
                            <option value="Status" <?php echo ($zohoFields == 'Status') ? 'selected' : ''; ?> >Status</option>
                            <option value="Sales Commission" <?php echo ($zohoFields == 'Sales Commission') ? 'selected' : ''; ?> >Sales Commission</option>
                            <option value="Excise Duty" <?php echo ($zohoFields == 'Excise Duty') ? 'selected' : ''; ?> >Excise Duty</option>
                            <option value="Account Name" <?php echo ($zohoFields == 'Account Name') ? 'selected' : ''; ?> >Account Name</option>
                            <option value="Assigned To" <?php echo ($zohoFields == 'Assigned To') ? 'selected' : ''; ?> >Assigned To</option>
                            <option value="Billing Street" <?php echo ($zohoFields == 'Billing Street') ? 'selected' : ''; ?> >Billing Street</option>
                            <option value="Billing City" <?php echo ($zohoFields == 'Billing City') ? 'selected' : ''; ?> >Billing City</option>
                            <option value="Billing State" <?php echo ($zohoFields == 'Billing State') ? 'selected' : ''; ?> >Billing State</option>
                            <option value="Billing Zip" <?php echo ($zohoFields == 'Billing Zip') ? 'selected' : ''; ?> >Billing Zip</option>
                            <option value="Billing Country" <?php echo ($zohoFields == 'Billing Country') ? 'selected' : ''; ?> >Billing Country</option>
                            <option value="Shipping Street" <?php echo ($zohoFields == 'Shipping Street') ? 'selected' : ''; ?> >Shipping Street</option>
                            <option value="Shipping City" <?php echo ($zohoFields == 'Shipping City') ? 'selected' : ''; ?> >Shipping City</option>
                            <option value="Shipping State" <?php echo ($zohoFields == 'Shipping State') ? 'selected' : ''; ?> >Shipping State</option>
                            <option value="Shipping Zip" <?php echo ($zohoFields == 'Shipping Zip') ? 'selected' : ''; ?> >Shipping Zip</option>
                            <option value="Shipping Country" <?php echo ($zohoFields == 'Shipping Country') ? 'selected' : ''; ?> >Shipping Country</option>
                            <option value="Product Name" <?php echo ($zohoFields == 'Product Name') ? 'selected' : ''; ?> >Product Name</option>
                            <option value="Quantity in Stock" <?php echo ($zohoFields == 'Quantity in Stock') ? 'selected' : ''; ?> >Quantity in Stock</option>
                            <option value="Quantity" <?php echo ($zohoFields == 'Quantity') ? 'selected' : ''; ?> >Quantity</option>
                            <option value="Unit Price" <?php echo ($zohoFields == 'Unit Price') ? 'selected' : ''; ?> >Unit Price</option>
                            <option value="List Price" <?php echo ($zohoFields == 'List Price') ? 'selected' : ''; ?> >List Price</option>
                            <option value="Tax" <?php echo ($zohoFields == 'Tax') ? 'selected' : ''; ?> >Tax</option>
                            <option value="Adjustments" <?php echo ($zohoFields == 'Adjustments') ? 'selected' : ''; ?> >Adjustments</option>
                            <option value="Total" <?php echo ($zohoFields == 'Total') ? 'selected' : ''; ?> >Total</option>
                            <option value="Terms & Conditions" <?php echo ($zohoFields == 'Terms & Conditions') ? 'selected' : ''; ?> >Terms & Conditions</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>

                        </select>

                        <!--Invoices-->
                        <select name="zoho-field-mapping" id="zoho-invoices" style="display: none;">
                            <option value="Invoice Owner" <?php echo ($zohoFields == 'Invoice Owner') ? 'selected' : ''; ?> >Invoice Owner</option>
                            <option value="Invoice Number" <?php echo ($zohoFields == 'Invoice Number') ? 'selected' : ''; ?> >Invoice Number</option>
                            <option value="Subject" <?php echo ($zohoFields == 'Subject') ? 'selected' : ''; ?> >Subject</option>
                            <option value="Sales Order" <?php echo ($zohoFields == 'Sales Order') ? 'selected' : ''; ?> >Sales Order</option>
                            <option value="Purchase Order" <?php echo ($zohoFields == 'Purchase Order') ? 'selected' : ''; ?> >Purchase Order</option>
                            <option value="Customer No" <?php echo ($zohoFields == 'Customer No') ? 'selected' : ''; ?> >Customer No</option>
                            <option value="Excise Duty" <?php echo ($zohoFields == 'Excise Duty') ? 'selected' : ''; ?> >Excise Duty</option>
                            <option value="Invoice Date" <?php echo ($zohoFields == 'Invoice Date') ? 'selected' : ''; ?> >Invoice Date</option>
                            <option value="Due Date" <?php echo ($zohoFields == 'Due Date') ? 'selected' : ''; ?> >Due Date</option>
                            <option value="Sales Commission" <?php echo ($zohoFields == 'Sales Commission') ? 'selected' : ''; ?> >Sales Commission</option>
                            <option value="Grand Total" <?php echo ($zohoFields == 'Grand Total') ? 'selected' : ''; ?> >Grand Total</option>
                            <option value="Sub Total" <?php echo ($zohoFields == 'Sub Total') ? 'selected' : ''; ?> >Sub Total</option>
                            <option value="Adjustment" <?php echo ($zohoFields == 'Adjustment') ? 'selected' : ''; ?> >Adjustment</option>
                            <option value="Tax" <?php echo ($zohoFields == 'Tax') ? 'selected' : ''; ?> >Tax</option>
                            <option value="Account Name" <?php echo ($zohoFields == 'Account Name') ? 'selected' : ''; ?> >Account Name</option>
                            <option value="Contact Name" <?php echo ($zohoFields == 'Contact Name') ? 'selected' : ''; ?> >Contact Name</option>
                            <option value="Status" <?php echo ($zohoFields == 'Status') ? 'selected' : ''; ?> >Status</option>
                            <option value="Assigned To" <?php echo ($zohoFields == 'Assigned To') ? 'selected' : ''; ?> >Assigned To</option>
                            <option value="Billing Street" <?php echo ($zohoFields == 'Billing Street') ? 'selected' : ''; ?> >Billing Street</option>
                            <option value="Billing City" <?php echo ($zohoFields == 'Billing City') ? 'selected' : ''; ?> >Billing City</option>
                            <option value="Billing State" <?php echo ($zohoFields == 'Billing State') ? 'selected' : ''; ?> >Billing State</option>
                            <option value="Billing Zip" <?php echo ($zohoFields == 'Billing Zip') ? 'selected' : ''; ?> >Billing Zip</option>
                            <option value="Billing Country" <?php echo ($zohoFields == 'Billing Country') ? 'selected' : ''; ?> >Billing Country</option>
                            <option value="Shipping Street" <?php echo ($zohoFields == 'Shipping Street') ? 'selected' : ''; ?> >Shipping Street</option>
                            <option value="Shipping City" <?php echo ($zohoFields == 'Shipping City') ? 'selected' : ''; ?> >Shipping City</option>
                            <option value="Shipping State" <?php echo ($zohoFields == 'Shipping State') ? 'selected' : ''; ?> >Shipping State</option>
                            <option value="Shipping Zip" <?php echo ($zohoFields == 'Shipping Zip') ? 'selected' : ''; ?> >Shipping Zip</option>
                            <option value="Shipping Country" <?php echo ($zohoFields == 'Shipping Country') ? 'selected' : ''; ?> >Shipping Country</option>
                            <option value="Product Name" <?php echo ($zohoFields == 'Product Name') ? 'selected' : ''; ?> >Product Name</option>
                            <option value="Quantity in Stock" <?php echo ($zohoFields == 'Quantity in Stock') ? 'selected' : ''; ?> >Quantity in Stock</option>
                            <option value="Quantity" <?php echo ($zohoFields == 'Quantity') ? 'selected' : ''; ?> >Quantity</option>
                            <option value="Unit Price" <?php echo ($zohoFields == 'Unit Price') ? 'selected' : ''; ?> >Unit Price</option>
                            <option value="List Price" <?php echo ($zohoFields == 'List Price') ? 'selected' : ''; ?> >List Price</option>
                            <option value="Total" <?php echo ($zohoFields == 'Total') ? 'selected' : ''; ?> >Total</option>
                            <option value="Terms & Conditions" <?php echo ($zohoFields == 'Terms & Conditions') ? 'selected' : ''; ?> >Terms & Conditions</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>

                        </select>

                        <!--PurchaseOrders-->
                        <select name="zoho-field-mapping" id="zoho-purchase-orders" style="display: none;">
                            <option value="Purchase Order Owner" <?php echo ($zohoFields == 'Purchase Order Owner') ? 'selected' : ''; ?> >PO Owner</option>
                            <option value="PO Number" <?php echo ($zohoFields == 'PO Number') ? 'selected' : ''; ?> >PO Number</option>
                            <option value="Subject" <?php echo ($zohoFields == 'Subject') ? 'selected' : ''; ?> >Subject</option>
                            <option value="Vendor Name" <?php echo ($zohoFields == 'Vendor Name') ? 'selected' : ''; ?> >Vendor Name</option>
                            <option value="Requisition No" <?php echo ($zohoFields == 'Requisition No') ? 'selected' : ''; ?> >Requisition No</option>
                            <option value="Tracking Number" <?php echo ($zohoFields == 'Tracking Number') ? 'selected' : ''; ?> >Tracking Number</option>
                            <option value="Contact Name" <?php echo ($zohoFields == 'Contact Name') ? 'selected' : ''; ?> >Contact Name</option>
                            <option value="Purchase Order Date" <?php echo ($zohoFields == 'Purchase Order Date') ? 'selected' : ''; ?> >Purchase Order Date</option>
                            <option value="Due Date" <?php echo ($zohoFields == 'Due Date') ? 'selected' : ''; ?> >Due Date</option>
                            <option value="Excise Duty" <?php echo ($zohoFields == 'Excise Duty') ? 'selected' : ''; ?> >Excise Duty</option>
                            <option value="Sales Commission" <?php echo ($zohoFields == 'Sales Commission') ? 'selected' : ''; ?> >Sales Commission</option>
                            <option value="Grand Total" <?php echo ($zohoFields == 'Grand Total') ? 'selected' : ''; ?> >Grand Total</option>
                            <option value="Sub Total" <?php echo ($zohoFields == 'Sub Total') ? 'selected' : ''; ?> >Sub Total</option>
                            <option value="Adjustment" <?php echo ($zohoFields == 'Adjustment') ? 'selected' : ''; ?> >Adjustment</option>
                            <option value="Tax" <?php echo ($zohoFields == 'Tax') ? 'selected' : ''; ?> >Tax</option>
                            <option value="Account Name" <?php echo ($zohoFields == 'Account Name') ? 'selected' : ''; ?> >Account Name</option>
                            <option value="Contact Name" <?php echo ($zohoFields == 'Contact Name') ? 'selected' : ''; ?> >Contact Name</option>
                            <option value="Status" <?php echo ($zohoFields == 'Status') ? 'selected' : ''; ?> >Status</option>
                            <option value="Assigned To" <?php echo ($zohoFields == 'Assigned To') ? 'selected' : ''; ?> >Assigned To</option>
                            <option value="Billing Street" <?php echo ($zohoFields == 'Billing Street') ? 'selected' : ''; ?> >Billing Street</option>
                            <option value="Billing City" <?php echo ($zohoFields == 'Billing City') ? 'selected' : ''; ?> >Billing City</option>
                            <option value="Billing State" <?php echo ($zohoFields == 'Billing State') ? 'selected' : ''; ?> >Billing State</option>
                            <option value="Billing Zip" <?php echo ($zohoFields == 'Billing Zip') ? 'selected' : ''; ?> >Billing Zip</option>
                            <option value="Billing Country" <?php echo ($zohoFields == 'Billing Country') ? 'selected' : ''; ?> >Billing Country</option>
                            <option value="Shipping Street" <?php echo ($zohoFields == 'Shipping Street') ? 'selected' : ''; ?> >Shipping Street</option>
                            <option value="Shipping City" <?php echo ($zohoFields == 'Shipping City') ? 'selected' : ''; ?> >Shipping City</option>
                            <option value="Shipping State" <?php echo ($zohoFields == 'Shipping State') ? 'selected' : ''; ?> >Shipping State</option>
                            <option value="Shipping Zip" <?php echo ($zohoFields == 'Shipping Zip') ? 'selected' : ''; ?> >Shipping Zip</option>
                            <option value="Shipping Country" <?php echo ($zohoFields == 'Shipping Country') ? 'selected' : ''; ?> >Shipping Country</option>
                            <option value="Product Name" <?php echo ($zohoFields == 'Product Name') ? 'selected' : ''; ?> >Product Name</option>
                            <option value="Quantity in Stock" <?php echo ($zohoFields == 'Quantity in Stock') ? 'selected' : ''; ?> >Quantity in Stock</option>
                            <option value="Quantity" <?php echo ($zohoFields == 'Quantity') ? 'selected' : ''; ?> >Quantity</option>
                            <option value="Unit Price" <?php echo ($zohoFields == 'Unit Price') ? 'selected' : ''; ?> >Unit Price</option>
                            <option value="List Price" <?php echo ($zohoFields == 'List Price') ? 'selected' : ''; ?> >List Price</option>
                            <option value="Total" <?php echo ($zohoFields == 'Total') ? 'selected' : ''; ?> >Total</option>
                            <option value="Terms & Conditions" <?php echo ($zohoFields == 'Terms & Conditions') ? 'selected' : ''; ?> >Terms & Conditions</option>
                            <option value="Description" <?php echo ($zohoFields == 'Description') ? 'selected' : ''; ?> >Description</option>
                        </select>
                    </div>
                </div>

                <div class="left" style="float: left; margin: 5px 35px 5px 0px;">
                    <div class="type" style="margin: 5px" >
                        <label for="type" style="margin-right:40px;font-weight: bold;">Woocommerce Action</label>
                        <select name="wooc-action" id="wooc-action" style="width:150px;">
                            <option value="woocommerce_created_customer" <?php echo ($woocAction == 'woocommerce_created_customer') ? 'selected' : ''; ?> >When new user register</option>
                            <option value="save_post" <?php echo ($woocAction == 'save_post') ? 'selected' : ''; ?> >Add new Product</option>
                            <option value="woocommerce_checkout_update_order_meta" <?php echo ($woocAction == 'woocommerce_checkout_update_order_meta') ? 'selected' : ''; ?> >New order</option>

                        </select>
                    </div>
                    <div class="woo-field" style="margin: 5px">
                        <label for="woo-field" style="margin-right:50px;font-weight: bold;">Woocommerce field</label>

                        <!--contact Wooc field -->
                        <select name="wooc-field-mapping" style="width:150px;" id="contact-woo">
                            <option value="id" <?php echo ($wooFields == 'id') ? 'selected' : ''; ?>>User ID</option>
                            <option value="email" <?php echo ($wooFields == 'email') ? 'selected' : ''; ?>>User Mail</option>
                            <option value="first_name" <?php echo ($wooFields == 'first_name') ? 'selected' : ''; ?>>First name</option>
                            <option value="last_name" <?php echo ($wooFields == 'last_name') ? 'selected' : ''; ?>>Last name</option>
                            <option value="role" <?php echo ($wooFields == 'role') ? 'selected' : ''; ?>>Role</option>
                            <option value="email" <?php echo ($wooFields == 'email') ? 'selected' : ''; ?>>User Mail</option>

                            <option value="billing_first_name" <?php echo ($wooFields == 'billing_first_name') ? 'selected' : ''; ?>>Billing first name</option>
                            <option value="billing_last_name" <?php echo ($wooFields == 'billing_last_name') ? 'selected' : ''; ?>>Billing last name</option>
                            <option value="billing_company" <?php echo ($wooFields == 'billing_company') ? 'selected' : ''; ?>>Billing company</option>
                            <option value="billing_address_1" <?php echo ($wooFields == 'billing_address_1') ? 'selected' : ''; ?>>Billing address 1</option>
                            <option value="billing_address_2" <?php echo ($wooFields == 'billing_address_2') ? 'selected' : ''; ?>>Billing address 2</option>
                            <option value="billing_city" <?php echo ($wooFields == 'billing_city') ? 'selected' : ''; ?>>Billing city</option>
                            <option value="billing_postcode" <?php echo ($wooFields == 'billing_postcode') ? 'selected' : ''; ?>>Billing postcode</option>
                            <option value="billing_country" <?php echo ($wooFields == 'billing_country') ? 'selected' : ''; ?>>Billing country</option>
                            <option value="billing_state" <?php echo ($wooFields == 'billing_state') ? 'selected' : ''; ?>>Billing state</option>
                            <option value="billing_email" <?php echo ($wooFields == 'billing_email') ? 'selected' : ''; ?>>Billing email</option>
                            <option value="billing_phone" <?php echo ($wooFields == 'billing_phone') ? 'selected' : ''; ?>>Billing phone</option>

                            <option value="shipping_first_name" <?php echo ($wooFields == 'shipping_first_name') ? 'selected' : ''; ?>>Shipping first name</option>
                            <option value="shipping_last_name" <?php echo ($wooFields == 'shipping_last_name') ? 'selected' : ''; ?>>Shipping last name</option>
                            <option value="shipping_company" <?php echo ($wooFields == 'shipping_company') ? 'selected' : ''; ?>>Shipping company</option>
                            <option value="shipping_address_1" <?php echo ($wooFields == 'shipping_address_1') ? 'selected' : ''; ?>>Shipping address 1</option>
                            <option value="shipping_address_2" <?php echo ($wooFields == 'shipping_address_2') ? 'selected' : ''; ?>>Shipping address 2</option>
                            <option value="shipping_city" <?php echo ($wooFields == 'shipping_city') ? 'selected' : ''; ?>>Shipping city</option>
                            <option value="shipping_postcode" <?php echo ($wooFields == 'shipping_postcode') ? 'selected' : ''; ?>>Shipping postcode</option>
                            <option value="shipping_country" <?php echo ($wooFields == 'shipping_country') ? 'selected' : ''; ?>>Shipping country</option>
                            <option value="shipping_state" <?php echo ($wooFields == 'shipping_state') ? 'selected' : ''; ?>>Shipping state</option>
                        </select>

                        <!-- Product -->
                        <select name="wooc-field-mapping" id="product-woo" style="display: none;">
                            <option value="name" <?php echo ($wooFields == 'name') ? 'selected' : ''; ?> >Product Name</option>
                            <option value="date_created" <?php echo ($wooFields == 'date_created') ? 'selected' : ''; ?> >Date Created</option>
                            <option value="date_modified" <?php echo ($wooFields == 'date_modified') ? 'selected' : ''; ?> >Date Modified</option>
                            <option value="description" <?php echo ($wooFields == 'description') ? 'selected' : ''; ?> >Description</option>
                            <option value="short_description" <?php echo ($wooFields == 'short_description') ? 'selected' : ''; ?> >Short Description</option>
                            <option value="sku" <?php echo ($wooFields == 'sku') ? 'selected' : ''; ?> >Sku</option>
                            <option value="price" <?php echo ($wooFields == 'price') ? 'selected' : ''; ?> >Price</option>
                            <option value="regular_price" <?php echo ($wooFields == 'regular_price') ? 'selected' : ''; ?> >Regular Price</option>
                            <option value="sale_price" <?php echo ($wooFields == 'sale_price') ? 'selected' : ''; ?> >Sale Price</option>
                            <option value="date_on_sale_from" <?php echo ($wooFields == 'date_on_sale_from') ? 'selected' : ''; ?> >Sales Start Date</option>
                            <option value="date_on_sale_to" <?php echo ($wooFields == 'date_on_sale_to') ? 'selected' : ''; ?> >Sales End Date</option>
                            <option value="total_sales" <?php echo ($wooFields == 'total_sales') ? 'selected' : ''; ?> >Total sales</option>
                            <option value="tax_status" <?php echo ($wooFields == 'tax_status') ? 'selected' : ''; ?> >Tax status</option>
                            <option value="tax_class" <?php echo ($wooFields == 'tax_class') ? 'selected' : ''; ?> >Tax class</option>
                            <option value="stock_quantity" <?php echo ($wooFields == 'stock_quantity') ? 'selected' : ''; ?> >Stock Quantity</option>

                        </select>

                        <!--Order Wooc field-->
                        <select name="wooc-field-mapping" id="order-woo" style="display: none;">
                            <option value="order_id" <?php echo ($wooFields == 'order_id') ? 'selected' : ''; ?>>Order ID</option>
                            <option value="status" <?php echo ($wooFields == 'status') ? 'selected' : ''; ?>>Status Order</option>
                            <option value="date_created" <?php echo ($wooFields == 'date_created') ? 'selected' : ''; ?>>Date created</option>
                            <option value="currency" <?php echo ($wooFields == 'currency') ? 'selected' : ''; ?>>Currency</option>
                            <option value="discount_total" <?php echo ($wooFields == 'discount_total') ? 'selected' : ''; ?>>Discount Total</option>
                            <option value="discount_tax" <?php echo ($wooFields == 'discount_tax') ? 'selected' : ''; ?>>Discount tax</option>
                            <option value="shipping_total" <?php echo ($wooFields == 'shipping_total') ? 'selected' : ''; ?>>Shipping total</option>
                            <option value="shipping_tax" <?php echo ($wooFields == 'shipping_tax') ? 'selected' : ''; ?>>Shipping Tax</option>
                            <option value="cart_tax" <?php echo ($wooFields == 'cart_tax') ? 'selected' : ''; ?>>Cart Tax</option>
                            <option value="total" <?php echo ($wooFields == 'total') ? 'selected' : ''; ?>>Total</option>
                            <option value="total_tax" <?php echo ($wooFields == 'total_tax') ? 'selected' : ''; ?>>Total tax</option>

                            <option value="billing_first_name" <?php echo ($wooFields == 'billing_first_name') ? 'selected' : ''; ?>>Billing first name</option>
                            <option value="billing_last_name" <?php echo ($wooFields == 'billing_last_name') ? 'selected' : ''; ?>>Billing last name</option>
                            <option value="billing_company" <?php echo ($wooFields == 'billing_company') ? 'selected' : ''; ?>>Billing company</option>
                            <option value="billing_address_1" <?php echo ($wooFields == 'billing_address_1') ? 'selected' : ''; ?>>Billing address 1</option>
                            <option value="billing_address_2" <?php echo ($wooFields == 'billing_address_2') ? 'selected' : ''; ?>>Billing address 2</option>
                            <option value="billing_city" <?php echo ($wooFields == 'billing_city') ? 'selected' : ''; ?>>Billing city</option>
                            <option value="billing_postcode" <?php echo ($wooFields == 'billing_postcode') ? 'selected' : ''; ?>>Billing postcode</option>
                            <option value="billing_country" <?php echo ($wooFields == 'billing_country') ? 'selected' : ''; ?>>Billing country</option>
                            <option value="billing_state" <?php echo ($wooFields == 'billing_state') ? 'selected' : ''; ?>>Billing state</option>
                            <option value="billing_email" <?php echo ($wooFields == 'billing_email') ? 'selected' : ''; ?>>Billing email</option>
                            <option value="billing_phone" <?php echo ($wooFields == 'billing_phone') ? 'selected' : ''; ?>>Billing phone</option>

                            <option value="shipping_first_name" <?php echo ($wooFields == 'shipping_first_name') ? 'selected' : ''; ?>>Shipping first name</option>
                            <option value="shipping_last_name" <?php echo ($wooFields == 'shipping_last_name') ? 'selected' : ''; ?>>Shipping last name</option>
                            <option value="shipping_company" <?php echo ($wooFields == 'shipping_company') ? 'selected' : ''; ?>>Shipping company</option>
                            <option value="shipping_address_1" <?php echo ($wooFields == 'shipping_address_1') ? 'selected' : ''; ?>>Shipping address 1</option>
                            <option value="shipping_address_2" <?php echo ($wooFields == 'shipping_address_2') ? 'selected' : ''; ?>>Shipping address 2</option>
                            <option value="shipping_city" <?php echo ($wooFields == 'shipping_city') ? 'selected' : ''; ?>>Shipping city</option>
                            <option value="shipping_postcode" <?php echo ($wooFields == 'shipping_postcode') ? 'selected' : ''; ?>>Shipping postcode</option>
                            <option value="shipping_country" <?php echo ($wooFields == 'shipping_country') ? 'selected' : ''; ?>>Shipping country</option>
                            <option value="shipping_state" <?php echo ($wooFields == 'shipping_state') ? 'selected' : ''; ?>>Shipping state</option>


                        </select>
                    </div>
                </div>
                <div class="clean" style="clear: both"></div>


                <div class="status" style="margin: 5px">
                    <label for="status" style="margin-right:92px;font-weight: bold;">Status</label>
                    <input type="checkbox" name="status" <?php echo ($status == '1' || !isset($status)) ? 'checked' : ''; ?>/>
                </div>
                <?php
                if (isset($id)){
                    echo '<input type="hidden" name="id" value="'. $id .'"/>';
                    echo '<input type="submit" name="submit" value="Save edit" class="button"/>';
                }
                else {
                    echo '<input type="submit" name="submit" value="Save" class="button"/>';
                    echo '<input type="submit" name="submit" value="Save & Add new" class="button"/>';
                }
                ?>

            </form>

            <script>
                jQuery( "#zoho-module" ).change(function () {
                    if (document.getElementById('zoho-module').selectedIndex == 0){

                        document.getElementById("zoho-leads").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-leads").removeAttribute('disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 1){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-accounts").removeAttribute('disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 2){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-contacts").removeAttribute('disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 3){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-campaingns").removeAttribute('disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 4){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-products").removeAttribute('disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 6){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-sale-orders").removeAttribute('disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 5){

                            document.getElementById("zoho-leads").setAttribute('style','display:none;');
                            document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                            document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                            document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                            document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                            document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                            document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                            document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                            document.getElementById("zoho-products").setAttribute('style','display:none;');
                            document.getElementById("zoho-products").setAttribute('disabled','disabled');

                            document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                            document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                            document.getElementById("zoho-invoices").setAttribute('style','display:inline; width:150px;');
                            document.getElementById("zoho-invoices").removeAttribute('disabled');

                            document.getElementById("zoho-purchase-orders").setAttribute('style','display:none;');
                            document.getElementById("zoho-purchase-orders").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('zoho-module').selectedIndex == 7){

                        document.getElementById("zoho-leads").setAttribute('style','display:none;');
                        document.getElementById("zoho-leads").setAttribute('disabled','disabled');

                        document.getElementById("zoho-accounts").setAttribute('style','display:none;');
                        document.getElementById("zoho-accounts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-contacts").setAttribute('style','display:none;');
                        document.getElementById("zoho-contacts").setAttribute('disabled','disabled');

                        document.getElementById("zoho-campaingns").setAttribute('style','display:none;');
                        document.getElementById("zoho-campaingns").setAttribute('disabled','disabled');

                        document.getElementById("zoho-products").setAttribute('style','display:none;');
                        document.getElementById("zoho-products").setAttribute('disabled','disabled');

                        document.getElementById("zoho-sale-orders").setAttribute('style','display:none;');
                        document.getElementById("zoho-sale-orders").setAttribute('disabled','disabled');

                        document.getElementById("zoho-invoices").setAttribute('style','display:none;');
                        document.getElementById("zoho-invoices").setAttribute('disabled','disabled');

                        document.getElementById("zoho-purchase-orders").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("zoho-purchase-orders").removeAttribute('disabled');
                    };
                }).change();

                jQuery( "#wooc-action" ).change(function () {
                    if (document.getElementById('wooc-action').selectedIndex == 0){

                        document.getElementById("contact-woo").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("contact-woo").removeAttribute('disabled');

                        document.getElementById("product-woo").setAttribute('style','display:none;');
                        document.getElementById("product-woo").setAttribute('disabled','disabled');

                        document.getElementById("order-woo").setAttribute('style','display:none;');
                        document.getElementById("order-woo").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('wooc-action').selectedIndex == 1){

                        document.getElementById("contact-woo").setAttribute('style','display:none;');
                        document.getElementById("contact-woo").setAttribute('disabled','disabled');

                        document.getElementById("product-woo").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("product-woo").removeAttribute('disabled');

                        document.getElementById("order-woo").setAttribute('style','display:none;');
                        document.getElementById("order-woo").setAttribute('disabled','disabled');
                    };

                    if (document.getElementById('wooc-action').selectedIndex == 2){

                        document.getElementById("contact-woo").setAttribute('style','display:none;');
                        document.getElementById("contact-woo").setAttribute('disabled','disabled');

                        document.getElementById("product-woo").setAttribute('style','display:none;');
                        document.getElementById("product-woo").setAttribute('disabled','disabled');

                        document.getElementById("order-woo").setAttribute('style','display:inline; width:150px;');
                        document.getElementById("order-woo").removeAttribute('disabled');
                    };
                }).change();
            </script>
            <?php
        }

	}
}

return new HN_Zoho_Fields_Mapping();

