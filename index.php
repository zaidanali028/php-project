<?php

// routing logic

$tut_id = isset($_GET['tutorial-id']) ? $_GET['tutorial-id'] : "";
$qst_id = isset($_GET['q_id']) ? $_GET['q_id'] : "";
// echo "This $qst_id";

$request = $_SERVER['REQUEST_URI'];
$path = "/php-project";
// echo $request;
switch ($request) {
        // GET REQUESTS
        // index routes
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




        //    admin routes
    case  $path . "/admin":
        require __DIR__ .  '/views/admin/index.php';
        break;
    case  $path . "/admin/add":
        // static css assets aint working here 
        require __DIR__ .  '/views/admin/add-tut-question.php';
        break;
    case  $path . "/admin/add-tut-data":
        // static css assets aint working here 
        require __DIR__ .  '/views/admin/add-tut-def.php';
        break;
    case  $path . "/admin/add-answer":
        // static css assets aint working here 
        require __DIR__ .  '/views/admin/add-answer.php';
        break;
    case  $path . "/admin/edit-tut?q_id=" . $qst_id:
        // http://localhost/php-project/admin/edit?q_id=7
        require __DIR__ .  '/views/admin/edit-tut.php';
        break;
    case  $path . "/admin/edit-qst?q_id=" . $qst_id:
        // http://localhost/php-project/admin/edit?q_id=7
        require __DIR__ .  '/views/admin/edit-qst.php';
        break;
    case  $path . "/admin/mod-ans":

        require __DIR__ .  '/views/admin/mod-ans.php';
        break;
        case  $path . "/admin/get-qst-ans":

            require __DIR__ .  '/views/admin/get-qst-ans.php';
            break;
    



        // POST REQUESTS-ADMIN
    case  $path . "/admin/add-tut":
        // static css assets aint working here 
        require __DIR__ .  '/api/admin/add-tut-question.php';
        break;
    case  $path . "/admin/add-tut-spec":
        // static css assets aint working here 
        require __DIR__ .  '/api/admin/add-tut-question-spec.php';
        break;
    case  $path . "/admin/add-question-ans":
        // static css assets aint working here 
        require __DIR__ .  '/api/admin/add-question-ans.php';
        break;
    case  $path . "/admin/post-edit-tut":

        require __DIR__ .  '/api/admin/edit-tut.php';
        break;

    case  $path . "/admin/edit-qst":

        require __DIR__ .  '/api/admin/edit-qst.php';
        break;
        case  $path . "/admin/opt-update":

            require __DIR__ .  '/api/admin/opt-update.php';
            break;


    case  $path . "/admin/delete-tut?q_id=" . $qst_id:

        require __DIR__ .  '/api/admin/delete-tut.php';
        break;
    case  $path . "/admin/delete-qst?q_id=" . $qst_id:

        require __DIR__ .  '/api/admin/delete-qst.php';
        break;

        case  $path . "/admin/update-answers":

            require __DIR__ .  '/api/admin/update-answers.php';
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
