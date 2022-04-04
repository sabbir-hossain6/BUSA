<?php 
  $title = "Confessions | BUSA";
  include('header.php');
 ?>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">BRACU
          <small>Crushes & Confessions</small>
        </h1>

        <?php 
          include('../Controllers/newConfession.php');
          include('../Models/newConfession.php');
          
         ?>


      <form class="was-validated" method="post" action="newConfession.php" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control" id="validationTextarea" placeholder="First name" name="input_fname" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefault02">Last name</label>
            <input type="text" class="form-control" id="validationTextarea" placeholder="Last name" name="input_lname" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Student ID</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2">ID</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" name="input_sid"
               placeholder="Username" aria-describedby="inputGroupPrepend2" value="00000000">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="validationTextarea">Conferssion Header</label>
          <input type="text" name="input_header" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required>
          <div class="invalid-feedback">
            Please enter a confession title here.
          </div>
        </div>

        <div class="mb-3">
          <label for="validationTextarea">Confession Description</label>
          <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="input_desc" required></textarea>
          <div class="invalid-feedback">
            Please enter a message in the description.
          </div>
        </div>

        <div class="mb-3">
          <label for="validationTextarea">Confession Clue</label>
          <input type="text" name="input_clue" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="input_clue" required>
          <div class="invalid-feedback">
            Please enter a clue about yourself.
          </div>
        </div>

        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="customControlValidation2" name="input_gender" value="Male" required>
          <label class="custom-control-label" for="customControlValidation2">Male</label>
        </div>
        <div class="custom-control custom-radio mb-3">
          <input type="radio" class="custom-control-input" id="customControlValidation3" name="input_gender" value="Female" required>
          <label class="custom-control-label" for="customControlValidation3">Female</label>
          <div class="invalid-feedback">Select Gender</div>
        </div>

        <div class="form-group">
          <select class="custom-select" required name="input_dept">
            <option value="">Select Department</option>
            <option value="CS">CS</option>
            <option value="CSE">CSE</option>
            <option value="BBS">BBS</option>
            <option value="ENH">ENH</option>
            <option value="LLB">LLB</option>
            <option value="EEE">EEE</option>
            <option value="MNS">MNS</option>
          </select>
          <div class="invalid-feedback">Select proper Department from the dropdown</div>
        </div>

        <div class="custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" required name="input_pic">
          <label class="custom-file-label" for="validatedCustomFile">Choose Picture...</label>
          <div class="invalid-feedback">Select an image</div>
        </div>

         <button class="btn btn-success" type="submit" name="confess" style="margin-top: 20px;">Confess</button>
      </form>






      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." style="border: 1px solid black; margin-right: 5px;">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Newest first</a>
                  </li>
                  <li>
                    <a href="#">Male Only</a>
                  </li>
                  <li>
                    <a href="#">Female Only</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">CSE/CS</a>
                  </li>
                  <li>
                    <a href="#">BBA</a>
                  </li>
                  <li>
                    <a href="#">Other Dept.</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->
    <style type="text/css">
      .form-control{
        border: 2px solid red;
      }
    </style>




<?php 
  include('footer.php');
 ?>