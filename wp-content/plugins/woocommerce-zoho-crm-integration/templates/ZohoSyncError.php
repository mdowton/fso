<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'ZohoSyncError' ) ) :
    class ZohoSyncError  {
        public function output(){
            echo '<h2>Sync error table: Module Leads</h2>';
            $this->showModule('Leads');
            echo '<h2>Sync error table: Module Accounts</h2>';
            $this->showModule('Accounts');
            echo '<h2>Sync error table: Module Contacts</h2>';
            $this->showModule('Contacts');
            echo '<hr/>';
            echo '<h2>Sync error table: Module Invoices</h2>';
            $this->showModule('Invoices');
            echo '<h2>Sync error table: Module SalesOrders</h2>';
            $this->showModule('SalesOrders');
            echo '<h2>Sync error table: Module PurchaseOrders</h2>';
            $this->showModule('PurchaseOrders');
            echo '<hr/>';
            echo '<h2>Sync error table: Module Products</h2>';
            $this->showModule('Products');
        }

        public function show_table_body($rows, $module) {
            foreach ( $rows as $row ) {
                ?>
                <tr>
                    <td> <?php echo $row['id'] ?></td>
                    <td> <?php echo $row['woocommerce_id'] ?></td>
                    <td> <?php echo $row['zoho_id'] ?></td>
                    <td> <?php echo $row['type'] ?></td>
                    <td> <?php
                        $phpdate = strtotime( $row['created'] );
                        $created = date('d M, Y h:i A', $phpdate);

                        echo $created;
                        ?></td>
                    <td> <?php echo $row['mess'] ?></td>
                    <td><form action="admin-post.php" method="post">
                            <input type="hidden" name="action" value="syncZohoCRM"/>
                            <input type="hidden" name="module" value="<?= $module ?>">
                            <input type="hidden" name="zh_wooc_id" value="<?=$row['id'] ?>"/>
                            <input type="submit" name="btnSubmit" class="button" value="Sync again"/>
                            <input type="submit" name="btnDelete" class="button" value="Delete"/>
                        </form></td>
                </tr>
                <?php
            }
        }

        public function get_collection($module) {
            global $wpdb;
            $mail_queue_table = $wpdb->prefix . 'hn_zoho_crm_report';
            $query = "SELECT * FROM {$mail_queue_table} WHERE `status` = '0' AND `mess` LIKE '%Sync error:%' AND `type` LIKE '%{$module}%' ORDER BY `id` DESC";
            $rows = $wpdb->get_results ( $query, ARRAY_A );

            return $rows;
        }

        public function showModule($module) {
            //show the list of mail log in the queue
            $rows = $this->get_collection($module);
            if (empty($rows))  {
                echo __("There is no record");
            } else {
                ?>
                <table class="report-table">
                    <thead>
                    <tr>
                        <th>
                            <?php echo __('ID')?>
                        </th>

                        <th>
                            <?php echo __('Woocommerce ID')?>
                        </th>

                        <th>
                            <?php echo __('ZohoCRM ID')?>
                        </th>
                        <th>
                            <?php echo __('Type')?>
                        </th>
                        <th>
                            <?php echo __('Created time')?>
                        </th>
                        <th>
                            <?php echo __('Message error')?>
                        </th>
                        <th>
                            <?php echo __('Action')?>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $this->show_table_body($rows, $module);?>
                    </tbody>
                </table>

                <script type="text/javascript">
                    jQuery(document).ready( function () {
                        jQuery('.report-table').DataTable();
                    } );
                </script>
                <?php
            } }

    }
endif;

return new ZohoSyncError();