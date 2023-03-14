<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TAJ Hotel - HOME</title>
  <?php
  require('inc/links.php');
  ?>
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
      /*as by default availability-form is static so we can't move*/
    }

    /*making separate responsive for phone screens using media-query*/
    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <!-- using header.php from include folder directly here for navbar (we r doing bcoz we have to navbar in multilple pages so)-->
  <?php
  require('inc/header.php');
  ?>

  <!-- SWIPER JS (carousels) HTML--------------------------------------------------->
  <!-- swiper js html part  -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/c1.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/c2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/c3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/c4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/c5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/c6.png" class="w-100 d-block" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- SWIPER JS (carousels) ends here----------------------------------------------->

  <!-- Check availability form  ----------------------------------------------------->
  <!-- Booking component  -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">check-in</label>
              <input type="date" class="form-control shadow-none" />
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">check-out</label>
              <input type="date" class="form-control shadow-none" />
            </div>

            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Check availability form ends here -------------------------------------------->

  <!-- Our Rooms -------------------------------------------------------------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Our Rooms</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/r1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6><i class="bi bi-currency-rupee"></i>200 per night</h6>

            <!-- features  -->
            <div class="features mb-3 mt-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Balacony
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <!-- facility -->
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Telivision
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Room Heater
              </span>
            </div>

            <!-- guests -->
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 Children
              </span>
            </div>

            <!-- rating -->
            <div class="rating mb-4">
              <h6>Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
              </span>
            </div>

            <!-- book button  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-s, text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-s, btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- copy 1  -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/r1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6><i class="bi bi-currency-rupee"></i>200 per night</h6>

            <!-- features  -->
            <div class="features mb-3 mt-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Balacony
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <!-- facility -->
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Telivision
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Room Heater
              </span>
            </div>

            <!-- guests -->
            <div class="facility mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 Children
              </span>
            </div>

            <!-- rating -->
            <div class="rating mb-4">
              <h6>Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
              </span>
            </div>

            <!-- book button  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-s, text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-s, btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- copy 2  -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/r1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room</h5>
            <h6><i class="bi bi-currency-rupee"></i>200 per night</h6>

            <!-- features  -->
            <div class="features mb-3 mt-3">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                1 Balacony
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 sofa
              </span>
            </div>

            <!-- facility -->
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Wifi
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Telivision
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                AC
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                Room Heater
              </span>
            </div>

            <!-- guests -->
            <div class="facility mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                5 Adults
              </span>
              <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                3 Children
              </span>
            </div>

            <!-- rating -->
            <div class="rating mb-4">
              <h6>Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
                <i class="bi bi-star-fill text-danger"></i>
              </span>
            </div>

            <!-- book button  -->
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-s, text-white custom-bg">Book Now</a>
              <a href="#" class="btn btn-s, btn-outline-dark">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Rooms...</a>
      </div>
    </div>
  </div>
  <!-- Our Rooms ends here----------------------------------------------------------->

  <!-- Our Facilities --------------------------------------------------------------->
  <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Our Facilities</h2>

  <!-- facilities list -->
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/f1.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/f6.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/f3.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/f4.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-2 col-md2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/facilities/f5.svg" alt="">
        <h5 class="mt-3">Wifi</h5>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">More Facilities...</a>
      </div>
    </div>
    <!-- Our Facilities ends here------------------------------------------------------>

    <!-- testimonials ----------------------------------------------------------------->
    <!-- testimonials part  -->
    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Testimonials</h2>

    <div class="container">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

          <!-- original -->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/rooms/r2.png" width="30px" alt="">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p class="review">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magni quisquam libero molestias
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
            </div>
          </div>

          <!-- copy 1  -->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/rooms/r2.png" width="30px" alt="">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p class="review">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magni quisquam libero molestias
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
            </div>
          </div>

          <!-- copy 2  -->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/rooms/r2.png" width="30px" alt="">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p class="review">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magni quisquam libero molestias
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
            </div>
          </div>

          <!-- copy 3  -->
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/rooms/r2.png" width="30px" alt="">
              <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p class="review">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, magni quisquam libero molestias
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
              <i class="bi bi-star-fill text-danger"></i>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-lg-12 text-center mt-3">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold">Know More...</a>
      </div>
    </div>
    <!-- testimonials ends here-------------------------------------------------------->


    <!-- Reach us---------------------------------------------------------------------->
    <!-- reach us area  -->
    <h2 class="mt-5 pt-5 mb-4 text-center fw-bold h-font">Reach Us</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.1146263263!2d79.92880448484877!3d13.048043805792522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1677992159017!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call us</h5>
            <a href="tel: +917619419186" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917619419186</a>
            <br>
            <a href="tel: +917619419186" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918819419186</a>
          </div>

          <!-- copy 1 -->
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow us</h5>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter"></i> Twitter
              </span>
            </a>
            <br>
            <!-- copy 1  -->
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook"></i> Facebook
              </span>
            </a>
            <br>

            <!-- copy 2  -->
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram"></i> Instagram
              </span>
            </a>
            <br>
          </div>
        </div>
      </div>
    </div>
    <!-- Reach us ends here------------------------------------------------------------>


    <!-- using footer.php from include folder directly here for footer (we r doing bcoz we have to footer in multilple pages so)-->
    <?php
    require('inc/footer.php');
    ?>

    <!-- 
    <br><br><br><br><br>
    <br><br><br><br><br> -->


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- swiper js script  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- html swiper js script tag  -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        /*loop and autoplay code is written newly*/
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      //for testimonials
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "3",
        /*chaged*/
        loop: true,
        /*chaged*/
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          /*chaged - to adjust according to screen size*/
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
            slidesPerView: 3,
          }
        }
      });
    </script>
</body>

</html>