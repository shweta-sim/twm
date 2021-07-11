<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="format-detection" content="telephone=no" />
<title>Logos, Web, Graphic Design & More. | TW Media</title>
<link rel="icon" href="assets/imgs/favicon-32x32.png" sizes="32x32" type="image/png" />
<link rel="icon" href="assets/imgs/favicon-16x16.png" sizes="16x16" type="image/png" />

<!-- Animate CSS -->
<link href="assets/plugins/animate/animate.min.css" rel="stylesheet"/>

<!-- bootstrap css -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- style css -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- responsive css -->
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
</head>
<body class="preload" id="home">
<!-- preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<!-- start header -->
<?php include("header.php"); ?>
<!-- end header --> 

<!-- start section -->
<section class="account">
  <div class="container">
    <div class="row mb30">
      <div class="col-12 text-center">
        <h2 class="heading text-center mb30 wow fadeInUp" data-wow-delay="200ms">Your Account
          <hr>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <ul class="steps wow fadeInRight" data-wow-delay="300ms">
              <li class="active"> <a href="account-personal-details.php">
                <h5>
                  <div class="img"><img src="assets/imgs/icon-personal-details.svg" class="img-fluid" alt="" /></div>
                  Personal details</h5>
                </a> </li>
              <li> <a href="account-subscriptions.php">
                <h5>
                  <div class="img"><img src="assets/imgs/icon-subscriptions.svg" class="img-fluid" alt="" /></div>
                  Subscriptions</h5>
                </a> </li>
              <li> <a href="account-setting.php">
                <h5>
                  <div class="img"><img src="assets/imgs/icon-account-setting.svg" class="img-fluid" alt="" /></div>
                  Account setting </h5>
                </a> </li>
            </ul>
          </div>
          <div class="col-md-7 col-lg-8">
            <div class="content-bl wow fadeInLeft" data-wow-delay="300ms">
              <h5 class="mb20">Personal details</h5>
              <form action="" method="POST" name="" id="">
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control" value="Joe Blogs">
                </div>
                <div class="form-group">
                  <input type="text" name="email" id="email" class="form-control" value="joeblogs@gmail.com">
                </div>
                <div class="form-group">
                  <input type="text" name="company" id="company" class="form-control" value="Company name">
                </div>
                <div class="form-group">
                  <input type="text" name="address" id="address" class="form-control" value="Address">
                </div>
                <div class="form-group">
                  <input type="text" name="country" id="country" class="form-control" value="England">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" id="phone" class="form-control" value="1 800 513 1678">
                </div>
                <button class="btn btn-primary-bordered" type="submit" id="btnContact" name="btnContact">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section --> 

<!-- start footer -->
<?php include("footer.php"); ?>
<!-- end footer --> 

<a href="#home" id="backtotop" class="smoothscroll"><img src="assets/imgs/icon-arrow-up-primary.png"></a> 

<!-- jquery js --> 
<script type="text/javascript" src="assets/plugins/jquery/jquery-3.5.1.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- animate js --> 
<script type="text/javascript" src="assets/plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
      if ($(window).width() <= 767) {
        $('.wow2').removeClass('wow');
      }
</script> 

<!-- preloader js --> 
<script type="text/javascript">
  $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
</script> 

<!-- smooth scroll js --> 
<script type="text/javascript">
$(function() {
  $('.smoothscroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});
</script> 

<!-- back to top js --> 
<script type="text/javascript">
var btn = $('#backtotop');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
</script> 

<!-- nav pills js --> 
<script type="text/javascript">
  window.onload = function(){  

    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
    }

    //Change hash for page-reload
    $('.nav-pills a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
        window.location.hash = e.target.hash;
    }); 
} 
</script>
</body>
</html>
