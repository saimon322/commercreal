<section class="clients_area">
    <div class="container">
        <div class="main_title">
            <?php $clients_title = get_field('clients_title', 'options'); ?>
            <h2>
                <span>
                    <?= $clients_title['sign']; ?>
                    <span class="counter-number">
                        <?= $clients_title['number']; ?>
                    </span>
                </span>
                <?= $clients_title['text']; ?>
            </h2>
        </div>
    </div>

    <?php if( have_rows('reviews', 'options') ): ?>
        <div class="testimonials_slider owl-carousel">
        <?php while( have_rows('reviews', 'options') ): the_row(); ?>
            <div class="item">
                <div class="test_item">
                    <div class="test_item__img">
                        <img src="<?= get_sub_field('photo'); ?>" alt="">
                    </div>
                    <div class="test_item__content">
                        <h4>
                            <span><?= get_sub_field('name'); ?></span> / 
                            <?= get_sub_field('post'); ?>
                        </h4>
                        <?= get_sub_field('text'); ?>
                    </div>
                </div>
            </div>   
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <div class="clients_block">
        <div class="container">
            <h6 class="s_title">Наши партнеры</h6>
        </div>
        <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-5.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-6.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-7.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-8.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-9.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-10.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-11.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-12.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-1.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-2.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-3.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-4.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-5.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-6.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-7.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-8.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-9.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-10.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-11.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-logo/c-logo-12.png" alt="">
            </div>
        </div>
    </div>
</section>