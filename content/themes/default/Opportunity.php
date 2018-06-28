<?php
$page_title = $lang_client_['Opportunute']['PAGE_TITLE'];
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
require_once('include/inc_load.php');
require_once(theme_rel_path.'/include/header.php');
?>
<body>
<?php
require_once(theme_rel_path.'/include/body-header.php');
?>


 <div class="container-fluid opportunute">

                                               <!---------------------------- Grand  Image ----------------- -->
														
														  
														  
														 
												 <!-------------------------- Fin du Grand Image --------------------->	 
												
												
												 
												 
									
												 <div class="container-semifluid">
												 
												 <div id="cl8" class="row-fluid">
												 
												 <div style=" border-radius:6px;" class="span9 texte_apropos col1" id="main-container">
                                                       <img src="<?php echo theme_img_path; ?>/opportune.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
													   <h3>L’Opportunité que vous offre ASCENSION GROUP<h3>
													   
													   <p>Ascension Group vous offre l’opportunité de gagner beaucoup d’argents et de mener une vie de confort et de dignité.
													   Elle vous donne la possibilité de créer votre propre entreprise en construisant votre propre réseau de promotion et de vente pour lequel vous recevrez chaque mois des bonus,
													   des primes de leadership, des salaires et des commissions. 
													   Jusqu’à la fin de votre vie et de génération en génération vous bénéficierez les avantages et les profits que rapporte votre entreprise.
													   </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vous serez votre propre patron, vous travaillerez au rythme et aux heures qui vous conviennent, 
													   vous gagnerez beaucoup d’argent, vous serez à l’abri de l’insécurité financière,
													   vous aurez plus de temps pour vous-même et pour votre famille, vous pourrez voyager, visiter le monde et réaliser vos rêves.
													   </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nous sommes la seule entreprise en Haïti utilisant le marketing de réseau qui vous offre réellement l’opportunité de gagner beaucoup d’argent. 
													   Et vous savez pourquoi ? Parce que nous sommes la seule dont la politique commerciale à savoir le choix de nos produits, nos prix, 
													   les avantages et exigences de notre programme de promotion et de vente soient adaptés à la réalité socio-économique de la population haïtienne. 
													   </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nos produits ne sont pas chers et sont très demandés. 
													   Tandis que les avantages de notre programme de promotion sont au maximum, nos exigences sont au minimum. 
													   Donc nous vous offrons une opportunité réelle, concrète et facile à bénéficier. 
													   Désormais, vivre dans le confort et la dignité n’est plus une illusion !
                                                       </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ne perdez pas votre temps, intégrez notre programme et bénéficiez nos avantages que vous n’en trouverez nulle part ailleurs.
													   </p>



												 </div>
												 
												  <div class="span3"> 
												     <h6>Publicite pour  d'autre compagnie</h6>
                                                      <div class="row-fluid" style="border-bottom:2px solid #048; margin-right:10px;"> 
													  
													  
													  </div>
													 
													 
													   <!-- --------- SLIDESHOW ----- -->
														  <?php
														if(plugin_exsists('slideshow')) get_slideshow();
														   ?>
														<!-- ------------- /SLIDESHOW ----  --> 
																							 
												       </div>
											
											
												 </div> 
												 
												 </div>
												 
												 
												 
                  
                                                  


 </div>





<?php
require_once(theme_rel_path.'/include/footer.php');
?>
<script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.eislideshow.js"></script> 
   <script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.easing.1.3.js"></script>

</body>
</html>