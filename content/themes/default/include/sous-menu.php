<!-- Le menu -->
									                    <div id="menu" class="navbar menu">
														
													
														<div  class="container-semifluid">				 
														<div class="row">
												
														
														 <button type="button" class="btn btn-navbar"  data-toggle="collapse" data-target=".nav-collapse">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>

														  </button>

														<div id="cls" class="nav-collapse collapse">
																

																
																<div class="span6">
																
																  <ul class="nav nav-tabs" id="menu-step-change-data-account">
														  
															        <li <?php echo (isset($_GET['type']) &&  $_GET['type'] == 'Index' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/index.php?type=Index"><?php echo $lang_client_['sous_menu']['LABEL_ACCUEIL']; ?></a></li>
																	<li <?php echo (isset($_GET['type']) && $_GET['type'] == 'Produit' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Produits.php?type=Produit"><?php echo $lang_client_['sous_menu']['LABEL_PRODUCT']; ?></a></li>
																	<li <?php echo (isset($_GET['type']) && $_GET['type'] == 'Opportunuite' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Opportunity.php?type=Opportunuite"><?php echo $lang_client_['sous_menu']['LABEL_OPPORTUNITE']; ?></a></li>
																	<li <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_Compagnie' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Compagny.php?type=MENU_Compagnie"><?php echo $lang_client_['sous_menu']['LABEL_COMPAGNY']; ?></a></li>
																	<li <?php echo (isset($_GET['type']) && $_GET['type'] == 'Evennement' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Evennements.php?type=Evennement"><?php echo $lang_client_['sous_menu']['LABEL_EVENT']; ?></a></li>

																	</ul>

																</div>	
																

																															   																	<div class="span1 monte-tirech">																	  <?php 																		
																																	if(basename(selfURL()) !== 'search.php'){																	 
																																	?>																		
																																	<form id="search-form" class="form-search form-horizontal " action="<?php echo abs_client_path; ?>/search.php" method="get">																			
																																	<div class="input-append span2">																				
																																	<input type="text" name="sp" class="search-query" placeholder="<?php echo $lang_client_['search']['FIELD_LABEL_SEARCH']; ?>...">																				
																																	<button type="submit"><i class="icon-search"></i></button>																			
																																	</div>																		
																																	</form> 																	 
																																	<?php																		}																	 
																																	?>																	
																																	</div>	
																			
																		
																	<div class="span4 offset1 main-menu-container monte-timenu">
																	
																	  <a href="<?php echo abs_client_path ?>/compte.php"><i class="icon-user"></i> <?php echo $lang_client_['general']['TEXT_YOUR_ACCOUNT']; ?></a>
																	  <a href="<?php echo abs_client_path ?>/contacts.php"><i class="icon icon-black icon-contacts"></i> <?php echo $lang_client_['general']['TEXT_CONTACT_US']; ?></a>	 
																      <a href="<?php echo abs_client_path ?>/Aide.php"><i class="icon icon-question-sign"></i> <?php echo $lang_client_['general']['TEXT_Aide']; ?></a>		 
																   </div> 
				
																   
															</div>
															
															
																
																
																
																
															
															 
															
															
															
															
														</div><!--/.nav-collapse -->
														
													
												
																		  
																	
																	</div>	
														</div>
												
																	
			 



		   <!-- Fin de menu -->	