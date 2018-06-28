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
						 
						 
						 
		       <div class="span12"> 
			   <div class="box" id="main_table">
			   <div class="box-header well">
							   <h2><?php echo $box_title; ?></h2>        
							   <div class="box-icon"></div>
				</div>
				 
			<div class="box-content" id="container_flex" style="padding:0px;">                     
                    <table border="0" width="100%" id="table_scroll">
                        <tr>
							<td>
							<div class="span3"></div>
							</td>
						</tr>
						<tr>
							<td>
						<h4> Entrer l'identifiant ou le CIM du membre pour qui vous voulez payer.</h4>
							</td>
						</tr>
						<tr>
						
							<td> <div class="span3"></div>
								<div class="row-fluid span4" >
									<form method="POST" id="buttonSearch">
										<input type="text" id="searchC" name="searchC"/>
										<input type="submit" id="button" name="search" value="Rechercher" class="btn btn-info save_item"/>
									</form>
								</div>
							</td>
                        </tr>
						 <tr>
							<td>
							<div class="span3"></div>
							</td>
						</tr>
                    </table>
					<?php
					
					 $action="hidden";
					if(isset($_POST['search']))
					{
						 if(empty($_POST['searchC'])){
						  echo "
						      <script>
								alert('Veuillez saisir l\'identifiant ou le CIM du membre ');
							  </script>";
						 }else if(!empty($_POST['searchC'])){
								 $action="visible";
								$user=$_POST['searchC'];
					        function Info_Membre(){
										 $TabInfo=array();
								$reket = execute("select * from ag_clients where userid='".$_POST['searchC']."' or CodeMembre='".$_POST['searchC']."' ");							
										  while($rows=mysql_fetch_array($reket)){
											 $TabInfo[]=$rows;
										  }
								return $TabInfo;
							}
					?>
							 	<div class="rowfluid <?php echo $action;?>">
								<?PHP
								    $Information=Info_Membre();
								 
							  foreach($Information as $Info){
									$date_payer       =$Info['payed_date'];
									$datelimite=$Info['payed_date_limit'];
								
								$datesys      =date("Y-m-d");
								$datePayer    =date_create($date_payer);
								$datel		  =date_create($datelimite);
								
                                $affdate      =date_format($datePayer,"d-m-Y");
								$affdatelimite=date_format($datel,"d-m-Y");
								
									$date1=new DateTime($date_payer);
									$date2=new DateTime($datelimite);
									$date3=new DateTime($datesys);
									
									$NBJPa=$date1->diff($date2);
									$NBJEa=$date1->diff($date3);
									$NBJRa=$date2->diff($date3);
									
									$NBJP=$NBJPa->days;
									$NBJE=$NBJEa->days;
									$NBJR=$NBJRa->days;
									
									
								?>
								<div class="row-fluid">
								<div class="span2"></div>
									<div class="span3">
										<label>Nom:&nbsp;&nbsp;&nbsp;<?php       echo $Info['name'];?></label>
										<label>CIM:&nbsp;&nbsp;&nbsp;<?php       echo $Info['CodeMembre'];?></label>
										<label>E-mail:&nbsp;&nbsp;&nbsp;<?php    echo $Info['email'];?></label>
										<label>Date Payé:&nbsp;&nbsp;&nbsp;<?php echo $affdate; ?></label>										
									</div>
									
									<div class="span3">
										<label>Prenom:&nbsp;&nbsp;&nbsp;<?php      echo $Info['lastname'];?></label>
										<label>Reference:&nbsp;&nbsp;&nbsp;<?php   echo $Info['reference'];?></label>
										<label>Tel:&nbsp;&nbsp;&nbsp;<?php         echo $Info['phone'];?></label>
										<label>Date limite:&nbsp;&nbsp;&nbsp;<?php echo $affdatelimite; ?></label>
									</div>
								</div>
<div class="row-fluid">
<div class="span2"></div>
<div class="info2">
<font color="red"><?php   echo " Nombre de jour payé: ".$NBJP;?></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="red">Nombre de jour ecoulé:&nbsp;&nbsp;&nbsp;<?php $NBJE=$NBJP-$NBJR;  echo $NBJE; ?></font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="red">Nombre de jour restant:&nbsp;&nbsp;&nbsp;<?php echo $NBJR; ?></font>
</div>


</div>								
					
						<div class="row-fluid">
							<div class="span3"></div>
								   
									<form>
									<strong>Type de Paiment:</strong>&nbsp;&nbsp;&nbsp;
										<input type="radio" name="choix" onclick="show_div(1)" />&nbsp;Paiment à l'avance
										&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="choix" onclick="show_div(2)" />&nbsp;Paiment à temps
									</form>
						
                    <div id="div_1"  style="display:none">
							<form action="add.php" method="POST" id="form">
									
									<div class="span3"></div>
									<div class="span6">
										<div class="row-fluid">
											<input class="required" data-array="6,6,<?php echo "Date Payé :";?>" type="Text" readonly name="date_payed" value="<?php echo $affdatelimite;?>"/>
										
										<select class="required" data-array="6,6,<?php echo "Durée en mois:";?>" name="duration" id="duration" onblur="calculvente()">
									                <option value="0" selected="1">Nombre de mois payé</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
										</select>
										</div>
										<div class="row-fluid">
											<input class="required" data-array="6,6,<?php echo "Date limite :";?>"  type="date" name="date_limit"/>
										
											<input name="nbjours" class="required" data-array="6,6,<?php echo "Nombre de Jours:";?>" value="Jours"readonly  type="text">
										</div>
										<div class="row-fluid">	
											<input name="marge" type="hidden" value="30">
										</div>
										<div class="row-fluid">
											<input type="hidden" name="CIM" value="<?php  echo $Info['CodeMembre']; ?>">
											<input type="SUBMIT" value="Payer" name="Payer" />
										</div>
									 
									</div>
							</form>
							<?PHP
													if(isset($_POST['Payer'])){
													 $date_payed =$_POST['date_payed'];
													 $datelimit  =$_POST['date_limit'];
													 $nbjours    =$_POST['nbJours'];
													 $nbMois     =$_POST['duration'];
													 
														// if(empty($date_payed) || empty($datelimit) || $nbMois){
															// echo "
																// <sript>
																// alert(' Vous devez remplir tout les champs');
																// </sript>
															// ";
														// }
													 echo " jhghjgjhgj ";
													
													}
												
												?>
						</div>   
												
						<!--<div id="div_2"  style="display:none">
							<?php
								//$dat=Date("d-m-Y");
							
							?>
							<form method="POST" id="form">
									
									<div class="span3"></div>
									<div class="span6">
										<div class="row-fluid">
											<input class="required" data-array="6,6,<?php //echo "Date Payé 2:";?>" type="Text" readonly name="date_paye" value="<?php echo $dat;?>"/>
										
										<select class="required" data-array="6,6,<?php //echo "Durée 2:";?>" name="duration" id="duration" onblur="calculvente()">
									                <option value="0" selected="1">Jour</option>
													<option value="3">3</option>
													<option value="9">6</option>
													<option value="8">9</option>
													<option value="12">12</option>
										</select>
										</div>
										<div class="row-fluid">
											<input class="required" data-array="6,6,<?php //echo "Date limite 2:";?>"  type="text" name="datelimite"/>
										
											<input name="nbjours" class="required" data-array="6,6,<?php //echo "Nombre de Jours:";?>" readonly  type="text">
										</div>
										<div class="row-fluid">	
											<input name="marge" type="hidden" value="30">
										</div>
										<div class="row-fluid">
											<input class="required" data-array="3,3,<?php// echo "";?>" type="submit" name="Paid" value="Payer" class="btn submit_login"/>
								        </div>
									 
									</div>
							</form>
						</div>-->
						</div>
					</div>	
							 
							 
							 
							 
							 
							 
							 <?php
							 
							}
						}
					}
					?>				
                 </div>
						 
						 
									
						 
						 
						 
						 
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
		for (var i = 1; i <= 3; i++)
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
