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
					  <li class="active"><a href="<?php echo abs_client_path; ?>/Rapport.php"><?php echo $lang_client_['client_account']['MENU_RAPPORT']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/network.php" target="Blanck_"><?php echo $lang_client_['client_account']['MENU_NETWORK']; ?></a></li>
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
		<aside class="left-sidebar span3 couleur1">
			<nav>
				<ul class="nav nav-tabs nav-stacked" id="menu-step-change-data-account">
					<li<?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_NEW_REGISTERS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php" data-rel="#step-new-register"><?php echo $lang_client_['client_account']['MENU_NEW_REGISTER']; ?></a></li>
				   <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'orders' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=orders" data-rel="#step-my-orders"><?php echo $lang_client_['client_account']['MENU_ORDERS']; ?></a></li>   
				   <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ALL_ORDERS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ALL_ORDERS" data-rel="#step-all-orders"><?php echo $lang_client_['client_account']['MENU_ALL_ORDERS']; ?></a></li>				
				   <li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ALL_PURCHASE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ALL_PURCHASE" data-rel="#step-all-purchase"><?php echo $lang_client_['client_account']['MENU_ALL_PURCHASE']; ?></a></li>				
					<li<?php echo (!isset($_GET['type'])&& $_GET['type'] == 'MENU_PURCHASE_TEAM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_PURCHASE_TEAM" data-rel="#step-recent-purchase"><?php echo $lang_client_['client_account']['MENU_PURCHASE_TEAM']; ?></a></li>                
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_TOTAL_POINTS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_TOTAL_POINTS" data-rel="#step-total-point"><?php echo $lang_client_['client_account']['MENU_TOTAL_POINT']; ?></a></li>
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_BONUSS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_BONUSS" data-rel="#step-bonus"><?php echo $lang_client_['client_account']['MENU_BONUS']; ?></a></li>				
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_COMMISSIONS' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_COMMISSIONS" data-rel="#step-commissions"><?php echo $lang_client_['client_account']['MENU_COMMISSIONS']; ?></a></li>				
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PRIMELEADERSHIP' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_PRIMELEADERSHIP" data-rel="#step-primeleadership"><?php echo $lang_client_['client_account']['MENU_PRIMELEADERSHIP']; ?></a></li>				
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_SALAIRE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_SALAIRE" data-rel="#step-salaire"><?php echo $lang_client_['client_account']['MENU_SALAIRE']; ?></a></li>				
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_REVENU' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_REVENU" data-rel="#step-revenu"><?php echo $lang_client_['client_account']['MENU_REVENU']; ?></a></li>				
					<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_ARCHIVE']; ?></a></li>				
				</ul>
			</nav>        
		</aside>        
				<div class="span9">
<!---------------------------------------------------------------NEW REGISTER------------------------------------------------------>
		 	 <?php
	 
			$date			=	new datetime();
			$dateDebut		=	$date->format("Y-m-01");
			$dateFin		=	$date->format("Y-m-t");
			$dateSystem		=	date("d-m-Y");
			$datesyst		=	date_create($dateSystem);
			$dateSys		=	date_format($datesyst,"d-m-Y");
			
			$Mber_date		=	$rs['entry_date'];
			$entry_date	=	date_create($Mber_date);
			$entry_dates	=	date_format($entry_date,"d-m-Y");
			$s1			=	strtotime($dateSys);
			$s2			=	strtotime($entry_dates);
			$s			=	abs($s2-$s1);
			$entry_datecl=	intval($s/86400); 
			
			//echo "nbre jr cl ".$entry_datecl."<br/>";
			
			$datecl		  =date_create($Mber_date);
			$date_entry   =date_format($datecl,"Y-m-d H:i:s");
			$datel_limit = date("Y-m-d H:i:s", strtotime($date_entry."+ 1 month"));
			$datel_limit1 = date("Y-m-d H:i:s", strtotime($datel_limit."+ 1 month"));
			$datel_limit2 = date("Y-m-d H:i:s", strtotime($datel_limit1."+ 1 month"));
			
			// echo $rs['entry_date']."<br/>";
			// echo $datel_limit."<br/>";
			// echo $datel_limit1."<br/>";
			// echo $datel_limit2;
			?>
		 <div id="step-new-register" class="account-part active<?php echo (!isset($_GET['type']) || $_GET['type'] == 'MENU_NEW_REGISTERS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_NEW_REGISTER']; ?></div>
                <?php
 
                      $newregisters_rows='';
					if($entry_datecl<=30){
						$result = execute("select * from ".$table_prefix."clients where entry_date between '".$rs['entry_date']."' and '".$datel_limit."' order by entry_date desc");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
						$result = execute("select * from ".$table_prefix."clients where entry_date between '".$datel_limit."' and '".$datel_limit1."' order by entry_date desc");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
						$result = execute("select * from ".$table_prefix."clients where entry_date between '".$datel_limit1."' and '".$datel_limit2."' order by entry_date desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
						$result = execute("select * from ".$table_prefix."clients where entry_date between '".$dateDebut."' and '".$dateFin."' order by entry_date desc");
					}
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
		
<!------------------------------------------------------------PERSONNAL PURCHASE--------------------------------------------------------->
         <div id="step-my-orders" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'orders' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_ORDERS']; ?></div>
              <?php
		 $orders_rows = '';
     				if($entry_datecl<=30){
					 $sql_or = execute("select * from ".$table_prefix."orders where data between '".$rs['entry_date']."' and '".$datel_limit."' and payed=1 and processed=1 and  id_client = '".$rs['id']."' order by data desc");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					$sql_or = execute("select * from ".$table_prefix."orders where data between '".$datel_limit."' and '".$datel_limit1."' and payed=1 and processed=1 and  id_client = '".$rs['id']."' order by data desc");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					$sql_or = execute("select * from ".$table_prefix."orders where data between '".$datel_limit1."' and '".$datel_limit2."' and payed=1 and processed=1 and  id_client = '".$rs['id']."' order by data desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
		  $sql_or = execute("select * from ".$table_prefix."orders where data between '".$dateDebut."' and '".$dateFin."' and payed=1 and processed=1 and  id_client = '".$rs['id']."' order by data desc");
					}  		 
		  while ($rs_or = mysql_fetch_array($sql_or)){
			$orders_rows .= '<tr>
								<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_or['data']).'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$rs_or['point'].'</td>
							   ';
							   // if($date_cl<=30){
			// $orders_rows .=   '
					$orders_rows .=		 ' <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$d.' Jour(s) </td>
							   ';
							   // }elseif($date_cl>30 && $date_cl<=60){
			// $orders_rows .=   '
							   // <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$d1.' Jour(s) </td>
							   // ' ;  
							   // }elseif($date_cl>60 && $date_cl<=90){
			 // $orders_rows .=   '
							   // <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$d2.' Jour(s) </td>
							   // '  ;   
							   // }
							   
			$orders_rows .=   '
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS'].'">'.($rs_or['processed'] ? 'Traité' : 'Encour...').'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ACTIONS'].'">
							     <span style="margin-bottom:5px;" class="btn btn-info squared unbordered solid info-order" data-id="'.$rs_or['id'].'"><i class="icon-white icon-info-sign"></i></span>
								 '.(!$rs_or['payed'] && $paypal['status'] && $rs_or['payment_method'] == 'PAYPAL' ? ' <span data-id="'.$rs_or['id'].'" style="margin-bottom:5px;" class="pay-btn btn btn-info squared unbordered solid">'.$lang_client_['client_account']['BUTTON_PAY_NOW'].'</span>' : '' ).'
							   </td>
							</tr>'; 
							
		  }
		 ?>
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
<!-----------------------------------------------------------------------MENU_ALL_ORDERS---------------------------------------------->

            <div id="step-all-orders" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ALL_ORDERS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_ALL_ORDERS']; ?>
		   
		   </div> 
		   
            <div class="row-fluid">
        <div class="col-md-12">

            <div class="records_content"></div>
        </div>
    </div>
         </div> 
	   

<!---------------------------------------------------------------------MENU_ALL_PURCHASE------------------------------------------------>

         <div id="step-all-purchase" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ALL_PURCHASE' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_ALL_PURCHASES']; ?>
		   
		   </div>
		   
		               <div class="row-fluid">
        <div class="col-md-12">

            <div class="records_content1"></div>
        </div>
    </div>
             
         </div>     

<!--------------------------------------------------------------MENU_PURCHASE_TEAM------------------------------------------------------->

<div id="step-recent-purchase" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PURCHASE_TEAM' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_PURCHASE_TEAM']; ?></div>
		   
		   <?php
														$data1=array();
					if($entry_datecl<=30){
						$req=execute("SELECT SUM(".$table_prefix."orders.point) AS points,SUM(grandtotal) AS total ,id_client,subtotal FROM ".$table_prefix."orders group by id_client");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					$req=execute("SELECT SUM(".$table_prefix."orders.point) AS points,SUM(grandtotal) AS total ,id_client,subtotal FROM ".$table_prefix."orders group by id_client");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					$req=execute("SELECT SUM(".$table_prefix."orders.point) AS points,SUM(grandtotal) AS total ,id_client,subtotal FROM ".$table_prefix."orders group by id_client");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
						$req=execute("SELECT SUM(".$table_prefix."orders.point) AS points,SUM(grandtotal) AS total ,id_client,subtotal FROM ".$table_prefix."orders group by id_client");
					} 
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
								if($entry_datecl<=30){
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					} 
							$reqo=execute("SELECT SUM(ag_orders.point) AS points,SUM(grandtotal) AS total ,id_client,CodeMembre FROM ".$table_prefix."orders,ag_clients where ag_orders.id_client=ag_clients.id and id_client in ".$inf." group by id_client");
							//$reqo=execute('SELECT SUM(o.point) AS points,SUM(o.grandtotal) AS total ,id_client,CodeMembre FROM ag_orders o,ag_clients c where o.id_client=c.id and id_client in'.$inf.' group by o.id_client');

							echo "<table class='table table-bordered couleur2'>";
							echo "<tr bgcolor='#F05F40'>
							<th>CIM</th>
							<th> points</th>
							<th> Montant</th>
							</tr>
							";
								if($entry_datecl<=30){
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					} 
							$reqtot=execute("SELECT SUM(point) AS points,SUM(grandtotal) AS total,id_client FROM ".$table_prefix."orders where id_client in ".$inf);
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
        
