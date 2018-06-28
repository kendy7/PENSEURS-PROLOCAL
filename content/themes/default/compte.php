 
<?php

 if(isset($_SESSION['Clogged'])){
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
$member=execute("select count(reference) as Nombre from ag_clients where reference ='".$rs['CodeMembre']."' ");
  $aff=mysql_fetch_array($member);
  $nbre=$aff['Nombre'];
  			//ce script va compter les API liers directement au membre connecter
				  $sql_countAPI	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='API' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeAPI	 	= mysql_fetch_array($sql_countAPI);
				  $nb_nombreAPI		= $donneeAPI['nb_nombre'];
				//ce script va compter les AJ liers directement au membre connecter
				  $sql_countAJ	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='AJ' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeAJ	 		= mysql_fetch_array($sql_countAJ);
				  $nb_nombreAJ		= $donneeAJ['nb_nombre'];
				//ce script va compter les AS liers directement au membre connecter
				  $sql_countAS	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='AS' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeAS	 		= mysql_fetch_array($sql_countAS);
				  $nb_nombreAS		= $donneeAS['nb_nombre'];
				//ce script va compter les ARG liers directement au membre connecter
				  $sql_countARG	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='ARG' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeARG	 	= mysql_fetch_array($sql_countARG);
				  $nb_nombreARG		= $donneeARG['nb_nombre'];
				//ce script va compter les OR liers directement au membre connecter
				  $sql_countOR	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='OR' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeOR		 	= mysql_fetch_array($sql_countOR);
				  $nb_nombreOR		= $donneeOR['nb_nombre'];
				//ce script va compter les PT liers directement au membre connecter
				  $sql_countPT	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='PT' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneePT		 	= mysql_fetch_array($sql_countPT);
				  $nb_nombrePT		= $donneePT['nb_nombre'];
				//ce script va compter les EM liers directement au membre connecter
				  $sql_countEM	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='EM' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeEM		 	= mysql_fetch_array($sql_countEM);
				  $nb_nombreEM		= $donneeEM['nb_nombre'];
				//ce script va compter les EM liers directement au membre connecter
				  $sql_countDM	 	=  execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='DM' and enabled=1 and reference='".$rs['CodeMembre']."' ")  ;
				  $donneeDM		 	= mysql_fetch_array($sql_countDM);
				  $nb_nombreDM		= $donneeDM['nb_nombre'];
         $dateSystem	=	date("Y-m-d");
		 $datesyst		=	date_create($dateSystem);
		 $dateSys		=	date_format($datesyst,"Y-m-d");
         $Mber_date_pyd		=	$rs['payed_date_limit'];
		 $entry_date	=	date_create($Mber_date_pyd);
		 $entry_dates	=	date_format($entry_date,"Y-m-d");
			$s1			=	strtotime($entry_dates);
			$s2			=	strtotime($dateSys);
			$s			=	$s1-$s2;
			$d			=	intval($s/86400);  
			
			if($d<10){
			?>
			<script> 
				 var msg1="<?php echo $d; ?> jour(s) pour acceder à votre bureau virtuel,";
				 //msg1.css('color','red');
				//alert(" Il vous reste "+msg1+" Veuillez le renouveler svp!");
			</script>
			<?php
			}  
 } 
 $page_title = $lang_client_['client_account']['PAGE_TITLE'];  
 require_once('include/header.php');
 
 
 
 
 $result = execute("SELECT * FROM ag_clients");
							$ref = array();
							// // hold all menu items
							 $items = array();
								 $Reference=$rs['CodeMembre'];
							// // loop over the result
							 while($data = mysql_fetch_object($result)) {
								// // Assign by reference 
								 $thisRef = &$ref[$data->CodeMembre];
								
								// // add the menu parent
								 $thisRef['parent'] = $data->reference;
								 $thisRef['name'] = $data->name;
								 $thisRef['id'] = $data->id;
								$thisRef['lastname'] = $data->lastname;
								$thisRef['statuts'] = $data->statuts;
								$thisRef['CodeMembre'] = $data->CodeMembre;
								$thisRef['phone'] = $data->phone;
								$thisRef['email'] = $data->email;
								$thisRef['point'] = $data->point;
								$thisRef['payed'] = $data->payed;
								$thisRef['entry_date'] = $data->entry_date;

								
							   // // if there is no parent push it into items array()

							   if($data->reference == $Reference) {
								   $items[$data->CodeMembre] = &$thisRef;
							   } else {
								   $ref[$data->reference]['child'][$data->CodeMembre] = &$thisRef;
							   }
							 }
							 
							 
							function get_child($items) {	   
								foreach($items as $key=>$value) {
								$html.= '<tr><td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['name']." ".$value['lastname'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['statuts'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['CodeMembre'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['phone'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['email'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['entry_date'].'</td>';
								$html.= '<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$value['parent'].'</td></tr>';
									
									if(array_key_exists('child',$value)) {
									  $html .= get_child($value['child'],'child');
									}
								}
								
								return $html;
							}
							
			  
