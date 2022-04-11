<?php
include 'db-con.php';
include_once 'api/global_functions.php';


// routing logic
$tut_id = isset($_GET['tutorial-id']) ? $_GET['tutorial-id'] : "";
$tut_id_2 = isset($_GET['tut-id']) ? $_GET['tut-id'] : "";
$qst_id = isset($_GET['q_id']) ? $_GET['q_id'] : "";
$cmt_id = isset($_GET['cmt_id']) ? $_GET['cmt_id'] : "";
// echo "This $qst_id";

$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";
// echo $request;
switch ($request) {
        // GET REQUESTS
        // index routes
    case  $path . '/sign-up':
        require __DIR__ . '/views/main/sign-up.php';
        break;
        // no get route for sign in because we are using a modal for the sign in field alredy
    case  $path . '/sign-in-post':
        require __DIR__ . '/api/main/sign-in.php';

        break;
    case  $path . '/sign-up-post':
        require __DIR__ . '/api/main/sign-up.php';
        break;
    case  $path . '/admin/sign-out':
        require __DIR__ . '/api/main/sign-out.php';
        break;
    case  $path . '/':
        require __DIR__ . '/views/main/index.php';
        break;
    case '':
        require __DIR__ . '/views/main/index.php';
        break;


    case  $path . "/tuts":
        require __DIR__ .  '/views/main/tuts.php';
        break;

    case  $path . "/courses-list":
        require __DIR__ .  '/views/main/questions-list.php';
        break;
    case  $path . "/tutorial-question?tutorial-id=" . $tut_id:
        require __DIR__ .  '/views/main/tutorial-question.php';
        break;

    case  $path . "/test_result":
        require __DIR__ .  '/views/main/test_res.php';
        break;
    case  $path . "/process-comment":
        require __DIR__ .  '/api/main/process-comment.php';
        break;



        //    admin routes
    case  $path . "/admin":
        require ensure_auth_middleware('api/admin/redirect-to-add-tut.php');

        break;
    case  $path . "/admin/add":

        // require __DIR__ .  '/views/admin/add-tut-question.php';
        require ensure_auth_middleware('views/admin/add-tut-question.php');

        break;
    case  $path . "/admin/add-tut-data":

        require ensure_auth_middleware('views/admin/add-tut-def.php');
        break;
    case  $path . "/admin/add-answer?tut-id=". $tut_id_2."&sub-spec=":
   


        require ensure_auth_middleware('views/admin/add-answer.php');

        break;
    case  $path . "/admin/get-tut-data":

        require ensure_auth_middleware('views/admin/get-tut-data.php');

        break;
        case  $path . "/admin/get-tut-data-2":

            require ensure_auth_middleware('views/admin/get-tut-data-2.php');
    
            break;

    
    case  $path . "/admin/edit-tut?q_id=" . $qst_id:
        // http://localhost/php-project/admin/edit?q_id=7
        require ensure_auth_middleware('views/admin/edit-tut.php');

        break;
    case  $path . "/admin/edit-qst?q_id=" . $qst_id:
        // http://localhost/php-project/admin/edit?q_id=7
        require ensure_auth_middleware('views/admin/edit-qst.php');

        break;
    case  $path . "/admin/mod-ans":

        require ensure_auth_middleware('views/admin/mod-ans.php');

        break;
    case  $path . "/admin/get-qst-ans":

        require ensure_auth_middleware('views/admin/get-qst-ans.php');

        break;

    case  $path . "/admin/view-comments":

        require ensure_auth_middleware('views/admin/view-comments.php');
        break;




        // POST REQUESTS-ADMIN
    case  $path . "/admin/add-tut":

        require ensure_auth_middleware('api/admin/add-tut-question.php');
        break;
    case  $path . "/admin/add-tut-spec":

        require  ensure_auth_middleware('api/admin/add-tut-question-spec.php');
        break;
    case  $path . "/admin/add-question-ans":

        require ensure_auth_middleware('api/admin/add-question-ans.php');
        break;
    case  $path . "/admin/post-edit-tut":

        require ensure_auth_middleware('api/admin/edit-tut.php');
        break;

    case  $path . "/admin/edit-qst":

        require ensure_auth_middleware('api/admin/edit-qst.php');
        break;
    case  $path . "/admin/opt-update":

        require ensure_auth_middleware('api/admin/opt-update.php');
        break;


    case  $path . "/admin/delete-tut?q_id=" . $qst_id:
        // kvngthr!v3[ROUTE IMPLEMENTATION]
        require ensure_auth_middleware('api/admin/delete-tut.php');
        break;
    case  $path . "/admin/delete-qst?q_id=" . $qst_id:

        require ensure_auth_middleware('api/admin/delete-qst.php');
        break;
    case  $path . "/admin/change-cmt-state?cmt_id=" . $cmt_id:
        // kvngthr!v3[ROUTE IMPLEMENTATION]
        require ensure_auth_middleware('api/admin/change-cmt-state.php');
        break;

    case  $path . "/admin/update-answers":

        require ensure_auth_middleware('api/admin/update-answers.php');
        break;
    
        case  $path . "/admin/get-tut-qsts":

            require ensure_auth_middleware('api/admin/get-tut-qsts.php');
            break;
    




        // POST REQUESTS-GENERAL

    case  $path . "/validate-answers":
        require __DIR__ .  '/api/main/validate-answers.php';

        break;

        //   anythign else's routes
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
