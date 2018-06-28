<?php
require_once('include/inc_load.php');
require_once('include/lib/phpMailer/class.phpmailer.php');
$date_entry=date("Y-m-d H:i:s");
$date=date("Y-m-d");
$dateB=date("Y");
$dat=date(" j F Y, g:i a");


$dateBissexil=$dateB%4;
if($dateBissexil==0){
		if($_POST['day']>29 && $_POST['month']==02){
		die("<div class='error_alert'> Le mois Fevrier ne compte pas plus que 29</div>");
		}
}else{
		if($_POST['day']>28 && $_POST['month']==02){
		die("<div class='error_alert'>Le mois Fevrier ne compte pas plus que 28</div>");
		}
}
if(($_POST['day']>30 && $_POST['month']==04) ||($_POST['day']>30 && $_POST['month']==06) || ($_POST['day']>30 && $_POST['month']==11)){
die("<div class='error_alert'> date naissance invalide, le mois ".$_POST['month']." ne compte pas 31 jours</div>");
}
if($_POST['day']>30 && $_POST['month']==9){
die("<div class='error_alert'> date naissance invalide, le mois ".$_POST['month']." ne compte pas 31 jours</div>");
}
else{
$daterecup=$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
$birthdate=date('Y-m-d', strtotime($daterecup));
}

   if( $_POST['Identifiant_Nlle']==1){

      $CINallcase=trim($_POST['cin_1']).'-'.trim($_POST['cin_2']).'-'.trim($_POST['cin_3']).'-'.trim($_POST['cin_4']).'-'.trim($_POST['cin_5']).'-'.trim($_POST['cin_6']);		
		$sqlCIN = 'select cin_nif from '.$table_prefix.'clients where cin_nif="'.$CINallcase.'" ';
		  $exccin=execute($sqlCIN);
		  $rowscin=mysql_num_rows($exccin);
		if($rowscin==1)
		{
		 die('<div class="error_alert"> Ce C.I.N [ '.$CINallcase.' ] a ete deja utilise<br/>
		 </div>');
		}
    }else{
	
		$NifAllCase=trim($_POST['nif_1']).'-'.trim($_POST['nif_2']).'-'.trim($_POST['nif_3']).'-'.trim($_POST['nif_4']);
	
	    $sqlnif = 'select cin_nif from '.$table_prefix.'clients where cin_nif ="'.$NifAllCase.'"';
		  $exc=execute($sqlnif);
		  $rows=mysql_num_rows($exc);
		if($rows==1)
		{
		 die('<div class="error_alert"> Ce NIF [ '.$NifAllCase.' ] a ete deja utilise<br/>
		 </div>');
		} 
    }
 
 
$date_Inf=$date-$birthdate;
if (!empty($_POST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_POST['captcha'])) != $_SESSION['captcha']) {
        die('<div class="error_alert">'.$lang_client_['contact_form']['WRONG_CAPTCHA'].'</div>');
    }
    unset($_SESSION['captcha']);
}else{
  die('<div class="error_alert">'.$lang_client_['contact_form']['EMPTY_CAPTCHA'].'</div>');	
}

if(strlen($_POST['password'])<8){
	die('<div class="error_alert">'.$lang_client_['contact_form']['LONG_PASSWORD'].'</div>');	
}
if($birthdate==$date)
{
	die('<div class="error_alert">'.$lang_client_['contact_form']['DATE_TODAY'].' ('.$birthdate.')</div>');
}else if($_POST['birthdate']>$date){
	die('<div class="error_alert">'.$lang_client_['contact_form']['DATE_SUP'].' '.$dat.' </br>'.$lang_client_['contact_form']['DATE_INFO'].' '.$birthdate.'??</div>');
}else if(preg_match("/([^A-Z a-z-])/",$_POST['name']))
{
	die('<div class="error_alert">'.$lang_client_['contact_form']['INSERT_SYMB_NAME'].'</div>');	
}else if(preg_match("/([^A-Z a-z-])/",$_POST['lastname']))
{
	 die('<div class="error_alert">'.$lang_client_['contact_form']['INSERT_SYMB_LASTNAME'].'</div>');

}else if(preg_match("/([^A-Z a-z-])/",$_POST['city']))
{
die('<div class="error_alert">'.$lang_client_['contact_form']['INSERT_CITY'].'</div>'); 
}
// else if(preg_match("/([^A-Z a-z 0-9,#])/",$_POST['address'])){
	// die('<div class="error_alert">'.$lang_client_['contact_form']['INSERT_SYMB_ADDRESSE'].'</div>');
