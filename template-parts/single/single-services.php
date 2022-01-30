<?php $services = get_terms('services-cats'); ?>
<!--================Image Banner Area =================-->
<section class="image_banner_area" style="background: url(<?php the_field('baner'); ?>) no-repeat scroll center center;">
    <div class="container">
        <div class="single_banner_text">
            <?php if ($headline = get_field('headline_h1')): ?>
                <h1><?= $headline; ?></h1>
            <?php else: ?>
                <h1><?php the_title(); ?></h1>
            <?php endif; ?>
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
                            <span><?php the_title(); ?></span>
                        </div>

                        
                        <div class="page-form">
                            <div class="page-form__title h4">
                                Закажите обратный звонок
                            </div>
                            <div class="page-form__body">
                                <form class="form-contact" method="POST" >
                                    <div class="form-group w-100">
                                        <input class="form-control"
                                            type="text"
                                            name="name"
                                            placeholder="Как к Вам обращаться?"
                                            required="required">
                                    </div>
                                    <div class="form-group w-100">
                                        <input class="form-control"
                                            type="text"
                                            name="phone"
                                            placeholder="Телефон для связи"
                                            required="required">
                                    </div>
                                    <div class="w-100">
                                        <p>Наш представитель свяжется с вами для консультации</p>
                                    </div>
                                    <div class="text-center w-100 mt-3">
                                        <button class="btn btn" type="submit">Отправить</button>
                                    </div>
                                </form>
                            </div>
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
                <div class="col-lg-3 offset-lg-1 sidebar">
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
                </div>
            </div>
            <?php $post_objects = get_field('related_services');
            if ($post_objects): ?>
                <div class="related_post">
                    <p class="h4"><?php _e('Похожие услуги'); ?></p>
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
                                        <p class="h4"><?php echo get_the_title($post_object->ID); ?></p>
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
