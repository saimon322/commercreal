<?php
$primary_cat = get_post_primary_category();
get_template_part('template-parts/breadcrumb', 'breadcrumb',
    array(
        'title'       => get_the_title(),
        'parent_name' => $primary_cat ? $primary_cat->name : 'Новости',
        'parent_slug' => $primary_cat ? get_term_link($primary_cat->term_id) : '/'
    )
); ?>
<!--================Blog Sidebar Area =================-->
<section class="blog_sidebar_area">
    <div class="container">
        <div class="row row_direction">
            <div class="col-lg-8 offset-lg-1">
                <div class="s_blog_text_inner video_s_blog">
                    <div class="blog_main_text">
                        <h1><?php the_title(); ?></h1>
                        <div class="date">
                            <a href="<?= get_the_permalink(); ?>"><?= get_the_date('n.j.Y'); ?></a>
                            <i class="ion-record"></i>
                            <?php if ($primary_cat): ?>
                                <a class="tag" href="<?= get_term_link($primary_cat->term_id); ?>"><?= $primary_cat->name; ?></a>
                            <?php endif; ?>
                        </div>
                        <img class="blog_main_img" src="<?= get_the_post_thumbnail_url();?>">
                        <?php the_content(); ?>
                    </div>
                    <?php if ($related_news = get_field('related_news')): ?>
                        <div class="related_post">
                            <h4>Похожие новости</h4>
                            <div class="row">
                                <?php foreach ($related_news as $post):
                                    $primary_cat = get_post_primary_category($post); ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="blog_g_item">
                                            <div class="press_img_item">
                                                <a href="<?= get_permalink($post); ?>" class="press_img">
                                                    <?= get_the_post_thumbnail($post); ?>
                                                </a>
                                                <div class="date">
                                                    <a href="#"><?= get_the_date('n.j.Y', $post); ?></a>
                                                    <i class="ion-record"></i>
                                                    <?php if ($primary_cat): ?>
                                                        <a class="tag" href="<?= get_term_link($primary_cat->term_id); ?>"><?= $primary_cat->name; ?></a>
                                                    <?php endif; ?>
                                                </div>
                                                <a href="#"><h4><?= get_the_title($post); ?></h4></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3">
                <?php get_template_part('template-parts/category/category-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<!--================End Blog Sidebar Area =================-->

