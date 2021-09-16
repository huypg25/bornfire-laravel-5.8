
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 1) {

          $(".header-top").css("background" , "#696969");
        }
  
        else{
            $(".header-top").css("background" , "none");  	
        }
    })
  })