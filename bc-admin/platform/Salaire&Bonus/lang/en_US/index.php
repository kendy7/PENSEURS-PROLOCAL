<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require('general_tags.php');
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
				
						 <div class="box-header well">
							   <h2><?php echo $box_title; ?></h2>        
							   <div class="box-icon"></div>
						</div>
						 
						 
						 <div class="span6 offset1"> 
						 
						 <div class="row-fluid">
				             
							  <input class="required" type="radio" name="identification_Nlle" onclick="show_div(1)" checked />&nbsp;Modifier Bonus
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <input class="required" type="radio" name="identification_Nlle" onclick="show_div(2)" />&nbsp; Salaire
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <input class="required" type="radio" name="identification_Nlle" onclick="show_div(3)" />&nbsp; Point
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <input class="required" type="radio" name="identification_Nlle" onclick="show_div(4)" />&nbsp;Commissions
							  
				         </div>
						<form method="POST" action="add.php">
						 				<div class="row-fluid" id="div_1" >
											<?php
												$bonus=execute(" select * from ".$table_prefix."clients_bonus ");
												$rowbonus=mysql_fetch_array($bonus);
												
												$commission=execute(" select * from ".$table_prefix."clients_comission ");
												$rowcommission=mysql_fetch_array($commission);
												
												$salaire=execute(" select * from ".$table_prefix."clients_salaire ");
												$rowsalaire=mysql_fetch_array($salaire);
												
												$points=execute(" select * from ".$table_prefix."nivel_points ");
												$rowpoints=mysql_fetch_array($points);	
											?>
											<div class="row-fluid">  
											     
												<input type="text" class="required" name="AJunior" id="AJunior" value="<?php echo $rowbonus['AJunior']?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Bonus1']; ?>*" />
											   												
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="ASenior" id="ASenior" value="<?php echo $rowbonus['ASenior']?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Bonus2']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="ARGent" id="ARGent" value="<?php echo $rowbonus['ARGent']?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Bonus3']; ?>*" />
											
											</div>
											
											<div class="row-fluid">  
												<input type="submit" class="required" name="bonus" id="bonus" />
											</div>
										</div>
										<div class="row-fluid" id="div_2" style="display:none" >
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AORs" id="name" value="<?php echo $rowsalaire['AOR'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Salaire1']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="APTs" id="name" value="<?php echo $rowsalaire['APT'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Salaire2']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="AEMs" id="name" value="<?php echo $rowsalaire['AEM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Salaire3']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="ADMs" id="name" value="<?php echo $rowsalaire['ADM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Salaire4']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="submit" class="required" name="salaire" id="salaire" />
											</div>
										</div>
										
										
										<div class="row-fluid" id="div_3" style="display:none" >
											
											<div class="row-fluid">  
												<input type="text" class="required" name="APIp" id="name" value="<?php echo $rowpoints['API'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AJ']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AAJp" id="name" value="<?php echo $rowpoints['AAJ'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AS']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="AASp" id="name" value="<?php echo $rowpoints['AAS'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AARG']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="AARGp" id="name" value="<?php echo $rowpoints['AARG'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_OR']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AORp" id="name" value="<?php echo $rowpoints['AOR'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_PT']; ?>*" />
											
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="APTp" id="name" value="<?php echo $rowpoints['APT'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_EM']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AEMp" id="name" value="<?php echo $rowpoints['AEM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_DM']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="ADMp" id="name" value="<?php echo $rowpoints['ADM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_DM']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="submit" class="required" name="points" id="points" />
											</div>
											
											
	
										</div>
										<div class="row-fluid" id="div_4" style="display:none" >
											
											<div class="row-fluid">  
												<input type="text" class="required" name="API" id="name" value="<?php echo $rowcommission['API'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AJ']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AAJ" id="name" value="<?php echo $rowcommission['AAJ'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AS']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="AAS" id="name" value="<?php echo $rowcommission['AAS'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_AARG']; ?>*" />
											</div>
											<div class="row-fluid">  
												<input type="text" class="required" name="ARG" id="name" value="<?php echo $rowcommission['ARG'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_OR']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AOR" id="name" value="<?php echo $rowcommission['AOR'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_PT']; ?>*" />
											
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="APT" id="name" value="<?php echo $rowcommission['APT'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_EM']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="AEM" id="name" value="<?php echo $rowcommission['AEM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_DM']; ?>*" />
											</div>
											
											<div class="row-fluid">  
												<input type="text" class="required" name="ADM" id="name" value="<?php echo $rowcommission['ADM'];?>" data-array="12,4,<?php echo $lang_['Salaire&Bonus']['Pts_DM']; ?>*" />
											</div>
											
											
											<div class="row-fluid">  
												<input type="submit" class="required" name="commission" id="commission" />
											</div>
										</div>
						 
						 
						 
							</form>
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
                <!-- Modal add category -->
                <div id="addmodalcategories" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addmodalcategorieslabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
                    <span id="addmodalcategorieslabel">&nbsp;</span>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <button class="btn btn-info save_item"><i class="icon icon-white icon-save"></i> <?php echo $lang_['table']['FORM_BTN_SAVE']; ?></button> 
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
    <script type="text/javascript" src="<?php echo abs_admin_path ?>/js/tinymce/tinymce.min.js"></script>    
	<script>	
		function show_div(id)
		{
		for (var i = 1; i <= 4; i++)
		{
		if (i == id)
		{
		document.getElementById('div_' + i).style.display = 'block';
		}
		else
		{
		document.getElementById('div_' + i).style.display = 'none';
		}
		}
		}</script>
	<script type="text/javascript">	
	 $(function(){	
		 /* set some global variables for this section (PLEASE NOT DELETE THEM!!!) */
		 $('body').data('admin_path_img','<?php echo path_img_back; ?>');
		 $('body').data('tb','<?php echo $table_name; ?>');
		 $('body').data('sortname','<?php echo $order_by; ?>');
		 $('body').data('sortorder','<?php echo $sort_order; ?>');
		 $('body').data('languageA','<?php echo languageAdmin; ?>');	
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
