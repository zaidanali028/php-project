<?php
session_start();

include_once 'db-con.php';
function check_is_loggedIn()
{

    if (isset($_SESSION['admin_id'])) {
        $admin_id = $_SESSION['admin_id'];
        global $mysqli;
        $res =  $mysqli->query("SELECT * FROM  admins WHERE admin_id='$admin_id'") or
            die($mysqli->error);
        if ($res && mysqli_num_rows($res) > 0) {
            $user_data = $res->fetch_assoc();
            return array("user_data" => $user_data, "is_loggedIn" => true);
        }
    } else {
        return array("user_data" => "", "is_loggedIn" => false);
    }
}


function auto_id($length)
{

    $text = "";
    $length < 5 ? $length = 5 : $length;
    //  if length passed to this function <5,it will default to 5 or else,the length given
    $length = rand(4, $length);
    // randomize between 4 to length
    // 
    for ($i = 0; $i < $length; $i++) {
        // use new length and generate a number between 0 to 9
        $text = $text . rand(0, 9);
    }
    return $text;
}


// prevents unauthorized users from accessing any admin routes
function ensure_auth_middleware($auth_path)
{
    global $mysqli;

    $checkLogin = check_is_loggedIn($mysqli);
    $login_state = $checkLogin['is_loggedIn'];
    if ($login_state == 1) {

        return $auth_path;
    } else {
        // kvngthr!v3

        return   __DIR__ . '../admin/redirect-home.php';
    }
}


// validations
// checks if strings aint empty
function stringValidator($input_list,$redirect_path)
{
    // input_list->list of POST variables to validate
    // redirect_path->path to show errors

    $errors = [];
    foreach ($input_list as $input) {
        if (empty($input['input_data'])) {
            $input_identifier = $input['identifier'];
            array_push($errors, "The " . $input_identifier . " field is required");
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: $redirect_path");
}

// checks if a list of inputs are set

function checkIsSet($input_list)
{
$notSetCount=0;
    foreach ($input_list as $input) {
        if (!empty($input)) {
           continue;
        } else {
            $notSetCount+=1;

        }
    }

    return $notSetCount;
}
