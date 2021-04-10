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

<!-- swiper css -->
<link rel="stylesheet" href="assets/plugins/swiper/css/swiper.min.css" />

<!-- bootstrap css -->
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- style css -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- responsive css -->
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- start header -->
<?php include("header.php"); ?>
<!-- end header --> 

<!-- start section -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12"> 
        <h2 class="heading text-center mb10 wow fadeInUp" data-wow-delay="200ms">Plans
          <hr>
        </h2>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  </div>
</section>
<!-- end section --> 

<!-- start cta -->
<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="heading text-center mb10 wow fadeInUp" data-wow-delay="200ms">Still have questions?
          <hr>
        </h2>
        <a href="#" class="btn btn-primary-bordered wow fadeInUp" data-wow-delay="300ms">Contact us<span>></span></a> </div>
    </div>
  </div>
</section>
<!-- end cta --> 

<!-- start footer -->
<?php include("footer.php"); ?>
<!-- end footer --> 

<!-- jquery js --> 
<script type="text/javascript" src="assets/plugins/jquery/jquery-3.5.1.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- animate js --> 
<script type="text/javascript" src="assets/plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
  if ($(window).width() <= 767){ 
    $(".wow").removeClass("wow");
  }
</script> 

</body>
</html>
