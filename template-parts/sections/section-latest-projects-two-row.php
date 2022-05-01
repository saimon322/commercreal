<section class="latest_project">
    <div class="container">
        <div class="l_text">
            <div class="float-md-left">
                <div class="main_title">
                    <h2 class="s_title">Реализованные <span>проекты</span></h2>
                </div>
            </div>
            <div class="float-md-right">
                <ul class="portfolio_filter map_filter list">
                    <li class="active" data-filter="*"><a class="btn" href="#">Все</a></li>
                    <li data-filter=".realizovannye-proekty"><a class="btn" href="#">Реализованные</a></li>
                    <li data-filter=".arenda"><a class="btn" href="#">Аренда</a></li>
                </ul>
            </div>
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
                    echo ($count % 2) == 0 && $count != 0 ? '</div><div class="items">' : '';
                    ?>
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
                    <?php $count++;
                endwhile; ?>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
    <div class="container">
        <a class="view_btn" href="/proekty/">Подробнее</a>
        <div class="pattern">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
        </div>
    </div>
</section>