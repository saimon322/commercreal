<!--================End Header Menu Area =================-->
<div class="blog-banner">
    <div class="blog-banner__img">
        <img src="<?= get_template_directory_uri(); ?>/img/blog/blog-banner.jpg" alt="">
    </div>
</div>
<!--================Blog Sidebar Area =================-->
<section class="blog_sidebar_area">
    <div class="container">
        <div class="row row_direction">
            <div class="col-lg-8 offset-lg-1">
                <div class="blog_side_inner">
                    <?php if (have_posts()) :
                        while (have_posts()) : the_post();
                            $primary_cat = get_post_primary_category(); ?>
                            <div class="blog_side_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <a href="<?php echo get_the_permalink(); ?>" class="blog_side_item_img">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <?php if ($primary_cat): ?>
                                            <a class="tag" href="<?= get_term_link($primary_cat->term_id); ?>"><?= $primary_cat->name; ?></a>
                                        <?php endif; ?>
                                        <a href="<?php echo get_the_permalink(); ?>"><p class="h4"><?php the_title(); ?></p></a>
                                        <a class="time" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_date('n.j.Y'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
                <?php the_posts_pagination(); ?>
            </div>
            <div class="col-lg-3">
                <?php get_template_part('template-parts/category/category-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<!--================End Blog Sidebar Area =================-->