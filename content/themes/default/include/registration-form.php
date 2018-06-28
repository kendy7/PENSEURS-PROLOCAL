<style>
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b3332a; font-weight:bold;}
        label { display:block; margin:15px 0 5px;}
        .prev, .next { background-color:blue; margin:20px 0;padding:5px 10px; color:#fff; text-decoration:none;}
        .prev:hover, .next:hover { background-color:green; color:white; text-decoration:none;}
        .prev { float:left;}
        .next { float:right;}
        #steps { list-style:none; width:50%; overflow:hidden; margin:0px; padding:0px;}
        #steps li {font-size:24px; float:left; padding:10px; color:#b0b1b3;}
        #steps li span {font-size:11px; display:block;}
        #steps li.current { color:#000;}
        #makeWizard { background-color:blue; color:#fff; padding:5px 10px; text-decoration:none; font-size:18px;}
        #makeWizard:hover { background-color:green; color:#FFF;}
		
		.sub{float:right;background-color:blue;color:#fff;border:solid 1px #b0232a;margin: -40px 0 0 -100px;height:25px;}
		
		.error_msg{color:red;}
		.wrapper{width:400px; margin: 0 auto;}
		.border{border:1px solid white;width:310px;}
		.title{color:gray;}
		
		#message{display:none;	margin-top: 100px;color: #fff; width: 400px;height: 100px;border: 2px solid #fff;border-radius: 10px;position: relative;}
		#message h2, #message p{text-align: center;}
		#message #checkmark{margin-left: 170px;}
		#close{position: absolute;right: -8px;top: -10px;}
		.hide{display: none;}
.error_msg{
	background:#F00;
	color:#FFF;
	width:200px;
}
#Identifiant_Nlle_div_1 input{
	width:15px;
	height:20px:
	display:inline-block;
}

#Identifiant_Nlle_div_2 input{
	width:30px;
	height:25px:
	display:inline-block;
}
.naissance select{
height:30px;
width:75px;
}
 .naissance  input{
 height:20px;
width:30px;
 }
 .phonea{
  height:20px;
width:45px;
 }
 .phoneN{
height:20px;
width:20px;
 }
