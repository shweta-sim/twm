<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="format-detection" content="telephone=no" />
    <title>Find Me Blood | Donors</title>
    <link rel="icon" href="assets/imgs/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="assets/imgs/favicon-16x16.png" sizes="16x16" type="image/png" />

    <!-- bootstrap css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- datepicker css -->
    <link href="assets/plugins/datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- style css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- responsive css -->
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body id="users">
<?php include("header.php"); ?>
    <!-- start wrapper -->
    <div id="wrapper">
    <?php include("sidebar.php"); ?>
            <!-- start blood alerts -->
            <div class="blood-alerts">
              <h6 class="fmb-h6 text-white font-medium mb20">
                Blood Alerts (LIVE)
              </h6>
              <div class="fmb-card mb10">
                <div class="blood-alert-item">
                  <a href="blood-alert-detail.html">
                    <ul>
                      <li><span class="text-uppercase">New Delhi</span></li>
                      <li>
                        <div class="row">
                          <div class="col-7">
                            Blood Type: <span class="text-secondary">AB+</span>
                          </div>
                          <div class="col-5">Units: <span>1</span></div>
                        </div>
                      </li>
                      <li>At: <span>Fortis, Shalimar Bagh</span></li>
                      <li>Contact: <span>9899912345</span></li>
                    </ul>
                  </a>
                </div>
                <div class="blood-alert-item">
                    <a href="blood-alert-detail.html">
                        <ul>
                            <li><span class="text-uppercase">Mumbai</span></li>
                            <li>
                                <div class="row">
                                    <div class="col-7">
                                        Blood Type: <span class="text-secondary">B+</span>
                                    </div>
                                    <div class="col-5">Units: <span>1</span></div>
                                </div>
                            </li>
                            <li>At: <span>Apollo, Tagore Nagar</span></li>
                            <li>Contact: <span>9899912345</span></li>
                        </ul>
                    </a>
                </div>
                <div class="blood-alert-item">
                    <a href="blood-alert-detail.html">
                        <ul>
                            <li><span class="text-uppercase">Chandigarh</span></li>
                            <li>
                                <div class="row">
                                    <div class="col-7">
                                        Blood Type: <span class="text-secondary">O+</span>
                                    </div>
                                    <div class="col-5">Units: <span>1</span></div>
                                </div>
                            </li>
                            <li>At: <span>PGI, Sector 12</span></li>
                            <li>Contact: <span>9899912345</span></li>
                        </ul>
                    </a>
                </div>
                <div class="blood-alert-item">
                    <a href="blood-alert-detail.html">
                        <ul>
                            <li><span class="text-uppercase">New Delhi</span></li>
                            <li>
                                <div class="row">
                                    <div class="col-7">
                                        Blood Type: <span class="text-secondary">AB+</span>
                                    </div>
                                    <div class="col-5">Units: <span>1</span></div>
                                </div>
                            </li>
                            <li>At: <span>Fortis, Shalimar Bagh</span></li>
                            <li>Contact: <span>9899912345</span></li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="text-right">
                <a href="blood-alerts.html" class="text-white">View All Blood Alerts</a
                >
              </div>
            </div>
            <!-- end blood alerts -->
          </div>
        </div>
      </div>
      <!-- end sidebar -->
      <!-- start main -->
      <div id="main">
        <!-- start breadcrumb -->
        <ul class="breadcrumb fmb-breadcrumb">
          <li class="breadcrumb-item fmb-breadcrumb-item">You Are Here</li>
          <li class="breadcrumb-item fmb-breadcrumb-item active">Donors</li>
        </ul>
        <!-- end breadcrumb -->
        <!-- start main content -->
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div
                  class="d-block d-sm-flex align-items-center mb10 text-center text-md-left"
                >
                  <div class="mb20-sm">
                    <a
                      href="add-donor.html"
                      class="btn fmb-btn fmb-btn-secondary fmb-btn-sm"
                      ><i class="fas fa-plus mr-2"></i>Add New Donor</a
                    >
                  </div>
                  <div class="ml-auto">
                    <a
                      class=""
                      data-toggle="collapse"
                      href="#search"
                      role="button"
                      aria-expanded="false"
                      aria-controls="collapseExample"
                      ><i class="fa fa-search mr-2"></i>Search Donors</a
                    >
                  </div>
                </div>
                <hr />
                <h6 class="fmb-h6 font-medium mb20">Find Me Blood Donors</h6>
                <div class="collapse" id="search">
                  <div class="card fmb-card mb30">
                    <div class="card-body fmb-card-body">
                      <form>
                        <div class="form-group fmb-form-group">
                          <input
                            type="text"
                            name="keyword"
                            class="form-control fmb-form-control fmb-form-control-sm"
                            placeholder="Search by name or location"
                          />
                          <div class="tagsinput mb10">
                            <div class="tag">
                              Aakash Mahajan<a href="#"
                                ><i class="fas fa-times"></i
                              ></a>
            </div>
            <div class="tag">
                Sonia Mahajan<a href="#"><i class="fas fa-times"></i
                              ></a>
            </div>
        </div>
    </div>
    <div class="d-block d-md-flex">
        <div class="mr-5 mb10-sm font-medium">Sort by</div>
        <div class="custom-control custom-radio fmb-custom-control fmb-custom-radio mr-4">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input fmb-custom-control-input" checked />
            <label class="custom-control-label fmb-custom-control-label" for="customRadio1">A to Z</label
                            >
                          </div>
                          <div
                            class="custom-control custom-radio fmb-custom-control fmb-custom-radio mr-4"
                          >
                            <input
                              type="radio"
                              id="customRadio2"
                              name="customRadio"
                              class="custom-control-input fmb-custom-control-input"
                            />
                            <label
                              class="custom-control-label fmb-custom-control-label"
                              for="customRadio2"
                              >Z to A</label
                            >
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <table class="fmb-table mb60 mb0-lg">
                  <thead>
                    <tr>
                      <th scope="col">FMB ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>
                      <th scope="col" width="10%">Phone No.</th>
                      <th scope="col" class="text-center">Is Contact Public</th>
                      <th scope="col">Email</th>
                      <th scope="col" width="15%">Aadhar Number</th>
                      <th scope="col" width="12%">Address</th>
                      <th scope="col" class="text-center">Blood Group</th>
                      <th scope="col" width="10%" class="text-center">
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row" data-label="FMB ID">
                        <a href="donor-detail.html">FMB110005</a>
                      </td>
                      <td data-label="Name">Aakash Mahajan</td>
                      <td data-label="Username">aakashm</td>
                      <td data-label="Phone No.">
                        <div>98880-12345</div>
                        <div>98880-12346</div>
                      </td>
                      <td data-label="Is Contact Public" class="text-center">
                        Yes
                      </td>
                      <td data-label="Email">aakashm@gmail.com</td>
                      <td data-label="Aadhar Number">1234 5678 9000 1234</td>
                      <td data-label="Address">
                        <a
                          class="dropdown-toggle"
                          data-toggle="collapse"
                          href="#address1"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseExample"
                          >New Delhi</a
                        >
                        <div class="collapse" id="address1">
                          146-A, Hemkunt Tower, Nehru Place,<br />New Delhi -
                          110019
                        </div>
                      </td>
                      <td data-label="Blood Group" class="text-center">AB+</td>
                      <td data-label="" class="text-center">
                        <a href="donor-detail.html" class="mr-3"
                          ><i class="fas fa-eye"></i></a
                        ><a
                          href="#"
                          class="text-secondary"
                          data-toggle="modal"
                          data-target="#modal-delete"
                          ><i class="fas fa-times"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="FMB ID">
                        <a href="donor-detail.html">FMB110004</a>
                      </td>
                      <td data-label="Name">Sonia Jain</td>
                      <td data-label="Username">soniaj</td>
                      <td data-label="Phone No.">
                        <div>98880-12345</div>
                        <div>98880-12346</div>
                      </td>
                      <td data-label="Is Contact Public" class="text-center">
                        Yes
                      </td>
                      <td data-label="Email">soniaj@gmail.com</td>
                      <td data-label="Aadhar Number">1234 5678 9000 1234</td>
                      <td data-label="Address">
                        <a
                          class="dropdown-toggle"
                          data-toggle="collapse"
                          href="#address2"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseExample"
                          >Chandigarh</a
                        >
                        <div class="collapse" id="address2">
                          House No. 12/2, Sukhmani Enclave, Sector-18.
                          Chandigarh-110019
                        </div>
                      </td>
                      <td data-label="Blood Group" class="text-center">O+</td>
                      <td data-label="" class="text-center">
                        <a href="donor-detail.html" class="mr-3"
                          ><i class="fas fa-eye"></i></a
                        ><a
                          href="#"
                          class="text-secondary"
                          data-toggle="modal"
                          data-target="#modal-delete"
                          ><i class="fas fa-times"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="FMB ID">
                        <a href="donor-detail.html">FMB110003</a>
                      </td>
                      <td data-label="Name">Aakash Mahajan</td>
                      <td data-label="Username">aakashm</td>
                      <td data-label="Phone No.">
                        <div>98880-12345</div>
                        <div>98880-12346</div>
                      </td>
                      <td data-label="Is Contact Public" class="text-center">
                        Yes
                      </td>
                      <td data-label="Email">aakashm@gmail.com</td>
                      <td data-label="Aadhar Number">1234 5678 9000 1234</td>
                      <td data-label="Address">
                        <a
                          class="dropdown-toggle"
                          data-toggle="collapse"
                          href="#address3"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseExample"
                          >New Delhi</a
                        >
                        <div class="collapse" id="address3">
                          146-A, Hemkunt Tower, Nehru Place,<br />New Delhi -
                          110019
                        </div>
                      </td>
                      <td data-label="Blood Group" class="text-center">AB+</td>
                      <td data-label="" class="text-center">
                        <a href="donor-detail.html" class="mr-3"
                          ><i class="fas fa-eye"></i></a
                        ><a
                          href="#"
                          class="text-secondary"
                          data-toggle="modal"
                          data-target="#modal-delete"
                          ><i class="fas fa-times"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="FMB ID">
                        <a href="donor-detail.html">FMB110002</a>
                      </td>
                      <td data-label="Name">Sonia Jain</td>
                      <td data-label="Username">soniaj</td>
                      <td data-label="Phone No.">
                        <div>98880-12345</div>
                        <div>98880-12346</div>
                      </td>
                      <td data-label="Is Contact Public" class="text-center">
                        Yes
                      </td>
                      <td data-label="Email">soniaj@gmail.com</td>
                      <td data-label="Aadhar Number">1234 5678 9000 1234</td>
                      <td data-label="Address">
                        <a
                          class="dropdown-toggle"
                          data-toggle="collapse"
                          href="#address4"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseExample"
                          >Chandigarh</a
                        >
                        <div class="collapse" id="address4">
                          House No. 12/2, Sukhmani Enclave, Sector-18.
                          Chandigarh-110019
                        </div>
                      </td>
                      <td data-label="Blood Group" class="text-center">O+</td>
                      <td data-label="" class="text-center">
                        <a href="donor-detail.html" class="mr-3"
                          ><i class="fas fa-eye"></i></a
                        ><a
                          href="#"
                          class="text-secondary"
                          data-toggle="modal"
                          data-target="#modal-delete"
                          ><i class="fas fa-times"></i
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td scope="row" data-label="FMB ID">
                        <a href="donor-detail.html">FMB110001</a>
                      </td>
                      <td data-label="Name">Sonia Jain</td>
                      <td data-label="Username">soniaj</td>
                      <td data-label="Phone No.">
                        <div>98880-12345</div>
                        <div>98880-12346</div>
                      </td>
                      <td data-label="Is Contact Public" class="text-center">
                        Yes
                      </td>
                      <td data-label="Email">soniaj@gmail.com</td>
                      <td data-label="Aadhar Number">1234 5678 9000 1234</td>
                      <td data-label="Address">
                        <a
                          class="dropdown-toggle"
                          data-toggle="collapse"
                          href="#address5"
                          role="button"
                          aria-expanded="false"
                          aria-controls="collapseExample"
                          >Chandigarh</a
                        >
                        <div class="collapse" id="address5">
                          House No. 12/2, Sukhmani Enclave, Sector-18.
                          Pincode-110019
                        </div>
                      </td>
                      <td data-label="Blood Group" class="text-center">O+</td>
                      <td data-label="" class="text-center">
                        <a href="donor-detail.html" class="mr-3"
                          ><i class="fas fa-eye"></i></a
                        ><a
                          href="#"
                          class="text-secondary"
                          data-toggle="modal"
                          data-target="#modal-delete"
                          ><i class="fas fa-times"></i
                        ></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <ul class="pagination fmb-pagination justify-content-center">
                  <li class="page-item fmb-page-item disabled">
                    <a
                      class="page-link fmb-page-link"
                      href="#"
                      aria-label="Previous"
                    >
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item fmb-page-item active">
                    <a class="page-link fmb-page-link" href="#">1</a>
                  </li>
                  <li class="page-item fmb-page-item">
                    <a class="page-link fmb-page-link" href="#">2</a>
                  </li>
                  <li class="page-item fmb-page-item">
                    <a class="page-link fmb-page-link" href="#">3</a>
                  </li>
                  <li class="page-item fmb-page-item">
                    <a
                      class="page-link fmb-page-link"
                      href="#"
                      aria-label="Next"
                    >
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
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
    <script
      type="text/javascript"
      src="assets/plugins/jquery/jquery-3.3.1.min.js"
    ></script>

    <!-- bootstrap js -->
    <script
      type="text/javascript"
      src="assets/plugins/bootstrap/js/bootstrap.min.js"
    ></script>

    <!-- svg js -->
    <script type="text/javascript" src="assets/plugins/svg/svg.js"></script>

    <!-- sidebar js -->
    <script type="text/javascript">
      $(document).ready(function () {
        $('#sidebar');
        $('.fmb-sidebar-toggle').on('click', function () {
          $('#sidebar, #main').toggleClass('active');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
      });
    </script>

    <!-- datepicker js -->
    <script
      type="text/javascript"
      src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"
    ></script>
    <script type="text/javascript">
      $(function () {
        $('#from').datepicker({
          autoclose: true,
          todayHighlight: true,
        });
        $('#to').datepicker({
          autoclose: true,
          todayHighlight: true,
        });
      });
    </script>
  </body>
</html>

<!-- start modal delete -->
<div
  class="modal fade fmb-modal"
  id="modal-delete"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div
    class="modal-dialog modal-dialog-centered fmb-modal-dialog"
    role="document"
  >
    <div class="modal-content fmb-modal-content">
      <div class="modal-body fmb-modal-body text-center">
        <button
          type="button"
          class="close fmb-close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="text-primary font-medium text-uppercase text-center mb10">
          Are you sure you want to
          <span class="text-secondary">Remove</span> this Donar
        </h4>
        <h6 class="text-uppercase font-medium text-center mb40">
          This step can not be undone
        </h6>
        <button class="btn fmb-btn fmb-btn-primary mb10-sm mr-2 ml-2">
          Confirm
        </button>
        <button class="btn fmb-btn fmb-btn-white2" data-dismiss="modal">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>
<!-- end modal delete -->