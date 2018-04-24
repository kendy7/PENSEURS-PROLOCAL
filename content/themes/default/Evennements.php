<?php 
$page_title = $lang_client_['Evennement']['PAGE_TITLE']; 
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
 require_once('include/header.php');
?>
 <body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
  <?php require_once('include/body-header.php'); ?>
 <section class="container-fluid" id="main-container"> <!-- CONTAINER -->
<!----------------------------------------------------- Le corps de la page de la page de l'Evennement ---------------------------------------- -->
 

                                                
												 
												 
<div class="container-semifluid">	 
												 
												 
			<h1> Encours.......</h1>
												  
												  
												  
											 
												  


 
 </div>
 



<!----------------------------------------------------- Fin du corps de la page de la page de l'Evennement ---------------------------------------- -->
	
           
   </section> <!-- /CONTAINER -->
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