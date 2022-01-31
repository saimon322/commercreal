<div class="acf-block villa_slider owl-carousel">
    <?php foreach ($args['images'] as $img): ?>
        <div class="item">
            <img src="<?= $img; ?>" />
        </div>
    <?php endforeach; ?>
</div>