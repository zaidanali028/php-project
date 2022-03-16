<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>
<?php
 include 'db-con.php' ;

$res =  $mysqli->query("SELECT * FROM  tut_questions ORDER BY  main_question ASC ") or
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
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Definitions To Your Tutorials</h4>
              <p class="card-description">

              </p>
              <form action="./add-question-ans" method="POST" >

                <div class="form-group">
                  <label for="exampleInputName1">Answer To Add(MCQ)</label>
                  <input type="text" name="answer_txt" class="form-control" id="exampleInputName1" placeholder="A .Java is awesome">
                </div>
               
                <div class="form-group">
                  <div class="form-group">

                    <label for="exampleFormControlSelect1">Select The Associated Question</label>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1" name='question_id'>
<?php        while($row=$res->fetch_assoc()):?>
                  <option value="<?=$row['tut_question_id']?>"><?php echo $row['main_question'];?> </option>
                

                <?php endwhile ?>

?>


                    </select>
                  </div>

                </div>
                <div class="form-group">
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
                <button type="submit" name="sub-ans" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
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