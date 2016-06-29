jQuery(document).ready(function(){
  jQuery(".js-open-drawer").click(function(){
    jQuery(".header__main-header").addClass("nav--open");
  });
  
  jQuery(".js-close-drawer").click(function(){
    jQuery(".header__main-header").removeClass("nav--open");
  });
});

jQuery(window).scroll(function() { 
	if(jQuery(window).scrollTop() >= 1) {
		jQuery('.header__main-header').addClass('scrolled');
	} else {
		jQuery('.header__main-header').removeClass('scrolled');
	}
});