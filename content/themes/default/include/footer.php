<footer>
  <div class="container-fluid" id="footer">
   <div class="container-semifluid">   
      <div class="row-fluid">
        <div class="span6">        
          <img src="<?php echo abs_uploads_path ?>/bc_logo_footer.png" alt="<?php echo $shop_url; ?>" width="30%" />
          <p style="text-align:justify">
           ASCENSION GROUP est une  entreprise haitienne specialisée  dans  la vente  directe. Elle  vous offre des  produits  de qualité et  l'opportunuité de  mener  une  vie  de confort  et de dignité. 
												  
          </p>
         <div class="clearfix"></div>
        </div>
        <div class="span3">
          <!--div class="box-header">
            <span class="header-text" style="white-space:nowrap;"><?php //echo $lang_client_['general']['TEXT_YOUR_ACCOUNT']; ?></span>   
          </div-->         
         <ul class="menu-vertical-indicator">
           <!--li><a href="<?php //echo abs_client_path; ?>/account.php"><?php //echo $lang_client_['footer']['TEXT_LINK_GENERAL_INFO']; ?></a></li>
           <li><a href="<?php //echo abs_client_path; ?>/account.php?type=address"><?php //echo $lang_client_['footer']['TEXT_LINK_ADDRESS']; ?></a></li>
           <li><a href="<?php //echo abs_client_path; ?>/account.php?type=orders"><?php //echo $lang_client_['footer']['TEXT_LINK_ORDERS']; ?></a></li>
           <li><a href="<?php //echo abs_client_path; ?>/contacts.php"><?php //echo $lang_client_['general']['TEXT_CONTACT_US']; ?></a></li-->
         </ul>
         <div class="clearfix"></div>
        </div>
        <div class="span3">
          <div class="box-header">
            <span class="header-text" style="white-space:nowrap;"><?php echo $lang_client_['general']['TEXT_CONTACT_US']; ?></span>   
          </div>         
         <ul>
           <li><img src="<?php echo theme_img_path; ?>/footer-phone.png" /><?php echo $company_phone; ?></li>
           <li><img src="<?php echo theme_img_path; ?>/footer-email.png" /> <?php echo $company_email; ?></li>
           <li><img src="<?php echo theme_img_path; ?>/footer-marker.png" /> <?php echo $company_address.', '.$company_zipcode.' '.$company_city; ?></li>
            <li><img src="<?php echo theme_img_path; ?>/footer-email.png" /> <a href="<?php echo abs_client_path; ?>/contacts.php"><?php echo $lang_client_['general']['TEXT_CONTACT_US']; ?></a></li>

		 </ul>
         <div class="clearfix"></div>
        </div>       
                     
      </div>
      <div class="row-fluid">
        <div class="span12 text-center" style="border-top:1px solid #ccc;line-height:50px;">
          <span class="pull-left"><?php echo $company_name; ?> - <?php echo $company_taxcode; ?></span>
          <span class="pull-right"><?php echo str_replace('{shop_name}',$shop_title,str_replace('{date}',date("Y"),$lang_client_['footer']['COPYRIGHT'])); ?></span>
          <div class="clearfix"></div>          
        </div>
      </div>
   </div>
  </div>    
</footer>
<!-- retrieve user's data form -->						 
<div id="retrieve-data-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="retrieve-data-modallabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
    <span id="retrieve-data-modallabel"><strong class="label label-info"><?php echo $lang_client_['footer']['TEXT_RETRIEVE_DATA_TITLE']; ?></strong></span>
  </div>  
  <div class="modal-body">
     <div id="retrieve-result" class="hide"></div>
     <form method="post" action="<?php echo abs_client_path; ?>/retrieve-data.php" accept-charset="UTF-8" id="retrieve-data-form">    		  
         <div class="control-group">
           <div class="controls">
            <label for="userid-retrieve"><?php echo $lang_client_['footer']['TEXT_USERID']; ?></label>
             <div class="input-prepend">
              <span class="add-on"><i class="icon-user"></i></span>              
              <input type="text" name="userid_retrieve" id="userid-retrieve" data-msg-required=" Entrer votre identifiant" class="leastoneinput" placeholder="<?php echo $lang_client_['footer']['TEXT_USERID']; ?>" value="" />   
             </div>
