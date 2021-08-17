<?php get_template_part('template-parts/breadcrumb', 'breadcrumb',
    array(
        'title'       => get_the_title(),
        'parent_name' => 'Новости',
        'parent_slug' => '/'
    )
); ?>
<!--================Blog Single Area =================-->
<section class="single_blog_content">
    <div class="container">
        <div class="s_blog_text_inner box_layout">
            <div class="blog_main_text">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!--================End Blog Single Area =================-->