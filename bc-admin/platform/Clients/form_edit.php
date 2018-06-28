<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
$sql = 'select * from '.$table_name.' where id = '.$_POST['id'];
$rs_result = execute($sql);
$rs = mysql_fetch_array($rs_result);
if ($rs[0]){
?>
<form id="add_element_form" method="post">
  <input type="hidden" name="id" id="id" value="<?php echo $rs['id'] ?>" />
  <input type="hidden" name="old_userid" id="old_userid" value="<?php echo $rs['userid'] ?>" />
  <input type="password" style="display:none" name="old_password" id="old_password" value="<?php echo $rs['password'] ?>" />
     <?php require_once(rel_admin_path.'/include/legend_form.php'); ?>

   <div class="container-fluid" id="conteiner_form_loader">
      <div class="checkradio-group" data-icon="icon-ok icon-white">
        <input type="radio" id="private" name="is_company" data-label-name="<?php echo $lang_['clients_accounts']['FIELD_PRIVATE_PERSON']; ?>" data-additional-classes="btn-info" value="private" <?php echo $rs['is_company'] ? '' : 'checked'; ?> />  
        <input type="radio" id="company" name="is_company" data-label-name="<?php echo $lang_['clients_accounts']['FIELD_COMPANY']; ?>" data-additional-classes="btn-info" value="company" <?php echo $rs['is_company'] ? 'checked' : ''; ?> />
      </div>  
      <div class="row-fluid">
         <div class="span6">
            <div class="row-fluid">  
              <input type="text" class="required" name="name" id="name" value="<?php echo $rs['name']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_NAME']; ?>" />
              <input type="text" class="required" name="lastname" id="lastname" value="<?php echo $rs['lastname']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_LASTNAME']; ?>" />
            </div>      
            <div class="row-fluid"> 
			  <input type="text" name="birthdate" id="birthdate" value="<?php echo $rs['birthdate']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_BIRTH']; ?>" /> 
              <input type="text" class="required" name="sex" id="sex" value="<?php echo $rs['sex']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_SEX']; ?>" />			
            </div>
            <div class="row-fluid">
			   <input type="text" class="required email" name="email" id="email" value="<?php echo $rs['email']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_EMAIL']; ?>" />
              <input type="text" class="required" name="phone" id="phone" value="<?php echo $rs['phone']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_PHONE']; ?>" /> 
            </div> 
            <div class="row-fluid">  
			    <input type="text" class="required" name="city" id="city" value="<?php echo $rs['city']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_CITY']; ?>" /> 
              <input type="text" class="required" name="address" id="address" value="<?php echo $rs['address']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_ADDRESS']; ?>" />
            </div>
            <div class="row-fluid">
			   <input type="text" class="required" name="nif" id="nif" value="<?php echo $rs['nif']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_NIF']; ?>" /> 
              <input type="text" class="required" name="reference" id="reference" disabled="disabled" value="<?php echo $rs['reference']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_REFERENCE']; ?>" /> 
            </div>                                        
         </div>
         <div class="span6">
            <div class="row-fluid">  
              <input type="text" class="required" name="userid" id="userid" readonly value="<?php echo $rs['userid']; ?>" data-array="12,12,<?php echo $lang_['clients_accounts']['FIELD_USERID']; ?>" />
            </div>
            <div class="row-fluid">
              <input type="password" class="required" name="password" id="password" value="<?php echo $rs['password']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_PASSWORD']; ?>" /> 
              <input type="password" class="required" name="password2" id="password2" equalTo="#password" value="<?php echo $rs['password']; ?>" data-array="12,6,<?php echo $lang_['clients_accounts']['FIELD_REPEAT_PASSWORD']; ?>" /> 
            </div> 
            <div class="row-fluid">
              <div class="span12">
               <input type="checkbox" id="enable" data-icon="icon-ok icon-white" name="enable" class="bootstyl" data-label-name="<?php echo $lang_['clients_accounts']['FIELD_ENABLE_TO_SHOP']; ?>" data-additional-classes="btn-info btn-block" value="1" <?php echo $rs['enabled'] ? 'checked' : ''; ?> />  
              </div>
            </div>       
         </div>         
      </div>      
      <br/><br/>
      <span class="btn btn-info save_item"><i class="icon icon-white icon-save"></i> <?php echo $lang_['table']['FORM_BTN_SAVE']; ?></span>   
   </div> 
</form>
<?php
}
?>