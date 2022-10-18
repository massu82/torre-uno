<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title><?= SITIO ?></title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/plugins.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <div class="logo-wrapper valign">
        <div class="logo">
            <a href="index.php"> <img src="img/logo.png" class="logo-img" alt="">
                <!--<h2>TORRE <span>UNO</span></h2>-->
            </a>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="icon-bar"><i class="ti-line-double"></i></span></button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item dropdown"><span class="nav-link"> Services <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="services.html">Services 01</a></li>
                    <li class="dropdown-item"><a href="services2.html">Services 02</a></li>
                    <li class="dropdown-item"><a href="services3.html">Services 03</a></li>
                    <li class="dropdown-item"><a href="services4.html">Services 04</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><span class="nav-link"> Projects <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="projects.html">Projects 01</a></li>
                    <li class="dropdown-item"><a href="projects2.html">Projects 02</a></li>
                    <li class="dropdown-item"><a href="projects3.html">Projects 03</a></li>
                    <li class="dropdown-item"><a href="projects4.html">Projects 04</a></li>
                    <li class="dropdown-item"><a href="project-gallery.html">Project Gallery</a></li>
                    <li class="dropdown-item"><a href="project-page.html">Project Page</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><span class="nav-link"> Pages <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="video.html">Video Background</a></li>
                    <li class="dropdown-item"><a href="before-after.html">Before After</a></li>
                    <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                    <li class="dropdown-item"><a href="team.html">Team</a></li>
                    <li class="dropdown-item"><a href="careers.html">Careers</a></li>
                    <li class="dropdown-item"><a href="testimonials.html">Testimonials</a></li>
                    <li class="dropdown-item"><a href="faqs.html">Faqs</a></li>
                    <li class="dropdown-item"><a href="gallery.html">Gallery</a></li>
                    <li class="dropdown-item"><a href="video-gallery.html">Video Gallery</a></li>
                    <li class="dropdown-item"><a href="process.html">Process</a></li>
                    <li class="dropdown-item"><a href="coming-soon.html">Coming Soon</a></li>
                    <li class="dropdown-item"><a href="not-found-404.html">404 Page</a></li>
                    <!-- Dropdown 3. level
                    <li class="dropdown-item"><span>Dropdown 2 <i class="ti-angle-right"></i></span>
                        <ul class="sub-menu">
                            <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                            <li class="dropdown-item"><a href="#">Dropdown 3</a></li>
                        </ul>
                    </li>
                    -->
                </ul>
            </li>
            <li class="nav-item dropdown"><span class="nav-link"> Blog <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="blog.html">Blog 01</a></li>
                    <li class="dropdown-item"><a href="blog2.html">Blog 02</a></li>
                    <li class="dropdown-item"><a href="blog3.html">Blog 03</a></li>
                    <li class="dropdown-item"><a href="blog4.html">Blog 04</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <div class="text-right item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 offset-md-5">
                            <h1>Innovate Desing in Toronto</h1>
                            <p>Architecture viverra tellus nec massa dictum the euismoe.
                                <br>Curabitur viverra the posuere aukue velit.
                            </p>
                            <div class="butn-light mt-30 mb-30"><a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right item bg-img" data-overlay-dark="4" data-background="img/slider/2.jpg">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 offset-md-5">
                            <h1>Innovate Desing in Canada</h1>
                            <p>Architecture viverra tellus nec massa dictum the euismoe.
                                <br>Curabitur viverra the posuere aukue velit.
                            </p>
                            <div class="butn-light mt-30 mb-30"><a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Corner -->
    <div class="hero-corner"></div>
    <div class="hero-corner3"></div>
    <!-- Left Panel -->
    <div class="left-panel">
        <ul class="social-left clearfix">
            <li><a href="#"><i class="ti-pinterest"></i></a></li>
            <li><a href="#"><i class="ti-instagram"></i></a></li>
            <li><a href="#"><i class="ti-twitter"></i></a></li>
            <li><a href="#"><i class="ti-facebook"></i></a></li>
        </ul>
    </div>
