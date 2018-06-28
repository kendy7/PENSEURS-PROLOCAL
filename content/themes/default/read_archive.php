<?php

 if(isset($_SESSION['Clogged'])){
  $sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);
  $rs = mysql_fetch_array($sql);
 } 
	$data = '<table class="table table-bordered couleur2">
	
	
	
						<tr>
							<th>Date</th>
							<th>point</th>
							<th>Duree de validité des points</th>
							<th>Plus...</th>
							<th>Annuler</th>
						</tr>';

		  $query = "select * from ".$table_prefix."archorders where id_client = '".$rs['id']."' order by data desc"; //data between '".$rs['entry_date']."' and '".$datel_limit."' and

	if (!$result = execute($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
 
			
					$data .= '<tr>
								<td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($row['data']).'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$row['point'].'</td>
							   ';
							   
			$data .=   '
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS'].'">'.$row['point'].'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ACTIONS'].'">
							     <span style="margin-bottom:5px;" class="btn btn-info squared unbordered solid info-order" data-id="'.$row['id'].'"><i class="icon-white icon-info-sign"></i></span>
								 '.(!$rs_ord['payed'] && $paypal['status'] && $rs_or['payment_method'] == 'PAYPAL' ? ' <span data-id="'.$row['id'].'" style="margin-bottom:5px;" class="pay-btn btn btn-info squared unbordered solid">'.$lang_client_['client_account']['BUTTON_PAY_NOW'].'</span>' : '' ).'
							   </td>

				<td>
					<button onclick="SupArchive('.$row['id_orders'].')" class="btn btn-danger">Supprimer</button>
				</td>
							   
							</tr>'; 
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">'.$lang_client_['client_account']['ALERT_NO_ARCHIVE'].'</td></tr>';
    }

    $data .= '</table>';

    echo $data;



?>
<script>
				$('.myaccount-page #step-ar-order .info-order').on('click',function(){
					 $id = $(this).attr('data-id');
					  $.ajax({
						type:'POST',
						beforeSend:function(){
						 $.loader({imgPath:$('body').data('theme_img_path')+'/loader.gif',appendTo:'body'});        
						},
						data: {id:$id},
						url:$('body').data('abs_client_path')+'/archorder-info.php',
						success:function(data){	
							$.loader.hide();
							$.bootalert({
								ID        : 'alert-info-order-modal',
								LabelText : $(data).filter('.return').attr('data-label'),
								TypeLabel : $(data).filter('.return').attr('data-label-type'),
								BodyText  : $(data).filter('.return').html(),
								TypeBody  : ''
							});					  				  
						}
					  });						 
				});	
</script>