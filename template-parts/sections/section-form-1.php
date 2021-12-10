<section class="our_press_area">
    <div class="container">
        <?php get_template_part('template-parts/animation/pattern'); ?>
        <?php $form = get_field('block_form', 'option') ?>
        <p class="s_title">
            <?= $form['title']; ?>
        </p>
        <div class="our_press_area_text">
            <?= $form['text']; ?>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="press_img_item">
                    <p class="press_img_title h2"><?= $form['img_text']; ?></p>
                    <div class="press_img">
                        <img class="img-fluid" src="<?= $form['img']; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="press_content">
                    <div class="press_form">
                        <h2><span>Заказать индивидуальную подборку</span> актуальных объектов </h2>
                        <p>Мы предоставляем нашим клиентам только уникальные предложения и условия сотрудничества.</p>
                        <form class="press_form__form form-contact">
                            <input type="text" name="phone" required placeholder="Номер телефона">
                            <input type="text" name="name" required placeholder="Ваше имя">
                            <input type="email" name="email" placeholder="Электронная почта">
                            <button type="submit" class="btn btn">Заказать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>