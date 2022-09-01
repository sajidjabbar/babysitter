<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Style Link Here -->
<link rel="stylesheet" href="css/auth.css">
<!-- Style Link Here -->
<section class="auth register">
    <div class="conainer-fluid mx-0">
        <div class="row mx-0">
            <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-12 ps-0">
                <div class="main_img h-100">
                    <figure class="h-100">
                        <img src="img/auth.png" class="img-fluid w-100 h-100" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-12 px-0">
                <div class="row mx-0 h-100">
                    <div class="col-lg-1 col-md-2"></div>
                    <div class="col-xxl-8 col-xl-11  col-xs-11 me-auto  h-100">
                        <div class="auth_content h-100">
                            <div class="top_text top_heading pink_line">
                                <span class="top_small_heading">Welcome To Babysitter</span>
                                <h4>Register Your Account</h4>
                                <p class="small_text mb-1">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat
                                    null
                                    Duis aute irure dolor
                                </p>
                                <span class="login_option">Don't have Account?
                                    <a href="login.php" class="popins_sb pink">Login</a>
                                </span>
                            </div>

                            <div class="regiter_area mt-4">
                                <div class="all_register_tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" id="normal_user" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Sign up as a Customer</button>
                                        </li>
                                        <li class="nav-item" id="babysitterregister" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Sign up as a
                                                Baby Sitter</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="form_start">
                                            <form method="POST">
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="First Name">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <input type="text" name="" id="" placeholder="Email Address">
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <input type="text" name="" id="" placeholder="Phone Number">
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Password">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-row mt-3">
                                                    <button type="submit">Sign up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="form_start">
                                            <form method="POST">
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="First Name">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Email Address">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Contact Number">
                                                    </div>
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Password">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Date of birth">
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Hourly Rate">
                                                    </div>
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <input type="text" name="" id="" placeholder="Address">
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <input type="text" name="" id="" placeholder="Bio">
                                                </div>
                                                <div class="form-row  mt-3">
                                                    <div class="single-input">
                                                        <label for="image" class="upload_img">
                                                            <input type="file" id="image" hidden>
                                                            <div class="upload_img d-flex">
                                                                <span>Profile Picture :</span>
                                                                <p class="ps-2 mb-0">
                                                                    <img src="img/upload.png" class="img-fluid" alt="">
                                                                    Upload
                                                                </p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="single-input">
                                                        <input type="text" name="" id="" placeholder="Experience">
                                                    </div>
                                                </div>
                                                <div class="form-row my-3">
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->