// }
 if(preg_match("/([^A-Z0-9a-z])/",$_POST['userid'])){
die('<div class="error_alert">'.$lang_client_['contact_form']['INSERT_SYMB_USERID'].'</div>');
}else{
         $userid=trim($_POST['userid']);
	    $sqluser = 'select userid from '.$table_prefix.'clients where userid ="'.$userid.'"';
		  $exc=execute($sqluser);
		  $rowsuser=mysql_num_rows($exc);
		if($rowsuser==1)
		{
		 die('<div class="error_alert"> L \'Identifiant: [ '.$userid.' ] n\'est plus disponible<br/>
		 </div>');
		} 
}

        $email=trim($_POST['email']);
	    $sqlemail = 'select email from '.$table_prefix.'clients where email ="'.$email.'"';
		  $exc=execute($sqlemail);
		  $rowsemail=mysql_num_rows($exc);
		if($rowsemail==1)
		{
		 die('<div class="error_alert"> L \'email: [ '.$email.' ] a été déjà utilisé<br/>
		 </div>');
		} 

if(empty($_POST['phone'])|| strlen($_POST['phone'])!=4 ||empty($_POST['phone2'])|| strlen($_POST['phone2'])!=2 || empty($_POST['phone3'])|| strlen($_POST['phone3'])!=2){
die("<div class='error_alert'> Le numero de telephone fournit n'est pas valide</div>");
}else{
$Tel=$_POST['phoneA']." ".$_POST['phone']."-".$_POST['phone2']."-".$_POST['phone3'];
}

 if($date_Inf<18){
	die('<div class="error_alert">'.$lang_client_['contact_form']['DATE_INF'].' '.$lang_client_['contact_form']['DATE_INF_SUITE'].' '.$date_Inf.' an(s)</div>');
}
 $reference=trim(strtoupper($_POST['reference']));
 
  $sqlref = 'select CodeMembre from '.$table_prefix.'clients where CodeMembre ="'.$reference.'" ';
  $exce=execute($sqlref);
  $rowsref=mysql_num_rows($exce); 
 if($reference!='DIRECT' && $rowsref==0){
	  die('<div class="error_alert"> Cette dr reference [ '.$reference.' ] n\'existe pas</div>'); 
 }

 $error = '';
 $user = str_db(str_replace('"','&quot;',$_POST['userid']));
 $email = str_db(str_replace('"','&quot;',$_POST['email']));

 $error_user = '';
 $error_mail = '';
 $sql = execute('select userid,email from '.$table_prefix.'clients where userid = "'.$user.'" or email = "'.$email.'"');
 while($rs = mysql_fetch_array($sql)){
   if(mb_strtolower($rs['userid']) == mb_strtolower($user)){
	   $error_user .= 'true'; 
   }
   if(mb_strtolower($rs['email']) == mb_strtolower($email)){
	   $error_mail .= 'true'; 
   } 	 
 }

 /* SEND E-MAIL TO ADMINISTRATOR */
 $message = str_replace('{client_name}',ucwords($_POST['name'].' '.$_POST['lastname']),$lang_client_['client_registration']['ADMIN_REGISTRATION_MESSAGE']);
 $mail = new PHPMailer();
  if($smtp_email){
   $mail->IsSMTP();
   $mail->Port = $smtp_port;
   $mail->Host = $smtp_host;
   $mail->Mailer = 'smtp';
   $mail->SMTPAuth = true;
   $mail->Username = $smtp_user;
   $mail->Password = $smtp_password;
   $mail->SingleTo = true;
  } 
 $mail->CharSet = 'UTF-8';
 $mail->From = $_POST['email']; 
 $mail->FromName = $_POST['name'];
 $mail->AddAddress($admin_email);
 $mail->AddReplyTo($_POST['email']);
 $mail->Sender=$_POST['email'];
 $mail->IsHTML(true); 
 $mail->Subject = str_replace('{shop_name}',$shop_title,$lang_client_['client_registration']['ADMIN_REGISTRATION_SUBJECT']);
 $mail->Body = $message;
  // if($mail->Send()){
   // }else{
	   // die('<div class="error_alert">Le message n\'a pas ete envoyé <br />PHP Mailer Error: ' . $mail->ErrorInfo.'</div>');
   // } 
 
  $identification_Nlle = $_POST['Identification_Nlle'] == 1 ? 0 : $NifAllCase;
  $typePaiment = $_POST['remuneration'] == 2 ? 0 : 1;
  $enabled = 0;
  $Bonus=0;
  $commission=0;
  $prime_leadership=0;
  $payed_date=date("Y-m-d H:i:s");
  
   $datel		  =date_create($payed_date);								
   $date_payed    =date_format($datel,"Y-m-d H:i:s");
  
  $payed_date_limit = date("Y-m-d H:i:s", strtotime($date_payed."+ 1 month"));

 
  if(isset($registration_type) && $registration_type == 1) $enabled = 1;
  $record = 'codeMembre,name,is_company,enabled,lastname,sex,cin_nif,typePaiment,payed,payed_date,payed_date_limit,email,phone,birthdate,address,reference,city,userid,password,entry_date';
  $val = "'".str_db($_POST['CodeMembre'])."',";
  $val .= "'".str_db($_POST['name'])."',";
  $val .= "'".$is_company."',";
  $val .= "'".$enabled."',";
  $val .= "'".str_db($_POST['lastname'])."',"; 
  $val .= "'".str_db($_POST['sex'])."',";
  $val .= "'".($identification_Nlle ? $NifAllCase : $CINallcase )."',"; 
  $val.=" '".($typePaiment ? 'Cheque' : str_db($_POST['NoCompteC']))."',";

  // $val.=" '".$Bonus."',";
  // $val.=" '".$commission."',";
  // $val.=" '".$prime_leadership."',";
  $val.=" '1' ,";
  $val.=" '".$payed_date."',";
  $val.=" '".$payed_date_limit."',";
  
  
  $val .= "'".str_db($_POST['email'])."',";
  $val .= "'".$Tel."',";
  $val .= "'".$birthdate."',";
  $val .= "'".str_db($_POST['address'])."',";
  $val .= "'".$reference."',";
  $val .= "'".str_db($_POST['city'])."',";
  $val .= "'".str_db($_POST['userid'])."',";
  $val .= "'".encryption(str_db($_POST['password']))."',";
  $val .= "'".$date_entry."'";
  
  
    $sql = " insert into ".$table_prefix."clients (";
    $sql .= $record;
    $sql .= ") VALUES (";
    $sql .=  $val;
    $sql .=  ")";  
    $register=execute($sql);
	if($reference!='DIRECT' || $reference!='direct' || $reference!='Direct'){
	 $ref = " select statuts from ".$table_prefix."clients where CodeMembre='".$reference."' ";
	 $exec=execute($ref);
	 $resulta=mysql_fetch_array($exec);
	 if($resulta['statuts']=='AS' || $resulta['statuts']=='ARG'){
		execute(" update ".$table_prefix."clients set prime_leadership=prime_leadership+500 where CodeMembre='".$reference."' ");
	 }elseif($resulta['statuts']=='OR'){execute(" update ".$table_prefix."clients set prime_leadership=prime_leadership+750 where CodeMembre='".$reference."' "); 
	 }elseif($resulta['statuts']=='PT'){execute(" update ".$table_prefix."clients set prime_leadership=prime_leadership+1000 where CodeMembre='".$reference."' "); 
	 }elseif($resulta['statuts']=='EM'){execute(" update ".$table_prefix."clients set prime_leadership=prime_leadership+1250 where CodeMembre='".$reference."' "); 
	 }elseif($resulta['statuts']=='DM'){execute(" update ".$table_prefix."clients set prime_leadership=prime_leadership+1500 where CodeMembre='".$reference."' "); }
	}
	//$last_id = mysql_insert_id();   
	//$last_id = execute(" select max(id) as id from ".$table_prefix."clients where CodeMembre='".$reference."' ");
		//$last_id_in=mysql_fetch_array($last_id);
 /* SEND E-MAIL TO CLIENT */
 $message = $lang_client_['client_registration']['CLIENT_REGISTRATION_MESSAGE'];
 $message = str_replace('{client_name}',ucwords($_POST['name'].' '.$_POST['lastname']),$message);
      $message = str_replace('{link}',abs_client_path.'/register.php?cod='.mb_substr(encryption($_POST['userid'].$_POST['email'].$_POST['name']),0,15),$message);
 $message = str_replace('{link_name}',abs_client_path.'/register.php?cod='.mb_substr(encryption($_POST['userid'].$_POST['email'].$_POST['name']),0,15),$message); 
  if(isset($registration_type)){
	 switch($registration_type){
		case 1:
		  // $message = $lang_client_['client_registration']['CLIENT_IMMEDIATE_REGISTRATION_MESSAGE'];
		  // $message = str_replace('{client_name}',ucwords($_POST['name'].' '.$_POST['lastname']),$message);
		   //require_once(theme_rel_path.'/emails/form_client.php');
			
		break;
		case 2:
		  $message = $lang_client_['client_registration']['CLIENT_REGISTRATION_BY_ADMIN_MESSAGE'];
		  $message = str_replace('{client_name}',ucwords($_POST['name'].' '.$_POST['lastname']),$message);
		break; 
	 }
  }
			    require_once(theme_rel_path.'/emails/form_client.php');
				 $logo = abs_uploads_path.'/bc_logo.png';
				 $message = str_replace('{template_logo}',$logo,$email_template_client_registration_byadmin);
				 $message = str_replace('{CodeMembre}',$_POST['CodeMembre'],$message);
				 $message = str_replace('{name}',$_POST['name'],$message);
				 $message = str_replace('{lastname}',$_POST['lastname'],$message);
				 $message = str_replace('{userid}',$_POST['userid'],$message);
  
 // $mail = new PHPMailer();
  // if($smtp_email){
   // $mail->IsSMTP(); 
   // $mail->Port = $smtp_port;
   // $mail->Host = $smtp_host;
   // $mail->Mailer = 'smtp';
   // $mail->SMTPAuth = true;
   // $mail->Username = $smtp_user;
   // $mail->Password = $smtp_password;
   // $mail->SingleTo = true;
  // }
 // $mail->CharSet = 'UTF-8';
 // $mail->From =" ASCENSION GROUP";// $admin_email; 
 // $mail->FromName =" ASCENSION GROUP"; //$admin_email;
 // $addresses = explode(',',$_POST['email']);
  // foreach($addresses as $val){
    // $mail->AddAddress($val);
  // }
 // $mail->AddReplyTo($admin_email);
 // $mail->Sender=$admin_email;
 // $mail->IsHTML(true); 
 // $mail->Subject = str_replace('{shop_name}',$shop_title,$lang_client_['client_registration']['CLIENT_REGISTRATION_SUBJECT']);
 // $mail->Body = $message;
  // if($mail->Send()){
  // }else{
	  // die('<div class="error_alert">Le Message n\' a pas ete envoye pour le client <br />PHP Mailer Error: ' . $mail->ErrorInfo.'</div>');
  // } 

     $mail = new PHPmailer();
	 $mail->CharSet = 'UTF-8';
    $mail->From =" ASCENSION GROUP";// $admin_email; 
	$mail->FromName =" ASCENSION GROUP"; //$admin_email;
	$mail->Sender=$admin_email;
 $addresses = explode(',',$_POST['email']);
		  foreach($addresses as $val){
			$mail->AddAddress($val);
		  }
    $mail->AddReplyTo($admin_email);
    $mail->SetLanguage('fr','phpmail/language/');
    $mail->Subject='Felicitation enregistrement Réussit!!!';
    $htmlBody='<html>
					<body>
						<center>
						<table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table">
	<tr>
                </tr>';

	$htmlBody.='<tr>
					
				<td>'.$message.'</td></tr>
								</table>
					</center>
			</body>
	</html>';
    $textBody='Ceci est un mail d\'Ascension.';
    $mail->Body = $htmlBody;
    $mail->isHTML(true);
    $mail->AltBody = $textBody;
  // if($mail->Send()){
  // }else{
	  // die('<div class="error_alert">Le Message n\' a pas ete envoye pour le client <br />PHP Mailer Error: ' . $mail->ErrorInfo.'</div>');
  // }
    // unset($mail);
?>