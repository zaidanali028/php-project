<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>
<?php
session_start(); 
include 'db-con.php' ;

$tut_res =  $mysqli->query("SELECT * FROM  tut_table ") or
  die($mysqli->error);


?>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
        <div class="col-lg-12 grid-margin stretch-card">

          <div class="card">
          <?php if(isset($_SESSION['msg'])): ?>
   
   <div class="alert alert-<?= $_SESSION['msg_type']?> mt-3"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">??</button>
 
 
  <?php echo $_SESSION['msg'];?>
</div>
<?php  unset   ($_SESSION['msg']);?>


   <?php endif ?>
            <div class="card-body">
              <h4 class="card-title">Add Definitions To Your Tutorials</h4>
              <p class="card-description">

              </p>
              <form action="./add-tut-spec" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="exampleInputName1">Main Question</label>
                  <input type="text" name="main-question" class="form-control" id="exampleInputName1" placeholder="Java -1">
                </div>
               
                <div class="form-group">
                  <div class="form-group">

                    <label for="exampleFormControlSelect1">Select The Associated Tutorial</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name='tut-id'>
<?php        while($row=$tut_res->fetch_assoc()):?>
                  <option value="<?=$row['tut_id']?>"><?php echo $row['tut_title'];?> </option>
                <?php endwhile ?>

?>


                    </select>
                  </div>
                </div>
                <button type="submit" name="sub-spec" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
            
          </div>
        </div>
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Questions</h4>
                  <p class="card-description">
                    Edit or <code>Delete</code> Questions from this table
                  </p>
                  <div class="table-tut_responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                           Question
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                   $tut_res=   $mysqli->query('SELECT * FROM tut_questions ORDER BY main_question DESC;');
                   while ($row=$tut_res->fetch_assoc()):?>
                            <?php $qst_id=$row['tut_question_id'];?>

                      <tr>
                          <td>
                           <?=$qst_id?>
                          </td>
                          <td>
                          <?=$row['main_question']?>

                          </td>
                          <td>
                          <a href="<?="./edit-qst?q_id=$qst_id"?>" class="btn btn-warning">Edit</a>
                          </td>
                          <td>
                          <a href="<?="./delete-qst?q_id=$qst_id"?>" class="btn btn-danger">Delete</a>

                          </td>
                        </tr>
                      <?php endwhile?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          
         
        </div>
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
        
      </div>
      
      <!-- main-panel ends -->
      
    </div>
    <!-- page-body-wrapper ends -->
    
    <?php include 'views/partials/admin/footer.php' ?>

  </div>
  <!-- container-scroller -->
  <?php include 'views/partials/admin/scripts.php' ?>

</body>

</html>