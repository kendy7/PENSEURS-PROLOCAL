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
	    	    url: "show.php",  
	    	    data: $('#myform').serialize(),  
	    	    success: function(msg) {  
					  alert(msg);
					  $("#myform").addClass("hide");
	    		      $("#message").show();
	    	   } 
			 });
			 $('#close').click(function(){ 
				  $('#message').hide();
				  $("#myform").removeClass("hide");
				  $('input[type=text],input[type=email]').val('');
				  location.reload();
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
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Prev' class='prev'>< Back</a>");

            $("#" + stepName + "Prev").on("click", function(e) {
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
            $("#" + stepName + "commands").append("<a href='#' id='" + stepName + "Next' class='next'>Next ></a>");

            $("#" + stepName + "Next").on("click", function(e) {
			if($("#myform").valid()){
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
                if (i + 2 == count)
                    $(submmitButtonName).show();
                selectStep(i + 1);
				
				
				
				var q="step" + (i+1);
				if(q=='step1'){
				
				
				$("#birth_date").rules("add", {
				 required: true,
				 date: true,
				 messages: {
				   required: "Please enter your Birth Date",
				   date: "Please Enter Valid Date of Birth(dd/mm/yyyy)"
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