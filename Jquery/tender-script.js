jQuery(function($) {
	
	var validation_holder;
	
	$("form#frmtender input[name='insert']").click(function() {
	
	var validation_holder = 0;
	
		var name 		= $("form#frmtender input[name='txtname']").val();
		var description = $("form#frmtender input[name='txtdescription']").val();
		var id 			= $("form#frmtender input[name='txtid']").val();
		var id_regex	= /^[0-9]{1,10}$/;
		
		/* validation start */		
		
		if(id == "") {
			$("span.val_id").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			if(!id_regex.test(id)){ // if invalid phone
				$("span.val_id").html("Invalid ID!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_id").html("");
			}
		}
		
		if(name == "") {
			$("span.val_name").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_name").html("");
			}
		
		if(description == "") {
			$("span.val_description").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_description").html("");
			}		
			
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End