<?php /* Template Name: Проекты */
get_header();
$options = get_field('contacts', 'options');
?>

<section class="breadcrumb_link">
    <div class="container">
        <a href="/">Главная</a>
        <span><?= the_title(); ?></span>
    </div>
</section>

<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <h1><?= the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<section class="about_map_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 s_content">
                <?php if ($map_sub_headline = get_field('map_sub_headline')): ?>
                    <h2 class="s_title"><?= $map_sub_headline; ?></h2>
                <?php endif; ?>
                <div class="s_content--text">
                    <?php if ($map_headline = get_field('map_headline')): ?>
                        <p class="h2"><?= $map_headline; ?></p>
                    <?php endif;
                    if ($map_text = get_field('map_text')): ?>
                        <p><?= $map_text; ?></p>
                    <?php endif; ?>
                </div>
                <button class="btn mb-3" data-toggle="modal" data-target="#modal-form">НАПИШИТЕ НАМ</button>
                <button class="btn mb-3" data-toggle="modal" data-target="#modal-form">ЗАКАЗАТЬ ЗВОНОК</button>
                <a href="<?= $options['telegram']; ?>" class="btn">Telegram</a>
            </div>
            <div class="col-12 col-md-8">
                <?php get_template_part('template-parts/sections/section', 'map', array('type' => 'local')); ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/sections/section', 'our-projects');
get_template_part('template-parts/sections/section', 'form');
get_footer();
?>
