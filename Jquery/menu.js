function mainmenu(){
$(" #vertical-navigation  ul ").css({display: "none"}); // Opera Fix
$(" #vertical-navigation  li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(250);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden"});
		});
}

 
 
 $(document).ready(function(){					
	mainmenu();
});