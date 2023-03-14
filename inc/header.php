<!--NAVBAR AREA------------------------------------------------------------------->
  <!-- navbar area  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fs-3 fw-bold h-font" href="index.php">TAJ Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="rooms.php">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="about.php">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>

          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- MODAL Code BS---------------------------------------------------------------->
  <!-- Modal -->
  <!-- Login modal  -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title">
              <i class="bi bi-person-circle fs-3 me-3"></i>User Login
            </h5>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none" />
            </div>

            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" />
            </div>

            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark">LOGIN</button>
              <a href="javascript: void(0)" class="text-secondary">Forgot Password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Register modal  -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header d-flex align-items-center">
            <h5 class="modal-title">
              <i class="bi bi-r-circle-fill me-3"></i>User Register
            </h5>
            <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge bg-warning text-dark rounded-pill mb-3 text-wrap lh-base">Note : Your details must match
              with your ID (Aadhaar card,
              Passport, Driving License, etc). That will be required during
              your check-in.</span>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none" />
                </div>

                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control" rows="1"></textarea>
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>

                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- MODAL Code BS ends here------------------------------------------------------>
  <!--NAVBAR AREA ENDS-------------------------------------------------------------->