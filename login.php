<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Style Link Here -->
<link rel="stylesheet" href="css/auth.css">
<!-- Style Link Here -->
<section class="auth login">
    <div class="conainer-fluid mx-0">
        <div class="row mx-0">
            <div class="col-xl-6 col-lg-7 col-md-12 ps-0">
                <div class="main_img">
                    <figure>
                        <img src="img/auth.png" class="img-fluid w-100" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-xl06 col-lg-5 col-md-12 px-0 mt-5">
                <div class="row mx-0 h-100">
                    <div class="col-lg-1 col-md-2"></div>
                    <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11 col-xs-11 mx-auto  h-100">
                        <div class="auth_content h-100">
                            <div class="top_text top_heading pink_line">
                                <span class="top_small_heading">Welcome To Babysitter</span>
                                <h4>Login Your Account</h4>
                                <p class="small_text">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat
                                    null
                                    Duis aute irure dolor
                                </p>
                                <span>Don't have Account? <a href="register.php" class="popins_sb pink">Create
                                        New</a></span>
                            </div>
                            <div class="form_start">
                                <form method="POST">
                                    <div class="form-row mt-4">
                                        <input type="text" name="" id="" placeholder="Email Address">
                                    </div>
                                    <div class="form-row mt-4">
                                        <input type="text" name="" id="" placeholder="Password">
                                    </div>
                                    <div class="remember_flex">
                                        <div class="remember">
                                            <label class="remember_me popins_r small_text">Remember Me
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="password">
                                            <a href="forgot-password.php" class="popins_r small_text pink u_line">Forgot
                                                Password</a>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit">Login</button>
                                    </div>
                                </form>
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