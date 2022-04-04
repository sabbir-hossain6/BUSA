<?php 
	$f_name = "";
	$l_name = "";
	$c_id = "";
	$m_id = $userid;
	$c_header = "";
	$c_desc = "";
	$c_clue = "";
	$c_gender = "";
	$c_dept = "";
	$c_img = "";
	$c_name = "";


	if (isset($_POST['confess'])) {
		addConfession();
	}

	function addConfession(){
		$target = "confessions/".basename($_FILES['input_pic']['name']);
		$f_name = $_POST['input_fname'];
		$l_name = $_POST['input_lname'];
		$c_id = $_POST['input_sid'];
		$c_header = $_POST['input_header'];
		$c_desc = $_POST['input_desc'];
		$c_clue = $_POST['input_clue'];
		$c_gender = $_POST['input_gender'];
		$c_dept = $_POST['input_dept'];
		$c_img = $_FILES['input_pic']['name'];

		$name = $f_name . ' ' . $l_name;

		if (move_uploaded_file($_FILES['input_pic']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There is an error uploading the image";
		}

		addToDatabase($name, $c_id, $c_header, $c_desc, $c_clue, $c_gender, $c_dept, $c_img);

		echo '<div class="alert alert-success">';
  		echo $msg;
		echo "</div>";
	}



 ?>