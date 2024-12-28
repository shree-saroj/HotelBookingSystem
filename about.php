<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHREE HOTEL - ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php include './Inc/links.php'; ?>
  <style>
    .box:hover {
      border-top-color: var(--teal) !important;
    }
  </style>
</head>

<body class="bg-light">


  <?php include './Inc/header.php'; ?>


  <div class="my-5 px-4">
    <h2 class="h-font fw-bold text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3 col-lg-8 col-md-6 m-auto">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos nemo alias quaerat aliquam aspernatur velit recusandae, eius ullam eaque quo distinctio, delectus quibusdam quam consectetur nihil odio, id commodi mollitia!
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo consequatur dolore nulla suscipit sit quos iusto? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo consequatur dolore nulla suscipit sit quos iusto?
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
        <img src="./Assets/images/about/about.jpg" class="w-100" />
      </div>
    </div>
  </div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./Assets/images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./Assets/images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./Assets/images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVEIWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./Assets/images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4>
        </div>
      </div>
    </div>
  </div>



  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="./Assets/images/about/Team.jpg" class="w-100" />
          <h5 class="mt-2">Random Person</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>


  <?php include './Inc/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script type="text/javascript">
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      },
    });
  </script>

</body>

</html>