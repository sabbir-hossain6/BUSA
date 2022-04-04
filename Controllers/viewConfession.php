<?php
  include('../Models/session/conn.php');
  $id = $_GET['id'];
  $query=mysqli_query($conn,"SELECT * from confessions where c_id='$id'");
  $confession = mysqli_fetch_array($query);
  $title = "Confession: ". $confession['c_name'] . " | BUSA";

  include('header.php');
 ?>