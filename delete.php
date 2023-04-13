<?php   
 include 'connection.php'; 

 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `facilities_item` WHERE id = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
        
           header('location:features.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  