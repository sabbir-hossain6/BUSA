<?php 
$student_id = '17121812';
$conn = mysqli_connect("localhost","root","","bracu");
    function addToDatabase($receiver, $subject, $content, $img){
    $s_id = $GLOBALS['student_id'] ;
    $sql = "INSERT INTO texts(sender, receiver, seen, archived, deleted, is_important, subject, content, image) 
        VALUES ('$s_id','$receiver','0','0','0','0','$subject','$content','$img')";


    $sendQuery = mysqli_query($GLOBALS['conn'], $sql);

    if ($sendQuery) {
      echo '<div class="alert alert-success">';
        echo "<strong>Success!</strong> Message sent.";
      echo "</div>";
    }
    else{
      echo '<div class="alert alert-danger">';
        echo "<strong>Failed</strong> to sent message. Try again";
      echo "</div>";
    }
  }
    include('../Models/annonymous.php');

    $set='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ';
    $id = '18101514';
	$subject=substr(str_shuffle($set), 0, 20);
	$content=substr(str_shuffle($set), 0, 120);
    sendMessageTest($id, $subject, $content);

 ?>