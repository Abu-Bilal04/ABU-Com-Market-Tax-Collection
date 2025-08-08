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
   <!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
     <style>
        html,body{
            box-sizing: border-box;
            height: 100%;
            background-color: #f2f7ff;
        }
      

    </style>
    <script type="text/javascript" language="javascript" class="init">
    
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
</head>
<body>

     <?php
    if ($_GET['msg']=="error") { ?>
        <script>
       
           iziToast.error({
              title: '',
              message: 'Unsuccessful, try again',
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
              message: 'Deleted Successfully!!',
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
                                <li><a href="register.php"><span class="bi bi-card-list"></span> Register Rentee</a></li>
                                <li><a href="view.php" class="active"><span class="bi bi-eye"></span> View Rentees</a></li>
                                <li><a href="verify.php"><span class="fa fa-drivers-license-o"></span> Verify Payment</a></li>
                                <li><a href="../index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Admin Dashboard > Registered Rentees</h6>
                    <br>


                    <div class="row">
                      
                            <div class="container shadow" style="padding: 30px;background-color: #fff;">
                        <h2>All Registered Rentees</h2>
                        <br>
            
                

                     <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
              <thead>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>Username</th>
    <th>Phone</th>
    <th>Status</th>
    <th></th>
  </tr>
  </thead>
  <?php
  $sn=1;
  $psql = mysqli_query($dbcon,"SELECT * FROM students ORDER BY id DESC");
  while($prop = mysqli_fetch_array($psql)){ ?>
  <tr>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $prop['name']; ?></td>
   
    <td><?php echo $prop['regno']; ?></td>
   <td><?php echo $prop['gsm']; ?></td>
   <td><?php if ($prop['status']=="") {
       echo "<span style='color: red;'>NOT PAID</span>";
   }else{
    echo "<span style='color: green;'>PAID</span>";
   } ?></td>
    
    <td>
        
         <a data-tooltip title="Delete" href="delete.php?id=<?php echo $prop['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
        </td>
  </tr>
  <?php } ?>
</table>





                </div>

                </div>

                
            </div>
        </div>



<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
        <!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $('[data-tooltip]').tooltip();
        });
</script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>  

</body>
</html>