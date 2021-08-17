<?php $services = get_terms('services-cats'); ?>
<!--================Image Banner Area =================-->
<section class="image_banner_area" style="background: url(<?php the_field('baner'); ?>) no-repeat scroll center center;">
    <div class="container">
        <div class="single_banner_text">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<!--================End Image Banner Area =================-->
<!--================Blog Single Area =================-->
<section class="single_blog_content">
    <div class="container">
        <div class="s_blog_text_inner">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_main_text">
                        <div class="page_link">
                            <a class="active" href="/">Главная</a>
                            <?php if (isset($services[0])): ?>
                                <a href="<?php echo get_term_link($services[0]->term_id); ?>"><?php echo $services[0]->name; ?></a>
                            <?php endif; ?>
                            <a href="#"><?php the_title(); ?></a>
                        </div>
                        <?php the_content(); ?>
                        <?php $tags = wp_get_post_terms(get_the_ID(), 'services-tags');
                        if ( ! empty($tags)): ?>
                            <div class="s_blog_tag">
                                <?php foreach ($tags as $tag): ?>
                                    <a href="<?= get_term_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <aside class="l_widget categories_wd">
                        <div class="l_wd_title">
                            <h3><?php _e('Категории'); ?></h3>
                        </div>
                        <ul class="list">
                            <?php foreach ($services as $service): ?>
                                <li>
                                    <a href="<?= get_term_link($service->term_id); ?>"><?= $service->name ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                    <aside class="row services-contacts">
                        <div class="col-5">
                            <div class="services-contacts__image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-1.jpg" class="w-100">
                                <div class="hover"></div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="services-contacts__headline">
                                По вопросам <span>сопровождения и аренды</span>
                            </div>
                            <div class="services-contacts__name">
                                <span>Андрей Кийатов</span>
                                <span>Andrey Kiiatov</span>
                            </div>
                            <div class="services-contacts__position">
                                ССO <br>
                                Коммерческий директор
                            </div>
                            <div class="services-contacts__contacts">
                                <a class="tel" href="tel: 89210770330">8-921-077-033-0</a>
                                <a class="mail" href="mailto: СOMMERCREAL@GMAIL.COM">СOMMERCREAL@GMAIL.COM</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <?php $post_objects = get_field('related_services');
            if ($post_objects): ?>
                <div class="related_post">
                    <h4><?php _e('Похожие услуги'); ?></h4>
                    <div class="row">
                        <?php foreach ($post_objects as $post_object): ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="blog_g_item">
                                    <a href="<?php echo get_permalink($post_object->ID); ?>" class="press_img_item">
                                        <div class="press_img">
                                            <?php echo get_the_post_thumbnail($post_object->ID, 'project-thumb', ['class' => 'img-fluid']); ?>
                                            <div class="hover"></div>
                                        </div>
                                        <div class="date">
                                            <span><?php the_field('type', $post_object->ID); ?></span>
                                        </div>
                                        <h4><?php echo get_the_title($post_object->ID); ?></h4>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--================End Blog Single Area =================-->
<?php get_template_part('template-parts/sections/section', 'office-in'); ?>
