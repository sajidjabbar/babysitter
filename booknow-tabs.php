<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Style Link Here -->
<link rel="stylesheet" href="css/booknow-tabs.css">
<!-- Heading Banner Start Here -->
<section class="sub_banner">
    <div class="container">
        <h3>Book Now</h3>
    </div>
</section>
<!-- Sub_Banner End Here -->
<!-- book-now booking start -->
<section class="booking-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="booking-heading">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                            <g id="Group_9332" data-name="Group 9332" transform="translate(-416 -368)">
                                <circle id="Ellipse_49" data-name="Ellipse 49" cx="13" cy="13" r="13" transform="translate(416 368)" fill="#1f1e2c" />
                                <path id="Path_17400" data-name="Path 17400" d="M-8134.186,358h-12.41" transform="translate(8569.391 22.997)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.4" />
                                <path id="Path_17401" data-name="Path 17401" d="M-8146.231,356.118l4.745-4.745" transform="translate(8569.025 24.882)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.4" />
                                <path id="Path_17402" data-name="Path 17402" d="M-8146.231,351.373l4.745,4.745" transform="translate(8569.025 29.627)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.4" />
                            </g>
                        </svg>
                        Select Booking Type
                    </h3>
                </div>
                <div class="booking-chk">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">One Time Booking</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Recurring Booking</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="wizard">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- STEP 1 -->
                                <div role="tabpanel" class="tab-pane active" id="step1">
                                    <!-- Progress at step -->
                                    <div class="progress-heading">
                                        <h4>step1</h4>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                            <span class="sr-only">25% Complete</span>
                                        </div>
                                    </div>
                                    <!-- Step Title -->
                                    <h4 class="text-left">Select Date and Time</h4>
                                    <!-- Step content -->
                                    <div id="wzd-content" class="col-md-offset-1 col-md-10">
                                        hjhjh
                                        <!-- <div class="col-md-6">
                                            <div class="form_start mt-3">
                                                <form>
                                                    <div class="form-row mt-3">
                                                        <input type="text" name="" id="" placeholder="Email Address">
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="First Name">
                                                        </div>
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <button type="submit">Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div> -->

                                    </div>
                                    <!-- Step navigation controls -->
                                    <div id="wzd-nav" class="row">
                                        <div id="nav-controls" class="col-md-offset-10 col-md-2">
                                            <a class="btn btn-wzd disabled nav-previous" href="#step1" aria-controls="step1" role="tab" data-toggle="tab">ffffff</i></a>
                                            <a class="btn btn-wzd nav-next" href="#step2" aria-controls="step1" role="tab" data-toggle="tab">next</i></a>
                                        </div>
                                    </div>
                                </div>
                                    <!-- END STEP 1 -->
                                    <div role="tabpanel" class="tab-pane" id="step2">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="sr-only">50% Complete</span>
                                            </div>
                                        </div>
                                        <!-- Step title -->
                                        <h1 class="text-center">How did you hear about us?</h1>
                                        <!-- Step content -->
                                        <div id="wzd-content" class="col-md-offset-1 col-md-10">
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                        <i class="zmdi zmdi-twitter zmdi-hc-5x"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                        <i class="zmdi zmdi-linkedin-box zmdi-hc-5x"></i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                                        <i class="zmdi zmdi-facebook-box zmdi-hc-5x"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Step navigation controls -->
                                        <div id="wzd-nav" class="row">
                                            <div id="nav-controls" class="col-md-offset-10 col-md-2">
                                                <a class="btn btn-wzd nav-previous" href="#step1" aria-controls="step1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                <a class="btn btn-wzd nav-next" href="#step3" aria-controls="step3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="step3">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span class="sr-only">75% Complete</span>
                                            </div>
                                        </div>
                                        <!-- Step title -->
                                        <h1 class="text-center">Would you recommend us?</h1>
                                        <!-- Step content -->
                                        <div id="wzd-content" class="col-md-offset-1 col-md-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                    No
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                                    Probably
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Step navigation controls -->
                                        <div id="wzd-nav" class="row">
                                            <div id="nav-controls" class="col-md-offset-10 col-md-2">
                                                <a class="btn btn-wzd nav-previous" href="#step2" aria-controls="step2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                <a class="btn btn-wzd nav-next" href="#step4" aria-controls="step4" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="step4">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span class="sr-only">100% Complete</span>
                                            </div>
                                        </div>
                                        <h1 class="text-center">Thank you!</h1>
                                        <p class="text-center"><i class="zmdi zmdi-check-all zmdi-hc-5x"></i></i></p>
                                        <!-- Step navigation controls -->
                                        <div id="wzd-nav" class="row">
                                            <div id="nav-controls" class="col-md-offset-10 col-md-2">
                                                <a class="btn btn-wzd nav-previous" href="#step3" aria-controls="step3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                                <a class="btn btn-wzd nav-next disabled" href="#step1" aria-controls="step1" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-right"></i></a>
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
    </div>
</section>
<!-- book-now booking end-->
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->