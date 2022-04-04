<!DOCTYPE html>
<html>
<head>
	<title>Signup | BUSA</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="shortcut icon" href="https://www.bracu.ac.bd/sites/default/files/favicon_0.png" type="image/png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+San">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
	[type="date"] {
	  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
	}
	[type="date"]::-webkit-inner-spin-button {
	  display: none;
	}
	[type="date"]::-webkit-calendar-picker-indicator {
	  opacity: 0;
	}



	#signup_form{
		width:350px;
		position:relative;
		margin: auto;
		padding: auto;
		background: rgba(255, 255, 255, 0.3);
		/*box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;*/
		vertical-align: center;
	}
	
	.blurred{
		height: 100%;
		width: 100%;
		position: absolute;
		background-position: center;
		filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
		-webkit-filter:blur(5px);
		-ms-filter: blur(5px);
		-o-filter: blur(5px);
		filter:blur(5px);
		z-index: -4;
	}

	body{
		background-size: auto auto;
		background-position: center;
		overflow-y: scroll;
		}
	html{
		height: 100%;
	}
	.centerCSS{
		min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
	    min-height: 100vh; /* These two lines are counted as one :-)       */

	    display: flex;
	    align-items: center;
	}

	.inputBox{
	    background:rgba(0,0,0,0.3);
	    color:#fff;
	    border:0px;
	    border-radius: 0px;
	}

	.btn-background{
		background:rgba(255,255,255,0.3);
	}


</style>
</head>
<body>
<div class="centerCSS">
<div class="container">
	<div class="row">
		<div id="signup_form" class="wel">
			<div class="blurred"></div>
			<div style="padding: 19px;">
			<h2><center><span class="baaler icon"></span> Sign Up Test</center></h2>
			<hr>
			<form method="POST" action="../Models/session/registerTest.php">
				<div hidden>
					<span>Name: </span><input type="text" name="full-name" class="form-control inputBox" required value="Esfar E Alam" >
					<div style="height: 10px;"></div>
					Student ID: <input type="text" name="student-id" class="form-control inputBox" required value="12345678">
					<div style="height: 10px;"></div>
					Date of birth: <input type="date" name="birthday" class="form-control inputBox" placeholder="dd/mm/yyyy" required value="1990-11-12">
					<div style="height: 10px;"></div>
					Sex: 
					<span style="margin-left: 15px;">
						<label class="radio-inline">
					      <input type="radio" name="sex" value="Male" checked>Male
					    </label>
					    <label class="radio-inline">
					      <input type="radio" name="sex" value="Female">Female
					    </label>
				    </span>			
					<br>
					<hr>
					Email: <input type="text" name="email" class="form-control inputBox" required value="random@bracu.ac.bd">
					<div style="height: 10px;"></div>
					Phone: <input type="text" name="phone" class="form-control inputBox" required value="1233424222">
					<div style="height: 10px;"></div>			
					Password: <input type="password" name="password" class="form-control inputBox" required value="12345"> 
					<div style="height: 10px;"></div>
				</div>
				<button type="submit" class="btn btn-background" style="margin-left: 100px;"><span class="glyphicon glyphicon-save"></span> Sign Up Test</button>
				<br><br>
				
			</form>
			</div>
			<?php
				error_reporting(0);
				session_start();
				if(isset($_SESSION['sign_msg'])){
					?>
					<div style="height: 40px;"></div>
					<div class="alert alert-success">
						<span><center>
						<?php echo $_SESSION['sign_msg'];
							unset($_SESSION['sign_msg']); 
						?>
						</center></span>
					</div>
					<?php
				}
			?>
		</div>	
	</div>
</div>
</div>
</body>
</html>