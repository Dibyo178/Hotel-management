<?php

require('connection.php');
 
 require('alert.php');

 adminLogin();

  

  if(isset($_POST['get_room'])){
  
     $frm_data= filteration($_POST);

   


     $q1 = select($con,"SELECT * FROM `room` WHERE `id`=?",[$frm_data['get_room']],'i');

     $res1= mysqli_query($con,$q1);

     $q2 = select("SELECT * FROM `room_features` WHERE `room_id`=?",[$frm_data['get_room']],'i');
   
      $res2 = mysqli_query($con,$q2);

     $q3= select("SELECT * FROM ` room_facilities` WHERE `room_id `=?",[$frm_data['get_room']],'i');

     $res3= mysqli_query($con,$q3);



      
      $roomdata= mysqli_fetch_assoc($res1);
      
      
      $features = [];
      $facilities=[];

      if(mysqli_num_rows($res2)>0){

           while($row = mysqli_fetch_assoc($res2)){

               array_push($features,$row['features_id']);
           }
      }


      if(mysqli_num_rows($res3)>0){

        while($row = mysqli_fetch_assoc($res3)){

            array_push($facilities,$row['facilities_id ']);
        }
   }

   $data= ["roomdata"=>$roomdata, "features"=>$features, "facilities"=>$facilities];

   $data=json_encode($data);

   echo $data;




  }



 ?>