<!---------------------------------------------------------MENU_TOTAL_POINT------------------------------------------------------------>

<?php
		 $point_rows = '';
				 	if($entry_datecl<=30){
					  $sql_or = execute("select * from ".$table_prefix."orders where data between '".$rs['entry_date']."' and '".$datel_limit."' and payed=1 and id_client = '".$rs['id']."'  order by data desc");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_or = execute("select * from ".$table_prefix."orders where data between '".$datel_limit."' and '".$datel_limit1."' and payed=1 and id_client = '".$rs['id']."'  order by data desc");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					  $sql_or = execute("select * from ".$table_prefix."orders where data between '".$datel_limit1."' and '".$datel_limit2."' and payed=1 and id_client = '".$rs['id']."'  order by data desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					  $sql_or = execute("select * from ".$table_prefix."orders where data between '".$dateDebut."' and '".$dateFin."' and payed=1 and id_client = '".$rs['id']."'  order by data desc");
					}  
		  //$sql_or = execute("select * from ".$table_prefix."orders where payed=1 and id_client = '".$rs['id']."'  order by data desc");
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
               

<!------------------------------------------------------------------------------MENU_BONUS--------------------------------------->
  		         <?php
				
 $Dateentry	=	$rs['entry_date'];
		 $datentry		=	date_create($Dateentry);
		 $Dateentrys		=	date_format($datentry,"Y-m-d");
				
		 $bonus_rows = '';
		 	if($entry_datecl<=30){
					 // $sql_bo = execute("select * from ".$table_prefix."bonus where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_bonu=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					  $sql_bo = execute("select * from ".$table_prefix."bonus where Datee between '".$Dateentrys."' and '".$datel_limit."' and payed_bonu=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");

					}elseif($entry_datecl>30 && $entry_datecl<=60){
							  $sql_bo = execute("select * from ".$table_prefix."bonus where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_bonu=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");

					}elseif($entry_datecl>60 && $entry_datecl<=90){
							  $sql_bo = execute("select * from ".$table_prefix."bonus where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_bonu=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");

					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
							  $sql_bo = execute("select * from ".$table_prefix."bonus where Datee between '".$dateDebut."' and '".$dateFin."' and payed_bonu=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");

					} 
		  while ($rs_bo = mysql_fetch_array($sql_bo)){
						$bonus_rows.= '<tr>
			                   <td>'.$rs_bo['Datee'].'</td>
			                   <td>'.$rs_bo['montant'].'</td>

							</tr>';
		  }
		 ?>
		 
         <div id="step-bonus" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_BONUSS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_BONUS']; ?></div>
														      <?php
			  if($bonus_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS']; ?></th>

					 </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $bonus_rows; ?>                    
                  </tbody>
              </table>	
			  <?php?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_BONUS'].'</h4></div>';
			  }
			 ?>  																								
         </div> 

<!------------------------------------------------------------------------MENU_COMMISSIONS--------------------------------------------->

 <?php
		 $comm_rows = '';

		 	if($entry_datecl<=30){
					  $sql_com = execute("select * from ".$table_prefix."commission where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_com=0 and archive=0 and id_client='".$_SESSION['Cid']."' order by Datee desc");

					}elseif($entry_datecl>30 && $entry_datecl<=60){
							  $sql_com = execute("select * from ".$table_prefix."commission where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_com=0 and archive=0 and id_client='".$_SESSION['Cid']."' order by Datee desc");

					}elseif($entry_datecl>60 && $entry_datecl<=90){
							  $sql_com = execute("select * from ".$table_prefix."commission where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_com=0 and archive=0 and id_client='".$_SESSION['Cid']."' order by Datee desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
							  $sql_com = execute("select * from ".$table_prefix."commission where Datee between '".$dateDebut."' and '".$dateFin."' and payed_com=0 and archive=0 and id_client='".$_SESSION['Cid']."' order by Datee desc");

					} 
			  while ($rs_com = mysql_fetch_array($sql_com)){
						$comm_rows.= '<tr>
			                   <td>'.$rs_com['Datee'].'</td>
			                   <td>'.$rs_com['code_order'].'</td>
			                   <td>'.$rs_com['montant'].'</td>

							</tr>';
		  }
	
		 ?>	 
         <div id="step-commissions" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_COMMISSIONS' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_COM']; ?></div>
			<?php
			 if($comm_rows !=''){
			  ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['ORDERS_CODE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_COMMISSION']; ?></th>

					  </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $comm_rows; ?>                    
                  </tbody>
              </table>	
			  <?php
             
			   }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_COMMISSIONS'].'</h4></div>';
			   }
			 ?>  			
																				
         </div> 