</style>
 <section class="row-fluid registration-page"><!-- BODY ROW -->                
	    <?php

				   function genererCode(){
	do{
		$code=("AG#").rand(0000,9999);
		$reket =execute("Select * from ag_clients where reference ='$code' ");
	}while($code[0]==1);
	return $code;
}
$coder=genererCode();
		   if(!isset($_SESSION['Clogged'])){
         ?>
		<section class="span6 login-container">
          <?php
		  /*** code for registration last step ***/ 
		   if(!isset($_GET['cod'])){
             echo '<h3>'.$lang_client_['client_registration']['TEXT_REGISTERED_CUSTOMERS'].'</h3>';
		   }else{
			 $sql = execute('select userid,email,name,enabled from '.$table_prefix.'clients');
			 while($rs = mysql_fetch_array($sql)){
				if(mb_substr(encryption($rs['userid'].$rs['email'].$rs['name']),0,15) == $_GET['cod']){
					$find_client = true;
				   if($rs['enabled']){
					echo '<div class="alert alert-warning">'.$lang_client_['client_registration']['ALERT_ACCOUNT_ALREADY_CONFIRMED'].'</div>';					   
				   }else{
					execute('update '.$table_prefix.'clients set enabled = 1 where userid ="'.$rs['userid'].'"  ');
					echo '<div class="alert alert-success">'.$lang_client_['client_registration']['ALERT_VALIDATED_SUCCESSFULLY'].'</div>';
				   }
				}
			
			 }
				 if(!isset($find_client)){
               echo '<div class="alert alert-error">'.$lang_client_['client_registration']['ALERT_DETECTED_VIOLATION'].'</div>';
			 }
		   }
		   


		  ?>
           <h4><?php echo $lang_client_['client_registration']['TEXT_EITHER_LOG']; ?></h4> 
           <div id="result-login" class="hide"></div>       
           <form method="post" action="<?php echo abs_client_path; ?>/check.php" accept-charset="UTF-8" id="login-form">    		  
                     <div class="control-group">
                       <div class="controls">
                         <div class="input-prepend">
                          <span class="add-on"><i class="icon-user"></i></span>
                          <input type="text" name="useridLog" id="useridLog" class="required" data-msg-required=" Entrez votre identifiant" placeholder="<?php echo $lang_client_['general']['TEXT_USERID']; ?>" value="" />   
                         </div>
<p id="invalid-useridLog" class="error_msg"></p>						 
                       </div>                       
                     </div>
                     <div class="control-group">
                       <div class="controls">   
                         <div class="input-prepend">                          
                          <span class="add-on"><i class="icon icon-black icon-key"></i></span>
                          <input type="password" name="passwordLog" id="passwordLog" data-msg-required=" Entrez votre mot de passe" class="required" placeholder="<?php echo $lang_client_['general']['TEXT_PASSWORD']; ?>" value="" />
                        </div>
						<p id="invalid-passwordLog" class="error_msg"></p>
                      </div>                                           
                    </div>
                    <span class="btn btn-info unbordered solid squared" id="btn-login"><i class="icon icon-white icon-unlocked"></i> <?php echo $lang_client_['general']['TEXT_LOGIN']; ?></span>&nbsp;&nbsp; <a href="#" class="retrieve-data"><?php echo $lang_client_['general']['TEXT_DATA_FORGOTTEN']; ?></a>
                    <div class="clearfix"></div>              
           </form>
       </section>
<?php
} else
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
?>
        <section class="span6 registration-container" > 
           <h3><?php echo $lang_client_['client_registration']['TEXT_NEW_COSTUMER']; ?></h3>
           <h4><?php echo $lang_client_['general']['TEXT_SIGN_UP']; ?></h4>
           <?php echo $lang_client_['client_registration']['NOTICE_TO_NEW_COSTUMER']; ?>                      
           <br/><br/>
           <h4 class="default-status-registration-form"><?php echo $lang_client_['client_registration']['TEXT_FILL_IN_THE_FORM']; ?> <span id="count_step" class="badge badge-info"></span></h4>
           <div id="result-registration" class="alert alert-success">
		      <?php 
			  if(isset($registration_type)){
				 switch($registration_type){
					case 0:
					  echo $lang_client_['client_registration']['ALERT_FIRST_PHASE_REGISTRATION_COMPLETED'];
					break;
					case 1:
					  echo $lang_client_['client_registration']['ALERT_IMMEDIATE_REGISTRATION_COMPLETED'];
					break;
					case 2:
					  echo $lang_client_['client_registration']['ALERT_REGISTRATION_BY_ADMIN'];
					break; 
				 }
			  }else{
			    echo $lang_client_['client_registration']['ALERT_FIRST_PHASE_REGISTRATION_COMPLETED']; 
			  }
			  ?>
           </div>
          <div style="padding:5px;border:1px solid #fff;border-radius:6px;background:#e5e5e5" class="default-status-registration-form">
    <form action="index.php" id="myform" style="color:gray;"  title="">
        <fieldset>
                  <div class="row-fluid">  
                    <input type="text" class="required"  name="name" id='name' data-msg-min="Minimum 3 caracteres" data-msg-required="Veuillez entrer votre nom! " minlength="3"  maxlength='20' value="" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_NAME']; ?>*" />
                   
				 </div>
				  <p id="invalid-name" class="error_msg"></p>
				 <div class="row-fluid">
                    <input type="text" class="required" name="lastname" id="lastname" value="" minlength="3" data-msg-min="Minimum 3 caracteres" data-msg-required="Veuillez entrer votre prenom! " data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_LASTNAME']; ?>*" /> 
				  </div>
				   <p id="invalid-lastname" class="error_msg"></p>
				<div class="row-fluid">
					<select id="sexe" class="required" name="sex" data-msg-required="Choisir votre sexe!" data-array="12,6,<?php echo $lang_client_['client_registration']['FIELD_LABEL_SEX']; ?>*">
						<option value="" selected="1" > Quel est votre sexe?</option>
						<option value="Masculin"> Homme </option>
						<option value="Feminin"> Femme </option>
						<option value="Autre"> Autre </option>
					</select>
                </div>
				 <p id="invalid-sexe" class="error_msg"></p>
				 <label> Quel est votre date Naissance?</label>
				  <div class="row-fluid naissance" >
			  
								<select  name="day" class="required" id="day" value="" data-msg-required="Choisir le jour votre  de naissance!" >
												
												
													<option value="" selected="1">Jour</option>
													<option value="01">1</option>
													<option value="02">2</option>
													<option value="03">3</option>
													<option value="04">4</option>
													<option value="05">5</option>
													<option value="06">6</option>
													<option value="07">7</option>
													<option value="08">8</option>
													<option value="09">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
								</select><span id="invalid-day" style="color:#F00;" class="error_msg"></span>
							
										<select name="month" class="required" id="month" min='1' data-msg-required="Choiair le mois de votre naissance" >
											<option value="" selected="1">Mois</option>
											<option value="01">Jan</option>
											<option value="02">Fév</option>
											<option value="03">Mars</option>
											<option value="04">Avr</option>
											<option value="05">Mai</option>
											<option value="06">Jun</option>
											<option value="07">Juil</option>
											<option value="08">Aoû</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Déc</option>
								</select><span id="invalid-month" style="color:#F00;" class="error_msg"></span>
							
								<input type="text" class="required" data-msg-min=" Vous devez entrer 4 chiffres " data-msg-required="Entrez l'année de votre naissance" minlength="4" maxlength="4" name="year" id="year">
				         <span style="color:black"><I>Exemple: 28-février-1980</I></span>  
				<span id="invalid-year" style="color:#F00;" class="error_msg"></span>
				</div>

							
							
						   				  
				 
								<div class="row-fluid">			 
									<select class="required" id="Identifiant_Nlle" data-array="12,12,<?php echo "Fournir votre NIF ou CIN ";?>" data-msg-required="Founir votre CIN ou votre NIF" name="Identifiant_Nlle">
										<option value="">Selectionnez votre NIF ou CIN</option>
										<option value="1">CIN</option>
										<option value="2">NIF</option>
								   </select>

								</div>
								<p id="invalid-Identifiant_Nlle" class="error_msg"></p>
  
								<div id="Identifiant_Nlle_div_1" class="row-fluid Identifiant_Nlle_divs" style="display:none">
					
									<label> Entrer votre CIN:</label>
														 <input type="text" minlength="2" class="required" maxlength="2" onkeyup="verif_integer(this)" name="cin_1" id="cin_1" value=""  /> 
														<input type="text" minlength="2" class="required" maxlength="2" onkeyup="verif_integer(this)" name="cin_2" id="cin_2" value=""  /> 
														<input type="text" minlength="2" class="required" maxlength="2" onkeyup="verif_integer(this)" name="cin_3" id="cin_3" value="" /> 
														<input type="text" minlength="4" class="required" maxlength="4" onkeyup="verif_integer(this)" name="cin_4" id="cin_4" value="" /> 
														<input type="text" minlength="2" class="required" maxlength="2" onkeyup="verif_integer(this)" name="cin_5" id="cin_5" value=""  /> 
														<input type="text" minlength="5" class="required" maxlength="5" onkeyup="verif_integer(this)" name="cin_6" id="cin_6" value="" /> 
											  <span style="color:black"><I>Exemple: 01-02-04-0123-01-01234</I></span>    
								</div><p id="cin_1 cin_2 cin_3 cin_4 cin_5 cin_6" class="error_msg"></p>

									  
								<div id="Identifiant_Nlle_div_2" class="row-fluid Identifiant_Nlle_divs" style="display:none">
										<label> Entrer votre NIF:</label>
														<input type="text" minlength="3" class="required" maxlength="3" onkeyup="verif_integer(this)" name="nif_1" id="nif_1" value=""  /> 
														<input type="text" minlength="3" class="required" maxlength="3" onkeyup="verif_integer(this)" name="nif_2" id="nif_2" value="" /> 
														<input type="text" minlength="3" class="required" maxlength="3" onkeyup="verif_integer(this)" name="nif_3" id="nif_3" value="" /> 
														<input type="text" minlength="1" class="required" maxlength="1" onkeyup="verif_integer(this)" name="nif_4" id="nif_4" value="" /> 
											  <span style="color:black"><I>Exemple: 012-012-012-0</I></span>     
								</div>
        </fieldset>
        <fieldset>
								<div class="row-fluid">  
									<input type="text" class="required email" name="email" id="email" value="" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_EMAIL']; ?>*" />
									<span style="color:black"><I> exemple@gmail.tld</I></span> 
								</div>
							<p id="invalid-email" class="error_msg"></p>
								<div class="row-fluid">
									<input type="text" class="required phonea"  name="phoneA" id="phone" onkeyup="verif_integer(this)" value="(+509)" readonly  /> 
									<input type="text" class="required phonea" minlength="4" maxlength="4" name="phone" id="phone" onkeyup="verif_integer(this)" value="" />- 
									<input type="text" class="required phoneN" minlength="2" maxlength="2" name="phone2" onkeyup="verif_integer(this)" value=""  />- 
									<input type="text" class="required phoneN" minlength="2" maxlength="2"name="phone3" onkeyup="verif_integer(this)" value="" />
								 </div>
							<p id="invalid-phone" class="error_msg"></p>
								<div class="row-fluid">  
									<input type="text" class="required"  name="address" id="address" value="" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_ADDRESS']; ?>*" />
								</div>
							<p id="invalid-address" class="error_msg"></p>
								<div class="row-fluid">
									<input type="text" class="required" minlength="5" name="city" id="city" value="" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_CITY']; ?>*" /> 
								</div>
							<p id="invalid-city" class="error_msg"></p>
								<div class="row-fluid">			 
									<select class="required" name="remuneration" id="remuneration" data-array="12,12,<?php echo "Type de remuneration ";?>" data-msg-required="Choisir un type de remuneration" name="Identifiant_Nlle">
										<option value="">--Type rémunération--</option>
										<option value="1" name="Cheque">Cheque</option>
										<option value="2" name="virement">Virement Banquaire</option>
								   </select>
								   <div id="remuneration_div_1" class="remuneration row-fluid" style="display:none">
									 <input type="hidden" class="required" name="paimentC" id="paimentC" value="cheque" /> 

								   </div>
								   <div id="remuneration_div_2" class="remuneration row-fluid" style="display:none">
  										 <input type="text" onkeyup="verif_integer(this)" class="required" name="NoCompteC" id="paimentC" value="" data-array="12,12,<?php echo "Numero du compte";//$lang_client_['client_registration']['FIELD_LABEL_Numero_compte']; ?>*" /> 
								   </div><p id="invalid-paimentC" class="error_msg"></p>
								</div>
								<p id="invalid-remuneration" class="error_msg"></p>
								<?php
								 if(($_SESSION['Clogged'])){
								
								?>
								<div class="row-fluid hidden">
									<input type="text" class="required"name="reference" minlength="4" data-msg-min="Minimum 4 caracteres" id="reference" value="<?php echo $rs['CodeMembre'];?>" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_REFERENCE']; ?>*" /> 
						       </div>
							
							 <?php
							 }else{
							 ?>
							 <div class="row-fluid">
									<input type="text" class="required"name="reference" minlength="4" data-msg-min="Minimum 4 caracteres" id="reference" value="<?php echo $rs['CodeMembre'];?>" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_REFERENCE']; ?>*" /> 
						       </div>
							   <p id="invalid-reference" class="error_msg"></p>
							 <?php
							 }
							 ?>
        </fieldset>

       <fieldset>
	   
	                    <div class="row-fluid">  
                    <input type="text" class="required" minlength="3" data-msg-min="Minimum 3 caracteres" name="userid" id="userid" value="" data-array="12,12,<?php echo $lang_client_['general']['TEXT_USERID']; ?>*" />
                  </div><p id="invalid-userid" class="error_msg"></p>
                  
				  <div class="row-fluid">
                    <input type="password" class="required" name="password" id="password" value="" data-array="12,12,<?php echo $lang_client_['general']['TEXT_PASSWORD']; ?>*" /> 
                  </div><p id="invalid-password" class="error_msg"></p>
                  
				  <div class="row-fluid">
                    <input type="password" class="required" name="password2" id="password2" equalTo="#password" value="" data-array="12,12,<?php echo $lang_client_['general']['TEXT_REPEAT_PASSWORD']; ?>*" /> 
                  </div><p id="invalid-password2" class="error_msg"></p>
				  
				  <div class="row-fluid">
                         <div style="position: relative; font-size:12px;">
							<input id="registration-cgu" data-msg-required="Acceptez les conditions pour valider" class="required" name="cgu" value="ok" type="checkbox">
							<font color="green">         J'accepte <a href="#" class="retrieve-condition" style="text-decoration : underline" >les conditions d'integration au programme </a>de Ascension Group </font> <span class="mandatory-item" style="top: 10px;">*</span>                
						</div>
				  </div><p id="invalid-registration-cgu" class="error_msg"></p>
				   <div class="row-fluid hidden">
                    <input type="text" class="required" readonly class="required" name="CodeMembre" id="CodeMembre" value="<?php echo $coder;?>" data-array="12,12,<?php echo $lang_client_['client_registration']['FIELD_LABEL_CODEMEMBRE']; ?>*" /> 
                  </div> 
                  <div class="row-fluid">
                    <div class="span6">  
                       <label id="reload-captcha" class="btn btn-link btn-small"><i class="icon-repeat"></i> <?php echo $lang_client_['contacts']['RELOAD_CAPTCHA']; ?></label>                
                       <img src="<?php echo abs_client_path; ?>/include/lib/cool-php-captcha/captcha.php" id="captcha_image" style="width:100%;height:50px;" />
                    </div>
                    <input type="text" class="required" name="captcha" id="captcha" value="" data-array="12,6,<?php echo $lang_client_['contacts']['ENTER_CAPTCHA_CODE']; ?>*" />
                  </div><p id="invalid-captcha" class="error_msg"></p>                  
                  <!--<div class="row-fluid">
                    <input type="checkbox" class="required" name="privacy" id="privacy" value="1" /> Accetta le condizioni sulla <span class="text-info" id="read_privacy">Privacy</span>
                  </div>--> 
			<p id="invalid-active_military" class="error_msg"></p>
</fieldset>
<input id="submit_app" class="sub" type="button" value="Submit" />
   
				                                 
           </form>          
   
           <br/>        
           <strong class="text-info"><small><?php echo $lang_client_['client_registration']['NOTICE_FIELDS_MANDATORY']; ?></small></strong>
          </div>
           <div class="clearfix"></div>
        </section>
               
     </section><!-- /BODY ROW -->
		<script>
		function verif_integer(champb){
   var chiffresb = new RegExp("[0-9-]");
   var verifb;
   for(x = 0; x < champb.value.length; x++){
      verifb = chiffresb.test(champb.value.charAt(x));
      if(verifb == false){
         champb.value = champb.value.substr(0,x) + champb.value.substr(x+1,champb.value.length-x+1); x--;
       }
      }
    }
</script>	