<p id="invalid-userid-retrieve" class="error_msg"></p>			 
           </div>                       
         </div>
         <div class="control-group">
           <div class="controls">  
             <label for="email-retrieve"><?php echo $lang_client_['footer']['TEXT_EMAIL']; ?></label> 
             <div class="input-prepend">                          
              <span class="add-on"><i class="icon-envelope"></i></span>              
              <input type="text" name="email_retrieve" id="email-retrieve" class="leastoneinput email" placeholder="<?php echo $lang_client_['footer']['TEXT_EMAIL']; ?>" value="" />
            </div>
			<p id="invalid-email-retrieve" class="error_msg"></p>
          </div>   
		  
        </div>   
        <span class="btn btn-info unbordered solid squared pull-right" id="btn-retrieve-data"><i class="icon-white icon-wrench"></i> <?php echo $lang_client_['footer']['BUTTON_RETRIEVE_DATA']; ?></span>
        <div class="clearfix"></div>              
       </form>  
  </div>

</div> 
<!-- / retrieve user's data form -->	


<!-- Les  conditions internes d Ascencion Group -->						 
<div id="retrieve-data-modal-condition" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="retrieve-data-modallabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="icon-remove"></li></button>
    <span id="retrieve-data-modallabel"><strong class="label label-info"><?php echo $lang_client_['footer']['TEXT_Condition_Interne']; ?></strong></span>
  </div>  
  <div class="modal-body text-condition">
     <div id="retrieve-result" class="hide"></div>
     <h4> Les conditions </h4>
	  <p> 1- 	Le présent document est le règlement qui fixe les conditions d’intégration d’une personne au programme de promotion et de vente de  ASCENSION GROUP. </p>
	  <p> 2-	Toute personne inscrite au programme dont l’inscription est validée détient automatiquement le statut d’agent promoteur indépendant (API). Les frais d’inscription ne sont pas remboursables. </p>
	  <p> 3-	Un API est un entrepreneur qui fait affaires avec AG. En investissant son argent, son temps et en exerçant son leadership pour construire son réseau, il ne fait que créer son propre entreprise. Il est un agent marketing indépendant auquel AG accorde le droit de faire la promotion de son programme et de ses produits. Il est autorisé à vendre ses produits et à recruter d’autres API pour construire son réseau. En contrepartie il bénéficie chaque mois des bonus, des primes leadership, des salaires et des commissions suivant les conditions établies par la présente et celles du programme de promotion et de vente. </p>
	  <p> 3.1-	Un API n’est pas un employé de AG, comme son nom l’indique c’est un agent indépendant qui bénéficie seulement de l’opportunité qu’offre AG. Par conséquent, en aucun cas, AG n’est tenue aux exigences relatives aux rapports d’une entreprise à un employé.  </p>
	  <p> 4-	Pour être API, une personne doit atteindre l’âge de la maturité conformément aux lois haïtiennes. </p>
	  <p> 5-	Au moment de l’inscription, les API sont tenus de donner des informations vraies et correctes. AG n’est responsable d’aucune conséquence ou éventuel problème qu’un API fait face en raison d’informations frauduleuses ou erronées qu’il a données lors de son inscription.  </p>
	  <p> 6-	L’engagement d’un API au programme de promotion et de vente est personnel. AG ne reconnait que lui et lui seul. Aucune autre personne pour quelque raison qu’il soit ne peut décider à sa place.  </p>
	  <p> 7-	Dès qu’une personne dispose du statut d’API, cela implique automatiquement son accord au règlement et aux conditions qui régissent le programme. </p>
	  <p> 8-	Un API autorise AG à envoyer sur son e-mail et son numéro de téléphone des messages écrits, des documents audio, audiovisuels, des publicités relatives à l’entreprise et ses activités.</p>
	  <p> 9-	Un API autorise AG à prélever les taxes exigées par les autorités compétentes de l’État haïtiens. </p>
	  <p> 10-	Les API sont les seules personnes autorisées à acheter directement nos produits dans nos rayons de ventes.  </p>
	  <p> 11-	L’argent reçu par AG pour une commande placée par un API n’est pas remboursable. Dans certains cas l’administration peut permettre le choix d’autres produits à la place de ceux préalablement choisis.</p>
	  <p> 12-	Les commandes d’un API doivent être opérées sur son compte personnel (bureau virtuel), pas celui d’un autre. </p>
	  <p> 13-	Un API ne peut recevoir aucune commande et aucun chèque sans son licence.  </p>
	  <p> 13.1-	Les licences perdues sont reproduits par AG aux frais des API. L’administration fixe les frais à payer.  </p>
	  <p> 14-	Pour bénéficier les avantages qu’offre le programme, les API doivent respecter les conditions du programme telles que établies par AG. </p>
	  <p> 15-	Un API bénéficie à vie et de génération en génération les intérêts, les privilèges et prérogatives que lui confère son entreprise, c’est-à-dire son réseau, conformément aux conditions du programme et au présent règlement. Mais sous peine de ne plus pouvoir bénéficier les avantages du programme, les API sont tenus de renouveler leur licence chaque année.  </p>
	  <p> 16-	Un API peut désigner un héritier pour son entreprise. Mais il peut le faire seulement après avoir atteint le niveau IV dans la structure du programme de promotion. L’héritier bénéficie son héritage suivant les termes du présent règlement ou sa version modifiée et les conditions du programme. </p>
	  <p> 16.1-	L’héritier d’un API jouit les prérogatives de son héritage après la mort de celui-ci ou après la signature du document formel de passation d’héritage conformément aux procédures établies. </p>
	  <p> 17-	Dignité, intégrité, solidarité, réussite, bien-être sont les valeurs fondamentales de l’entreprise. Dans le cadre des activités relatives au programme, les API sont tenus au respect de ces valeurs. </p>
	  <p> 18-	AG peut mettre fin au contrat qui le lie à un API dans les cas où celui-ci ne respecte pas l’une des clauses. Et en mettant fin au contrat, AG n’a aucune redevance envers l’ancien API.  </p>
	  <p> 19-	Un API faisant usage de faux, de manipulation, de vol ou qui ternit l’image de AG par des actes infâmes dans le cadre du programme est passible d’expulsion. </p>
	  <p> 20-	AG dispose du droit de modifier le présent règlement ainsi que le programme de promotion et de vente. Il dispose également du droit de statuer sur tout cas n’ayant pas été prévu dans le programme.  </p>
	  <p> 21-	Ce règlement tient lieu de contrat entre AG et toute personne inscrite au programme et sert à qui de droit.  </p>
	  
  </div>
