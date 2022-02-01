<!--================Our Speciallization Area =================-->
<section class="speciallization_area ab_spec all_services">
    <div class="container">
        <h2 class="s_title">Все услуги</h2>
        <?php $services = get_terms('services-cats'); ?>
        <div class="specs">
            <div class="row m0 text-center specs-header">
                <?php $i = 1;
                foreach ($services as $service): ?>     
                    <div class="col-lg-4 col-sm-6 spec_wrapper">
                        <div class="spec_item">
                            <a href="<?= get_term_link($service->term_id); ?>" class="spec_item__top">
                                <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-<?= $i; ?>.svg" alt="">
                                <div class="h4"><?= $service->name ?></div>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
            </div>
            <div class="row text-left specs-content">
                <?php foreach ($services as $service): ?> 
                    <div class="col-lg-4 col-sm-6">
                        <div class="spec_item">
                            <a href="<?= get_term_link($service->term_id); ?>" class="spec_item__top">
                                <img src="<?= get_field('logo', 'services-cats_' . $service->term_id); ?>" alt="">
                                <div class="h4"><?= $service->name; ?></div>
                            </a>
                            <?= term_description(); ?>
                            <ul class="custom-ul">
                                <?php $the_query = new WP_Query(array(
                                    'post_type' => 'services',
                                    'tax_query' => array(
                                        array (
                                            'taxonomy' => 'services-cats',
                                            'field' => 'term_id',
                                            'terms' => $service->term_id,
                                        )
                                    ),
                                ));
                                if ($the_query->have_posts()):
                                    $i = 1;
                                    while ( $the_query->have_posts() ): $the_query->the_post();
                                        if($i < 10): ?>
                                            <li>
                                                <a href="<?= get_the_permalink(); ?>"><?php the_title(); ?></a>
                                            </li>
                                        <?php endif;
                                        $i++;
                                    endwhile;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--================End Our Speciallization Area =================-->