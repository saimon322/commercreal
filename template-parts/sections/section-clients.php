<section class="clients_area">
    <div class="container">
        <div class="main_title">
            <?php $clients_title = get_field('clients_title', 'options'); ?>
            <div class="h2">
                <span>
                    <?= $clients_title['sign']; ?>
                    <span class=js-counter data-count="<?= $clients_title['number']; ?>">0</span>
                </span>
                <?= $clients_title['text']; ?>
            </div>
        </div>
    </div>

    <?php if( have_rows('reviews', 'options') ): ?>
        <div class="testimonials_slider owl-carousel">
        <?php while( have_rows('reviews', 'options') ): the_row(); ?>
            <div class="test_item">
                <?php if (get_sub_field('media') == 'photo' && get_sub_field('photo')): ?>
                    <?php $img_class = get_sub_field('screenshot') ? ' screenshot' : '' ?>
                    <div class="test_item__img<?= $img_class ?>">
                        <img src="<?= get_sub_field('photo'); ?>" alt="">
                    </div>
                <?php elseif ((get_sub_field('media') == 'video') && get_sub_field('video')): ?>
                    <div class="test_item__video">
                        <iframe src="<?= get_sub_field('video'); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
                <div class="test_item__content">
                    <?php $data = get_sub_field('data'); ?>
                    <p class="test_item__name h3">
                        <?= $data['name']; ?>
                    </p>
                    <p class="test_item__post h4">
                        <?= $data['post']; ?>
                    </p>
                    <div class="test_item__text">
                        <?= get_sub_field('text'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <div class="clients_block">
        <div class="container">
            <div class="s_title h2"><?= get_field('partners_title', 'options'); ?></div>
        </div>
        <?php if( have_rows('partners', 'options') ): ?>
            <div class="clients_slider owl-carousel">
            <?php while( have_rows('partners', 'options') ): the_row(); ?>
                <div class="item">
                    <a href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?= get_sub_field('logo'); ?>" class="owl-lazy exclude-lazy">
                    </a>
                </div>
            <?php endwhile; ?>
            <?php while( have_rows('partners', 'options') ): the_row(); ?>
                <div class="item">
                    <a href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">
                        <img data-src="<?= get_sub_field('logo'); ?>" class="owl-lazy exclude-lazy">
                    </a>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>