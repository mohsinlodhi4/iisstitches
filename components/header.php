<?php
    $titles = [
        "/privacy-policy.php" => "Privacy Policy",
        "/terms.php" => "Terms & Conditions",
        "/service.php" => "Services",
        "/about.php" => "About Us",
        "/project.php" => "Projects",
        "/testimonial.php" => "Testimonials",
        "/contact.php" => "Contact",
        "/testimonial.php" => "Testimonials",
        "/team.php" => "Our Team",
    ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IIS - Innovative Idea Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="innovative, idea, solutions, web, media, marketing, graphic, vector, patches, custom, patches" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <div class="d-flex align-items-center">
                        <img src="img/logo-icon.png" alt="Logo">
                        <h1 class="m-0">Innovative Idea Solutions</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/", "/index.php", ""]) ?  'active' : ''?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/about.php"]) ?  'active' : ''?>">About</a>
                        <a href="service.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/service.php"]) ?  'active' : ''?>">Service</a>
                        <a href="testimonial.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/testimonial.php"]) ?  'active' : ''?>">Testimonials</a>
                        <!-- <a href="project.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/project.php"]) ?  'active' : ''?>">Project</a> -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link <?=in_array($_SERVER['REQUEST_URI'], ["/contact.php"]) ?  'active' : ''?>">Contact</a>
                    </div>
                    <!-- <a href="/contact.php" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a> -->
                </div>
            </nav>

            <?php if( in_array($_SERVER['REQUEST_URI'], ["/", "/index.php", ""]) ){ ?>
                <div class="container-xxl bg-primary hero-header">
                    <div class="container px-lg-5">
                        <div class="row g-5 align-items-end">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative People</h1>
                                <p class="text-white pb-3 animated slideInDown">Welcome to Innovative Idea Solutions, where we specialize in delivering cutting-edge digital marketing solutions to propel your business to new heights of success in the digital landscape. In today's hyper-connected world, a strong online presence is paramount to reaching and engaging your target audience effectively. That's where we come in - as your trusted partner, we're here to help you navigate the complexities of digital marketing and achieve tangible results that drive growth and maximize your ROI.</p>
                                <!-- <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a> -->
                                <a href="contact.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="container-xxl py-5 bg-primary hero-header">
                    <div class="container my-5 py-5 px-lg-5">
                        <div class="row g-5 py-5">
                            <div class="col-12 text-center">
                                <h1 class="text-white animated slideInDown"> <?=$titles[$_SERVER['REQUEST_URI']] ?? "Not found!" ?> </h1>
                                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                        <li class="breadcrumb-item text-white active" aria-current="page"> <?=$titles[$_SERVER['REQUEST_URI']] ?? "Not found!" ?> </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Navbar & Hero End -->