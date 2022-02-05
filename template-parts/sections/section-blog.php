<?php $result = wp_get_recent_posts([
    'numberposts' => 8,
    'post_status' => 'publish',
    'orderby'     => 'post_date',
]); ?>
<section class="blog-section">
    <div class="container">
        <h2 class="s_title">Новости <span>компании и индустрии</span></h2>
        <div class="blog-section__list">
            <?php foreach ($result as $post): ?>
                <a href="<?= get_permalink($post['ID']); ?>" class="blog-item">
                    <div class="blog-item__img">
                        <?= get_the_post_thumbnail($post['ID']); ?>
                    </div>
                    <div class="blog-item__title">
                        <?= $post['post_title'] ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <a class="view_btn" href="/category/all">Подробнее</a>
    </div>
</section>