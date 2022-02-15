<section class="latest_project">
    <div class="container">
        <div class="l_text">
            <div class="main_title">
                <h2 class="s_title">Реализованные <span>проекты</span></h2>
            </div>
            <ul class="portfolio_filter map_filter list">
                <li class="active" data-filter="*"><a class="btn" href="#">Все</a></li>
                <li data-filter=".realizovannye-proekty"><a class="btn" href="#">Реализованные</a></li>
                <li data-filter=".arenda"><a class="btn" href="#">Аренда</a></li>
            </ul>
        </div>
    </div>
    <div class="filter_slider owl-carousel">
        <?php $query = new WP_Query(array(
            'post_type'      => 'projects',
            'posts_per_page' => -1,
        ));
        $count       = 0;
        if ($query->have_posts()) : ?>
            <div class="items">
                <?php while ($query->have_posts()) : $query->the_post();
                    $terms      = wp_get_post_terms(get_the_ID(), 'projects_cats');
                    $cats_slugs = terms_slugs_to_string($terms);
                    $cats_names = terms_names_to_string($terms);
                    echo ($count % 2) == 0 && $count != 0 ? '</div><div class="items">' : ''; ?>
                    <div class="item <?= $cats_slugs; ?>">
                        <a href="<?= get_the_permalink(); ?>" class="projects_item">
                            <?php the_post_thumbnail('project-thumb', ['class' => 'img-fluid']); ?>
                            <div class="hover">
                                <i class="ion-android-arrow-forward"></i>
                                <div class="project_text">
                                    <?php if ($cats_names): ?>
                                        <p class="h5"><?= $cats_names; ?></p>
                                    <?php endif; ?>
                                    <p class="h4"><?php the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php if ($query->current_post + 1 == $query->post_count && ($count % 2) == 0): ?>
                        <div class="item <?= $cats_slugs; ?>">
                            <a href="<?= get_the_permalink(); ?>" class="projects_item">
                                <?php the_post_thumbnail('project-thumb', ['class' => 'img-fluid']); ?>
                                <div class="hover">
                                    <i class="ion-android-arrow-forward"></i>
                                    <div class="project_text">
                                        <?php if ($cats_names): ?>
                                            <p class="h5"><?= $cats_names; ?></p>
                                        <?php endif; ?>
                                        <p class="h4"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <? endif;
                    $count++;
                endwhile; ?>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
    <div class="container">
        <a class="view_btn" href="/proekty/">Подробнее</a>
    </div>
</section>