</div> 
<!-- Les  conditions internes d Ascencion Group -->	

					
<a id="go-to-top"></a>
</div><!-- CLOSE CONTAINER FOR NICESCROLL PLUGIN (FIX CHROME SCROLLING PROBLEM), div opened into body-header.php file -->
    <!-- ========================== Javascript ======================== -->  
	<?php 
	echo html_entity_decode(str_replace('<br>','',str_replace('<br/>','',str_replace('&#39;',"'",$google_analytics))));
	/**** detect IE version for responsive menu ****/
    if(preg_match('/(?i)msie [2-8]/',$_SERVER['HTTP_USER_AGENT'])) { 
       $mediaquery = false;
     } else { 
       $mediaquery = true;
     }
    ?>      
    <?php require_once(rel_client_path.'/include/inc_js_base_client.php'); ?>
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/jsin.1.2.min.js"></script>
    <script type="text/javascript" src="<?php echo abs_client_path ?>/lang/<?php echo languageCli.'/'.languageCli; ?>.js"></script>    
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/validate.js"></script> 
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/ajaxForm.js"></script> 
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/livequery.js"></script> 
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/center-div.js"></script>  
    <script type="text/javascript" src="<?php echo abs_client_path ?>/include/js/plugins/loader.js"></script>  
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.nicescroll.js"></script> 
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.bootstrap.generalalert.js"></script>
    <script type="text/javascript" src="<?php echo theme_js_path ?>/restyle-checkbox.js"></script>
    <script type="text/javascript" src="<?php echo theme_js_path ?>/restyle-radio.js"></script>  
      <!-- carousel plugin --> 
        <script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.carouFredSel-6.2.1.js"></script>  
		<script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.transit.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.ba-throttle-debounce.min.js"></script>          
      <!-- /carousel plugin --> 
	<script type="text/javascript">
    $(function(){
	  /*$("html").niceScroll({cursorcolor:'#3A87AD',cursorborder:'1px solid #fff'});*/
	  $('body').data('theme_path','<?php echo theme_abs_path; ?>');
	  $('body').data('theme_img_path','<?php echo theme_img_path; ?>');
	  $('body').data('abs_client_path','<?php echo abs_client_path; ?>');
	  $('body').data('thousands_separator','<?php echo $thousands_separator; ?>');
	  $('body').data('decimals_separator','<?php echo $decimal_separator; ?>');	  
	  <?php 
	    if($mediaquery){
	  ?>	  	
	      $("html").niceScroll({cursorcolor:'#3A87AD',cursorborder:'0px solid #fff',cursorwidth:8});
		  $('.responsiveHead').on('click', function(e) {
			  e.preventDefault();			  
			  if(!$(this).next('.responsiveMenu').is(':visible')){
				  $(this).next('.responsiveMenu').slideDown('fast');
			  }else{				  
				  $(this).next('.responsiveMenu').slideUp('fast');
			  }
		  });	
	  <?php 
		}
	  ?>    
    });
    </script>    
	
	<script>
				$("#slider_text div:gt(0)").hide();
				setInterval(function()
				{


					$('#slider_text div:first').fadeOut(300).next().fadeIn(1000).end().appendTo('#slider_text');
				},3000);

				</script>
				
		 <!-- / animation du slider publiciter -->	
        <script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>		 
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
		   $(window).load(function() {
		   $('#slider').nivoSlider({
				effect:'sliceUpDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
				slices:17,
				animSpeed:500,
				pauseTime:6000,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:false, //Next & Prev
				directionNavHide:true, //Only show on hover
				controlNav:true, //1,2,3...
				controlNavThumbs:false, //Use thumbnails for Control Nav
				controlNavThumbsFromRel:false, //Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', //Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
				keyboardNav:true, //Use left & right arrows
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:false, //Force manual transitions
				captionOpacity:1, //Universal caption opacity
				beforeChange: function(){$('.nivo-caption').animate({bottom:'-110'},400,'easeInBack')},
				afterChange: function(){Cufon.refresh();$('.nivo-caption').animate({bottom:'-20'},400,'easeOutBack')},
				slideshowEnd: function(){} //Triggers after all slides have been shown
			});
		   Cufon.refresh();
		});
