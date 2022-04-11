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
            <?php if(isset($_SESSION['msg'])): ?>
   
   <div class="alert alert-<?= $_SESSION['msg_type']?> mt-3"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
 
 
  <?php echo $_SESSION['msg'];?>
</div>
<!-- <?php  unset   ($_SESSION['msg']);?> -->


   <?php endif ?>
           
            </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Current Comments</h4>
                  <p class="card-description">
                    Edit or <code>Delete</code> Questions from this table
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                           Comments
                          </th>
                          <th>
                            Approval Status
                          </th>
                          <th>
                            Approval Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                   $res=   $mysqli->query('SELECT * FROM comments');
                   while ($row=$res->fetch_assoc()):?>
                            <?php $cmt_id=$row['comment_id'];?>

                      <tr>
                          <td>
                           <?=$cmt_id?>
                          </td>
                          <td>
                          <?=$row['message']?>

                          </td>
                          <td>
                          <a href="" class="btn disabled btn-warning"><?=$row['is_pending']==1?"PENDING APPROVAL":"APPROVED"?></a>
                          </td>
                          <td>
                          <a href="<?="./change-cmt-state?cmt_id=$cmt_id"?>" class="btn btn-primary"><?=$row['is_pending']==1?"CLICK TO APPROVE":"CLICK TO DISAPPROVE"?></a>

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