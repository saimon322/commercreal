<?php $current_term = get_queried_object(); ?>
<section class="speciallization_area ab_spec services_block">
    <div class="container">
        <div class="row text-center">
            <div class="<?php echo $current_term->term_id == 13 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                        <h4>DEVELOPER</h4>
                    </a>
                </div>
            </div>
            <div class="<?php echo $current_term->term_id == 15 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                        <h4>СОБСТВЕННИК</h4>
                    </a>
                </div>
            </div>
            <div class="<?php echo $current_term->term_id == 14 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                        <h4>RETAILER</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="row services-content">
            <div class="col-12 col-md-8">
                <?php echo term_description(); ?>
            </div>
        </div>
    </div>
</section>