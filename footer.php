<!--  Footer Section Start  ------------>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-3 col-12">
                <div class="footer-logo">
                    <a href="index.php"><img src="images/logo.png" class="img-fluid" /></a>

                    <!-- <ul>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="terms.php">Terms &amp; Condition</a></li>
                        </ul> -->
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-2 col-12">
                <div class="f-services">
                    <h2>Navigate</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="terms.php">Terms & Condition</a></li>
                        <li><a href="Privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4 col-12">
                <div class="newsletter">
                    <h2>Contact Us</h2>
                    <form action="/sending/" method="POST">
                        <div class="news-letter-box"><input type="text" placeholder="Enter Your Email" name="em"
                                required="" /><button type="submit">Send</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="down-footer">
    <div class="container">
        <p>© 2022 Zemfar Solution | All Rights Reserved.</p>
    </div>
</div>

</footer>

<!--  Footer Section Start  ------------>



<script src="js/jquery.min.js"></script>

<script src="js/menu.js"></script>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>


<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>

<script>
    jQuery(document).ready(function () {
        'use strict';
        $('.logo-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.testimonial-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


    });


    /*ready*/
</script>




</body>

</html>