<?php
include 'db-con.php';
$admin_name = "";

if (isset($_SESSION['admin_id'])) {
  $admin_id = $_SESSION['admin_id'];
  $res =  $mysqli->query("SELECT * FROM admins WHERE admin_id='$admin_id' LIMIT 1") or
    die($mysqli->error);
  if (mysqli_num_rows($res) > 0) {
    $admin_name = $res->fetch_assoc()['admin_name'];
  }
}
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <div class="d-flex sidebar-profile">
        <div class="sidebar-profile-image">
          <img src="../public/admin/images/faces/face4.jpg" alt="image">
          <span class="sidebar-status-indicator"></span>
        </div>
        <div class="sidebar-profile-name">
          <p class="sidebar-name text-capitalize">
            <?= $admin_name; ?>

          </p>
          <p class="sidebar-designation">
            Welcome boss :)
          </p>
        </div>
      </div>
      <div class="nav-search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
          <div class="input-group-append">
            <span class="input-group-text" id="search">
              <i class="typcn typcn-zoom"></i>
            </span>
          </div>
        </div>
      </div>
      <p class="sidebar-menu-title">Dash menu</p>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-briefcase menu-icon"></i>
        <span class="menu-title">Main</span>
        <i class="typcn typcn-chevron-right menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/php-project/admin/add">Add A Tutorial Name</a></li>
          <li class="nav-item"> <a class="nav-link" href="/php-project/admin/add-tut-data">Add Tutorial Questions</a></li>
          <li class="nav-item"> <a class="nav-link" href="/php-project/admin/get-tut-data">Select Tutorial To Add Answer(s)</a></li>
          <li class="nav-item"> <a class="nav-link" href="/php-project/admin/get-tut-data-2"> Modify Question(s) And Answer(s)</a></li>

          <li class="nav-item"> <a class="nav-link" href="/php-project/admin/view-comments">View Comments</a></li>

        </ul>
      </div>
    </li>
  </ul>
  <ul class="sidebar-legend">
    <li>
      <p class="sidebar-menu-title">Category</p>
    </li>
    <li class="nav-item"><a href="./add" class="nav-link">#Tutorials</a></li>
    <li class="nav-item"><a href="./add-tut-data" class="nav-link">#Questions</a></li>
    <li class="nav-item"><a href="./sign-out" class="nav-link">#Sign Out</a></li>
  </ul>
</nav>