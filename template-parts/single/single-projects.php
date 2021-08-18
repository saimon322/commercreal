<?php $terms = wp_get_post_terms(get_the_ID(), 'projects_cats'); ?>
<!--================Project Details Area =================-->
<section class="project_breadcrumb_area" style="background: url(<?php the_field('baner'); ?>) no-repeat scroll center center;">
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
            <a href="<?php echo get_the_permalink(23); ?>"><i class="ion-grid"></i> К проектам</a>
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
                                case 'broker': ?>
                                    <h5>Брокер: <?php the_sub_field('broker_name'); ?></h5>
                                    <?php if ($phone = get_sub_field('phone')): ?>
                                        <a href="tel: <?php echo $phone; ?>"><?php echo $phone; ?></a>
                                    <?php endif; ?>
                                    <?php if ($email = get_sub_field('email')): ?>
                                        <a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a>
                                    <?php endif;
                                    break;
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
            <div class="prev_next_area__cover" style="background: url(<?php echo $prevthumbnail; ?>) scroll center center;"></div>
            <a href="<?php echo $prev_url; ?>">Предыдущий проект</a>
        </div>
    <?php endif;
    $nextPost = get_next_post();
    if ($nextPost) : ?>
        <?php $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID, 'full');
        $next_url            = get_permalink($nextPost->ID); ?>
        <div class="next">
            <div class="prev_next_area__cover" style="background: url(<?php echo $nextthumbnail; ?>) scroll center center;"></div>
            <a href="<?php echo $next_url; ?>">Следующий проект</a>
        </div>
    <?php endif; ?>
</section>
<!--================End Prev Next Area =================-->