/* <?php
$tut_id=$_POST['tut-id'];
include 'db-con.php' ;
$res =  $mysqli->query("SELECT * FROM tut_questions WHERE tut_id='$tut_id'") or
die($mysqli->error);
print_r($res->fetch_assoc());
?> */
