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
                        <?php $data = get_sub_field('data'); ?>
                        <h3 class="test_item__name">
                            <?= $data['name']; ?>
                        </h3>
                        <h4 class="test_item__post">
                            <?= $data['post']; ?>
                        </h4>
                        <div class="test-item__text">
                            <?= get_sub_field('text'); ?>
                        </div>
                    </div>
                </div>
            </div>   
        <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <div class="clients_block">
        <div class="container">
            <h6 class="s_title"><?= get_field('partners_title', 'options'); ?></h6>
        </div>
        <?php if( have_rows('partners', 'options') ): ?>
            <div class="clients_slider owl-carousel">
            <?php while( have_rows('partners', 'options') ): the_row(); ?>
                <div class="item">
                    <a href="<?= get_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?= get_sub_field('logo'); ?>" alt="">
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>