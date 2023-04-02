<?php

// require('connection.php');

require('alert.php');

include_once 'connection.php';



session_start();

if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true )){

    echo "<script>window.location.href='dashboard.php'</script>";
}

// require('connection.php');
//
error_reporting(0);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login Panel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- <link rel="stylesheet" href="./css/common.css"> -->
  
     <link rel="stylesheet" href="common.css">

    <style>
        div.login-form {

            position: absolute;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            width: 400px;
        }
    </style>

</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">

        <form method="post">

            <h4 class="bg-dark text-white py-3 ">ADMIN PANEL</h4>

            <div class="p-4">

                <div class="mb-3">

                    <input name="admin_name" type="text" class="form-control shadow-none text-center" required placeholder="Admin Name">
                </div>
                <div class="mb-4">


                    <input name="admin_password" type="password" class="form-control text-center shadow-none" required placeholder="Password">
                </div>

                <button name="login" type="submit" class="btn text-white custome-bg shadow-none" style="background:#2ec1ec;">

                    Login

                </button>

            </div>

        </form>


    </div>

    <?php

    if (isset($_POST['login'])) {

        $frm_dta = filteration($_POST);



        //     $query ="SELECT * FROM admin";

        //     $sql_query= mysqli_query($con,$query);

        $query = "SELECT * FROM `admin` WHERE `name`=? AND `pass`=?";

        $values = [$frm_dta['admin_name'], $frm_dta['admin_password']];

        // echo $values;

        $res = select($query, $values, "ss");

        //     print_r($res);

        if ($res->num_rows == 1) {
            $row= mysqli_fetch_assoc($res);
           
            $_SESSION['adminLogin']= true;
            
            $_SESSION['adminId']=$row['id'];

            redirect('dashboard.php');
        } else {
            alert("error","Invalid credentials");
        }
    }


    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>