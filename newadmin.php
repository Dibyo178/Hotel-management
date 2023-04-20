<?php
require('connection.php');
require('alert.php');
// require('features_crud.php');
adminLogin();



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
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
    #dashboard_menu {

      position: fixed;
      height: 100%;
    }

    .custom-alert {

      position: fixed;
      /* width: 20%; */
      top: 5.3125rem;
      right: 25px;
      z-index: 10;
    }

    @media screen and (max-width:991px) {

      #dashboard_menu {
        width: 100%;
        height: auto;
        z-index: 1000;

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



  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
       




        <!-- Facilities 2 -->


        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0 ">
                Add Rooms 
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
                    <th scope="col">Image</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total Member</th>
                    <!-- <th scope="col">Child</th> -->
                    <th scope="col" >Description</th>
                    <th scope="col" >Features</th>
                    <th scope="col" >Facilities</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="faci_data">

                  <?php


                  //  show data of the facility table feach from database

                  $sql = "SELECT * FROM room_add ORDER BY id DESC ";

                  $res = mysqli_query($con, $sql);


                  $i = 1;



                  while ($row = mysqli_fetch_assoc($res)) {
                    echo <<<data

                     
                    <tr>
                    <td>$i</td>
                    <td><img src="image/backendImg/$row[image]" width="100px" ></td>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td>$row[member]</td>
                    <td>$row[description]</td>
                    <td>$row[features]</td>
                    <td>$row[facilities]</td>
          
                      <td>

                      <a href='roomDelete.php?id=$row[id]' class='btn btn-sm rounded-pill btn-danger '>Delete</a"

                     </td>
          
                  </tr>
     

      data;

                    $i++;
                  }

                 


                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>






   

        <!-- New modal of facility -->



        <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">

            <form  id="facility_form" method="POST" enctype="multipart/form-data">

              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Add Features</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
                </div>
                <div class="modal-body">





                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <!-- <textarea class="form-control  shadow-none" name="name" rows="1"></textarea> -->
                    <input type="text" name="name" class="form-control shadow-none">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Price</label>
                    <!-- <textarea class="form-control  shadow-none" name="name" rows="1"></textarea> -->
                    <input type="number" name="price" class="form-control shadow-none">
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Total Member</label>
                    <!-- <textarea class="form-control  shadow-none" name="name" rows="1"></textarea> -->
                    <input type="number" name="member" class="form-control shadow-none">
                  </div>

                  <div class="mb-3">

                    <label class="form-label">Description</label>

                    <textarea class="form-control shadow-none" name="desc" rows='3'></textarea>

                    <!-- <input type="text" class="form-control shadow-none" name="desc"> -->

                  </div>

                  <div class="col-12 mb-3">
                      <label class="form-label fw-bold">Features</label>

                      <div class="row">
                        <?php

                        $res = selectAll('facilities');

                        while ($opt = mysqli_fetch_assoc($res)) {

                          echo "
                                  
                                 <div class='col-md-3'>
                                      <label>
                                    <input type='checkbox' name='features[]' value='$opt[name]' class='form-check-input shadow-none'>

                                         $opt[name]
   

                                      </label>   
                                 </div>
                                 
                                ";
                        }
                        ?>
                      </div>

                    </div>

                    <div class="col-12 mb-3">
                      <label class="form-label fw-bold">Features</label>

                      <div class="row">
                        <?php

                        $res = selectAll('facilities_item');

                        while ($opt = mysqli_fetch_assoc($res)) {

                          echo "
                                  
                                 <div class='col-md-3'>
                                      <label>
                                    <input type='checkbox' name='facilities[]' value='$opt[name]' class='form-check-input shadow-none'>

                                         $opt[name]
   

                                      </label>   
                                 </div>
                                 
                                ";
                        }
                        ?>
                      </div>

                    </div>



                  <div class="mb-3">

                    <label for="" class="form-label fw-bold">Image</label>

                    <input type="file" name="image" id="image" accept=".jpg , .png ,.svg" value="" class="form-control">

                  </div>


                </div>
                <div class="modal-footer">
                  <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name="submit" class="btn btn-success shadow-none">Submit</button>
                </div>
              </div>

            </form>

          


          </div>
        </div>


      
<!-- // facility -->

<?php

     

if (isset($_POST['submit'])) {



  $name = $_POST['name'];
  $price = $_POST['price'];
  $member = $_POST['member'];
  $desc = $_POST['desc'];
  
  $faci = $_POST['features'];
  
  $faci1 = implode(",",$faci);

  $faci_item = $_POST['facilities'];

  $faci_item1 = implode(",",$faci_item);




  $imageName = $_FILES['image']['name'];


  $tmpname = $_FILES['image']['tmp_name'];

  $uploc =  'image/backendImg/' . $imageName;

  $q = "INSERT INTO room_add ( image, name,member,price,description,features,facilities) VALUES ('$imageName','$name',' $member','$price','$desc','$faci1','$faci_item1')";

 


  if (mysqli_query($con, $q) == TRUE) {

    move_uploaded_file($tmpname, $uploc);

   

    echo

    '<div class="custom-alert alert alert-success alert-dismissible fade show" role="alert">
<strong >Inserted data</strong></strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';



  } else {


    echo
    '<div class="custom-alert alert alert-danger alert-dismissible fade show" role="alert">
<strong >Error </strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }


}

?>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

 

</body>

</html>