<?php
 $sql = "select * from ".$table_prefix."clients where id='".$_SESSION['Cid']."' ";
 $rs_result = execute($sql);
 $rs = mysql_fetch_array($rs_result);
 
 // ce script permet de recuperer la date entree des membres, et verifier les 30 jours qu'ils doivent respecter pour atteindre les niveaux  
 $dates=date("Y-m-d H:i:s");
 $dr=$rs['entry_date'];
 $dc=date_create($dr);
 $df=date_format($dc,"Y-m-d");
 $ds=date_create($dates);
 $dss=date_format($ds,"Y-m-d");
function NbJours($debut, $fin) {
  $tDeb = explode("-", $debut);
  $tFin = explode("-", $fin);
  $diff = mktime(0, 0, 0, $tFin[1], $tFin[2], $tFin[0]) - mktime(0, 0, 0, $tDeb[1], $tDeb[2], $tDeb[0]);
  return(($diff / 86400));
}
// Comment apeler la fonction
$Nombres_jours =  NbJours($df,$dss);
 
	// cette requette compete le nombre API dans le reseau--API----------------------------------API
      $sql_countAPI = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='API'  and Point>=5 and reference='".$rs['CodeMembre']."' ")  ;
      $donneeAPI = mysql_fetch_array($sql_countAPI);
      $nb_nombreAPI = $donneeAPI['nb_nombre'];
    //--API----------------------------------API---------------------API-------------------------------API-------------------------
	
	// cette requette compete le nombre AJ dans le reseau
	 $sql_countAJ = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients  where statuts='AJ' and Point>=20   and reference='".$rs['CodeMembre']."' ")  ;
      $donneeAJ  = mysql_fetch_array($sql_countAJ );
      $nb_nombreAJ  = $donneeAJ ['nb_nombre'];
     //--AJ----------------------------------AJ---------------------AJ-------------------------------AJ-----------------------------------------
	
	// cette requette compete le nombre AS dans le reseau
      $sql_countAS = execute("SELECT COUNT(CodeMembre) AS nb_nombre FROM ag_clients where statuts='AS' and Point>=40 and reference='".$rs['CodeMembre']."' ")  ;
      $donneeAS = mysql_fetch_array($sql_countAS);
      $nb_nombreAS = $donneeAS['nb_nombre'];
	  
	  echo $nb_nombreAS." ";
	  echo $nb_nombreAPI." ";
	  echo $rs['point'];
    //--AS----------------------------------AS---------------------AS-------------------------------AS------------------------------------------
	
	//----------------cette requette compete le nombre ARG dans le reseau
	  $sql_countARG = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='ARG' and Point>=60 and reference='".$rs['CodeMembre']."' ")  ;
      $donneeARG = mysql_fetch_array($sql_countARG);
      $nb_nombreARG = $donneeARG['nb_nombre'];
    //--ARG----------------------------------ARG---------------------ARG-------------------------------ARG-------------------------------------
	
	//----------------cette requette compte le nombre OR dans le reseau
	  $sql_countOR = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='OR' and Point>=100 and reference='".$rs['CodeMembre']."' ")  ;
      $donneeOR = mysql_fetch_array($sql_countOR);
      $nb_nombreOR = $donneeOR['nb_nombre'];
    //--OR----------------------------------OR---------------------OR-------------------------------OR------------------------------------------
	
	//----------------cette requette compte le nombre PT dans le reseau
	 $sql_countPT = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='PT' and Point>=100 and reference='".$rs['CodeMembre']."' ")  ;
      $donneePT = mysql_fetch_array($sql_countPT);
      $nb_nombrePT = $donneePT['nb_nombre'];
    //--PT----------------------------------PT---------------------PT-------------------------------PT-----------------------------------------
	
	//----------------cette requette compte le nombre EM dans le reseau
	  $sql_countEM = execute("SELECT COUNT(*) AS nb_nombre FROM ag_clients where statuts='EM' and Point>=100 and reference='".$rs['CodeMembre']."' ")  ;
      $donneeEM = mysql_fetch_array($sql_countEM);
      $nb_nombreEM = $donneeEM['nb_nombre'];
    //--EM----------------------------------EM---------------------EM-------------------------------EM-----------------------------------------

	
	
	
	
if($nb_nombreAPI>=3  && $rs['point']>=20 && $Nombres_jours>=30){//
    execute(" update ag_clients set statuts='AJ',Bonus=Bonus+7500 where CodeMembre='".$rs['CodeMembre']."' ");//($Nombres_jours>30 && $Nombres_jours<=60)
  }
  else{
  execute(" update ag_clients set statuts='API' where CodeMembre='".$rs['CodeMembre']."' ");
  }
//----------------------------------------------------------------------------------------------------------  
  
  if(($nb_nombreAPI>=3 && $nb_nombreAJ>=3) && ($rs['point']>=40 && $rs['payed']==1) && ($Nombres_jours>30 && $Nombres_jours>=90)){
    execute(" update ag_clients set statuts='AS',Bonus=Bonus+12500 where CodeMembre='".$rs['CodeMembre']."' ");
 
  }
   
// //----------------------------------------------------------------------------------------------------------  
 if(($nb_nombreAPI>=6 && $nb_nombreAS>=3) && $rs['point']>=60 && $Nombres_jours>=30 )
 {
    execute(" update ag_clients set statuts='ARG',Bonus=Bonus+20000 where CodeMembre='".$rs['CodeMembre']."' ");
 }
 
 
 
 
 
// //----------------------------------------------------------------------------------------------------------  

 // if($nb_nombreAPI>=9 && $nb_nombreARG>=3 && $rs['point']>=100)
// {
    // execute(" update ag_clients set statuts='OR',salaire=salaire+25000 where CodeMembre='".$rs['CodeMembre']."' ");
// }
// //----------------------------------------------------------------------------------------------------------  

// if($nb_nombreAPI>=10 && $nb_nombreARG>=2 && $nb_nombreOR>=3 && $rs['point']>=100)
// {
 // execute(" update ag_clients set statuts='PT',salaire=salaire+50000 where CodeMembre='".$rs['CodeMembre']."' ");
// }

// //----------------------------------------------------------------------------------------------------------  

// if($nb_nombreAPI>=13 && $nb_nombreOR>=2 && $nb_nombrePT>=3 && $rs['point']>=100)
// {
 // execute(" update ag_clients set statuts='EM' where CodeMembre='".$rs['CodeMembre']."' ");
// }
// //----------------------------------------------------------------------------------------------------------  

// if($nb_nombreAPI>=16 && $nb_nombreEM>=5)
// {
 // execute(" update ag_clients set statuts='DM' where CodeMembre='".$rs['CodeMembre']."' ");
// }
// //----------------------------------------------------------------------------------------------------------  


/*
extraction de donnee avec le mois encours

SELECT userid,entry_date
FROM ag_clients
WHERE MONTH(entry_date) = MONTH(NOW())
ORDER BY entry_date DESC


SELECT userid,entry_date
FROM ag_clients
WHERE entry_date BETWEEN ( (SELECT DATE_SUB(curdate(),INTERVAL (DAY(curdate())-1) DAY)) ) AND CURDATE()
ORDER BY entry_date DESC

*/


// if($rs['statut']=='API' && $Nombres_jours>=60 && $rs['point']<=19)



 ?>