function array_column_recursive( $input = NULL, $items = NULL, $indexKey = NULL ) {

		// Using func_get_args() in order to check for proper number of
		// parameters and trigger errors exactly as the built-in array_column()
		// does in PHP 5.5.
		$argc   = func_num_args();
		$params = func_get_args();
		if ( $argc < 2 ) {
			trigger_error( "array_column_recursive() expects at least 2 parameters, {$argc} given", E_USER_WARNING );

			return NULL;
		}
		if ( ! is_array( $params[ 0 ] ) ) {
			// Because we call back to this function, check if call was made by self to
			// prevent debug/error output for recursiveness :)
			$callers = debug_backtrace();
			if ( $callers[ 1 ][ 'function' ] != 'array_column_recursive' ){
				trigger_error( 'array_column_recursive() expects parameter 1 to be array, ' . gettype( $params[ 0 ] ) . ' given', E_USER_WARNING );
			}

			return NULL;
		}
		if ( ! is_int( $params[ 1 ] )
		     && ! is_float( $params[ 1 ] )
		     && ! is_string( $params[ 1 ] )
		     && $params[ 1 ] !== NULL
		     && ! ( is_object( $params[ 1 ] ) && method_exists( $params[ 1 ], '__toString' ) )
		) {
			trigger_error( 'array_column_recursive(): The column key should be either a string or an integer', E_USER_WARNING );

			return FALSE;
		}
		if ( isset( $params[ 2 ] )
		     && ! is_int( $params[ 2 ] )
		     && ! is_float( $params[ 2 ] )
		     && ! is_string( $params[ 2 ] )
		     && ! ( is_object( $params[ 2 ] ) && method_exists( $params[ 2 ], '__toString' ) )
		) {
			trigger_error( 'array_column_recursive(): The index key should be either a string or an integer', E_USER_WARNING );

			return FALSE;
		}
		$paramsInput     = $params[ 0 ];
		$paramsColumnKey = ( $params[ 1 ] !== NULL ) ? (string) $params[ 1 ] : NULL;
		$paramsIndexKey  = NULL;
		if ( isset( $params[ 2 ] ) ) {
			if ( is_float( $params[ 2 ] ) || is_int( $params[ 2 ] ) ) {
				$paramsIndexKey = (int) $params[ 2 ];
			} else {
				$paramsIndexKey = (string) $params[ 2 ];
			}
		}
		$resultArray = array();
		foreach ( $paramsInput as $row ) {
			$key    = $value = NULL;
			$keySet = $valueSet = FALSE;
			if ( $paramsIndexKey !== NULL && array_key_exists( $paramsIndexKey, $row ) ) {
				$keySet = TRUE;
				$key    = (string) $row[ $paramsIndexKey ];
			}
			if ( $paramsColumnKey === NULL ) {
				$valueSet = TRUE;
				$value    = $row;
			} elseif ( is_array( $row ) && array_key_exists( $paramsColumnKey, $row ) ) {
				$valueSet = TRUE;
				$value    = $row[ $paramsColumnKey ];
			}

			$possibleValue = array_column_recursive( $row, $paramsColumnKey, $paramsIndexKey );
			if ( $possibleValue ) {
				$resultArray = array_merge( $possibleValue, $resultArray );
			}

			if ( $valueSet ) {
				if ( $keySet ) {
					$resultArray[ $key ] = $value;
				} else {
					$resultArray[ ] = $value;
				}
			}
		}

		return $resultArray;
	}
