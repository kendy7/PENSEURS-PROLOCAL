<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
$status = $_POST['status'] == 'ToProcess' ? 1 : 0;
execute ('update '.$table_name.' set payed = '.$status.' where paypal_id_transaction = "" and id = '.$_POST['id']);

	   $sql_or = execute('select * from '.$table_name.' where id = '.$_POST['id']);
	   $rs_com = mysql_fetch_array($sql_or);
	   execute("INSERT INTO ".$table_prefix."commission(id_client,code_order,montant,Datee) VALUES 
('" .$rs_com['id_client']."','" . $rs_com['code_order']. "','" . $rs_com['commissions'] ."','".$rs_com['data']."');");

?>