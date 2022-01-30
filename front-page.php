<?php /* Главная */
get_header();
$options = get_field('contacts', 'options');
?>



<h1 class="visually-hidden">
    Commerc Real – Комплексное управление коммерческой недвижимостью
</h1>

<section class="home_slider">
    
</section>

<section class="intes_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern', null, array(
            'type' => ' pattern--vertical'
        )); ?>
        <div class="since_text">
            <p class="h5"><?php the_field('about_desc'); ?></p>
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
                                        <p data-aos="fade-up" data-aos-delay="200" class="h1"><?php echo $years['about_year_1']; ?></h1>
                                        <p data-aos="fade-up" data-aos-delay="300" class="h2"><?php echo $years['about_year_2']; ?></h2>
                                        <p data-aos="fade-up" data-aos-delay="400" class="h4"><?php echo $years['about_year_3']; ?></p>
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
                    <h2 class="s_title">
                        <?php the_field('about_subtitle'); ?>
                    </h2>
                    <div class="main_title">
                        <p class="h2"><?php the_field('about_title'); ?></h2>
                    </div>
                    <p class="h5"><?php the_field('about_caption'); ?></p>
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
        <h2 class="s_title">Услуги</h2>
        <div class="specs">
            <div class="row m0 text-center specs-header">
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <div class="h4">DEVELOPER</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <div class="h4">СОБСТВЕННИК</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <div class="h4">RETAILER</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-left specs-content">
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <div class="h4">DEVELOPER</div>
                        </a>
                        <p>Вы занимаетесь созданием новых объектов недвижимости и вам требуется решить ряд коммерческих задач. Сотрудничество лучший способ создать максимально эффективный проект.</p>
                        <a class="view_btn" href="/proekty/">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <div class="h4">СОБСТВЕННИК</div>
                        </a>
                        <p>Вы строите торговые центры или владеете коммерческой недвижимостью и ваша цель достичь максимальных экономических результатов мы с удовольствием сделаем это за вас.</p>
                        <a class="view_btn" href="/proekty/">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <div class="h4">RETAILER</div>
                        </a>
                        <p>Вы имеете собственный бизнес или развиваете сетевую ритейл-компанию, и выходе в конкретный город или регион, ищите подходящие именно вам варианты помещений.</p>
                        <a class="view_btn" href="/proekty/">Последние проекты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stages_area">
    <div class="container">
        <h2 class="s_title"><?php the_field('stages_subtitle'); ?></h2>
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
                        <div class="stage__icon stage__icon--left">
                            <img src="<?=get_template_directory_uri();?>/img/icon/stages-eye.svg" alt="">
                        </div>
                    </div>
                    <div class="stage__content">
                        <p class="h2 stage__title">
                            <?= $stage1['title']; ?>
                        </p>
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
                                    <a href="<?= get_sub_field('link'); ?>" class="stage-mini<?= $is_white; ?>">
                                        <img src="<?= get_sub_field('img'); ?>" alt="">
                                        <p class="h3"><?= get_sub_field('title'); ?></p>
                                    </a>
                                <?php endwhile; endif;
                            endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="stage__content">
                        <p class="h2 stage__title">
                            <?= $stage2['title']; ?>
                        </p>
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
                        <?php $images = $stage3['images'];
                        if( $images ): ?>
                            <div class="stage-slider">
                                <?php foreach( $images as $image ): ?>
                                    <div class="stage-slider__item">
                                        <img src="<?= $image ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="stage__icon stage__icon--right">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/stages-corner.svg" alt="">
                        </div>
                    </div>
                    <div class="stage__content">
                        <p class="h2 stage__title">
                            <?= $stage3['title']; ?>
                        </p>
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
