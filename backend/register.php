<?php 

include "../include/server.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../dist/css/iziToast.min.css">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
     <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dismissible.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/iziToast.min.js" type="text/javascript"></script>
     <style>
        html,body{
            box-sizing: border-box;
            height: 100%;
            background-color: #f2f7ff;
        }
        

    </style>
</head>
<body>
<?php
    if ($_GET['msg']=="error") { ?>
        <script>
       
           iziToast.error({
              title: '',
              message: 'Error , try again',
              position: 'topRight',
               animateInside: true,
          });
       
    </script> 
    <?php }
    elseif ($_GET['msg']=="success") {
      ?>
         <script>
       
           iziToast.success({
              title: '',
              message: 'Rentee Registered Successfully!',
              position: 'topRight',
               animateInside: true,
          });
       
    </script> 
   
      <?php
    }


    else{

    }
?>
    
     <div class="container-fluid h-100" id="dashboard">
            <div class="row h-100">
                <div class="col-md-2 shadow">
                    <div class="left-bar">
                        <div class="row">
                            <div class="col-md-3">
                                <h6><span class="fa fa-user"></span></h6>
                            </div>
                            <div class="col-md-9">
                                <h6>Admin Dashboard</h6>
                                <p style="color:#fff;font-size: 10px;">Sambawa International</p>
                            </div>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li><a href="dashboard.php"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                <li><a href="register.php" class="active"><span class="bi bi-card-list"></span> Register Rentee</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Rentees</a></li>
                                <li><a href="verify.php"><span class="fa fa-drivers-license-o"></span> Verify Payment</a></li>
                                <li><a href="../index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard > Register Rentee</h6>
                    <br>


                    <div class="row">
                        <div class="col-md-12 bg-white shadow" style="padding: 40px;">
                            <h2>Register Rentee</h2>
                            <br>
                            <form action="register.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Rentees' Name</label>
                                                <input type="text" id="name" name="name" class="form-control name"  placeholder="Fullname" required>
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label>Phone Number</label>
                                                <input type="text" id="gsm" class="form-control" name="gsm" placeholder="Phone Number" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                  <label>Username</label>
                                                 <input type="text" id="regno" class="form-control" name="regno" placeholder="Username" required>
                                            </div>

                                                <input id="dept" name="dept" class="form-control dept" value="Computer Science" type="hidden">
                                            

                                            

                                        

                                                <input class="form-control" name="level" value="ND 1" type="hidden">
                                            
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="text" id="emal" class="form-control" name="email" placeholder="email" required>
                                            </div>

                                          <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" id="pword" class="form-control" name="pword" placeholder="Password" required>
                                            </div>


                                           <br>
                                            <button style="margin-top: 30px;" type="submit" class="btn btn-primary btn-lg btn-block" name="generate"> Register Rentee</button>


                                           </form>
                           

                        </div>
                   

                </div>

                </div>

                
            </div>
        </div>


  

</body>
</html>