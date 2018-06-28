<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // get info id
    $id_info = $_POST['id'];
   $query = ("DELETE FROM ".$table_prefix."informations WHERE id = '".$id_info."' ");
  // execute(" update ag_orders set archive=0 WHERE id = '".$orders."' ");
    if (!$result = execute($query)) {
        exit(mysql_error());
    }
}
?>