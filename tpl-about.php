<?php /* Template Name: О нас */
get_header();
$options = get_field('contacts', 'options');
?>

<?php $main_video = get_field('main_video');
if ($main_video): ?>
    <section class="about_banner">
        <div class="about_banner_wrapper">
            <video class="about_banner_video about_banner_video--desktop"
                autoplay muted loop preload playsinline poster="<?php echo $main_video['poster_desktop']; ?>">
                <source src="<?php echo $main_video['desktop']; ?>" type='video/mp4'>
            </video>
            <video class="about_banner_video about_banner_video--mobile"
                autoplay muted loop preload playsinline poster="<?php echo $main_video['poster_mobile']; ?>">
                <source src="<?php echo $main_video['mobile']; ?>" type='video/mp4'>
            </video>
        </div>
    </section>
<?php endif; ?>

<section class="about_studio_area pattern-section">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern', null, array(
            'type' => ' pattern--vertical'
        )); ?>
        <div class="ab_studio_text ab_studio_text_big">
            <h6 class="s_title"><?php the_field('main_title'); ?></h6>
            <?php the_field('main_text'); ?>
        </div>
    </div>
</section>
            
<section class="speciallization_area advantages section-pad">
    <div class="container">
        <h6 class="s_title">Наши преимущества</h6>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="spec_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/spec-4.svg" alt="">
                    <h4>Только уникальные объекты</h4>
                    <p>Мы предлагаем вам коммерческую недвижимость представленную только  у нас. Каждый из них полностью подготовлен к запуску или уже приносить прибыль. </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="spec_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/spec-5.svg" alt="">
                    <h4>Индивидуальные условия</h4>
                    <p>Мы работаем только на особых, договорных условиях. Идеально подходящих вам и выгодных для нас.  </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="spec_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/spec-6.svg" alt="">
                    <h4>Услуги высшего качества</h4>
                    <p>Мы стремимся к сервису наивысшего уровня. Наша первая задача чтобы вы отдыхали, а недвижимость приносила вам прибыл. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="meet_team_area">
    <div class="container">
        <div class="team_inner">
            <h6 class="s_title">Наша команда</h6>
            <div class="team_slider owl-carousel">
                <div class="item">
                    <div class="team_item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-1.jpg" alt="">
                        <div class="hover">
                            <h5>Andrey Kiiatov</h5>
                            <h6>ССO<br> Коммерческий директор </h6>
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team_item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-2.jpg" alt="">
                        <div class="hover">
                            <h5>Petr Shamin</h5>
                            <h6>STL<br> Заведующий отраслевым отделом </h6>
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team_item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-3.jpg" alt="">
                        <div class="hover">
                            <h5>Anna Ivanova</h5>
                            <h6>AD<br> Арт директор</h6>
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team_item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-4.jpg" alt="">
                        <div class="hover">
                            <h5>Yusif Yusifov</h5>
                            <h6>DG<br> Генеральный директор</h6>
                            <ul class="list">
                                <li>
                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_map_area">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <div class="row">
            <div class="col-12 col-md-4 s_content">
                <h6 class="s_title">Наши филиалы в России</h6>
                <div class="s_content--text">
                    <h2>группа компаний <span>Commerc Real</span></h2>
                    <p>Мы специализируемся на развитии северо-западного региона России.  Но вы можете обратиться в нашу группу компаний из любого города,  мы с удовольствием встретимся с вами в удобном для вас месте. </p>
                </div>
                <button class="btn btn mb-4" data-toggle="modal" data-target="#modal-form">НАПИШИТЕ НАМ</button>
                <button class="btn btn" data-toggle="modal" data-target="#modal-form">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>
            <div class="col-12 col-md-8">
                <div class="about-map" data-aos data-aos-offset="200">
                    <img src="<?= get_template_directory_uri(); ?>/img/about-map.png" alt="" class="about-map__bg">
                    <div class="about-map__points">
                        <div class="about-map__point" style="left: 32%; top: 54%;">
                            <p>Москва</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="about-map__point" style="left: 15.5%; top: 38%;">
                            <p>Калининград</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="about-map__point" style="left: 27%; top: 36%;">
                            <p>Санкт-Петербург</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="about-map__point" style="left: 44%; top: 35%;">
                            <p>Архангельск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                        <div class="about-map__point" style="left: 45%; top: 19%;">
                            <p>Мурманск</p>
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/map-point.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="presentation">
    <div class="container">
        <div class="row presentation__wrapper">
            <div class="col-12 col-md-6">
                <div class="presentation__img">
                    <img src="<?= get_template_directory_uri(); ?>/img/presentation.jpg" alt="">
                    <?php get_template_part('template-parts/animation/diamond'); ?>
                </div>
            </div>
            <div class="presentation__content">
                <h2>Презентация</h2>
                <p class="mt-4">
                    Мы расскажем все о наших лучших проектах, принципах работы, и плюсах работы с нами.
                </p>
                <div class="presentation__icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icon/presentation.svg">
                </div>
                <button class="btn btn" download>Скачать PDF</button>
            </div>
        </div>
    </div>
</section>

<section class="section-pad-bot">
</section>

<?php get_template_part('template-parts/sections/section', 'office-in'); ?>

<section class="section-pad-bot">
</section>

<?php get_template_part('template-parts/sections/section', 'clients'); ?>

<?php get_template_part('template-parts/sections/section', 'blog'); ?>

<?php get_footer(); ?>