</script>	
    <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo theme_js_path ?>/ie_hacks.js"></script>        
    <![endif]-->
	
	
	<script type="text/javascript" src="<?php echo theme_js_path ?>/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo theme_js_path ?>/additional-methods.min.js"></script>
	
    <script type="text/javascript">

		$(document).ready(function(){
		$("#myform").formToWizard({ submitButton: 'submit_app' });
		jQuery.validator.setDefaults({
					errorPlacement: function(error, element) {
						error.appendTo('#invalid-' + element.attr('id'));
					}
				});

		$.validator.addMethod("license_us", function(value, element) {
				var objRegEx = /^[A-Za-z0-9]{6,8}\d$/g;
				res = objRegEx.test(value);
				if(!res)
					return false;
				else 
					return true;
		});


		$.validator.addMethod("#name", function(value, element) {
				var objRegEx = /^[0-9-]{8,10}\d$/g;
				res = objRegEx.test(value);
				if(!res)
					return false;
				else 
					return true;
		});

		});

    </script>
<script type="text/javascript">
	/* Created by jankoatwarpspeed.com */

(function($) {
    $.fn.formToWizard = function(options) {
        options = $.extend({  
            submitButton: "" 
        }, options); 
        
		
		$('#submit_app').on('click',function(){
	       if($("#myform").valid()){
		     $.ajax({
			    type: "POST", 
	    	    url: "registration.php",  
	    	    data: $('#myform').serialize(),  
	    	    
				
					  success:function(msg){
				    if ($(msg).filter('.error_alert').length > 0){
					  $.bootalert({
						  ID        : 'registration_error',
						  LabelText : __('general_error_title'),
						  TypeLabel : 'error',
						  BodyText  : $(msg).filter('.error_alert').html(),
						  TypeBody  : 'error'
					  });
			   $('#captcha_image').attr('src',$('body').data('abs_client_path')+'/include/lib/cool-php-captcha/captcha.php?'+Math.random());
					$('#captcha').val('');						  
					}else{
					  $('.default-status-registration-form').fadeOut('fast',
					  function(){
						  $('#result-registration').fadeIn('fast');
					  });
					}
   				  				
				  }
			 });
			
		   }
	   });
	
		
        var element = this;

        var steps = $(element).find("fieldset");
        var count = steps.size();
        var submmitButtonName = "#" + options.submitButton;
        $(submmitButtonName).hide();

        // 2
        $(element).before("<ul id='steps'></ul>");

        steps.each(function(i) {
            $(this).wrap("<div id='step" + i + "'></div>");
            $(this).append("<p id='step" + i + "commands'></p>");

            // 2
            var name = $(this).find("legend").html();
            $("#steps").append("");

            if (i == 0) {
                createNextButton(i);
                selectStep(i);
            }
            else if (i == count - 1) {
                $("#step" + i).hide();
                createPrevButton(i);
            }
            else {
                $("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        function createPrevButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Précédent' class='prev'>< Précédent</a>");

            $("#" + stepName + "Précédent").on("click", function(e) {
			  ///if($('form').valid()){
                $("#" + stepName).hide();
                $("#step" + (i - 1)).show();
                $(submmitButtonName).hide();
                selectStep(i - 1);				
			  //}	
            });
        }

        function createNextButton(i) {
            var stepName = "step" + i;
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Suivant' class='next'>Suivant ></a>");

            $("#" + stepName + "Suivant").on("click", function(e) {
			if($("#myform").valid()){
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
                if (i + 2 == count)
                    $(submmitButtonName).show();
                selectStep(i + 1);
				
				
				
				var q="step" + (i+1);
				if(q=='step1'){
				
				
				$("#name").rules("add", {
				 required: true,
				 
				 messages: {
				   required: "Svp entrer votre nom",
				   range:" votre nom doit compris ebtre 3 et 16"
				   //date: "Please Enter Valid Date of Birth(dd/mm/yyyy)"
				 }
				});
				

				
				
				
				$("#drivers_license_number").rules("add", {
				 required: true,
				 license_us: true,
				 messages: {
				   required: "Please enter your License Number",
				   license_us: "Please Enter your Valid License Number"
				 }
				});
				
				$("#ssn").rules("add", {
				 required: true,
				 ssn_us: true,
				 messages: {
				   required: "Please enter your ssn Number",
				   ssn_us: "Please Enter your Valid ssn Number"
				 }
				});
				
				$("#drivers_license_state").rules("add", {
				 required: true,
				 messages: {
				   required: "Please enter your driving license state"
				 }
				});
				
			    }
				
				if(q=='step2'){
				
				
				   $("#employer").rules("add", {
					 required: true,
					 minlength: 10,
					 maxlength: 128,
					 messages: {
					   required: "Please enter Employer's Company Name",
					   minlength: "Please Enter minimum 10 characters"
					 }
					});
					
					$("#employer_phone").rules("add", {
					 required: true,
					 phoneUS: true,
					 messages: {
					   required: "Please enter Employer's Phone Number",
					   phoneUS: "Please Enter valid phone number"
					 }
					});
					
					$("#job_title").rules("add", {
					 required: true,
					 minlength: 2,
					 maxlength: 128,
					 messages: {
					   required: "Please enter your job title",
					   minlength: "Please Enter minimum 2 characters",
					   maxlength: "Please Enter only 128 characters only"
					 }
					});
					
				    $("#employer_months").rules("add", {
					 required: true,
					 messages: {
					   required: "Please enter your experience"
					 }
					});
					
					$(".active_military").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your option"
					 }
					});
				
					/*var original=$('.active_military').attr('class')
					$('.active_military').attr('class','required '+ original);*/
			    }
				
				if(q=='step3'){
				
				   $("#monthly_income").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your monthly income"
					 }
					});
					$("#income_source").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your income source"
					 }
					});
					$("#payment_frequency").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your payment frequency"
					 }
					});
					
				   $("#pay_date1").rules("add", {
					 required: true,
					 date: true,
					 messages: {
					   required: "Please enter your next pay date",
					   date: "Please Enter valid pay date (dd/mm/yyyy)"
					 }
					});
					
					$("#pay_date2").rules("add", {
					 required: true,
					 date: true,
					 messages: {
					   required: "Please enter your 2nd pay date",
					   date: "Please Enter valid pay date (dd/mm/yyyy)"
					 }
					});
					
			    }
				
				if(q=='step4'){
				    //alert("last step");
				
				   $("#bank_name").rules("add", {
					 required: true,
					 minlength: 2,
					 maxlength: 128,
					 messages: {
					   required: "Please enter your bank name",
					   minlength: "Please Enter minimum 2 characters",
					   maxlength: "Please Enter max 128 characters"
					 }
					});
					
					$("#bank_aba").rules("add", {
					 required: true,
					 number: true,
					 maxlength: 9,
					 messages: {
					   required: "Please enter your Routing Number",
					   number: "Please Enter valid Routing Number",
					   maxlength: "Please Enter max 9 Numbers"
					 }
					});
					
					$("#bank_account").rules("add", {
					 required: true,
					 number: true,
					 minlength: 4,
					 maxlength: 30,
					 messages: {
					   required: "Please enter your bank account Number",
					   number: "Please Enter valid bank account Number",
					   minlength: "Please Enter minimum 4 characters",
					   maxlength: "Please Enter max 30 characters"
					 }
					});
					
					
					$("#bank_type").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your account type"
					 }
					});
					
					$(".direct_deposit").rules("add", {
					 required: true,
					 messages: {
					   required: "Please select your option"
					 }
					});
			    }
				
				
			 }	
            });
        }

        function selectStep(i) {
            $("#steps li").removeClass("current");
            $("#stepDesc" + i).addClass("current");
        }

    }
})(jQuery); 

