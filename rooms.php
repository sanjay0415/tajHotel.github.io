<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAJ Hotel - ROOMS</title>
    <?php
    require('inc/links.php');
    ?>
</head>

<body class="bg-light">

    <!-- using header.php from include folder directly here for navbar (we r doing bcoz we have to navbar in multilple pages so)-->
    <?php
    require('inc/header.php');
    ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et laudantium aliquid iure
            odio iusto in <br> eveniet nihil perferendis laboriosam amet? Facilis praesentium alias nam rem doloribus
            pariatur neque et vel?</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- copying navbar from BS with toggle option for Filters -->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4s">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">

                            <!-- check Availibility  -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Check Availibility</h5>
                                <label class="form-label">check-in</label>
                                <input type="date" class="form-control shadow-none mb-3" />

                                <label class="form-label" style="font-weight: 500;">check-out</label>
                                <input type="date" class="form-control shadow-none" />
                            </div>

                            <!-- copy  -->
                            <!-- Facilities  -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1" />
                                    <label class="form-check-label" for="f1">Facility 1</label>
                                </div>
                                <!-- copy  -->
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1" />
                                    <label class="form-check-label" for="f2">Facility 2</label>
                                </div>

                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1" />
                                    <label class="form-check-label" for="f3">Facility 3</label>
                                </div>
                            </div>

                            <!-- copy  -->
                            <!-- Guests  -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label" for="f1">Adults</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                    <div>
                                        <label class="form-label" for="f1">Children</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- keeping horizntal cards   -->
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <!-- column -1  -->
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/r1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <!-- column -2  -->
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                            <!-- features  -->
                            <div class="features mb-3">
                                <h6 class="mb-3">Features</h6>
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
                            <div class="facility mb-3">
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
                            <div class="facility">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    3 Children
                                </span>
                            </div>
                        </div>

                        <!-- column -3  -->
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4"><i class="bi bi-currency-rupee"></i>200 per night</h6>
                            <a href="#" class="btn btn-s, w-100 text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-s, w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>

                <!-- card copy - 1   -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <!-- column -1  -->
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/r1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <!-- column -2  -->
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                            <!-- features  -->
                            <div class="features mb-3">
                                <h6 class="mb-3">Features</h6>
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
                            <div class="facility mb-3">
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
                            <div class="facility">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    3 Children
                                </span>
                            </div>
                        </div>

                        <!-- column -3  -->
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"><i class="bi bi-currency-rupee"></i>200 per night</h6>
                            <a href="#" class="btn btn-s, w-100 text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-s, w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
                </div>
            
                <!-- card copy - 2   -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <!-- column -1  -->
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/r1.jpg" class="img-fluid rounded" alt="...">
                        </div>

                        <!-- column -2  -->
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Simple Room Name</h5>
                            <!-- features  -->
                            <div class="features mb-3">
                                <h6 class="mb-3">Features</h6>
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
                            <div class="facility mb-3">
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
                            <div class="facility">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge bg-warning text-dark rounded-pill text-wrap lh-base">
                                    3 Children
                                </span>
                            </div>
                        </div>

                        <!-- column -3  -->
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4"><i class="bi bi-currency-rupee"></i>200 per night</h6>
                            <a href="#" class="btn btn-s, w-100 text-white custom-bg mb-2">Book Now</a>
                            <a href="#" class="btn btn-s, w-100 btn-outline-dark">More Details</a>
                        </div>
                    </div>
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

    </script>
</body>

</html>