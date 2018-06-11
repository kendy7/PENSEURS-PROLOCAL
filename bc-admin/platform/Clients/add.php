<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
 $error_alert = '';
/*
 in first time the script control if userid exists
 if it exists so an error is generated,otherwise the script go on
*/ 
// 


$date=date("Y-m-d");
$dat=date("j F Y, g:i a");
$date_entry=date("Y-m-d H:i:s");
$date_Inf=$date-$_POST['birthdate'];

 $regex= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?";

$sql = execute("select count(userid) as userid from ".$table_name." where userid = '".str_db(str_replace('"','&quot;',$_POST['userid']))."'");
$rs = mysql_fetch_array($sql);
 if($rs['userid'] > 0){
  $error_alert .= $lang_['clients_accounts']['INSERT_UPDATE_DUPLICATE_ITEM_ERROR'].'<br/>';
 }
$sql = execute("select count(email) as email from ".$table_name." where email = '".str_db(str_replace('"','&quot;',$_POST['email']))."'");
$rs = mysql_fetch_array($sql); 

$sqlo = execute("select count(codeMembre) as codeMembre from ".$table_name." where codeMembre = '".str_db(str_replace('"','&quot;',$_POST['reference']))."'");
$rso = mysql_affected_rows($sqlo);

 if($rs['email'] > 0){
  $error_alert .= $lang_['clients_accounts']['INSERT_UPDATE_DUPLICATE_EMAIL_ERROR'].'<br/>';
 }else if(str_db(strlen($_POST['password']))<8){
   $error_alert .= $lang_['clients_accounts']['INSERT_LONG_PETIT'].'<br/>';
 }
else if($_POST['birthdate']==$date){
  $error_alert .= $lang_['clients_accounts']['INSERT_DATE_M'].' ('.$_POST['birthdate'].')<br/>';
  }else if($_POST['birthdate']>$date){
  $error_alert .= $lang_['clients_accounts']['INSERT_DATE_SUP'].' '.$dat.', '.$lang_['clients_accounts']['INSERT_DATE_SUPS'].' '.$_POST['birthdate'].'<br/>';
 }else if($date_Inf<18){
   $error_alert .= $lang_['clients_accounts']['INSERT_DATE_INF'].' '.$lang_['clients_accounts']['INSERT_DATE_INFS'].$date_Inf.' an(s)<br/>';
 }

else if(preg_match("/([^A-Z a-z])/",$_POST['name']))
{
$error_alert .= $lang_['clients_accounts']['INSERT_SYMB_NAME'].'<br/>'; 
}else if(preg_match("/([^A-Z a-z])/",$_POST['lastname']))
{
$error_alert .=  $lang_['clients_accounts']['INSERT_SYMB_LASTNAME'].'<br/>'; 
}
else if(preg_match("/([^A-Z a-z-])/",$_POST['city']))
{
$error_alert .= $lang_['clients_accounts']['INSERT_CITY'].'<br/>'; 
}else if(preg_match("/([^A-Z a-z0-9,#])/",$_POST['address']))
{
$error_alert .= $error_alert .= $lang_['clients_accounts']['INSERT_SYMB_ADDRESSE'].'<br/>'; 
}
else if(preg_match("/([^A-Z0-9a-z])/",$_POST['userid'])){
	$error_alert .= $lang_['clients_accounts']['INSERT_SYMB_USERID'].'<br/>';  
}

 if($error_alert != ''){
  echo '<div class="error_alert">'.$error_alert.'</div>';
  exit();
 }else{

  $enabled = isset($_POST['enable']) ? 1 : 0;
  $record = 'CodeMembre,name,enabled,lastname,sex,cin_nif,email,phone,birthdate,address,reference,city,userid,password,entry_date';
  $val = "'".str_db($_POST['cdeMembre'])."',";
  $val .= "'".str_db($_POST['name'])."',";
  $val .= "'".$enabled."',";
  $val .= "'".str_db($_POST['lastname'])."',"; 
  $val .= "'".str_db($_POST['sex'])."',";
  $val .= "'".str_db($_POST['nif'])."',";  
  $val .= "'".str_db($_POST['email'])."',";
  $val .= "'".str_db($_POST['phone'])."',";
  $val .= "'".str_db($_POST['birthdate'])."',";
  $val .= "'".str_db($_POST['address'])."',";
  $val .= "'".str_db($_POST['reference'])."',";
  $val .= "'".str_db($_POST['city'])."',";
  $val .= "'".str_db($_POST['userid'])."',";
  $val .= "'".encryption(str_db($_POST['password']))."',";
  $val .= "'".$date_entry."'";
  
    $sql = " insert into ".$table_name." (";
    $sql .= $record;
    $sql .= ") VALUES (";
    $sql .=  $val;
    $sql .=  ")";  
    execute($sql);
 }
?>
