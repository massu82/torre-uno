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
                    <h2 class="section-title"><span>Proyecto</span></h2>
                    <div class="about-img">
                        <div class="img"><img src="img/about.jpg" class="img-fluid" alt="<?= SITIO ?>"></div>
                        <div class="about-img-2 about-buro">Banyan Tree Luxury Apartments</div>
                    </div>
                    <p>Al invertir en <b>Banyan Tree Luxury Apartments Cabo Marqués</b>, los propietarios cuentan
                        con excelentes opciones de inversión, permitiéndoles ser dueños de un departamento de clase
                        mundial bajo el esquema de propiedad plena o fraccional.</p>
                    <p>Los propietarios disfrutan de todos los servicios e instalaciones como si fuesen huéspedes del
                        hotel, en la comodidad de su propiedad.</p>
                    <p>Durante su ausencia, los propietarios tendrán la tranquilidad de que su inversión estará
                        protegida por el hotel, mediante nuestro Programa de Renta (opcional)</p>

                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="services2-subtitle">Beneficios Banyan Tree Luxury Apartment</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Proyecto vanguardista</li>
                        <li class="list-group-item">Alberca y terraza privada</li>
                        <li class="list-group-item">Mejor privacidad, exclusividad y seguridad de la región</li>
                        <li class="list-group-item">Ingresos mediante el programa de rentas</li>
                        <li class="list-group-item">Programa de intercambio internacional con Banyan Tree</li>
                        <li class="list-group-item">Bajos costos de mantenimiento y servicios por ser operado por Banyan Tree</li>
                        <li class="list-group-item">Servicio hotelero</li>
                        <li class="list-group-item">Acceso a todas las amenidades del resort Banyan Tree Cabo Marqués*</li>
                        <li class="list-group-item">Programa de intercambio Internacional con Interval
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">3200 propiedades internacionales</li>
                                <li class="list-group-item">80 destinos a nivel mundial</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Descuentos y beneficios con Banyan Tree</li>

                        <li class="list-group-item">Club de playa privada y Marina</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <img src="img/plantas/niveles.png" width="100%" alt="" class="m-lg-5 mx-auto"/>
                <iframe src="mapplic/index.html" width="100%" height="650" frameborder="0"></iframe>
            </div>

            <div class="row">
                <img src="img/plantas/niveles.png" width="100%" alt="" class="m-lg-5 mx-auto"/>
                <div class="col-md-12 text-center">
                    <ul class="bauen-gallery-filter">
                        <li data-filter="*" class="active">Todo</li>
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

