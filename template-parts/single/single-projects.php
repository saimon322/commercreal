<?php $terms = wp_get_post_terms(get_the_ID(), 'projects_cats'); ?>
<!--================Project Details Area =================-->
<section class="project_breadcrumb_area" style="background-image: url(<?php the_field('baner'); ?>);">
    <div class="container">
        <?php get_template_part('template-parts/breadcrumbs/breadcrumb-projects', null,
            array(
                'title'       => get_field('baner_headline'),
                'parent_name' => terms_names_to_string($terms),
                'parent_slug' => '#'
            )
        ); ?>
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
<!--================End Project Details Area =================-->
<!--================End Project Details Area =================-->
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
                                    <h5><?php the_sub_field('name'); ?>: <span><?php the_sub_field('text'); ?></span></h5>
                                    <?php break;
                                case 'file': ?>
                                    <h5><?php the_sub_field('name'); ?>:
                                        <a href="<?php the_sub_field('file'); ?>" download>Скачать</a>
                                    </h5>
                                    <?php break;
                            endswitch;
                            $counter++;
                        endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
            <!--<div class="col-lg-4 col-sm-6">
                <div class="pd_item">
                    <h5>Area: <span>1,560 sqr</span></h5>
                    <h5 class="share_link">Share:
                        <a href="https://twitter.com/intent/tweet?url=<?php /*echo get_permalink(get_the_ID()); */ ?>">Twitter</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php /*echo get_permalink(get_the_ID()); */ ?>">Facebook</a>
                        <a href="https://vk.com/share.php?url=<?php /*echo get_permalink(get_the_ID()); */ ?>">VK</a>
                    </h5>
                </div>
            </div>-->
        </div>
    </div>
</section>
<!--================End Project Details Area =================-->
<!--================Project Villa Area =================-->
<section class="project_villa_area">
    <div class="container">
        <div class="villa_text">
            <h2><?php the_title(); ?></h2>
            <?php the_field('content'); ?>
        </div>
        <?php if (have_rows('after_content')):
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
                            'img' => get_sub_field('img')
                        ));
                        break;
                    case 'slider':
                        get_template_part('template-parts/blocks/slider', null, array(
                            'images' => get_sub_field('images')
                        ));
                        break;
                endswitch;
            endwhile;
        endif; ?>
        <div class="acf-block">
            <div class="contact-card">
                <div class="contact-card__image">
                    <img src="https://commercreal.com/wp-content/themes/commerc-real/img/team/team-1.jpg" class="w-100">
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
</section>
<!--================End Project Villa Area =================-->
<!--================Prev Next Area =================-->
<section class="prev_next_area">
    <?php $prevPost = get_previous_post();
    if ($prevPost): ?>
        <?php $prevthumbnail = get_the_post_thumbnail_url($prevPost->ID, 'full');
        $prev_url            = get_permalink($prevPost->ID); ?>
        <div class="prev">
            <div class="prev-hover">
                <div class="prev_next_area__cover" style="background: url(<?php echo $prevthumbnail; ?>) scroll center center;"></div>
            </div>
            <a href="<?php echo $prev_url; ?>">Предыдущий проект</a>
        </div>
    <?php endif;
    $nextPost = get_next_post();
    if ($nextPost) : ?>
        <?php $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID, 'full');
        $next_url            = get_permalink($nextPost->ID); ?>
        <div class="next">
            <div class="next-hover">
                <div class="prev_next_area__cover" style="background: url(<?php echo $nextthumbnail; ?>) scroll center center;"></div>
            </div>
            <a href="<?php echo $next_url; ?>">Следующий проект</a>
        </div>
    <?php endif; ?>
</section>
<!--================End Prev Next Area =================-->
