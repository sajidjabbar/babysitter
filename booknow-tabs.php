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
                    <h3 style="display: block !important;"><svg xmlns="http://www.w3.org/2000/svg" class="previous" width="26" height="26" viewBox="0 0 26 26">
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
                    <div class="form-row_radio mt-3">
                        <div class="select_services">
                            <div class="single_servcie">
                                <input type="radio" id="test1" name="booking_continuos" value="one_time" checked>
                                <label for="test1">One Time Booking</label>
                            </div>
                            <div class="single_servcie single_servcie1 ">
                                <input type="radio" id="test2" name="booking_continuos" value="two_time">
                                <label for="test2">Recurring Booking</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-8 text-center p-0 mb-2">
                <div class="card px-0  pb-0  mb-3">
                    <form id="msform" action="thank-you.php">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>step 01</strong></li>
                            <li id="personal"><strong>step 02</strong></li>
                            <li id="payment"><strong>step 03</strong></li>
                            <li id="step4"><strong>step 04</strong></li>
                            <li id="step5"><strong>step 05</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card" id="one_no">
                                <div class="col-md-6">
                                    <div class="form_start start-form-hide mt-3">
                                        <div class="form-row">
                                            <!-- <input placeholder="select Date" class="textbox-n" type="date" onfocus="(this.type='date')" id="date"> -->
                                            <input type="text" name="" class="input-dateone" placeholder="Select Date">
                                        </div>
                                        <div class="form-row">
                                            <div class="single-input">
                                                <input type="text" name="" class="time-input" placeholder="Select Start Time ">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="" class="time-input" placeholder="Select End Time ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-two hide" id="two_no">

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="this-tab-heading">
                                            <h5>Recurring</h5>
                                        </div>
                                        <div class="form_start mt-3">
                                            <div class="form-row">
                                                <div class="single-input">
                                                    <input type="text" name="" class="input-dateone" placeholder="Start Date">
                                                </div>
                                                <div class="single-input">
                                                    <input type="text" name="" class="input-dateone" placeholder="end Date">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="single-input">
                                                    <input type="text" name="" class="time-input" placeholder="Select Start Time ">

                                                </div>
                                                <div class="single-input">
                                                    <input type="text" name="" class="time-input" placeholder="Select End Time ">
                                                </div>
                                            </div>
                                            <div class="this-tab-heading">
                                                <h5>Days Selection</h5>
                                            </div>
                                            <div class="calendert-wrapper">
                                                <section class="calendar">
                                                    <div id="datepicker_scnd7"></div>


                                                    <!-- <div class="datepicker-footer">Last updated on <span class="colored">August 7
                                        2021</span></div> -->
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="time-wrapper">
                                            <div class="this-tab-heading">
                                                <h5>Days Selection</h5>
                                            </div>
                                            <div class="monday-time">
                                                <div class="monday-heading">
                                                    <h6>Select The Time For Monday</h6>
                                                    <span>1:30 Pm</span>
                                                </div>
                                                <div class="time-icon">
                                                    <img src="img/time.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="monday-time">
                                                <div class="monday-heading">
                                                    <h6>Select The Time For Tuesday</h6>
                                                    <span>1:30 Pm</span>
                                                </div>
                                                <div class="time-icon">
                                                    <img src="img/time.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="monday-time">
                                                <div class="monday-heading">
                                                    <h6>Select The Time For Wednesday</h6>
                                                    <span>1:30 Pm</span>
                                                </div>
                                                <div class="time-icon">
                                                    <img src="img/time.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button one-tonext" value="next step" />
                        </fieldset>
                        <fieldset class="second-field">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dett pe-2">
                                            <h5 class="mb-0">Booking Details</h5>
                                            <div class="range-detail pt-4">
                                                <h6>Provide hour rate range</h6>
                                                <input type="range" class="win10-thumb" min="0" max="100" value="25" step="5" />
                                                <div class="range-this">
                                                    <div class="start-range">
                                                        <span>0$</span>
                                                        <span style="color: #FA00A7;" class="range_now">10$</span>
                                                    </div>
                                                    <span>50$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_start this-form mt-3 ps-2">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1" class="form-label">Number of children </label>
                                                <input type="text" name="" id="" placeholder="Select Date">
                                                <select class="form-select detail" aria-label="Default select example">
                                                    <option selected>Children 1 Detail</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="single-input">

                                                    <input type="text" name="" id="" placeholder="Select Start Time ">

                                                </div>
                                                <div class="single-input">
                                                    <input type="text" name="" id="" placeholder="Select End Time ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-select child-detail" aria-label="Default select example">
                                                    <option selected>Children 2 Detail</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <input type="button" name="next" class="second next action-button" value="Next step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="col-md-6">
                                    <div class="form_start mt-3">
                                        <div class="form">
                                            <h4>Contact Information</h4>
                                            <!-- <input placeholder="select Date" class="textbox-n" type="date" onfocus="(this.type='date')" id="date"> -->
                                            <input type="text" name="" id="" placeholder="Full Name">
                                            <input type="text" name="" id="" placeholder="Contact Number">


                                        </div>
                                        <div class="form">
                                            <h4>Address</h4>
                                            <!-- <input placeholder="select Date" class="textbox-n" type="date" onfocus="(this.type='date')" id="date"> -->
                                            <input type="text" name="" id="" placeholder="Address Line1">
                                            <input type="text" name="" id="" placeholder="Address Line2">


                                        </div>
                                        <div class="form-row ">
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="City ">

                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="form-row ">
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="Zip Code">

                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="Country ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="seconds next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="replies-section-inner">
                                    <div class="for-total-replis-heading">
                                        <h6 class="replies-heading">Select Babysitter</h6>
                                    </div>
                                    <div class="total-replies">
                                        <div class="col-md-12">
                                            <div class="customer-reply">
                                                <div class="col-md-3">
                                                    <div class="reply-person-img">
                                                        <img src="img/test1.png" class="img-fluid reply-img" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="complete-reply">
                                                        <div class="name-detail">
                                                            <div class="person-name">
                                                                <div class="name-of-reply-person">
                                                                    <span>John Doe</span>
                                                                    <span class="date-spn"> Washington, USA</span>
                                                                </div>
                                                                <div class="star">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.904" height="18.029" viewBox="0 0 18.904 18.029">
                                                                        <path id="star" d="M18.9,6.986a.821.821,0,0,1-.3.545l-4.124,4.022.977,5.68a1.688,1.688,0,0,1,.012.227.67.67,0,0,1-.119.4.4.4,0,0,1-.347.165.917.917,0,0,1-.454-.137l-5.1-2.681-5.1,2.681a.964.964,0,0,1-.454.137.412.412,0,0,1-.358-.165.673.673,0,0,1-.12-.4,1.857,1.857,0,0,1,.023-.227l.977-5.68L.284,7.532A.865.865,0,0,1,0,6.986q0-.42.636-.522l5.7-.829L8.9.466Q9.111,0,9.452,0t.557.466l2.556,5.169,5.7.829q.636.1.636.522Z" transform="translate(0 0)" fill="#fc0" />
                                                                    </svg>
                                                                    <span>4.5</span>
                                                                </div>
                                                            </div>
                                                            <div class="year">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.053" height="19" viewBox="0 0 18.053 19">
                                                                    <g id="Group_9090" data-name="Group 9090" transform="translate(-416.254 -883.064)">
                                                                        <path id="Path_214" data-name="Path 214" d="M561.341,895.294h-7.769a.655.655,0,0,1-.017-.106c0-.93-.014-1.859.006-2.788a3.89,3.89,0,0,1,3.374-3.757.558.558,0,0,0,.16-.044,2.848,2.848,0,0,1-1.895-1.151,2.782,2.782,0,1,1,5.039-1.765,2.815,2.815,0,0,1-2.473,2.912c.266.057.494.1.717.155a3.852,3.852,0,0,1,2.848,3.428c.05,1.008.023,2.019.03,3.029A.383.383,0,0,1,561.341,895.294Z" transform="translate(-132.171 0)" fill="#fc0" />
                                                                        <path id="Path_215" data-name="Path 215" d="M427.4,1228.969c-.078-.034-.133-.055-.186-.081-.6-.289-1.192-.577-1.785-.871a.3.3,0,0,0-.293,0c-.643.318-1.289.63-1.97.961.045-.265.083-.5.125-.729.08-.445.159-.89.246-1.333a.305.305,0,0,0-.108-.324c-.317-.286-.621-.585-.935-.883-.344.327-.679.64-1,.963a.256.256,0,0,0-.038.2c.118.688.243,1.376.373,2.1-.082-.036-.14-.059-.2-.086-.59-.286-1.181-.571-1.769-.863a.313.313,0,0,0-.31,0c-.588.292-1.179.576-1.769.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.266.266,0,0,0-.093-.276c-.489-.457-.971-.921-1.456-1.383-.044-.042-.089-.082-.161-.149l1.322-.19c.313-.045.626-.082.937-.14a.323.323,0,0,0,.2-.148c.332-.636.653-1.278.991-1.946.039.073.068.125.095.177.3.591.595,1.183.9,1.77a.318.318,0,0,0,.2.147,13.2,13.2,0,0,0,1.489.2,6.879,6.879,0,0,0,1.123-.115c.19-.023.379-.061.57-.081a.25.25,0,0,0,.219-.163c.316-.637.64-1.271.975-1.932.036.059.065.1.088.144.3.6.606,1.192.9,1.791a.256.256,0,0,0,.221.16c.485.063.967.173,1.453.193a8.02,8.02,0,0,0,1.178-.117c.012,0,.024-.005.036-.007.219-.037.484-.011.644-.128s.217-.378.318-.577c.243-.48.485-.96.742-1.469.04.075.069.128.1.181.3.585.6,1.169.886,1.757a.272.272,0,0,0,.234.17c.657.088,1.312.183,1.968.277.077.011.154.026.263.044l-.558.53c-.35.333-.7.669-1.052,1a.255.255,0,0,0-.093.271c.122.619.229,1.242.34,1.863.012.065.016.131.027.224-.167-.08-.311-.148-.454-.217-.507-.246-1.011-.5-1.521-.734a.359.359,0,0,0-.269,0c-.6.281-1.193.574-1.789.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.263.263,0,0,0-.092-.276c-.32-.292-.63-.595-.954-.9-.344.327-.682.643-1.012.968a.236.236,0,0,0-.033.181c.115.671.237,1.341.357,2.011C427.389,1228.894,427.392,1228.917,427.4,1228.969Z" transform="translate(0 -326.915)" fill="#fc0" />
                                                                    </g>
                                                                </svg>
                                                                <span>
                                                                    4 years
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="the-reply">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                        </div>
                                                        <div class="detail-reply-btns">
                                                            <div class="detail-btns">
                                                                <div class="detailbtns-one">
                                                                    <a href="" class="btn btn-primary">Hire babysitter</a>
                                                                </div>
                                                                <div class="detailbtns-two">
                                                                    <a href="" class="btn btn-outline-info">Hire babysitter</a>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <h5>$50 <span>/Hour</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="customer-reply">
                                                <div class="col-md-3">
                                                    <div class="reply-person-img">
                                                        <img src="img/test2.png" class="img-fluid reply-img" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="complete-reply">
                                                        <div class="name-detail">
                                                            <div class="person-name">
                                                                <div class="name-of-reply-person">
                                                                    <span>John Doe</span>
                                                                    <span class="date-spn"> Washington, USA</span>
                                                                </div>
                                                                <div class="star">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.904" height="18.029" viewBox="0 0 18.904 18.029">
                                                                        <path id="star" d="M18.9,6.986a.821.821,0,0,1-.3.545l-4.124,4.022.977,5.68a1.688,1.688,0,0,1,.012.227.67.67,0,0,1-.119.4.4.4,0,0,1-.347.165.917.917,0,0,1-.454-.137l-5.1-2.681-5.1,2.681a.964.964,0,0,1-.454.137.412.412,0,0,1-.358-.165.673.673,0,0,1-.12-.4,1.857,1.857,0,0,1,.023-.227l.977-5.68L.284,7.532A.865.865,0,0,1,0,6.986q0-.42.636-.522l5.7-.829L8.9.466Q9.111,0,9.452,0t.557.466l2.556,5.169,5.7.829q.636.1.636.522Z" transform="translate(0 0)" fill="#fc0" />
                                                                    </svg>
                                                                    <span>4.5</span>
                                                                </div>
                                                            </div>
                                                            <div class="year">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.053" height="19" viewBox="0 0 18.053 19">
                                                                    <g id="Group_9090" data-name="Group 9090" transform="translate(-416.254 -883.064)">
                                                                        <path id="Path_214" data-name="Path 214" d="M561.341,895.294h-7.769a.655.655,0,0,1-.017-.106c0-.93-.014-1.859.006-2.788a3.89,3.89,0,0,1,3.374-3.757.558.558,0,0,0,.16-.044,2.848,2.848,0,0,1-1.895-1.151,2.782,2.782,0,1,1,5.039-1.765,2.815,2.815,0,0,1-2.473,2.912c.266.057.494.1.717.155a3.852,3.852,0,0,1,2.848,3.428c.05,1.008.023,2.019.03,3.029A.383.383,0,0,1,561.341,895.294Z" transform="translate(-132.171 0)" fill="#fc0" />
                                                                        <path id="Path_215" data-name="Path 215" d="M427.4,1228.969c-.078-.034-.133-.055-.186-.081-.6-.289-1.192-.577-1.785-.871a.3.3,0,0,0-.293,0c-.643.318-1.289.63-1.97.961.045-.265.083-.5.125-.729.08-.445.159-.89.246-1.333a.305.305,0,0,0-.108-.324c-.317-.286-.621-.585-.935-.883-.344.327-.679.64-1,.963a.256.256,0,0,0-.038.2c.118.688.243,1.376.373,2.1-.082-.036-.14-.059-.2-.086-.59-.286-1.181-.571-1.769-.863a.313.313,0,0,0-.31,0c-.588.292-1.179.576-1.769.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.266.266,0,0,0-.093-.276c-.489-.457-.971-.921-1.456-1.383-.044-.042-.089-.082-.161-.149l1.322-.19c.313-.045.626-.082.937-.14a.323.323,0,0,0,.2-.148c.332-.636.653-1.278.991-1.946.039.073.068.125.095.177.3.591.595,1.183.9,1.77a.318.318,0,0,0,.2.147,13.2,13.2,0,0,0,1.489.2,6.879,6.879,0,0,0,1.123-.115c.19-.023.379-.061.57-.081a.25.25,0,0,0,.219-.163c.316-.637.64-1.271.975-1.932.036.059.065.1.088.144.3.6.606,1.192.9,1.791a.256.256,0,0,0,.221.16c.485.063.967.173,1.453.193a8.02,8.02,0,0,0,1.178-.117c.012,0,.024-.005.036-.007.219-.037.484-.011.644-.128s.217-.378.318-.577c.243-.48.485-.96.742-1.469.04.075.069.128.1.181.3.585.6,1.169.886,1.757a.272.272,0,0,0,.234.17c.657.088,1.312.183,1.968.277.077.011.154.026.263.044l-.558.53c-.35.333-.7.669-1.052,1a.255.255,0,0,0-.093.271c.122.619.229,1.242.34,1.863.012.065.016.131.027.224-.167-.08-.311-.148-.454-.217-.507-.246-1.011-.5-1.521-.734a.359.359,0,0,0-.269,0c-.6.281-1.193.574-1.789.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.263.263,0,0,0-.092-.276c-.32-.292-.63-.595-.954-.9-.344.327-.682.643-1.012.968a.236.236,0,0,0-.033.181c.115.671.237,1.341.357,2.011C427.389,1228.894,427.392,1228.917,427.4,1228.969Z" transform="translate(0 -326.915)" fill="#fc0" />
                                                                    </g>
                                                                </svg>
                                                                <span>
                                                                    4 years
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="the-reply">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                        </div>
                                                        <div class="detail-reply-btns">
                                                            <div class="detail-btns">
                                                                <div class="detailbtns-one">
                                                                    <a href="" class="btn btn-primary">Hire babysitter</a>
                                                                </div>
                                                                <div class="detailbtns-two">
                                                                    <a href="" class="btn btn-outline-info">Hire babysitter</a>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <h5>$50 <span>/Hour</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="customer-reply">
                                                <div class="col-md-3">
                                                    <div class="reply-person-img">
                                                        <img src="img/test3.png" class="img-fluid reply-img" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="complete-reply">
                                                        <div class="name-detail">
                                                            <div class="person-name">
                                                                <div class="name-of-reply-person">
                                                                    <span>John Doe</span>
                                                                    <span class="date-spn"> Washington, USA</span>
                                                                </div>
                                                                <div class="star">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.904" height="18.029" viewBox="0 0 18.904 18.029">
                                                                        <path id="star" d="M18.9,6.986a.821.821,0,0,1-.3.545l-4.124,4.022.977,5.68a1.688,1.688,0,0,1,.012.227.67.67,0,0,1-.119.4.4.4,0,0,1-.347.165.917.917,0,0,1-.454-.137l-5.1-2.681-5.1,2.681a.964.964,0,0,1-.454.137.412.412,0,0,1-.358-.165.673.673,0,0,1-.12-.4,1.857,1.857,0,0,1,.023-.227l.977-5.68L.284,7.532A.865.865,0,0,1,0,6.986q0-.42.636-.522l5.7-.829L8.9.466Q9.111,0,9.452,0t.557.466l2.556,5.169,5.7.829q.636.1.636.522Z" transform="translate(0 0)" fill="#fc0" />
                                                                    </svg>
                                                                    <span>4.5</span>
                                                                </div>
                                                            </div>
                                                            <div class="year">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.053" height="19" viewBox="0 0 18.053 19">
                                                                    <g id="Group_9090" data-name="Group 9090" transform="translate(-416.254 -883.064)">
                                                                        <path id="Path_214" data-name="Path 214" d="M561.341,895.294h-7.769a.655.655,0,0,1-.017-.106c0-.93-.014-1.859.006-2.788a3.89,3.89,0,0,1,3.374-3.757.558.558,0,0,0,.16-.044,2.848,2.848,0,0,1-1.895-1.151,2.782,2.782,0,1,1,5.039-1.765,2.815,2.815,0,0,1-2.473,2.912c.266.057.494.1.717.155a3.852,3.852,0,0,1,2.848,3.428c.05,1.008.023,2.019.03,3.029A.383.383,0,0,1,561.341,895.294Z" transform="translate(-132.171 0)" fill="#fc0" />
                                                                        <path id="Path_215" data-name="Path 215" d="M427.4,1228.969c-.078-.034-.133-.055-.186-.081-.6-.289-1.192-.577-1.785-.871a.3.3,0,0,0-.293,0c-.643.318-1.289.63-1.97.961.045-.265.083-.5.125-.729.08-.445.159-.89.246-1.333a.305.305,0,0,0-.108-.324c-.317-.286-.621-.585-.935-.883-.344.327-.679.64-1,.963a.256.256,0,0,0-.038.2c.118.688.243,1.376.373,2.1-.082-.036-.14-.059-.2-.086-.59-.286-1.181-.571-1.769-.863a.313.313,0,0,0-.31,0c-.588.292-1.179.576-1.769.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.266.266,0,0,0-.093-.276c-.489-.457-.971-.921-1.456-1.383-.044-.042-.089-.082-.161-.149l1.322-.19c.313-.045.626-.082.937-.14a.323.323,0,0,0,.2-.148c.332-.636.653-1.278.991-1.946.039.073.068.125.095.177.3.591.595,1.183.9,1.77a.318.318,0,0,0,.2.147,13.2,13.2,0,0,0,1.489.2,6.879,6.879,0,0,0,1.123-.115c.19-.023.379-.061.57-.081a.25.25,0,0,0,.219-.163c.316-.637.64-1.271.975-1.932.036.059.065.1.088.144.3.6.606,1.192.9,1.791a.256.256,0,0,0,.221.16c.485.063.967.173,1.453.193a8.02,8.02,0,0,0,1.178-.117c.012,0,.024-.005.036-.007.219-.037.484-.011.644-.128s.217-.378.318-.577c.243-.48.485-.96.742-1.469.04.075.069.128.1.181.3.585.6,1.169.886,1.757a.272.272,0,0,0,.234.17c.657.088,1.312.183,1.968.277.077.011.154.026.263.044l-.558.53c-.35.333-.7.669-1.052,1a.255.255,0,0,0-.093.271c.122.619.229,1.242.34,1.863.012.065.016.131.027.224-.167-.08-.311-.148-.454-.217-.507-.246-1.011-.5-1.521-.734a.359.359,0,0,0-.269,0c-.6.281-1.193.574-1.789.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.263.263,0,0,0-.092-.276c-.32-.292-.63-.595-.954-.9-.344.327-.682.643-1.012.968a.236.236,0,0,0-.033.181c.115.671.237,1.341.357,2.011C427.389,1228.894,427.392,1228.917,427.4,1228.969Z" transform="translate(0 -326.915)" fill="#fc0" />
                                                                    </g>
                                                                </svg>
                                                                <span>
                                                                    4 years
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="the-reply">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                        </div>
                                                        <div class="detail-reply-btns">
                                                            <div class="detail-btns">
                                                                <div class="detailbtns-one">
                                                                    <a href="" class="btn btn-primary">Hire babysitter</a>
                                                                </div>
                                                                <div class="detailbtns-two">
                                                                    <a href="" class="btn btn-outline-info">Hire babysitter</a>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <h5>$50 <span>/Hour</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="customer-reply">
                                                <div class="col-md-3">
                                                    <div class="reply-person-img">
                                                        <img src="img/test4.png" class="img-fluid reply-img" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="complete-reply">
                                                        <div class="name-detail">
                                                            <div class="person-name">
                                                                <div class="name-of-reply-person">
                                                                    <span>John Doe</span>
                                                                    <span class="date-spn"> Washington, USA</span>
                                                                </div>
                                                                <div class="star">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.904" height="18.029" viewBox="0 0 18.904 18.029">
                                                                        <path id="star" d="M18.9,6.986a.821.821,0,0,1-.3.545l-4.124,4.022.977,5.68a1.688,1.688,0,0,1,.012.227.67.67,0,0,1-.119.4.4.4,0,0,1-.347.165.917.917,0,0,1-.454-.137l-5.1-2.681-5.1,2.681a.964.964,0,0,1-.454.137.412.412,0,0,1-.358-.165.673.673,0,0,1-.12-.4,1.857,1.857,0,0,1,.023-.227l.977-5.68L.284,7.532A.865.865,0,0,1,0,6.986q0-.42.636-.522l5.7-.829L8.9.466Q9.111,0,9.452,0t.557.466l2.556,5.169,5.7.829q.636.1.636.522Z" transform="translate(0 0)" fill="#fc0" />
                                                                    </svg>
                                                                    <span>4.5</span>
                                                                </div>
                                                            </div>
                                                            <div class="year">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.053" height="19" viewBox="0 0 18.053 19">
                                                                    <g id="Group_9090" data-name="Group 9090" transform="translate(-416.254 -883.064)">
                                                                        <path id="Path_214" data-name="Path 214" d="M561.341,895.294h-7.769a.655.655,0,0,1-.017-.106c0-.93-.014-1.859.006-2.788a3.89,3.89,0,0,1,3.374-3.757.558.558,0,0,0,.16-.044,2.848,2.848,0,0,1-1.895-1.151,2.782,2.782,0,1,1,5.039-1.765,2.815,2.815,0,0,1-2.473,2.912c.266.057.494.1.717.155a3.852,3.852,0,0,1,2.848,3.428c.05,1.008.023,2.019.03,3.029A.383.383,0,0,1,561.341,895.294Z" transform="translate(-132.171 0)" fill="#fc0" />
                                                                        <path id="Path_215" data-name="Path 215" d="M427.4,1228.969c-.078-.034-.133-.055-.186-.081-.6-.289-1.192-.577-1.785-.871a.3.3,0,0,0-.293,0c-.643.318-1.289.63-1.97.961.045-.265.083-.5.125-.729.08-.445.159-.89.246-1.333a.305.305,0,0,0-.108-.324c-.317-.286-.621-.585-.935-.883-.344.327-.679.64-1,.963a.256.256,0,0,0-.038.2c.118.688.243,1.376.373,2.1-.082-.036-.14-.059-.2-.086-.59-.286-1.181-.571-1.769-.863a.313.313,0,0,0-.31,0c-.588.292-1.179.576-1.769.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.266.266,0,0,0-.093-.276c-.489-.457-.971-.921-1.456-1.383-.044-.042-.089-.082-.161-.149l1.322-.19c.313-.045.626-.082.937-.14a.323.323,0,0,0,.2-.148c.332-.636.653-1.278.991-1.946.039.073.068.125.095.177.3.591.595,1.183.9,1.77a.318.318,0,0,0,.2.147,13.2,13.2,0,0,0,1.489.2,6.879,6.879,0,0,0,1.123-.115c.19-.023.379-.061.57-.081a.25.25,0,0,0,.219-.163c.316-.637.64-1.271.975-1.932.036.059.065.1.088.144.3.6.606,1.192.9,1.791a.256.256,0,0,0,.221.16c.485.063.967.173,1.453.193a8.02,8.02,0,0,0,1.178-.117c.012,0,.024-.005.036-.007.219-.037.484-.011.644-.128s.217-.378.318-.577c.243-.48.485-.96.742-1.469.04.075.069.128.1.181.3.585.6,1.169.886,1.757a.272.272,0,0,0,.234.17c.657.088,1.312.183,1.968.277.077.011.154.026.263.044l-.558.53c-.35.333-.7.669-1.052,1a.255.255,0,0,0-.093.271c.122.619.229,1.242.34,1.863.012.065.016.131.027.224-.167-.08-.311-.148-.454-.217-.507-.246-1.011-.5-1.521-.734a.359.359,0,0,0-.269,0c-.6.281-1.193.574-1.789.863-.055.027-.111.052-.2.091.074-.415.143-.8.213-1.191.054-.3.106-.6.165-.895a.263.263,0,0,0-.092-.276c-.32-.292-.63-.595-.954-.9-.344.327-.682.643-1.012.968a.236.236,0,0,0-.033.181c.115.671.237,1.341.357,2.011C427.389,1228.894,427.392,1228.917,427.4,1228.969Z" transform="translate(0 -326.915)" fill="#fc0" />
                                                                    </g>
                                                                </svg>
                                                                <span>
                                                                    4 years
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="the-reply">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                        </div>
                                                        <div class="detail-reply-btns">
                                                            <div class="detail-btns">
                                                                <div class="detailbtns-one">
                                                                    <a href="" class="btn btn-primary">Hire babysitter</a>
                                                                </div>
                                                                <div class="detailbtns-two">
                                                                    <a href="" class="btn btn-outline-info">Hire babysitter</a>
                                                                </div>
                                                            </div>
                                                            <div class="price">
                                                                <h5>$50 <span>/Hour</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-this">
                                            <div class="reply-btn">
                                                <span>Showing 5 of 102 </span>
                                            </div>
                                            <div class="page-change">
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                        <li class="page-item disabled ">
                                                            <span class="page-link prev">Prev</span>
                                                        </li>
                                                        <div class="page-num">
                                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item ">
                                                                <a class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        </div>
                                                        <li class="page-item">
                                                            <a class="page-link nex" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="button" name="next " class="last-step next action-button" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                    <div class="form_start mt-3">
                                        <input type="text" name="" id="" placeholder="Write Your Card Number">
                                        <div class="form-row">
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="mm/yy">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" name="" id="" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid">
                                        <div class="payment" onclick="chosePaymentMethod('visa')">
                                            <img src="img/visa.png" class="img-fluid">
                                        </div>
                                        <div class="payment" onclick="chosePaymentMethod('googleplay')">
                                            <img src="img/google-play.png" class="img-fluid">
                                        </div>
                                        <div class="payment" onclick="chosePaymentMethod('mastercard')">
                                            <img src="img/mastercard.png" class="img-fluid">
                                        </div>
                                        <div class="payment" onclick="chosePaymentMethod('paypal')">
                                            <img src="img/paypal.png" class="img-fluid">
                                        </div>
                                        <div class="payment" onclick="chosePaymentMethod('applepay')">
                                            <img src="img/apple.png" class="img-fluid">
                                        </div>

                                    </div>
                                </div> -->
                                    <?php include 'inc/checkout.php'; ?>

                                </div>
                            </div>
                            <input href="thank-you.php" type="submit" name="next" class="next action-button submit-btns" value="Submit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- book-now booking end-->
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->