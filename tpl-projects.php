<?php /* Template Name: Проекты */
get_header();
?>

<section class="breadcrumb_link">
    <div class="container">
        <a href="/">Главная</a>
        <a class="active" href="#">Проекты</a>
    </div>
</section>

<section class="about_studio_area section-pad-bot pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section class="about_map_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 s_content">
                <?php if ($map_sub_headline = get_field('map_sub_headline')): ?>
                    <h6 class="s_title"><?= $map_sub_headline; ?></h6>
                <?php endif; ?>
                <div class="s_content--text">
                    <?php if ($map_headline = get_field('map_headline')): ?>
                        <h2><?= $map_headline; ?></h2>
                    <?php endif;
                    if ($map_text = get_field('map_text')): ?>
                        <p><?= $map_text; ?></p>
                    <?php endif; ?>
                </div>
                <button class="btn btn mb-4" data-toggle="modal" data-target="#modal-form">НАПИШИТЕ НАМ</button>
                <button class="btn btn" data-toggle="modal" data-target="#modal-form">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>
            <div class="col-12 col-md-8">
                <div class="map map--local" data-aos data-aos-offset="200">
                    <img src="<?= get_template_directory_uri(); ?>/img/map-local.svg" alt="" class="map__bg">
                    <div class="map__points">
                        <div class="map__point" style="left: 13%; top: 31%;">
                            <p>Балтийск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 19%; top: 27%;">
                            <p>Янтарный</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 26%; top: 25%;">
                            <p>Светлогорск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 32%; top: 30%;">
                            <p>Зеленогорск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 24%; top: 38%;">
                            <p>Калининград</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 66%; top: 44%;">
                            <p>Советск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 62%; top: 71%;">
                            <p>Черняховск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 71%; top: 75%;">
                            <p>Гусев</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="map__point" style="left: 76%; top: 79%;">
                            <p>Нестеров</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/sections/section', 'our-projects');
get_template_part('template-parts/sections/section', 'form-2');
get_footer();
?>
