<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Day2DayEvent </title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Outfit:wght@700&family=PT+Sans&family=PT+Sans+Narrow&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link id="effect" href="dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="./css/menu.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/animate.css">

</head>

<body>
    <div class="header-wrapper">

        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo smllogo-black"><img src="images/logo.webp" style="margin-top: -12px;" alt="mobile-logo" /></span>
        </div>
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <div class="desktoplogo"><a href="/" class="logo-black"><img src="images/logo.png" alt="header-logo"></a></div>
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <li class="nl-simple" aria-haspopup="true"><a href="/">Home</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="about-us.php">About Us</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="about-us.php">Events</a></li>
                        <li aria-haspopup="true"><a href="#!">Services<span class="wsarrow"></span></a>
                            <ul class="sub-menu">
                                <li aria-haspopup="true"><a href="sample-service.php"> Service 1</a></li>
                                <li aria-haspopup="true"><a href="sample-service.php">Service 2</a></li>
                                <li aria-haspopup="true"><a href="sample-service.php">Service 3</a></li>
                                <!-- <li aria-haspopup="true"><a href="thesis">Thesis Help</a></li>
                                <li aria-haspopup="true"><a href="research">Research Help</a></li>
                                <li aria-haspopup="true"><a href="personal-statement">Personal Statement</a></li>
                                <li aria-haspopup="true"><a href="term-paper">Term Paper Help</a></li>
                                <li aria-haspopup="true"><a href="course-work">Course Work Help</a></li>
                                <li aria-haspopup="true"><a href="case-study">Case Study Help</a></li> -->
                            </ul>
                        </li>

                        <li class="nl-simple" aria-haspopup="true"><a href="our-process.php">Testimonials</a></li>
                        <li class="nl-simple contact-hd" aria-haspopup="true"><a href="faqs.php">Contact Us</a></li>
                    </ul>
                </nav> 
            </div>
        </div> 
    </div> 

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>