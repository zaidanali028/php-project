<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>
<?php session_start(); ?>

<?php
include 'db-con.php';

$qst_id = isset($_POST['question_id']) ? $_POST['question_id'] : "";
$ans_4_question =  $mysqli->query("SELECT * FROM  tut_questions    WHERE tut_question_id='$qst_id'   ") or
  die($mysqli->error);

  $question=$ans_4_question->fetch_assoc()['main_question'];

$ans_4_question =  $mysqli->query("SELECT * FROM  answers    WHERE tut_question_id='$qst_id'   ") or
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
            <?php if (isset($_SESSION['msg'])) : ?>

              <div class="alert alert-<?= $_SESSION['msg_type'] ?> mt-3"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">??</button>


                <?php echo $_SESSION['msg']; ?>
              </div>
              <!-- <?php unset($_SESSION['msg']); ?> -->


            <?php endif ?>
            <div class="card-body">
              <h4 class="card-title">Modify Answer(s) For [<?=$question?>]</h4>
              <p class="card-description">

              </p>
              <form action="./update-answers" method="POST">
                <input type="hidden" name="qst" value="<?=$qst_id?>">
               <?php $index = 0;?>

                <?php while($row=$ans_4_question->fetch_assoc()): ?>
                  <div class="form-group">

<label for="exampleFormControlSelect1">Select The Associated Question</label>
<div class="form-group">
  <label for="exampleInputName1"><?=$row['answer_txt']?></label>
  <?php $ans_txt="answer_text"."-".$row['answer_id'];?>
  <input type="text" class="form-control" id="exampleInputName1" placeholder="<?=$row['answer_txt']?>" name="<?=$ans_txt?>" value="">
  <input type="hidden" class="form-control" id="exampleInputName1" placeholder="<?=$row['answer_id']?>" name="<?=$row['answer_id']?>" value="<?=$row['answer_id']?>">

</div>

<?php $index ++;?>
               
<?php endwhile ?>




            

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