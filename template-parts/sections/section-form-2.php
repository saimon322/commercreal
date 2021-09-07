<section class="our_press_area">
    <div class="container bg-pattern bg-pattern-2">
        <h6 class="s_title"><?php the_field('offer_subtitle'); ?></h6>
        <div class="row">
            <?php $img = get_field('offer_img');
            if ($img): ?>
                <div class="col-lg-6">
                    <div class="press_img_item">
                        <h2 class="press_img_title"><?php the_field('offer_caption'); ?></h2>
                        <div class="press_img">
                            <img class="img-fluid" src="<?php echo $img; ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-6">
                <div class="press_content">
                    <div class="press_form">
                        <h3>
                            <?php the_field('offer_title'); ?>
                        </h3>
                        <?php the_field('offer_text'); ?>
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