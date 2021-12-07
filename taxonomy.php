<?php get_header(); ?>

<section class="breadcrumb_link">
    <div class="container">
        <a href="/">Главная</a>
        <a class="active" href="/uslugi/">Услуги</a>
        <span><?php single_term_title(); ?></span>
    </div>
</section>

<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?= term_description(); ?>
        </div>
    </div>
</section>

<?php
if (get_query_var('taxonomy') === 'services-cats'):
    get_template_part('template-parts/sections/section', 'taxonomy-services');
endif;
get_template_part('template-parts/taxonomy/taxonomy', 'services');
get_template_part('template-parts/sections/section', 'form-3');
get_footer(); ?>