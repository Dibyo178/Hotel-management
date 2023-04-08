<?php
require('connection.php');
require('alert.php');
adminLogin();


// facility

// if(isset($_POST['submit'])){

   

//   $name=$_POST['name'];

//   $desc= $_POST['desc'];

//    $imageName= $_FILES ['image']['name'];

//    $tmpname = $_FILES['image']['tmp_name'];

//    $uploc =  'image/'.$imageName;

//    $q= "INSERT INTO facilities_item ( icon, name, desc) VALUES ('$imageName','$name',' $desc')";


//    if(mysqli_query($con,$q) == TRUE){

//     move_uploaded_file($tmpname,$uploc);
 
//      echo "data insert";
     
    

//    }

//    else{
//     echo "no data ";
//    }


// }








// DELETE

if (isset($_GET['del'])) {

  $frm_data = filteration($_GET);

  if ($frm_data['del'] == 'all') {

    $q = "DELETE FROM `user_queries`";



    mysqli_query($con, $q);
  } else {

    $q = "DELETE FROM `user_queries` WHERE `u_id`=?";

    $values = [$frm_data['del']];

    delete($q, $values, 'i');

    // $result=;

    // if(delete($q,$values,'i')){

    //   alert('success','Mark as read');
    // }
    // else{

    //   alert('error','operation failed');
    // }
  }

  header("location:features.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-features</title>
  <link text-white href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link text-white rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="admin.css">

  <style>
    #dashboard_menu {

      position: fixed;
      height: 100%;
    }

    /* .custom-alert{

position: fixed;
width: 15%;
top: 3rem;
right: 25px;
z-index: 100;
} */

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
              <a class="nav-link text-white" href="features.php">Facilites</a>
            </li>



            <li class="nav-item">
              <a class="nav-link text-white" href="user_quires.php">User-quires</a>
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
        <h3>Edit Facilites</h3>


        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0 ">
                Features
              </h5>

              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-5">

                <i class="bi bi-plus-square"></i> Add

              </button>

            </div>

            <!-- <div class="text-end mb-4">
          <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
          
            <i class="bi bi-trash"></i>Delete All

          </a>

          </div> -->

            <div class="table-responsive md" style="height:350px; overflow-y:scroll;">
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>

                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="features_data">

                </tbody>
              </table>
            </div>
          </div>
        </div>


        <!-- Facilities 2 -->


        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0 ">
                Facilities
              </h5>

              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">

                <i class="bi bi-plus-square"></i> Add

              </button>

            </div>



            <div class="table-responsive md" style="height:350px; overflow-y:scroll;">
              <table class="table table-hover border">
                <thead>
                  <!-- <thead class="sticky-top"> -->
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="facility_data">

                </tbody>
              </table>
            </div>
          </div>
        </div>



      <!-- </div>
    </div>
  </div> -->



  <!-- Features Modal -->
  <div class="modal fade" id="feature-5" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

      <form id="features_s_form">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Features</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label class="form-label">Name</label>
              <textarea class="form-control  shadow-none" name="features_name" rows="1"></textarea>
              <!-- <input type="text" name="site-title" class="form-control shadow-none" id="site_title_inp"> -->
            </div>

            <!-- <div class="mb-3">
                                                <label class="form-label">About Us</label>
                                                <textarea class="form-control  shadow-none" name="site_about" rows="1" id="site_about_inp"></textarea>
                                            </div> -->


          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success shadow-none">Submit</button>
          </div>
        </div>

      </form>


    </div>
  </div>


  <!-- New modal of facility -->



  <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

      <form id="facility_form" method="post" enctype="multipart/form-data">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Features</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label class="form-label">Name</label>
              <textarea class="form-control  shadow-none" name="name" rows="1"></textarea>
              <!-- <input type="text" name="site-title" class="form-control shadow-none" id="site_title_inp"> -->
            </div>


            <div class="mb-3">

              <label for="" class="form-label fw-bold">Icon</label>

              <input type="file" name="image" id="image" accept=".jpg , .png"  value="" class="form-control">

            </div>

            <div class="mb-3">

              <label class="form-label">Description</label>

              <textarea class="form-control shadow-none" name="desc" rows='3'></textarea>

            </div>

            <!-- <div class="mb-3">
                                                <label class="form-label">About Us</label>
                                                <textarea class="form-control  shadow-none" name="site_about" rows="1" id="site_about_inp"></textarea>
                                            </div> -->


          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="submit" class="btn btn-success shadow-none">Submit</button>
          </div>
        </div>

      </form>


    </div>
  </div>


  <!-- Facility Modal -->



  <!-- <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">

      <form id="facility_s_form">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Facilities</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
          </div>
          <div class="modal-body">

            <div class="mb-3">
              <label class="form-label">Name</label>
              <textarea class="form-control  shadow-none" name="facility_name" rows="1"></textarea>
            
            </div>

            <div class="mb-3">

              <label for="" class="form-label fw-bold">Icon</label>

              <input type="file" name="facility_icon" accept=".svg" class="form-control">

            </div>

            <div class="mb-3">

              <label class="form-label">Description</label>

              <textarea class="form-control shadow-none" name="facility_desc" rows='3'></textarea>

            </div>


          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success shadow-none">Submit</button>
          </div>
        </div>

      </form>


    </div>
  </div> -->

  <!-- Facility Modal end -->




  <script>
    let features_s_form = document.getElementById('features_s_form');

    let facility_s_form = document.getElementById('facility_form');


    features_s_form.addEventListener('submit', function(e) {

      e.preventDefault();
      add_features();

    });

    function add_features() {

      let data = new FormData();

      data.append('name', features_s_form.elements['features_name'].value);

      data.append('add_features', '');

      let xhr = new XMLHttpRequest();

      xhr.open("POST", "features_crud.php", true);


      xhr.onload = function() {


        var myModal = document.getElementById('feature-5');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {

          // alert('success','New Features add');

          swal("Good job!", "Facilities Add", "success");

          features_s_form.elements['features_name'].value = '';

          get_features();


        } else {

          alert('error', 'server down');


        }


      }

      xhr.send(data);

    }

    function get_features() {

      let xhr = new XMLHttpRequest();

      xhr.open("POST", "features_crud.php", true);

      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        document.getElementById('features_data').innerHTML = this.responseText;

      }


      xhr.send('get_features');
    }



    function rem_feature(val) {

      let xhr = new XMLHttpRequest();

      xhr.open("POST", "features_crud.php", true);

      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        if (this.responseText == 1) {

          // alert('success','New Features add');
          swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your facilities been deleted!", {
                  icon: "success",
                });
              } else {
                swal("Your Facilities is safe!");
              }
            });

          get_features();


        } else if (this.responseText == 'room-added') {

          swal("Error", "Facilities added in room", "error");
        } else {

          swal("Server Down");


        }

      }


      xhr.send('rem_feature=' + val);
    }


    //  facility 2

    facility_s_form.addEventListener('submit', function(e) {

      e.preventDefault();
      add_facility();

    });



    function add_facility() {

      let data = new FormData();

      data.append('name', facility_s_form.elements['facility_name'].value);
      data.append('icon', facility_s_form.elements['facility_icon'].files[0]);
      data.append('desc', facility_s_form.elements['facility_desc'].value);

      data.append('add_facility', '');

      let xhr = new XMLHttpRequest();

      xhr.open("POST", "features_crud.php", true);


      xhr.onload = function() {
          
         console.log(this.responseText)
          
       var myModal = document.getElementById('facility-s');
       var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 'inv_img') {

          // alert('success','New Features add');

          swal("warning", "Only SVG image are allowed", "error");



          //  features_s_form.elements['features_name'].value='';


          //  get_features();

        } else if (this.responseText == 'inv_size') {
          swal("warning", "Image should be less then 1MB !", "error");

        } else if (this.responseText == 'upd_failed') {
          swal("warning", "Image upload failed.Server Down !", "error");

        } else {

          swal("Done", "New Facility Added !", "success");
          // facility_data.reset();
        
           
        

        }


      }

      xhr.send(data);

    }


    window.onload = function() {

      get_features();

    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</body>

</html>