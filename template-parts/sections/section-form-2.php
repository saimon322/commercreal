<section class="our_press_area">
    <div class="container">
        <div class="pattern">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/></svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/></svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/></svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/></svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/></svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/></svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/></svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/></svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/></svg>
        </div>
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