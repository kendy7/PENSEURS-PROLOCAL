<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once(rel_client_path.'/include/inc_params.php');
require_once('general_tags.php');
require_once(rel_client_path.'/include/lib/Zebra_Mptt.php');
$sql = 'select * from '.$table_name.' where id = '.$_POST['id'];
$rs_result = execute($sql);
$rs = mysql_fetch_array($rs_result);
if ($rs[0]){
$array_images = $rs['images'] != '' ? unserialize($rs['images']) : '';
$array_attributes = $rs['attributes'] != '' ? unserialize($rs['attributes']) : '';
$array_options = $rs['options'] != '' ? unserialize($rs['options']) : $array_options = array();
if(!empty($array_images)) usort($array_images, build_sorter('principale','desc'));
?>
<form id="add_element_form" method="post">	
   <input type="hidden" name="id" id="id" value="<?php echo $rs['id'] ?>" />
   <?php require_once(rel_admin_path.'/include/legend_form.php'); ?>
   <div class="container-fluid" id="conteiner_form_loader">
      <div class="row-fluid">
        <ul class="nav nav-tabs" id="tab_head" style="margin-bottom:0px;">
          <li class="active"><a href="#tab_general" data-toggle="tab"><?php echo $lang_['products']['TABS_GENERAL']; ?></a></li>
          <li><a href="#tab_images" data-toggle="tab"><?php echo $lang_['products']['TABS_IMAGES']; ?></a></li>
       
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_general">
             <div class="row-fluid">
              <div class="span6">
                  <div class="row-fluid">              
                      <div class="span12">                                         
                       <input type="checkbox" id="visible" data-icon="icon-ok icon-white" name="visible" class="bootstyl" data-label-name="<?php echo $lang_['products']['FIELD_VISIBLE']; ?>" data-additional-classes="btn-primary" value="1" <?php echo ($rs['active'] ? 'checked' : ''); ?> />                    
                       <input type="checkbox" id="showcase" data-icon="icon-ok icon-white" name="showcase" class="bootstyl" data-label-name="<?php echo $lang_['products']['FIELD_SHOWCASE']; ?>" data-additional-classes="btn-primary" value="1" <?php echo ($rs['showcase'] ? 'checked' : ''); ?> />  
                       <input type="checkbox" id="by_exposure" data-icon="icon-ok icon-white" name="by_exposure" class="bootstyl" data-label-name="<?php echo $lang_['products']['FIELD_BY_EXPOSURE']; ?>" data-additional-classes="btn-primary" value="1" <?php echo ($rs['by_exposure'] ? 'checked' : ''); ?> />
                      </div>                                          
                  </div>
                  <br/>               
                  <div class="row-fluid">  
                    <input type="text" class="required" name="name" id="name" value="<?php echo $rs['name']; ?>" data-array="12,6,<?php echo $lang_['products']['FIELD_NAME']; ?>" />
                    <input type="text" class="required" readonly name="code" id="code" value="<?php echo $rs['code']; ?>" data-array="12,6,<?php echo $lang_['products']['FIELD_CODE']; ?>" />                    
                  </div>
                  <div class="row-fluid">
                    <input type="text" class="number<?php echo ($rs['unlimited_availability'] ? '' : ' required'); ?>" name="availability" id="availability" value="<?php echo input_num_formatt($rs['availability'],2,true); ?>" data-array="12,4,<?php echo $lang_['products']['FIELD_AVAILABILITY']; ?>" /> 
                    <div class="span4">
                    <label>&nbsp;</label>                    
                     <input type="checkbox" id="unlimited_availability" data-icon="icon-ok icon-white" name="unlimited_availability" class="bootstyl" data-label-name="<?php echo $lang_['products']['FIELD_UNLUMITED_AVAILABILITY']; ?>" data-additional-classes="btn-info" value="1" <?php echo ($rs['unlimited_availability'] ? 'checked' : ''); ?> />                       
                    </div>                   
                    <input type="text" class="required" name="units" id="units" value="<?php echo $rs['units']; ?>" data-array="12,4,<?php echo $lang_['products']['FIELD_UNITS']; ?>" />
                  </div>                     
                  <div class="row-fluid">                  
                    <select type="text" class="required" name="category" id="category" data-array="12,8,<?php echo $lang_['products']['FIELD_CATEGORY']; ?>">
                      <option value=""><?php echo $lang_['products']['FIRST_OPTION_ON_CATEGORIES_DROPDOWN']; ?></option> 
                      <?php
                        $mptt = new Zebra_Mptt();
                        echo $mptt->get_selectables(0,false,false,$rs['categories']);						
                      ?>		  
                    </select>                    
                    <div class="span4"><label>&nbsp;</label><span class="btn btn-info" id="add_category"><?php echo $lang_['products']['BUTTON_ADD_CATEGORY']; ?></span></div>
                  </div>  
                  <div class="row-fluid">   
                    <div class="span6">
                     <label><strong><?php echo $lang_['products']['FIELD_TYPE_PRICE']; ?>: </strong></label>
                      <div class="checkradio-group" data-icon="icon-ok icon-white">
                        <input type="radio" id="with_vat" name="price_type" data-label-name="<?php echo $lang_['products']['FIELD_PRICE_WITH_VAT']; ?>" data-additional-classes="btn-info" value="1" <?php echo $rs['price_with_tax'] ? 'checked' : ''; ?> />  
                        <input type="radio" id="without_vat" name="price_type" data-label-name="<?php echo $lang_['products']['FIELD_PRICE_WITHOUT_VAT']; ?>" data-additional-classes="btn-info" value="0" <?php echo !$rs['price_with_tax'] ? 'checked' : ''; ?> />
                      </div> 
                   <?php
				     if(plugin_exsists('multitaxes')){
						 echo '<br/><small><strong>'.$lang_['pl_multitax_products_form']['NOTICE_PRICE_TYPE'].'</strong></small><br/><br/>';
					 }
				   ?>                                        
                    </div>
                    <input type="text" class="required number" name="price" id="price" value="<?php echo $rs['price_with_tax'] ? input_num_formatt(((($rs['price']*$rs['tax'])/100)+$rs['price'])) : input_num_formatt($rs['price']); ?>" data-array="12,3,<?php echo $lang_['products']['FIELD_PRICE']; ?>" />
                    <input type="text" class="number" name="offer" id="offer" value="<?php echo $rs['offer'] > 0 ? ($rs['price_with_tax'] ? input_num_formatt(((($rs['offer']*$rs['tax'])/100)+$rs['offer'])) : input_num_formatt($rs['offer'])) : ''; ?>" data-array="12,3,<?php echo $lang_['products']['FIELD_OFFER']; ?>" />               
                  </div>  
                  <div class="row-fluid">   
                    <input type="text" class="number" name="tax" id="tax" value="<?php echo input_num_formatt($rs['tax'],2,true); ?>" data-array="12,4,<?php echo $lang_['products']['FIELD_TAX']; ?>" />
                    <input type="text" class="required number" name="point" id="point" value="<?php echo input_num_formatt($rs['point'],2,true); ?>" data-array="12,4,<?php echo $lang_['products']['FIELD_POINT']; ?>" />

				  </div>  
                   <?php
				     if(plugin_exsists('multitaxes')){
				      $sql_pl_multitax = execute('select * from '.$table_prefix.'taxes');
					   if(mysql_num_rows($sql_pl_multitax) > 0){
				   ?>                  
                        <div class="row-fluid">
                          <div class="span12">
                           <label><strong><?php echo $lang_['pl_multitax_products_form']['LABEL_MULTITAXES']; ?></strong></label>
                         <?php
						   $arr_product_taxes = $rs['pl_multitax'] != '' ? explode(',',$rs['pl_multitax']) : array();
                            while($rs_pl_multitax = mysql_fetch_array($sql_pl_multitax)){
								$tax_checked = !empty($arr_product_taxes) && in_array($rs_pl_multitax['id'],$arr_product_taxes) ? ' checked' : '';
                         ?>
                            <input type="checkbox" data-icon="icon-ok icon-white" name="multitax[]" id="tax_name_<?php echo $rs_pl_multitax['id']; ?>" class="bootstyl" data-label-name="<?php echo $rs_pl_multitax['name'].' ('.num_formatt($rs_pl_multitax['percentage'],2,true).' %)'; ?>" data-additional-classes="btn-info" value="<?php echo $rs_pl_multitax['id']; ?>" <?php echo $tax_checked; ?> />                   
                         <?php						   
                            }		 
                         ?>                    
                          </div>
                        </div>    
                   <?php
					   }
					 }		 
				   ?>                                                                                                   
              </div>
              <div class="span6">
                  <textarea name="description" id="description" class="required hidden" rows="15" data-array="12,12,<?php echo $lang_['products']['FIELD_DESCRIPTION']; ?>"><?php echo $rs['description']; ?></textarea>
              </div>        
            </div>                 
          </div>
          <!--- --------------->
              
          <!--- --------------->
          <div class="tab-pane" id="tab_images">
              <div class="row-fluid">
               <strong class="alert alert-info span12 text-center"><?php echo $lang_['products']['ALERT_FIRST_IMAGE']; ?></strong>
              </div>
              <div class="row-fluid">
               <div class="span12" id="contaienr_upl" style="position:relative;">  
               <!-- --> 
                <?php
				 $counter_img = 1;
				 if(!empty($array_images)){
				   foreach($array_images as $key => $val){
				?>    
                     <div class="span4 duplicate_upl" style="margin-left:0px;margin-right:10px;margin-bottom:10px;border:2px solid #dedede;padding:5px;"> 
                     <input type="hidden" alt="imgpersist" name="imgpersist_<?php echo $counter_img; ?>" id="imgpersist_<?php echo $counter_img; ?>" value="<?php echo $val['urlimg']; ?>" />   
                        <div class="fileupload fileupload-new" data-provides="fileupload">                     
                          <div class="fileupload-new thumbnail" style="width:96%;height:250px;overflow:hidden"><img src="<?php echo path_abs_img_products.'/'.$rs['id'].'/600x600/'.$val['urlimg']; ?>"/></div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="line-height:20px;width:96%;height:250px;overflow:hidden"></div>
                          <div style="height:60px;">
                            <span class="btn btn-block btn-file"><span class="fileupload-new add_file_new"><i class="icon-picture"></i> <?php echo $lang_['products']['SELECT_IMAGE_TEXT']; ?></span><span class="btn-block fileupload-exists edit_file_new"><i class="icon-refresh"></i> <?php echo $lang_['products']['CHANGE_IMAGE_TEXT']; ?></span><input type="file" name="upimg_<?php echo $counter_img; ?>" id="upimg_<?php echo $counter_img; ?>" alt="upimg" /></span>
                            <!--<a href="#" class="btn btn-block fileupload-exists" data-dismiss="fileupload"><i class="icon-remove"></i> Rimuovi Immagine</a>-->
                            <div class="btn btn-danger btn-block deleteupl"><i class="icon-remove icon-white"></i> <?php echo $lang_['products']['REMOVE_IMAGE_TEXT']; ?></div>                
                          </div>              
                        </div>           
                     </div> 
                <?php
				    $counter_img++;
				   }
				 }else{
				?>
                     <div class="span4 duplicate_upl" style="margin-left:0px;margin-right:10px;margin-bottom:10px;border:2px solid #dedede;padding:5px;">    
                        <input type="hidden" alt="imgpersist" name="imgpersist_<?php echo $counter_img; ?>" id="imgpersist_<?php echo $counter_img; ?>" value="" />
                        <div class="fileupload fileupload-new" data-provides="fileupload">                     
                          <div class="fileupload-new thumbnail" style="width:96%;height:250px;overflow:hidden"><img src="<?php echo path_img_back; ?>/img_not_found.jpg"/></div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="line-height:20px;width:96%;height:250px;overflow:hidden"></div>
                          <div style="height:60px;">
                            <span class="btn btn-block btn-file"><span class="fileupload-new"><i class="icon-picture"></i> <?php echo $lang_['products']['SELECT_IMAGE_TEXT']; ?></span><span class="btn-block fileupload-exists"><i class="icon-refresh"></i> <?php echo $lang_['products']['CHANGE_IMAGE_TEXT']; ?></span><input type="file" name="upimg_<?php echo $counter_img; ?>" id="upimg_<?php echo $counter_img; ?>" alt="upimg" /></span>
                            <!--<a href="#" class="btn btn-block fileupload-exists" data-dismiss="fileupload"><i class="icon-remove"></i> Rimuovi Immagine</a>-->
                            <div class="btn btn-danger btn-block deleteupl"><i class="icon-remove icon-white"></i> <?php echo $lang_['products']['REMOVE_IMAGE_TEXT']; ?></div>                
                          </div>              
                        </div>           
                     </div>                
                <?php
				 }
				?>                
                 <!-- -->         
               </div>
              </div>
              <div class="clearfix"></div>
              <div class="row-fluid" style="margin-top:10px;margin-bottom:10px;"> 
                <div class="span12">
                   <span class="btn btn-success" id="addUpl"><i class="icon-plus icon-white"></i> <?php echo $lang_['products']['BUTTON_ADD_IMAGE']; ?></span>
                </div>
              </div>  
          </div>  
          <!--- --------------->    
            
        </div>
      </div>
      <br/><br/>
      <span class="btn btn-info save_item"><i class="icon icon-white icon-save"></i> <?php echo $lang_['table']['FORM_BTN_SAVE']; ?></span> 
   </div> 
</form>
<?php
}
?>