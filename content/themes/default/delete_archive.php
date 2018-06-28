<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // get user id
    $orders = $_POST['id'];
   $query = ("DELETE FROM ag_archorders WHERE id_orders = '".$orders."' ");
  execute(" update ag_orders set archive=0 WHERE id = '".$orders."' ");
    if (!$result = execute($query)) {
        exit(mysql_error());
    }
}
?>