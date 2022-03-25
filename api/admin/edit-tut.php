<!-- edit -->
<?php 
session_start();
$tut_id=isset( $_POST['tut_id'])? $_POST['tut_id']:"";
$tut_title=isset( $_POST['title'])? $_POST['title']:"";

include 'db-con.php' ;
$res =  $mysqli->query("UPDATE tut_table SET tut_title='$tut_title' WHERE tut_id='$tut_id'  ") or
die($mysqli->error);


$_SESSION['msg_type'] = "success";
$_SESSION['msg'] = "Update done successfully";

header("location: ./add");



?>