<?php 
	function addToDatabase($name, $c_id, $c_header, $c_desc, $c_clue, $c_gender, $c_dept, $c_img){
		$s_id = $GLOBALS['student_id'] ;
		$sql = "INSERT INTO confessions(posted_by, c_name, c_dept, c_gender, c_heading, c_description, c_clue, c_student_id, c_img) 
				VALUES ('$s_id','$name','$c_dept','$c_gender','$c_header','$c_desc','$c_clue','$c_id','$c_img')";


		$addQuery = mysqli_query($GLOBALS['conn'], $sql);

		if ($addQuery) {
			echo '<div class="alert alert-success">';
  			echo "<strong>Success!</strong> Confession added.";
			echo "</div>";
			echo '<div class="alert alert-success">';
  			echo "Add another confession";
			echo "</div>";
		}
		else{
			echo '<div class="alert alert-danger">';
  			echo "<strong>Failed!</strong> Confession not added. Try again";
			echo "</div>";
		}
	}
 ?>