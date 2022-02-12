<section class="our_projects_area">
    <div class="filter_slider owl-carousel">      
        <?php if (have_posts()) :
            $count = 0; ?>
            <div class="items">
                <?php while (have_posts()) : the_post();
                    echo ($count % 2) == 0 && $count != 0 ? '</div><div class="items">' : ''; ?>
                    <div class="item">
                        <a href="<?= get_the_permalink(); ?>" class="projects_item">
                            <?php the_post_thumbnail('project-thumb', ['class' => 'img-fluid']); ?>
                            <div class="hover">
                                <i class="ion-android-arrow-forward"></i>
                                <div class="project_text">
                                    <p class="h4"><?php the_title(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $count++;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="container">
        <a class="view_btn" href="/uslugi/">Подробнее</a>
    </div>
</section>