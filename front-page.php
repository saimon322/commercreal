<?php /* Главная */
get_header();
$options = get_field('contacts', 'options');
?>

<?php get_template_part('template-parts/sections/section', 'home-banner'); ?>
<?php get_template_part('template-parts/sections/section', 'home-studio'); ?>

<section class="speciallization_area">
    <div class="container">
        <h2 class="s_title">Услуги</h2>
        <div class="specs">
            <div class="row m0 text-center specs-header">
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?= get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <div class="h4">DEVELOPER</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?= get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <div class="h4">СОБСТВЕННИК</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 spec_wrapper">
                    <div class="spec_item">
                        <a href="<?= get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <div class="h4">RETAILER</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-left specs-content">
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?= get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <div class="h4">DEVELOPER</div>
                        </a>
                        <p>Вы занимаетесь созданием новых объектов недвижимости и вам требуется решить ряд коммерческих задач. Сотрудничество лучший способ создать максимально эффективный проект.</p>
                        <a class="view_btn" href="/proekty/">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?= get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <div class="h4">СОБСТВЕННИК</div>
                        </a>
                        <p>Вы строите торговые центры или владеете коммерческой недвижимостью и ваша цель достичь максимальных экономических результатов мы с удовольствием сделаем это за вас.</p>
                        <a class="view_btn" href="/proekty/">Последние проекты</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?= get_term_link(14); ?>" class="spec_item__top">
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
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/stages-eye.svg" alt="">
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
                            if (have_rows('stage_2')): while (have_rows('stage_2')): the_row();
                                if (have_rows('substages')): while (have_rows('substages')): the_row(); ?>
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
                        if ($images): ?>
                            <div class="stage-slider">
                                <?php foreach ($images as $image): ?>
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
