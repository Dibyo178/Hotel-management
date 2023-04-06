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

 if(isset($_POST['add_facility'])){

    $frm_data= filteration($_POST);

    $img_r= uploadImage()

    $values= [$frm_data['rem_feature']];
   
    $q= "DELETE FROM `facilities` WHERE `id`=?"; 

    $res=delete($q,$values,'i');

    echo $res;



 }

  

?>