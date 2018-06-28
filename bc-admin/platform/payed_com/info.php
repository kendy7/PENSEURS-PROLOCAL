<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
 $sql = 'select * from ag_commission where id = '.$_POST['id'];
 $rs_result = execute($sql);
 $rs = mysql_fetch_array($rs_result);

 echo '<div id="body">
  <Strong class="text-info">'.$lang_['payed_com']['INFO_INFOSEC'].'</Strong>
<table class="table table-striped table-bordered">
    <tr>
		<td align="left" valign="top">'.$lang_['payed_com']['INFO_ID'].'</td>
		<td align="left" valign="top">'.$rs['id'].'</td>
	</tr>	
	<tr>
		<td align="left" valign="top">'.$lang_['payed_com']['INFO_USERID'].'</td>
		<td align="left" valign="top">'.$rs['userid'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['payed_com']['INFO_MONTANT'].'</td>
		<td align="left" valign="top">'.$rs['montant'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['payed_com']['INFO_DATE'].'</td>
		<td align="left" valign="top">'.$rs['Datee'].'</td>
	</tr>	
	
</table>
</div>';
?>