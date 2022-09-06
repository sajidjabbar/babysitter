// Pre Loader Js
$(window).on("load", function () {
	// console.log("test");
	$("#preloader").fadeOut(1000);
});
// Pre Loader Js




$("#previous_booking_btn").click(function () {
	$("#pending_booking").addClass("hide");
	$("#upcoming_booking").addClass("hide");
	$("#previous_booking").removeClass("hide");
	$(".tab_btn").removeClass("active");
	$(this).toggleClass("active");
});
$("#pending_booking_btn").click(function () {
	$("#previous_booking").addClass("hide");
	$("#upcoming_booking").addClass("hide");
	$("#pending_booking").removeClass("hide");
	$(".tab_btn").removeClass("active");
	$(this).addClass("active");
});
$("#upcoming_booking_btn").click(function () {
	$("#previous_booking").addClass("hide");
	$("#pending_booking").addClass("hide");
	$("#upcoming_booking").removeClass("hide");
	$(".tab_btn").removeClass("active");
	$(this).toggleClass("active");
});
$(".completed_bookling_details_button").click(function () {
	$(".all_profile").addClass("hide");
	$(".completed_bookling_details").removeClass("hide");
});
$(".add_review_btn").click(function () {
	$(".add_review").removeClass("hide");
	$("#completed_bookling_details").addClass("hide");
}); 
$(".canceled_booking").click(function () {
	$("#booking_start").addClass("hide");
	$("#booking_details").removeClass("hide");
});
$("#close_add_review").click(function () {
	$("#completed_bookling_details").removeClass("hide");
	$(".add_review").addClass("hide");
});

$("#close_booking_detail").click(function () {
	$(".all_profile").removeClass("hide");
	$("#completed_bookling_details").addClass("hide");
}); 

// Mobile Header Js
$("header .canvas_btn").click(function () {
	$(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
	$(".mobile_header").removeClass("show");
});
// Mobile Header Js

$("#edit_profile_btn").click(function () {
	$(".see_profile").addClass("hide");
	$("#edit_profile").removeClass("hide");
});



// Babby Sitter Start Here 
$(".upcomng_booking_view").click(function () {
	$(".all_profile").addClass("hide");
	$("#start_job_now_details").removeClass("hide");
});

$(".start_job_btn").click(function () {
	$("#start_job_now_details").addClass("hide");
	$("#end_job_now").removeClass("hide");
}); 
$("#end_job_btn").click(function () {
	$("#end_job_now").addClass("hide");
	$(".all_profile").removeClass("hide");
});
$(".close_details_now_close").click(function () {
	$("#end_job_now").addClass("hide");
	$("#start_job_now_details").addClass("hide");
	$(".all_profile").removeClass("hide");
});
$(".completed_booking_button").click(function () {
	$("#booking_start").addClass("hide");
	$("#booking_details_completd").removeClass("hide");
});
$(".view_details_pending_btn").click(function () {
	$("#booking_start").addClass("hide");
	$("#booking_details_pending").removeClass("hide");
});
$(".close_current_details_btn").click(function () {
	$(".booking_details").addClass("hide");
	$("#booking_start").removeClass("hide");
});
$(".startbtn.active").click(function () {
	$(".endbtn.active").addClass("red");
});
$(".endbtn.active").click(function () {
	$(".endbtn.active").removeClass("red");
});
$(".upcomng_booking_view_in_detail").click(function () {
	$(".all_profile").addClass("hide");
	$("#jobs_in_list_item").removeClass("hide");
});
$(".close_detail_now").click(function () {
	$("#jobs_in_list_item").addClass("hide");
	$(".all_profile").removeClass("hide");
});