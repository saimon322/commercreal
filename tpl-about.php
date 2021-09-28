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
                    <p>Мы предлагаем Вам коммерческую недвижимость, представленную только у нас. Каждый объект полностью подготовлен к запуску или уже приносит прибыль.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="spec_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/spec-5.svg" alt="">
                    <h4>Индивидуальные условия</h4>
                    <p>Мы работаем только на особых, договорных условиях, идеально подходящих Вам и выгодных для обеих сторон.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="spec_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/spec-6.svg" alt="">
                    <h4>Услуги высшего качества</h4>
                    <p>Мы стремимся к сервису высочайшего уровня. Наша первостепенная задача - обеспечить Вам свободное время, когда недвижимость приносит Вам прибыль.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="meet_team_area">
    <div class="container">
        <div class="team_inner">
            <h6 class="s_title">
                <?= get_field('team_title'); ?>
            </h6>
            <?php if( have_rows('team_list') ): ?>
                <div class="team_slider owl-carousel">
                <?php while( have_rows('team_list') ): the_row(); ?>
                    <div class="team_item">
                        <img src="<?= get_sub_field('photo'); ?>" alt="">
                        <div class="hover">
                            <?php $data = get_sub_field('data'); ?>
                            <h5><?= $data['name']; ?></h5>
                            <h6>
                                <?= $data['post_1']; ?><br>
                                <?= $data['post_2']; ?>
                            </h6>
                            <ul class="list">
                            <?php if (have_rows('socials')): ?>
                                <?php while (have_rows('socials')) : the_row(); ?>
                                    <li>
                                        <a href="<?php echo esc_url(get_sub_field('link')); ?>" target="_blank" rel="noopener noreferrer">
                                            <i class="ion-social-<?php echo strtolower(get_sub_field('type')); ?>"></i>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </ul>
                        </div>
                    </div>                    
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
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

<section class="meet_team_area">
    <div class="container">
        <div class="team_inner">
            <h6 class="s_title">Наши награды</h6>
            <div class="team_slider owl-carousel">
                <div class="team_item">
                    <img src="<?= get_template_directory_uri(); ?>/img/awards/award-1.jpg" alt="">
                    <div class="hover">
                        <h5>Лучшее предприятие<br> России 2020</h5>
                        <ul class="list">
                            <li><a href="#"><i class="ion-at"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team_item">
                    <img src="<?= get_template_directory_uri(); ?>/img/awards/award-2.jpg" alt="">
                    <div class="hover">
                        <h5>Лучшая услуга<br> России 2020</h5>
                        <ul class="list">
                            <li><a href="#"><i class="ion-at"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team_item">
                    <img src="<?= get_template_directory_uri(); ?>/img/awards/award-3.jpg" alt="">
                    <div class="hover">
                        <h5>За вклад в развитие<br> региона 2016</h5>
                        <ul class="list">
                            <li><a href="#"><i class="ion-at"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team_item">
                    <img src="<?= get_template_directory_uri(); ?>/img/awards/award-4.jpg" alt="">
                    <div class="hover">
                        <h5>Лучший стратегический <br> партнёр 2017</h5>
                        <ul class="list">
                            <li><a href="#"><i class="ion-at"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="awards_text">
                <p>Качество наших услуг для нас являться самым важным. Мы делаем все, чтобы Вы осталась довольны сотрудничеством с  нами.  </p>
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

<?php get_template_part('template-parts/sections/section', 'clients'); ?>

<section class="section-pad-bot">
</section>

<?php get_template_part('template-parts/sections/section', 'office-in'); ?>

<section class="section-pad-bot">
</section>

<?php get_template_part('template-parts/sections/section', 'blog'); ?>

<?php get_footer(); ?>
