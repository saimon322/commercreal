<?php if ($serviceIncludes = get_field('service_includes')): ?>
    <section class="service_parts_area">
        <div class="container">
            <h2 class="s_title">Услуга <span>включает</span></h2>
            <div class="service-parts row">
                <?php foreach ($serviceIncludes as $include): ?>
                    <div class="col-md-6 col-lg-4">
                        <li class="service-part">
                            <div class="service-part__header">
                                <?php if ( ! empty($include['img'])): ?>
                                    <img src="<?= esc_url($include['img']['url']); ?>" alt="<?= esc_attr($include['img']['alt']); ?>"/>
                                <?php endif; ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/features/feature-mini-1.jpg" alt="">
                                <p><?= $include['title']; ?></p>
                            </div>
                            <div class="service-part__content">
                                <div class="toggle_text">
                                    <?= $include['content']; ?>
                                </div>
                                <button class="toggle_btn view_btn">
                                    <span>Подробнее</span>
                                    <span>Скрыть</span>
                                </button>
                            </div>
                        </li>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>