<?php /* Template Name: Проекты */
get_header();
?>
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_link">
    <div class="container">
        <a href="#">Главная</a>
        <a class="active" href="#">Проекты</a>
    </div>
</section>
<!--================End Breadcrumb Area =================-->
<!--================About Studio Area =================-->
<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!--================End About Studio Area =================-->
<section class="about_map_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 s_content">
                <?php if ($map_sub_headline = get_field('map_sub_headline')): ?>
                    <h6 class="s_title"><?= $map_sub_headline; ?></h6>
                <?php endif; ?>
                <div class="s_content--text">
                    <?php if ($map_headline = get_field('map_headline')): ?>
                        <h2><?= $map_headline; ?></h2>
                    <?php endif;
                    if ($map_text = get_field('map_text')): ?>
                        <p><?= $map_text; ?></p>
                    <?php endif; ?>
                </div>
                <button class="btn btn mb-4" data-toggle="modal" data-target="#modal-form">НАПИШИТЕ НАМ</button>
                <button class="btn btn" data-toggle="modal" data-target="#modal-form">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>
            <div class="col-12 col-md-8">
                <?php the_field('map_svg'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_template_part('template-parts/sections/section', 'our-projects');
get_template_part('template-parts/sections/section', 'form-1');
get_footer();
?>
