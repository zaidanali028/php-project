<?php 
session_start();
// start a session

// $mysqli=new mysqli('localhost','root','','learning_spy')  or die(mysqli_error($mysqli));
include 'db-con.php' ;

if(isset($_POST['sub-tut'])){
    $tut_title=$_POST['title'];
  $res=  $mysqli->query("INSERT INTO tut_table (tut_title)  VALUES('$tut_title') ") or
      die($mysqli->error);
    //   insert a course
      
if($res==1){
  $res=  $mysqli->query("UPDATE  tut_table SET   tut_slug='' " ) or



    
$_SESSION['message']="A tutorial witht the name  $tut_title has been successfully created";
$_SESSION['msg_type']="success";

// redirection after successful tutorial registeration
header("location: ./add");



}else{
    // it failed
}
} 
