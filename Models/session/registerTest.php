<?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function check_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}

		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$email = substr(str_shuffle($set), 0, 15);
		$email = $email . "@bracu.ac.bd";
		//$email=check_input($_POST['email']);
		$password=md5(check_input($_POST['password']));

		$full_name = check_input($_POST['full-name']);
		//$student_id = check_input($_POST['student-id']);
		$set='123456789';
		$student_id = substr(str_shuffle($set), 0, 8);
		$dob = check_input($_POST['birthday']);
		$phone = check_input($_POST['phone']);
		$sex = check_input($_POST['sex']);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  		$_SESSION['sign_msg'] = "Invalid email format";
	  		header('location:../../Tests/signupTest.php');
		}

		else{

			$query=mysqli_query($conn,"select * from user where email='$email'");
			$query2=mysqli_query($conn,"select * from user where student_id='$student_id'");
			if(mysqli_num_rows($query)>0){
				$_SESSION['sign_msg'] = "Email already taken";
	  			header('location:../../Tests/signupTest.php');
			}
			elseif (mysqli_num_rows($query2)>0) {
				$_SESSION['sign_msg'] = "Student ID already registered";
	  			header('location:../../Tests/signupTest.php');
			}
			else{
				//depends on how you set your verification code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);
				

				$runQuery = mysqli_query($conn,"insert into user (email, password, code, full_name, student_id, phone, birthday, sex, verify) values
				 ('$email', '$password', '$code', '$full_name', '$student_id', '$phone', '$dob', '$sex', '1')");
				if ($runQuery) {
					$msg = "Registration successful ";
				}
				else{
					$msg = "Registration failed ";
				}
				$uid=mysqli_insert_id($conn);
				//default value for our verify is 0, means it is unverified

				//sending email verification
				$to = $email;
				$subject = "Sign Up Verification Code";
				$message = "
					<html>
					<head>
					<title>Verification Code</title>
					</head>
					<body>
					<h2>Thank you for Registering.</h2>
					<p>Your Account:</p>
					<p>Email: ".$email."</p>
					<p>Password: ".$_POST['password']."</p>
					<p>Please click the link below to activate your account.</p>
					<h4><a href='http://bracu.xyz/session/activate.php?uid=$uid&code=$code'>Activate My Account</h4>
					</body>
					</html>
					";
				//dont forget to include content-type on header if your sending html
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "From: support@bracu.xyz". "\r\n" .
							"CC: support@bracu.xyz";

				$mailSent = mail($to,$subject,$message,$headers);	

				if ($mailSent) {
					$msg = $msg . "& Test Passed.";
				}

				$_SESSION['sign_msg'] = $msg;
		  		header('location:../../Tests/signupTest.php');

	  		}
		}
	}
?>