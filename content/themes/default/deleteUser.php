<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{


    // get user id
    $user_id = $_POST['id'];
   $query = ("DELETE FROM ag_orders WHERE id = '$user_id'");
    if (!$result = execute($query)) {
        exit(mysql_error());
    }
}
?>

 
	           <div id="step-all-purchase" class="account-part <?php echo (isset($_GET['type']) && $_GET['type'] == 'MENU_ALL_PURCHASE' ? '' : ' hide'); ?>">
           <div class="unbordered alert alert-info squared alert-blok solid"><?php echo $lang_client_['client_account']['ALERT_ALL_PURCHASES']; ?>
		   
		   </div>
		   
		               <div class="row-fluid">
        <div class="col-md-12">

            <div class="records_content1"></div>
        </div>
    </div>
             
         </div> 