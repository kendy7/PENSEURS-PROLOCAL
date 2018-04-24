						
            <li id="noti_Container"><a>
                <div id="noti_Counter"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
                
                <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                <div id="noti_Button">Informations</div>    

                <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                <div id="notifications" class="row-fluid" style=" width:740px;overflow:auto;z-index:1000;">
                    <h3>Notifications</h3>
                    <div class="span11" style="z-index:1000;">
					
	             <?php
			 $member=execute("select count(CodeMembre) as NombreInfN from ag_informations where reading=0 and CodeMembre='".$rs['CodeMembre']."' ");
			 //$sql = execute('select * from '.$table_prefix.'clients where id = '.$_SESSION['Cid']);

					$aff=mysql_fetch_array($member);
					$nbref=$aff['NombreInfN'];
			 $orders_rows='';
			 
			     	$number = 1;
		 $result=execute("select * from ".$table_prefix."informations where CodeMembre='".$rs['CodeMembre']."' order by datee desc ");

		while($row = mysql_fetch_assoc($result))
    	{
			$texte_final = substr(html_entity_decode($row['description']), 0, 25) . " ..." ;
			if($row['reading']==0){
				$orders_rows .= '<tr bgcolor="#87cefa" style="color:white">
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($row['datee']).'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$row['title'].'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS'].'">'.$texte_final.'</td>
							   <td><span style="margin-bottom:5px;" class="btn btn-info squared unbordered solid lireinfo" data-id="'.$row['id'].'">Lire</span></td>
							   <td>
								<button onclick="supprimerInfo('.$row['id'].')" class="btn btn-danger">Supprimer</button>
							   </td>
							</tr>'; 
			}else{
			$orders_rows .= '<tr>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_DATE'].'">'.view_date($row['date']).'</td>
			                   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER'].'">'.$row['title'].'</td>
							   <td data-title="'.$lang_client_['client_account']['TABLE_CONTENT_TITLE_ORDER_STATUS'].'">'.$texte_final.'</td>
							   <td><span style="margin-bottom:5px;" class="btn btn-info squared unbordered solid lireinfo" data-id="'.$row['id'].'">Lire</span></td>
							   <td>
								<button onclick="supprimerInfo('.$row['id'].')" class="btn btn-danger">Supprimer</button>
							   </td>
							</tr>'; 
			}
    	}
			 
			 
			  if($orders_rows !=''){ 
			 ?>
			 <table class="table table-bordered couleur2">
                  <thead>
                      <!--tr bgcolor="#F05F40">
					      <th>Date</th>
					      <th>Sujet</th>
					      <th>Contenu</th>
					      <th>Lire</th>
					      <th>Supprimer</th>
                    </tr-->
                  </thead>                                                                
                  <tbody class="product-tbody-container">
                      <?php echo $orders_rows; ?>                    
                  </tbody>
              </table>
			  <?php
			  }else{
				echo '<div class="alert alert-warning alert-block squared solid unbordered"><h4>'.$lang_client_['client_account']['ALERT_NO_INFOR'].'</h4></div>';
			  }
			 ?> 
					</div>
                </div>
            </a></li>