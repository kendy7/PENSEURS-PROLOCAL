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
					  <li class="active"><a href="<?php echo abs_client_path; ?>/Rapport.php"><?php echo $lang_client_['client_account']['MENU_RAPPORT']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Information.php"><?php echo $lang_client_['client_account']['MENU_INFO']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/register.php"><?php echo $lang_client_['client_account']['TEXT_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path ?>/cart.php"><?php echo $lang_client_['general']['TEXT_SHOPPING_CART']; ?></a></li>
                        <li> <a href="<?php echo abs_client_path; ?>/account.php"><?php echo $lang_client_['client_account']['MENU_COMPTE']; ?></a></li>
				 </ul>
             </div>
         </div>
   
     </section><!-- / BODY breadcrumb --> 
	 
     <section class="row-fluid myaccount-page"><!-- BODY ROW -->
         <aside class="left-sidebar span3 couleur1">
          <nav>
              <ul class="nav nav-tabs nav-stacked" id="menu-step-change-data-account">
			    <li<?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_NEW_REGISTERS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php" data-rel="#step-new-register"><?php echo $lang_client_['client_account']['MENU_NEW_REGISTER']; ?></a></li>
			    <!--li><a href="<?php echo abs_client_path; ?>/network.php" target="blank"><?php echo $lang_client_['client_account']['NETWORK_BOTLE']; ?></a><li/-->
			   <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'orders' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=orders" data-rel="#step-my-orders"><?php echo $lang_client_['client_account']['MENU_ORDERS']; ?></a></li>   
				<li<?php echo (!isset($_GET['type'])&& $_GET['type'] == 'MENU_PURCHASE_TEAM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_PURCHASE_TEAM" data-rel="#step-recent-purchase"><?php echo $lang_client_['client_account']['MENU_PURCHASE_TEAM']; ?></a></li>                
				<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_TOTAL_POINTS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_TOTAL_POINTS" data-rel="#step-total-point"><?php echo $lang_client_['client_account']['MENU_TOTAL_POINT']; ?></a></li>
                <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_BONUSS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_BONUSS" data-rel="#step-bonus"><?php echo $lang_client_['client_account']['MENU_BONUS']; ?></a></li>				
                <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_COMMISSIONS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_COMMISSIONS" data-rel="#step-commissions"><?php echo $lang_client_['client_account']['MENU_COMMISSIONS']; ?></a></li>				
                <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PRIMELEADERSHIP' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_PRIMELEADERSHIP" data-rel="#step-primeleadership"><?php echo $lang_client_['client_account']['MENU_PRIMELEADERSHIP']; ?></a></li>				
                <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_SALAIRE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_SALAIRE" data-rel="#step-salaire"><?php echo $lang_client_['client_account']['MENU_SALAIRE']; ?></a></li>				
                <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_REVENU' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_REVENU" data-rel="#step-revenu"><?php echo $lang_client_['client_account']['MENU_REVENU']; ?></a></li>				
              </ul>
          </nav>        
         </aside>        
        <div class="span9">
		 
		 
	 <!---------------------------------------------ACHAT_PERSO-------------------->
	 
	 
	 <?php
		 $orders_rows = '';
		  $sql_or = execute('select * from '.$table_prefix.'orders where id_client = '.$rs['id'].' order by data desc');
		  while ($rs_or = mysql_fetch_array($sql_or)){
			$orders_rows .= '<tr>
								<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_or['data']).'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$rs_or['point'].'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$rs_or['point'].'</td>
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
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
					      <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_POINT']; ?></th>
                          <th class="numeric"><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_POINT_TIME']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_ACTIONS']; ?></th>
                      </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $orders_rows; ?>                    
                  </tbody>
              </table>
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_ORDERS'].'</h4></div>';
			  }
			 ?>              
         </div>     
 <!-----------------------------------------------MENU_NEW_REGISTER-------------------------------------------------------------------->       
 
 
 <?php
 
                      $newregisters_rows='';
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
							$newregisters_rows=get_child($items);
							
							?>

		         
		 <div id="step-new-register" class="account-part active<?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_NEW_REGISTERS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_NEW_REGISTER']; ?></div>
                
					                                <?php
			  if($newregisters_rows != ''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead >
                     <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_NAME_LASTNAME'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_STATUT'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_CIN_NIF'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_TELEPHONE'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_EMAIL'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_DATEINSCR'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_rapport']['TABLE_CONTENT_TITLE_REFERENCE'].'</font>'; ?></th>

                     </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $newregisters_rows; ?>                    
                  </tbody>
              </table>
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_rapport']['ALERT_NO_NEW_REGISTER'].'</h4></div>
                    <br/>';
			  }
			  //!!!!!!!
			 ?>  	
        </div> 
		 
 <!---------------------------------------------------MENU_ALL_PURCHASE---------------------------------------------------------------->       
         
  <!------------------------------------------------MENU_PURCHASE_TEAM------------------------------------------------------------------->       

     <div id="step-recent-purchase" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PURCHASE_TEAM' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_PURCHASE_TEAM']; ?></div>
		   
		   <?php
														$data1=array();
														$req=execute("SELECT SUM(point) AS points,SUM(grandtotal) AS total ,id_client,subtotal FROM ag_orders group by id_client");
														while($fetc=mysql_fetch_array($req)){
															$ed=$fetc['id_client'];
															$data1[]=$ed;
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
							$inter=array_intersect($column,$data1);
								if(!empty($inter)){
									//$inf="(0)";
								//}else{
							$re=implode(',',$inter);
							$inf="($re)";
							//}
							
							//echo $inf."<br/>";
							$reqo=execute("SELECT SUM(point) AS points,SUM(grandtotal) AS total ,id_client,CodeMembre FROM ag_orders,ag_clients where ag_orders.id_client=ag_clients.id and id_client in ".$inf." group by id_client");
							//$reqo=execute('SELECT SUM(o.point) AS points,SUM(o.grandtotal) AS total ,id_client,CodeMembre FROM ag_orders o,ag_clients c where o.id_client=c.id and id_client in'.$inf.' group by o.id_client');

							echo "<table class='table table-bordered couleur2'>";
							echo "<tr bgcolor='#F05F40'>
							<th>CIM</th>
							<th> points</th>
							<th> Montant</th>
							</tr>
							";
							$reqtot=execute("SELECT SUM(point) AS points,SUM(grandtotal) AS total,id_client FROM ag_orders where id_client in ".$inf);
							$tot=mysql_fetch_array($reqtot);
							$purchase_rows='';
							$purchase_rows= "<tr>
							 <td>".$tot['points']."</td>
							 <td>".$tot['total']."</td>
							</tr>";


while($fetco=mysql_fetch_array($reqo))
    {
				echo "<tr>";
						echo	'<td>'.$fetco['CodeMembre']."</td>";
						echo	'<td>'. $fetco['points']."</td>";
						echo	'<td>'.$fetco['total']."</td>";
				echo "</tr>";
	}
echo "</table>";

?>		             				<?php
			  //if($purchase_rows != ''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_point'].'</font>'; ?></th>
                          <th><?php echo '<font color="white">'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_MONTANT'].'</font>'; ?></th>
                      </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $purchase_rows; ?>                    
                  </tbody>
              </table>
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_BUY_TEAM'].'</h4></div>
                    <br/>';
					}
			 ?> 
         </div>               
        
   
 <!---------------------------------------------------MENU_TOTAL_POINT---------------------------------------------------------------->  

 <?php
		 $point_rows = '';
		  $sql_or = execute('select * from '.$table_prefix.'orders where payed=1 and id_client = '.$rs['id'].'  order by data desc');
		  while ($rs_or = mysql_fetch_array($sql_or)){
			$points_rows .= '<tr>
							   <td  data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_or['data']).'</td>
			                   <td class="count-me"  data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$rs_or['point'].'</td>
							</tr>';  
		  }

		 ?>
 
		 
         <div id="step-total-point" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_TOTAL_POINTS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_TOTAL_POINT']; ?></div>
                   <?php
			  if($points_rows != ''){
			 ?>
              <table class="table table-bordered couleur2" id="countit">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE_ACHAT']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL_POINT']; ?></th>
                   
                      </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $points_rows; ?>                    
                  </tbody>
              </table> 
				             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_POINT'].'</h4></div>';
			  }
			 ?> 
         </div>
               

 <!-------------------------------------------------MENU_PROCESSING_ORDER------------------------------------------------------------------>       
 
  <!------------------------------------------------------------MENU_BONUS------------------------------------------------------------------->

  		         <?php
		 $bonus_rows = '';
		  $sql_bo = execute('select * from '.$table_prefix.'clients where id = '.$rs['id'].' order by Bonus desc');
		  while ($rs_bo = mysql_fetch_array($sql_bo)){
			$bonus_rows .= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS'].'">'.$rs_bo['Bonus'].'</td>
							</tr>';  
		  }
		 ?>
		 
         <div id="step-bonus" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_BONUSS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; ?></div>
														      <?php
			  if($bonus_rows!=''){
			 ?>
              
                      <?php  echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_BONUSS'].$bonus_rows.$lang_client_['client_account']['ALERT_BONUS_LEVEL'].$rs['statuts'].'</h4></div>';
?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_BONUS'].'</h4></div>';
			  }
			 ?>  																								
         </div> 
  <!------------------------------------------------------------MENU_COMMISSIONS------------------------------------------------------------------->

 <?php
		 $comm_rows = '';
		  $sql_com = execute('select * from '.$table_prefix.'clients where id = '.$rs['id'].'  order by commission desc');
		  while ($rs_com = mysql_fetch_array($sql_com)){
			$comm_rows .= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_COMMISSION'].'">'.$rs_com['commission'].'</td>
							</tr>';  
		  }

		 ?>	 
         <div id="step-commissions" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_COMMISSIONS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; ?></div>
			<?php
			  if($comm_rows !=''){
			  echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_COMM'].$comm_rows.$lang_client_['client_account']['ALERT_COMM_TEAM'].'</h4></div>';

             
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_COMMISSIONS'].'</h4></div>';
			  }
			 ?>  			
																				
         </div> 
 <!------------------------------------------------------------MENU_PRIMELEADERSHIP------------------------------------------------------------------->
		         <?php
		 $prime_rows = '';
		  $sql_pr = execute('select * from '.$table_prefix.'clients where id = '.$rs['id']);
		  while ($rs_pr = mysql_fetch_array($sql_pr)){
			$prime_rows .= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_PRIME'].'">'.$rs_pr['prime_leadership'].'</td>
							</tr>';  
		  }
		 ?>
		 
         <div id="step-primeleadership" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PRIMELEADERSHIP' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; $prime_rows?></div>
														      <?php
			  if($prime_rows !=''){
			  echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_PRIME'].$prime_rows.'gdes</h4></div>';
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_PRIME'].'</h4></div>';
			  }
			 ?>  			
         </div> 
 <!------------------------------------------------------------MENU_SALAIRE------------------------------------------------------------------->
		         <?php
		 $sal_rows = '';
		  $sql_sa = execute('select * from '.$table_prefix.'clients where id = '.$rs['id'].' order by Bonus desc');
		  while ($rs_sa = mysql_fetch_array($sql_sa)){
			$sal_rows .= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS'].'">'.$rs_sa['Salaire'].'</td>
							</tr>';  
		  }
		 ?>
		 
         <div id="step-salaire" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_SALAIRE' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; ?></div>
			 <?php
			  if($sal_rows !=''){
			  echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_SAL'].$sal_rows.' gdes </h4></div>';

			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_SALAIRE'].'</h4></div>';
			  }
			 ?>  			
																						 


         </div> 
 <!-------------------------------------------------MENU_REVENU------------------------------------------------------------------>       
		
		         <?php
		 $revenu_rows ='';

		  $sql_re = execute('select * from '.$table_prefix.'clients where id = '.$rs['id'].' order by Bonus desc');
		  while ($rs_re = mysql_fetch_array($sql_re)){
			$revenu_rows.= '<tr>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS'].'">'.$rs_re['Bonus'].'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_COMMISSION'].'">'.$rs_re['commission'].'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_PRIME'].'">'.$rs_re['prime_leadership'].'</td>
							</tr>';  
		  }
		 ?>
		 
         <div id="step-revenu" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_BONUSS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; ?></div>
														      <?php
			  if($revenu_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_COMMISSION']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_PRIME']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_SALAIRE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_REVENU']; ?></th>
                      </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $revenu_rows; ?>                    
                  </tbody>
              </table>
             <?php
			  }else{
			  
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_REVENU'].'</h4></div>';
			  }
			 ?>  			
																						 


         </div>         
<!------------------------------------------------------------------------------------------------------------------->    
	   
	   
	   </div>
	   
     </section><!-- /BODY ROW -->
	<?php 
	 }else{
	   require_once('include/registration-form.php');
	 }
	?>                
   </section> <!-- /CONTAINER -->
	<?php 
     require_once('include/footer.php');
    ?>      
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.stepize.js"></script> 
      <script language="javascript" type="text/javascript">
            var tds = document.getElementById('countit').getElementsByTagName('td');
            var sum = 0;
            for(var i = 0; i < tds.length; i ++) {
                if(tds[i].className == 'count-me') {
                    sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
            }
            document.getElementById('countit').innerHTML += '<tr bgcolor="#F05F40" ><td> </td><td> </td></tr><tr><td><?php echo $lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTALL_POINT']?></td><td>' + sum + '</td></tr>';
			//document.getElementById('total').value=sum;
        </script>
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