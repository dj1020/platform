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
