<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vistas - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="path/to/swiper.css">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .availability-form{
            margin-top: -20px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
        }
        .rating {
            margin-top: 10px;
        }
        
        }
    </style>
    <?php require('inc/links.php') ?>
</head>
<body class="back-colour">
<?php require('inc/header.php'); ?>
<!--Carousel-->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container shadow">
            <div class="swiper-wrapper shadow">
                <div class="swiper-slide shadow">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

<!--Check Availability form-->
    <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none"> 
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none"> 
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


<!--our rooms-->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <!--Room 1-->
            <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 550px; margin: auto;">
            <img src="images\rooms\1.jpg" class="card-img-top">

            <div class="card-body">
                <h5>Comfy Room</h5>
                <h6 class="mb-4">₹ 2000 /Night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Cross ventilation windows
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC    
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wi-Fi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Mini Fridge
                    </span>
                </div>
                <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        5 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        4 Children
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>
            </div>

            <!--Room 2-->
            <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 550px; margin: auto;">
            <img src="images\rooms\2.png" class="card-img-top">

            <div class="card-body">
                <h5>Family Deluxe Room</h5>
                <h6 class="mb-4">₹ 2500 /Night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Cross ventilation windows
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC    
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wi-Fi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Mini Fridge
                    </span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Children
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>
            </div>

            <!--Room 3-->
            <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow" style="max-width: 550px; margin: auto;">
            <img src="images\rooms\3.png" class="card-img-top">
            <div class="card-body">
                <h5>Premium Room</h5>
                <h6 class="mb-4">₹ 3000 /Night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Cross ventilation windows
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Sofa
                    </span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC    
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Wi-Fi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Television
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Mini Fridge
                    </span>
                </div>
                <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Children
                    </span>
                </div>
                <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="rooms.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
            </div>
            </div>
            </div>

            <!--More Rooms button-->
            <div class="col-lg-12 text-center mt-5 my-3">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>
            </div>
    </div>
    </div>


<!--our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images\Features\wifi.svg" width="80px">
                    <h5 class="mt-3">Wi-Fi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images\Features\TV.svg" width="80px">
                    <h5 class="mt-3">TV</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images\Features\AC.svg" width="80px">
                    <h5 class="mt-3">AC</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images\Features\Fire.svg" width="80px">
                    <h5 class="mt-3">Fire Alarm</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images\Features\Heater.svg" width="80px">
                    <h5 class="mt-3">Heater</h5>
                </div>
                <!--More Facilities button-->
                <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities >>></a>
                </div>
            </div>
        </div>

<!--Testimonials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
        
    <div class="container mt-5">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!--Testimonial 1-->
            <div class="swiper-slide bg-white p-4 d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-3">
                    <img src="images\profile.png" width="30" alt="Profile Image" class="me-2">
                    <h6 class="m-0">Sneha</h6>
                </div>
                <p class="text-start mb-3">
                    Overall it was nice experience
                </p>
                <div class="rating text-start">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>

            <!--Testimonial 2-->
            <div class="swiper-slide bg-white p-4 d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-3">
                    <img src="images\profile.png" width="30" alt="Profile Image" class="me-2">
                    <h6 class="m-0">Doraiah</h6>
                </div>
                <p class="text-start mb-3">
                    Nice Service.
                </p>
                <div class="rating text-start">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>

            <!--Testimonial 3-->
            <div class="swiper-slide bg-white p-4 d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-3">
                    <img src="images\profile.png" width="30" alt="Profile Image" class="me-2">
                    <h6 class="m-0">Swapna</h6>
                </div>
                <p class="text-start mb-3">
                    Was a Wonderful Stay.
                </p>
                <div class="rating text-start">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            
            <!--Testimonial 4-->
            <div class="swiper-slide bg-white p-4 d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-3">
                    <img src="images\profile.png" width="30" alt="Profile Image" class="me-2">
                    <h6 class="m-0">Tanuj</h6>
                </div>
                <p class="text-start mb-3">
                    Excellent Reception.
                </p>
                <div class="rating text-start">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>

        <div class="swiper-pagination"></div>
    </div>
    <!--Know more button-->
    <div class="col-lg-12 text-center mt-5 my-3">
                <a href="about.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Know More >>></a>
            </div>
</div>
    </div>


<!--Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689604134501!5m2!1sen!2sin" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="mb-4 p-4 rounded">
                <h5>Call Us</h5>
                <a href="tel: +919420395525" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> &nbsp; +919420395525
                </a>
                <br>
                <a href="tel: +919420395525" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> &nbsp; +919420395525
                </a>
            </div>
        
        <div class="col-lg-4 col-md-4">
            <div class="mb-4 p-4">
                <h5 style="font-size: 19px;">Follow Us</h5>
                <a href="#" class="d-inline-block mb-1">
                <span class="badge text-dark fs-6 p-2">
                    <i class="bi bi-twitter"></i>
                     &nbsp; Twitter
                </span>
                </a>

                <a href="#" class="d-inline-block mb-1">
                <span class="badge text-dark fs-6 p-2">
                    <i class="bi bi-instagram"></i>
                     &nbsp; Instagram
                </span>
                </a>

                <a href="#" class="d-inline-block mb-3">
                <span class="badge text-dark fs-6 p-2">
                    <i class="bi bi-facebook"></i>
                     &nbsp; Facebook
                </span>
                </a>
            </div>
        </div>

    </div>
</div>
</div>

<!--Footer-->
<?php require('inc/footer.php'); ?>

<!--Swipper script tag-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!--carousel effect settings-->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      slidesPerView: "auto",
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 1,
        },
      }
    });
  </script>

</body>
</html>