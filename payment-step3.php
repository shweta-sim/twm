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
<section class="payment">
  <div class="container">
    <div class="row mb60">
      <div class="col-12 text-center">
        <h2 class="heading text-center mb30 wow fadeInUp" data-wow-delay="200ms">Payment
          <hr>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
        <ul class="steps wow fadeInRight" data-wow-delay="300ms">
          <li class="step1">
            <h1>1<span>Contact info</span></h1>
          </li>
          <li class="step2">
            <h1>2<span>Payment details</span></h1>
          </li>
          <li class="step3 active">
            <h1>3<span>Start membership</h1>
          </li>
        </ul>
        <div class="row step3">
          <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
            <h2 class="heading text-left mb20">Payment Successful!
              <hr>
            </h2>
            <h6 class="mb30">Thank you.<br>
              Your payment £239 is made.<br>
              A confirmation email has been sent.</h6>
            <h6>Order details:</h6>
            <hr class="divider">
            <div class="row">
              <div class="col-4"> Payment ID </div>
              <div class="col-8"> EP/1f33-bf2 </div>
            </div>
            <div class="row">
              <div class="col-4"> Date </div>
              <div class="col-8"> 29.05.201  14:30 </div>
            </div>
            <div class="row mb30">
              <div class="col-4"> Card </div>
              <div class="col-8"> Visa, •••• 0000, 11/2022 </div>
            </div>
            <a class="btn btn-primary mr-2" href="payment-step2.php">Back</a> 
            <a class="btn btn-primary-bordered d-inline-flex" href="#"><i class="mr-2"><img src="assets/imgs/icon-print.svg" class="svg"></i>Payment receipt</a>
          </div>
          <div class="col-md-6 order-first order-md-last mb30-sm wow fadeInUp" data-wow-delay="400ms"> <img src="assets/imgs/img-payment-successful.svg" class="img-fluid"> </div>
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

<!-- svg js --> 
<script type="text/javascript" src="assets/plugins/svg/svg.js"></script>
</body>
</html>