$('select[name="Identifiant_Nlle"]').change(function(){
    // Je créer l'id du div qui va être affiché
    var id = "Identifiant_Nlle_div_" + $(this).val();
    // Je cache toutes les divs grâce à une classe qui va sélectionner le tout
    $('div.Identifiant_Nlle_divs').hide();
    // Et j'affiche seulement le Div que je souhaite
    $('#'+id).show();
});

$('select[name="remuneration"]').change(function(){
    // Je créer l'id du div qui va être affiché
    var id = "remuneration_div_" + $(this).val();
    // Je cache toutes les divs grâce à une classe qui va sélectionner le tout
    $('div.remuneration').hide();
    // Et j'affiche seulement le Div que je souhaite
    $('#'+id).show();
});
	</script>
	
	     <script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>

<script>
    $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        $('#noti_Counter')
            .css({ opacity: 0 })
            .text('<?php echo $nbref;?>')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            //.css({ top: '-10p' })
            .animate({ top: '0px', opacity: 1 }, 500);

        $('#noti_Button').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Button').css('background-color', 'silver');
                }
                else $('#noti_Button').css('background-color', '#87cefa');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '');
            }
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
    <script type="text/javascript" src="script.js"></script> 
    <script type="text/javascript">
						$('#notifications .lireinfo').on('click',function(){
					 $id = $(this).attr('data-id');
					  $.ajax({
						type:'POST',
						beforeSend:function(){
						 $.loader({imgPath:$('body').data('theme_img_path')+'/loader.gif',appendTo:'body'});        
						},
						data: {id:$id},
						url:$('body').data('abs_client_path')+'/read_information.php',
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



	
    <script type="text/javascript" src="<?php echo theme_js_path ?>/main_script.js"></script>

<?php @mysql_close(conn); // close connection to DB ?>   