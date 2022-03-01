<?php
$terms = wp_get_post_terms(get_the_ID(), 'projects_cats');
wp_enqueue_script('pannellum-js');
wp_enqueue_style('pannellum-css');
?>
<section class="project-banner" style="background-image: url(<?php the_field('baner'); ?>);">
    <div class="container">
        <div class="breadcrumb_inner">
            <div class="breadcrumb_link">
                <a href="/">Главная</a>
                <a class="active" href="/proekty/">Проекты</a>
                <span><?= get_field('baner_headline') ?></span>
            </div>
            <div class="bread_bottom_text">
                <h1><?= get_field('baner_headline') ?></h1>
            </div>
        </div>
    </div>
    <div class="page_lines white_br">
        <div class="container">
            <div class="row m0">
                <div class="col-lg-4">
                    <div class="line"></div>
                </div>
                <div class="col-lg-4">
                    <div class="line"></div>
                </div>
                <div class="col-lg-4">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project_details_area">
    <div class="container">
        <div class="back_btn">
            <i class="ion-grid"></i> Об объекте
        </div>
        <div class="row">
            <?php if (have_rows('characteristics')):
                $counter = 0;
                $break_num = ceil(count(get_field('characteristics')) / 3);
                $break = $break_num;
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="pd_item">
                        <?php while (have_rows('characteristics')) : the_row();
                            if ($counter == $break) {
                                echo '</div></div><div class="col-lg-4 col-sm-6"><div class="pd_item">';
                                $break = $break + $break_num;
                            }
                            switch (get_row_layout()):
                                case 'characteristic': ?>
                                    <p class="h5"><?php the_sub_field('name'); ?>: <span><?php the_sub_field('text'); ?></span></p>
                                    <?php break;
                                case 'file': ?>
                                    <p class="h5"><?php the_sub_field('name'); ?>:
                                        <a href="<?php the_sub_field('file'); ?>" download>Скачать</a>
                                    </p>
                                    <?php break;
                                case 'broker': ?>
                                    <p class="h5">Брокер проекта: <span><?php the_sub_field('broker_name'); ?></span></p>
                                    <p class="h5">Тел: <span><a href="tel: <?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></span></p>
                                    <p class="h5">Email: <span><a href="mailto: <?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></span></p>
                                    <?php break;
                            endswitch;
                            $counter++;
                        endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="project_villa_area">
    <div class="container">
        <div class="villa_text">
            <h2><?php the_title(); ?></h2>
            <?php the_field('content'); ?>
        </div>
        <?php if (have_rows('after_content')):
            $index = 0;
            while (have_rows('after_content')) : the_row();
                switch (get_row_layout()):
                    case 'video':
                        get_template_part('template-parts/blocks/video', null, array(
                            'video' => get_sub_field('media'),
                        ));
                        break;
                    case 'iframe':
                        get_template_part('template-parts/blocks/iframe', null, array(
                            'headline' => get_sub_field('headline'),
                            'html'     => get_sub_field('html')
                        ));
                        break;
                    case '360-pano':
                        get_template_part('template-parts/blocks/360-panorama', null, array(
                            'headline' => get_sub_field('headline'),
                            'img'      => get_sub_field('img'),
                            'index'    => $index,
                        ));
                        break;
                    case 'slider':
                        get_template_part('template-parts/blocks/slider', null, array(
                            'images' => get_sub_field('images')
                        ));
                        break;
                endswitch;
                $index++;
            endwhile;
        endif; ?>
        <div class="acf-block">
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
</section>
<section class="prev_next_area">
    <?php $prevPost = get_previous_post();
    $prevPost       = empty($prevPost) ? get_random_post_from_cpt('projects') : $prevPost;
    if ($prevPost): ?>
        <?php $prevthumbnail = get_the_post_thumbnail_url($prevPost->ID, 'full');
        $prev_url            = get_permalink($prevPost->ID); ?>
        <a href="<?= $prev_url; ?>" class="prev">
            <div class="prev-hover">
                <div class="prev_next_area__cover" style="background: url(<?= $prevthumbnail; ?>) scroll center center;"></div>
            </div>
            <span>Предыдущий проект</span>
        </a>
    <?php endif;
    $nextPost = get_next_post();
    $nextPost = empty($nextPost) ? get_random_post_from_cpt('projects') : $nextPost;
    if ($nextPost) : ?>
        <?php $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID, 'full');
        $next_url            = get_permalink($nextPost->ID); ?>
        <a href="<?= $next_url; ?>" class="next">
            <div class="next-hover">
                <div class="prev_next_area__cover" style="background: url(<?= $nextthumbnail; ?>) scroll center center;"></div>
            </div>
            <span>Следующий проект</span>
        </a>
    <?php endif; ?>
</section>
