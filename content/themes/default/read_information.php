 <?php
 $reqa=execute(" select * from ".$table_prefix."clients where id='".$_SESSION['Cid']."' ");
 $row=mysql_fetch_array($reqa);
  execute(" update ag_informations set reading=1 where id='".$_POST['id']."' ");

	?>
  <div class="return" style="background:#FFF;" data-label="<?php echo str_replace('{client_name}',ucwords($_SESSION['Cname'].' '.$_SESSION['Clastname']),$lang_client_['header']['WELCOME_MESSAGE_ONLINE'])?>" data-label-type="ifo">
	<center><h2> Vous avez manque?</h2></center>
	<div class="span1 offset4" Style="background:silver;color:blue"><center>
	
	<?php
	echo $row['userid'];
	echo "</br>";
	echo $row['CodeMembre'];
	?>
    </center></div>
    <div class="span3">
	 <?php
	 echo "<h4>";
	 $req=execute(" select * from ".$table_prefix."informations where id='".$_POST['id']."' and CodeMembre='".$row['CodeMembre']."' ");
	$rows=$row=mysql_fetch_array($req);
		echo $rows['title']."<br/>";
		echo $rows['datee']."<br/>";
	 echo"</h4>";
	 ?>
    </div>
	<div class="span5" style="text-align:justify;word-wrap: break-word;">
	 <?php 
	 echo "<br/>";
	  echo "<br/>";
		echo $rows['description']."<br/>";
	 ?>
    </div>
	<div class="span1">
	 <button id="fermer" class="btn btn-danger">
	Fermer 
	 </button>
	   <script type="text/javascript" src="script.js"></script> 
	</div>
</div>
 
<script type="text/javascript">
$("#fermer").onClick(function(){
	document.location.href="information.php";
});
</script>
