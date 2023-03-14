<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAJ Hotel - ABOUT</title>
    <?php
    require('inc/links.php');
    ?>
    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">

    <!-- using header.php from include folder directly here for navbar (we r doing bcoz we have to navbar in multilple pages so)-->
    <?php
    require('inc/header.php');
    ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et laudantium aliquid iure odio iusto in <br> eveniet nihil perferendis laboriosam amet? Facilis praesentium alias nam rem doloribus pariatur neque et vel?</p>
    </div>

    <!-- container-1 consist of about info and photo of owner -------------------------->
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quasi iste, fuga doloribus consectetur ea, molestiae iusto nam magni deserunt voluptatem at? Provident maiores pariatur reiciendis, sit eum. </p>
            </div>

            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
                <img src="images/about/a3.jpg" class="w-100" alt="">
            </div>
        </div>
    </div>
    <!-- container-1 consist of about info and photo of owner ends here ---------------->

    <!-- our rooms, Customers, Reviews and Staffs -------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/5.svg" width="70px" alt="">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>

            <!-- copy 1  -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/a4.svg" width="70px" alt="">
                    <h4 class="mt-3">2500+ Customers</h4>
                </div>
            </div>

            <!-- copy 2  -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/6.svg" width="70px" alt="">
                    <h4 class="mt-3">150+ Reviews</h4>
                </div>
            </div>

            <!-- copy 3  -->
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/7.svg" width="70px" alt="">
                    <h4 class="mt-3">250+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- our rooms, Customers, Reviews and Staffs ends here------------------------->

    <!-- management team  ---------------------------------------------------------->
    <div class="container px-4 mt-5">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>

                <!-- copy  -->
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>

                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/a2.jpg" class="w-100" alt="" style="
                    height: 350px;">
                    <h5 class="mt-2">Random name</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- management team  ends here------------------------------------------------->



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
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
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