<!-----------------------------------------------------------------------MENU_PRIMELEADERSHIP---------------------------------------------->

     <?php
		 $prime_rows = '';
			 	if($entry_datecl<=30){
					  $sql_pr = execute("select * from ".$table_prefix."prime where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_prime=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_pr = execute("select * from ".$table_prefix."prime where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_prime=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					  $sql_pr = execute("select * from ".$table_prefix."prime where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_prime=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					  $sql_pr = execute("select * from ".$table_prefix."prime where Datee between '".$dateDebut."' and '".$dateFin."' and payed_prime=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}  
		  //$sql_pr = execute("select * from ".$table_prefix."prime where payed_prime=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
		  while ($rs_pr = mysql_fetch_array($sql_pr)){
						$prime_rows.= '<tr>
			                   <td>'.$rs_pr['Datee'].'</td>
			                   <td>'.$rs_pr['montant'].'</td>

							</tr>'; 			
		  }
		 ?>
		 
         <div id="step-primeleadership" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_PRIMELEADERSHIP' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_PRIMES']; $prime_rows?></div>
														      <?php
			  if($prime_rows !=''){
			  ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_PRIME']; ?></th>

					  </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $prime_rows; ?>                    
                  </tbody>
              </table>	
			  <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_PRIME'].'</h4></div>';
			  }
			 ?>  			
         </div> 

<!--------------------------------------------------------------------MENU_SALAIRE------------------------------------------------->

<?php
		 $sal_rows = '';
		 	if($entry_datecl<=30){
					  $sql_sa = execute("select * from ".$table_prefix."salaire where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_sal=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_sa = execute("select * from ".$table_prefix."salaire where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_sal=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					  $sql_sa = execute("select * from ".$table_prefix."salaire where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_sal=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					  $sql_sa = execute("select * from ".$table_prefix."salaire where Datee between '".$dateDebut."' and '".$dateFin."' and payed_sal=0 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
					} 
		  while ($rs_sa = mysql_fetch_array($sql_sa)){
						$sal_rows.= '<tr>
			     			<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_sa['Datee']).'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$currency_l.num_formatt($rs_sa['montant']).$currency_r.'</td>

							</tr>'; 
		  }
		 ?>
		 
         <div id="step-salaire" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_SALAIRE' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_SALAIRE']; ?></div>
			 <?php
			  if($sal_rows !=''){
			  ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_SALAIRE']; ?></th>

					  </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $sal_rows; ?>                    
                  </tbody>
              </table>
			  <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_SALAIRE'].'</h4></div>';
			  }
			 ?>  																								
         </div> 

<!---------------------------------------------------------------MENU_REVENU------------------------------------------------------>

		
		         <?php
		 $revenu_rows ='';
		 	if($entry_datecl<=30){
					  $sql_com = execute("select sum(montant) as com from ".$table_prefix."commission where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_com=0 and archive=0 and id_client = '".$rs['id']."'");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_com = execute("select sum(montant) as com from ".$table_prefix."commission where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_com=0 and archive=0 and id_client = '".$rs['id']."'");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
 				  $sql_com = execute("select sum(montant) as com from ".$table_prefix."commission where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_com=0 and archive=0 and id_client = '".$rs['id']."'");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
				  $sql_com = execute("select sum(montant) as com from ".$table_prefix."commission where Datee between '".$dateDebut."' and '".$dateFin."' and payed_com=0 and archive=0 and id_client = '".$rs['id']."'");
					} 
		  $rs_com = mysql_fetch_array($sql_com);
		  	if($entry_datecl<=30){
		  $sql_bo = execute("select sum(montant) as bo from ".$table_prefix."bonus where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_bonu=0 and archive=0 and userid='".$rs['userid']."'");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_bo = execute("select sum(montant) as bo from ".$table_prefix."bonus where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_bonu=0 and archive=0 and userid='".$rs['userid']."'");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
						  $sql_bo = execute("select sum(montant) as bo from ".$table_prefix."bonus  where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_bonu=0 and archive=0 and userid='".$rs['userid']."'");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					  $sql_bo = execute("select sum(montant) as bo from ".$table_prefix."bonus where Datee between '".$dateDebut."' and '".$dateFin."' and payed_bonu=0 and archive=0 and userid='".$rs['userid']."'");
					} 
		  $rs_bo = mysql_fetch_array($sql_bo);
		  	if($entry_datecl<=30){
					  $sql_pr = execute("select sum(montant) pr from ".$table_prefix."prime where Datee between '".$rs['entry_date']."' and '".$datel_limit."' and payed_prime=0 and archive=0 and userid='".$rs['userid']."'");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_pr = execute("select sum(montant) pr from ".$table_prefix."prime where Datee between '".$datel_limit."' and '".$datel_limit1."' and payed_prime=0 and and archive=0 and userid='".$rs['userid']."'");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					  $sql_pr = execute("select sum(montant) pr from ".$table_prefix."prime where Datee between '".$datel_limit1."' and '".$datel_limit2."' and payed_prime=0 and archive=0  and userid='".$rs['userid']."'");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
							  $sql_pr = execute("select sum(montant) pr from ".$table_prefix."prime where Datee between '".$dateDebut."' and '".$dateFin."' and payed_prime=0 and archive=0  and userid='".$rs['userid']."'");
					} 
		  $rs_pr = mysql_fetch_array($sql_pr);
					if($entry_datecl<=30){
							  $sql_sa = execute("select sum(montant) sal from ".$table_prefix."salaire where payed_sal=0 and archive=0  and userid='".$rs['userid']."'");
					}elseif($entry_datecl>30 && $entry_datecl<=60){
					  $sql_sa = execute("select sum(montant) sal from ".$table_prefix."salaire where payed_sal=0 and archive=0 and userid='".$rs['userid']."'");
					}elseif($entry_datecl>60 && $entry_datecl<=90){
					  $sql_sa = execute("select sum(montant) sal from ".$table_prefix."salaire where payed_sal=0 and archive=0  and userid='".$rs['userid']."'");
					}
					if($rs['statuts']=='OR' || $rs['statuts']=='PT' || $rs['statuts']=='EM' || $rs['statuts']=='DM'){
					  $sql_sa = execute("select sum(montant) sal from ".$table_prefix."salaire where payed_sal=0 and archive=0 and userid='".$rs['userid']."'");
					} 
          $rs_sa = mysql_fetch_array($sql_sa);
	$rev_tot=$rs_bo['bo']+$rs_com['com']+$rs_pr['pr']+$rs_sa['sal'];
			 $revenu_rows.= '<tr>
			                   <td>'.$rs_bo['bo'].'</td>
							   <td>'.$rs_com['com'].'</td>
			                   <td>'.$rs_pr['pr'].'</td>
			                   <td>'.$rs_sa['sal'].'</td>
			                   <td>'.$rev_tot.'</td>
							</tr>';  
		  
		 ?>
		 
         <div id="step-revenu" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_REVENU' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_REVENUE']; ?></div>
														      <?php
			  if($revenu_rows !=''){
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

		 
<!----------------------------------------------------------------ARCHIVE REVENUE----------------------------------------------------->

<?php
$arch_achat_rows = '';
		  $sql_bon = execute("select * from ".$table_prefix."bonus where payed_bonu=1 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
		  while ($rs_ar_bo = mysql_fetch_array($sql_bon)){
						$arch_achat_rows.= '<tr>
			                   <td>'.$rs_ar_bo['Datee'].'</td>
			                   <td>'.$rs_ar_bo['montant'].'</td>

							</tr>';
		  }
		 ?>
		 
 <div id="step-arch" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? '' : ' hide'); ?>">
           	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_AR_BONUS']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_SAL" data-rel="#step-ar-sal"><?php echo $lang_client_['client_account']['MENU_AR_SAL']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_COM" data-rel="#step-ar-com"><?php echo $lang_client_['client_account']['MENU_AR_COM']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_PRIME" data-rel="#step-ar-prime"><?php echo $lang_client_['client_account']['MENU_AR_PRIME']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_ORDER" data-rel="#step-ar-order"><?php echo $lang_client_['client_account']['MENU_AR_ORDER']; ?></a></li>				
          </ul>
		   </div>														      
		   </div>														      
		   <?php
			  if($arch_achat_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_BONUS']; ?></th>

					 </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $arch_achat_rows; ?>                    
                  </tbody>
              </table>	
			  <?php?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_AR_BONUS'].'</h4></div>';
			  }
			 ?>  																								
         </div> 
<!---------------------------------------------------------arch_salaire------------------------------------------------------------------------------------------------------------------------>
<?php
$arch_sal_rows = '';
		  $sql_sa = execute("select * from ".$table_prefix."salaire where payed_sal=1 and archive=0  and userid='".$_SESSION['Cuserid']."' order by Datee desc");
		  while ($rs_ar_sal = mysql_fetch_array($sql_sa)){
						$arch_sal_rows.= '<tr>
			     			<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($rs_ar_sal['Datee']).'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_TOTAL'].'">'.$currency_l.num_formatt($rs_ar_sal['montant']).$currency_r.'</td>

							</tr>'; 
		  }
		 ?>
		 
 <div id="step-ar-sal" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? '' : ' hide'); ?>">
           	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_AR_BONUS']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_SAL" data-rel="#step-ar-sal"><?php echo $lang_client_['client_account']['MENU_AR_SAL']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_COM" data-rel="#step-ar-com"><?php echo $lang_client_['client_account']['MENU_AR_COM']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_PRIME" data-rel="#step-ar-prime"><?php echo $lang_client_['client_account']['MENU_AR_PRIME']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_ORDER" data-rel="#step-ar-order"><?php echo $lang_client_['client_account']['MENU_AR_ORDER']; ?></a></li>				
          </ul>
		   </div>														      
		   </div>														      
		   <?php
			  if($arch_sal_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_SALAIRE']; ?></th>

					 </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $arch_sal_rows; ?>                    
                  </tbody>
              </table>	
			  <?php?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_AR_SALAIRE'].'</h4></div>';
			  }
			 ?>  																								
         </div> 

