<div class="acf-block block-pannellum">
    <?php if( empty($args['headline']) ): ?>
        <h3>Панорама 360&#176; местности</h3>
    <?php else: ?>
            <h3><?= $args['headline']; ?></h3>
    <?php endif; ?>
    
    <div class="panorama" id="panorama-<?= $args['index']; ?>"></div>
    <script>
        window.onload = function () {
            pannellum.viewer('panorama-<?= $args['index']; ?>', {
                "type": "equirectangular",
                "autoLoad": true,
                "panorama": "<?= $args['img']; ?>"
            });
        }
    </script>
</div>