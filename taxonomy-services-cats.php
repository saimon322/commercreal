<?php
get_header();
$current_term = get_queried_object();
?>
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_link">
        <div class="container">
            <a href="/">Главная</a>
            <a class="active" href="/uslugi/">Услуги</a>
            <a class="active" href="#"><?php single_term_title(); ?></a>
        </div>
    </section>
    <!--================End Breadcrumb Area =================-->
    <section class="speciallization_area ab_spec services_block">
        <div class="container">
            <div class="row text-center">
                <div class="<?php echo $current_term->term_id == 13 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?>">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <h4>DEVELOPER</h4>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $current_term->term_id == 15 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?>">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <h4>СОБСТВЕННИК</h4>
                        </a>
                    </div>
                </div>
                <div class="<?php echo $current_term->term_id == 14 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?>">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <h4>RETAILER</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row services-content">
                <div class="col-12 col-md-8">
                    <?php echo term_description(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Our Projects Area =================-->
    <section class="our_projects_area">
        <div class="blog_grid_inner">
            <div class="row blog_inner_fillter">
                <?php $query = new WP_Query(array(
                    'post_type'      => 'services',
                    'posts_per_page' => -1,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'services-cats',
                            'field'    => 'slug',
                            'terms'    => $current_term->slug // Pass this to slug
                        ),
                    ),
                ));
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 news">
                            <div class="blog_g_item">
                                <a href="<?php echo get_the_permalink(); ?>" class="press_img_item">
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
    <!--================End Our Projects Area =================-->
<?php get_template_part('template-parts/sections/section', 'form-1'); ?>
<?php get_footer(); ?>