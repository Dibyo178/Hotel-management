<?php

 require('connection.php');
 
 require('alert.php');

 adminLogin();


 if(isset($_POST['add_room'])){

  //  $features= filteration(json_decode($_POST['features']));

  //  $facilities= filteration(json_decode($_POST['facilities']));

   $frm_data = filteration($_POST);

   $flag= 0;

  //  $lang=$_POST['facilities'];
  //  $lang1= implode(',',$lang);

   $q1= "INSERT INTO `room`(`name`, `area`, `quantity`, `adult`, `description`,  `children`, `price`) VALUES (?,?,?,?,?,?,?)";

   $values=[$frm_data['name'],$frm_data['area'],$frm_data['quantity'],$frm_data['adult'],$frm_data['description'],$frm_data['children'],$frm_data['price']];

    
    if(insert($q1,$values,'siiisii')){

         $flag=1;
    }

      // $room_id= mysqli_insert_id($con);


    // $q2 = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";

    //    if($stmt = mysqli_prepare($con,$q2)){

    //      foreach($facilities as $f){

    //         mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);

          
    //         mysqli_stmt_execute($stmt);


    //      }
    //      mysqli_stmt_close($stmt);
       

    //    }


    //    else{

    //      $flag=0;
         
    //     die('query cannot be prepared');
          
    //   }



    //   $q3 = "INSERT INTO `room_features`(`room_id`, `features_id`) VALUES (?,?)";

    //   if($stmt = mysqli_prepare($con,$q3)){

    //     foreach($features as $f){

    //        mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);

         
    //        mysqli_stmt_execute($stmt);


    //     }
    //     mysqli_stmt_close($stmt);
      

    //   }


    //   else{

    //     $flag=0;
        
    //    die('query cannot be prepared');
         
    //  }

    //  if($flag){

    //    echo 1;
    //  }
    //  else{
    //   echo 0;
    //  }

 }


//  if(isset($_POST['get_all_rooms'])){
   
//      $res= selectAll('room');

//      $i = 0;

//      $data = "";
  

//      while($row= mysqli_fetch_assoc($res)){

//         $data.="

//           <tr class='align-middle'>
//            <td>$i</td>
//            <td>$row[name]</td>
//            <td>$row[area]</td>
//            <td>$row[quantity]</td>
//            <td>
//            <span class='bg rounded-pill bg-light text-dark'>
//             Adult: $row[adult]
//            </span><br>
//            <span class='bg rounded-pill bg-light text-dark'>
//            Children: $row[children]
//           </span>
//            </td>
//            <td>$row[children]</td>
//            <td>$row[price]</td>
//            <td>$row[description]</td>
//            <td>Status</td>
//            <td>Button</td>
//           </tr>
        
//         " ;

//         $i++;
//      }
     
//    echo $data;

//  }
 
?>