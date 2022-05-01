<section class="about_office_area">
    <div class="container">
        <h2 class="s_title">Офис в Калининграде</h2>
    </div>
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern', null, array(
            'type' => ' pattern--vertical'
        )); ?>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="about_office_area__img">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/founder.jpg" alt="">
                </div>
            </div>
            <div class="about_office_area__content">
                <p class="h2">БУДЕМ РАДЫ ПОЗНАКОМИТЬСЯ <br>
                    <span>С ВАМИ ЛИЧНО</span>
                </p>
                <p class="mt-4">Юсифов Юсиф</p>
                <div class="about_office_area__signatures">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/pod1.png" class="signature1">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/pod2.png" class="signature2">
                </div>
                <p>P.S. "В нашем офисе вас ждет натуральный бразильский кофе и швейцарский шоколад."</p>
                <button class="btn" data-toggle="modal" data-target="#modal-form">НАЗНАЧИТЬ ВСТРЕЧУ</button>
            </div>
        </div>
    </div>
</section>