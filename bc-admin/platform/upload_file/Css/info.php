<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
 $sql = 'select * from '.$table_name.' where id = '.$_POST['id'];
 $rs_result = execute($sql);
 $rs = mysql_fetch_array($rs_result);

 echo '<span id="label">'.ucwords($rs['name'].' '.$rs['lastname']).'</span>';
 echo '<div id="body">
<table class="table table-striped table-bordered">
	<tr>
		<td align="left" valign="top"> <strong>'.$lang_['clients_accounts']['INFO_METADONNEE'].'</strong></td>
		<td align="left" valign="top"> <strong>'.$lang_['clients_accounts']['INFO_DONNEES'].'</strong></td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_SEXE'].'</td>
		<td align="left" valign="top">'.$rs['sex'].'</td>
	</tr>
    <tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_BIRTH'].'</td>
		<td align="left" valign="top">'.$rs['birthdate'].'</td>
	</tr>	
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_NIF'].'</td>
		<td align="left" valign="top">'.$rs['cin_nif'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_EMAIL'].'</td>
		<td align="left" valign="top">'.$rs['email'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_PHONE'].'</td>
		<td align="left" valign="top">'.$rs['phone'].'</td>
	</tr>	
	
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_REFERENCE'].'</td>
		<td align="left" valign="top">'.$rs['reference'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_ENTRY_DATE'].'</td>
		<td align="left" valign="top">'.$rs['entry_date'].'</td>
	</tr>
</table>
 <Strong class="text-info">'.$lang_['clients_accounts']['INFO_INFOSEC'].'</Strong>
<table class="table table-striped table-bordered">
    <tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_USERID'].'</td>
		<td align="left" valign="top">'.$rs['userid'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_CODEMEMBRE'].'</td>
		<td align="left" valign="top">'.$rs['CodeMembre'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_NIVEAU'].'</td>
		<td align="left" valign="top">'.$rs['statuts'].'</td>
	</tr>
	<tr>
		<td align="left" valign="top">'.$lang_['clients_accounts']['INFO_POINT'].'</td>
		<td align="left" valign="top">'.$rs['point'].'</td>
	</tr>
</table>

 <div class="row-fluid">
    <div class="span12">
	     <strong class="text-info">'.$lang_['clients_accounts']['INFO_ADDRESS'].'</strong>
          <address>'.
			'<abbr title="Adresse"><strong>Quatier:</strong> </abbr>'.$rs['address'].'<br/>'
			.'<abbr title="Adresse"><strong>Ville:</strong> </abbr>'.$rs['city'].'<br/>
			
			<abbr title="Telefono"><strong>Telephone:</strong> </abbr> '.$rs['phone'].'<br/>'.'
			<abbr title="E-mail"><strong>E-mail:</strong> </abbr> '.$rs['email'].'
		  </address>	
	</div>
 </div>
</div>';
?>