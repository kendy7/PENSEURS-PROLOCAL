<?php
require_once('include/inc_load.php');
if(!isset($_SESSION['Clogged'])) exit(); 
 if($_POST['type-change'][0] == 'change_data'){

	 
	  $val = "name = '".str_db($_POST['name'])."',";
	  $val .= "email = '".str_db($_POST['email'])."',";
	  $val .= "phone = '".str_db($_POST['phone'])."',";
	  $val .= "address = '".str_db($_POST['address'])."',";
	  $val .= "lastname = '".str_db($_POST['lastname'])."',";
	  $val .= "city = '".str_db($_POST['city'])."' ";
	 
	    // if(isset($_POST['change-password-container']))
	 	 // $sql = execute(' select password from '.$table_prefix.'clients where id='.$_SESSION['Cid']); 
		 // $rs = mysql_fetch_array($sql);		 
		 // if(encryption($_POST['old-password']) !=$rs['password']){
		  // echo '<div class="return" data-label="'.$lang_client_['account_actions']['WARNING_LABEL'].'" data-label-type="warning">'.$lang_client_['account_actions']['CHANGE_PASSWORD_ERROR'].'</div>';	   
	     
		 if(!empty($_POST['password'])){
			$val .= ", password= '".encryption(str_db($_POST['password']))."' ";
	     }else
			$val .= "''";
		 execute("update ".$table_prefix."clients set ".$val." where id = '".$_SESSION['Cid']."'");
	   echo '<div class="return" data-label="'.$lang_client_['account_actions']['CONGRATS_LABEL'].'" data-label-type="success">'.$lang_client_['account_actions']['DATA_UPDATED'].'<br/>';	
	}
?>