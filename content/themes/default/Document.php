
	
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
	
	
	<style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:14;
    font-weight:bold;  
}
		</style>
      <div class="box-header">
           <span class="header-text"><i class="icon icon-black icon-user"></i> <?php echo $page_title; ?></span>     
      </div> 



     <section class="row-fluid"><!-- BODY breadcrumb --> 
	 
	     <div class="navbar">
             <div class="navbar-inner">
                 <ul class="nav">
					  
					  
					  <li><a href="<?php echo abs_client_path; ?>/compte.php"><?php echo $lang_client_['client_account']['compte']; ?></a></li>
					  <li><a href="<?php echo abs_client_path; ?>/Rapport.php"><?php echo $lang_client_['client_account']['MENU_RAPPORT']; ?></a></li>
					  					  <li><a href="<?php echo abs_client_path; ?>/network.php" target="Blanck_"><?php echo $lang_client_['client_account']['MENU_NETWORK']; ?></a></li>
						<?php require_once("Information.php");?>
					  <li><a href="<?php echo abs_client_path; ?>/register.php"><?php echo $lang_client_['client_account']['TEXT_SIGN_UP']; ?></a></li>					  
					  <li class="active"><a href="<?php echo abs_client_path; ?>/Document.php"><?php echo $lang_client_['client_account']['DOC_SIGN_UP']; ?></a></li>
					  <li><a href="<?php echo abs_client_path ?>/cart.php"><?php echo $lang_client_['general']['TEXT_SHOPPING_CART']; ?></a></li>
                      <li> <a href="<?php echo abs_client_path; ?>/account.php"><?php echo $lang_client_['client_account']['MENU_COMPTE']; ?></a></li>
				 
				 </ul>
             </div>
         </div>
   
     </section><!-- / BODY breadcrumb --> 
	 
     <section class="row-fluid myaccount-page"><!-- BODY ROW -->
       
        <div class="span9">
        
         <div id="info" class="account-part active<?php echo (!isset($_GET['type']) || $_GET['type'] == 'account_info' ? '' : ' hide'); ?>">
<div class="container home">
<font face="comic sans ms">
<h3><center> Listes de documents a telecharger </center> </h3>
</font>

 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">Titre</font></th>
    <th><font face="comic sans ms">type </font></th>
	<th><font face="comic sans ms">Telechargement fichier </font></th>	
	<th><font face="comic sans ms">lire </font></th>
  </tr>
   </thead>
    <tbody>
                        <?php


	$q=execute("select count(*) \"total\"  from ag_document");
	//$ros=mysql_query($q);
	$row=(mysql_fetch_array($q));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q=execute("SELECT * FROM ag_document ORDER BY subject ASC limit $k,$dis");
	//$ros=mysql_query($q);
	
	while($row=mysql_fetch_array($q))
	{
	$name=$row['file'];
		echo '<tr>';
		echo '<td align=center>' . $row['subject'];
		echo '<td align=center>' .$row['topic'];
		echo "<td align=center> <a href='download.php?filename=".$name."' >Telecharger</a>"; 		
        echo "<td align=center><a href='read.php?filename=".$name."' target=_blank >lire</a>";
		echo '</tr>';
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	if($page_cur>1)
	{
	 echo '<a href="Document.php?page='.($page_cur-1).'" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
     }
	else
	{
	  
	  echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
	  
	}
	for($i=1;$i<$total_page;$i++)
	{
		if($page_cur==$i)
		{
		    
			echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
	
		}
		else
		{
		echo '<a href="Document.php?page='.$i.'"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a> ';
		
		}
	}
	if($page_cur<$total_page)
	{
		
		echo '<a href="Document.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
  	  
	}
	else
	{

	 echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
     }
   
?>

</div>

         </div>         
		 
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