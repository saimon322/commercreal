<?php $services = get_terms('services-cats'); ?>

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
                <div class="blog_main_text">
                    <div class="page_link">
                        <a class="active" href="/">Главная</a>
                        <?php if (isset($services[0])): ?>
                            <a href="<?= get_term_link($services[0]->term_id); ?>"><?= $services[0]->name; ?></a>
                        <?php endif; ?>
                        <span><?php the_title(); ?></span>
                    </div>
                    <div class="page-form">
                        <div class="page-form__title h4">
                            Закажите обратный звонок
                        </div>
                        <div class="page-form__body">
                            <form class="form-contact" method="POST">
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
                                    <button class="btn" type="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php the_content(); ?>
                    <?php $tags = wp_get_post_terms(get_the_ID(), 'services-tags');
                    if ( ! empty($tags)): ?>
                        <div class="s_blog_tag">
                            <?php foreach ($tags as $tag): ?>
                                <a href="<?= get_term_link($tag->term_id); ?>"><?= $tag->name; ?></a>
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
    </div>
</section>

<?php get_template_part('template-parts/sections/section', 'stages'); ?>
<?php get_template_part('template-parts/sections/section', 'home-features'); ?>
<?php get_template_part('template-parts/sections/section', 'latest-projects'); ?>
<?php get_template_part('template-parts/sections/section', 'form'); ?>
