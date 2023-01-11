<!-- Planos -->

<section class="section-padding2" id="planta" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Planos  de <span>distribución</span></h2>

            </div>
            <img src="img/plantas/niveles.png" width="100%" alt="" class="m-lg-5" />

        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="bauen-gallery-filter">
                    <li class="active" data-filter="*" class="active">Todo</li>
                    <!--<li data-filter=".so" class="active">Sótano</li>-->
                    <li data-filter=".pb" >Planta Baja</li>
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

