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
                                <li><a href="register.php"><span class="bi bi-card-list"></span> Register Rentee</a></li>
                                <li><a href="view.php"><span class="bi bi-eye"></span> View Rentees</a></li>
                                <li><a href="verify.php"><span class="fa fa-drivers-license-o"></span> Verify Payment</a></li>
                                <li><a href="../index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard</h6>
                    <br>
                    <a href="change.php" ><button class="btn btn-primary" style="margin-bottom: 20px !important;border-radius: 0px !important;">Change Payment Fee</button></a>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="box shadow">
                                
                                <span class="bi bi-card-list "></span>
                                <h5>Rentees</h5>
                                <h4>
                                    <?php 

                                    $sql = "SELECT COUNT(id) AS total FROM students";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row = mysqli_fetch_assoc($run);

                                    $first = $row['total'];

                                    echo $first;

                                ?>         
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box shadow">
                                <span class="bi bi-check-square"></span>
                                <h5>Paid</h5>
                                <h4>
                           <?php 

                                    $sql = "SELECT COUNT(id) AS total FROM students WHERE status = 'PAID'";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row2 = mysqli_fetch_assoc($run);
                                    $second = $row2['total'];

                                    echo $second;

                                ?>              
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box shadow">
                                <span class="bi bi-card-checklist"></span>
                                <h5>Amount</h5>
                                <h4>
                           <?php 

                                    $sql = "SELECT SUM(amount) AS total FROM payment";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row3 = mysqli_fetch_assoc($run);
                                    $third = $row3['total'];

                                    if ($third=="") {
                                        echo "&#8358;0";
                                    }else{
                                        echo "&#8358;".number_format($third);
                                    }


                                ?>              
                                </h4>
                            </div>
                        </div>

                    


                      
                            <div class="container " >
                                <div class="row">
                                    <div class="col-md-12" >
                                        <br>
                                        <div class="shadow" style="padding: 30px;background-color: #fff;">
                        <h2>Payments</h2>
                        <br>
            
                

                     <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
              <thead>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>Username</th>
       <th>Ref ID</th>
       <th>Amount</th>
       <th>GSM</th>
    <th>Payment Date</th>
  </tr>
  </thead>
  <?php
  $sn=1;
  $psql = mysqli_query($dbcon,"SELECT * FROM payment ORDER BY id DESC");
  while($prop = mysqli_fetch_array($psql)){ ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $prop['name']; ?></td>
   
    <td><?php echo $prop['regno']; ?></td>
    <td><?php echo $prop['refid']; ?></td>
    <td><?php echo $prop['amount']; ?></td>
    <td><?php echo $prop['gsm']; ?></td>
    <td><?php echo $prop['date_paid']; ?></td>


  </tr>
  <?php } ?>
</table>





                </div>

                </div>

                    </div>
                   

                </div>

                </div>

                
            </div>
        </div>


  

</body>
</html>