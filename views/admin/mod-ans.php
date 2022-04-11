<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>
<?php session_start(); ?>

<?php
 include 'db-con.php' ;
 $tut_id=$_POST['tut-id'];


$questions =  $mysqli->query("SELECT * FROM  tut_questions WHERE tut_id='$tut_id' ORDER BY  main_question DESC ") or
  die($mysqli->error);

   
  $ans =  $mysqli->query("SELECT * FROM  answers") or
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
        <?php if(isset($_SESSION['msg'])): ?>
   
   <div class="alert alert-<?= $_SESSION['msg_type']?> mt-3"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
 
 
  <?php echo $_SESSION['msg'];?>
</div>
<!-- <?php  unset   ($_SESSION['msg']);?> -->


   <?php endif ?>
          <div class="card">
        
            <div class="card-body">
              <h4 class="card-title">Modify Answers For Specific Questions</h4>
              <p class="card-description">

              </p>
              <form action="./get-qst-ans" method="POST" >

               
               
                <div class="form-group">
                  <div class="form-group">

                    <label for="exampleFormControlSelect1">Select The Associated Question</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name='question_id'>
<?php        while($row=$questions->fetch_assoc()):?>
                  <option value="<?=$row['tut_question_id']?>"><?php echo $row['main_question'];?> </option>
                

                <?php endwhile ?>

?>


                    </select>
                  </div>

                </div>
             
                <button type="submit" name="sub-ans" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
          <br>
          <div class="card">
                      <div class="card-body">
              <h4 class="card-title">Change an Option's correctness</h4>
              <p class="card-description">

              </p>
              <form action="./opt-update" method="POST">

               
               
              <div class="form-group">

<label for="exampleFormControlSelect1">Select The Associated Question</label>
<select class="form-control form-control-lg" id="exampleFormControlSelect1" name="answer_id">
<?php        while($row=$ans->fetch_assoc()):?>
                  <option value="<?=$row['answer_id']?>"><?php echo $row['answer_txt'];?> </option>
                

                <?php endwhile ?>







</select>
</div>
<div class="form-group ">
                    <div class="row ml-2">
                    <label for="">Is the answer correct?</label>

                    </div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-success">
                        <input type="radio" name="is_correct" value="true">
                        Yes
                      </label>
                      <label class="btn btn-outline-success">
                        <input type="radio" name="is_correct" value="false">
                        Wrong Answer
                      </label>
                    </div>
                </div>
                <button type="submit" name="sub-opt" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </div>
 
                  </div>
                  
                 
                
             
              
              </form>
            </div>
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