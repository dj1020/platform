$(document).ready(function(){
		$("ul.top_menu_l1").superfish();
});


/*
$(document).ready(function(){

	$("#course_menu").hover(
		function(){
			$("#course_menu ul:first").slideDown("normal");
		}
		,
		function(){
			$("#course_menu ul:first").slideUp(100);
		}
	)
	
	$("#about_menu").hover(
		function(){
			$("#about_menu ul:first").slideDown("normal");
		}
		,
		function(){
			$("#about_menu ul:first").slideUp(100);
		}
	)
	
	$("#login_menu").hover(
		function(){
			$("#login_menu ul:first").slideDown("normal");
		}
		,
		function(){
			$("#login_menu ul:first").slideUp(100);
		}
	)
	
	$("#junior_menu").hover(
		function(){
			$("#junior_menu ul:first").slideDown("fast");
		}
		,
		function(){
			$("#junior_menu ul:first").slideUp("fast");
		}
	)

}); // document.ready() end


/*
function Slide_Down(obj){
	if (obj){
	   		$(obj).find('ul').slice(0,1).slideDown("normal");
	} // end if
}

function Slide_Up(obj){
	if (obj){
	   		$(obj).find('ul').slice(0,1).slideUp("normal");
	} // end if
}
*/