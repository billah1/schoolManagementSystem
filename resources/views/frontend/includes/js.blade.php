<!--====== jquery js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{asset('/')}}assets/frontend/includes/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('/')}}assets/frontend/includes/js/vendor/jquery-1.10.2.min"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/bootstrap.min.js"></script>

<!--====== Slick js ======-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/jquery.magnific-popup.min.js"></script>

<!--====== Counter Up js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/waypoints.min.js"></script>
<script src="{{asset('/')}}assets/frontend/includes/js/jquery.counterup.min.js"></script>

<!--====== Nice Select js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/jquery.nice-select.min.js"></script>

<!--====== Nice Number js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/jquery.nice-number.min.js"></script>

<!--====== Count Down js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/jquery.countdown.min.js"></script>

<!--====== Validator js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/validator.min.js"></script>

<!--====== Ajax Contact js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/ajax-contact.js"></script>

<!--====== Main js ======-->
<script src="{{asset('/')}}assets/frontend/includes/js/main.js"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
{{--<script src="{{asset('/')}}assets/frontend/includes/js/map-script.js"></script>--}}

<script>
    $(document).ready(function () {
        $('.slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev">&#8592;</button>',
            nextArrow: '<button type="button" class="slick-next">&#8594;</button>'
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Simulate content loading delay (remove this in your actual implementation)
        setTimeout(function () {
            // Remove the 'loading' class to hide the preloader
            document.querySelector('.preloader').classList.remove('loading');

            // Show the content
            document.querySelector('.content').style.display = 'block';
        }, 2000); // Adjust the time based on your actual content loading time
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Trigger the animation for the button text after 5 seconds
        setTimeout(function () {
            document.querySelector('.slider-buttons').style.opacity = '1';
            document.querySelector('.slider-buttons').style.visibility = 'visible';
        }, 5000);
    });

    document.addEventListener("DOMContentLoaded", function () {
        var startYear = 1993;
        var currentYear = new Date().getFullYear();
        var yearRange = startYear === currentYear ? startYear : startYear + '-' + currentYear;

        var copyrightElement = document.getElementById("copyright");
        copyrightElement.innerHTML = 'Copyright © ' + yearRange + ' unicodeconverter.info. All rights reserved.<br>E-mail:arifsohag2500@gmail.com.info Developed by:-<a  href="https://www.facebook.com/iamarifhossen/">&thinsp;MD ARIF SOHAG.';
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Hide the preloader when the content is fully loaded
        setTimeout(function () {
            document.querySelector('.preloader').style.display = 'none';
        }, 1000); // Adjust the delay as needed
    });

    // Initialize Bootstrap-datepicker
    $(document).ready(function () {
        $('#yearInput').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });
    });
</script>





