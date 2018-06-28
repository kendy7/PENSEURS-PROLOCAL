<?php
require_once('../../include/inc_load.php');
require_once(rel_admin_path.'/control_login.php');
require_once('general_tags.php');
require_once(rel_client_path.'/include/lib/Zebra_Mptt.php');

if(isset($_POST['bonus'])){
$AJ=$_POST['AJunior'];
$AS=$_POST['ASenior'];
$ARG=$_POST['ARGent'];

execute(" UPDATE ".$table_prefix."clients_bonus set AJunior='".$AJ."',ASenior='".$AS."',ARGent='".$ARG."' ");
header("Location:index.php");
}elseif($_POST['salaire']){
$AOR=$_POST['AORs'];
$APT=$_POST['APTs'];
$AEM=$_POST['AEMs'];
$ADM=$_POST['ADMs'];

execute(" UPDATE ".$table_prefix."clients_salaire set AOR='".$AOR."',APT='".$APT."',AEM='".$AEM."',ADM='".$ADM."' ");
header("Location:index.php");

}elseif($_POST['commission']){
$API=$_POST['API'];
$AAJ=$_POST['AAJ'];
$AAS=$_POST['AAS'];
$ARG=$_POST['ARG'];
$AOR=$_POST['AOR'];
$APT=$_POST['APT'];
$AEM=$_POST['AEM'];
$ADM=$_POST['ADM'];

execute(" UPDATE ".$table_prefix."clients_comission set API='".$API."',AAJ='".$AAJ."', AAS='".$AAS."',ARG='".$ARG."', AOR='".$AOR."',APT='".$APT."',AEM='".$AEM."',ADM='".$ADM."' ");
header("Location:index.php");
	
}elseif($_POST['points']){
$API=$_POST['APIp'];
$AAJ=$_POST['AAJp'];
$AAS=$_POST['AASp'];
$ARG=$_POST['AARGp'];
$AOR=$_POST['AORp'];
$APT=$_POST['APTp'];
$AEM=$_POST['AEMp'];
$ADM=$_POST['ADMp'];

execute(" UPDATE ".$table_prefix."nivel_points set API='".$API."',AAJ='".$AAJ."', AAS='".$AAS."',AARG='".$ARG."', AOR='".$AOR."',APT='".$APT."',AEM='".$AEM."',ADM='".$ADM."' ");
header("Location:index.php");
}



else{
	echo"No clic";
}
//header("Location:index.php");
?>