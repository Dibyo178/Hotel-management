<?php

require('alert.php');
adminLogin();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link text-white href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link text-white rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">

  <style>
    #dashboard_menu {

      position: fixed;
      height: 100%;
    }

    @media screen and (max-width:991px) {

      #dashboard_menu {
        width: 100%;
        height: auto;
        
      }

      #main-content{

        margin-top: 60px;
      }


    }
  </style>


</head>

<body class="bg-light">

  <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">

    <h3 class="mb-0 ">Hotel Zafran</h3>
    <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>

  </div>

  <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard_menu">

    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid flex-lg-column align-items-stretch">
        <h4 class="mt-2 text-light">Admin Panel</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
          <ul class="nav nav-pills flex-column">
            <!-- <li class="nav-item">
              <a class="nav-link text-white active" aria-current="page" href="#">Active</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-white " href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="setting.php">Settings</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-white disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

  </div>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi culpa fugit ratione modi vitae quae impedit! Vero at atque consectetur!
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>