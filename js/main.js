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
