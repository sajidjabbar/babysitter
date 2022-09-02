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
$(".view_detail").click(function () {
	$("#booking_start").addClass("hide");
	$("#booking_details").removeClass("hide");
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
