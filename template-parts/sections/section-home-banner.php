<section class="home-banner">
    <div class="home-banner__videos">
        <video class="home-banner__video home-banner__video--desktop"
               autoplay muted loop preload playsinline poster="<?= get_stylesheet_directory_uri(); ?>/img/home-banner.jpg">
            <source src="<?= get_stylesheet_directory_uri(); ?>/img/home-banner.mp4" type='video/mp4'>
        </video>
        <video class="home-banner__video home-banner__video--mobile"
               autoplay muted loop preload playsinline poster="<?= get_stylesheet_directory_uri(); ?>/img/home-banner-mobile.jpg">
            <source src="<?= get_stylesheet_directory_uri(); ?>/img/home-banner-mobile.mp4" type='video/mp4'>
        </video>
    </div>
    <div class="container">
        <div class="home-banner__content">
            <div class="home-banner__features row">
                <div class="col-md-4">
                    <div class="banner-feature" data-aos="fade-up" data-aos-delay="100">
                        <div class="banner-feature__title">
                            <span class="js-counter" data-count="<?php the_field('volume_rented'); ?>">0</span>
                            м<sup>2</sup>
                        </div>
                        <div class="banner-feature__text">
                            сдано в аренду
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-feature" data-aos="fade-up" data-aos-delay="200">
                        <div class="banner-feature__title">
                            <span class="js-counter" data-count="<?php the_field('volume_income'); ?>">0</span>
                            руб.
                        </div>
                        <div class="banner-feature__text">
                            арендный доход<br> наших клиентов
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-feature" data-aos="fade-up" data-aos-delay="300">
                        <div class="banner-feature__title">
                            <span class="js-counter" data-count="<?php the_field('volume_stores'); ?>">0</span>
                            шт.
                        </div>
                        <div class="banner-feature__text">
                            открыто магазинов
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner__title h2" data-aos="fade-up" data-aos-offset="-100">
                <?php the_field('headline'); ?>
            </div>
        </div>
    </div>
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
</section>