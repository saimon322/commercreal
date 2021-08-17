<?php
get_header();
$wp_query->set('posts_per_page', 1);
get_template_part('template-parts/breadcrumb', 'breadcrumb',
    array(
        'title'       => single_term_title('', false),
        'parent_name' => 'Новости',
        'parent_slug' => '/'
    )
);
get_template_part('template-parts/category/category');
get_footer();