<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <?php foreach ($sliderEn as $slide): ?>
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="1"
                 data-background="img/slider/<?= $slide['foto']; ?>">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2><?= $slide['texto']; ?></h2>
                                <!--<p>Architecture viverra tellus nec massa dictum the euismoe.
                                    <br>Curabitur viverra the posuere aukue velit.
                                </p>-->
                                <div class="butn-light mt-30 mb-30"><a href="<?= $slide['cta']; ?>"
                                                                       data-scroll-nav="0"><span>Contact</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</header>
