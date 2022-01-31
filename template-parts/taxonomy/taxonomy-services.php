<section class="our_projects_area">
    <div class="blog_grid_inner">
        <div class="row blog_inner_fillter">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 news">
                        <div class="blog_g_item">
                            <a href="<?= get_the_permalink(); ?>" class="press_img_item">
                                <div class="press_img">
                                    <?php the_post_thumbnail('project-thumb', ['class' => 'img-fluid']); ?>
                                    <div class="hover"></div>
                                </div>
                                <div class="date">
                                    <span><?php the_field('type'); ?></span>
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</section>