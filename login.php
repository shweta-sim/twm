<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="format-detection" content="telephone=no" />
  <title>Logos, Web, Graphic Design & More. | TW Media</title>
  <link rel="icon" href="assets/imgs/favicon-32x32.png" sizes="32x32" type="image/png" />
  <link rel="icon" href="assets/imgs/favicon-16x16.png" sizes="16x16" type="image/png" />

  <!-- Animate CSS -->
  <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />

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
  <section class="login">
    <div class="container">
      <div class="row mb40">
        <div class="col-12 text-center">
          <h2 class="heading text-center wow fadeInUp" data-wow-delay="200ms">Login
            <hr>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 offet-md-0 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="mb20">
            <form action="" method="POST" name="formLogin" id="formLogin">
              <div class="form-group mb10">
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail address*">
              </div>
              <div class="form-group mb10">
                <input type="text" name="password" id="password" class="form-control" placeholder="Password*">
              </div>
              <div class="form-group d-flex align-items-center">
                <button class="btn btn-primary-bordered" type="submit" id="btnLogin" name="btnLogin">Log in</button>
                <div class="ml-auto"><a href="forgot-password.php">Forgot password?</a></div>
              </div>
            </form>
          </div>
          <br><br>
          <div class="mb10"><a href="#" class="btn btn-grey-bordered btn-bl d-flex">Continue with <img src="assets/imgs/logo-fb.png"></a></div>
          <div><a href="#" class="btn btn-grey-bordered btn-bl d-flex">Continue with <img src="assets/imgs/logo-google.png"></a></div>
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
      $('body').delay(350).css({
        'overflow': 'visible'
      });
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
</body>

</html>