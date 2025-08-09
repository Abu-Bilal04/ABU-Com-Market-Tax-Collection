<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="ABU Tax Department">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>ABU Tax Collection Portal - Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

  <!-- Header -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png" alt="ABU Tax Collection Logo">
            </a>
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="login.php" class="active">Login</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Login Section -->
  <section class="py-5" style="min-height: 80vh; display: flex; align-items: center;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
          <div class="card shadow-lg border-0 rounded-3">
            <div class="card-body p-4">
              <h3 class="text-center mb-4">Login to ABU Tax Portal</h3>

              <!-- Tabs for User/Admin -->
              <ul class="nav nav-tabs mb-3" id="loginTabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-target="userForm">User Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="adminForm">Admin Login</a>
                </li>
              </ul>

              <!-- User Login Form -->
              <form id="userForm" action="user_login.php" method="POST">
                <div class="form-group mb-3">
                  <label for="userEmail">Email address</label>
                  <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group mb-4">
                  <label for="userPassword">Password</label>
                  <input type="password" class="form-control" id="userPassword" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login as User</button>
              </form>

              <!-- Admin Login Form (hidden by default) -->
              <form id="adminForm" action="admin_login.php" method="POST" style="display: none;">
                <div class="form-group mb-3">
                  <label for="adminUsername">Username</label>
                  <input type="text" class="form-control" id="adminUsername" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group mb-4">
                  <label for="adminPassword">Password</label>
                  <input type="password" class="form-control" id="adminPassword" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Login as Admin</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2025 ABU Tax Collection Department. All rights reserved.
            &nbsp;&nbsp; Designed by Hello 'Dansa Ido</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Toggle between forms
    document.querySelectorAll('#loginTabs .nav-link').forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();

        // Switch active tab
        document.querySelectorAll('#loginTabs .nav-link').forEach(link => link.classList.remove('active'));
        this.classList.add('active');

        // Hide all forms
        document.querySelectorAll('form').forEach(form => form.style.display = 'none');

        // Show the target form
        document.getElementById(this.dataset.target).style.display = 'block';
      });
    });
  </script>
</body>
</html>
