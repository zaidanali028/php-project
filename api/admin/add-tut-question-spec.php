<?php 
$mysqli=new mysqli('localhost','root','','learning_spy')  or die(mysqli_error($mysqli));



if (isset($_POST["sub-spec"])){
  $main_question=$_POST['main-question'];
  $tut_id=$_POST['tut-id'];

$res=  $mysqli->query("INSERT INTO tut_questions (tut_id,main_question)  VALUES('$tut_id','$main_question') ") or
die($mysqli->error);

if($res==1){
  header("location: ./add-tut-data");

}

}
?>