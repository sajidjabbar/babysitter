<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Range Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<!-- Range Slider -->
<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script>
// NEW SCRIPTING
$("#babysitterregister").click(function() {
    $(".login_option").addClass("hide");
});
$("#normal_user").click(function() {
    $(".login_option").removeClass("hide");
});



// Accordion Js
// if ($(".accordion-collapse").hasClass("show")) {
//     $('.accordion-item').addClass('active')
// } else {
//     $('.accordion-item').removeClass('active')
// }

if ($(".accordion-button").is(".show")) {
    $(".accordion-item").addClass('.non-active');
} else {
    $(".accordion-item").addClass('.active');
}