jQuery(function($) {
	
	var validation_holder;
	
	$("form#frmnews input[name='save']").click(function() {
	
	var validation_holder = 0;
	
		var id 				= $("form#frmnews input[name='id']").val();
		var color 			= $("form#frmnews select[name='color']").val();
		var link 			= $("form#frmnews input[name='link']").val();
		var text 			= $("form#frmnews input[name='text']").val();
		
		/* validation start */		
		
		if(color == "") {
			$("span.val_color").html("Please select Color.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_color").html("");
			}
		
		if(id == "") {
			$("span.val_id").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_id").html("");
			}
			
		if(text == "") {
			$("span.val_text").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_text").html("");
			}
			
		if(link == "") {
			$("span.val_link").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_link").html("");
			}		
			
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End