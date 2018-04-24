<?php
// cette section aide a desactiver le compte client, s'il n'est pas aquité
  $req=execute("select payed_date_limit from ag_clients");
  while($res=mysql_fetch_array($req)){
		  $payed_date_limit= $res['payed_date_limit'];
		 
		 $datep=date("Y-m-d H:i:s");
		 $dated		=date_create($payed_date_limit);
		 $dateForm  =date_format($dated,"Y-m-d H:i:s");
				 if($dateForm<=$datep)
		{
		 execute(" update ag_clients set payed=0 where payed_date_limit <='".$datep."' ");
		}
    }
	//echo $datep;
 ?>
 
<div class="container-fluid"><!-- CONTAINER FOR NICESCROLL PLUGIN (FIX CHROME SCROLLING PROBLEM) this will be closed into footer.php file -->

<section class="navbar-fixed-top">

<section class="container-fluid" id="top-bar"> <!-- CONTAINER -->

  <div class="container-semifluid"> 
    <div class="row-fluid">
	
	     <div class="span2 logo-container">
				<a href="<?php echo abs_client_path ?>"><img src="<?php echo abs_uploads_path ?>/bc_logo.png" alt="<?php echo $shop_url; ?>" /></a>
				
	     </div>
	
	
         <div class="span4">
		 
           <div id="top-login-form-container">
		   
              <form method="post" action="check.php" accept-charset="UTF-8" id="top-login-form">
                     <div class="control-group pull-left">
                       <div class="controls">
                         <div class="input-prepend">
                          <span class="add-on"><i class="icon-user"></i></span>
                          <input type="text" name="useridLog" id="top-useridLog" class="required" placeholder="UserID" value="" />   
                         </div> 
                       </div>                       
                     </div>
                     <div class="control-group pull-left">
                       <div class="controls">   
                         <div class="input-prepend">                          
                          <span class="add-on"><i class="icon icon-black icon-key"></i></span>
                          <input type="password" name="passwordLog" id="top-passwordLog" class="required" placeholder="Password" value="" />
                        </div>
                      </div>                                           
                    </div>  
                    <span class="btn btn-info unbordered solid squared" id="top-btn-login"><i class="icon icon-white icon-unlocked"></i> <?php echo $lang_client_['general']['TEXT_LOGIN']; ?></span> 
                     <?php//require_once('manager-nivel.php');?><div class="clearfix"></div>
                    					
              </form> 
             			 
          
		  </div>
           <?php
		    if(!isset($_SESSION['Clogged'])){
				
		   ?>
              <div class="welcome-message"><?php echo str_replace('{shop_name}',$shop_title,$lang_client_['header']['WELCOME_MESSAGE_OFFLINE']); ?> <a href="#" id="btn-login-link"><?php echo $lang_client_['general']['TEXT_LOGIN']; ?></a> </div>
           <?php
			}else{
				require_once('manager-nivel.php');
		   ?>
              <div class="welcome-message"><?php echo str_replace('{client_name}',ucwords($_SESSION['Cname'].' '.$_SESSION['Clastname']),$lang_client_['header']['WELCOME_MESSAGE_ONLINE']); ?>&nbsp;|&nbsp;<a href="<?php echo abs_client_path ?>/log-out.php"><i class="icon-off"></i> <?php echo $lang_client_['general']['TEXT_LOG_OUT']; ?></a></div>              
           <?php
			}
		   ?>
		  
		   <h4><font color="#f05f40">Votre santé est notre priorité</font></h4>
       
	   
	   </div> 
	   
	   
           
	   

        <div class="span3 ascrail2000">  
      	<img src="<?php echo theme_img_path; ?>/pub/slide.gif" alt=""/> 
		
		</div> 
																																						         <div class="span3">		 <?php            if(basename(selfURL()) !== 'cart.php' && basename(selfURL()) !== 'check-out.php') require_once('top-cart.php');          ?>               </div> 
																				
																					 
     
	   
    </div>
  </div> 
  
   </section> 
 
<header class="colr3" id="main-container">
	<?php
         require_once('sous-menu.php');
		
     ?>
</header> 
	
    
</section> 
	                                                                                  
    
	  
	  																			 
	  

   <div class="clearfix">
   </div>
   
   
 
 