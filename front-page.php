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
<?php get_template_part('template-parts/sections/section', 'clients'); ?>
<?php get_template_part('template-parts/sections/section', 'telegram'); ?>
<?php get_template_part('template-parts/sections/section', 'blog'); ?>

<?php get_footer(); ?>
