<?php 
global $wpdb;

$table_name = $wpdb->prefix.'acciwc';
if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
     //table not in database. Create new table
     $charset_collate = $wpdb->get_charset_collate();
 
     $sql = "CREATE TABLE $table_name (
          id int NOT NULL AUTO_INCREMENT,
          name varchar(150) NOT NULL,
          opa varchar(150) NOT NULL,
          UNIQUE KEY id (id)
     ) $charset_collate;";
     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
     dbDelta( $sql );
}






/*
$wpdb->query("CREATE TABLE ".$wpdb->base_prefix."nturl ( id int, ConfirmationCode int, index_ipn int, sum int, supplier varchar(150), orderid int)");
	$table = $wpdb->prefix . 'posts';
	$sql = 'SELECT * FROM `'. $table . '`'; 
	$result = $wpdb->get_results($sql);
		if(count($result[0]->T_token) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN T_token VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->expdate) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN expdate VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->carts) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN carts VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->ConfirmationCode) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN ConfirmationCode VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->indexP) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN indexP VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->Tempref) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN Tempref VARCHAR(255) NOT NULL;");
		}
		if(count($result[0]->sup) == 0){
			$wpdb->query("ALTER TABLE ".$table." ADD COLUMN sup VARCHAR(255) NOT NULL;");
		}
		//if(count($result[0]->expdate) == 0){
			$wpdb->query("CREATE TABLE ".$wpdb->base_prefix."nturl ( id int, ConfirmationCode int, index_ipn int, sum int, supplier varchar(150), orderid int)");
		//}
*/
?>