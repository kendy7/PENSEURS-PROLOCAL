﻿<?php 
 if(isset($_SESSION['Clogged'])){
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
 } 
 $page_title = $lang_client_['client_account']['PAGE_TITLE'];  
 $AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
 require_once('include/header.php');
?>
 <body>
  <?php require_once('include/body-header.php'); ?>
  <section class="compte">
   <section class="container-semifluid" id="main-container"> <!-- CONTAINER -->
           
	<?php 
     if(isset($_SESSION['Clogged'])){
    ?> 
      <div class="box-header">
           <span class="header-text"><i class="icon icon-black icon-user"></i> <?php echo $page_title; ?></span>     
      </div> 



     <section class="row-fluid"><!-- BODY breadcrumb --> 
	 
	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">

					  <li><a href="<?php echo abs_client_path; ?>/compte.php"><?php echo $lang_client_['client_account']['compte']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Rapport.php"><?php echo $lang_client_['client_account']['MENU_RAPPORT']; ?></a></li>
					   <li><a href="<?php echo abs_client_path; ?>/network.php" target="Blanck_"><?php echo "Reseau"; ?></a></li>
						<?php require_once("Information.php");?>
					  <li><a href="<?php echo abs_client_path; ?>/register.php"><?php echo $lang_client_['client_account']['TEXT_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Document.php"><?php echo $lang_client_['client_account']['DOC_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path ?>/cart.php"><?php echo $lang_client_['general']['TEXT_SHOPPING_CART']; ?></a></li>
                 	  <li class="active"> <a href="<?php echo abs_client_path; ?>/account.php"><?php echo $lang_client_['client_account']['MENU_COMPTE']; ?></a></li>
				 </ul>
             </div>
         </div>
   
     </section><!-- / BODY breadcrumb --> 
	 
     <section class="row-fluid myaccount-page"><!-- BODY ROW -->
       
        <div class="span9">
             
		
         <div id="step-change-data-account" class="account-part active<?php echo (!isset($_GET['type']) || $_GET['type'] == 'account_info' ? '' : ' hide'); ?>">
           
		   <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_INFO']; ?></div>
           <form id="form-change-your-data" method="post" action="<?php echo abs_client_path; ?>/account-actions.php" accept-charset="UTF-8">
           <input type="hidden" name="type-change[]" id="type-change-data" value="change_data" />
            <div class="row-fluid">
              <input type="text" class="required" name="name" id="name" value="<?php echo $rs['name']; ?>" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_NAME']; ?>*" />
              <?php echo $rs['is_company'] ? '' : '<input type="text" class="required" name="lastname" id="lastname" value="'.$rs['lastname'].'" data-array="12,4,'.$lang_client_['client_account']['FIELD_LABEL_LASTNAME'].'*" />'; ?>
			  <input type="text" class="required" name="city" id="city" value=<?php echo $rs['city']; ?> data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_CITY']; ?>*" /> 
            </div>
            <div class="row-fluid">
              <input type="text" class="required email" name="email" id="email" value="<?php echo $rs['email']; ?>" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_EMAIL']; ?>*" />
              <input type="text" class="required number" name="phone" id="phone" value="<?php echo $rs['phone']; ?>" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_PHONE']; ?>*" />
			  <input type="text" class="required" name="address" id="address" value="<?php echo $rs['address']; ?>" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_ADDRESS']; ?>*" />
            </div>              
            <div class="row-fluid"> 
              <div class="span12">
                <input type="checkbox" id="change-password" data-icon="icon-ok icon-white" name="change-password" class="bootstyl" data-label-name="<?php echo $lang_client_['client_account']['FIELD_LABEL_CHANGE_PASSWORD']; ?>" data-additional-classes="btn-info" value="1" /> 
              </div>
            </div>
            <br/>
            <div class="change-password-container hide row-fluid">
              <div class="span12">
                  <div class="row-fluid">
                    <input type="password" class="required ignored" name="old-password" id="old-password" value="" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_CURRENT_PASSWORD']; ?>*" />
					                    <input type="password" class="required ignored" name="password" id="password" value="" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_NEW_PASSWORD']; ?>*" />
                    <input type="password" class="required ignored" name="password2" id="password2" equalTo="#password" value="" data-array="12,4,<?php echo $lang_client_['client_account']['FIELD_LABEL_REPEAT_PASSWORD']; ?>*" />
                  </div>                                   
              </div>
            </div>
            <span class="btn btn-info btn-large squared unbordered solid pull-right btn-save"><?php echo $lang_client_['general']['BUTTON_SAVE']; ?></span>         
            <div class="clearfix"></div>
           </form>
         </div>         

		 
		 
         <?php
		 $orders_rows = '';
		  $sql_or = execute('select * from '.$table_prefix.'orders where id_client = '.$rs['id'].' order by data desc');
		  while ($rs_or = mysql_fetch_array($sql_or)){
			$orders_rows .= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$rs_or['code_order'].'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_or['data']).'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$currency_l.num_formatt($rs_or['grandtotal']).$currency_r.'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS'].'">'.($rs_or['processed'] ? 'Traité' : 'En cour...').'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ACTIONS'].'">
							     <span style="margin-bottom:5px;" class="btn btn-info squared unbordered solid info-order" data-id="'.$rs_or['id'].'"><i class="icon-white icon-info-sign"></i></span>
								 '.(!$rs_or['payed'] && $paypal['status'] && $rs_or['payment_method'] == 'PAYPAL' ? ' <span data-id="'.$rs_or['id'].'" style="margin-bottom:5px;" class="pay-btn btn btn-info squared unbordered solid">'.$lang_client_['client_account']['BUTTON_PAY_NOW'].'</span>' : '' ).'
							   </td>
							</tr>';  
		  }
		 ?>
         <div id="step-my-orders" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'orders' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_ORDERS']; ?></div>
             <?php
			  if($orders_rows != ''){
			 ?>
              <table class="table-striped table-condensed">
                  <thead>
                      <tr>
                          <th><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER']; ?></th>
                          <th><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th class="numeric"><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL']; ?></th>
                          <th><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS']; ?></th>
                          <th><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_ACTIONS']; ?></th>
                      </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $orders_rows; ?>                    
                  </tbody>
              </table>
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_ORDERS'].'</h4></div>
                    <br/>
                    <a class="btn btn-info btn-large squared solid unbordered pull-right" href="'.abs_client_path.'">'.$lang_client_['general']['BUTTON_RETURN_TO_SHOPPING'].'</a>';				
			  }
			 ?>              
         </div>         
                 
       </div>
	   
	   <div id="cl8" class="span3 ">
	                                                  <h6>Publicite pour  d'autre compagnie</h6>
                                                      <div class="row-fluid" style="border-bottom:2px solid #048; margin-right:10px;"> 
													  
													  
													  </div>
													 
													 <div class="row-fluid">
													 
												        <!-- --------- SLIDESHOW ----- -->
														  <?php
														if(plugin_exsists('slideshow')) get_slideshow();
														   ?>
														<!-- ------------- /SLIDESHOW ----  --> 
													 
													 
													 </div>
	   
	   
	   
	   
	   </div>
	   
	   
     </section><!-- /BODY ROW -->
	<?php 
	 }else{
       require_once('include/registration-form.php');
	 }
	?>                
   </section> 
   </section>
   <!-- /CONTAINER -->
	<?php 
     require_once('include/footer.php');
    ?>

    <script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.eislideshow.js"></script> 
    <script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.easing.1.3.js"></script> 
	
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.stepize.js"></script> 
    <script type="text/javascript">
	 $(function(){
		    $('#registration-form').StepizeForm({
			   Steps_Count : '#count_step',
			   Text_Submit:'<i class="icon-white icon-plus"></i> <?php echo $lang_client_['general']['BUTTON_SIGN_UP']; ?>',
			   Text_Next: '<?php echo $lang_client_['general']['STEPPIZED_FORM_NEXT_BUTTON']; ?>',
			   Text_Prev: '<?php echo $lang_client_['general']['STEPPIZED_FORM_PREV_BUTTON']; ?>',			   
			   Selector_Buttons:'#form-btn',
			   Class_Prev:'btn btn-info squared unbordered solid',
			   Class_Next:'btn btn-info squared unbordered solid',
			   Class_Submit:'btn btn-info squared unbordered solid'
			}); 
		$(window).resize(function(){
			$('#registration-form').StepizeForm('Destroy');
		    $('#registration-form').StepizeForm({
			   Steps_Count : '#count_step',
			   Text_Submit:'<i class="icon-white icon-plus"></i> <?php echo $lang_client_['general']['BUTTON_SIGN_UP']; ?>',
			   Text_Next: '<?php echo $lang_client_['general']['STEPPIZED_FORM_NEXT_BUTTON']; ?>',
			   Text_Prev: '<?php echo $lang_client_['general']['STEPPIZED_FORM_PREV_BUTTON']; ?>',
			   Selector_Buttons:'#form-btn',
			   Class_Prev:'btn btn-info squared unbordered solid',
			   Class_Next:'btn btn-info squared unbordered solid',
			   Class_Submit:'btn btn-info squared unbordered solid'
			}); 			
		});		
	 });
	</script>          
  </body>
</html>