<?php
/*
This files provide to control if a specific userid is in database
and if he/they can do login into sistem
 -----------------------------------
 ------- NO CHANGE IT PLEASE -------
 -----------------------------------
*/ 
require_once('include/inc_load.php');
 @session_start();
 $user = md5(str_db($_POST['useridLog']));
 $password = encryption(str_db($_POST['passwordLog']));
 
 $sql = "select * from ".$table_prefix."clients where md5(userid) = '".$user."' and password = '".$password."'";
 $rs_result = execute($sql);
 $result = 'not_logged';
$datesys=date("Y-m-d H:i:s");
 while ($rs = mysql_fetch_array($rs_result)) {
 
 	            
  if($rs['payed']==1 && $rs['enabled']==1){
     $_SESSION['Clogged'] = true; 
     $_SESSION['Cuserid'] = $rs['userid']; 
	 $_SESSION['Cid'] = $rs['id']; 
	 $_SESSION['Cname'] = $rs['name'];
	 $_SESSION['Clastname'] = $rs['lastname'];
	 $_SESSION['CodeMembre'] = $rs['CodeMembre'];
	$result = 'logged';
		 $insertSession= "insert into ".$table_prefix."session values('".$_SESSION['CodeMembre']."','".$datesys."','".$_SERVER["REMOTE_ADDR"]."') ";
		 execute($insertSession);
  }else if ($rs['enabled']==1 && $rs['payed']==0){
	$result = 'need_payed';
  }else{
	$result = 'need_confirmation';  
  }
 }
 echo $result;
 
?>