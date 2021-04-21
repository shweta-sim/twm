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
<section class="contact thanks">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">

        <?php 
  if(isset($_POST['btnContact']))
  {
    //Recipient's email addreess    
    // $to="info.twmedia@gmail.com";
    $to="info.twmedia@gmail.com";
    
    //Change subject field.
    $subject="Contact - TW Media";
    $name=$_POST['name'];
    $company=$_POST['company'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $interest=$_POST['interest'];
    $yourmessage=$_POST['yourmessage'];       

    //Sender's email addreess
    $from=$_POST['email'];
              
    //Email Body
    $message = '<html><body>';
    $message .= '<table cellpadding="10" cellspacing="0" border="0" width="100%">';
    $message .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $message .= "<tr><td width='30%'><strong>Name:</strong> </td><td width='70%'>" . $name . "</td></tr>";  
    $message .= "<tr><td><strong>Company:</strong> </td><td>" . $company . "</td></tr>";      
    $message .= "<tr><td><strong>Email Address: </strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";   
    $message .= "<tr><td><strong>Interested in: </strong> </td><td>" . $interest . "</td></tr>";
    $message .= "<tr><td><strong>Message: </strong> </td><td>" . $yourmessage . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";     
    
    //Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "X-Mailer: PHP \r\n";

    // More headers
    $headers .= 'From: <mehrarohit1985@gmail.com>' . "\r\n";    
    mail($to, $subject, $message, $headers);   
    
  }
?>
        <h2 class="heading text-center mb30 wow fadeInUp" data-wow-delay="200ms">Thank You!<hr></h2>
        <h4 class="text-center mb30 wow fadeInUp" data-wow-delay="300ms">You are precious to us.<br>Our support team will contact you soon.</h4>
        <div class="wow fadeInUp" data-wow-delay="400ms"><a href="index.php" class="btn btn-primary">Back to home</a></div>
        
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

<!-- svg js --> 
<script type="text/javascript" src="assets/plugins/svg/svg.js"></script> 

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
