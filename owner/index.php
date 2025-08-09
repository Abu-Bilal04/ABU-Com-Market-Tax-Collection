<?php 

include "../include/server.php";

$regno = $_SESSION['regno'];
if ($regno == "") {
    header('Location: ../index.php');
}


$sql = "SELECT * FROM students WHERE regno = '$regno' LIMIT 1";
$run = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($run);
$name = $row['name'];
$gsm = $row['gsm'];
$level = $row['level'];
$dept = $row['dept'];
$status = $row['status'];
$email = $row['email'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rentee Dashboard</title>
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
                                <h6><?php echo ucwords($name); ?></h6>
                                <p style="color:#fff;font-size: 10px;"></p>
                            </div>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li><a href="dashboard.php" class="active"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                                
                                <li><a href="../index.php"><span class="fa fa-sign-out"></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="main">
                       <h6><span class="fa fa-dashboard"></span> Rentee Dashboard</h6>
                    <br>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="box shadow">
                                
                               
                                <h5>Amount to Pay</h5>
                                <h4>
                                    <?php 

                                    $sql = "SELECT * FROM fee WHERE dept = '$dept' AND level = '$level'";
                                    $run = mysqli_query($dbcon,$sql);
                                    $row = mysqli_fetch_assoc($run);

                                    $first = $row['fee'];

                                    echo "&#8358;".number_format($first);

                                ?>         
                                </h4>
                                <?php

                                        if ($status == "") {
                                            ?>
                                            <input type="hidden" id="amount" value="<?php echo $first; ?>">
                                            <input type="hidden" id="name" value="<?php echo $name; ?>">
                                            <input type="hidden" id="email" value="<?php echo $email ?>">
                                                <h6 style="color: orange;font-family: Bold;">Not Paid</h6>
                                                                    <form id="paymentForm">

                                               <button class="btn btn-warning" style="background-color:orange !important;" onclick="payWithPaystack()" >Click here to pay</button>
                                           </form>
                                            <?php

                                        }else{
                                            ?>
                                                 <h6 style="color: orange;font-family: Bold;"> Paid</h6>
                                                <a href="receipt.php"><button class="btn btn-warning" style="background-color:orange !important;">Print Receipt</button></a>
                                            <?php
                                        }

                                     ?>
                            </div>
                        </div>
                        

                    </div>
                   

                </div>

                </div>

                
            </div>
        </div>


  

<script src="https://js.paystack.co/v1/inline.js"></script> 

<script type="text/javascript">
    


    const paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {

  e.preventDefault();

    var amount =  document.getElementById("amount").value;
    var ref = Math.floor((Math.random() * 1000000000) + 1);

  let handler = PaystackPop.setup({

    key: 'pk_test_b9deab98fdba3dd1e5dfdc51fa4631ef28e12b30', // Replace with your public key

    email: document.getElementById("email").value,
    amount: amount * 100,

   

    onClose: function(){

      alert('Window closed.');

    },

    callback: function(response){
        alert('Payment Made Successfully');
        window.open('success.php?amount='+amount,'_self');

    }

  });

  handler.openIframe();

}


</script>
</body>
</html>