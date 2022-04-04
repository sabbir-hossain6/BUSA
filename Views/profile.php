<?php 
$title = "Profile | BUSA";
include('header.php');
 ?>


<h4 style="text-align: center; margin-top: 10px; font-family: 'Cinzel Decorative', cursive;"><?php echo $full_name; ?></h4>
<h3 class="mb-4">Profile</h3>
<?php echo '<img class="profile-full-image col-lg-3 col-md-6 col-sm-7 col-xs-9" src="' . $profile_picture . '">'; ?>

<div class="row" style="margin-top: 15px;">
     <div style="height: 400px; margin-left: auto; margin-right: auto; text-align: center; " class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
          <h3>Student ID: <?php echo $student_id; ?></h3>
          <h4>8th Semester</h4>
          <h5>Bachelor of Computer Science & Engineering</h5>
          <br>
          <h5>Email: <?php echo $email; ?></h5>
          <?php echo '<h4>Birthday: ' . $birthday . '</h4>'; ?>
          <h4><?php echo $sex . ' - ' . $age->format('%y') . ' years'; ?></h4>
          <h4>Address: 289/1, 3A, Gulbagh, Malibagh, Dhaka 1217</h4>

     </div>
</div>

          


<?php 
  include('footer.php');
 ?>


        