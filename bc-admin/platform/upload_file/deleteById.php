<?php 
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require('general_tags.php');
$id = $_GET['id']; 

$query="DELETE FROM ag_document where id = '$id'"; 
execute($query);


header("Location: delete.php"); 


?>
