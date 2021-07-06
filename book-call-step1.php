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

<link href="assets/plugins/calendar/calendar.css" rel="stylesheet" />

<!-- Animate CSS -->
<link href="assets/plugins/animate/animate.min.css" rel="stylesheet"/>

<!-- bootstrap css -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- style css -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- responsive css -->
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!-- calendar css -->
<script type="text/javascript" src="assets/plugins/calendar/calendar.js"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        //left: 'prevYear,prev,next,nextYear today',
        //center: 'title',
        //right: 'dayGridMonth,dayGridWeek,dayGridDay'
      },
      initialDate: '2021-05-19',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        // {
        //   title: 'Long Event',
        //   start: '2021-05-20',
        //   end: '2021-05-20'
        // },        
        // {
        //   title: 'Conference',
        //   start: '2021-05-24',
        //   end: '2021-05-24'
        // },
        // {
        //   title: 'Meeting',
        //   start: '2021-05-08',
        //   end: '2021-05-08'
        // },        
      ]
    });

    calendar.render();
  });

</script>

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
      <div class="col-lg-10 offset-lg-1">
        <div class="book-call">
          <div class="text-center wow fadeInUp" data-wow-delay="400ms">
            <ul class="nav nav-pills">
              <li class="nav-item"> <a class="nav-link active" href="book-call-step1.php">Book a call</a> </li>
              <li class="nav-item"> <a class="nav-link" href="contact.php">Send an email</a> </li>
            </ul>
          </div>
          
          <!-- start book call step1 -->
          <div class="booking-bl wow fadeInUp" data-wow-delay="400ms">
            <div class="row">
              <div class="col-md-5">
                <div class="booking-bl-info left">
                  <h2>1:1 call</h2>
                  <h6 class="heading text-left mb10">30 minutes
                    <hr>
                  </h6>
                  <p class="mb30">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Suspendisse ut velit ante. Fusce
                    at pretium tortor. Maecenas
                    finibus mi urna, ac accumsan
                    turpis commodo eu.
                    Select a date and time</p>
                  <h6>Select a date and time</h6>
                </div>
              </div>
              <div class="col-md-7">
                <div class="booking-bl-info right text-center">
                  
                  <div id='calendar'></div>
                  <hr class="divider">

                </div>
              </div>
            </div>
          </div>
          <!-- end book call step1 --> 
          
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
</body>
</html>
