<!-- Galeria -->
<section class="section-padding2" id="galeria" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Gallery <span></span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="bauen-project-filter">
                    <li class="active" data-filter="*">All images</li>
                    <li data-filter=".exterior">Exterior</li>
                    <!--<li data-filter=".interior">Interior</li>-->
                    <li data-filter=".amenities">Amenities</li>
                </ul>
            </div>
        </div>
        <div class="row bauen-project-items">
            <?php foreach ($galeriaEn as $foto) : ?>
                <div class="col-md-<?= $foto['col']; ?> gallery-masonry-wrapper single-item <?= $foto['cat']; ?>">
                    <a href="img/galeria/bg/<?= $foto['foto']; ?>.jpg" title="<?= $foto['des']; ?>"
                       class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"><img src="img/galeria/<?= $foto['foto']; ?>.jpg"
                                                          class="img-fluid mx-auto d-block"
                                                          alt="<?= $SITIO; ?>"></div>
                            <div class="gallery-masonry-item-img"></div>
                            <div class="gallery-masonry-item-content">
                                <h4 class="gallery-masonry-item-title"><?= $foto['des']; ?></h4>
                                <div class="gallery-masonry-item-category"><?= $foto['cat']; ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
