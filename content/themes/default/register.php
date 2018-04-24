<?php 
 if(isset($_SESSION['Clogged'])){
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
 } 
 $page_title = $lang_client_['client_account']['PAGE_TITLE'];  
 require_once('include/header.php');
?>
 <body>
  <?php require_once('include/body-header.php'); ?>
   <section class="container-semifluid" id="main-container"> <!-- CONTAINER -->
           

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
					  <li class="active"><a href="<?php echo abs_client_path; ?>/register.php"><?php echo $lang_client_['client_account']['TEXT_SIGN_UP']; ?></a></li>
					  					  <li><a href="<?php echo abs_client_path; ?>/Document.php"><?php echo $lang_client_['client_account']['DOC_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path ?>/cart.php"><?php echo $lang_client_['general']['TEXT_SHOPPING_CART']; ?></a></li>
					  <li> <a href="<?php echo abs_client_path; ?>/account.php"><?php echo $lang_client_['client_account']['MENU_COMPTE']; ?></a></li>
					  
                 </ul>
             </div>
         </div>
   
     </section><!-- / BODY breadcrumb -->  
	 
	<?php 
	
       require_once('include/registration-form.php');

	?>                
   </section> <!-- /CONTAINER -->
	<?php 
     require_once('include/footer.php');
    ?>      
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