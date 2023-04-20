<?php

require('connection.php');

require('connectdb.php');
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/Hotel-jafran/logo.jpeg" type="image/png">
    <title>Hotel Zafran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="room.php">Type Rooms</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Hotel Grand Zafran</h6>
                    <h2 class="header-text">Relax Your Mind</h2>
                    <!-- <p>Cukup dengan merogoh kocek mulai dari Rp350.000, Anda sudah bisa mendapat penginapan dengan kualitas mantap tapi harga bersahabat. <br>Hotel ini cocok bagi wisatawan yang ingin jalan-jalan.</p> -->
                    <!-- <a href="#" class="btn theme_btn button_hover">Learn More</a> -->
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>Book<br> Your Room</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="Checkin Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Checkout Date" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Adult Peoples">Adult Peoples</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Child">Child</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide">
                                                <option data-display="Class Rooms">Number of Rooms</option>
                                                <option value="1">Superior</option>
                                                <option value="2">Deluxe</option>
                                                <option value="3">VIP</option>
                                            </select>
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->


    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color header-text">About Us </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aliquid magnam quidem minima libero in voluptates reprehenderit aut non facere?</p>
                        <a href="#" class="button_hover theme_btn_two">Gallery Hotel</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="image/Hotel-jafran/g2.jpg" alt="img" style="box-shadow: 0px 1px 10px black;">
                </div>

            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color header-text">Room Type</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30 justify-content-center">

                <!-- Start Our backend Code -->

                <?php

                $res = selectAll('room_add');

                $path = './image/backendImg';

                while ($row =  mysqli_fetch_assoc($res)) {

                    echo <<<data

                    <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="./image/backendImg/$row[image]" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                           <button class="btn view_btn  button_hover "  data-bs-toggle="modal" data-bs-target="#edit-book" style="background-color:#0F946A;color:white;margin-top:5px">Book Now</button>
                        </div>
                        <div class="d-flex justify-content-between facilitas-show">
                            <div class="details-container">
                                <img src="image/Hotel-jafran/checked.png" alt="tick" style="width: 30px;" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">$row[member] Persons</p>
                            </div>
                            <div class="details-container" style="cursor: pointer;" onclick="createAlert('','Facilities & Features','$row[facilities], $row[features]','success',true,true,'$row[id]',);">
                                <img src="image/Hotel-jafran/file.png" style="width:30px" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Facilities & Features</p>
                            </div>
                        </div>
                    
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">$row[name]</h4>
                        </a>
                        <h5>$row[price]<small>.-/ BDT</small></h5>
                    </div>
                </div>


data;
                }

                ?>

                <!-- Modal -->






                <?php


                function fill_customer($pdo)
                {

                    $output_customer = '';

                    $select = $pdo->prepare("select * from   room_add order by name asc");
                    $select->execute();

                    $result1_customer = $select->fetchAll();

                    foreach ($result1_customer as $row) {

                        $output_customer .= '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                    }

                    return $output_customer;
                }

                ?>



                <div class="modal fade" id="edit-book" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-lg">

                        <form id="room_form" autocomplete="off">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Rooms</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" name="customer_name" id="customer_name" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Customer Mobile</label>
                                            <input type="text" name="customer_mobile" id="customer_mobile" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Customer Address</label>
                                            <input type="text" name="customer_address" id="customer_mobile" class="form-control shadow-none" required>
                                        </div>

                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">From Date</label>
                                            <input type="date" name="from_date" id="from_date" class="form-control shadow-none" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">To Date</label>
                                            <input type="date" name="to_date" id="to_date" class="form-control shadow-none" required>
                                        </div>



                                        <div class="col-md-6 mb-3">

                                            <!-- <input type="text" class="form-control  shadow-none" name="room_name"> -->
                                            <!-- <textarea class="form-control  shadow-none" name="room_name" rows="1"></textarea> -->

                                            <select class="form-control roomid" style="width: 415px;">

                                                <option value="">Please Select Room</option><?php echo fill_customer($pdo); ?>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Room Name:</label>
                                            <input type="text" name="room_name" id="room_name" style="border:none;" class="form-control shadow-none" value="" required>
                                        </div>

                                        <!-- <ul style="list-style: none;">
                                            <li name="room_price" id="room_price" value=""></li>
                                            <li name="room_person" id="room_person" value=""></li>
                                            <li name="room_facilities" id="room_facilities" value=""></li>
                                            <li name="room_features" id="room_features" value=""></li>
                                        </ul> -->

                                        <div>
                                            <label class="form-label">Price:</label>
                                            <input type="text" name="room_price" id="room_price" value="" style="border:none;" class="form-control shadow-none" required>
                                        </div>

                                        <div>
                                            <label class="form-label">Person:</label>
                                            <input type="text" style="border:none;" name="room_person" id="room_person" value="" class="form-control shadow-none" required>
                                        </div>

                                        <div>
                                            <label class="form-label">Facilities:</label>
                                            <input type="text" value="" name="room_facilities" id="room_facilities" class="form-control shadow-none" style="border:none;" required>
                                        </div>

                                        <div>
                                            <label class="form-label">Features</label>
                                            <input type="text" name="room_features" id="room_features" value="" class="form-control shadow-none" style="border:none;" required>
                                        </div>


                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success shadow-none">Submit</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>



                <!-- <script>

$(document).ready(function(){

    $('.view_btn').click(function(){

       e.preventDefault();
     $('#edit-book').show();

     
    })

})

</script> -->


                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button> -->








                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/Hotel-jafran/j1.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between ">
                            <div class="details-container">
                                <img src="image/Hotel-jafran/checked.png" alt="tick" style="width: 30px;" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK MANDI','success',true,true,'pageMessages1');">
                                <img src="image/Hotel-jafran/file.png" style="width:30px" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages1">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">AC Room</h4>
                        </a>
                        <h5>2000<small>.-/ BDT</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/Hotel-jafran/j3.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between facilitas-show">
                            <div class="details-container">
                                <img src="image/Hotel-jafran/checked.png" alt="tick" style="width: 30px;" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC TV CHANEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages2');">
                                <img src="image//Hotel-jafran/file.png" style="width:30px" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages2">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">Non AC Room</h4>
                        </a>
                        <h5>2000<small>.-/ BDT</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/Hotel-jafran/j4.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between facilitas-show">
                            <div class="details-container">
                                <img src="image/Hotel-jafran/checked.png" alt="tick" style="width: 30px;" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" id="facilitas" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC HOT WATER REFRIGERATOR / KULKAS TV CHANEL WASTAPEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages3');">
                                <img src="image/Hotel-jafran/file.png" style="width:30px" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages3">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">Deluxe Room</h4>
                        </a>
                        <h5>2000<small>.-/ BDT</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="image/Hotel-jafran/j4.jpg" alt="" width="270" height="270" style="border-radius: 20px; box-shadow: 2px 1px 10px rgb(211, 211, 211);">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <div class="d-flex justify-content-between facilitas-show">
                            <div class="details-container">
                                <img src="image/Hotel-jafran/checked.png" alt="tick" style="width: 30px;" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">2/3/4 Persons</p>
                            </div>
                            <div class="details-container" id="facilitas" style="cursor: pointer;" onclick="createAlert('','Perlengkapan','AIR CONDITIONING/ AC HOT WATER REFRIGERATOR / KULKAS TV CHANEL WASTAPEL WELLCOME DRINK PERLENGKAPAN MANDI','success',true,true,'pageMessages3');">
                                <img src="image/Hotel-jafran/file.png" style="width:30px" alt="tick" class="list-icon">
                                <p class="list-text" style="font-size: 13px;">Show Facilities</p>
                            </div>
                        </div>
                        <div id="pageMessages3">

                        </div>
                        <a href="#">
                            <h4 class="sec_h4 header-text" style="font-size: 24px;">Family Room</h4>
                        </a>
                        <h5>2000<small>.-/ BDT</small></h5>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">



            <div class="section_title text-center">
                <h2 class="title_w header-text">Our Facilities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">


                <?php

                $res = selectAll('facilities_item');

                $path = './image/backendImg';

                while ($row =  mysqli_fetch_assoc($res)) {

                    echo <<<data

            <div class="col-lg-4 col-md-6 faci">
                <div class="facilities_item" style="height:100px">
                    <h4 class="sec_h4"><img src="./image/backendImg/$row[icon]" style="width: 30px;" alt=""> <span style="margin-left: 35px;" class="faci">$row[name]</span></h4>
                  
                </div>
            </div>


            data;
                }

                ?>


                <!-- <div class="col-lg-4 col-md-6 faci">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/bedroom.png" style="width: 30px;" alt=""> <span style="margin-left: 35px;" class="faci">Ac Room</span></h4>
                      
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/bed.png" style="width: 30px;" alt=""> <span style="margin-left: 20px;">Non Ac Room</span></h4>
                      
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/wifi.png" style="width: 25px;" alt=""><span style="margin-left: 30px;">Wifi Access</span></h4>
                        
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/water-boiler.png" style="width: 35px;" alt=""><span style="margin-left: 30px;">Water Gijar</span>
                        </h4>
                        
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/generator.png" style="width: 25px;" alt=""> <span style="margin-left: 35px;">Generator</span> </h4>
                      
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/restaurant-cutlery-circular-symbol-of-a-spoon-and-a-fork-in-a-circle.png" style="width: 30px;" alt=""> <span style="margin-left: 20px;"><span style="margin-left: 20px;">Restaurant</span> </h4>
                       

                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/parking.png" style="width: 30px;" alt=""> <span style="margin-left: 20px;"><span style="margin-left: 25px;">Parking</span> </h4>
                       
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/car.png" style="width: 30px;" alt=""> <span style="margin-left: 12px;"><span style="margin-left: 20px;">Rent a car</span> </h4>
                       
                    </div>
                </div> -->

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="facilities_item" style="height:100px">
                        <h4 class="sec_h4"><img src="./image/Hotel-jafran/golf/cleaning-cart.png" style="width: 30px;" alt=""> <span style="margin-left: 5px;"><span style="margin-left: 20px;">Room Service</span> </h4>
                    
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->



    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color header-text">What Client's Say ?</h2>
                <hr style="width: 250px;border: 1px solid rgb(203, 77, 77);margin:auto">
            </div>
            <div class="testimonial_slider owl-carousel">

                <div class="media testimonial_item">
                    <img class="rounded-circle" src="./image/Hotel-jafran/client/course-1.jpg" style="width: 150px; height: 150px;" alt="">

                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="./image/Hotel-jafran/client/event-3.jpg" style="width: 150px; height: 150px;" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="./image/Hotel-jafran/client/person.png" style="width: 150px; height: 150px;" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="./image/Hotel-jafran/client/course-1.jpg" style="width: 150px; height: 150px;" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->



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
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> reserved Hotel Grand Zafran | by <span><a href="www.hilfideveloper.com" style="color:lightcoral">Smith IT</a></span></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
            var iconMap = {
                info: "fa fa-info-circle",
                success: "fa fa-thumbs-up",
                warning: "fa fa-exclamation-triangle",
                danger: "fa ffa fa-exclamation-circle"
            };

            var iconAdded = false;

            var alertClasses = ["alert", "animated", "flipInX"];
            alertClasses.push("alert-" + severity.toLowerCase());

            if (dismissible) {
                alertClasses.push("alert-dismissible");
            }

            var msgIcon = $("<i />", {
                "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
            });

            var msg = $("<div />", {
                "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
            });

            if (title) {
                var msgTitle = $("<h4 />", {
                    html: title
                }).appendTo(msg);

                if (!iconAdded) {
                    msgTitle.prepend(msgIcon);
                    iconAdded = true;
                }
            }

            if (summary) {
                var msgSummary = $("<strong />", {
                    html: summary
                }).appendTo(msg);

                if (!iconAdded) {
                    msgSummary.prepend(msgIcon);
                    iconAdded = true;
                }
            }

            if (details) {
                var msgDetails = $("<p />", {
                    html: details
                }).appendTo(msg);

                if (!iconAdded) {
                    msgDetails.prepend(msgIcon);
                    iconAdded = true;
                }
            }


            if (dismissible) {
                var msgClose = $("<span />", {
                    "class": "close", // you need to quote "class" since it's a reserved keyword
                    "data-dismiss": "alert",
                    html: "<i class='fa fa-times-circle'></i>"
                }).appendTo(msg);
            }

            $('#' + appendToId).prepend(msg);

            if (autoDismiss) {
                setTimeout(function() {
                    msg.addClass("flipOutX");
                    setTimeout(function() {
                        msg.remove();
                    }, 1000);
                }, 5000);
            }
        }
    </script>





    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $(".roomid").on('change', function(e) {

                var roomid = this.value;
                let ritem = $(this).parent().parent();
                $.ajax({

                    url: "getIdroom.php",
                    method: "get",
                    data: {
                        id: roomid
                    },
                    success: function(result) {


                        console.log(result);

                        $("#room_name").val(result.name);

                        $("#room_price").val(result.price);

                        $("#room_person").val(result.member);

                        $("#room_facilities").val(result.facilities);

                        $("#room_features").val(result.features);






                        //                    document.getElementById('payment_type').innerText=result.payment_type;




                    }
                })
            })

        })
    </script>



</body>

</html>