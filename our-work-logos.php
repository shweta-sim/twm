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

<body class="preload" id="work-logos">
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
          <div class="tab-pane show active logos" id="pills-logos">
            <div class="row">
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-item"><a href="assets/imgs/work/logos/1-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/1.jpg" class="img-fluid" /></a>
                </div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="work-item"><a href="assets/imgs/work/logos/2-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/2.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="work-item"><a href="assets/imgs/work/logos/3-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/3.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-item"><a href="assets/imgs/work/logos/4-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/4.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="work-item"><a href="assets/imgs/work/logos/5-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/5.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="work-item"><a href="assets/imgs/work/logos/6-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/6.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-item"><a href="assets/imgs/work/logos/7-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/7.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="work-item"><a href="assets/imgs/work/logos/8-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/8.jpg" class="img-fluid" /></a></div>
              </div>
              <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="work-item"><a href="assets/imgs/work/logos/9-big.jpg" class="swipebox" rel="logos"><img src="assets/imgs/work/logos/9.jpg" class="img-fluid" /></a></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="work-text">
                  <h4>Hand drawn logos that capture the heart of your vision</h4>
                  <p>From ??239</p>
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

  <!-- script for adding active class to current tab -->
  <script type="text/javascript" src="assets/active-tab.js"></script>

  <!-- jquery js -->
  <script type="text/javascript" src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>

  <!-- swipebox js -->
  <script type="text/javascript" src="assets/plugins/swipebox/js/jquery.swipebox.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      /* Basic Gallery */
      $('.swipebox').swipebox();

      /* Video */
      $('.swipebox-video').swipebox();

    });
  </script>

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