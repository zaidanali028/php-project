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

<div class="nav-content">
<?php include 'views/partials/main/navbar.php' ?>

</div>
<script>
  function redirectToQuestions(tut_id){
    // alert (tut_id)
    window.location.href="./tutorial-question?tutorial-id="+tut_id
  }
  </script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h6>All Tutotral Questions</h1>
     </div>
     <div class="row">
        
<?php        while($row=$res->fetch_assoc()):?>
    <div class="col-md-12">

<div class="card">
<div onclick="redirectToQuestions(<?=$row['tut_id']?> )" class="btn  mt-4 " style="color:white;background-color: greenyellow;color:black"><?=$row['tut_title']?> Questions</div>

</div>              
         </div>

                <?php endwhile ?>
     </div>
    </div>
</div>

<script src="public/js/nav.js"></script>
<?php include 'views/partials/main/footer.php' ?>

</body>

</html