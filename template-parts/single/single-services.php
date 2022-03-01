<?php global $post;
$services = get_terms('services-cats'); ?>
<section class="single-banner">
    <img src="<?php the_field('baner'); ?>" alt="">
    <div class="container">
        <h1 class="single-banner__title">
            <?php if ($headline = get_field('headline_h1')): ?>
                <?= $headline; ?>
            <?php else: ?>
                <?php the_title(); ?>
            <?php endif; ?>
        </h1>
    </div>
</section>
<section class="single_blog_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page_link">
                    <a class="active" href="/">Главная</a>
                    <?php if (isset($services[0])): ?>
                        <a href="<?= get_term_link($services[0]->term_id); ?>"><?= $services[0]->name; ?></a>
                    <?php endif; ?>
                    <span><?php the_title(); ?></span>
                </div>
                <div class="blog_main_text toggle_text">
                    <?php the_content(); ?>
                </div>
                <button class="toggle_btn view_btn">
                    <span>Подробнее</span>
                    <span>Свернуть</span>
                </button>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="l_widget categories_wd">
                        <div class="l_wd_title">
                            <p class="h3"><?php _e('Категории'); ?></p>
                        </div>
                        <ul class="list">
                            <?php foreach ($services as $service): ?>
                                <li>
                                    <a href="<?= get_term_link($service->term_id); ?>"><?= $service->name ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                    <?php if ($broker = get_broker()): ?>
                        <div class="contact-card">
                            <?php if ( ! empty($broker['photo'])): ?>
                                <div class="contact-card__image">
                                    <img src="<?= esc_url($broker['photo']['url']); ?>" alt="<?= esc_attr($broker['photo']['alt']); ?>" class="w-100"/>
                                </div>
                            <?php endif; ?>
                            <div class="contact-card__content">
                                <div class="contact-card__headline">
                                    <?= $broker['headline']; ?>
                                </div>
                                <div class="contact-card__name">
                                    <?= $broker['name']; ?>
                                </div>
                                <div class="contact-card__position">
                                    <?= $broker['position']; ?>
                                </div>
                                <div class="contact-card__contacts">
                                    <a class="contact-card__phone" href="tel: <?= $broker['phone']; ?>"><?= $broker['phone']; ?></a>
                                    <a class="contact-card__email" href="mailto:<?= $broker['email']; ?>"><?= $broker['email']; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="contact-card">
                            <div class="contact-card__image">
                                <img src="/wp-content/uploads/2021/11/foto-mal.-anndrej-.png" class="w-100">
                            </div>
                            <div class="contact-card__content">
                                <div class="contact-card__headline">
                                    По вопросам <span>сопровождения и аренды</span>
                                </div>
                                <div class="contact-card__name">
                                    Андрей Кийатов<br>
                                    Andrey Kiiatov
                                </div>
                                <div class="contact-card__position">
                                    ССO<br>
                                    Коммерческий директор
                                </div>
                                <div class="contact-card__contacts">
                                    <a class="contact-card__phone" href="tel: 89210770330">8-921-077-033-0</a>
                                    <a class="contact-card__email" href="mailto:сommercreal@gmail.com">сommercreal@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_template_part('template-parts/sections/section-service-includes');
get_template_part('template-parts/sections/section', 'stages');

$post = get_post(get_option('page_on_front'), OBJECT);
setup_postdata($post);
get_template_part('template-parts/sections/section', 'home-features');
wp_reset_postdata();

get_template_part('template-parts/sections/section-latest-projects');
get_template_part('template-parts/sections/section', 'form');

$tags = wp_get_post_terms(get_the_ID(), 'services-tags');
if ( ! empty($tags)): ?>
    <div class="tags_area">
        <div class="container">
            <div class="s_blog_tag">
                <?php foreach ($tags as $tag): ?>
                    <a href="<?= get_term_link($tag->term_id); ?>"><?= $tag->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
