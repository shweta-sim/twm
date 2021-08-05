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
  <section class="contact">
    <div class="container">
      <div class="row mb40">
        <div class="col-12 text-center">
          <h2 class="heading text-center wow fadeInUp" data-wow-delay="200ms">Contact
            <hr>
          </h2>
          <!-- <h4 class="text-center wow fadeInUp" data-wow-delay="300ms">Ready to learn more about how TW + RL can help you save time, and money on your designs? </h4>
        <p class="wow fadeInUp" data-wow-delay="400ms">Book a 1:1 call or send an email; you'll be designing better and scaling faster, in no time.</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          <div class="book-call">
            <div class="text-center wow fadeInUp" data-wow-delay="400ms">
              <ul class="nav nav-pills">
                <!-- <li class="nav-item"> <a class="nav-link" href="book-call-step1.php">Book a call</a> </li> -->
                <!-- <li class="nav-item"> <a class="nav-link active" href="contact.php">Send an email</a> </li> -->
              </ul>
            </div>

            <!-- start contact form -->
            <form action="thanks.php" method="POST" name="formContact" id="formContact" class="wow fadeInUp" data-wow-delay="400ms">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Name<span>*</span></label>
                    <input type="text" name="name" id="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="company" id="company" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email address<span>*</span></label>
                    <input type="text" name="email" id="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>I'm interested in...<span>*</span></label>
                    <select type="select" name="interest" id="interest" class="form-control required">
                      <option value="" selected="selected">-- select --</option>
                      <option value="Raising a general query">Raising a general query</option>
                      <option value="Booking a 1-2-1 call">Booking a 1-2-1 call</option>
                      <option value="Creating a bespoke plan">Creating a bespoke plan</option>
                      <option value="Creating a bespoke plan">Something else</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message<span>*</span></label>
                <textarea name="yourmessage" id="yourmessage" class="form-control"></textarea>
              </div>
              <div class="text-right"><button class="btn btn-primary-bordered" type="submit" id="btnContact" name="btnContact">Send</button></div>
            </form>
            <!-- end contact form -->

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

      $('form[id="formContact"]').validate({
        rules: {
          name: 'required',
          //company: 'required',
          email: {
            required: true,
            email: true,
          },
          //phone: 'required',
          interest: 'required',
          yourmessage: {
            required: true,
          }
        },
        messages: {
          name: 'This field is required',
          //company: 'This field is required',
          email: 'Enter a valid email',
          //phone: 'This field is required',
          interest: 'This field is required',
          yourmessage: 'This field is required',
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