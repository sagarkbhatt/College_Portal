jQuery(function($) {
	
	var validation_holder;
	
	$("form#frmpwd input[name='save']").click(function() {
	
	var validation_holder = 0;
	
		var nameoftrade	= $("form#frmpwd input[name='nameoftrade']").val();
		var id 			= $("form#frmpwd input[name='id']").val();
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
		
		if(nameoftrade == "") {
			$("span.val_nameoftrade").html("This field is required!").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_nameoftrade").html("");
			}
		
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End