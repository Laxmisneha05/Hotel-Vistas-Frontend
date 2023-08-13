<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vistas - Contact</title>
    <?php require('inc/links.php') ?>
</head>
<body class="back-colour">
    
<?php require('inc/header.php'); ?>

<!--Contact us heading and description-->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Velit vitae fuga <br>facilis quibusdam saepe ipsa sit incidunt 
        dolores accusamus totam.
    </p>
</div>

<!--Below 2 cards-->
<div class="container">
    <div class="row">

        <!--Map and other contact details-->
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.03900799053!2d72.88118615!3d19.082250749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1689604134501!5m2!1sen!2sin" loading="lazy"></iframe>
            <h5>Address</h5>
            <a href="https://goo.gl/maps/zkn147hC6aTHxJdy6" target="blank" class="d-inline block text-decoration-none text-dark">
                <i class="bi bi-geo-alt-fill"></i> &nbsp; Hotel Vistas, Panvel, Navi Mumbai
            </a>
            <h5 class="mt-4">Call Us</h5>
                <a href="tel: 123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> &nbsp; 123456789
                </a>
                <br>
                <a href="tel: 123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> &nbsp; 123456789
                </a>
                <h5 class="mt-4">Email</h5>
                <a href="mailto: snehachilukuri28@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i>    
                    laxmi@gmail.com
                </a>
                <h5 style="font-size: 19px;" class="mt-4">Follow Us</h5>
                <a href="https://www.instagram.com/" class="d-inline-block text-dark fs-5 me-4">
                    <i class="bi bi-twitter"></i>
                </a>

                <a href="https://www.instagram.com/" class="d-inline-block text-dark fs-5 me-4">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="https://www.instagram.com/" class="d-inline-block text-dark fs-5 ">
                    <i class="bi bi-facebook"></i>
                </a>
            </div>
        </div>

        <!--Message form-->
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <form>
                    <h5>Send a Message</h5>
                    <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Name</label>
                    <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Email</label>
                    <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Subject</label>
                    <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label class="form-label" style="font-weight: 500;">Message</label>
                    <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-4 shadow-none">SEND</button>
                </form>
        </div>
    </div>
</div>
</div>

<!--Footer-->
<?php require('inc/footer.php'); ?>

</body>
</html>