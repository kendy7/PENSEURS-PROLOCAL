<?php
$page_title = str_replace('index.php',$shop_title,last_selfURL());
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
  
  
  
   
  <?php require_once('include/body-header.php');?> 


																					
	                                                                                 
                                                                                     
   
   
   <!----------------------------------------------------- Le corps de la page de la page de l'index ---------------------------------------- -->
    <section class="container-fluid hero">
                      	
								
                               <!---------------------------- Grand  Image ----------------- -->
							            <div class="container-semifluid">
										   
										   
										   
										
										
										
										
										
										
										
										 <!--    Start Hero Caption    -->
										  <section class="caption">
											<div class="row-fluid">
											 <div class="span12">
											  <h1 class="mean_cap">Rejoignez-Nous!</h1>
											 </div>
											  <div class="row-fluid">
											  <div class="span12">
											  <h2 class="sub_cap">Pour une vie de confort et de dignité</h2>
								
											  </div>
											  </div>
                                              
											  
											</div>
										  </section>
										  
										  <div class="row-fluid hausse">
											<div  class="offset9 span3">
                                            <div class="fb-page" data-href="https://web.facebook.com/Soyons-positifs-1617458738571753/?ref=bookmarks" data-tabs="timeline" data-width="300" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
								            </div>
										</div>
										  
										  </div> 
										  <!--    End Hero Caption    -->
						     <!-------------------------- Fin du Grand Image --------------------->	
							 <!---------------------------- AG en Image-------- -->
									
									
	</section>
	 
	<section class="container-fluid services" id="services">		  
	                        
								 <!--  Start Services Section  -->
        <div class="container-semifluid" id="main-container">

      <!--    Start Services Titles    -->
      <div class="row-fluid">        
        <h1 class="mean_title">Jouir votre vie mieux avec Ascension Group</h1>
        <h2 class="sub_title"> Essayer de nous connaitre en quelque mots:</h2> 
      </div>
      <!--    End Services Titles    -->

      <!--    Start Services List    -->
      <div class="row-fluid services_list">
        <div class="span3">
          <img src="<?php echo theme_img_path; ?>/produit/vision.jpg" alt="" title="" width="100" height="100" class="serv_icon"/>
          <h2 class="title">Vision et valeurs</h2>
			<p>
			AG est une entreprise haïtienne citoyenne qui oeuvre au bien-être individuel et collectif des haïtiens. Elle s’enracine dans l’idée selon laquelle l’intérêt de toute organisation sociale est la réalisation de l’homme dans le respect de sa dignité.Ainsi, s’inscrit-elle dans une visée « mouniste » et fait du respect de la dignité humaine, de la solidarité, du bien-être et du sens de responsabilité ses valeurs fondamentales.
			</p>
        </div>

        <div class="span3">
          <img src="<?php echo theme_img_path; ?>/produit/misOb.jpg" alt=""  title="" class="serv_icon"/>
          <h2 class="title">Mission et objectifs</h2>
			  <p>
			AG a pour mission de promouvoir la production et la consommation des produits locaux. Ainsi, poursuit-elle un double objectif : d’une part, standardiser et systématiser la vente des produits locaux ; d’autre part, accompagner les producteurs locaux et investir dans la production locale.
			</p>        
		</div>

        <div class="span3">
          <img src="<?php echo theme_img_path; ?>/produit/chiffre1.jpg" alt="" title="" width="100" height="50" class="serv_icon"/>
          <h2 class="title">Chiffre d'affaire</h2>
			<p>Nous sommes le numéro un (1) des entreprises haïtiennes spécialisées dans la vente directe. Notre chiffre d’affaire dépasse de loin nos prévisions. Nos agents promoteurs indépendants (API) sont satisfaits et leur nombre ainsi que les demandes pour nos produits sont en constante augmentation. 
			</p>
		  </div>

        <div class="span3">
          <img src="<?php echo theme_img_path; ?>/produit/persv.jpg" alt="" title="" width="100" height="100" class="serv_icon"/>
          <h2 class="title">Perspective</h2>
			 <p>
			AG a pour mission de promouvoir la production et la consommation des produits locaux. Ainsi, poursuit-elle un double objectif : d’une part, standardiser et systématiser la vente des produits locaux ; d’autre part, accompagner les producteurs locaux et investir dans la production locale.
			</p>
		  </div>
    </div>
      <!--    End Services List    -->

      <!--    Start Button    -->
      <div class="btn_holder">
	  <a class="btn_fancy" href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Compagnie">
          <div class="solid_layer"></div>
          <div class="border_layer"></div>
          <div class="text_layer">Lisez-nous!!!</div>
        </a>
      </div>
      <!--    End Button    -->

   
    <!--  End Services Section  -->					
													 
									
													 
												
                                                  

     </div>
                            
	</section>
	
	
	 <!--  Start Quote Section  -->
    <section class="quote">
        <blockquote>
          <p>Penseur a votre <span class="strong">service</span> depuis Haiti. </p>
          <hr/>
          <span class="author strong">M.P.M</span>
        </blockquote>
    </section>
						  <!----------------- Fin AG en Image ----------
<!----------------------------------------------------- Fin du corps de la page de la page de l'index ---------------------------------------- -->



                                                                                      



	<?php 
     require_once('include/footer.php');
    ?>      
	
	
	      
   <script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.eislideshow.js"></script> 
   <script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.easing.1.3.js"></script> 
    <!-- Le javascript
      ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
				
  </body>
</html>