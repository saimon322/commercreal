<?php /* Template Name: Услуги */
get_header();
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
        <h1><?= the_title(); ?></h1>
        <div class="ab_studio_text">
            <?= the_content(); ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/sections/section', 'all-services');
get_template_part('template-parts/sections/section', 'stages');
get_template_part('template-parts/sections/section', 'office');
// get_template_part('template-parts/sections/section', 'our-projects');
get_template_part('template-parts/sections/section', 'latest-projects');
get_footer(); ?>
