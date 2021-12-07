<?php /* Template Name: Услуги */
get_header();
?>
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_link">
    <div class="container">
        <a href="/">Главная</a>
        <span>Услуги</span>
    </div>
</section>
<!--================End Breadcrumb Area =================-->
<!--================About Studio Area =================-->
<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?= the_content(); ?>
        </div>
    </div>
</section>
<!--================End About Studio Area =================-->
<?php
get_template_part('template-parts/sections/section', 'all-services');
get_template_part('template-parts/sections/section', 'office-in');
get_template_part('template-parts/sections/section', 'our-projects');
get_footer(); ?>
