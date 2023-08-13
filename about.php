<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Vistas - About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <style>
        .box{
            border-top-color: rgb(164, 144, 124) !important;
        }
        .swiper-container {
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body class="back-colour">
    
<?php require('inc/header.php'); ?>

<!--About heading and description-->
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Velit vitae fuga <br>facilis quibusdam saepe ipsa sit incidunt 
        dolores accusamus totam.
    </p>
</div>

<!--Pic with side in description-->
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
           <h3 class="mb-3">Lorem ipsum dolor sit.</h3> 
           <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Accusamus fugit facere deleniti cumque autem qui?
           </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images\about\about.jpg" class="w-100">
        </div>
    </div>
</div>

<!--Below 4 cards-->
<div class="container mt-5">
    <div class="row">

        <!--card 1-->
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images\about\hotel.svg" width="70px">
                <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>

        <!--card 2-->
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images\about\customers.svg" width="70px">
                <h4 class="mt-3">200+ CUSTOMERS</h4>
            </div>
        </div>

        <!--card 3-->
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images\about\rating.svg" width="70px">
                <h4 class="mt-3">150+ REVIEWS</h4>
            </div>
        </div>

        <!--card 4-->
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                <img src="images\about\staff.svg" width="70px">
                <h4 class="mt-3">200+ STAFFS</h4>
            </div>
        </div>

    </div>
</div>


<!--Carousel-->
<h3 class="my-5 fw-bold h-font text-center">More Hotel Pictures</h3>

<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">

    <!--slide 1-->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images\about\1.jpeg" class="w-100 swiper-container">
      </div>

    <!--slide 2-->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images\about\2.jpeg" class="w-100 swiper-container">
      </div>

    <!--slide 3-->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images\about\3.jpg" class="w-100 swiper-container">
      </div>

    <!--slide 4-->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images\about\4.jpg" class="w-100 swiper-container">
      </div>

    <!--slide 5-->
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="images\about\5.jpeg" class="w-100 swiper-container">
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>


<?php require('inc/footer.php'); ?>

<!-- Swiper JS script tag-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper for Carousel-->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2,
        },
      }
  });
</script>

</body>
</html>