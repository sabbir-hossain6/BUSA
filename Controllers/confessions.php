<?php 
    function get_list_view_html($count,$confession){
      $output = '<div class="card mb-4">
                  <img class="card-img-top" src="confessions/'. $confession["c_img"] .'" alt="Confession Photo" style="height: 300px; object-fit: cover; object-position: 50% 20%;">
                  <div class="card-body">
                    <h2 class="card-title">'. $confession["c_name"] .'</h2>
                    <p class="card-text">'. $confession["c_heading"] .'</p>
                    <a href="viewConfession.php?id='. $confession["c_id"] .'" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                    Posted on '. $confession["c_date"] .'
                  </div>
                </div>';
      return $output;
    }


    $count = 0;
    $confessions = array();
    $query = "SELECT * from confessions";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $c_id = $row["c_id"];
      $posted_by = $row["posted_by"];
      $c_name = $row["c_name"];
      $c_dept = $row["c_dept"];
      $c_gender = $row["c_gender"];
      $c_date = $row["c_date"];
      $c_heading = $row["c_heading"];
      $c_description = $row["c_description"];
      $c_clue = $row["c_clue"];
      $c_student_id = $row["c_student_id"];
      $c_img = $row["c_img"];

      $confessions[$count] = array(
        "count" => $count,
        "c_id" => $c_id,
        "posted_by" => $posted_by,
        "c_name" => $c_name,
        "c_dept" => $c_dept,
        "c_gender" => $c_gender,
        "c_date" => $c_date,
        "c_heading" => $c_heading,
        "c_description" => $c_description,
        "c_clue" => $c_clue,
        "c_student_id" => $c_student_id,
        "c_img" => $c_img
      );
      $count = $count + 1;
    }



    foreach ($confessions as $count => $confession) {         
      echo get_list_view_html($count,$confession);
    } ;
  ?>