jQuery(function($) {
	
	var validation_holder;
	
	$("form#frmplacement input[name='insert']").click(function() {
	
	var validation_holder = 0;
	
		var name 			= $("form#frmplacement input[name='txtname']").val();
		var designation 	= $("form#frmplacement input[name='txtdesignation']").val();
		var contactno 		= $("form#frmplacement input[name='txtcontactno']").val();
		var contactno_regex	= /^[0-9]{10}$/;
		var eduqualification = $("form#frmplacement input[name='txteduqualificat']").val();
		var exp 			= $("form#frmplacement input[name='txtexperience']").val();
		var emailid 		= $("form#frmplacement input[name='txtemailid']").val();
		var emailid_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check	
		
		
		/* validation start */		
		
		if(name == "") {
			$("span.val_name").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_name").html("");
			}
		
		if(designation == "") {
			$("span.val_designation").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_designation").html("");
			}		
		
		if(eduqualification == "") {
			$("span.val_eduqualificat").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_eduqualificat").html("");
			}	
			
			
		if(exp == "") {
			$("span.val_experience").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_experience").html("");
			}		
			
		if(emailid == "") {
			$("span.val_emailid").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			if(!emailid_regex.test(emailid)){ // if invalid email
				$("span.val_emailid").html("Invalid Email!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_emailid").html("");
			}
		}	
		
		if(contactno == "") {
			$("span.val_contactno").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			if(!contactno_regex.test(contactno)){ // if invalid phone
				$("span.val_contactno").html("Invalid Phone No!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_contactno").html("");
			}
		}
			
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End