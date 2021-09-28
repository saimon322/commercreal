<section class="our_press_area">
    <div class="container">
        <?php $form = get_field('block_form', 'option') ?>
        <h6 class="s_title">
            <?= $form['title']; ?>
        </h6>
        <div class="our_press_area_text">
            <?= $form['text']; ?>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="press_img_item">
                    <h2 class="press_img_title"><?= $form['img_text']; ?></h2>
                    <div class="press_img">
                        <img class="img-fluid" src="<?= $form['img_2']; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="press_content">
                    <div class="press_form">
                        <h3><span>Заказать индивидуальную подборку</span> актуальных объектов </h3>
                        <p>Мы предоставляем нашим клиентам только уникальные предложения и условия сотрудничества.</p>
                        <form class="press_form__form form-contact">
                            <input type="text" name="phone" placeholder="Номер телефона">
                            <input type="text" name="name" placeholder="Ваше имя">
                            <input type="email" name="email" placeholder="Электронная почта">
                            <button type="submit" class="btn btn">Заказать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>