//PARAMETRES PLUGINS
$(document).ready(function() {
	$(".fancybox").fancybox({
	      padding: 5
	})
});

// NAV BARRE RETRACTABLE
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
});

// PAGE-SCROLL SMOOTH
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


$.fn.scrollBottom = function() { 
  return $(document).height() - this.scrollTop() - this.height(); 
};

  // FLECHE RETOUR EN HAUT
        $(".back-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollBottom() < 800) {
                    $('.back-top').fadeIn();
                } else {
                    $('.back-top').fadeOut();
                }
            });
        });