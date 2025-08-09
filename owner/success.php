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
$amount = $_GET['amount'];

$upd = "UPDATE students SET status = 'PAID'";
mysqli_query($dbcon,$upd);

 
 $n = 6;
  function getName($n){
    $characters = '0123456789ABCDEFG';
    $randomString = '';
     for($i=0; $i < $n; $i++){
                                $index = rand(0, strlen($characters) - 1);
       $randomString .= $characters[$index];
     }
     return $randomString;
    
  }
  #End of Generating the OTP
 $ref_id = getName($n);


$test = "INSERT INTO payment (name,regno,level, dept,amount,gsm,refid) VALUES ('$name','$regno','$level','$dept','$amount','$gsm','$ref_id')";
if (mysqli_query($dbcon,$test)) {
    echo "<script>window.open('receipt.php','_self')</script>";
}else{
    echo "Error";
}

?>
