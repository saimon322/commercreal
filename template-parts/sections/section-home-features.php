<section class="features_area">
    <div class="container">
        <h2 class="s_title"><?php the_field('features_title'); ?></h2>
        <div class="row">            
            <!-- Slider feature -->
            <div class="col-sm-4">
                <?php $feature1 = get_field('feature_1'); ?>
                <div class="feature">
                    <div class="feature__main">
                        <?php $images = $feature1['images'];
                        if ($images): ?>
                            <div class="feature-slider target">
                                <?php /* foreach ($images as $image): ?>
                                    <div class="feature-slider__item">
                                        <img src="<?= $image ?>" alt="">
                                    </div>
                                <?php  endforeach;*/ ?>
                                <div class="feature-slider__item">
                                    <img src="<?= get_template_directory_uri(); ?>/img/features/feature-1.jpg" alt="">
                                    <div class="feature__title">
                                        Партнёрство с нами
                                        <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-arrow.svg" alt="">
                                        реализация ваших объектов
                                    </div>
                                </div>
                                <div class="feature-slider__item">
                                    <img src="<?= get_template_directory_uri(); ?>/img/features/feature-2.jpg" alt="">
                                    <div class="feature__title">
                                        Ваш объект
                                        <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-arrow.svg" alt="">
                                        в аренду
                                    </div>
                                </div>
                                <div class="feature-slider__item">
                                    <img src="<?= get_template_directory_uri(); ?>/img/features/feature-3.jpg" alt="">
                                    <div class="feature__title">
                                        Покупка
                                        <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-arrow.svg" alt="">
                                        ваших объектов
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="feature__icon feature__icon--right">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-corner.svg" alt="">
                        </div>
                    </div>
                    <div class="feature__content">
                        <p class="feature__for">
                            <?= $feature1['title']; ?>
                        </p>
                        <div class="feature__text">
                            <?= $feature1['text']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Minies feature -->
            <div class="col-sm-4">
                <?php $feature2 = get_field('feature_2'); ?>
                <div class="feature">
                    <div class="feature__main">
                        <div class="feature-minies">
                            <?php
                            if (have_rows('feature_2')): while (have_rows('feature_2')): the_row();
                                if (have_rows('substages')): while (have_rows('substages')): the_row(); ?>
                                    <a href="<?= get_sub_field('link'); ?>" class="feature-mini target">
                                        <img src="<?= get_sub_field('img'); ?>" alt="">
                                        <p class="feature-mini__title"><?= get_sub_field('title'); ?></p>
                                    </a>
                                <?php endwhile; endif;
                            endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="feature__content">
                        <p class="feature__for">
                            <?= $feature2['title']; ?>
                        </p>
                        <div class="feature__text">
                            <?= $feature2['text']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Loupe feature -->
            <div class="col-sm-4">
                <?php $feature3 = get_field('feature_3'); ?>
                <div class="feature">
                    <div class="feature__main">
                        <div class="feature__title">
                            <?= $feature3['title_new']; ?>
                        </div>
                        <div class="feature-loupe">
                            <div class="feature-loupe__bg">
                                <img src="<?= $feature3['img']; ?>" alt="">
                            </div>
                            <div class="feature-loupe__el target">
                                <div class="feature-loupe__icon">
                                    <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-loupe.png" alt="">
                                </div>
                                <div class="feature-loupe__img">
                                    <img src="<?= $feature3['img_color']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="feature__icon feature__icon--left">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon/feature-eye.svg" alt="">
                        </div>
                    </div>
                    <div class="feature__content">
                        <p class="feature__for">
                            <?= $feature3['title']; ?>
                        </p>
                        <div class="feature__text">
                            <?= $feature3['text']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>