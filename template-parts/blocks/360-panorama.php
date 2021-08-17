<div class="acf-block block-pannellum">
    <h3>Панорама 360&#176; местности</h3>
    <?php
    wp_enqueue_script('pannellum-js');
    wp_enqueue_style('pannellum-css');
    ?>
    <div id="panorama"></div>
    <script>
        window.onload = function () {
            pannellum.viewer('panorama', {
                "type": "equirectangular",
                "autoLoad": true,
                "panorama": "<?php echo $args['img']; ?>"
            });
        }
    </script>
</div>