<!---------------------------------------------------------------------arch_commission------------------------------------------------>
<?php
$arch_com_rows = '';
		  $sql_ar_com = execute("select * from ".$table_prefix."commission where payed_com=1 and archive=0 and id_client='".$rs['id']."' order by Datee desc");
		  while ($rs_ar_com = mysql_fetch_array($sql_ar_com)){
						$arch_com_rows.= '<tr>
			                   <td>'.$rs_ar_com['Datee'].'</td>
			                   <td>'.$rs_ar_com['montant'].'</td>

							</tr>';
		  }
		 ?>
		 
 <div id="step-ar-com" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? '' : ' hide'); ?>">
           	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_AR_BONUS']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_SAL" data-rel="#step-ar-sal"><?php echo $lang_client_['client_account']['MENU_AR_SAL']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_COM" data-rel="#step-ar-com"><?php echo $lang_client_['client_account']['MENU_AR_COM']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_PRIME" data-rel="#step-ar-prime"><?php echo $lang_client_['client_account']['MENU_AR_PRIME']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_ORDER" data-rel="#step-ar-order"><?php echo $lang_client_['client_account']['MENU_AR_ORDER']; ?></a></li>				
          </ul>
		   </div>														      
		   </div>														     
		   <?php
			  if($arch_com_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_COMMISSION']; ?></th>

					 </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $arch_com_rows; ?>                    
                  </tbody>
              </table>	
			  <?php?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_AR_COMMISSIONS'].'</h4></div>';
			  }
			 ?>  																								
         </div> 


