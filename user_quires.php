<?php
require('connection.php');
require('alert.php');
adminLogin();

// if(isset($_GET['seen'])){

//   $frm_data= filteration($_GET);

//   if($frm_data['seen']=='all'){
   
//   }
//   else{

//     $q="UPDATE `user_queries` SET `seen`=? WHERE `u_id `=?";

//     $values=[$frm_data['seen'],1];

//     // $result=update($q,$values,'si');

//     if(update($q,$values,'si')){

//       alert('success','Mark as read');
//     }
//     else{

//       alert('error','operation failed');
//     }
//   }
// }


// DELETE

if(isset($_GET['del'])){

  $frm_data= filteration($_GET);

  if($frm_data['del']=='all'){

    $q="DELETE FROM `user_queries`";



    mysqli_query($con,$q);

  
   
  }
  else{

    $q="DELETE FROM `user_queries` WHERE `u_id`=?";

    $values=[$frm_data['del']];

    delete($q,$values,'i');

    // $result=;

    // if(delete($q,$values,'i')){

    //   alert('success','Mark as read');
    // }
    // else{

    //   alert('error','operation failed');
    // }
  }

  header("location:user_quires.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel-users-querry</title>
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
        z-index: 1000;
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
           
          </ul>
        </div>
      </div>
    </nav>

  </div> -->

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
       <h3>User Queries</h3>
       <div class="card border-0 shadow-sm mb-4">
         <div class="card-body">
           
          <div class="text-end mb-4">
          <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
          
            <i class="bi bi-trash"></i>Delete All

          </a>

          </div>
              
          <div class="table-responsive md" style="height:450px; overflow-y:scroll;">
          <table class="table table-hover border">
  <thead>
    <tr class="bg-dark text-light" >
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col" width="20%">Subject</th>
      <th scope="col" width="30%">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 

    $q="SELECT * FROM `user_queries` ORDER BY `u_id` DESC";
   
    $data= mysqli_query($con,$q);

    $i=1;

    while($row= mysqli_fetch_assoc($data)){


         $seen='';

        //  if($row['seen']!=1){

        //     $seen="<a href='?seen=$row[u_id]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
        //  }
    
         $seen.="<a href='?del=$row[u_id]' class='btn btn-sm rounded-pill btn-danger '>Delete</a";

        echo<<<query

        <tr>
          
         <td>$i</td>
         <td>$row[name]</td>
         <td>$row[email]</td>
         <td>$row[subject]</td>
         <td>$row[message]</td>
         <td>$row[date]</td>
         <td>$seen</td>    
        </tr>

        query;

        $i++;
    }
  
  
    
  ?>
  </tbody>
</table>
          </div>
         </div>
       </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>