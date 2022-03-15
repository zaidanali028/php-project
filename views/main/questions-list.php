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
<!-- Nav partial -->
<?php include 'views/partials/main/navbar.php' ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>All Tutotial Questions</h1>
     </div>
     <div class="row">
        
<?php        while($row=$res->fetch_assoc()):?>
    <div class="col-md-12">

<div class="card">
<div class="btn  mt-4 " style="color:white;background-color: purple;"><?=$row['tut_title']?> Questions</div>

</div>              
         </div>

                <?php endwhile ?>
     </div>
    </div>
<!-- </div> -->

<script src="public/js/nav.js"></script>
</body>

</html