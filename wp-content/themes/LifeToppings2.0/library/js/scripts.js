jQuery(document).ready(function(){
  jQuery(".js-open-drawer").click(function(){
    jQuery(".header__main-header").addClass("nav--open");
  });
  
  jQuery(".js-close-drawer").click(function(){
    jQuery(".header__main-header").removeClass("nav--open");
  });
});