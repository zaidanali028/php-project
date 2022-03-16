<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>


<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php session_start(); ?>
    <?php include 'views/partials/admin/navbar.php' ?>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-delete-outline"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>
            Light
          </div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>
            Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles primary"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default border"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <!-- sidebar  here-->
      <?php include 'views/partials/admin/sidebar.php' ?>


      <!-- partial -->
      <div class="main-panel">


        <div class="content-wrapper">
     
     

   
          
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
                <h4 class="card-title">Add A Tutorial Name To The System</h4>
                <p class="card-description">
                 This helps identify each course uniquely from the others
                </p>

        
                <?php
                 include 'db-con.php' ;


                ?>
                <!-- <form class="forms-sample"> -->
                  <form action="./add-tut" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Tutorial Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Programming with PHP">
                    </div>

                    <button name='sub-tut' type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>

                  </form>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-12">
          <?php if(isset($_SESSION['message'])): ?>
   
   <div class="alert alert-success">
 
 
  <?php echo $_SESSION['message'];?>
</div>
<?php  unset   ($_SESSION['message']);?>

 </div>
   <?php endif ?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'views/partials/admin/footer.php' ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php include 'views/partials/admin/scripts.php' ?>

</body>

</html>