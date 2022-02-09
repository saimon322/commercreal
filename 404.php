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
<section class="page404">
    <div class="container">
        <div class="page404__content text-center">
            <h1 class="page404__title">404 - СТРАНИЦА НЕ НАЙДЕНА</h3>
            <span class="page404__text">Приносим свои извинения, произошла техническая ошибка. <br> Вы можете вернуться на главную страницу сайта или на последнею на которой ВЫ были.</span>
            <div class="row mt-5">
                <?php //if (isset($_SERVER['HTTP_REFERER'])): ?>
                    <div class="col-12 col-md-6">
                        <a href="javascript:history.back()" class="btn mb-2">
                            <?php _e('Предыдущая страница'); ?>
                        </a>
                    </div>
                <?php //endif; ?>
                <div class="col-12 col-md-6">
                    <a href="<?=home_url();?>" class="btn mb-2">
                        <?php _e('Главная'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
