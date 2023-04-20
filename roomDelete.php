<?php   
 include 'connection.php'; 

 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `room_add` WHERE id = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
        
           header('location:newadmin.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  