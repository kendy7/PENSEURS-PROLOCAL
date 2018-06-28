<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get user id
   $user_id = $_POST['id'];
 $sql = execute('select * from '.$table_prefix.'orders where id_client = '.$_SESSION['Cid'].' and id = '.$user_id);
 $rs = mysql_fetch_array($sql);
    // delete User
    $query = ("update ag_orders set archive=1 WHERE id = '$user_id'");
    if (!$result = execute($query)) {
        exit(mysql_error());
    }
	$datesys=date("Y-m-d H:i:s");
execute(" INSERT INTO ".$table_prefix."archorders value('',
	'".$rs['id']."',
	'".$rs['products_list']."',
	'".$rs['data']."',
	'".$rs['id_client']."',
	'".$rs['subtotal']."',
	'".$rs['grandtotal']."',
	'".$rs['tax']."',
	'".$rs['commission']."',
	'".$rs['point']."',
	'".$rs['shipping_price']."',
	'".$rs['payment_method']."',
	'".$rs['payment_price']."',
	'".$rs['billing_address']."',
	'".$rs['shipping_address']."',
	'".$rs['code_order']."',
	'".$rs['process_date']."',
	'".$datesys."'
	
	) ");
}
?>

 
	   