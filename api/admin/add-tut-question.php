<?php
session_start();
// start a session


include 'db-con.php';

if (isset($_POST['sub-tut'])) {
  $tut_title = $_POST['title'];
  $res =  $mysqli->query("INSERT INTO tut_table (tut_title)  VALUES('$tut_title') ") or
    die($mysqli->error);
  //   insert a course

  if ($res == 1) {




      $_SESSION['msg_type'] = "success";
    $_SESSION['msg'] = "A tutorial witht the name $tut_title   has been successfully created";

    // echo $_SESSION['msg'];

    // redirection after successful tutorial registeration
    header("location: ./add");
  } else {
    // it failed
  }
}
