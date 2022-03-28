<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include 'views/partials/main/head.php' ?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'learning_spy')  or die(mysqli_error($mysqli));
$res =  $mysqli->query("SELECT * FROM  tut_table ") or
  die($mysqli->error);


?>

<body>
<?php include  'views/partials/main/modal.php' ?>

<div class="main-section">
<div class="nav-content">
<?php include 'views/partials/main/navbar.php' ?>

</div>
<script>
  function redirectToQuestions(tut_id){
    // alert (tut_id)
    window.location.href="./tutorial-question?tutorial-id="+tut_id
  }
  </script>

<div class="container  mt-5">
    
     <div class="row">
        
<?php        while($row=$res->fetch_assoc()):?>
    <div class="col-md-12">

<div class="tut-intro mt-5">
<div onclick="redirectToQuestions(<?=$row['tut_id']?> )" class="  mt-4 " >Click To View <?=$row['tut_title']?> Questions</div>

</div>              
         </div>

                <?php endwhile ?>
     </div>
    </div>
</div>
<div class="tut-footer" style=" transform:translateY(300px);">
<?php include 'views/partials/main/footer.php' ?>

</div>

<script src="public/js/nav.js"></script>
</div>
</body>

</html