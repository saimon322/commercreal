<?php /* Template Name: Услуги */
get_header();
?>

<section class="breadcrumb_link">
    <div class="container">
        <a href="/">Главная</a>
        <a class="active" href="#">Услуги</a>
    </div>
</section>

<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?= the_content(); ?>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/sections/section', 'all-services');
get_template_part('template-parts/sections/section', 'office-in');
get_template_part('template-parts/sections/section', 'our-projects');
get_footer(); ?>
