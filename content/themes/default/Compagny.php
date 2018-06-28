<?php
$page_title = $lang_client_['Compagnie']['PAGE_TITLE'];
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
require_once('include/inc_load.php');
require_once(theme_rel_path.'/include/header.php');
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
<?php
require_once(theme_rel_path.'/include/body-header.php');
?>

            <div class="container-fluid">
			
			<div class="container-semifluid" id="main-container">  
			<div class="row-fluid texte_apropos"> 
			
			
			<aside style=" border-radius:6px;" class="left-sidebar span2 couleur1">
                     <nav>
                <ul class="nav nav-tabs nav-stacked" id="menu-step-change-data-account">
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Compagnie' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Compagnie" data-rel="#step-compagny"><?php echo $lang_client_['Compagnie']['MENU_Compagnie']; ?></a></li>
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Fondateur' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Fondateur" data-rel="#step-Fondation"><?php echo $lang_client_['Compagnie']['MENU_Fondateur']; ?></a></li>
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Vision' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Vision" data-rel="#step-vision"><?php echo $lang_client_['Compagnie']['MENU_Vision']; ?></a></li> 
                <li <?php echo (isset($_GET['type'])&& $_GET['type'] == 'MENU_MisOb' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_MisOb" data-rel="#step-Misob"><?php echo $lang_client_['Compagnie']['MENU_ALL_MisOb']; ?></a></li>
                
			    <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Chiffre' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Chiffre" data-rel="#step-chiffre"><?php echo $lang_client_['Compagnie']['MENU_Chiffre']; ?></a></li>

				
				<li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Partenaire' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Partenaire" data-rel="#step-partenaire"><?php echo $lang_client_['Compagnie']['MENU_Partenaire']; ?></a></li>
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Perpective' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Perpective" data-rel="#step-Perpective"><?php echo $lang_client_['Compagnie']['MENU_Perpective']; ?></a></li>				
              </ul>
                </nav>        
           </aside>        
			
			
			

			
			
			<div style=" border-radius:6px;" class="span7 col1" id="main-container">
			
			<!--------------------------------- Partie  de la   Compagnie ---------------->
			<div id="step-compagny" class="account-part active<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Compagnie' ? '' : ' hide'); ?>">
			
			
			
													   
													   
									<img src="<?php echo theme_img_path; ?>/produit/logo.png" width="250" height="180" align="left" style="padding:4px;"/>
													  
													   <h2>Qui sommes nous ?</h2>
													  
													   <p>  Nous sommes ASCENSION GROUP une entreprise haïtienne citoyenne qui oeuvre au bien-être individuel et collectif des haïtiens. 
													   Nous évoluons dans le secteur network marketing et notre mission est de promouvoir la production nationale. 
													   Nous vous offrons des produits locaux de qualité et à bon prix : riz, poids, farine, sucre, protéine, manba (beurre d’arachnide),
													   confiture, valise à femme, vêtement, sandale etc...
                                                       </p>
													    <p>
													   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notre plan de marketing est ce qu’il y a de mieux en Haïti vous permettant d’échapper à la vie de manque, de misère,
													   de désespoir ou d’insécurité financière qui caractérisent votre quotidien. 
													   Il vous offre l’opportunité de mener une vie de confort et de dignité. 
													   </p>
													   <p>
													   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Il est simple, facile à faire, exige peu de temps et vous rapporte beaucoup d’argents. 
													   Il vous suffit de vouloir le faire, de le faire, et fini vos petits problèmes financiers. 
													   Parmi les différentes options qui vous sont offertes en Haïti, il est le seul qui vous permettra réellement, 
													   en peu de temps et en toute dignité, de connaitre une certaine mobilité sociale ascendante. 
													   Vous gagnerez entre 7,500.00 gourdes (soit $ 125 us) à 100,000.00 gourdes (soit $ 1667 us) chaque mois.
													  </p>
													   <p>
													   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ajouter a cela les primes de leadership et les commissions.
                                                       Désormais, si vous faites dix, quinze, vingt ans de carrière sans pouvoir rien réaliser pour vous-même et pour votre famille, 
													   cela ne dépend que de vous. AG est la solution et elle est à votre portée. Elle est l’alternative que vous attendez. 
													   Elle vous donne l’opportunité de faire d’une  pierre plusieurs coups : changer votre vie, contribuer dans celles des autres, 
													   et plus largement contribuer dans le développement de votre pays.
                                                       Ne perdez pas votre temps, intégrez notre programme et bénéficiez nos avantages que vous n’en trouverez nulle part ailleurs !
													   </p>


													   
												

			
			
			</div>
			
			<!--------------------------------- Partie  de la  fondation --------------------------->
			<div id="step-Fondation" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Fondateur' ? '' : ' hide'); ?>">
			<div class="row-fluid">
			<div class="span5">
			<img src="<?php echo theme_img_path; ?>/logo.png" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			</div>
			<div class="span7">
 			<h3>Fondation de AG</h3>
													   
													   <p>ASCENSION GROUP est fondée en avril 2016 par un groupe d’entrepreneurs haïtiens dynamiques et progressistes 
													   qui s’engagent à apporter leurs pierres dans la construction d’une nouvelle Haïti où chacun peut vivre dans un minimum 
													   de confort et de bien-être qui honore la dignité humaine. 
													   </p>
			
			
			</div>
			</div>
			</div>
			
			<!--------------------------------- Partie de la Vision --------------------------->
			 <div id="step-vision" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Vision' ? '' : ' hide'); ?>">
			  <div class="row-fluid">
			  <div class="span5">
			  <img src="<?php echo theme_img_path; ?>/produit/vision.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			  </div> 
              <div class="span7">			  
														 <h3>Vision et valeurs</h3>
													   <p>
                                                       AG est une entreprise haïtienne citoyenne qui oeuvre au bien-être individuel et collectif des haïtiens. 
													   Elle s’enracine dans l’idée selon laquelle l’intérêt de toute organisation sociale est la réalisation de l’homme dans le respect de sa dignité.
													   Ainsi, s’inscrit-elle dans une visée « mouniste » et fait du respect de la dignité humaine, 
													   de la solidarité, du bien-être et du sens de responsabilité ses valeurs fondamentales.
                                                        </p>
			
			</div>
			</div>
			
			</div>
			
			<!--------------------------------- Partie de mission  et Objectif --------------------------->
             <div id="step-Misob" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_MisOb' ? '' : ' hide'); ?>">
			 <div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/produit/misOb.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
				</div> 
              <div class="span7">									
													 
													   <h3>Mission et objectifs</h3>
													   <p>
                                                       AG a pour mission de promouvoir la production et la consommation des produits locaux. 
													   Ainsi, poursuit-elle un double objectif : d’une part, 
													   standardiser et systématiser la vente des produits locaux ; d’autre part, 
													   accompagner les producteurs locaux et investir dans la production locale.
													   </p>
			
			
			
			
			</div>
			</div>
			
			
			
			
			</div>
			
			<!--------------------------------- Partie du  chiffre d'affaire --------------------------->
			 <div id="step-chiffre" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Chiffre' ? '' : ' hide'); ?>">
			 <div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/produit/chiffre1.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			</div> 
              <div class="span7">										
													 
													   <h3>Chiffre d'affaire</h3>
													   <p>Nous sommes le numéro un (1) des entreprises haïtiennes spécialisées dans la vente directe. Notre chiffre d’affaire dépasse de loin nos prévisions. Nos agents promoteurs indépendants (API) sont satisfaits et leur nombre 
													   ainsi que les demandes pour nos produits sont en constante augmentation. 
													   </p>
													   
													   
			
			</div>
			</div>
			
			
			
			
			
			
			
			</div>
			
			
			
			
			
			
			
			<!--------------------------------- Partie du Partenaire --------------------------->
			 <div id="step-partenaire" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Partenaire' ? '' : ' hide'); ?>">
			 <div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/produit/Partenaire.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
				</div> 
              <div class="span7">									
													 
													   <h3>Partenaire</h3>
													   <p> Nous avons des partenariats commerciaux avec d’autres entreprises ou organisations du secteur productif haïtien. Elles nous alimentent en produits bruts ou finis. 
                                                           Nous sommes ouverts à d’autres partenariats avec toutes entreprises de production qui le souhaitent moyennant le respect des conditions de qualité, de standardisation, de légalité et de dignité.
                                                       </p>
													   
													   
			</div>
			</div>
			
			
			
			
			
			
			
			
			</div>
			
			
			<!--------------------------------- Partie du Perpective --------------------------->
			 <div id="step-Perpective" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Perpective' ? '' : ' hide'); ?>">
			<div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/produit/persv.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			 </div> 
             <div class="span7">									
													 
													   <h3>Perpective</h3>
													   <p>
                                                       AG a pour mission de promouvoir la production et la consommation des produits locaux. 
													   Ainsi, poursuit-elle un double objectif : d’une part, 
													   standardiser et systématiser la vente des produits locaux ; d’autre part, 
													   accompagner les producteurs locaux et investir dans la production locale.
													   </p>
			
			
			</div>
			</div>
			
			
			
			
			
			
			</div>
			
			</div>
			
			
			<div class="span3">
						
							<div class="row-fluid">
								
								</div>
										<div class="fb-page row-fluid" data-href="https://web.facebook.com/ASCENSION-GROUP-257987694565219/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>

			<div class="span3 cl26"> 
			   <!-- --------- SLIDESHOW ----- -->
			      <?php
				if(plugin_exsists('slideshow')) get_slideshow();
		           ?>
				<!-- ------------- /SLIDESHOW ----  --> 
            </div>
			</div>			
			

			
			
			
			</div>
			
			
<!------------------------------------- Menu Fondateur-------------------------------------->






<!------------------------------------- Menu Vision-------------------------------------->


			
<!------------------------------------- Menu Mission /Objectif -------------------------------------->


	
<!------------------------------------- Menu Chiffre d'affaire -------------------------------------->


<!------------------------------------- Menu Partenaires -------------------------------------->


<!------------------------------------- Menu Perpective -------------------------------------->
			
			
			
			</div>
			</div>


 
<?php
require_once(theme_rel_path.'/include/footer.php');
?>
<script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.eislideshow.js"></script> 
<script type="text/javascript" src="<?php echo theme_js_path ?>/localized/jquery.easing.1.3.js"></script> 

</body>
</html>