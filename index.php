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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="mapplic/mapplic.css"/>
</head>
<body>
<?php include('include/navbar.php'); ?>
<?php include('include/header-video.php'); ?>
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Proyecto -->
    <section class="about section-padding" id="proyecto" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">Proyecto <span>Torre Uno</span></h2>
                    <p>Al invertir en Banyan Tree Residencias Cabo Marqués Luxury Apartment, los propietarios cuentan
                        con excelentes opciones de inversión, permitiéndoles ser dueños de un departamento de clase
                        mundial bajo el esquema Full Ownership.</p>
                    <p>Los propietarios disfrutan de todos los servicios e instalaciones como si fuesen huéspedes del
                        hotel, en la comodidad de su propiedad.</p>
                    <p>Durante su ausencia, los propietarios tendrán la tranquilidad de que su inversión estará
                        protegida por el hotel, mediante nuestro Programa de Renta (opcional)</p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"><img src="img/about.jpg" class="img-fluid" alt="<?= SITIO ?>"></div>
                        <div class="about-img-2 about-buro">Luxury Apartments</div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <?php include('include/planos.php'); ?>
    <?php include('include/vistas.php'); ?>
    <?php include('include/galeria.php'); ?>
    <?php include('include/videos.php'); ?>
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

    <!-- Promo video - Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/galeria/bg/05.jpg"
             data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Promo video -->
                    <div class="col-md-6">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://vimeo.com/574644470">
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
                                <h5>Ver video promo</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                            <div class="head-box">
                                <h4>Escríbenos</h4>
                            </div>
                            <form method="post" class="contact__form" action="mail.php">
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                             role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="name" type="text" placeholder="Your Name *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="email" placeholder="Your Email *" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="phone" type="text" placeholder="Your Number *" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                                  required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input name="submit" type="submit" value="Enviar Mensaje">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/clientes.php'); ?>
    <?php include('include/footer.php'); ?>
</div>
<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="mapplic/mapplic.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var map = $('#mapplic').mapplic({
            source: 'apartment.json',
            height: 'auto',
            minimap: false,
            sidebar: true,
            hovertip: true,
            maxscale: 3

        });
        self = map.data('mapplic');

        // EVENTS
        // Map ready
        map.on('mapready', function (e, self) {
            console.log('Map is ready!')
            // self grants direct access to the map object
            // The map will be focused on the washing machine by default
            //self.moveTo(0.67, 0.62, 3, 0);
        });

        // Location opened
        map.on('locationopened', function (e, location) {
            // location grants full access to the location
            console.log(location.title + ' opened.');
        });

        // Location closed
        map.on('locationclosed', function (e) {
            console.log('Location closed.');
        });

        // Level switched
        map.on('levelswitched', function (e, level) {
            console.log('Switched to ' + level + ' level.');
        });

        // Position changed
        map.on('positionchanged', function (e) {
            // self grants direct access to the map object
            console.log('Pan or zoom performed, current scale: ' + self.scale);
        });

        // METHODS
        // Getting mapplic object
        var self = map.data('mapplic');

        map.on('locationclosed', function (e) {
            //console.log(self);
        });
    });
</script>
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

