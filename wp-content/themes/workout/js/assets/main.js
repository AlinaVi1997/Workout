//burger menu 
;(function ($) {
    $(document).ready(function () {  
    $('.menu-btn').click(function () {
        $('.page-template').toggleClass('mobile-menu-visible');
        $('.menu-btn').toggleClass('close-btn');
        $('.header__navbar-menu').toggleClass('menu--active');
    });

 //backdrop
    $('.menu-backdrop').click(function () {
        $('.page-template').toggleClass('mobile-menu-visible');
        $('.menu-btn').toggleClass('close-btn');
        $('.header__navbar-menu').toggleClass('menu--active');
    });
});
}(jQuery));

jQuery(document).ready(function($) {
    $(window).resize(function() {
        if ($(window).width() <= 991) {
            $('#desktop-menu').hide();
            $('#mobile-menu').show(); 
        } else {
            $('#desktop-menu').show();
            $('#mobile-menu').hide();
        }
    });
});