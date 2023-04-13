<?php

// define('SITE_URL','http://localhost/Hotel%20zafran/Hotel-zafran/');

// define('ABOUT_IMG_PATH',SITE_URL.'image/backendImg/');

 
// backend purpose data

define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/Hotel-zafran/image/');

define('ABOUT_FOLDER','backendImg/');

function adminLogin(){

  session_start();

  if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true )){

       echo "<script>window.location.href='index.php'</script>";
  }

  session_regenerate_id(true);
}


function redirect($url){

  echo "<script>window.location.href='$url'</script>";
}

 function alert($type,$msg){
    
    $bg_class= ($type=="success")?"alert-success":"alert-danger";  
   
    echo  <<<alert
  
    <div class="alert $bg_class alert-dismissible custom-alert fade show" role="alert">
    <strong class="me-3">$msg</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
   
alert;
 }

//  function uploadImage($image,$folder){
   
//     $valid_mime = ['image/jpeg','image/png','image/webp'];

//     $img_mime = $image['type'];

//     if(!in_array($img_mime,$valid_mime)){
      
//        return 'inv_img'; //invallid imager mime for formet

//     }
//     else if(($image['size']/(1024*1024))>2){
//       return  'inv_size';
//     }
//     else{

//        $text = pathInfo($image['name'],PATHINFO_EXTENSION);

//        $rname= 'IMG'.random_int(11111,99999).".$text";

//        $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;

//        if(move_uploaded_file($image['tmp_name'],$img_path)){
   
//              return $rname;
//        }
      
//         else{
//           return 'upload failed';
//         }

//     }
//  }

function uploadSVGImage($image,$folder){
   
  $valid_mime = ['image/jpg','image/png','image/svg+xml'];

  $img_mime = $image['type'];

  if(!in_array($img_mime,$valid_mime)){
    
     return 'inv_img'; //invallid imager mime for formet

  }
  else if(($image['size']/(1024*1024))>1){
    return  'inv_size';
  }
  else{

     $ext = pathInfo($image['name'],PATHINFO_EXTENSION);

     $rname= 'IMG_'.random_int(11111,99999).".$ext";

     $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;

     if(move_uploaded_file($image['tmp_name'],$img_path)){
 
           return $rname;
     }
    
      else{
        return 'upd_falied';
      }

  }
}


?>