<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
require_once(rel_client_path.'/include/lib/phpMailer/class.phpmailer.php');
$status = $_POST['status'] == 'ToProcess' ? 1 : 0;
if(isset($registration_type) && $registration_type == 2 && $status == 1){
/* get client data*/
  $sql = execute('select * from ag_salaire where id = '.$_POST['id']);
  $rs = mysql_fetch_array($sql);	
}
/*update status*/
execute ('update ag_salaire set payed_sal = '.$status.' where id = '.$_POST['id']);
?>