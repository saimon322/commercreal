<div class="acf-block block-pannellum">
    <?php if( empty($args['headline']) ): ?>
        <p class="h3">Панорама 360&#176; местности</p>
    <?php else: ?>
        <p class="h3"><?= $args['headline']; ?></p>
    <?php endif; ?>
    
    <div class="panorama" id="panorama-<?= $args['index']; ?>"></div>
    <script>
        jQuery(document).ready(function (){
            pannellum.viewer('panorama-<?= $args['index']; ?>', {
                "type": "equirectangular",
                "autoLoad": true,
                "panorama": "<?= $args['img']; ?>"
            });
        });
    </script>
</div>