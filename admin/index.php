<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="format-detection" content="telephone=no" />
    <title>TWM | Dashboard</title>
    <link rel="icon" href="assets/imgs/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="assets/imgs/favicon-16x16.png" sizes="16x16" type="image/png" />

    <!-- bootstrap css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- swiper css -->
    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper.min.css" />

    <!-- style css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body id="dashboard">
    <?php include("header.php"); ?>
    <!-- start wrapper -->
    <div id="wrapper">
    <?php include("sidebar.php"); ?>
      <!-- start main -->
      <div id="main">
        <!-- start breadcrumb -->
        <ul class="breadcrumb fmb-breadcrumb">
          <li class="breadcrumb-item fmb-breadcrumb-item">You Are Here</li>
          <li class="breadcrumb-item fmb-breadcrumb-item active">Dashboard</li>
        </ul>
        <!-- end breadcrumb -->
        <!-- start main content -->
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 col-xl-9">
                <h6 class="fmb-h6 font-medium mb10 d-none d-md-block">Users</h6>
                <div class="row mb40">
                  <div class="col-xl-8 mb30-lg">
                    <h6 class="fmb-h6 font-medium mb10 d-block d-md-none">
                      Users
                    </h6>
                    <!-- start widget users  -->
                    <div class="row">
                      <div class="col-md-6 mb30-sm">
                        <div class="card fmb-card w-users text-center">
                          <a href="#">
                            <div class="card-body fmb-card-body">
                              <div class="mb10">
                                <img
                                  src="assets/imgs/icon-bookings-big.svg"
                                  class="svg icon"
                                />
                              </div>
                              <h6 class="fmb-h6 font-medium text-center">
                                New Bookings
                              </h6>
                            </div>
                            <div class="card-footer fmb-card-footer">
                              <div>Current Bookings: 35</div>
                              <div>New: 10</div>
                            </div>
                          </a>
                </div>
            </div>
            <div class="col-md-6 mb30-sm">
                <div class="card fmb-card w-users text-center">
                    <a href="#">
                        <div class="card-body fmb-card-body">
                            <div class="mb10">
                                <img src="assets/imgs/icon-user-big.svg" class="svg icon" />
                            </div>
                            <h6 class="fmb-h6 font-medium text-center">
                                SignUps
                            </h6>
                        </div>
                        <div class="card-footer fmb-card-footer">
                            <div>Total Users: 35</div>
                            <div>New: 8</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end widget users  -->
    </div>
    <div class="col-xl-4 order-first order-md-last mb30-sm">
        <!-- start widget welcome  -->
        <div class="card fmb-card w-welcome">
            <div class="fmb-card-body fmb-card-body text-white">
                <h4 class="fmb-h4 font-medium text-white mb20">
                    Welcome Admin!
                </h4>
                <div class="font-medium">
                    New since your last login.
                </div>
                <hr />
                <div class="row text-center">
                    <div class="col-4">
                        <a href="#">
                            <div class="text-xs">SignUps</div>
                            <h4 class="fmb-h4 text-white">12</h4>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <div class="text-xs">Bookings</div>
                            <h4 class="fmb-h4 text-white">10</h4>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <div class="text-xs">Messages</div>
                            <h4 class="fmb-h4 text-white">29</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end widget welcome  -->
    </div>
    </div>
    <div class="row">
        <div class="col-xl-auto mb30-lg">
            <!-- start registrations -->
            <div class="w-registrations">
                <!-- start swiper -->
                <div class="swiper-container swiper-registrations">
                    <h6 class="fmb-h6 font-medium mb10">
                        New SignUps<span class="badge fmb-badge ml-1">8</span>
                    </h6>
                    <!-- swiper controls -->
                    <div class="swiper-controls">
                        <div class="swiper-button-prev">
                            <i class="fas fa-angle-left"></i>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <!-- start slide 1 -->
                        <div class="swiper-slide">
                            <div class="card fmb-card mb10">
                                <div class="card-header fmb-card-header d-block d-sm-flex">
                                    <div class="mb10-sm">
                                        <img src="assets/imgs/icon-user-big.svg" class="svg icon-sm mr-3" />
                                    </div>
                                    <div class="mb10-sm">
                                        <div class="font-medium">
                                            <a href="#" class="text-grey">John Doe</a>
                                        </div>
                                        <div class="text-grey-light">
                                            Registered on: 18-2-2021
                                        </div>
                                    </div>
                                    <div class="custom-control custom-switch fmb-custom-control fmb-custom-switch ml-auto">
                                        <input type="checkbox" class="custom-control-input fmb-custom-control-input" id="customSwitch1" />
                                        <label class="custom-control-label fmb-custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </div>
                                <div class="card-body fmb-card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-4 mb60-lg mb40-md">
                                            <div class="mb20">
                                                <h6 class="fmb-h6 text-secondary font-medium mb20">
                                                    User Details
                                                </h6>
                                                <div class="font-medium">Name</div>
                                                <div class="mb20">John Doe</div>

                                                <div class="font-medium">Username</div>
                                                <div class="mb20">johndoe</div>

                                                <div class="font-medium">
                                                    Phone Number
                                                </div>
                                                <div class="mb20">+44 88 468 9900</div>

                                                <div class="font-medium">Email</div>
                                                <div>johndoe@gmail.com</div>
                                            </div>
                                            <div></div>
                                        </div>
                                        <div class="col-md-6 col-xl-8">
                                            <div class="mb20">
                                                <h6 class="fmb-h6 text-secondary font-medium mb20">
                                                    Message
                                                </h6>
                                                <div class="mb-5">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slide 1 -->

                        <!-- start slide 2 -->
                        <div class="swiper-slide">
                            <div class="card fmb-card mb10">
                                <div class="card-header fmb-card-header d-block d-sm-flex">
                                    <div class="mb10-sm">
                                        <img src="assets/imgs/icon-user-big.svg" class="svg icon-sm mr-3" />
                                    </div>
                                    <div class="mb10-sm">
                                        <div class="font-medium">
                                            <a href="#" class="text-grey">George Smith</a
                                    >
                                  </div>
                                  <div class="text-grey-light">
                                    Registered on: 18-2-2021
                                  </div>
                                </div>
                                <div
                                  class="custom-control custom-switch fmb-custom-control fmb-custom-switch ml-auto"
                                >
                                  <input
                                    type="checkbox"
                                    class="custom-control-input fmb-custom-control-input"
                                    id="customSwitch1"
                                  />
                                  <label
                                    class="custom-control-label fmb-custom-control-label"
                                    for="customSwitch1"
                                  ></label>
                                </div>
                              </div>
                              <div class="card-body fmb-card-body">
                                <div class="row">
                                  <div
                                    class="col-md-6 col-xl-4 mb60-lg mb40-md"
                                  >
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        User Details
                                      </h6>
                                      <div class="font-medium">Name</div>
                                      <div class="mb20">George Smith</div>

                                      <div class="font-medium">Username</div>
                                      <div class="mb20">georgesmith</div>

                                      <div class="font-medium">
                                        Phone Number
                                      </div>
                                      <div class="mb20">+44 88 468 9900</div>

                                      <div class="font-medium">Email</div>
                                      <div>georgesmith@gmail.com</div>
                                    </div>
                                    <div></div>
                                  </div>
                                  <div class="col-md-6 col-xl-8">
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        Message
                                      </h6>
                                      <div class="mb-5">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end slide 2 -->

                          <!-- start slide 3 -->
                          <div class="swiper-slide">
                            <div class="card fmb-card mb10">
                              <div
                                class="card-header fmb-card-header d-block d-sm-flex"
                              >
                                <div class="mb10-sm">
                                  <img
                                    src="assets/imgs/icon-user-big.svg"
                                    class="svg icon-sm mr-3"
                                  />
                                </div>
                                <div class="mb10-sm">
                                  <div class="font-medium">
                                    <a href="#" class="text-grey"
                                      >Elina Prince</a
                                    >
                                  </div>
                                  <div class="text-grey-light">
                                    Registered on: 18-2-2021
                                  </div>
                                </div>
                                <div
                                  class="custom-control custom-switch fmb-custom-control fmb-custom-switch ml-auto"
                                >
                                  <input
                                    type="checkbox"
                                    class="custom-control-input fmb-custom-control-input"
                                    id="customSwitch1"
                                  />
                                  <label
                                    class="custom-control-label fmb-custom-control-label"
                                    for="customSwitch1"
                                  ></label>
                                </div>
                              </div>
                              <div class="card-body fmb-card-body">
                                <div class="row">
                                  <div
                                    class="col-md-6 col-xl-4 mb60-lg mb40-md"
                                  >
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        User Details
                                      </h6>
                                      <div class="font-medium">Name</div>
                                      <div class="mb20">Elina Prince</div>

                                      <div class="font-medium">Username</div>
                                      <div class="mb20">elinaprince</div>

                                      <div class="font-medium">
                                        Phone Number
                                      </div>
                                      <div class="mb20">+44 88 468 9900</div>

                                      <div class="font-medium">Email</div>
                                      <div>elinaprince@gmail.com</div>
                                    </div>
                                    <div></div>
                                  </div>
                                  <div class="col-md-6 col-xl-8">
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        Message
                                      </h6>
                                      <div class="mb-5">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end slide 3 -->

                          <!-- start slide 4 -->
                          <div class="swiper-slide">
                            <div class="card fmb-card mb10">
                              <div
                                class="card-header fmb-card-header d-block d-sm-flex"
                              >
                                <div class="mb10-sm">
                                  <img
                                    src="assets/imgs/icon-user-big.svg"
                                    class="svg icon-sm mr-3"
                                  />
                                </div>
                                <div class="mb10-sm">
                                  <div class="font-medium">
                                    <a href="#" class="text-grey"
                                      >Simon Baker</a
                                    >
                                  </div>
                                  <div class="text-grey-light">
                                    Registered on: 18-2-2021
                                  </div>
                                </div>
                                <div
                                  class="custom-control custom-switch fmb-custom-control fmb-custom-switch ml-auto"
                                >
                                  <input
                                    type="checkbox"
                                    class="custom-control-input fmb-custom-control-input"
                                    id="customSwitch1"
                                  />
                                  <label
                                    class="custom-control-label fmb-custom-control-label"
                                    for="customSwitch1"
                                  ></label>
                                </div>
                              </div>
                              <div class="card-body fmb-card-body">
                                <div class="row">
                                  <div
                                    class="col-md-6 col-xl-4 mb60-lg mb40-md"
                                  >
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        User Details
                                      </h6>
                                      <div class="font-medium">Name</div>
                                      <div class="mb20">Simon Baker</div>

                                      <div class="font-medium">Username</div>
                                      <div class="mb20">simonbaker</div>

                                      <div class="font-medium">
                                        Phone Number
                                      </div>
                                      <div class="mb20">+44 88 468 9900</div>

                                      <div class="font-medium">Email</div>
                                      <div>simonbaker@gmail.com</div>
                                    </div>
                                    <div></div>
                                  </div>
                                  <div class="col-md-6 col-xl-8">
                                    <div class="mb20">
                                      <h6
                                        class="fmb-h6 text-secondary font-medium mb20"
                                      >
                                        Message
                                      </h6>
                                      <div class="mb-5">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- end slide 4 -->
                        </div>
                      </div>
                      <!-- end swiper -->

                      <div class="text-right">
                        <a href="#" class="text-secondary">View All SignUps</a>
                                        </div>
                                    </div>
                                    <!-- end registrations -->
                                </div>
                                <div class="col-xl-4 mb30-lg"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-3">
                            <!-- start messages -->
                            <div class="w-messages mb40">
                                <h6 class="fmb-h6 font-medium mb10">
                                    Website Messages<span class="badge fmb-badge ml-1">4</span>
                                </h6>
                                <ul class="messages-list mb10">
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="card fmb-card">
                                            <a href="#">
                                                <div class="card-body fmb-card-body">
                                                    <div class="font-medium">John Doe</div>
                                                    <div class="mb10">
                                                        Ut enim ad minim veniam nostr exercitation ullamco
                                                        <span class="text-secondary">Read More</span>
                                                    </div>
                                                    <div class="text-grey-light">johndoe@gmail.com</div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="card fmb-card">
                                            <a href="#">
                                                <div class="card-body fmb-card-body">
                                                    <div class="font-medium">John Doe</div>
                                                    <div class="mb10">
                                                        Ut enim ad minim veniam nostr exercitation ullamco
                                                        <span class="text-secondary">Read More</span>
                                                    </div>
                                                    <div class="text-grey-light">johndoe@gmail.com</div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="card fmb-card">
                                            <a href="#">
                                                <div class="card-body fmb-card-body">
                                                    <div class="font-medium">John Doe</div>
                                                    <div class="mb10">
                                                        Ut enim ad minim veniam nostr exercitation ullamco
                                                        <span class="text-secondary">Read More</span>
                                                    </div>
                                                    <div class="text-grey-light">johndoe@gmail.com</div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="card fmb-card">
                                            <a href="#">
                                                <div class="card-body fmb-card-body">
                                                    <div class="font-medium">John Doe</div>
                                                    <div class="mb10">
                                                        Ut enim ad minim veniam nostr exercitation ullamco
                                                        <span class="text-secondary">Read More</span>
                                                    </div>
                                                    <div class="text-grey-light">johndoe@gmail.com</div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="card fmb-card">
                                            <a href="#">
                                                <div class="card-body fmb-card-body">
                                                    <div class="font-medium">John Doe</div>
                                                    <div class="mb10">
                                                        Ut enim ad minim veniam nostr exercitation ullamco
                                                        <span class="text-secondary">Read More</span>
                                                    </div>
                                                    <div class="text-grey-light">johndoe@gmail.com</div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-right">
                                    <a href="#" class="text-secondary text-sm">View All Messages</a
                    >
                  </div>
                </div>
                <!-- start messages -->
              </div>
            </div>
          </div>
        </div>
        <!-- end main content -->
        <?php include("footer.php"); ?>
                    </div>
                    <!-- end main -->
                </div>
                <!-- end wrapper -->

                <!-- jquery js -->
                <script type="text/javascript" src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>

                <!-- bootstrap js -->
                <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                <!-- svg js -->
                <script type="text/javascript" src="assets/plugins/svg/svg.js"></script>

                <!-- sidebar js -->
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#sidebar');
                        $('.fmb-sidebar-toggle').on('click', function() {
                            $('#sidebar, #main').toggleClass('active');
                            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                        });
                    });
                </script>

                <!-- swiper js -->
                <script type="text/javascript" src="assets/plugins/swiper/js/swiper.min.js"></script>
                <script type="text/javascript">
                    var swiper = new Swiper('.swiper-registrations', {
                        spaceBetween: 30,
                        pagination: {
                            el: '.swiper-pagination',
                            type: 'fraction',
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        updateOnWindowResize: true,
                    });
                </script>
</body>

</html>