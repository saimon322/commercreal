<?php /* Template Name: Контакты */
get_header();
$options = get_field('contacts', 'options');
?>

<section class="contact-page">
    <div class="container-fluid p-0">
        <div class="contact-maps">
            <?php $maps = get_field('maps');
            for ($i = 1; $i <= 2; $i++):
                $map = $maps['map_' . $i]; ?>
                <div class="contact-map">
                    <?php if($map['bg']): ?>
                        <img src="<?= $map['bg']; ?>" alt="">
                    <?php endif; 
                    if($map['iframe']): ?>
                        <iframe src="<?= $map['iframe']; ?>" width="100%" height="400" frameborder="0"></iframe> 
                    <?php endif; 
                    if($map['title']): ?>
                        <p class="h4"><?= $map['title']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="container">
        <div class="contact-main">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contacts-info">
                        <h1><?= the_title(); ?></h1>
                        <div class="contacts-info__address">
                            <?= $options['address']; ?>
                        </div>
                        <div class="contacts-info__time">
                            <?= $options['work_time']; ?>
                        </div>
                        <div class="contacts-info__days">
                            <?= $options['work_days']; ?>
                        </div>
                        <div class="contacts-info__btns">
                            <a href="mailto:<?= $options['email']; ?>"
                                class="btn">
                                <?= $options['email']; ?>
                            </a>
                            <a href="tel:<?= $options['phone']; ?>"
                                class="btn">
                                <?= $options['phone']; ?>
                            </a>
                            <a href="<?= $options['telegram']; ?>"
                                class="btn">
                                Telegram
                            </a>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="right_contact_form">
                        <h2><?= get_field('form_title'); ?></h2>
                        <form class="row contact_us_form form-contact">
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
                                <button type="submit" value="submit" class="order_s_btn form-control">Отправить <i class="ion-ios-play"></i></button>
                            </div>
                            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                            <div class="error-message">We're sorry, but something went wrong</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <?php if(have_rows('brokers')): ?>
        <div class="contact-cards">
            <div class="row">
                <?php while(have_rows('brokers')): the_row();?>
                <?php if ($broker = get_broker(get_sub_field('broker'))): ?> 
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <?php if ( ! empty($broker['photo'])): ?>
                            <div class="contact-card__image">
                                <img src="<?= esc_url($broker['photo']['url']); ?>" alt="<?= esc_attr($broker['photo']['alt']); ?>" class="w-100"/>
                            </div>
                        <?php endif; ?>
                        <div class="contact-card__content">
                            <div class="contact-card__headline">
                                <?= $broker['headline']; ?>
                            </div>
                            <div class="contact-card__name">
                                <?= $broker['name']; ?>
                                <br>
                                <?= $broker['name_eng']; ?>
                            </div>
                            <div class="contact-card__position">
                                <?= $broker['position']; ?>
                            </div>
                            <div class="contact-card__contacts">
                                <a class="contact-card__phone" href="tel: <?= $broker['phone']; ?>"><?= $broker['phone']; ?></a>
                                <a class="contact-card__email" href="mailto:<?= $broker['email']; ?>"><?= $broker['email']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
