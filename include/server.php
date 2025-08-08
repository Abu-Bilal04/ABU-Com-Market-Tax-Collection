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
          echo "<script>window.open('backend/index.php?msg=success','_self')</script>";
        }else{
         echo "<script>window.open('index.php?msg=error','_self')</script>";
      } 
}





if (isset($_POST['generate'])) {

  $name = $_POST['name'];
  $regno = $_POST['regno'];
  $gsm = $_POST['gsm'];
  $level = $_POST['level'];
  $dept = $_POST['dept'];
  $pword = $_POST['pword'];
$email = $_POST['email'];
  $insert = "INSERT INTO students (name, regno, gsm, level, dept, pword,email) VALUES ('$name','$regno','$gsm','$level','$dept','$pword','$email')";
  if (mysqli_query($dbcon,$insert)) {
    echo "<script>window.open('register.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('register.php?msg=error','_self')</script>";
  }
}



if (isset($_POST['del_plate'])) {
  $id = $_POST['id'];


  $sql =  "DELETE FROM drugs WHERE id = '$id' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('view.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('view.php?msg=error','_self')</script>";
  }
}



if (isset($_POST['change'])) {
  $dept = $_POST['dept'];
  $level = $_POST['level'];
  $newfee = $_POST['newfee'];


  $sql =  "UPDATE fee SET fee = '$newfee' WHERE dept = '$dept' AND level = '$level' ";
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
