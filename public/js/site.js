jQuery(function($){
// navbar-toggle
  $('.navbar-toggle').click(function(){
    $('.navbar-collapse').toggleClass('right');
    $('.navbar-toggle').toggleClass('indexcity');
  });
// navbar-toggle
// about Page use
  var $pageSelect = $("#pageNavUL li");
  var $showContent = $(".PT-2Column");
  var $nextButton = $(".PT-2Column a");
  $showContent.hide();
  $($showContent[0]).fadeIn();
  $pageSelect.each(function(n){
    $(this).click(function(){
      console.log(n);
      $pageSelect.removeClass();
      $(this).addClass("active");
      $showContent.hide();
      $($showContent[n]).fadeIn();
    });
  });
  $nextButton.each(function(i){
    $(this).click(function(){
      $showContent.hide();
      $pageSelect.removeClass();
      if(i<=2){
        $($showContent[i+1]).fadeIn();
        $($pageSelect[i+1]).addClass("active");
      }else{
        $($showContent[0]).fadeIn();
        $($pageSelect[0]).addClass("active");
      }
      console.log(i);
    });
  });
// about Page use
});
// site Animation AOS
AOS.init({
  duration: 1200,
});
// site Animation AOS