</header>
<!-- Content -->
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">Torre <span>Uno</span></h2>
                    <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines
                        aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit
                        tristique.</p>
                    <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non
                        sagie the fermen.</p>
                    <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit
                        non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami acsestion augue
                        artine.</p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"><img src="img/about.jpg" class="img-fluid" alt=""></div>
                        <div class="about-img-2 about-buro">Luxury Apartments</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Nuestra <span>Galería</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <iframe width='100%' height='720' src='https://roundme.com/embed/908568/2854772' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Services</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <a href="architecture.html"> <img src="img/icons/icon-1.png" alt="">
                            <h5>Architecture</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in
                                the vitae miss.</p>
                            <div class="numb">01</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="interior-design.html"> <img src="img/icons/icon-2.png" alt="">
                            <h5>Interior Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in
                                the vitae miss.</p>
                            <div class="numb">02</div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="urban-design.html"> <img src="img/icons/icon-3.png" alt="">
                            <h5>Urban Design</h5>
                            <div class="line"></div>
                            <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in
                                the vitae miss.</p>
                            <div class="numb">03</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="bauen-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Current <span>News</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/slider/1.jpg" alt=""></div>
                            <div class="con"> <span class="category">
                                        <a href="blog.html">Architecture </a> - 20.12.2022
                                    </span>
                                <h5><a href="post.html">Modern Architectural Structures</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/slider/2.jpg" alt=""></div>
                            <div class="con"> <span class="category">
                                        <a href="blog.html">Interior</a> - 18.12.2022
                                    </span>
                                <h5><a href="post2.html">Modernism in Architecture</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/slider/3.jpg" alt=""></div>
                            <div class="con"> <span class="category">
                                        <a href="blog.html">Urban</a> - 16.12.2022
                                    </span>
                                <h5><a href="post3.html">Postmodern Architecture</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/slider/4.jpg" alt=""></div>
                            <div class="con"> <span class="category">
                                        <a href="blog.html">Planing</a> - 14.12.2022
                                    </span>
                                <h5><a href="post4.html">Modern Architecture Buildings</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo video - Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner2.jpg"
             data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Promo video -->
                    <div class="col-md-6">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                    <svg class="circle-fill">
                                        <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                    </svg>
                                    <svg class="circle-track">
                                        <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1"
                                                fill="none"></circle>
                                    </svg>
                                    <span class="polygon">
                                            <i class="ti-control-play"></i>
                                        </span> </a>
                            </div>
                            <div class="cont mt-15 mb-30">
                                <h5>View promo video</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                            <div class="head-box">
                                <h4>What Client's Say?</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item"><span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Architect dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante
                                        the lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                    <div class="info">
                                        <div class="author-img"><img src="img/team/1.jpg" alt=""></div>
                                        <div class="cont">
                                            <h6>Jason Brown</h6> <span>Crowne Plaza Owner</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                            <img src="img/quot.png" alt="">
                                        </span>
                                    <p>Interior dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the
                                        lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                    <div class="info">
                                        <div class="author-img"><img src="img/team/2.jpg" alt=""></div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Armada Owner</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                            <img src="img/quot.png" alt="">
                                        </span>
                                    <p>Urban dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the
                                        lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                    <div class="info">
                                        <div class="author-img"><img src="img/team/4.jpg" alt=""></div>
                                        <div class="cont">
                                            <h6>Jesica Smith</h6> <span>Alsa Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="main-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Phone</h6>
                        </div>
                        <p>+1 203-123-0606</p>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Email</h6>
                        </div>
                        <p>architecture@bauen.com</p>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item fotcont">
                        <div class="fothead">
                            <h6>Our Address</h6>
                        </div>
                        <p>24 King St, Charleston, SC 29401 USA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-left">
                            <p>© 2022 Bauen. All right reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 abot">
                        <div class="social-icon"><a href="index.php"><i class="ti-facebook"></i></a> <a
                                    href="index.php"><i class="ti-twitter"></i></a> <a href="index.php"><i
                                        class="ti-instagram"></i></a> <a href="index.php"><i
                                        class="ti-pinterest"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="right"><a href="#">Terms &amp; Conditions</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/before-after.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

