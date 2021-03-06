<!DOCTYPE html>
<html lang="en">

<!-- header here -->
<?php include 'views/partials/admin/header.php' ?>


<body>

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php session_start(); ?>
        <?php include 'views/partials/admin/navbar.php' ?>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close typcn typcn-delete-outline"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>
                        Light
                    </div>
                    <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                        Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles primary"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default border"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <!-- sidebar  here-->
            <?php include 'views/partials/admin/sidebar.php' ?>


            <!-- partial -->
            <div class="main-panel">


                <div class="content-wrapper">









                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <?php if (isset($_SESSION['msg'])) : ?>

                                <div class="alert alert-<?= $_SESSION['msg_type'] ?> mt-3"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">??</button>


                                    <?php echo $_SESSION['msg']; ?>
                                </div>
                                <!-- <?php unset($_SESSION['msg']); ?> -->


                            <?php endif ?>
                            <div class="card-body">

                                <h4 class="card-title">Edit  Tutorial In The System</h4>
                                <p class="card-description">
                                    This helps identify each course uniquely from the others
                                </p>


                                <?php
                                include 'db-con.php';
                                $tut_id=$_GET['q_id'];
                                $res =  $mysqli->query("SELECT * FROM tut_table WHERE tut_id='$tut_id' ") or
                                    die($mysqli->error);
                                $tut_name=$res->fetch_assoc()['tut_title'];


                                ?>
                                <!-- <form class="forms-sample"> -->
                                <form action="./post-edit-tut" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tutorial Title</label>

                                        <input type="text" name="title" value="<?=$tut_name?>" class="form-control" id="exampleInputName1" placeholder="Programming with PHP">
                                        <input type="hidden" name="tut_id" value="<?=$tut_id?>"/>
                                    </div>

                                    <button name='sub-tut' type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>

                                </form>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Current Questions</h4>
                                <p class="card-description">
                                    Edit or <code>Delete</code> Questions from this table
                                </p>
                                <div class="table-responsive pt-3">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Tutorial Title(s)
                                                </th>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $res =   $mysqli->query('SELECT * FROM tut_table');
                                            while ($row = $res->fetch_assoc()) : ?>
                                                <?php $qst_id = $row['tut_id']; ?>

                                                <tr>
                                                    <td>
                                                        <?= $qst_id ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['tut_title'] ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?= "./edit-tut?q_id=$qst_id" ?>" class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="<?= "./delete-tut?q_id=$qst_id" ?>" class="btn btn-danger">Delete</a>

                                                    </td>
                                                </tr>
                                            <?php endwhile ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        <?php include 'views/partials/admin/footer.php' ?>

    </div>


    <!-- container-scroller -->
    <?php include 'views/partials/admin/scripts.php' ?>

</body>

</html>