<?php
session_start();
include 'db_connection.php';

error_reporting(0);



if (isset($_POST['login'])) {
  
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];

  
       $check_user = "SELECT * FROM backend WHERE uname = '$uname' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
        $_SESSION['uname'] = $uname;
          echo "<script>window.open('backend/dashboard.php?msg=success','_self')</script>";
        }else{
         echo "<script>window.open('login.php?msg=error','_self')</script>";
      } 
}


if (isset($_POST['owner'])) {

      $email = $_POST['email'];
      $pword = $_POST['pword'];

 
       $check_user = "SELECT * FROM shopowners WHERE email = '$email' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
            $_SESSION['email'] = $email;
          header("Location: owner/index.php?msg=success");
          exit();

        }else{
          echo "<script>window.open('login.php?msg=error','_self')</script>";
      } 
    }




if (isset($_POST['generate'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $gsm = $_POST['gsm'];
  $pword = $_POST['pword'];
  $shopnumber = $_POST['shopnumber'];
  $insert = "INSERT INTO shopOwners (name, email, gsm, pword, shopnumber) VALUES ('$name','$email','$gsm','$pword','$shopnumber')";
  if (mysqli_query($dbcon,$insert)) {
    echo "<script>window.open('register.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('register.php?msg=error','_self')</script>";
  }
}



if (isset($_POST['change'])) {
  $tax = $_POST['tax'];


  $sql =  "UPDATE tax SET tax = '$tax'";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('change.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('change.php?msg=error','_self')</script>";
  }
}


if (isset($_POST['del_ques'])) {
  $id = $_POST['id'];


  $sql =  "DELETE FROM question WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view_exam.php?msg=dsuccess','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view_exam.php?msg=derror','_self')</script>";
  }
}



?>
