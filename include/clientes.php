<!-- Clients -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-8 owl-carousel owl-theme">
                <?php foreach ($clientes as $cliente): ?>
                    <div class="clients-logo">
                        <a href="<?= $cliente['link']; ?>" target="_blank"><img
                                    src="img/clients/<?= $cliente['logo']; ?>" alt="<?= $cliente['nombre']; ?>"></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
