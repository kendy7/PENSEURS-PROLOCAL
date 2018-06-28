<?php
/*
 This id html of form to add a new record into database
*/
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once(rel_client_path.'/include/inc_params.php');
require_once('general_tags.php');
require_once(rel_client_path.'/include/lib/Zebra_Mptt.php');
                $mptt = new Zebra_Mptt();
                $options_categories_select = $mptt->get_selectables(0,false);
?>
<form id="add_element_form" method="post">	
   <?php require_once(rel_admin_path.'/include/legend_form.php'); ?>
   <div class="container-fluid" id="conteiner_form_loader">
      <div class="row-fluid">
        <ul class="nav nav-tabs" id="tab_head" style="margin-bottom:0px;">
          <li class="active"><a href="#tab_general" data-toggle="tab"><?php echo $lang_['publicity']['TABS_GENERAL']; ?></a></li>
          <li><a href="#tab_images" data-toggle="tab"><?php echo $lang_['publicity']['TABS_IMAGES']; ?></a></li>
          <li class="pull-right">
         
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_general">
             <div class="row-fluid">
              <div class="span6">  

                  <br/>                        
                  <div class="row-fluid">  
				  <?php $random_code = random_cod(10);	?>
                    <input type="text" class="required" name="name" id="name" value="" data-array="12,6,<?php echo $lang_['publicity']['FIELD_NAME']; ?>" />
                    <input type="text" class="required" name="code" readonly id="code" value="<?php echo $random_code;?>" data-array="12,6,<?php echo $lang_['publicity']['FIELD_CODE']; ?>" />  
                  </div>
                                 
              </div>
              <div class="span6">
                  <textarea name="description" id="description" class="required hidden" rows="10" data-array="12,12,<?php echo $lang_['publicity']['FIELD_DESCRIPTION']; ?>"></textarea>
              </div>        
            </div>                 
          </div>
                  
          <div class="tab-pane" id="tab_images">
              <div class="row-fluid">
               <strong class="alert alert-info span12 text-center"><?php echo $lang_['publicity']['ALERT_FIRST_IMAGE']; ?></strong>
              </div>
              <div class="row-fluid">
               <div class="span12" id="contaienr_upl" style="position:relative;">       
                 <div class="span4 duplicate_upl" style="margin-left:0px;margin-right:10px;margin-bottom:10px;border:2px solid #dedede;padding:5px;">    
                    <div class="fileupload fileupload-new" data-provides="fileupload">                     
                      <div class="fileupload-new thumbnail" style="width:96%;height:250px;overflow:hidden"><img src="<?php echo path_img_back; ?>/img_not_found.jpg"/></div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="line-height:20px;width:96%;height:250px;overflow:hidden"></div>
                      <div style="height:60px;">
                        <span class="btn btn-block btn-file"><span class="fileupload-new"><i class="icon-picture"></i> <?php echo $lang_['publicity']['SELECT_IMAGE_TEXT']; ?></span><span class="btn-block fileupload-exists"><i class="icon-refresh"></i> <?php echo $lang_['publicity']['CHANGE_IMAGE_TEXT']; ?></span><input type="file" alt="upimg" /></span>
                        <!--<a href="#" class="btn btn-block fileupload-exists" data-dismiss="fileupload"><i class="icon-remove"></i> Rimuovi Immagine</a>-->
                        <div class="btn btn-danger btn-block deleteupl"><i class="icon-remove icon-white"></i> <?php echo $lang_['publicity']['REMOVE_IMAGE_TEXT']; ?></div>                
                      </div>              
                    </div>           
                 </div>          
               </div>
              </div>
              <div class="clearfix"></div>
              <div class="row-fluid" style="margin-top:10px;margin-bottom:10px;"> 
                <div class="span12">
                   <span class="btn btn-success" id="addUpl"><i class="icon-plus icon-white"></i> <?php echo $lang_['publicity']['BUTTON_ADD_IMAGE']; ?></span>
                </div>
              </div>  
          </div>   
      
        </div>
      </div>
      <br/>
      <span class="btn btn-info save_item"><i class="icon icon-white icon-save"></i> <?php echo $lang_['table']['FORM_BTN_SAVE']; ?></span> 
   </div> 
</form>