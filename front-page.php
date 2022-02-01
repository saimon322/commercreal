<?php /* Главная */
get_header();
$options = get_field('contacts', 'options');
?>

<?php get_template_part('template-parts/sections/section', 'home-banner'); ?>
<?php get_template_part('template-parts/sections/section', 'home-studio'); ?>
<?php get_template_part('template-parts/sections/section', 'specs'); ?>
<?php get_template_part('template-parts/sections/section', 'home-features'); ?>
<?php get_template_part('template-parts/sections/section', 'latest-projects'); ?>
<?php get_template_part('template-parts/sections/section', 'stages'); ?>
<?php get_template_part('template-parts/sections/section', 'form'); ?>
<?php get_template_part('template-parts/sections/section', 'blog'); ?>

<div class="page_lines">
    <div class="container">
        <div class="row m0">
            <div class="col-lg-4">
                <div class="line"></div>
            </div>
            <div class="col-lg-4">
                <div class="line"></div>
            </div>
            <div class="col-lg-4">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
