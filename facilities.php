<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vistas - Facilities</title>
    <?php require('inc/links.php') ?>
    <style>
        .pop:hover {
            border-top-color:rgb(164, 144, 124) !important;
            transform: scale(1.03);
            transition: all 0.3s;
            }
    </style>
</head>
<body class="back-colour">
    
<?php require('inc/header.php'); ?>

<!--Heading and description-->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Velit vitae fuga <br>facilis quibusdam saepe ipsa sit incidunt 
        dolores accusamus totam.
    </p>
</div>

<!--Facilities cards-->
<div class="container">
    <div class="row">
        <!--Facility 1-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\wifi.svg" width="40px">
                    <h5 class="m-0 ms-3"> Wi-Fi</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <!--Facility 2-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\AC.svg" width="40px">
                    <h5 class="m-0 ms-3">AC</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <!--Facility 3-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\Heater.svg" width="40px">
                    <h5 class="m-0 ms-3">Heater</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <!--Facility 4-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\Fire.svg" width="40px">
                    <h5 class="m-0 ms-3">Fire Alarm</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <!--Facility 5-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\TV.svg" width="40px">
                    <h5 class="m-0 ms-3">TV</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <!--Facility 6-->
        <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-dark border-4 pop">
                <div class="d-flex align-items-center mb-2">
                    <img src="images\features\Massage.svg" width="40px">
                    <h5 class="m-0 ms-3">Massage Room</h5>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

    </div>
</div>

<!--Footer-->
<?php require('inc/footer.php'); ?>

</body>
</html>