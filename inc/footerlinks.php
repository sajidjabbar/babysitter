<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->
<!-- Range Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<!-- Range Slider -->
<!-- Main Js -->
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
<!-- Main Js -->
<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Jquery JS-->
<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->
<!-- Date Picker Calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="js/bs-custom-file-input.js"></script>
<!-- Date Picker Calender -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    $(".for_the_hidinh_field").click(function() {
        $(this).toggleClass("tabs_hide");
    });
    // $("p").mouseout(function() {
    //     $("p").css("background-color", "gray");
    // });
    // NEW SCRIPTING
    $("#babysitterregister").click(function() {
        $(".login_option").addClass("hide");
        // $(".pink_line").addClass("mt-5");
    });
    $("#normal_user").click(function() {
        $(".login_option").removeClass("hide");
        $(".pink_line").removeClass("mt-5");
    });
    $('input[type=radio][name=booking_continuos]').change(function() {
        if (this.value == 'one_time') {
            $("#one_no").removeClass("hide");
            $("#two_no").addClass("hide");
            $(".first_step_btn").removeClass("transp");
            $(".djgoij").removeClass("width-53");
        } else if (this.value == 'two_time') {
            $("#two_no").removeClass("hide");
            $("#one_no").addClass("hide");
            $(".first_step_btn").addClass("transp");
            $(".djgoij").addClass("width-53");
        }
    });
    // $(".single_servcie1[type=radio]:checked ").click(function() {
    //     $(".start-form-hide").addClass("hide");
    // });
    // $(".single_servcie  [type=radio]:checked ").click(function() {
    //     $(".start-form-hide").removeClass("");
    // });

    // or



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

    if ($(".accordion-button").is(".show")) {
        $(".accordion-item").addClass('.non-active');
    } else {
        $(".accordion-item").addClass('.active');
    }
</script>

<!-- Wow Js CDN -->
<!-- Hover Animation -->
<script>
    $("#datepicker_scnd10").datepicker({

        firstDay: 7,
        // changeMonth: true,
        // changeYear: true,
        prevText: '<i class="fa fa-fw fa-angle-left"></i>',
        nextText: '<i class="fa fa-fw fa-angle-right"></i>',

        //bg
        onSelect: function() {
            var dateText = $.datepicker.formatDate("MM dd", $(this).datepicker("getDate"));
        }
    });
    $(document).ready(function() {
        // Set div display to none
        $("section.calendar .ui-datepicker .ui-datepicker-calendar .ui-state-default ")
            .mouseover(function() {
                $(".hover-effect").css({
                    "display": "block",
                    "transition": "1s all"
                });
            });
        $("section.calendar .ui-datepicker .ui-datepicker-calendar .ui-state-default ").mouseout(
            function() {
                $(".hover-effect").css("display", "none");
            });

    });

    $('#markDays').click(function() {
        $('#markDayDv').toggleClass('checked')
        var classExist = $('.hover-effect').hasClass('checked');
        if (!!classExist) {
            $('#markDays').text("marked");
        } else {
            $('#markDays').text('mark');
        }
    })


    if ('.hover-effect.checked')

        $(document).ready(function() {
            // Set div display to none
            $("section.calendar .ui-datepicker .ui-datepicker-calendar .ui-state-active ").mouseover(function() {
                $(".hover-effect1").css({
                    "display": "block",
                    "transition": "0.9s all"

                });
            });
            $("section.calendar .ui-datepicker .ui-datepicker-calendar .ui-state-active ").mouseout(function() {
                $(".hover-effect1").css("display", "none");
            });

        });












    const btn = document.querySelector('.btn');
    const wave = document.querySelector('#wave');
    const shapes = document.querySelector('#shapes');

    btn.addEventListener('mouseenter', function() {
        this.classList.add('active');
    });

    btn.addEventListener('mouseleave', function() {
        this.classList.remove('active');
    });
</script>

<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            console.log(previous_fs);
            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative',
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar").css("width", percent + "%")
            console.log(percent)
            if (percent != 20) {
                $(".booking-chk").addClass("hide");
            } else {
                $(".booking-chk").removeClass("hide");
            }
        }

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<script>
    var urchoice = document.getElementById('payment-method')

    function chosePaymentMethod(method) {
        urchoice.value = method
        return
    }


    // Hiring Calender Start Here
    $("#datepicker_scnd7").datepicker({

        firstDay: 7,
        // changeMonth: true,
        // changeYear: true,
        prevText: '<i class="fa fa-fw fa-angle-left"></i>',
        nextText: '<i class="fa fa-fw fa-angle-right"></i>',

        //bg
        onSelect: function() {
            var dateText = $.datepicker.formatDate("MM dd", $(this).datepicker("getDate"));
        }
    });

    //bg
    // Hiring Calender End Here
</script>