<!---------------------------------------------------------------------arch_prime------------------------------------------------------------------------------------------------>
<?php
$arch_prime_rows = '';
		  $sql_prim = execute("select * from ".$table_prefix."prime where payed_prime=1 and archive=0 and userid='".$_SESSION['Cuserid']."' order by Datee desc");
		  while ($rs_ar_pr = mysql_fetch_array($sql_prim)){
						$prime_rows.= '<tr>
			                   <td>'.$rs_ar_pr['Datee'].'</td>
			                   <td>'.$rs_ar_pr['montant'].'</td>

							</tr>'; 			
		  }
		 ?>
		 
 <div id="step-ar-prime" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? '' : ' hide'); ?>">
           	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_AR_BONUS']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_SAL" data-rel="#step-ar-sal"><?php echo $lang_client_['client_account']['MENU_AR_SAL']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_COM" data-rel="#step-ar-com"><?php echo $lang_client_['client_account']['MENU_AR_COM']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_PRIME" data-rel="#step-ar-prime"><?php echo $lang_client_['client_account']['MENU_AR_PRIME']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_ORDER" data-rel="#step-ar-order"><?php echo $lang_client_['client_account']['MENU_AR_ORDER']; ?></a></li>				
          </ul>
		   </div>														      
		   </div>														      
		   <?php
			  if($arch_prime_rows!=''){
			 ?>
              <table class="table table-bordered couleur2">
                  <thead>
                      <tr bgcolor="#F05F40">
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE']; ?></th>
                          <th><?php echo '<font color="white">'. $lang_client_['client_account']['TABLE_CONTENT_TITLE_PRIME']; ?></th>

					 </tr>
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $arch_prime_rows; ?>                    
                  </tbody>
              </table>	
			  <?php?>                                    
             <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_AR_PRIME'].'</h4></div>';
			  }
			 ?>  																								
         </div> 


