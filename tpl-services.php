<?php /* Template Name: Услуги */
get_header();
?>
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_link">
    <div class="container">
        <a href="#">Главная</a>
        <a class="active" href="#">Услуги</a>
    </div>
</section>
<!--================End Breadcrumb Area =================-->
<!--================About Studio Area =================-->
<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="ab_studio_text">
            <p>Мы специализируемся на торговой недвижимости в регионах России и оказываем полный спектр услуг в данном сегменте.</p>
            <p>Мы предлагаем только уникальные и профессиональные решения в секторе коммерческой недвижимости и индивидуальный подход к каждому проекту.</p>
            <p>В своей работе мы всегда опираемся на уже наработанные и доказавшие свою эффективность методики, разработке концепций, брокериджу и архитектурному проектированию и при этом учитываем специфику рынка в каждом регионе.</p>
        </div>
    </div>
</section>
<!--================End About Studio Area =================-->
<?php
get_template_part('template-parts/sections/section', 'all-services');
get_template_part('template-parts/sections/section', 'office-in');
get_template_part('template-parts/sections/section', 'our-projects');
get_footer(); ?>
