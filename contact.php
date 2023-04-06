<?php

 require('connection.php');
 require('alert.php');


 if(isset($_POST['send'])){

    $frm_data= filteration($_POST);

    $q="INSERT INTO `user_queries`(`name`,`email`,`subject`,`message`) VALUES(?,?,?,?)";

    // $q="INSERT INTO user_queries(name,email,subject,message) VALUES('name','email','subject','message')";
   
    $values= [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
    
     $res= insert($q,$values,'ssss');

     if($res==1){
        alert('success','Mail Sent!');
     }
     else{
        alert('error','server down');
     }

     $con->close();

 }

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Al-Istiqamah Hotel - Contact</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">


<style>

.custom-alert{

  position: fixed;
  width: 12%;
  top: 5.3125rem;
  right: 25px;
  z-index: 10;
}
</style>


    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/Hotel-jafran/logo.jpeg" alt="" width="65"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="room.php">Type Rooms</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                            <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color header-text">Maps in the hotel</h2>
                </div>
                <div class="mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3618.9396606136297!2d91.8678557650036!3d24.90003973403526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d24.8976682!2d91.87048949999999!4m5!1s0x3750557e9696f3a3%3A0xc4e1ce25aeb9392d!2shotel%20grand%20zafran!3m2!1d24.9023957!2d91.8698182!5e0!3m2!1sen!2sbd!4v1677741732537!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8156660.456179673!2d99.19359649642541!3d-3.412372749421002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a7c6d7c8dfca5%3A0xbd3da98fbaf3e7ef!2sHotel%20Al%20-Istiqomah!5e0!3m2!1sid!2sid!4v1652864755283!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6> 67 lovely Complex, East Dargah Gate, </h6>
                                <p>Sylhet, Bangladesh, 3100</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6>01300-745434</h6>
                                <p>24 hours service</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">hotelgrandzafran@gmail.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message"  rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button name="send"  value="submit" class="btn theme_btn button_hover">send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row foot">
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title"><img src="./image/Hotel-jafran/logo.jpeg" style="width: 80px;" alt=""> </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque magnam quod vitae, eum ea saepe vel aperiam assumenda modi omnis! </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Links</h6>
                            
                                
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Facilitas</a></li>
                                        <li><a href="#">Room and class</a></li>
                                    </ul>
                                
                            							
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Get In Touch</h6>
                            
                              
                                  
                                    <ul class="list_style">
                                        <li><a href="#"><span style="font-weight: 700;font-size: 17px;">Address:</span> 67 lovely Complex, East Dargah Gate, Sylhet, Bangladesh, 3100</a></li>
                                        <li><a href="tel:01300-745434"><span style="font-weight: 700;font-size: 17px;">Mobile:</span> 01300-745434</a></li>
                                        
                                        <li><a href="mailto:hotelgrandzafran@gmail.com"><span style="font-weight: 700;font-size: 15px;">Email:</span>
                                            hotelgrandzafran@gmail.com</a></li>
                                    </ul>
                                	
                                
                               
                                </div>
                                </div>
                            							
                    <div class="col-lg-3 col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam itaque ad est inventore quidem assumenda harum facilis officia numquam provident. </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-sm-12 footer-social">
                                <a href="https://www.facebook.com/Hotelgrandzafran/"><ion-icon name="logo-facebook"></ion-icon></i></a>
                               
                                <a href="#"><ion-icon name="globe-outline"></ion-icon></a>
                            </div>
                        </div>
                    </div>		
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 col-sm-12 footer-text m-0" style="text-align: center;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> reserved Hotel Grand Zafran | by <span ><a href="www.hilfideveloper.com" style="color:lightcoral">Smith IT</a></span></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
       
       
       <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        



        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>