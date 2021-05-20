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
          <li class="step1 active">
            <h1>1<span>Contact info</span></h1>
          </li>
          <li class="step2">
            <h1>2<span>Payment details</span></h1>
          </li>
          <li class="step3">
            <h1>3<span>Start membership</h1>
          </li>
        </ul>
        <div class="row">
          <div class="col-md-6 mb60-md wow fadeInUp" data-wow-delay="400ms">
            <h2 class="heading text-left mb20">Log in
              <hr>
            </h2>
              <form action="payment-step2.php" method="POST" name="" id="">
                <div class="form-group mb10">
                  <input type="text" name="email" id="email" class="form-control" placeholder="E-mail address*">
                </div>
                <div class="form-group mb10">
                  <input type="text" name="password" id="password" class="form-control" placeholder="Password*">
                </div>
                <div class="form-group mb10">
                  <button class="btn btn-primary-bordered" type="submit" id="btnLogin" name="btnLogin">Log in</button>
                </div>
              </form>
          </div>
          <div class="col-md-5 offset-md-1 wow fadeInUp" data-wow-delay="400ms">
            <div class="whyus">
              <h4 class="mb20">Why sign up with TW + RL?</h4>
              <div class="values-bl mb20">
                <div class="icon"> <img src="assets/imgs/img-values1.svg" class="img-fluid" alt="We Are Friendly" /> </div>
                <h6>We Place Customer First</h6>
                <p>We deliver every design with an understanding of you customer.</p>
              </div>
              <div class="values-bl mb20">
                <div class="icon"> <img src="assets/imgs/img-values2.svg" class="img-fluid" alt="We Are Smart-Working" /> </div>
                <h6>We Are Experienced</h6>
                <p>We deliver every design as though it were our first.</p>
              </div>
              <div class="values-bl mb20">
                <div class="icon"> <img src="assets/imgs/img-values3.svg" class="img-fluid" alt="We Are Trustworthy" /> </div>
                <h6>We Are Trustworthy</h6>
                <p>We deliver design as though it were our own.</p>
              </div>
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

<!-- validation js --> 
<script type="text/javascript" src="assets/plugins/validate/jquery.validate.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
  $('form[id="formLogin"]').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: 'required',
    },
    messages: {
      email: 'Enter a valid email',
      password: 'This field is required',
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
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
