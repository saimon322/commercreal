<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package commerc_real
 */

get_header();
?>
    <section class="image_banner_area" style="background: none; position: relative; z-index: 0;" data-jarallax-original-styles="background: url('https://dark.paul-themes.com/wp/intria/intria-demo/images_dark/2018/08/single-blog-3-4.jpg');">
        <div class="container">
            <div class="single_banner_text text-center page404">
                <h3 class="mb-3">404 - СТРАНИЦА НЕ НАЙДЕНА</h3>
                <span class="h4">Приносим свои извинения, произошла техническая ошибка. <br> Вы можете вернуться на главную страницу сайта или на последнею на которой ВЫ были.</span>
                <div class="row mt-5">
                    <?php //if (isset($_SERVER['HTTP_REFERER'])): ?>
                        <div class="col-12 col-md-6">
                            <a href="javascript:history.back()" class="btn mb-2">
                                <?php _e('Предыдущая страница'); ?>
                            </a>
                        </div>
                    <?php //endif; ?>
                    <div class="col-12 col-md-6">
                        <a href="<?=get_template_directory_uri();?>" class="btn mb-2">
                            <?php _e('Главная'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
        </div>
    </section>
<?php
get_footer();
