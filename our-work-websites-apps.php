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

  <!-- Swipebox CSS -->
  <link href="assets/plugins/swipebox/css/swipebox.css" rel="stylesheet">

  <!-- Animate CSS -->
  <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />

  <!-- bootstrap css -->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- style css -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

  <!-- responsive css -->
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

</head>

<body class="preload" id="work-websites">
  <!-- preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- start header -->
  <?php include("header.php"); ?>
  <!-- end header -->

  <!-- start section -->
  <section class="our-work">
    <div class="container">
      <div class="row mb40">
        <div class="col-12">

          <!-- start tabs -->
          <?php include("our-work-tabs.php"); ?>

          <!-- start tab pane -->
          <div class="tab-pane websitesapps" id="pills-websitesapps" role="tabpanel" aria-labelledby="pills-websitesapps-tab">
            <div class="row">
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-item"><a href="#" data-toggle="modal" data-target="#modal-video1">
                    <img src="assets/imgs/work/websiteapps/1.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="work-item"><a href="#" data-toggle="modal" data-target="#modal-video2">
                    <img src="assets/imgs/work/websiteapps/2.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="work-item"><a href="#" data-toggle="modal" data-target="#modal-video3">
                    <img src="assets/imgs/work/websiteapps/3.jpg" class="img-fluid" /></a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-text">
                  <h4>Beautifully designed websites & apps</h4>
                  <p>From £469</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end tab pane -->

        </div>
      </div>
  </section>
  <!-- end section -->

  <!-- start cta -->
  <?php include("questions.php"); ?>
  <!-- end cta -->

  <!-- start footer -->
  <?php include("footer.php"); ?>
  <!-- end footer -->

  <a href="#home" id="backtotop" class="smoothscroll"><img src="assets/imgs/icon-arrow-up-primary.png"></a>

  <!-- start modal video1 -->
<div class="modal fade modal-fullscreen" id="modal-video1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="modal-dialog modal-dialog-centered">    
    <div class="modal-content">
      <div class="modal-body">        
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="video">
              <video width="100%" height="100%" controls autoplay muted>
                <source src="assets/videos/website-apps/video1.mp4" type="video/mp4">
                <source src="assets/videos/website-apps/video1.webm" type="video/webm">
                <source src="assets/videos/website-apps/video1.ogg" type="video/ogg">            
                Your browser does not support the video tag.
              </video>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>
<!-- end modal video1 -->
<!-- start modal video2 -->
<div class="modal fade modal-fullscreen" id="modal-video2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="modal-dialog modal-dialog-centered">    
    <div class="modal-content">
      <div class="modal-body">        
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="video">
              <video width="100%" height="600" controls autoplay muted>
                <source src="assets/videos/website-apps/video2.mp4" type="video/mp4">
                <source src="assets/videos/website-apps/video2.webm" type="video/webm">
                <source src="assets/videos/website-apps/video2.ogg" type="video/ogg">            
                Your browser does not support the video tag.
              </video>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>
<!-- end modal video2 -->
<!-- start modal video3 -->
<div class="modal fade modal-fullscreen" id="modal-video3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="modal-dialog modal-dialog-centered">    
    <div class="modal-content">
      <div class="modal-body">        
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="video">
              <video width="100%" height="100%" controls autoplay muted>
                <source src="assets/videos/website-apps/video3.mp4" type="video/mp4">
                <source src="assets/videos/website-apps/video3.webm" type="video/webm">
                <source src="assets/videos/website-apps/video3.ogg" type="video/ogg">            
                Your browser does not support the video tag.
              </video>
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>
<!-- end modal video3 -->

  <!-- script for adding active class to current tab -->
  <script type="text/javascript" src="assets/active-tab.js"></script>

  <!-- jquery js -->
  <script type="text/javascript" src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 

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