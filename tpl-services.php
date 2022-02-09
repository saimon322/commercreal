<?php /* Template Name: Услуги */
get_header();
?>

<section class="single-banner">
    <img src="<?php the_field('baner'); ?>" alt="">
    <div class="container">
        <h1 class="single-banner__title">
            <?php if ($headline = get_field('headline_h1')): ?>
                <?= $headline; ?>
            <?php else: ?>
                <?php the_title(); ?>
            <?php endif; ?>
        </h1>
    </div>
</section>

<section class="about_studio_area">
    <div class="container">
        <div class="breadcrumb_link">
            <a href="/">Главная</a>
            <span><?= the_title(); ?></span>
        </div>
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?= the_content(); ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/sections/section', 'all-services');
get_template_part('template-parts/sections/section', 'stages');
get_template_part('template-parts/sections/section', 'office');
get_template_part('template-parts/sections/section-latest-projects-two-row');
get_footer(); ?>
