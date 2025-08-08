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
              message: 'Fee Changed Successfully!',
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
                                <li><a href="dashboard.php" class="active"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                <li><a href="register.php" ><span class="bi bi-card-list"></span> Register Rentee</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Rentees</a></li>
                                <li><a href="verify.php"><span class="fa fa-drivers-license-o"></span> Verify Payment</a></li>
                                <li><a href="../index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard > Change Payment Fee</h6>
                    <br>


                    <div class="row">
                        <div class="col-md-12 bg-white shadow" style="padding: 40px;">
                            <h2>Change Payment Fee</h2>
                            <br>
                            <form action="change.php" method="POST">

                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-6">
                                                <input id="dept" name="dept" class="form-control dept" value="Computer Science" type="hidden">
                                            </div>

                                            

                                        
                                            <div class="form-group col-md-6">
                                                <input class="form-control" name="level" value="ND 1" type="hidden">
                                            </div>

                                           
                                          <div class="form-group col-md-12">
                                                <label>New Fee</label>
                                                <input type="number" class="form-control" name="newfee" placeholder="New fee" required>
                                            </div>

                                           <br>
                                            <button style="margin-top: 30px;" type="submit" class="btn btn-primary btn-lg btn-block" name="change"> Submit</button>


                                           </form>
                           

                        </div>
                   

                </div>

                </div>

                
            </div>
        </div>


  

</body>
</html>