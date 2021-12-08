<div class="left_sidebar_area">
    <aside class="l_widget categories_wd">
        <div class="l_wd_title">
            <p class="h3">Категории</p>
        </div>
        <?php $terms = get_terms('category', ['hide_empty' => false]); ?>
        <ul class="list">
            <?php foreach ($terms as $term): ?>
                <li>
                    <a href="<?= get_term_link($term->term_id); ?>">
                        <?= $term->name; ?> 
                        <span><?= $term->count; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <aside class="l_widget r_post_wd">
        <div class="l_wd_title">
            <p class="h3">Новые посты</p>
        </div>
        <?php $result = wp_get_recent_posts([
            'numberposts' => 3,
            'post_status' => 'publish',
            'orderby'     => 'post_date',
        ]);
        
        foreach ($result as $post): ?>
            <div class="media">
                <div class="d-flex">
                    <a href="<?= get_permalink($post['ID']); ?>" class="r_post_img">
                        <?= get_the_post_thumbnail($post['ID']); ?>
                    </a>
                </div>
                <div class="media-body">
                    <a href="<?= get_permalink($post['ID']); ?>"><p class="h4"><?= $post['post_title'] ?></p></a>
                </div>
            </div>
        <?php endforeach; ?>
    </aside>
</div>