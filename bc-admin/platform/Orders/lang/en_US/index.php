<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require('general_tags.php');
require_once(rel_client_path.'/include/lib/Zebra_Mptt.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="user-scalable=no,initial-scale=1.0, maximum-scale=1.0 width=device-width" />
    <!-- Styles -->
    <?php require_once(rel_client_path.'/include/inc_css_base.php'); ?>
    <link href="<?php echo abs_admin_path ?>/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo abs_admin_path ?>/css/flexigrid.css" />
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?php echo abs_admin_path ?>/css/flexigrid_IE.css" />
    <![endif]-->    
    

    <!-- icons -->
    <link rel="shortcut icon" href="<?php echo path_img_front ?>/ico/Ag.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo path_img_front ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo path_img_front ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo path_img_front ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo path_img_front ?>/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
<div class="container-fluid Hfill"> <!-- CONTAINER -->
  <div class="row-fluid resp-nav-btn"><!-- ROW-button responsive menu -->
     <?php require_once(rel_admin_path.'/responsive_menu.php'); ?>
  </div><!-- /ROW-button responsive menu -->
  <div class="row-fluid Hfill general_menu_container">
    <div class="span2 Hfill-menu menu-area">
      <!-- menu -->
      <div class="container-fluid Hfill">
        <div class="row-fluid">
         <div class="collapse in" id="main_menu">        
           <?php require_once(rel_admin_path.'/menu.php'); ?>          
         </div>
        </div>
      </div>
      <!-- /menu -->
    </div>  
    <!-- main area -->  
    <?php require('general_tags.php'); ?>   
    <div class="span10 Hfill body-area" style="position:relative;">
             <!-- Breadcrumbs -->
             <div class="container-fluid">
               <div class="row-fluid">
                <div class="span12 breadcrumb-container">
                   <?php echo $breadcrumb; ?>                
                </div>
               </div>
             </div>
             <!-- /Breadcrumbs -->   
        <div class="main_container Hfill">    
          <div class="content_container">  
             <!-- Body general area -->
             <div class="container-fluid">
              <div class="row-fluid">
                 <?php require_once('search.php'); ?>
               <div class="box" id="main_table">
                 <div class="box-header well">
                   <h2><?php echo $box_title; ?></h2>        
                   <div class="box-icon"></div>
                 </div>                 
                 <div class="box-content" id="container_flex" style="padding:0px;">                     
                    <table border="1" width="100%" id="table_scroll">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>                                       
                 </div>
               </div>                     
              </div>                                                                              
             </div>
             <!-- /Body general area -->
          </div> 
        </div>         
    </div>
    <!-- /main area -->
  </div> <!-- /ROW -->
</div> <!-- /CONTAINER -->
                <!-- Modal info -->
                <div id="infomodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="infolabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
                    <span id="infolabel" class="label label-info"></span>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i> <?php echo $lang_['table']['FORM_GENERAL_BTN_CLOSE']; ?></button>
                  </div>
                </div>
                <!-- Modal for delete item -->
                <div id="deletemodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="deletelabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
                    <span id="deletelabel">&nbsp;</span>
                  </div>                  
                  <div class="modal-body"></div>
                </div>    
                <!-- Modal process -->
                <div id="modalprocess" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="processlabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
                    <span id="processlabel">&nbsp;</span>
                  </div>
                  <div class="modal-body">
                   <div class="row-fluid"> 
                    <!--input type="text" name="carrier" id="carrier"  value="" data-array="12,12,<?php //echo $lang_['orders']['FIELD_CARRIER']; ?>" /-->
                   </div>
                   <div class="row-fluid"> 
                    <!--input type="text" name="link_carrier" id="link_carrier"  value="" data-array="12,12,<?php //echo $lang_['orders']['FIELD_CARRIER_LINK']; ?>" /-->
                   </div>                   
                   <div class="row-fluid"> 
                    <!--input type="text" name="tracking_carrier" id="tracking_carrier"  value="" data-array="12,12,<?php //echo $lang_['orders']['FIELD_CARRIER_TRACKING']; ?>" /-->
                   </div>  
                   <div class="row-fluid"> 
                    <input type="text" name="process_date" id="process_date"  value="<?php echo view_date(date("Y-m-d")); ?>" data-array="12,12,<?php echo str_replace('{date_format}',$date_format,$lang_['orders']['FIELD_PROCESS_DATE']); ?>" />
                   </div>                   
                   <div class="row-fluid"> 
                    <input type="checkbox" id="send_client_email" data-icon="icon-ok icon-white" name="send_client_email" class="bootstyl" data-label-name="<?php echo $lang_['orders']['FIELD_SEND_EMAIL_TO_CLIENT']; ?>" data-additional-classes="btn-info" value="1" checked />
                   </div>                                                          
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-info" id="btn-process" aria-hidden="true"><i class="icon-share-alt icon-white"></i> <?php echo $lang_['orders']['PROCESS_BUTTON']; ?></button>
                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i> <?php echo $lang_['table']['FORM_GENERAL_BTN_CLOSE']; ?></button>                    
                  </div>
                </div>                                                             
    <!-- ========================== Javascript ======================== -->  
    <?php require_once(rel_client_path.'/include/inc_js_base_admin.php'); ?>
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/center-div.js"></script> 
	<script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/validate.js"></script> 
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/ajaxForm.js"></script>        
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/qTip2-tooltip.js"></script>  
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/livequery.js"></script> 
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/calculation_jquery.js"></script>   
    <script type="text/javascript" src="<?php echo abs_admin_path ?>/js/flexigrid.js"></script>        
    <script type="text/javascript" src="<?php echo abs_admin_path ?>/js/general_functions.js"></script>    
    <script type="text/javascript">	
	 $(function(){	
		 /* set some global variables for this section (PLEASE NOT DELETE THEM!!!) */
		 $('body').data('admin_path_img','<?php echo path_img_back; ?>');
		 $('body').data('tb','<?php echo $table_name; ?>');
		 $('body').data('sortname','<?php echo $order_by; ?>');
		 $('body').data('sortorder','<?php echo $sort_order; ?>');	
	 });
	</script>    
    <?php 
	  /****** set language with JS file in LANG Directory (NO CHANGE IT PLEASE!!!)*******/
	  if(file_exists(dirname(__FILE__).'/lang/'.languageAdmin.'/'.languageAdmin.'.js'))
	   echo '<script type="text/javascript" src="lang/'.languageAdmin.'/'.languageAdmin.'.js"></script>';
	  /****** initialize a main js file for this section (NO CHANGE IT PLEASE!!!)*******/	
	  if(file_exists(dirname(__FILE__).'/main_script.js'))
	   echo '<script type="text/javascript" src="main_script.js"></script>';		   
	?>  
  </body>
</html>
