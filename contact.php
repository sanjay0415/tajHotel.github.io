<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAJ Hotel - CONTACT</title>
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
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et laudantium aliquid iure odio iusto in <br> eveniet nihil perferendis laboriosam amet? Facilis praesentium alias nam rem doloribus pariatur neque et vel?</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- this is for google map part  -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497511.1146263263!2d79.92880448484877!3d13.048043805792522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1677992159017!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/hN4qYXpup8Vqiv7x7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>Chennai சென்னை Tamil Nadu</a>

                    <div class="bg-white mt-4 rounded mb-4">
                        <h5>Call us</h5>
                        <a href="tel: +917619419186" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+917619419186</a>
                        <br>
                        <a href="tel: +917619419186" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918819419186</a>

                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: tajHotelWebdev@gmail.com" class="d-inline-block text-decoration-none text-dark">tajHotelWebdev@gmail.com</a>

                        <h5 class="mt-4">Follow us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram"></i>
                        </a>

                    </div>
                </div>
            </div>

            <!-- send message part -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
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