  $( document ).ready(function() {

var loadercount = 0;


 
    $(document).ready(function () {
  function emailvalidate(email){
    if(is.email(email)) return true;
    return false;
  }
  $('.mailinput').keyup(function(){   
    var email = $(this).val();
    if( $( ".mailinput" ).val().length < 1){
       $(".error-msg").text(" ");
    }else if(emailvalidate(email)){
      $(".error-msg").text(" ");
    }else{
   $(".error-msg").text("That email address is invalid");
    }
  
  });
  
  $('.submitEmail').click(function(){
      
      var email = $('.mailinput').val();
      if(emailvalidate(email))
       return true;
       
      $(".error-msg").text("That email address is invalid");
      return false; 
  });
  



});
        
var video = document.getElementById('video');
video.addEventListener('click',function(){
  video.play();
},false);

        $( ".btn-play" ).on( "click", function() {
    var video = document.getElementById('video-pop');
    video.play();
  });

    $( ".close" ).on( "click", function() {
    var video = document.getElementById('video-pop');
    video.pause();
  });     


if($(window).width() <= 767){
  $( ".okplay" ).on( "click", function() {
    var video = document.getElementById('video');
    video.play();
  });
}
});