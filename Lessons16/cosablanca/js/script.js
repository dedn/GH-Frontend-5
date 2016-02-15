//filter
$(function(){
    $("#Container2").mixItUp({
        selectors: {
            target:'.mix',
            filter:'.filter'
        },
        controls: {
            enable:true,
            activeClass:'on'
        },
        animation: {
            enable:true,
            effects:'rotateX stagger',
            duration:700
        }
    });
});

//iconMenu
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
//Scroll
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

//video
var video = document.getElementById("video");

$( ".pause-video" ).click(function() {
    $(this).fadeOut(300);
    $(".play-video").fadeIn(300).css("display", "block");
});

$( ".play-video" ).click(function() {
    $( this ).fadeOut(300);
    $(".pause-video").fadeIn(300).css("display", "block");
});
function playVid() {
    video.play();
}
function pauseVid() {
    video.pause();
}




