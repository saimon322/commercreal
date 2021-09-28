<?php /* Главная */
get_header();
$options = get_field('contacts', 'options');
?>

<section class="home_slider">
    <?php if (have_rows('main_slider')): ?>
        <div class="page_lines">
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
        <?php $count = count(get_field('main_slider')); ?>
        <?php $counter = 1; ?>
        <div id="home_full_slider" class="rev_slider fullscreenbanner" data-version="5.3.1.6">
            <ul>
                <?php while (have_rows('main_slider')): the_row(); ?>
                    <li data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="1000" data-fsmasterspeed="1000">
                        <?php if (get_sub_field('media') == 'img'): ?>
                            <img class="rev-slidebg"
                                 src="<?php echo get_sub_field('img'); ?>"
                                 alt=""
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 data-no-retina>
                        <?php endif; ?>
                        <?php if (get_sub_field('media') == 'video'): ?>
                            <img class="rev-slidebg"
                                 src="<?php echo get_sub_field('video_poster'); ?>"
                                 alt=""
                                 data-bgposition="center center"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 data-bgparallax="10"
                                 data-no-retina>
                            <div class="rs-background-video-layer"
                                 data-forcerewind="on"
                                 data-volume="mute"
                                 data-videowidth="100%"
                                 data-videoheight="100%"
                                 data-videomp4="<?php echo get_sub_field('video'); ?>"
                                 data-videopreload="auto"
                                 data-videorate="1"
                                 data-forceCover="1"
                                 data-aspectratio="16:9"
                                 data-autoplay="on"
                                 data-autoplayonlyfirsttime="false"
                                 data-videocontrols="none"
                                 data-videoloop="loopandnoslidestop">
                            </div>
                        <?php endif; ?>
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme count"
                                 data-x="['left']" data-hoffset="['0','0','15','15','15']"
                                 data-y="['top']" data-voffset="['355','330','200','200','150']"
                                 data-textAlign="['left']"
                                 data-fontsize="['60', '60','60','60']"
                                 data-lineheight="['60','60', '60','60']"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[155%];x:0;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power2.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 data-elementdelay="0.05">
                                <?php echo $counter . '/' . $count ?>
                            </div>
                            <?php if (get_sub_field('title')): ?>
                                <div class="tp-caption tp-resizeme text_1"
                                     data-x="['left']" data-hoffset="['-5','0','15','15','15']"
                                     data-y="['bottom']" data-voffset="['10','0','0','0','0']"
                                     data-textAlign="['left']"
                                     data-fontsize="['100', '100','70','70','50']"
                                     data-lineheight="['100','100', '70','70','50']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[155%];x:0;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power2.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05">
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('subtitle')): ?>
                                <div class="tp-caption tp-resizeme text_3"
                                     data-x="['left']" data-hoffset="['0','0','15','15','15']"
                                     data-y="['bottom']" data-voffset="['240','340','240','240','170']"
                                     data-textAlign="['left']"
                                     data-fontsize="['18, 18, 20,22']"
                                     data-lineheight="['32','32', '32','32']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="chars"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05">
                                    <?php echo get_sub_field('subtitle'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme text_2"
                                 data-x="['left']" data-hoffset="['0','0','15','15','15']"
                                 data-y="['top','top','top','top']" data-voffset="['325','230','160','160','110']"
                                 data-width="86"
                                 data-height="6"
                                 data-whitespace="nowrap"
                                 data-type="shape"
                                 data-responsive_offset="on"
                                 data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                 data-textAlign="['left','left','left','left']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                                 style="background-color:#f1d299;">
                            </div>
                        </div>
                    </li>
                    <?php $counter++; ?>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php $options = get_field('contacts', 'options'); ?>
    <?php if ($options['socials']): ?>
        <div class="socials">
            <ul class="list">
            <?php foreach ($options['socials'] as $social): ?>
                <li>
                    <a href="<?php echo esc_url($social['link']); ?>" target="_blank" rel="noopener noreferrer">
                        <i class="ion-social-<?php echo strtolower($social['type']); ?>"></i>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="contacts">
        <a href="mailto:<?php echo $options['email']; ?>">
            <?php echo $options['email']; ?>
        </a>
    </div>
</section>

<section class="intes_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern', null, array(
            'type' => ' pattern--vertical'
        )); ?>
        <div class="since_text">
            <h5><?php the_field('about_desc'); ?></h5>
        </div>
        <div class="row">
            <?php $img = get_field('about_img');
            if ($img): ?>
                <div class="col-lg-7">
                    <div class="studio_img_wrapper">
                        <div class="studio_img">
                            <img src="<?php echo $img; ?>" alt="">
                            <?php $years = get_field('about_years');
                            if ($years): ?>
                                <div class="years_text">
                                    <div class="years_text_inner">
                                        <h1 data-aos="fade-up" data-aos-delay="200"><?php echo $years['about_year_1']; ?></h1>
                                        <h2 data-aos="fade-up" data-aos-delay="300"><?php echo $years['about_year_2']; ?></h2>
                                        <h4 data-aos="fade-up" data-aos-delay="400"><?php echo $years['about_year_3']; ?></h4>
                                    </div>
                                    <?php get_template_part('template-parts/animation/diamond', null, array()); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-5">
                <div class="studio_text">
                    <h6 class="s_title"><?php the_field('about_subtitle'); ?></h6>
                    <h3><?php the_field('about_title'); ?></h3>
                    <h5><?php the_field('about_caption'); ?></h5>
                    <div class="studio_text__text">
                        <?php the_field('about_text'); ?>
                    </div>
                    <?php $link = get_field('about_link');
                    if ($link): ?>
                        <a class="br_btn"
                           href="<?php echo esc_url($link['url']); ?>"
                           target="<?php echo $link['target'] ? $link['target'] : '_self' ?>"
                        ><?php echo esc_html($link['title']); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="speciallization_area">
    <div class="container">
        <h6 class="s_title">Услуги</h6>
        <div class="specs">
            <div class="row m0 text-center specs-header">
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <h4>DEVELOPER</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <h4>СОБСТВЕННИК</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <h4>RETAILER</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-left specs-content">
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <h4>DEVELOPER</h4>
                        </a>
                        <p>Вы занимаетесь созданием новых объектов недвижимости и вам требуется решить ряд коммерческих задач. Сотрудничество лучший способ создать максимально эффективный проект.</p>
                        <a class="view_btn" href="<?php echo get_term_link(13); ?>">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <h4>СОБСТВЕННИК</h4>
                        </a>
                        <p>Вы строите торговые центры или владеете коммерческой недвижимостью и ваша цель достичь максимальных экономических результатов мы с удовольствием сделаем это за вас.</p>
                        <a class="view_btn" href="<?php echo get_term_link(15); ?>">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <h4>RETAILER</h4>
                        </a>
                        <p>Вы имеете собственный бизнес или развиваете сетевую ритейл-компанию, и выходе в конкретный город или регион, ищите подходящие именно вам варианты помещений.</p>
                        <a class="view_btn" href="<?php echo get_term_link(14); ?>">Последние проекты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stages_area">
    <div class="container">
        <h6 class="s_title"><?php the_field('stages_subtitle'); ?></h6>
        <div class="row">
            <div class="col-sm-4">
                <!-- Loupe stage -->
                <?php $stage1 = get_field('stage_1'); ?>
                <div class="stage">
                    <div class="stage__main">
                        <div class="stage-loupe">
                            <div class="stage-loupe__bg">
                                <img src="<?= $stage1['img']; ?>" alt="">
                            </div>
                            <div class="stage-loupe__el">
                                <div class="stage-loupe__icon">
                                    <img src="<?= get_template_directory_uri(); ?>/img/icon/stages-loupe.png" alt="">
                                </div>

                                <div class="stage-loupe__img">
                                    <img src="<?= $stage1['img_color']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stage__content">
                        <h2 class="stage__title">
                            <?= $stage1['title']; ?>
                        </h2>
                        <div class="stage__text">
                            <?= $stage1['text']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <!-- Minies stage -->
                <?php $stage2 = get_field('stage_2'); ?>
                <div class="stage">
                    <div class="stage__main">
                        <div class="stage-minies">
                            <?php 
                            if( have_rows('stage_2') ): while( have_rows('stage_2') ): the_row(); 
                                if( have_rows('substages') ):  while( have_rows('substages') ): the_row(); ?>
                                    <?php $is_white = get_sub_field('is_white') ? ' stage-mini--white' : ''; ?>
                                    <div class="stage-mini<?= $is_white; ?>">
                                        <img src="<?= get_sub_field('img'); ?>" alt="">
                                        <h3><?= get_sub_field('title'); ?></h3>
                                    </div>
                                <?php endwhile; endif;
                            endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="stage__content">
                        <h2 class="stage__title">
                            <?= $stage2['title']; ?>
                        </h2>
                        <div class="stage__text">
                            <?= $stage2['text']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <!-- Slider stage -->
                <?php $stage3 = get_field('stage_3'); ?>
                <div class="stage">
                    <div class="stage__main">
                        <div class="stage-slider owl-carousel">
                            <div class="stage-slider__item">
                                <img src="<?= get_template_directory_uri(); ?>/img/stages/stage-2.jpg" alt="">
                            </div>
                            <div class="stage-slider__item">
                                <img src="<?= get_template_directory_uri(); ?>/img/stages/stage-3.jpg" alt="">
                            </div>
                            <div class="stage-slider__item">
                                <img src="<?= get_template_directory_uri(); ?>/img/stages/stage-4.jpg" alt="">
                            </div>
                            <div class="stage-slider__item">
                                <img src="<?= get_template_directory_uri(); ?>/img/stages/stage-5.jpg" alt="">
                            </div>
                            <div class="stage-slider__item">
                                <img src="<?= get_template_directory_uri(); ?>/img/stages/stage-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="stage__icon stage__icon--right">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/stages-corner.svg" alt="">
                        </div>
                    </div>
                    <div class="stage__content">
                        <h2 class="stage__title">
                            <?= $stage3['title']; ?>
                        </h2>
                        <div class="stage__text">
                            <?= $stage3['text']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/sections/section', 'clients'); ?>
<?php get_template_part('template-parts/sections/section', 'latest-projects'); ?>
<?php get_template_part('template-parts/sections/section', 'form-1'); ?>
<?php get_template_part('template-parts/sections/section', 'blog'); ?>
<div class="page_lines">
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
<?php get_footer(); ?>
