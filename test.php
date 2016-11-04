<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="#">
<title>PIM</title>
<!-- Bootstrap core CSS -->
<link id="colors" href="assets/css/bootstrap.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/style1.css" rel="stylesheet">
<!-- custom styles-->

</head>

<body onload="myFunction()">

<div id="loader"></div>
<div class="wrap animate-bottom" style="display:none;" id="myDiv">
  <section class="brand-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> 
          
          <!-- LOGO IMAGE --> 
          <a href="index.php"> <img class="img-responsive logo" src="images/logo.jpg" alt="logo"> </a> 
          <!-- /LOGO IMAGE --> 
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <?php if(isset($_GET["resultat"])){
					
					if($_GET["resultat"] == "success"){
					?>
          <h1 class="title-s">Thank you, you have been registered</h1>
          <?php
					}
					else if($_GET["resultat"] == "exist"){
							?>
          <h1 class="title-s">Email address already exists</h1>
          
      
          <?php
					}
					
					else if($_GET["resultat"] == "error"){
							?>
          <h1>error</h1>
          <form id="emailForm" class="form-horizontal" method="POST" 
                action="register.php" >
            <div class="input-group" id="adv-search">
              <input class="form-control mailinput" placeholder="I want to receive more informations about PIM" type="email" name="email">
               <span class="error-msg"></span>
              <div class="input-group-btn">
                <div class="btn-group" role="group">
                  <button type="submit" class="btn btn-primary submitEmail">Submit</button>
                </div>
              </div>
            </div>
           
          </form>
          <?php
					}
					
					} else{
						
						
						
								?>
          <form id="emailForm" class="form-horizontal" method="POST" 
                action="register.php" >
            <div class="input-group" id="adv-search">
              <input class="form-control  mailinput" placeholder="I want to receive more informations about PIM" type="text" name="email">
              <span class="error-msg"></span>
              <div class="input-group-btn">
                <div class="btn-group" role="group">
                   <button type="submit" class="btn btn-primary submitEmail">Submit</button>
                </div>
              </div>
            </div>
            
          </form>
          <?php
					}?>
        </div>
      </div>
    </div>
  </section>
  
  <!--Video Section-->
  <section class="content-section video-section">
    <div class="pattern-overlay">
      <div class="header-container">
        <div class="video-container">
          <video controls autobuffer poster="images/bg.jpg" preload="none" id="my-video" class="video-play" muted loop autoplay >
            <source src="media/video.mp4" type="video/mp4" type="video/mp4">
            <source src="media/demo.ogv" type="video/ogg" type="video/ogg">
            <source src="media/video.webm" type="video/webm">
          </video>
          <!-- /video --> 
          
          
          <!--video mobile -->
          <div  id="video_xs">
	
	<video id="video" controls muted="muted" poster="https://www.paypalobjects.com/webstatic/mktg/wright/videos/home-signup.jpg"  height="340" width="360">
	<source src="media/video.mp4" type="video/mp4">
	<source src="media/video.webm" type="video/webm">
