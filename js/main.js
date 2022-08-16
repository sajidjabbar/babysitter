// Pre Loader Js
$(window).on("load", function () {
	// console.log("test");
	$("#preloader").fadeOut(1000);
});
// Pre Loader Js

// Mobile Header Js
$("header .canvas_btn").click(function () {
	$(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
	$(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Banner Video Js
myVideo = document.getElementById("myvid");
function playPause() {
	if (myVideo.paused) {
		myVideo.play();
	} else {
		myVideo.pause();
	}
}
// Banner Video Js

// Product Detail Video Js
const video = document.getElementById("Provideo");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});
// Product Detail Video Js
