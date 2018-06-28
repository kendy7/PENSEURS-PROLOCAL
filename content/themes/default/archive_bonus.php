
<?php  
 $sql = execute('select * from '.$table_prefix.'bonus where userid = '.$_SESSION['Cid'].' and id = '.$_POST['id']);
 $rs = mysql_fetch_array($sql);
  echo '<div class="return" data-label="Votre achat a été archivé avec succes" data-label-type="info">'.
	$datesys=date('Y-m-d H:i:s');
	
	execute(" update ag_bonus");
?>