<!---------------------------------------------------------------------------ARCHIVE ORDERS------------------------------------------------------------------------------------------>
 <div id="step-ar-order" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? '' : ' hide'); ?>">
           	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ARCHIVE' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_ARCHIVE" data-rel="#step-arch"><?php echo $lang_client_['client_account']['MENU_AR_BONUS']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_SAL' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_SAL" data-rel="#step-ar-sal"><?php echo $lang_client_['client_account']['MENU_AR_SAL']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_COM' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_COM" data-rel="#step-ar-com"><?php echo $lang_client_['client_account']['MENU_AR_COM']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_PRIME' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_PRIME" data-rel="#step-ar-prime"><?php echo $lang_client_['client_account']['MENU_AR_PRIME']; ?></a></li>				
		   	<li<?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_AR_ORDER' ? ' class="active"' : ''); ?>><a href="<?php echo abs_client_path; ?>/Rapport.php?type=MENU_AR_ORDER" data-rel="#step-ar-order"><?php echo $lang_client_['client_account']['MENU_AR_ORDER']; ?></a></li>				
          </ul>
		   </div>														      
		   </div>																														 
		               <div class="row-fluid">
        <div class="col-md-12">

            <div class="records_content2"></div>
        </div>
    </div>
         </div> 
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				
				
				
				
				
				
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
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.stepize.js"></script> 
    <script type="text/javascript" src="script.js"></script> 
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