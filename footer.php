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
                    <h3>Контакты</h3>
                </div>
                <?php echo $options['address']; ?>
                <!--<a href="mailto:<?php /*echo $options['email']; */ ?>"><?php /*echo $options['email']; */ ?></a>
                <a href="tel:<?php /*echo $options['phone']; */ ?>"><?php /*echo $options['phone']; */ ?></a>-->
            </div>
        </aside>
        <?php wp_nav_menu([
            'theme_location' => 'footer-menu',
            'container'      => '',
            'items_wrap'     => '%3$s',
            'walker'         => new Footer_Walker_Nav_Menu(),
        ]); ?>
    </div>
    <div class="footer_copyright">
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
                    <h5 class="modal-title"
                        id="exampleModalLongTitle">Закажите обратный звонок</h5>
                    <button type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-contact js-contact-form"
                          method="POST"
                          action="#">
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
                                <button class="btn green-btn"
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
                    <h3>Сообщение успешно отправлено, вскоре с вами свяжутся!</h3>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>
