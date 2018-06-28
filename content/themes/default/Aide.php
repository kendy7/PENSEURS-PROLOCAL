<?php
$page_title = $lang_client_['Aide']['PAGE_TITLE'];
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
require_once('include/inc_load.php');
require_once(theme_rel_path.'/include/header.php');
?>
<body>
<?php
require_once(theme_rel_path.'/include/body-header.php');
?>

 <div class="container-fluid imgAide">
			
	<div class="container-semifluid" id="main-container">  
			<div class="row-fluid texte_apropos"> 
			
			
			<aside style=" border-radius:6px;" class="left-sidebar span2 couleur1">
                     <nav>
                <ul class="nav nav-tabs nav-stacked" id="menu-step-change-data-account">
                <li <?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_Aide' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Aide.php" data-rel="#step-compagny"><?php echo $lang_client_['Aide']['MENU_Aide']; ?></a></li>
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'Aide_General' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Aide.php?type=Aide_General" data-rel="#step-Fondation"><?php echo $lang_client_['Aide']['Aide_General']; ?></a></li>
                <li <?php echo (isset($_GET['type']) && $_GET['type'] == 'Aide_Produit' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Aide.php?type=Aide_Produit" data-rel="#step-vision"><?php echo $lang_client_['Aide']['Aide_Produit']; ?></a></li> 
                <li <?php echo (isset($_GET['type'])&& $_GET['type'] == 'MENU_Merci' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Aide.php?type=MENU_Merci" data-rel="#step-Misob"><?php echo $lang_client_['Aide']['MENU_Merci']; ?></a></li>
               			
              </ul>
                </nav>        
           </aside>        
			
			
			

			
			
			<div style=" border-radius:6px;" class="span7 col1"  id="main-container">
			
			<!--------------------------------- Partie  d'Aide nos propos d'aide ---------------->
			<div id="step-compagny" class="account-part active<?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_Aide' ? '' : ' hide'); ?>">
			<div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/Aide/aide3.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			</div> 
             <div class="span7">									
													 
													   <h3>Aide</h3>
													   <p>
                                                       Salut a tous nos visiteurs et futur  membre du  site # 1 des sites commerciales d'haiti.
													   Vous etes sur  la page d'aide du  site. On  va vous  aider a  quelque  dificulter que vous pouvez y avoir.
													   </p>
													   <p>
													   Sur  cette page le sous menu a gauche vous  donne tous  les opportunuite, juste  un clique  sur  ce  que  vous  
													   desirez choisir  et  toutes tes dificulter  seraient resolu en  un peu de temps.
													   
													  Maintenant profiter visiter  le sous  menu et  vous allez  voir  que  la  question  que vous  vous posez, s'est deja repondu..
													   Toutes fois que vous etes pas  satisfaites , vous pouvez poser votre  propre questions  un agent sera disponible pour  vous repondre sur 
													   votre mail sous peu.... Juste allez sur  contactez-nous dans le menu principal  a cote  de l'aide. ou cliquez sur ce lien.
													   </p>
			
			</div>
			</div>
			
			</div>
			
			<!--------------------------------- Partie  d'aide general --------------------------->
			<div id="step-Fondation" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'Aide_General' ? '' : ' hide'); ?>">
			<div class="row-fluid">
			  <div class="span5">
			<img src="<?php echo theme_img_path; ?>/Aide/Aide1.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
				 </div> 
             <div class="span7">									   
													   
													   <h3>Aide Generale</h3>
													   
													   <p>Bonjour ou Bonsoir a tous! 
													   </p>
													   <p>
													   Nous allons vous aider  a bien comprendre le site. Comme vous pouvez le voir ,vous etes sur un site marchand tres dynamiques nomme Ascencion Groupe
													   , le premier site marchand qui se base strictement des produits locaux.
													   Ces produits proviennes d'haiti. Grace  a ce site  vous allez consommer les produits d'haiti avec 
													   le peu que vous avez  et vous allez aussi faire de l'argent.
													   </p>
													   
													   <p>
													   Ce site  n'est pas complique et n'importe internaute peut naviguer  sans aucun danger , juste prendre le soin a lire . Vous devez lire tous 
													   ce qui est ecrit sur une page. Ce sont des explications qui vont , vous faciliter la tache plus  facile.
													   
													   </p>
													   
													   <p>Regardez  maintenant la bar jaune  abricot de votre ecran d'ordinateur , Ceci est le menu principal.
													   Le menu principal comporte les pages suivants : Acceuil, Produit, Opportunuite, Compagnie, Evennement, Votre compte, Contactez-nous, et l'aide.
													   </p>
													   <p>
													   Pour  bien  vous  aidez maintenant  nous allons definir chacun  d'eux. 
													   </p>
													   <p>Acceuil: C'est l entre du site il comporte pas mal  de chose qui soit interressante
													   <p>
													   Produit: Dans cette page que vous allez acheter. A noter pour achter il vous  faut creer un compte.
													   sans cela vous pouvez pas d'acheter.
													   </p>
													   <p> Opportunuite : cette page vous  donne  toutes les opprtunuite qu Ascencion vous offres</p>
													   <p> Compagnie: Dans cette page vous saurez  toutes les  infos d'ascencion , qui l'a cree , sa vision, sa  mission et ses objectives
													   les chiffres d'affaires, les partenaires  et les perpectives.
													   </p>
													   <p>Evennement: la page evennement  comporte  toutes les  evennements de la compagnie d'ascencion , les 
													   evennements passes, recents, futur. 
													   </p>
													   <p> </p>
													   <p> Contactez-vous: La page contactez-nous est cree en  vue  d'ecrire quand vous avez 
													   grandes dificultes et les elements reponses seraient  vous  apporter sur  votre  mails.   
													   </p>
													   <p>Aide : La page d'aide est la pour vous aider de bien comprendre le site.</p>
													   
													   <p> </p>
			
			
			</div>
			</div>
			
			</div>
			
			<!--------------------------------- Partie Questions Reponses. --------------------------->
			 <div id="step-vision" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'Aide_Produit' ? '' : ' hide'); ?>">
			   <div class="row-fluid">
			  <div class="span5">
			   <img src="<?php echo theme_img_path; ?>/Aide/Aide2.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
			    </div> 
             <div class="span7">
				 <h3>Questions / Reponses</h3>
													 
													
													<p> En voici quelque question interressante qui pourrait  resoudre  
													    votre probleme sur  votre compte.
                                                    </p>
													</br>
														<ul>
														<p><a href="###" onclick="show_quest(1)"> 1- Comment creer  mon compte sur Ascension ?</a></p>
														<p></p>
														<div class="row-fluid hide" id="div_1">
											
													     <p>C'est facile pour creer  votre compte sur Ascencion. Allez dans le  menu cliquez sur l'onglet Mon compte, Remplissez le formulaire a droit de  votre ecran en suivant tous les etapes. N'oublie pas de lire le  reglement intene de la compagnie avant de valider.  Deja on vous souhaite bienvenue sur Ascencion group.</p>
															
											
														</div>
														<p><a href="###" onclick="show_quest(2)"> 2- Comment connecter sur mon compte ?</a></p>
														<div class="row-fluid hide" id="div_2">
											
													     <p>Ascencion vous  donne 2 possibilites pour  vous connecter. Vous pouvez connecter le haut de la page en cliquant sur l'onglet connexion. En donnant votre identifiant avec un mots pass valide.</p>
														 <p>Vous pouvez  aussi  connecter  quand  vous cliquer  sur l'onglet Mon compte. A gauche de  votre ecran , vous allez entrer l'identifiant et le mots pass que vous avez donne lors de l'inscription. </p>
											             
														</div>
														
														<p><a href="###" onclick="show_quest(3)"> 3- Que dois je faire si je n'arrive pas a connecter sur mon compte?</a></p>
														<div class="row-fluid hide" id="div_3">
											
													
														<p>Si vous n'arrivez pas a  vous connecter sur votre compte, 1- c'est que l'identifiant ou le mots pass n'est pas correct. 2- Ou votre date de paiement  arrive a son terme. Pour mieux vous aider veillez nous contacter et faites nous part de votre probleme et nous serons disponible pour vous aider. </p>
											
														</div>
														
														<p><a href="###" onclick="show_quest(4)"> 4- Comment nous contacter ?</a></p>
														<div class="row-fluid hide" id="div_4">
											
													
														<p>C'est facile pour nous contacter, cliquer  sur l'onglet contacter-nous vous remplissez le formulaire en ecrivant  votre  nom et prenom , votre numero et email , et  le message. N'oublie pas le captach c'est vraiment importante puis valide. Sous peu notre system  vous donnerez la reponse sur votre email. Votre email doit etre actif et valide.  </p>
											
														</div>
														
													
														<p><a href="###" onclick="show_quest(5)"> 5- Comment acheter sur Ascencion ?</a></p>
														<div class="row-fluid hide" id="div_5">
											
													
														<p>Mackendy Piter Monese</p>
											
														</div>
														<p><a href="###" onclick="show_quest(6)"> 6- Fermer?</a></p>
														<div class="row-fluid hide" id="div_6">
											
													
														<p>bla bla bbbbbb ggdffdhgsfghsgaf</p>
											
														</div>
														</ul>
														
														
			</div>
			</div>										
							
			
			
			
			
			</div>
			
			<!--------------------------------- Partie d'aide sur votre compte --------------------------->
             <div id="step-Misob" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Merci' ? '' : ' hide'); ?>">
			<img src="<?php echo theme_img_path; ?>/Aide/aide4.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
													
													 
													   <h3>Aide sur votre compte</h3>
													   <p>
                                                       Vous n'etes pas sans savoir que vous etes sur Ascencion Groupe le site . En voici quelque question pour  resoudre  
													   votre probleme sur  votre compte.
													   </p>
			
			
			
			
			
			
			
			
			
			</div>
			
			<!--------------------------------- Partie du  chiffre d'affaire --------------------------->
			 <div id="step-chiffre" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Chiffre' ? '' : ' hide'); ?>">
			<img src="<?php echo theme_img_path; ?>/logo.png" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
													
													 
													   <h3>Chiffre d'affaire</h3>
													   <p>
                                                       AG a pour mission de promouvoir la production et la consommation des produits locaux. 
													   Ainsi, poursuit-elle un double objectif : d’une part, 
													   standardiser et systématiser la vente des produits locaux ; d’autre part, 
													   accompagner les producteurs locaux et investir dans la production locale.
													   </p>
			
			
			
			
			
			
			
			
			
			</div>
			
			
			
			
			
			
			
			<!--------------------------------- Partie du Partenaire --------------------------->
			 <div id="step-partenaire" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Partenaire' ? '' : ' hide'); ?>">
			<img src="<?php echo theme_img_path; ?>/produit/Partenaire.jpg" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
													
													 
													   <h3>Partenaire</h3>
													   <p>
                                                       AG a pour mission de promouvoir la production et la consommation des produits locaux. 
													   Ainsi, poursuit-elle un double objectif : d’une part, 
													   standardiser et systématiser la vente des produits locaux ; d’autre part, 
													   accompagner les producteurs locaux et investir dans la production locale.
													   </p>
			
			
			
			
			
			
			
			
			
			</div>
			
			
			<!--------------------------------- Partie du Perpective --------------------------->
			 <div id="step-Perpective" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Perpective' ? '' : ' hide'); ?>">
			<img src="<?php echo theme_img_path; ?>/logo.png" width="250" height="180" align="left" style="padding:4px; background-color:#EFEFEF;"/>
													
													 
													   <h3>Perpective</h3>
													   <p>
                                                       AG a pour mission de promouvoir la production et la consommation des produits locaux. 
													   Ainsi, poursuit-elle un double objectif : d’une part, 
													   standardiser et systématiser la vente des produits locaux ; d’autre part, 
													   accompagner les producteurs locaux et investir dans la production locale.
													   </p>
			
			
			
			
			
			
			
			
			
			</div>
			
			</div>
			
			
			<div class="span3 cl26"> 

						<img src="<?php echo theme_img_path; ?>/produit/Partenaire.jpg" width="250" height="250" align="left" style="padding:4px; background-color:#EFEFEF;"/>

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


 <script>	
		function show_quest(id)
		{
		for (var i = 1; i <= 5; i++)
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
<?php
require_once(theme_rel_path.'/include/footer.php');
?>

</body>
</html>