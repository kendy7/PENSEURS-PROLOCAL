<?php
/*
 This id html of form to add a new record into database
*/
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
?>
<form id="add_element_form" method="post">	
     <?php require_once(rel_admin_path.'/include/legend_form.php');

function genererCode(){
	do{
		$code=("AG#").rand(0000,9999);
		$reket = "Select * from ag_clients where reference ='$code' ";
		// $reket = "Select * from ag_clients";
	    // $reket.="where reference=";
		// $reket.="'$code'";
		// execute($reket);
	}while($code[0]==1);
	return $code;
}
$coder=genererCode();

	 ?>

   <div class="container-fluid" id="conteiner_form_loader">
   
      <div class="row-fluid">
         <div class="span6">
		 
		  <div class="row-fluid">  
              <input type="text" class="required" name="cdeMembre" readonly id="cdeMembre" value=" <?php echo $coder;?>" data-array="12,12,<?php echo $lang_['clients_accounts']['FIELD_CODEMEMBRE']; ?>" />
            </div>
			
            <div class="row-fluid">  
              <input type="text" class="required" name="name" id="name" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_NAME']; ?>" />
              <input type="text" class="required" name="lastname" id="lastname" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_LASTNAME']; ?>" />
            </div>      
            <div class="row-fluid hidden">
              <input type="text" class="required ignore" name="tax_code" id="tax_code" value="" data-array="12,12,<?php echo $lang_['clients_accounts']['FIELD_TAXCODE']; ?>" /> 
            </div>   
            <div class="row-fluid"> 
			   <input type="date" class="required" name="birthdate" placeholder="Annee-mois-jour exp:2016-12-30" id="birthdate" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_BIRTH']; ?>" /> 
				<select  class="required" name="sex" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_SEX']; ?>">
				<option></option>
				<option value="Masculin"> Masculin </option>
				 <option value="Feminin"> Feminin </option>
				 <option value="Autre"> Autre </option>
				</select>
			</div>
            <div class="row-fluid">
			   <input type="text" class="required email" name="email" id="email" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_EMAIL']; ?>" />
              <input type="text" class="required" onKeyUp="verif_integer(this)" name="phone" id="phone" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_PHONE']; ?>" /> 
            </div> 
            <div class="row-fluid">
              <input type="text" class="required" name="city" id="city" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_CITY']; ?>" /> 			
              <input type="text" class="required" name="address" id="address" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_ADDRESS']; ?>" />
            </div>
            <div class="row-fluid">
			  <input type="text" class="required" onKeyUp="verif_integer(this)" name="nif" id="nif" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_NIF']; ?>" /> 
              <input type="text" class="required" name="reference" id="reference" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_REFERENCE']; ?>" /> 
            </div>                                        
         </div>
         <div class="span6">
            <div class="row-fluid">  
              <input type="text" class="required" name="userid" maxlength="15" id="userid" value="" data-array="12,12,<?php echo $lang_['clients_accounts']['FIELD_USERID']; ?>" />
            </div>
            <div class="row-fluid">
              <input type="password"  class="required" name="password" id="password" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_PASSWORD']; ?>" /> 
              <input type="password" class="required" name="password2" id="password2" equalTo="#password" value="" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_REPEAT_PASSWORD']; ?>" /> 
            </div> 
            <div class="row-fluid">
              <div class="span12">
               <input type="checkbox" id="enable" data-icon="icon-ok icon-white" name="enable" class="bootstyl" data-label-name="<?php echo $lang_['clients_accounts']['FIELD_ENABLE_TO_SHOP']; ?>" data-additional-classes="btn-info btn-block" value="1" checked />  
              </div>
            </div>       
         </div>         
      </div>  
      <br/><br/>    
      <span class="btn btn-info save_item"><i class="icon icon-white icon-save"></i> <?php echo $lang_['table']['FORM_BTN_SAVE']; ?></span> 
   </div>
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
</form>
