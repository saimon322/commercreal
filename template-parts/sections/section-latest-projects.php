<section class="latest_project">
    <div class="container">
        <div class="l_text">
            <div class="float-md-left">
                <div class="main_title">
                    <h2>Реализованные проекты</h2>
                </div>
            </div>
            <div class="float-md-right">
                <ul class="portfolio_filter map_filter list">
                    <li class="active" data-filter="*">
                        <a href="#">Все</a>
                    </li>
                    <?php $projects_cats = get_terms(['taxonomy' => 'projects_cats', 'hide_empty' => false]);
                    foreach ($projects_cats as $cat): ?>
                        <li data-filter=".<?php echo $cat->slug; ?>">
                            <a href="#"><?php echo $cat->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fillter_slider owl-carousel">
        <?php $query = new WP_Query(array(
            'post_type'      => 'projects',
            'posts_per_page' => -1,
        ));
        if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();
                $terms      = wp_get_post_terms(get_the_ID(), 'projects_cats');
                $cats_slugs = terms_slugs_to_string($terms);
                $cats_names = terms_names_to_string($terms); ?>
                <div class="item <?php echo $cats_slugs; ?>">
                    <a href="<?php echo get_the_permalink(); ?>" class="projects_item">
                        <?php the_post_thumbnail('project-thumb', ['class' => 'img-fluid']); ?>
                        <div class="hover">
                            <i class="ion-android-arrow-forward"></i>
                            <div class="project_text">
                                <?php if ($cats_names): ?>
                                    <h5><?php echo $cats_names; ?></h5>
                                <?php endif; ?>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>