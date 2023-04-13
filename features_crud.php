<?php

 require('connection.php');
 
 require('alert.php');

 adminLogin();

 if(isset($_POST['add_features'])){

    $frm_data = filteration($_POST);

    $q= "INSERT INTO `facilities`(`name`) VALUES (?)";

    $values=[$frm_data['name']]; 

     $res=insert($q,$values,'s');

     echo $res;

 }

 if(isset($_POST['get_features'])){

    $res= selectAll('facilities');

    $i=1;

    while($row = mysqli_fetch_assoc($res)){
        echo <<<data
          
          <tr>
            <td>$i</td>
            <td>$row[name]</td>
            
             <td>
                <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger  shadow-none btn-sm" >
                <i class="bi bi-trash"></i> Delete
                </button>
             </td>

          </tr>

        data;

        $i++;
        
   
        
    }  

 }






 if(isset($_POST['rem_feature'])){

    $frm_data= filteration($_POST);

    $values= [$frm_data['rem_feature']];
   
    $q= "DELETE FROM `facilities` WHERE `id`=?"; 

    $res=delete($q,$values,'i');

    echo $res;



 }

 if(isset($_POST['rem_facility'])){

   $frm_data= filteration($_POST);

   $values= [$frm_data['rem_facility']];
  
   $q= "DELETE FROM ` facilities_item` WHERE `id`=?"; 

   $res=delete($q,$values,'i');

   echo $res;



}

//  if(isset($_POST['add_facility'])){

//     $frm_data= filteration($_POST);

//     $img_r= uploadSVGImage($_FILES['icon'],ABOUT_FOLDER);

//    if($img_r == 'inv_img'){
     
//        echo $img_r;

//    } 

//    else if($img_r == 'inv_size'){

//           echo $img_r;
//    }

//   else if($img_r == 'upd_falied'){

//    echo  $img_r;
//   }

//   else{

//      $q= "INSERT INTO `facilities_item`(`icon`, `name`, `about`) VALUES (?,?,?)";

//      $values = [$img_r,$frm_data['name'],$frm_data['about']];
      
//      $res = insert($q,$values,'sss');
     
//      echo $res;
//   }

 
// $name = $_POST['name'];
// $desc = $_POST['desc'];

// $frm_data= filteration($_POST);

// $imageName= uploadSVGImage($_FILES['icon'],ABOUT_FOLDER);

// $imageName = $_FILES['image']['name'];


// $tmpname = $_FILES['image']['tmp_name'];

// $uploc =  'image/backendImg/' . $imageName;

// $q = "INSERT INTO facilities_item ( icon, name,about) VALUES ($imageName,'name','about')";

// // $values=[$imageName,$frm_data['name'],$frm_data['about']];




// if (mysqli_query($con, $q) == TRUE) {

//   move_uploaded_file($tmpname, $uploc);

//   echo

//   '<div class="custom-alert alert alert-success alert-dismissible fade show" role="alert">
// <strong >Inserted data</strong></strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// } else {


//   echo
//   '<div class="custom-alert alert alert-danger alert-dismissible fade show" role="alert">
// <strong >Error </strong>
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }

// }



 

  

?>