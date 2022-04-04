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
          include('../Controllers/confessions.php');
         ?>


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item disabled">
            <a class="page-link" href="#">&larr; Newer</a>
          </li>
          <li class="page-item ">
            <a class="page-link" href="#">Older &rarr;</a>
          </li>
        </ul>

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
            Confess someone ?<br>
            <a href="newConfession.php"><button type="button" class="btn btn-info">New Confession</button></a>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->




<?php 
  include('footer.php');
 ?>