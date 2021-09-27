<?php $services_sub_menu = get_field('services_menu', 'options'); ?>
<li class="mega-menu-item">
    <a href="/uslugi/">Услуги</a>
    <div class="mega-menu">
        <div class="mega-menu__list">
            <div class="mega-menu__item">
                <a href="<?= get_term_link(13); ?>">
                    <h5>DEVELOPER</h5>
                </a>
                <ul>
                    <?php foreach ($services_sub_menu['developer_links'] as $link_row):
                        if ( ! empty($link_row['link'])): ?>
                            <li>-
                                <a href="<?= $link_row['link']['url']; ?>"><?= $link_row['link']['title']; ?></a>
                            </li>
                        <?php endif;
                    endforeach; ?>
                </ul>
            </div>
            <div class="mega-menu__item">
                <a href="<?= get_term_link(15); ?>">
                    <h5>СОБСТВЕННИК</h5>
                </a>
                <ul>
                    <?php foreach ($services_sub_menu['owner_links'] as $link_row):
                        if ( ! empty($link_row['link'])): ?>
                            <li>-
                                <a href="<?= $link_row['link']['url']; ?>"><?= $link_row['link']['title']; ?></a>
                            </li>
                        <?php endif;
                    endforeach; ?>
                </ul>
            </div>
            <div class="mega-menu__item">
                <a href="<?= get_term_link(14); ?>">
                    <h5>АРЕНДАТОР</h5>
                </a>
                <ul>
                    <?php foreach ($services_sub_menu['tenant_links'] as $link_row):
                        if ( ! empty($link_row['link'])): ?>
                            <li>-
                                <a href="<?= $link_row['link']['url']; ?>"><?= $link_row['link']['title']; ?></a>
                            </li>
                        <?php endif;
                    endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="mega-menu__list">
            <?php if ($services_sub_menu['bottom_services']):
                foreach ($services_sub_menu['bottom_services'] as $service): ?>
                    <a href="<?= get_post_permalink($service); ?>" class="mega-menu__project">
                        <h5><?= get_the_title($service); ?></h5>
                        <img src="<?= get_the_post_thumbnail_url($service); ?>" alt="">
                    </a>
                <?php endforeach;
            endif; ?>
        </div>
        <a href="/uslugi/" class="btn mega-menu__btn">Все услуги</a>
    </div>
</li>