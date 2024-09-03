<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DORMITORY MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="home.css" />


    <style>
        .modal-body {
            /*background-color: rgba(11,11,11,.5);*/
            background-color: #303841;
        }

        .carousel-inner {
            width: 100%;

        }

        .bdr {
            border-bottom: 2px solid red;
        }

        .radius {
            border-radius: 15px;
            transition: 0.5s all ease;
        }

        .radius:hover:after {

            content: " >";

        }

        .slick-initialized .slick-slide {
            outline: none;
        }

        .checked {
            color: orange;
        }

        .img-hv {
            transition: 0.5s all ease;
        }

        .img-hv:hover {
            transform: scale(1.2, 1.2);
        }

        .active,
        .menu-bar ul li:hover {
            background: #2bab0d;
            border-radius: 5px;

        }

        .sub-menu-1 {
            display: none;
        }

        .menu-bar ul li:hover .sub-menu-1 {
            display: block;
            position: absolute;
            background: rgb(0, 100, 0);
            margin-top: 15px;
            margin-left: -15px;

        }

        .menu-bar ul li:hover .sub-menu-1 ul {
            display: block;
            margin: 10px;
        }
        .header {
            background-color: #ead7c3;
        }
    </style>
</head>

<body>

    <header class="header">
        <img src="images/logo.jpg" alt style="height: 70px; width: 65px">
        <a href="#" class="logo" style="text-decoration: none;">DORMITORY MANAGEMENT SYSTEM</a>
        <nav class="navbar">
            <a href="#about" style=" text-decoration:none; ">About</a>
            <a href="#provost" style=" text-decoration:none; ">Notice</a>
            
            <a href="#Gallery" style=" text-decoration:none; ">Gallery</a>
            <a href="#dining" style=" text-decoration:none; ">Dining</a>
            <a href="#contact" style=" text-decoration:none; ">contact</a>
            <button id="admin" style="    margin-left: 7px;height: 40px;width: 80px"><a href="login.php" style=" text-decoration:none; text-align:centre" id="link1">Login</a></button>
        </nav>

        </nav>
        <!----Login form---->
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h4 class="text-muted">Login To Your Accout</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-body ">
                        <form action="" class="was-validated">
                            <div class="form-group">
                                <label for="email" class="text-info font-weight-bold">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" required>
                                <div class="valid-feedback">
                                    <strong>Your email address is valid</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Please Enter a valid email address</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="text-primary font-weight-bold">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" minlength="6" maxlength="8" required>
                                <div class="valid-feedback">
                                    <strong>Your password very strong</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Enter your password first</strong>
                                </div>
                            </div>
                            <div class="form-group form-group-check">
                                <label for="chk" class="form-group-label text-light font-weight-bold">
                                    <input type="checkbox" class="form-group-input"> Remember Me
                                </label>
                            </div>
                            <input type="submit" class="form-control btn btn-outline-success font-weight-bold" value="LogIn">
                        </form>
                    </div> <!----modal body close--->
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div> <!----modal content close--->
            </div> <!----modal dialog close--->
        </div> <!----modal close--->




        </nav>
    </header>
    <!-- header end -->

    <!-- main slide -->
    <div id="pslide" class="carousel slide" data-ride="carousel" style="margin-left: 40px; margin-right:40px">

        <!-- slider -->

        <div class="carousel-inner" data-interval="500">
            <!-- 1st slider -->
            <div class="carousel-item active">
                <!-- slider caption -->
                <div class="carousel-caption d-none d-md-block">
                    <!--   <h2 class="display-1 text-danger">This is my first slider</h2> -->
                </div>
                <img src="images/1.png" height="600px" width="100%" alt="">
            </div>
            <!-- 2nd slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--  <h2 class="display-1">This is my second slider</h2> -->
                </div>
                <img src="images/h1.jpg" height="600px" width="100%" alt="">
            </div>
            <!-- 3rd slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--   <h2 class="display-1">This is my third slider</h2> -->
                </div>
                <img src="images/h9.jpg" height="600px" width="100%" alt="">
            </div>
            <!-- 4th slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--    <h2 class="display-1">This is my third slider</h2> -->
                </div>
                <img src="images/2.jpg" height="600px" width="100%" alt="">
            </div>
        </div>

        <!-- next and prev icon -->
        <a href="#pslide" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#pslide" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- slider end -->

    <!-- about us section starts  -->
    <center>
        <h1 class="heading" style="margin-bottom: -50px;"> <span>About</span> </h1>
    </center>
    <section class="ftco-wrap-about">

        <div class="intro" id="about">
            <div class="container" id="sec_cond">
                <div class="row">
                    <div class="col">
                        <div class="intro_content" style="width: 550px; margin-right: 172px;height: 415px;">
                            <!-- <div class="intro_subtitle page_subtitle">About Us</div> -->
                            <div class="intro_title">
                                <h3>GREETINGS</h3>
                            </div>
                            <div class="intro_text">
                                <p>Hey there and welcome to the SS university dormitory! We're thrilled to have you here as a new resident. Our dorm is more than just a place to sleep - it's a community where you'll make lifelong friends and memories. We've got all the amenities you need to make your stay comfortable and enjoyable, from study lounges to laundry facilities. And our friendly staff is always here to help with any questions or concerns you may have. So kick back, relax, and get ready for an unforgettable college experience!
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6.5 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/slider5.jpg" alt="intro" style="max-width: 100%;
    border-radius: 0px 0px 10px 10px; border: 2px solid darksalmon"></div>
                            </div>
                            <!-- <div class="col-xl-4 col-md-4 intro_col">
                                <div class="intro_image"><img src="images/img2.jpg" alt="intro"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- provost  start -->
    <section class="provost" id="provost">

        <center>
            <h1 class="heading" style="margin-top: 10px;"> <span>NOTICE</span> </h1>
        </center>

        <div class="box-container">

            <div class="box">
                <h3 align="left" style="padding: 5px 10px 5px 70px;">
                Excellent residential facilities are provided for girls and boys on the campus. 
           <br><br>Indoor and outdoor sports facilities are provided for all hostel students. 
             <br><br>Furnished rooms with laundry services are provided. 
                 <br><br>ATM Facility – SJBIT offers elaborate banking services within the campus premises. 
                 <br><br>24-hour CCTV surveillance throughout the campus.
                 <br><br> The cafeteria of university is an ideal place for students to hang out and spend leisure time.<br> <br>The cafeteria provides fresh & hygienic food to students. 
                   <br><br>Two different mess halls, which can accommodate more than 500 students at any given time, serve wholesome and hygienic food 4 times 
                   a day. <br><br>Arrangement has been made for the boys and girls to dine separately.
                </h3>
            </div>
        </div>
    </section>

    <!-- doctors section starts  -->

    

    <!-- doctors section ends -->


    <!-- Galary section start-->
    <div class="container-fluid pt-5 pb-3" id="Gallery" style="margin-top:20px">
        <h1 class=" heading">Galary</h1>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-info m-1 active" data-filter="*" style=" text-decoration:none; ">All</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first"><a href="#room" style=" text-decoration:none; "> Room </a>
                    </li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second"><a href="#floor" style=" text-decoration:none; ">Floor</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".third"><a href="#canteen" style=" text-decoration:none; ">Canteen</li>
                </ul>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center" id="sec_cond1">
                <div class="row portfolio-container" id="room">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/r1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/r1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/r2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/r2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/r3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/r3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/f1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/f1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/f2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/f2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/f3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/f3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/c1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/c1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/c2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/c2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/c3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/c3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Dining start -->
    </section>
    <div class="container-fluid pt-5 pb-3" id="dining" style="margin-top:20px">
        <h1 class=" heading">Dining</h1>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <a href="Dining/Order_form.html">
                        <li class="btn btn-sm btn-outline-info m-1 active" data-filter="*" style=" text-decoration:none; "> Order</li>
                    </a>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first"><a href="#breakfast" style=" text-decoration:none; "> Breakfast </a>
                    </li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second"><a href="#launch" style=" text-decoration:none; ">Launch</li>
                    
                </ul>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center" id="sec_cond1">
                <div class="row portfolio-container" id="breakfast">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/ruti.jpg" alt="">
                            <h2 style="color:blue">Roti</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/ruti.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="breakfast">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/vaji.jpg" alt="">
                            <h2 style="color:blue">Vaji</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/vaji.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="breakfast">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dall.jpg" alt="">
                            <h2 style="color:blue">Daal</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dall.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="launch">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/rice.jpg" alt="">
                            <h2 style="color:blue">Rice</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/rice.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="dinner">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/nan.avif" alt="">
                            <h2 style="color:blue">Naan</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dinner">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/egg.jpg" alt="">
                            <h2 style="color:blue">Egg</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dining End -->


    <!-- Contact Start -->


    <section id="contact" class="contact">
        <h1 class=" heading">Contact</h1>
        <div class="container" id="cont">

            <div class="section-title" id="sec_cond">
                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bx bx-home"></i>
                                <h4>Location:</h4>
                                <p>SS University,Bengaluru</p>
                            </div>

                            <div class="mail">
                                <i class="bx bx-envelope"></i>
                                <h4>mail:</h4>
                                <p>SS@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bx bxl-skype"></i>
                                <h4>Call:</h4>
                                <p>02224491052</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34273.80594628269!2d77.51287756387171!3d12.970755788052053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dd95efc3ae7%3A0xc90db791aedd9aad!2sVijayanagar%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1709197319649!5m2!1sen!2sin" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="message/message.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Stu_ID" class="message">Student ID</label>
                                    <input type="text" name="Stu_ID" class="form-control" id="Stu_ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Name" class="message">Student Name</label>
                                    <input type="text" class="form-control" name="Name" id="Name" data-rule="Name" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Room_Num" class="message">Room Number</label>
                                <input type="text" class="form-control" name="Room_Num" id="Room_Num" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="Messages" class="message">Message</label>
                                <textarea type="text" class="form-control" name="Messages" id="Messages" rows="15" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center" id="button_mes"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->


    <!-- footer start -->

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#provost" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Notice </a>
                <a href="#about" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> About </a>
                <a href="#Gallery" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Gallery </a>
                <a href="#contact" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Contact</a>
            </div>

           

            <div class="box">
                <h3>contact info</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-phone" style="text-decoration: none;"></i> 1324 </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-phone" style="text-decoration: none;"></i> 02224491045-51 </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-envelope"></i> SS@gmail.com </a>
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34273.80594628269!2d77.51287756387171!3d12.970755788052053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dd95efc3ae7%3A0xc90db791aedd9aad!2sVijayanagar%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1709197319649!5m2!1sen!2sin" style="text-decoration: none;"> <i class="fas fa-map-marker-alt"></i> SS University, Vijaynagar, Bengaluru. </a>
            </div>

            

        </div>



    </section>



    <!-- footer end -->
    <!-- footer -->

    <!-- footer -->






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--  smooth scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- slick slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>

    <script>
        $('.pslick').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

</body>

</html>