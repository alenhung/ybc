var a = $(".navbar-default").offset().top;

$(document).scroll(function(){
    if($(this).scrollTop() > a)
    {   
       $('.navbar-default').css({"background":"rgba(0, 0, 0, 0.9)"});
    } else {
       $('.navbar-default').css({"background":"rgba(0, 0, 0, 0.4)"});
    }
});
