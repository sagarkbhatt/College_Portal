jQuery(function($) {
	
	var validation_holder;
	
	$("form#frprinciple input[name='save']").click(function() {
	
	var validation_holder = 0;
	
		var shortmsg	= $("form#frprinciple textarea[name='shortmsg']").val();
		var message 	= $("form#frprinciple textarea[name='message']").val();
		var id_regex	= /^[0-9]{1,10}$/;
		var id 			= $("form#frprinciple input[name='id']").val();
		
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
		
		if(shortmsg == "") {
			$("span.val_shortmsg").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_shortmsg").html("");
			}
			
		if(message == "") {
			$("span.val_Message").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_Message").html("");
			}	
		
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End