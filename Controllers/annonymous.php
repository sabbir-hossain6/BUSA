<?php 
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
 ?>


<?php
    $count = 0;
    $texts = array();
    if ($mode == "list") {
      if ($currentPage == "inbox") {
        $query = "SELECT * from texts WHERE receiver = '$student_id' ORDER BY t_time desc";
      }
      else if ($currentPage == "sent") {
        $query = "SELECT * from texts WHERE sender = '$student_id' ORDER BY t_time desc";
      }
      else if ($currentPage == "trash") {
        $query = "SELECT * from texts WHERE receiver = '$student_id' AND deleted = '1' ORDER BY t_time desc";
      }
      else if ($currentPage == "archived") {
        $query = "SELECT * from texts WHERE receiver = '$student_id' AND archived = '1' ORDER BY t_time desc";
      }
      else{
        $query = "SELECT * from texts WHERE receiver = '$student_id' ORDER BY t_time desc";
      }

      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $t_id = $row["t_id"];
        $t_time = $row["t_time"];
        $t_seen = $row["seen"];
        $t_important = $row["is_important"];
        $t_subject = $row["subject"];
        $t_content = $row["content"];
        $t_img = $row["image"];

        $texts[$count] = array(
          "count" => $count,
          "t_id" => $t_id,
          "t_time" => $t_time,
          "t_seen" => $t_seen,
          "t_important" => $t_important,
          "t_subject" => $t_subject,
          "t_content" => $t_content,
          "t_img" => $t_img
        );
        $count = $count + 1;
      }
    }
    else if ($mode == "thread") {
      $query = "SELECT * from texts WHERE t_id = '$thread_id' AND (sender  = '$student_id' OR receiver = '$student_id')";
      $result = mysqli_query($conn, $query);

      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $t_id = $row["t_id"];
      $t_time = $row["t_time"];
      $t_seen = $row["seen"];
      $t_important = $row["is_important"];
      $t_subject = $row["subject"];
      $t_content = $row["content"];
      $t_img = $row["image"];

      if ($t_img == null) {
        $file_cnt = 0;
      }
      else{
        $file_cnt = 1;
      }

      if (mysqli_num_rows($result) == 0) {
        $t_subject = "Access denied!";
      }

    }
    
    

 ?>