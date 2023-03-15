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
<?php include('include/planos-map.php'); ?>
<?php //include('include/vistas.php'); ?>
<?php include('include/galeria.php'); ?>
<?php include('include/propiedad.php'); ?>
<?php include('include/avance.php'); ?>
<?php include('include/dron.php'); ?>
<?php //include('include/servicios.php'); ?>


<!-- Promo video - Testiominals -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/galeria/bg/001.jpg"
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
                                        Tu mensaje ha sido enviado con exito
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Nombre *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Correo *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Teléfono *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensaje *"
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

