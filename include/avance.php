<!-- Galeria -->
<section class="section-padding2" id="avance" data-scroll-index="6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Avance de <span>Obra</span></h2>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-md-12 text-center">
                <ul class="bauen-gallery-filter">
                    <li class="active" data-filter="*">Todo</li>
                    <li data-filter=".exterior">Exterior</li>
                    <li data-filter=".interior">Interior</li>
                    <li data-filter=".amenidades">Amenidades</li>
                </ul>
            </div>
        </div>-->
        <div class="row bauen-gallery-items">
            <?php foreach ($avances as $avance) : ?>
            <div class="col-md-<?= $avance['col']; ?> gallery-masonry-wrapper single-item">
                <a href="img/avance/bg/<?= $avance['foto']; ?>.jpg" title="<?= $avance['nombre']; ?>"
                <div class="gallery-masonry-item-img-link img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img"><img src="img/avance/<?= $avance['foto']; ?>.jpg"
                                                      class="img-fluid mx-auto d-block"
                                                      alt="<?= $SITIO; ?>"></div>
                        <div class="gallery-masonry-item-img"></div>
                        <div class="gallery-masonry-item-content">
                            <h4 class="gallery-masonry-item-title"><?= $avance['nombre']; ?></h4>
                            <div class="gallery-masonry-item-category">Avance</div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
</section>