$column=array_column_recursive($items,'id');

$nb=count($column);

 $page_title = $lang_client_['client_account']['PAGE_TITLE'];  
 require_once('include/header.php');

?>

 <body>
  <?php require_once('include/body-header.php'); ?>
  <section class="compte">
   <section class="container-semifluid " id="main-container"> <!-- CONTAINER -->
           
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

					  <li class="active"><a href="<?php echo abs_client_path; ?>/compte.php"><?php echo $lang_client_['client_account']['compte']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Rapport.php"><?php echo $lang_client_['client_account']['MENU_RAPPORT']; ?></a></li>
					  
					  <li><a href="<?php echo abs_client_path; ?>/network.php" target="Blanck_"><?php echo "Reseau"; ?></a></li>
						<?php require_once("Information.php");?>
					  <li><a href="<?php echo abs_client_path; ?>/register.php"><?php echo $lang_client_['client_account']['TEXT_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Document.php"><?php echo $lang_client_['client_account']['DOC_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path ?>/cart.php"><?php echo $lang_client_['general']['TEXT_SHOPPING_CART']; ?></a></li>
                      <li> <a href="<?php echo abs_client_path; ?>/account.php"><?php echo $lang_client_['client_account']['MENU_COMPTE']; ?></a></li>
				 </ul>
             </div>
         </div>
   
 </section><!-- / BODY breadcrumb --> 

    
	 
     <section class="row-fluid myaccount-page"><!-- BODY ROW -->
		
        
         <aside class="left-sidebar span3">
                                <table class="table table-hover table-striped">
                                    <tbody class="counts-container">
									 <tr>
									        <td><strong>Informations </strong></td>
                                            <td class="subtotal"><strong> Personnelles</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong><?php echo $lang_client_['client_registration']['FIELD_LABEL_NAME']; ?>:</strong></td>
                                            <td class="subtotal"><?php echo $rs['name'] ?></td>
                                        </tr>
										<tr>
                                            <td><strong><?php  echo $lang_client_['client_registration']['FIELD_LABEL_LASTNAME'];  ?>:</strong></td>
                                            <td class="subtotal"><?php echo $rs['lastname']?></td>
                                        </tr>
										
                                        <tr>
                                            <td><strong><?php echo $lang_client_['client_registration']['FIELD_LABEL_BIRTH'];  ?>:</strong></td>
                                            <td class="tax"><?php echo $rs['birthdate']; ?></td>
                                        </tr>
                              
                                        <tr>
                                            <td><strong><?php echo  $lang_client_['client_registration']['FIELD_LABEL_CIM']; ?>:</strong></td>
                                            <td class="tax"><?php echo $rs['CodeMembre']; ?></td>
                                        </tr>                                        
                                        <tr>
                                            <td><strong><?php echo $lang_client_['client_registration']['FIELD_LABEL_REFERENCE']; ?>:</strong></td>
                                            <td><?php echo $rs['reference']; ?></td>
                                        </tr>
										<tr>
                                            <td><strong><?php echo $lang_client_['client_registration']['FIELD_LABEL_STATUT']; ?>:</strong></td>
                                            <td><?php echo $rs['statuts']; ?></td>
                                        </tr>
										
                                    </tbody>
                                </table>
								
								
        </aside> 
        <div class="span9">
		
		<div class="row-fluid">
			<div class="span3">
				<div class="panel panel-blue panel-widget ">
					<div class="row-fluid no-padding">
						<div class="span3 widget-left">
							 <i class="icon icon-black icon-users"></i> 
						</div>
						<div class="span9 widget-right">
							<div class="large"><?php echo $nb;?></div>
							<div class="text-muted"><font color="#000">Personne(s) au total</font></div>
						</div>
					</div>
				</div></br>
			</div>
			<div class="span3">
				<div class="panel panel-orange panel-widget">
					<div class="row-fluid no-padding">
						<div class="span3 widget-left">
							<i class="icon-user"></i>
						</div>
						<div class="span9 widget-right">
							<div class="large"><?php echo $nbre; ?></div>
							<div class="text-muted"><font color="#000">Nbre Inscrit Direct</font></div>
						</div>
					</div>
				</div></br>
			</div>
			<div class="span3">
				<div class="panel panel-teal panel-widget">
					<div class="row-fluid no-padding">
						<div class="span3 widget-left">
							<i class="icon-user"></i>
						</div>
						<div class="span9 widget-right">
							<div class="large"><?php $indirect=$nb-$nbre; echo $indirect; ?></div>
							<div class="text-muted"><font color="#000">Nbre Inscrit Indirect</font></div>
						</div>
					</div>
				</div></br>
			</div>
			<div class="span3">
				<div class="panel panel-red panel-widget">
					<div class="row-fluid no-padding">
						<div class="span3 widget-left">
							<i class="icon-time"></i>
						</div>
						<div class="span9 widget-right">
							<div class="large">
							<?php
						if($d<10){
						echo "<font color='red'>".$d." Jour(s) access restant</font>";	
						}else{
						echo "<font color='green'>Vous avez ".$d." Jour(s) d'access</font>";	
						}
						
							
							?></div>
							<div class="text-muted"><font color="#000">à votre bureau</font></div>
						</div>
					</div>
				</div></br>
			</div>
		</div><!--/.row-->
		<div class="row-fluid">
			<div class="span2 offset10" id="nivel2">
				
						
					            <table class="table table-hover table-striped">
                                    <tbody class="counts-container">
									 <tr>
									        <td><strong>Statut </strong></td>
                                            <td class="subtotal"><strong> Nombre</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>API:</strong></td>
                                            <td class="subtotal"><?php echo $nb_nombreAPI;?></td>
                                        </tr>
										<tr>
                                            <td><strong>AJ:</strong></td>
                                            <td class="subtotal"><?php echo $nb_nombreAJ;?></td>
                                        </tr>
										
                                        <tr>
                                            <td><strong>AS:</strong></td>
                                            <td class="tax"><?php echo $nb_nombreAS;?></td>
                                        </tr>
                              
                                        <tr>
                                            <td><strong>ARG:</strong></td>
                                            <td class="tax"><?php echo $nb_nombreARG;?></td>
                                        </tr>                                        
                                        <tr>
                                            <td><strong>OR:</strong></td>
                                            <td><?php echo $nb_nombreOR;?></td>
                                        </tr>
										<tr>
                                            <td><strong>PT:</strong></td>
                                            <td><?php echo $nb_nombrePT;?></td>
                                        </tr>										
										
										<tr>
                                            <td><strong>EM:</strong></td>
                                            <td><?php echo $nb_nombreEM;?></td>
                                        </tr>										
										
										<tr>
                                            <td><strong>DM:</strong></td>
                                            <td><?php echo $nb_nombreDM;?></td>
                                        </tr>
										
                                    </tbody>
                                </table>
					
			</div>
		
		<div  class="default-status-registration-form  row-fluid">  	
		
		</div>
		
	</div>

		
    </section>
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

		<script src="<?php echo theme_js_path ?>/bootstrap-datepicker.js"></script>



	
  </body>
</html>