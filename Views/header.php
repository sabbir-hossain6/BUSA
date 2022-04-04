<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="https://www.bracu.ac.bd/sites/default/files/favicon_0.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="scss/style.scss">
<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  -->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<?php 
      include('../Controllers/userDetails.php');
     ?>


		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="sticks">
  	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
  	  			<div class="user-logo">
  	  				<div class="img" style="background-image: url(<?php echo $profile_picture; ?>);"></div>
  	  				<h3><?php echo $full_name; ?></h3>
  	  			</div>
  	  		</div>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
              <a href="anonymous.php?folder=inbox"><span class="fas fa-envelope mr-3 notif"><small class="d-flex align-items-center justify-content-center">0</small></span> Anonymous Message</a>
            </li>
            <li>
              <a href="confessions.php"><span class="fas fa-dove mr-3"></span> Confessions</a>
            </li>
            <li>
              <a href="#"><span class="fas fa-image mr-3"></span> RS Memories <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-chalkboard-teacher mr-3"></span> Faculty & Review <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-sync-alt mr-3"></span> Lost & Found <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-newspaper mr-3"></span> Notice Board <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-book-dead mr-3"></span> Course Materials <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-bus mr-3"></span> Bus Route <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-hotel mr-3"></span> To-lets Finder <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-user-friends mr-3"></span> Travel Mate Finder <small>(Upcoming)</small></a>
            </li>
            <li>
              <a href="#"><span class="fas fa-heart mr-3"></span> Matchmaking <small>(Upcoming)</small></a>
            </li>
          </ul>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-4">

        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-dark">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>

            <div class="logo-navbar-middle">
              <h2 style="font-family: 'Cinzel Decorative', cursive;">BUSA</h2>
            </div>
            

            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto text-right">
                <?php if ($title == "Home - BUSA") {
                            echo '<li class="nav-item active">
                              <a class="nav-link" href="index.php">Home</a>
                          </li>';
                      }
                      else{
                        echo '<li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>';
                      }
                      if ($title == "Profile - BUSA") {
                          echo '<li class="nav-item active">
                              <a class="nav-link" href="profile.php">Profile</a>
                          </li>';
                      }
                      else{
                        echo '<li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>';
                      }
                ?>
                
                <li class="nav-item">
                    <a class="nav-link" href="../Models/session/logout.php">Log out</a>
                </li>
              </ul>
            </div>
            <div class="the-blur"></div>
          </div>
        </nav>
        <section class="">