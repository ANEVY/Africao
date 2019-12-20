$(document).ready(function(){
    // highlight active page
    $("a[href='" + window.location.href + "']").addClass("active");

    //making nav-bar to be sticky
    $(window).scroll(function(){
        // alert('what again')
        var scroll = $(window).scrollTop();
        if (scroll > 30) {
            $('.main-nav .navbar').addClass('fixed-top');
            $('.main-nav .navbar').removeClass('shadow-sm');
            $('.main-nav .navbar').addClass('shadow');
        }

        else{
            $('.main-nav .navbar').removeClass('fixed-top');
            $(".fixed-top").css({"background":"white","color":"#3579DC"});
            $('.main-nav .navbar').addClass('shadow-sm');
            $('.main-nav .navbar').removeClass('shadow');
        }
    });

    // carousel time
    $('.carousel').carousel({
        interval: 7000
      })


  });
