<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vistas - Rooms</title>
    <?php require('inc/links.php') ?>
</head>
<body class="back-colour">
    
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">
<!--Filters-->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">FILTER</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">

                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABLITY</h5>
                            <label class="form-label">Check-In</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f1">Facility one</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f2">Facility one</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f3">Facility one</label>
                            </div>
                        </div>

                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                            <div class="d-flex">
                            <div class="me-3">
                            <label class="form-label">Adults</label>
                            <input type="number" class="form-control shadow-none">
                            </div>
                            <div>
                            <label class="form-label">Children</label>
                            <input type="number" class="form-control shadow-none">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

<!--Rooms-->
    <div class="col-lg-9 col-md-12 px-4">
<!--Room 1-->
        <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images\rooms\1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Comfy Room</h5>
            <div class="features mb-3">
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

            <div class="facilities mb-2">
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
                <div class="guests">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        5 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        4 Children
                    </span>
                </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">₹ 2000 /Night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
        </div>
        </div>
    
<!--Room 2-->
<div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images\rooms\2.png" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Family Deluxe Room</h5>
            <div class="features mb-3">
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

            <div class="facilities mb-2">
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
                <div class="guests">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Children
                    </span>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <h6 class="mb-4">₹ 2500 /Night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
        </div>
        </div>
 
<!--Room 3-->
<div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images\rooms\3.png" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Premium Room</h5>
            <div class="features mb-3">
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

            <div class="facilities mb-2">
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
                <div class="guests">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Children
                    </span>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <h6 class="mb-4">₹ 3000 /Night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
        </div>
        </div>
       
<!--Room 4-->
<div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images\rooms\4.png" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Room Sea View</h5>
            <div class="features mb-3">
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

            <div class="facilities mb-2">
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
                <div class="guests">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        5 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        4 Children
                    </span>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <h6 class="mb-4">₹ 4000 /Night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
        </div>
        </div>
 
<!--Room 5-->
<div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images\rooms\5.png" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Room Mountain View</h5>
            <div class="features mb-3">
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

            <div class="facilities mb-2">
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
                <div class="guests">
                <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Adults     
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        3 Children
                    </span>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <h6 class="mb-4">₹ 4000 /Night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
        </div>
        </div>
 

    </div>
</div>
</div>


<!--Footer-->
<?php require('inc/footer.php'); ?>

</body>
</html>