</video>

	</div>


           <!--End video mobile-->
          
          
          
          
          <!-- Modal Terms of use-->
          <div id="myvideop" class="modal fade" role="dialog">
            <div class="modal-dialog"> 
              
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <video preload="none" id="video-pop" class="video-play video-pop" muted loop autoplay>
                    <source src="media/video.mp4"">
                    <source src="media/demo.ogv" type="video/ogg">
                    <source src="media/video.webm" type="video/webm">
                  </video>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- END Modal Terms of use--> 
          
        </div>
        <div class="container content-video">
          <div class="row">
            <div class="col-lg-12">
              <h1>Improve your shopping<br>
                experience</h1>
              <h3><a href="" class="link-modal" data-toggle="modal" data-target="#myvideop">LEARN HOW</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Video Section Ends Here-->
  
  <section>
    <div class="container text-center">
      <div class="row">
        <div class="title-content">
          <h1> Get the App <span>Beta version</span></h1>
          <div class="app-title"> UNIVERSAL PAYMENT SOLUTION </div>
        </div>
      </div>
      <div class="row">
        <ul class="b-app-block">
          <li class="b-app-block__li "> <a href="https://itunes.apple.com/gb/app/transferwise-money-transfer/id612261027" class="b-store-button-container" target="_blank">
            <div class="b-store-button b-store-button__ios">
              <div class="b-store-button__clock"></div>
              Download on the <span>App Store</span> </div>
            </a> </li>
          <li class="b-app-block__li"> <a href="https://play.google.com/store/apps/details?id=com.transferwise.android" class="b-store-button-container" target="_blank">
            <div class="b-store-button b-store-button__android">
              <div class="b-store-button__clock"></div>
              Get it for <span>Android</span> </div>
            </a> </li>
        </ul>
      </div>
    </div>
  </section>
  <footer class="">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
          <div class="b-footer__legal"> <a class="link-f">© - PIM 2016</a> <a href="/terms-of-use" data-toggle="modal" data-target="#myModal">Terms of use</a> <a href="/privacy-policy" data-toggle="modal" data-target="#myModal0">Privacy Policy</a> <a href="/cookie-policy" data-toggle="modal" data-target="#myModal1">Cookies Policy</a> <a href="/local-sites" data-toggle="modal" data-target="#myModal2">Contact</a>
            </p>
          </div>
        </div>
      </div>
      
      <!-- Modal Terms of use-->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Terms of use</h4>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget massa convallis metus fermentum feugiat a sed augue. Cras in nunc velit. Aenean quis sapien aliquet, dignissim odio ut, vehicula sapien. Sed tincidunt odio in felis laoreet pharetra. Mauris blandit sem eu purus fringilla gravida. Nam a tempor arcu, eget egestas nunc. Pellentesque et tellus fermentum, volutpat purus non, sodales nunc. Nullam eget tempus lectus, sed sagittis eros. </p>
            </div>
          </div>
        </div>
      </div>
      <!-- END Modal Terms of use--> 
      
      <!-- Modal Privacy Policy-->
      <div id="myModal0" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Privacy Policy</h4>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget massa convallis metus fermentum feugiat a sed augue. Cras in nunc velit. Aenean quis sapien aliquet, dignissim odio ut, vehicula sapien. Sed tincidunt odio in felis laoreet pharetra. Mauris blandit sem eu purus fringilla gravida. Nam a tempor arcu, eget egestas nunc. Pellentesque et tellus fermentum, volutpat purus non, sodales nunc. Nullam eget tempus lectus, sed sagittis eros. </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Privacy Policy--> 
      
      <!-- Modal Cookies Policy-->
      <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cookies Policy</h4>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget massa convallis metus fermentum feugiat a sed augue. Cras in nunc velit. Aenean quis sapien aliquet, dignissim odio ut, vehicula sapien. Sed tincidunt odio in felis laoreet pharetra. Mauris blandit sem eu purus fringilla gravida. Nam a tempor arcu, eget egestas nunc. Pellentesque et tellus fermentum, volutpat purus non, sodales nunc. Nullam eget tempus lectus, sed sagittis eros. </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Cookies Policy--> 
      
      <!-- Modal Contact-->
      <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog"> 
          
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Contact</h4>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget massa convallis metus fermentum feugiat a sed augue. Cras in nunc velit. Aenean quis sapien aliquet, dignissim odio ut, vehicula sapien. Sed tincidunt odio in felis laoreet pharetra. Mauris blandit sem eu purus fringilla gravida. Nam a tempor arcu, eget egestas nunc. Pellentesque et tellus fermentum, volutpat purus non, sodales nunc. Nullam eget tempus lectus, sed sagittis eros. </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact--> 
      
    </div>
    <!-- CONTAINER --> 
  </footer>
  <!-- /FOOTER-->
  
  </nav>
  
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script   src="https://code.jquery.com/jquery-1.9.0.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/is.min.js"></script> 

	

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
 
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
</script>
<script>
        
var video = document.getElementById('video');
video.addEventListener('click',function(){
  video.play();
},false);

</script>
</body>
</html>
