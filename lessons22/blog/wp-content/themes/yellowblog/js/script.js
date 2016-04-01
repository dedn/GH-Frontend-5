$(function() {
  $('.iconMenu').click(function() {
    if($('.itemsMenu').is(':visible')) {
      $('.itemsMenu').removeClass('showitems'); 
    }
    else {
      $('.itemsMenu').addClass('showitems'); 
    }   
 }); 
});

$(document).ready(function(){

            $("#navbar").removeClass("default");
            $("#logo").removeClass("default-logo");
            $(window).scroll(function(){
                if ($(this).scrollTop() > 20) {
                    $("#navbar").addClass("default").fadeIn('fast');
                } else {
                    $("#navbar").removeClass("default").fadeIn('fast');
                };
            });

            $('a[href^="#"]').click(function () {
                elementClick = $(this).attr("href");
                destination = $(elementClick).offset().top;
                if($.browser.safari){
                    $('body').animate( { scrollTop: destination }, 1000 );
                } else {
                    $('html').animate( { scrollTop: destination }, 1000 );
                }
                return false;
            });
        });



$('.filter2').ready(function() {

    $('.filter2').bxSlider({
        responsive:'true',
        auto:'true',
        pause:'10000',
        pagerCustom: '#bx-pager'


    });
})

$(function () {

    var filterList = {

        init: function () {

            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });

        },

        hoverEffect: function () {

            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                function () {
                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                },
                function () {
                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                }
            );

        }

    };

    // Run the show!
    filterList.init();


});

jQuery(document).ready(function($) {
    $('[rel="lightbox"]').lightbox();
});