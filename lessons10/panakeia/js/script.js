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