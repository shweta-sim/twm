<?php
function selected($filename)
{
  if (stristr($_SERVER['PHP_SELF'], $filename)) {
    echo 'class="active"';
  }
}
?>
<header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="index.php"><img src="assets/imgs/logo.png" alt="TW Media" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
          <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav ml-auto">
              <li <?php selected('index.php') ?> class="nav-item"> <a class="nav-link" href="index.php">Home</a>
              </li>
              <li id="our-work" <?php selected('our-work-logos.php') ?> class="nav-item"> <a class="nav-link" href="our-work-logos.php">Our Work</a>
              </li>
              <li <?php selected('plans.php') ?> class="nav-item"> <a class="nav-link" href="plans.php">Plans</a>
              </li>
              <li <?php selected('about.php') ?> class="nav-item"> <a class="nav-link" href="about.php">About</a>
              </li>
              <li <?php selected('contact.php') ?> class="nav-item"> <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <!-- <li class="nav-item"> <a class="nav-link" href="#">Login</a>
              </li> -->
              <hr>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>