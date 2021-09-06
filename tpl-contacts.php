<?php /* Template Name: Контакты */
get_header();
$options = get_field('contacts', 'options');
?>

<section class="contact-page">
    <div class="container-fluid p-0">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A102296ec2d47f557bcc149d200dc115ebaa71a3178d5c04aa61ba2862afe6aec&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>

    <div class="container">
        <div class="contact-main">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contacts-info">
                        <h1>Контакты</h1>
                        <div class="contacts-info__address">
                            Калининград<br>
                            Московский пр-т 174  офис. 14
                        </div>
                        <div class="contacts-info__time">
                            с 10:00 - 18:00
                        </div>
                        <div class="contacts-info__days">
                            ПН-ПТ
                        </div>
                        <div class="contacts-info__btns">
                            <a href="mailto:<?php echo $options['email']; ?>"
                                class="btn green-btn">
                                <?php echo $options['email']; ?>
                            </a>
                            <a href="tel:<?php echo $options['phone']; ?>"
                                class="btn green-btn">
                                <?php echo $options['phone']; ?>
                            </a>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="right_contact_form">
                        <h4>Связаться с нами</h4>
                        <form class="row contact_us_form ">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Сообщение" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn order_s_btn form-control">Отправить <i class="ion-ios-play"></i></button>
                            </div>
                            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                            <div class="error-message">We're sorry, but something went wrong</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="contact-cards">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <div class="contact-card__image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-4.jpg" class="w-100">
                        </div>
                        <div class="contact-card__content">
                            <div class="contact-card__headline">
                                По вопросам <span>сотрудничества</span>
                            </div>
                            <div class="contact-card__name">
                                Юсифов Юсиф<br>
                                Yusif Yusifov
                            </div>
                            <div class="contact-card__position">
                                DG<br>
                                Генеральный директор
                            </div>
                            <div class="contact-card__contacts">
                                <a class="contact-card__phone" href="tel:8-981-555-555-9">8-981-555-555-9</a>
                                <a class="contact-card__email" href="mailto:сommercreal@gmail.com">сommercreal@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <div class="contact-card__image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-1.jpg" class="w-100">
                        </div>
                        <div class="contact-card__content">
                            <div class="contact-card__headline">
                                По вопросам <span>сопровождения и аренды</span>
                            </div>
                            <div class="contact-card__name">
                                Андрей Кийатов<br>
                                Andrey Kiiatov
                            </div>
                            <div class="contact-card__position">
                                ССO<br>
                                Коммерческий директор
                            </div>
                            <div class="contact-card__contacts">
                                <a class="contact-card__phone" href="tel: 89210770330">8-921-077-033-0</a>
                                <a class="contact-card__email" href="mailto:сommercreal@gmail.com">сommercreal@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <div class="contact-card__image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team-3.jpg" class="w-100">
                        </div>
                        <div class="contact-card__content">
                            <div class="contact-card__headline">
                                По вопросам <span>маркетинга</span>
                            </div>
                            <div class="contact-card__name">
                                Анна Иванова<br>
                                Anna Ivanova
                            </div>
                            <div class="contact-card__position">
                                AD<br>
                                Арт директор
                            </div>
                            <div class="contact-card__contacts">
                                <a class="contact-card__phone" href="tel:8-914-88-00-389">8-914-88-00-389</a>
                                <a class="contact-card__email" href="mailto:сommercreal@gmail.com">сommercreal@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
