<?php

 require('connection.php');
 
 require('alert.php');

 adminLogin();

 if(isset($_POST['get_general'])){

    $q= "SELECT * FROM `setting` where `id`=?";
    $values=[1];

    $res=select($q,$values,"i");

    $data=mysqli_fetch_assoc($res);

    $json_data=json_encode($data);

    echo $json_data;
 }

 if(isset($_POST['upd_general'])){

     $frm_data=filteration($_POST);

     $q="UPDATE `setting` SET  `s_name`=?,`s_about`=? WHERE `id`=?";
     
     $values=[$frm_data['site_title'],$frm_data['site_about'],1]; 

     $res=update($q,$values,'ssi');

     echo $res;


 }

?>