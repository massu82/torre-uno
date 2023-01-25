<!-- Proyecto -->
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
                    <p>Al invertir en <b>Banyan Tree Luxury Apartments Cabo Marqués</b>, los propietarios cuentan
                        con excelentes opciones de inversión, permitiéndoles ser dueños de un departamento de clase
                        mundial bajo el esquema de propiedad plena o fraccional.</p>
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

            <div class="row">
                <img src="img/plantas/niveles.png" width="100%" alt="" class="m-lg-5 mx-auto"/>
                <div class="col-md-12 text-center">
                    <ul class="bauen-gallery-filter">
                        <li class="active" data-filter="*" class="active">Todo</li>
                        <!--<li data-filter=".so" class="active">Sótano</li>-->
                        <li data-filter=".es">Estacionamiento</li>
                        <li data-filter=".pb">Planta Baja</li>
                        <li data-filter=".1n">Primer Nivel</li>
                        <li data-filter=".2n">Segundo Nivel</li>
                        <li data-filter=".ph">Pent House</li>

                    </ul>
                </div>
            </div>

            <div class="row bauen-gallery-items">
                <?php foreach ($planos as $plano) : ?>
                    <div class="col-md-<?= $plano['col']; ?> gallery-masonry-wrapper single-item <?= $plano['clave']; ?>">
                        <a href="img/plantas/<?= $plano['foto']; ?>.jpg" title="<?= $plano['nombre']; ?>"
                           class="gallery-masonry-item-img-link img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"><img src="img/plantas/opt/<?= $plano['foto']; ?>.jpg"
                                                              class="img-fluid mx-auto d-block"
                                                              alt="<?= $plano['nombre']; ?>"></div>
                                <div class="gallery-masonry-item-img"></div>
                                <div class="gallery-masonry-item-content">
                                    <h4 class="gallery-masonry-item-title"><?= $plano['nombre']; ?></h4>
                                    <div class="gallery-masonry-item-category"><?= $plano['nivel']; ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

