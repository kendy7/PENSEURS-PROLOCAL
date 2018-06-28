<?php 
 if(isset($_SESSION['Clogged'])){
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
?>


<?php
$page_title = str_replace('index.php',$shop_title,last_selfURL());
$AdditionalHeadTags = '<link href="'.theme_css_path.'/slideshow.css" rel="stylesheet">';
require_once('include/header.php');
?>
  <body>
      <link rel="stylesheet"href="css/general_style.css"/>
   
   <!----------------------------------------------------- Le corps de la page de la page de l'index ---------------------------------------- -->
    <div class="container-fluid">
            <div class="row-fluid">                                    
				<div class="span3 network">
				  <h4>LEGENDRE</h4>
				  <input disabled="disabled" type="text" id="color"/>&nbsp;&nbsp; : Actif et Qualifie<br/>
				  <input disabled="disabled" type="text" id="color1"/>&nbsp;&nbsp;: Actif et non qualifie<br/>
				  <input disabled="disabled" type="text" id="color2"/>&nbsp;&nbsp;: Inactif<br/>
				  <input disabled="disabled" type="text" id="color3"/>&nbsp;&nbsp;: Bloque mais qualifie<br/>
				  <input disabled="disabled" type="text" id="color4"/>&nbsp;&nbsp;: Bloque et non qualifie<br/>
				  
				 </div>
						  
			</div>
			<?php
							// function Verifier_CIN_NIF($user,$code){
                       // global $conn;					
						// $requete=mysqli_query($conn,"SELECT CodeMembre,userid FROM ag_clients where CodeMembre='".$code."' and userid='".$user."' ") or die(mysql_error());
						// $rows=mysqli_num_rows($requete);
						// return $rows;
					// }
$result = execute("SELECT * FROM ag_clients");
// // hold all references 
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
    $thisRef['lastname'] = $data->lastname;
    $thisRef['statuts'] = $data->statuts;
    $thisRef['CodeMembre'] = $data->CodeMembre;
    $thisRef['phone'] = $data->phone;
    $thisRef['email'] = $data->email;
    $thisRef['entry_date'] = $data->entry_date;

    
   // // if there is no parent push it into items array()

   if($data->reference === $Reference) {
       $items[$data->CodeMembre] = &$thisRef;
   } else {
       $ref[$data->reference]['child'][$data->CodeMembre] = &$thisRef;
   }
 }
 
 
function get_menu($items) {
    $html = "<ul>";
	       
    foreach($items as $key=>$value) {
        
		$html.= '<li><a><span class="tooltiptext">'
		.$value['name']." ".$value['lastname']."</label><br/>"
		.$value['statuts']."<br/>"
		.$value['CodeMembre']."<br/>"
		.$value['phone']."<br/>"
		.$value['email']."<br/>"
		.$value['entry_date']."<br/></span></a>"
		;
        if(array_key_exists('child',$value)) {
          $html .= get_menu($value['child'],'child');
        }
        $html .= "</li>";
    }
    $html .= "</ul>";
    
    return $html;
}

$result1= execute("SELECT * FROM ag_clients where CodeMembre='".$Reference."' ");

while($data1 = mysql_fetch_array($result1)) {

 ?>

 <div id="reseau">

<table class="treerb" border="1" cellspacing="0" cellpadding="0">
	
	<tr bgcolor="black">
		<td>
			<div class="tooltiptext">
				<label>Nom:<?php echo "<span class='styleinfo'> ".$data1['name'];?></label>
				<label>Prenom:<?php echo "<span class='styleinfo'> ".$data1['lastname']."</span>";?></label>
				<label>Statut:<?php echo "<span class='styleinfo'> ".$data1['statuts']."</span>";?></label>
				<label>CIM:<?php echo "<span class='styleinfo'> ".$data1['CodeMembre']."</span>";?></label>
				<label>Tel:<?php echo "<span class='styleinfo'> ".$data1['phone']."</span>";?></label>
				<label>E-mail:<?php echo "<span class='styleinfo'> ".$data1['email']."</span>";?></label>
				<label>Date inscrite:<?php echo "<span class='styleinfo'> ".$data1['entry_date']."</span>";?></label>
			</div>
		</td>

	</tr>
	</table>

<table class="treerb" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td width="70px" class="ligneDroite">&nbsp;</td>
	<td width="70px" class="ligneGauche">&nbsp;</td>
	</tr>
 </table>
  <?php

 }
 ?>
 
 <div class="treeb">

 <?php
 
echo get_menu($items);

?>	
			
	</div>
	</div>
  </body>
 <?php
  }else{
header("Location:index.php");
}
?>