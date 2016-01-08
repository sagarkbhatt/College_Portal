jQuery(function($) {
	
	var validation_holder;
	
	$("form#frmstaff input[name='insert']").click(function() {
	
	var validation_holder = 0;
	
		var branch 			= $("form#frmstaff select[name='branch']").val();
		var id 				= $("form#frmstaff input[name='id']").val();
		var id_regex		= /^[0-9]{1,10}$/; // reg ex phone check		
		var name 			= $("form#frmstaff input[name='name']").val();
		var gender 			= $("form#frmstaff select[name='gender']").val();
		var qualification 	= $("form#frmstaff input[name='qualification']").val();
		var exp			 	= $("form#frmstaff input[name='exp']").val();
		var post			= $("form#frmstaff input[name='post']").val();
		var emailid			= $("form#frmstaff input[name='emailid']").val();
		var emailid_regex	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check		
		
		/* validation start */		
		
		if(branch == "") {
			$("span.val_branch").html("Please select Branch.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_branch").html("");
			}
			
		if(id == "") {
			$("span.val_id").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!id_regex.test(id)){ // if invalid id
				$("span.val_id").html("Invalid ID!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_id").html("");
			}
		}	
		
		if(name == "") {
			$("span.val_name").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_name").html("");
			}	
		
		if(gender == "") {
			$("span.val_gender").html("Please select Gender.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_gender").html("");
			}
			
		if(qualification == "") {
			$("span.val_qualification").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_qualification").html("");
			}
			
		if(exp == "") {
			$("span.val_exp").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_exp").html("");
			}	
			
		if(post == "") {
			$("span.val_post").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_post").html("");
			}					
			
		if(emailid == "") {
			$("span.val_email").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!emailid_regex.test(emailid)){ // if invalid email
				$("span.val_email").html("Invalid Email!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_email").html("");
			}
		}
				
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End