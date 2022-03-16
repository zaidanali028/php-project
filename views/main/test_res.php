<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'views/partials/main/head.php' ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        body {
            background: white;
        }

        .wrapper {
            max-width: 600px;
            margin: 80px auto 50px;
            padding: 30px;
            border-radius: 20px;
            background: greenyellow;
            position: relative;
            min-height: 400px;
            overflow: hidden
        }

        .wrapper .wrap {
            width: 500px;
            position: absolute;
            left: 50px;
            transition: 0.6s
        }

        #q2,
        #q3 {
            left: 650px
        }

        .h4 {
            margin: 0
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 1.2rem;
            cursor: pointer
        }

        .options {
            position: relative;
            padding-left: 30px
        }

        .options input {
            opacity: 0
        }

        .checkmark {
            position: absolute;
            top: 4px;
            left: 3px;
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #444;
            border-radius: 50%
        }

        .options input:checked~.checkmark:after {
            display: block
        }

        .options .checkmark:after {
            content: "";
            width: 9px;
            height: 9px;
            display: block;
            background: black;
            position: absolute;
            top: 51%;
            left: 51%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark {
            background: #fff;
            border: 2px solid #fff;
            transition: 300ms ease-in-out 0s
        }

        .options input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1)
        }

        .btn.btn-primary {
            background-color: rgb(63, 139, 139);
            border: 1px solid rgb(63, 139, 139)
        }

        .btn {
            background-color: inherit;
            border: 1px solid rgb(63, 139, 139);
            border-radius: 20px
        }

        .btn:focus {
            box-shadow: none
        }

        .btn:hover {
            background-color: teal;
            color: #fff
        }

        .fa-arrow-right,
        .fa-arrow-left {
            transition: 0.2s ease-in all
        }

        .btn.btn-primary:hover .fa-arrow-right {
            transform: translate(8px)
        }

        .btn.btn-primary:hover .fa-arrow-left {
            transform: translate(-8px)
        }

        @media(max-width: 767px) {
            .wrapper {
                margin: 30px 10px;
                height: 420px
            }

            .wrapper .wrap {
                width: 280px;
                left: 15px
            }
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 28px;
            background-color: inherit
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 4px;
            bottom: 4px;
            background-color: #fff;
            -webkit-transition: .4s;
            transition: .4s
        }

        input:checked+.slider {
            background-color: #000
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3
        }

        input:checked+.slider:before {
            transform: translateX(30px);
            background-color: #fff
        }

        .slider.round {
            border-radius: 34px
        }

        .slider.round:before {
            border-radius: 50%
        }

        .dark-theme {
            background-color: #222
        }
    </style>

</head>

<body>
    <?php include 'views/partials/main/navbar.php' ?>

    <div class="container-fluid ">


        <?php

        include 'db-con.php';
        ?>
        <?php
        // $tutId = $_GET['tutorial-id'];
        $final_assess = $_SESSION['final_assessment'];

        $res =  $final_assess;

        $qCount = count($res);

        ?>
        <?php
        $index = 1;
        // echo "<form action ='./validate-answers' method='POST'> ";


        foreach ($res as $response) : ?>

            <?php $qst = $response['qst'];
            $r =  $mysqli->query("SELECT * FROM  tut_questions WHERE main_question='$qst' ") or
                die($mysqli->error);
            $current_question_id = $r->fetch_assoc()['tut_question_id'];
            $current_question_id = (int) $current_question_id;

            $re =  $mysqli->query("SELECT * FROM  answers WHERE tut_question_id=$current_question_id") or
                die($mysqli->error); ?>

            <div class="wrapper">
                <div class="wrap" id="q1">
                    <div class="text-center pb-4">
                        <div class="h5 font-weight-bold"><span id="number"> </span><?= $index ?> of <?= $qCount ?></div>
                    </div>
                    <div class="h4 font-weight-bold"><?= $index ?>. <?= $response['qst'] ?> </div>
                    <input type="hidden" name="<?= "qst$index" ?>" value="<?= $row['main_question'] ?>">
                    <div class="pt-4">
                        <?php while ($row = $re->fetch_assoc()) : ?>
                            <?php if ($row['answer_txt'] == $response["selected_ans"]) { ?>
                                <label class="options"><?= $row['answer_txt'] ?> <input type="radio" checked name="<?= "ans$index" ?>" value='<?= $row['answer_txt'] ?>'> <span class="checkmark"></span> <?= $response["is_correct"] == 1 ? "✔️" : "❌" ?></label>

                            <?php     } else { ?>
                                <label class="options"><?= $row['answer_txt'] ?> <input type="radio" name="<?= "ans$index" ?>" value='<?= $row['answer_txt'] ?>'> <span class="checkmark"></span> </label>
                            <?php } ?>
                        <?php endwhile ?>


                    </div>
                </div>
            </div>

        <?php
            $index += 1;
        endforeach ?>
        <div class="row container ">
            <div class="col-md-12 d-flex justify-content-end">
                <button class="btn btn-primary align-center p-3">Submit For Assessment
            </div>


        </div>
    </div>






    </div>
    <?php
    //include 'db-con.php';
    //$tut_id = $_GET['tutorial-id'];
    //if ($tut_id) {
    //  $res =  $mysqli->query("SELECT * FROM  tut_questions WHERE tut_id='$tut_id' ") or
    //    die($mysqli->error);
    // while ($row = $res->fetch_assoc()) {
    //   pre_r($row);
    //}
    //};
    ?>

</body>

</html>