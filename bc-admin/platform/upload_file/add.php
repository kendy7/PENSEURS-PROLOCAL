<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require('general_tags.php');

		if(isset($_POST['Payer'])){
		 $datee_payed  =$_POST['date_payed'];
		 $datelimit   =$_POST['date_limit'];
		 $nbjours     =$_POST['nbjours'];
		 $nbMois      =$_POST['duration'];
		 $CIM         =$_POST['CIM'];
		 $datesysas	  =date_create($datelimit);
		 $date_limit  =date_format($datesysas,"d-m-Y");
		 
		 
    $datel		  =date_create($datee_payed);								
     $date_payed      =date_format($datel,"Y-m-d");
     $datel_limit = date("Y-m-d", strtotime($date_payed."+".$nbMois ." month"));
                           
		
		 $query=" update ag_clients set payed=1,payed_date='".$date_payed ."', payed_date_limit='".$datel_limit."' where CodeMembre='".$CIM."' ";
		execute($query);
		 echo "La modification a ete aporte avec succes";
		}
												
?>
