<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="ABU Tax Department">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>ABU Tax Collection Portal</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <style>
    /* Add this CSS to darken the banner background image */
    .main-banner {
      position: relative;
      /* ...existing code... */
    }

    .main-banner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      /* Adjust opacity as needed */
      z-index: 1;
    }

    .main-banner>.container,
    .main-banner .row,
    .main-banner .col-lg-6,
    .main-banner .col-lg-5 {
      position: relative;
      z-index: 2;
    }

    /* Fix for "Explore Current Tax Drives" carousel being half visible */
    .owl-collection.owl-carousel {
      overflow: visible !important;
    }

    .owl-collection .item {
      min-height: 350px;
      /* Adjust as needed for your images/content */
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
    }

    @media (max-width: 991px) {
      .owl-collection .item {
        min-height: 250px;
      }
    }
  </style>
</head>

<body>

  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="ABU Tax Collection Logo">
            </a>
            <ul class="nav">
              <li style="margin-bottom:1.4vh"><a href="login.php" class="active">Login</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>ABU Tax Collection Portal</h6>
            <h2>Pay, Track &amp; Manage Your Taxes Easily.</h2>
            <p>The ABU Tax Collection Portal is your trusted online platform to file, pay, and manage all tax-related matters. Designed for convenience and transparency, it ensures your contributions help build a better community.</p>

          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <!-- Update your image tags to use Bootstrap's responsive class and set a max height if needed -->
              <img src="assets/images/banner-01.png" alt="Banner Image" class="img-fluid w-100" style="width:10%; max-height:400px; object-fit:cover;">
            </div>
            <div class="item">
              <!-- Update your image tags to use Bootstrap's responsive class and set a max height if needed -->
              <img src="assets/images/banner-02.png" alt="Banner Image" class="img-fluid w-100" style="max-height:400px; object-fit:cover;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Steps section -->
  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>File &amp; Pay Your Taxes in Three Simple Steps</h2>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Register / Login</h4>
            <p>Create an account or log in to access your tax profile securely.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Fill Tax Forms</h4>
            <p>Enter your income, deductions, and other relevant details accurately.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Submit & Pay</h4>
            <p>Submit your tax forms and make payments securely online.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2025 ABU Tax Collection Department. All rights reserved.
            &nbsp;&nbsp;
            Designed by Hello 'Dansa Ido</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
