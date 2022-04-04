<?php
    include('../Models/session/conn.php');
    $full_name = "Null";
    session_start();
    if (!isset($_SESSION['id'])) {
      header('location:login.php');
    }
    else{
      $full_name = $_SESSION['full_name'];
      $student_id = $_SESSION['student_id'];
      $userid = $_SESSION['id'];
    }

    $query=mysqli_query($conn,"select * from user where student_id='$student_id' and userid='$userid'");
    $row=mysqli_fetch_array($query);

    $phone=$row['phone'];
    $birthday=$row['birthday'];
    $today = date("Y-m-d");
    $age = date_diff(date_create($birthday), date_create($today));
    //echo 'Age is '.$age->format('%y');

    $sex=$row['sex'];
    $email=$row['email'];
    $p_photo=$row['p_photo'];

    $query=mysqli_query($conn,"select * from photos where id='$p_photo'");
    $row = mysqli_fetch_array($query);
    $profile_picture = $row['url'];
 ?>