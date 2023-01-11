<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title><?= SITIO ?></title>
    <?php include('include/header.php'); ?>
</head>

<?php include('include/navbar.php'); ?>
<?php //include('include/header-video.php'); ?>
<?php include('include/slider.php'); ?>
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
                        <a href="architecture.html"> <img src="img/icons/icon-1.png" alt="<?= SITIO ?>">
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
                        <a href="interior-design.html"> <img src="img/icons/icon-2.png" alt="<?= SITIO ?>">
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
                        <a href="urban-design.html"> <img src="img/icons/icon-3.png" alt="<?= SITIO ?>">
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
    <?php //include ('include/map.php'); ?>
    <?php include('include/footer.php'); ?>

    </body>
</html>

