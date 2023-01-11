<!-- Planos -->
<section class="section-padding2" id="planta" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Planos de <span>distribución</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="bauen-gallery-filter-b">
                    <!--<li class="active" data-filter="*">Todo</li>-->
                    <li data-filter=".so" class="active">Sótano</li>
                    <li data-filter=".pb" >Planta Baja</li>
                    <li data-filter=".1n">Primer Nivel</li>
                    <li data-filter=".2n">Segundo Nivel</li>
                    <li data-filter=".ph">Pent House</li>

                </ul>
            </div>
        </div>

        <div class="row bauen-gallery-items-b">
            <?php foreach ($plantas as $planta) : ?>
                <div class="col-md-<?= $planta['col']; ?> gallery-masonry-wrapper single-item <?= $planta['cat']; ?>">
                    <a href="img/plantas/<?= $planta['foto']; ?>.jpg" title="<?= $planta['des']; ?>"
                       class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"><img src="img/plantas/opt/<?= $planta['foto']; ?>.jpg"
                                                          class="img-fluid mx-auto d-block"
                                                          alt="<?= $planta['des']; ?>"></div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <h4 class="gallery-masonry-item-title"><?= $planta['des']; ?></h4>
                                <div class="gallery-masonry-item-category"><?= $planta['cat']; ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

