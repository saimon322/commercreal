<?php $options = get_field('contacts', 'options'); ?>
<footer class="footer_area">
    <div class="footer_widgets row m0">
        <aside class="f_widgets_item">
            <div class="f_logo">
                COMMERC REAL
            </div>
        </aside>
        <aside class="f_widgets_item">
            <div class="f_contact">
                <div class="f_title">
                    <p class="h3">Контакты</p>
                </div>
                <?php echo $options['address']; ?>
                <br>
                <a href="mailto:<?php echo $options['email']; ?>">
                    <?php echo $options['email']; ?>
                </a>
                <a href="tel:<?php echo $options['phone']; ?>">
                    <?php echo $options['phone']; ?>
                </a>
                <br>
                Время работы:
                <p><?php echo $options['work_time']; ?></p>
                <p><?php echo $options['work_days']; ?></p>
            </div>
        </aside>
        <?php wp_nav_menu([
            'theme_location' => 'footer-menu',
            'container'      => '',
            'items_wrap'     => '%3$s',
            'walker'         => new Footer_Walker_Nav_Menu(),
        ]); ?>
    </div>
    <div class="footer_bottom">
        <div class="left_text">
            <?php echo $options['copyright']; ?>
        </div>
        <div class="middle_text">
            <?php if ($options['socials']): ?>
                <ul class="list">
                    <?php foreach ($options['socials'] as $social): ?>
                        <li>
                            <a href="<?php echo esc_url($social['link']); ?>" target="_blank">
                                <?php echo $social['type']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- <div class="right_text"></div> -->
    </div>
</footer>
</div>

<div class="modal fade"
        id="modal-form"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
    <div class="modal-dialog"
            role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title h5"
                    id="exampleModalLongTitle">Закажите обратный звонок</div>
                <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-contact"
                        method="POST" >
                    <div class="form-row no-gutters">
                        <div class="form-group w-100">
                            <input class="form-control"
                                    type="text"
                                    name="name"
                                    placeholder="Как к Вам обращаться?"
                                    required="required">
                        </div>
                        <div class="form-group w-100">
                            <input class="form-control"
                                    type="text"
                                    name="phone"
                                    placeholder="Телефон для связи"
                                    required="required">
                        </div>
                        <div class="w-100">
                            <p>Наш представитель свяжется с вами для консультации</p>
                        </div>
                        <div class="text-center w-100 mt-3">
                            <button class="btn btn"
                                    type="submit">Отправить
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade"
        id="success"
        tabindex="-1"
        role="dialog"
        aria-labelledby="success"
        aria-hidden="true">
    <div class="modal-dialog"
            role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p class="h3">Сообщение успешно отправлено, вскоре с вами свяжутся!</p>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="//code-ya.jivosite.com/widget/s1IdUoxGtg" async></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(86727699, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86727699" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
