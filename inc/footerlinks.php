<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Range Slider -->
<script src="js/range.js"></script>
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
// Accordion Js
$('.product-slider').slick({
    centerMode: true,
    arrows: false,
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                centerMode: true,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
            }
        }
    ]
});

$('.blog_slider').slick({
    centerMode: true,
    arrows: false,
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                centerMode: true,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
            }
        }
    ]
});

$('.all-feeds').slick({
    centerMode: true,
    arrows: false,
    slidesToShow: 4,
    responsive: [{
            breakpoint: 768,
            settings: {
                centerMode: true,
                slidesToShow: 4
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
            }
        }
    ]
});

$('.single-image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-images'
});
$('.slider-images').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.single-image',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true
});

// Tabs Show Hide Js
$(document).ready(function() {
    $(".editInformation").click(function() {
        $(".first-box").addClass("hide");
        $(".second-box").removeClass("hide");
    });
    $(".saveInformation").click(function() {
        $(".first-box").removeClass("hide");
        $(".second-box").addClass("hide");
    });

    $(".editPassword").click(function() {
        $(".first-box").addClass("hide");
        $(".third-box").removeClass("hide");
    });
    $(".savePassword").click(function() {
        $(".first-box").removeClass("hide");
        $(".third-box").addClass("hide");
    });

    $(".editAddress").click(function() {
        $(".fourth-box").addClass("hide");
        $(".fifth-box").removeClass("hide");
    });
    $(".saveAddress").click(function() {
        $(".fourth-box").removeClass("hide");
        $(".fifth-box").addClass("hide");
    });
});
// Tabs Show Hide Js

// Searcg Bar Js
$('#searchBtn').click(function() {
    $('.search-bar').addClass('active')
})
$('.search-bar .cancel').click(function() {
    $('.search-bar').removeClass('active')
})
// Searcg Bar Js

// Chats.js Js
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {
    type: "pie",
    data: {
        labels: [],
        datasets: [{
            backgroundColor: ["#C23127", "#fff"],
            data: [75, 50],
        }, ],
    },
});
// Chats.js Js
</script>

<!-- Wow Js CDN -->