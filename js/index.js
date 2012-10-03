<<<<<<< HEAD
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
=======
$(document).ready(function(){
		menu_l1 = $('.top_menu_l1 > li:has("ul")');
		menu_l1.each(function(){
			var menu_l1_ul = $(this).children('ul');
			$(this).hover(
				function(){
					if (menu_l1_ul.is(':visible')){
						menu_l1_ul.stop();
						menu_l1_ul.css('display','none');
					}
					menu_l1_ul.slideDown("normal");
				}
				,
				function(){
					if (menu_l1_ul.is(':visible'))
						menu_l1_ul.slideUp('fast');
				}
			);
		});
		
		/* Login lightbox show */
		login_btn = $('#signin');
		login_btn.click(function(){
			lightbox_bg = $('.ken-lightbox-bg');
			lightbox	= $('.ken-lightbox');
			//center lightbox 
			lightbox_bg.height($('body').innerHeight());
			lightbox.css('left',($('body').innerWidth()-lightbox.outerWidth())/2);
			lightbox.css('top',($(window).innerHeight()-lightbox.outerHeight())/2);
			lightbox_bg.fadeIn('fast');
			lightbox.fadeIn('fast');
			
		});
		/* Login lightbox show end */

		/* Login lightbox close */
		close_btn = $('.ken-lightbox-close');
		close_btn.click(function(){
			lightbox_bg.fadeOut('fast');
			lightbox.fadeOut('fast');
		});
		/* Login lightbox close end */
		
		/* Sign up */
		sign_up_btn = $('.ken-lightbox-content .signup');
		sign_up_btn.click(function(){
			$('.login_form').load("./sign_up.php");
			$('.signin_msg').addClass('hide');
			$('.signup_msg').removeClass('hide');
		});
		
});
>>>>>>> f54285bae726325054fdb2e8aae1950517928c9c
