<?php
include 'db-con.php';
include 'api/global_functions.php';


if (isset($_POST['subup'])) {
    $admin_name = $_POST['admin_name'];
    // auto-hashing user pass before seinding it into db
    $admin_pass = password_hash($_POST['admin_pass'],PASSWORD_DEFAULT);
   $admin_id =$admin_name."-".auto_id(7);

    if (!empty($admin_name) && !is_numeric($admin_name) && !empty($admin_pass)) {
        $r =  $mysqli->query("INSERT INTO admins(admin_id,admin_name,admin_password) VALUES('$admin_id','$admin_name','$admin_pass') ") or
            die($mysqli->error);
    } else {

        echo "Empty details";
    }
}
