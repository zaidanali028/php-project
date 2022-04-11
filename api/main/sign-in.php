<?php

include 'db-con.php';
include_once 'api/global_functions.php';


if (isset($_POST['subup'])) {
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];


    if (!empty($admin_name) && !is_numeric($admin_name) && !empty($admin_pass)) {
        $res =  $mysqli->query("SELECT * FROM admins WHERE admin_name='$admin_name' LIMIT 1") or
            die($mysqli->error);
        if ($res) {
            if ($res && mysqli_num_rows($res) > 0) {
                $user_data = $res->fetch_assoc();
                

                // verifying user's password is correct after decryption
                $is_correct = password_verify($admin_pass, $user_data['admin_password']);

                if ($is_correct==1) {
                    $_SESSION['admin_id'] = $user_data['admin_id'];

                    header("Location: ./admin");
                } else {
                }
            }
        }
    } else {

        echo "Empty details";
    }
}
