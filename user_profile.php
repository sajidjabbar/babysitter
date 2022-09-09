<!-- App Include Here --> <?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Style Link Here -->
<link rel="stylesheet" href="css/user_profile.css">
<!-- Style Link Here -->
<section class="profile_section">
    <div class="container">
        <div class="all_profile">
            <div class="row">
                <div class="col-lg-3 px-2">
                    <div class="all_tabs">
                        <div class="for_profile_img">
                            <figure>
                                <img src="img/profile_main.png" alt="">
                                <span class="add_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="Group_9227" data-name="Group 9227" transform="translate(-1446.811 -285.811)">
                                            <circle id="Ellipse_41" data-name="Ellipse 41" cx="14" cy="14" r="14" transform="translate(1446.811 285.811)" fill="#fa00a7" />
                                            <g id="Group_9221" data-name="Group 9221" transform="translate(1461.307 294.076) rotate(45)">
                                                <path id="Path_17384" data-name="Path 17384" d="M-11395.969,5760.416l-8.051,8.052" transform="translate(11404.02 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.7" />
                                                <path id="Path_17385" data-name="Path 17385" d="M-11404.02,5760.416l8.051,8.052" transform="translate(11404.02 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.7" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </figure>
                        </div>
                        <div class="user_name">
                            <h5>John Doe</h5>
                        </div>
                        <ul class="nav nav-tabs tabs_side_bar" id="myTab" role="tablist">
                            <!-- <li class="nav-item tabs_button_wrapper " role="presentation">
                                <button class="tabs_controller" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Calendar</button>
                            </li> -->
                            <li class="nav-item tabs_button_wrapper" role="presentation">
                                <button class=" tabs_controller active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="home" aria-selected="true">Account</button>
                            </li>
                            <li class="nav-item tabs_button_wrapper " role="presentation">
                                <button class=" tabs_controller" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Bookings</button>
                            </li>
                            <li class="nav-item tabs_button_wrapper " role="presentation">
                                <button class="tabs_controller" onclick="window.location.href = 'login.php'">Logout</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 px-2">
                    <div class="al_tabs_start">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <!-- ======  PROFILE TAB  START  ====== -->
                                <section class="profile_main_tab">
                                    <!-- ====== SEE PROFILE START  ====== -->
                                    <div class="see_profile" id="see_profile">
                                        <div class="top_heading">
                                            <h4>Account</h4>
                                            <button class="btn edit_btn" id="edit_profile_btn">Edit Profile</button>
                                        </div>
                                        <section class="persoal_information col-md-8">
                                            <div class="heading">
                                                <h6>My Profile</h6>
                                            </div>
                                            <div class="personal_information_start">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single_side">
                                                            <div class="single_row">
                                                                <span class="quest">First Name:</span>
                                                                <span class="answer">John</span>
                                                            </div>
                                                            <div class="single_row">
                                                                <span class="quest">last Name</span>
                                                                <span class="answer">Doe</span>
                                                            </div>
                                                            <div class="single_row">
                                                                <span class="quest">Email</span>
                                                                <span class="answer">Johndoe@gmail.com</span>
                                                            </div>
                                                            <div class="single_row">
                                                                <span class="quest">Contact Number:</span>
                                                                <span class="answer">+1-202-555-0196</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="persoal_information col-md-8">
                                            <div class="heading">
                                                <h6>Password</h6>
                                            </div>
                                            <div class="personal_information_start">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single_side">
                                                            <div class="single_row">
                                                                <span class="quest">Password:</span>
                                                                <span class="answer password">.........</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- ====== SEE PROFILE END  ====== -->
                                    <!-- ====== EDIT PROFILE START  ====== -->
                                    <div class="edit_profile hide" id="edit_profile">
                                        <div class="main_heading ">
                                            <h4>Account</h4>
                                        </div>
                                        <div class="form_start mt-4">
                                            <div class="edit_other">
                                                <h6>Edit Profile</h6>
                                                <form method="POST" class="mt-4">
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="First Name">
                                                        </div>
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Contact Number">
                                                        </div>
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <button type="submit">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="change_password mt-4">
                                                <h6>Change Password</h6>
                                                <form method="POST" class="mt-4">
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Current Password">
                                                        </div>
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <input type="text" name="" id="" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <div class="single-input">
                                                            <button type="submit">Update Password</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ====== EDIT PROFILE END  ====== -->
                                </section>
                                <!-- ====== PROFILE TAB END  ====== -->
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="booking_start" id="booking_start">
                                    <div class="booking_top">
                                        <div class="main_heading">
                                            <h4>Bookings</h4>
                                        </div>
                                        <div class="toogle_bookings">
                                            <div class="button_group">
                                                <button id="pending_booking_btn" class="tab_btn">Pending
                                                    Bookings</button>
                                                <button id="upcoming_booking_btn" class="tab_btn active">Upcoming
                                                    Bookings</button>
                                                <button class="tab_btn" id="previous_booking_btn">Previous
                                                    Bookings</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upcoming_booking hide" id="pending_booking">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="id">Booking Id</th>
                                                        <th class="up-date">Date</th>
                                                        <th class="up-time">Time</th>
                                                        <th class="up-payment">Payment</th>
                                                        <th class="pen-status">Status</th>
                                                        <th class="up-action">Action</th>
                                                        <th class="up-view">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="pending-accepted">Pending</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="upcoming_booking" id="upcoming_booking">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="id">Booking Id</th>
                                                        <th class="up-date">Date</th>
                                                        <th class="up-time">Time</th>
                                                        <th class="up-payment">Payment</th>
                                                        <th class="up-status">Action</th>
                                                        <th class="up-action">Action</th>
                                                        <th class="up-view">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="accepted">Accepted by babysitter</span></td>
                                                        <td><span class="up-cancel for_the_padding">Cancel</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="previous_booking hide" id="previous_booking">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="name">Babysitter</th>
                                                        <th class="id">Booking Id</th>
                                                        <th class="date">Date</th>
                                                        <th class="time">Time</th>
                                                        <th class="payment">Payment</th>
                                                        <th class="status">Status</th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="cancel">Canceled</span></td>
                                                        <td class="canceled_booking"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="img/booking.png" alt=""><span>Veronica</span></td>
                                                        <td>#6519576</td>
                                                        <td>22-25 june 22</td>
                                                        <td>5:30pm to 6:30pm</td>
                                                        <td>$45.50</td>
                                                        <td><span class="completed">Completed</span></td>
                                                        <td class="completed_bookling_details_button"><button class="view_detail">View Detail</button></td>
                                                    </tr>
                                                    </ttbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking_details hide" id="booking_details">
                                    <div class="top_texts">
                                        <div class="headings">
                                            <h4>Booking Details</h4>
                                            <h5>#1084598423154</h5>
                                        </div>
                                        <div class="booking_price text-end">
                                            <div class="single_price">
                                                <span class="fee">Booking Fee</span>
                                                <span class="payment">$158.07 </span>
                                            </div>
                                            <div class="single_price">
                                                <span class="fee">Total Amount</span>
                                                <span class="payment">$158.07 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking_details_data">
                                        <div class="baby_sioiter_info">
                                            <figure>
                                                <img src="img/booking_details.png" class="img-fluid" alt="">
                                            </figure>
                                            <div class="text_about">
                                                <span>Veronica Williams</span>
                                                <span class="status">Babysitter</span>
                                            </div>
                                        </div>
                                        <div class="babby_sitter_some_info">
                                            <h6 class="pink">Booking Detail</h6>
                                            <div class="details_start">
                                                <div class="single_details">
                                                    <span class="question">Date :</span>
                                                    <span class="anwer">22-25 june 22</span>
                                                </div>
                                                <div class="single_details">
                                                    <span class="question">Time: </span>
                                                    <span class="anwer">11:30 pm</span>
                                                </div>
                                                <div class="single_details">
                                                    <span class="question">Address:</span>
                                                    <span class="anwer">154 Holly Ave.Cherry Hill, NJ 08003</span>
                                                </div>
                                                <div class="single_details">
                                                    <span class="question">Status:</span>
                                                    <span class="anwer"><span class="cancelled"> Canceled </span></span>
                                                </div>
                                                <div class="single_details">
                                                    <span class="question">Accepted by:</span>
                                                    <span class="anwer">Veronica</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">About</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="completed_bookling_details hide" id="completed_bookling_details">
            <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
                <div class="booking_details">
                    <div class=" top_texts">
                        <div class="headings">
                            <h4>Booking Details</h4>
                            <h5>#1084598423154</h5>
                        </div>
                        <div class="booking_price text-end">
                            <div class="single_price">
                                <span class="fee">Booking Fee</span>
                                <span class="payment">$158.07 </span>
                            </div>
                            <div class="single_price">
                                <span class="fee">Total Amount</span>
                                <span class="payment">$158.07 </span>
                            </div>
                        </div>
                    </div>
                    <div class="booking_details_data">
                        <div class="baby_sioiter_info">
                            <div class="about_user">
                                <figure>
                                    <img src="img/booking_details.png" class="img-fluid" alt="">
                                </figure>
                                <div class="text_about">
                                    <span>Veronica Williams</span>
                                    <span class="status">Babysitter</span>
                                </div>
                            </div>
                            <div class="add_review_btn_wrapper text-end">
                                <button class="btn add_review_btn" role="button">Add Review</button>
                            </div>
                        </div>
                    </div>
                    <div class="babby_sitter_some_info">
                        <h6 class="pink">Booking Detail</h6>
                        <div class="details_start">
                            <div class="single_details">
                                <span class="question">Date :</span>
                                <span class="anwer">22-25 june 22</span>
                            </div>
                            <div class="single_details">
                                <span class="question">Time: </span>
                                <span class="anwer">11:30 pm</span>
                            </div>
                            <div class="single_details">
                                <span class="question">Address:</span>
                                <span class="anwer">154 Holly Ave.Cherry Hill, NJ 08003</span>
                            </div>
                            <div class="single_details">
                                <span class="question">Status:</span>
                                <span class="anwer"><span class="cancelled"> Canceled </span></span>
                            </div>
                            <div class="single_details">
                                <span class="question">Accepted by:</span>
                                <span class="anwer">Veronica</span>
                            </div>
                        </div>
                    </div>
                    <div class="close_icon">
                        <button class="close" id="close_booking_detail">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.673" height="14.673" viewBox="0 0 17.673 17.673">
                                <g id="Group_9221" data-name="Group 9221" transform="translate(1.768 1.768)">
                                    <path id="Path_17384" data-name="Path 17384" d="M-11389.883,5760.416l-14.138,14.138" transform="translate(11404.021 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2.5" />
                                    <path id="Path_17385" data-name="Path 17385" d="M-11404.021,5760.416l14.138,14.138" transform="translate(11404.021 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2.5" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="add_review hide">
            <div class="col-lg-5 mx-auto">
                <div class="add_review_start_here">
                    <div class="top_text text-center">
                        <h5>Post Your Reviews</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry's standard dummy text.</p>
                    </div>
                    <div class="form_start pt-2">
                        <form action="">
                            <div class="form-row mt-3">
                                <input type="text" placeholder="Your Name" name="">
                            </div>
                            <div class="form-row mt-3">
                                <input type="text" placeholder="Email" name="">
                            </div>
                            <div class="form-row mt-3">
                                <textarea name="" id="" cols="30" rows="10" class="pt-2" placeholder="Message" name=""></textarea>
                            </div>
                            <div class="form-row mt-4 star_ratings">
                                <h5 class="mb-0">Ratings</h5>
                                <div class="ratings">
                                    <i class="fa fa-star pink"></i>
                                    <i class="fa fa-star pink"></i>
                                    <i class="fa fa-star pink"></i>
                                    <i class="fa fa-star-o black"></i>
                                    <i class="fa fa-star-o black"></i>
                                </div>
                            </div>
                            <div class="form-row mt-4">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="close_icon">
                        <button class="close" id="close_add_review">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.673" height="14.673" viewBox="0 0 17.673 17.673">
                                <g id="Group_9221" data-name="Group 9221" transform="translate(1.768 1.768)">
                                    <path id="Path_17384" data-name="Path 17384" d="M-11389.883,5760.416l-14.138,14.138" transform="translate(11404.021 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2.5" />
                                    <path id="Path_17385" data-name="Path 17385" d="M-11404.021,5760.416l14.138,14.138" transform="translate(11404.021 -5760.416)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2.5" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<!-- Footer Include Here --> <?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->