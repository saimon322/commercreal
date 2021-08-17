<?php get_header(); ?>
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_link">
        <div class="container">
            <a href="/">Главная</a>
            <a class="active" href="/uslugi/">Услуги</a>
            <a class="active" href="#"><?php single_term_title(); ?></a>
        </div>
    </section>
    <!--================End Breadcrumb Area =================-->
<?php

if (get_query_var('taxonomy') === 'services-cats'):
    get_template_part('template-parts/sections/section', 'taxonomy-services');
endif;

get_template_part('template-parts/taxonomy/taxonomy', 'services');
get_template_part('template-parts/sections/section', 'form-3');

get_footer();