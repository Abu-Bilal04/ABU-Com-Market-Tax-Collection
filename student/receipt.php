<?php 

include "../include/server.php";

$regno = $_SESSION['regno'];
if ($regno == "") {
    header('Location: ../index.php');
}


$sql = "SELECT * FROM payment WHERE regno = '$regno' LIMIT 1";
$run = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($run);
$name = $row['name'];
$gsm = $row['gsm'];
$level = $row['level'];
$dept = $row['dept'];
$email = $row['email'];
$amount = $row['amount'];

$d=strtotime("".$row['date_paid']."");
   

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Receipt - <?php echo $name; ?></title>
		<link rel="stylesheet" type="text/css" href="assets/css/receipt.css">
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
</head>
<body>
	<div class="col-md-12">   
 <div class="row">
		
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           
    			<div class="receipt-header">
    				 <div class="row">
					<div class="col-sm-6">
						<div class="receipt-left">
						</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="receipt-right">
							<h5 align="right" style="font-size: 14px">SAMBAWA INTERNATIONAL</h5>
							<p align="right">08000000000 <i class="fa fa-phone"></i></p>
							<p align="right">info@sambawa.org<i class="fa fa-envelope"></i></p>
						</div>
					</div>
				</div>
            </div>
			
			<div class="container">
				<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="row">
					<div class="col-sm-8">
						<div class="receipt-right">
							<h5><?php echo strtoupper($row['name']); ?></h5>
							<p><b>Username :</b> <?php echo $row['regno'] ?></p>
							<p><b>Phone Number : </b> <?php echo $row['gsm']; ?></p>
							
						</div>
					</div>
					<div class="col-sm-4">							
						<h4 align="right">Reference ID: <span style="color:green"><?php echo $row['refid']; ?></span></h4>

					</div>
				</div>
            </div>
        </div>
			</div>
			
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9">Payment for rent</td>
                            <td class="col-md-3">&#x20a6 <?php echo number_format($row['amount']); ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-9">Status</td>
                            <td class="col-md-3">PAID</td>
                        </tr>
                        
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
							
							</td>
                            <td>
                            <p>
                                <strong>&#x20a6 <?php echo number_format($row['amount']); ?></strong>
                            </p>
                            
							</td>
                        </tr>
                        <tr>
                           
                           
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Date :</b> <?php echo date('l jS, F Y h:i:s A',$d); ?></p>							<br>
							<button class="btn btn-danger btn-sm" onclick="print()"><span class="fa fa-print"></span> Print</button>
							<a href="index.php"><button class="btn btn-primary btn-sm"><span class="fa fa-arrow-left"></span> Go Back</button></a>
						</div>
					</div>
				
				</div>
            </div>

</body>
</html>
