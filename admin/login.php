<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="format-detection" content="telephone=no" />
    <title>TW Media | Login Admin</title>
    <link rel="icon" href="assets/imgs/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="assets/imgs/favicon-16x16.png" sizes="16x16" type="image/png" />

    <!-- bootstrap css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />

    <!-- style css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- start login admin -->
    <section class="login-admin">
        <div class="img wow fadeInRight" data-wow-delay="800ms"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-6 offset-md-5 offset-lg-6 offset-xl-3">
                    <div class="text-center mb40 wow fadeInUp" data-wow-delay="100ms">
                        <img src="assets/imgs/logo-twm.png" class="img-fluid" />
                    </div>
                    <div class="content-bl2 login-bl wow fadeInUp" data-wow-delay="200ms">
                        <h4 class="fmb-h4 font-bold mb20">Login</h4>
                        <form action="index.html">
                            <div class="form-group fmb-form-group">
                                <label>Email<span>*</span></label>
                                <input type="text" class="form-control fmb-form-control" name="email" id="email" />
                            </div>
                            <div class="form-group fmb-form-group">
                                <label>Password<span>*</span></label>
                                <input type="password" class="form-control fmb-form-control" name="password" id="password" />
                            </div>
                            <div class="text-xs mb10">
                                The username or password you entered is incorrect.
                            </div>
                            <div class="mb40">
                                <div class="form-group fmb-form-group">
                                    <div class="custom-control custom-checkbox fmb-custom-control fmb-custom-checkbox">
                                        <input type="checkbox" class="custom-control-input fmb-custom-control-input" id="customCheck" name="example1" />
                                        <label class="custom-control-label fmb-custom-control-label" for="customCheck">Remember Me</label
                      >
                    </div>
                  </div>
                </div>
                <button class="btn fmb-btn fmb-btn-secondary2 fmb-btn-bl">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end login admin -->

    <!-- start footer -->
    <!-- <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-block d-md-flex align-items-center text-center">
            <div class="mb10-sm">
              &copy; Copyright TW Media 2021. All Rights Reserved.
            </div>
            <ul class="footer-links ml-auto">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Usage</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer> -->
    <!-- end footer -->

    <!-- jquery js -->
    <script
      type="text/javascript"
      src="assets/plugins/jquery/jquery-3.3.1.min.js"
    ></script>

    <!-- bootstrap js -->
    <script
      type="text/javascript"
      src="assets/plugins/bootstrap/js/bootstrap.min.js"
    ></script>

    <!-- animate js -->
    <script
      type="text/javascript"
      src="assets/plugins/animate/animate.min.js"
    ></script>
    <script type="text/javascript">
      new WOW().init();
      if ($(window).width() <= 767) {
        $('.wow').removeClass('wow');
      }
    </script>
  </body>
</html>