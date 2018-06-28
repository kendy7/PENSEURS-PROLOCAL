<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require('general_tags.php');
 $destination=$_POST['destination'];
 $sujet=str_db_content($_POST['Sujet']);
 $message=str_db_content($_POST['message']);
$date=date("Y-m-d H:i:s");
if($_POST['statuts']=='All'){
	$all=execute("Select CodeMembre from ".$table_prefix."clients where enabled=1");
	while($as=mysql_fetch_array($all)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
	
}elseif($_POST['statuts']=='API'){
	$api=execute("Select CodeMembre from ".$table_prefix."clients where statuts='API' and enabled=1");
	while($as=mysql_fetch_array($api)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='AJ'){
	$aj=execute("Select CodeMembre from ".$table_prefix."clients where statuts='AJ' and enabled=1");
	while($as=mysql_fetch_array($aj)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='AS'){
	$aas=execute("Select CodeMembre from ".$table_prefix."clients where statuts='AS' and enabled=1");
	while($as=mysql_fetch_array($aas)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='ARG'){
	$api=execute("Select CodeMembre from ".$table_prefix."clients where statuts='ARG' and enabled=1");
	while($as=mysql_fetch_array($api)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='OR'){
	$or=execute("Select CodeMembre from ".$table_prefix."clients where statuts='OR' and enabled=1");
	while($as=mysql_fetch_array($or)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='PT'){
	$api=execute("Select CodeMembre from ".$table_prefix."clients where statuts='PT' and enabled=1");
	while($as=mysql_fetch_array($api)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='EM'){
	$api=execute("Select CodeMembre from ".$table_prefix."clients where statuts='EM' and enabled=1");
	while($as=mysql_fetch_array($api)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}elseif($_POST['statuts']=='DM'){
	$api=execute("Select CodeMembre from ".$table_prefix."clients where statuts='DM' and enabled=1");
	while($as=mysql_fetch_array($api)){
		execute(" Insert into ".$table_prefix."informations values('','".$sujet."','".$message."','".$as['CodeMembre']."','".$date."',0) "); 
	}
}
header("Location:index.php");
?>
