<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAJ Hotel - FACILITIES</title>
    <?php
    require('inc/links.php');
    ?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.09);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <!-- using header.php from include folder directly here for navbar (we r doing bcoz we have to navbar in multilple pages so)-->
    <?php
    require('inc/header.php');
    ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Facilities</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et laudantium aliquid iure odio iusto in <br> eveniet nihil perferendis laboriosam amet? Facilis praesentium alias nam rem doloribus pariatur neque et vel?</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>

            <!-- copy 1 -->
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>

            <!-- copy 2 -->
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>

            <!-- copy 3 -->
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>

            <!-- copy 4 -->
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>

            <!-- copy 5 -->
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                    <img src="images/facilities/f1.svg" width="40px" alt="">
                    <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam eius possimus enim facere dolore harum reiciendis</p>
                </div>
            </div>
        </div>
    </div>


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