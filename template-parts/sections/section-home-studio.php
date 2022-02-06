<section class="home-studio pattern-section">
    <div class="container">
        <div class="pattern pattern--vertical">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1018 10.0566L10.0566 2.01131L2.01132 10.0566L10.0566 18.1018L18.1018 10.0566ZM10.0566 0L9.59009e-06 10.0566L10.0566 20.1131L20.1131 10.0566L10.0566 0Z" fill="#F1D299"/>
            </svg>
            <svg width="38" height="12" viewBox="0 0 38 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0488 9.23619L36.0989 1.18602L37.1046 2.19168L28.0882 11.2081L18.8241 2.6566L9.55998 11.2081L0.543584 2.19168L1.54924 1.18602L9.59941 9.23619L18.8241 0.7211L28.0488 9.23619Z" fill="#F1D299"/>
            </svg>
            <svg width="30" height="3" viewBox="0 0 30 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.55725 0.955502L29.0015 0.955502V2.37772L0.55725 2.37772V0.955502Z" fill="#F1D299"/>
            </svg>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="studio_img_wrapper">
                    <div class="studio_img">
                        <?php
                        $image = get_field('about_img');
                        if ( ! empty($image)): ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>"/>
                        <?php endif; ?>
                        <div class="years_text">
                            <?php $years = get_field('about_years');
                            if ($years): ?>
                                <div class="years_text_inner">
                                    <p data-aos="fade-up" data-aos-delay="200" class="h1"><?= $years['about_year_1']; ?></p>
                                    <p data-aos="fade-up" data-aos-delay="300" class="h2"><?= $years['about_year_2']; ?></p>
                                    <p data-aos="fade-up" data-aos-delay="400" class="h4"><?= $years['about_year_3']; ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="diamond" data-aos>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="113" y1="0" x2="119" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="106" y1="0" x2="127" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="98" y1="0" x2="134" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="90" y1="0" x2="142" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="83" y1="0" x2="150" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="75" y1="0" x2="158" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="68" y1="0" x2="165" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="60" y1="0" x2="172" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="53" y1="0" x2="180" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="44" y1="0" x2="188" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="37" y1="0" x2="195" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="30" y1="0" x2="203" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="24" y1="0" x2="210" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="15" y1="0" x2="218" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="7" y1="0" x2="226" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="0" y1="0" x2="234" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="4" y1="0" x2="230" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="12" y1="0" x2="222" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="21" y1="0" x2="212" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="28" y1="0" x2="206" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="35" y1="0" x2="198" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="42" y1="0" x2="191" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="51" y1="0" x2="183" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="59" y1="0" x2="174" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="67" y1="0" x2="167" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="74" y1="0" x2="160" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="82" y1="0" x2="152" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="90" y1="0" x2="143" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="98" y1="0" x2="135" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="106" y1="0" x2="128" y2="0" stroke="#F1D299"/>
                                </svg>
                                <svg viewBox="0 0 234 1" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="113" y1="0" x2="120" y2="0" stroke="#F1D299"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="studio_content">
                    <h2 class="studio_title">
                        <?php the_field('about_title'); ?>
                    </h2>
                    <div class="studio_block">
                        <p class="h5"><?php the_field('about_subtitle_1'); ?></p>
                        <p><?php the_field('about_text'); ?></p>
                    </div>
                    <div class="studio_block">
                        <p class="h5"><?php the_field('about_subtitle_2'); ?></p>
                        <?php if( have_rows('about_list') ): ?>
                            <ul class="studio_list counter-list">
                            <?php while( have_rows('about_list') ): the_row(); ?>
                                <li><?= get_sub_field('item'); ?></li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>