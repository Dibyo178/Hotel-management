<?php

// require('script.php');
require('alert.php');
adminLogin();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
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

            #main-content {

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

  <?php require('header.php'); ?>


    <!-- <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard_menu">

        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">Admin Panel</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                
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
                            <a class="nav-link text-white" href="settings.php">Settings</a>
                        </li>
               
                    </ul>
                </div>
            </div>
        </nav>

    </div> -->

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h4 class="mb-4">SETTINGS</h4>

                <!-- General Setting Section -->

                <div class="card p-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>

                            <!-- modal add -->

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">

                                <form>

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">General Setting</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label class="form-label">Site Title</label>
                                                <textarea class="form-control  shadow-none" name="site_title" rows="1" id="site_title_inp"></textarea>
                                                <!-- <input type="text" name="site-title" class="form-control shadow-none" id="site_title_inp"> -->
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">About Us</label>
                                                <textarea class="form-control  shadow-none" name="site_about" rows="1" id="site_about_inp"></textarea>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" onclick="site_title.value=general_data.s_name, site_about.value=general_data.s_about" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn btn-success shadow-none">Submit</button>
                                        </div>
                                    </div>

                                </form>


                            </div>
                        </div>


                    </div>

                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about"></p>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Get Data -->

    <script>
        let general_data;

        function get_general() {

            let site_title = document.getElementById('site_title');

            let site_about = document.getElementById('site_about');


            let site_title_inp = document.getElementById('site_title_inp');

            let site_about_inp = document.getElementById('site_about_inp');


            let xhr = new XMLHttpRequest();

            // xhr.open("POST","ajax/settings_crud.php",true);

            xhr.open("POST", "settings_crud.php", true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.s_name;

                site_about.innerText = general_data.s_about;


                site_title_inp.innerText = general_data.s_name;

                site_about_inp.innerText = general_data.s_about;


                //  console.log(general_data);


            }

            xhr.send('get_general');
        }



        function upd_general(site_title_val, site_about_val) {


            let xhr = new XMLHttpRequest();

            // xhr.open("POST","ajax/settings_crud.php",true);

            xhr.open("POST", "settings_crud.php", true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {


                var myModal = document.getElementById('general-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {

                     alert('success','Changes saved!');

                    get_general();
                } else {

                    alert('error','No-Changes saved!');


                }



            }

            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');


        }

        window.onload = function() {

            get_general();

        }
    </script>


</body>

</html>