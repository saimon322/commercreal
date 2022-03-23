<?php $options = get_field('contacts', 'options'); ?>
<section class="our_press_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="press_img_item">
                    <div class="press_img_name">
                        БУДЬ В КУРСЕ <span>СОБЫТИЙ</span>
                    </div>
                    <img src="<?= get_template_directory_uri(); ?>/img/telegram-image.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="press_content">
                    <h2>
                        Telegram канал <span>Commerc real</span>
                    </h2>
                    <img src="<?= get_template_directory_uri(); ?>/img/telegram-hands.png" alt="" class="img-telegram">
                    <h5>Самые свежие новости коммерческой недвижимости:</h5>
                    <ul>
                        <li>важные события ритейла. </li>
                        <li>анонсы событий и мероприятий отрасли,</li>
                        <li>ответны на самые волнующие вопросы,</li>
                        <li>и конечно живое общение с нами.</li>
                    </ul>
                    <a href="<?= $options['telegram']; ?>" class="btn">Подписаться</a>
                </div>
            </div>
        </div>
    </div>
</section>