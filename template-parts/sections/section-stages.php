<?php if ($stages = get_stages_of_cooperation()): ?>
    <section class="stages_area">
        <div class="container">
            <h2 class="s_title">Этапы сотрудничества <span>с нами</span></h2>
            <div class="stages" data-aos>
                <?php foreach ($stages as $stage): ?>
                    <div class="stage" data-aos="fade-down" data-aos-delay="0">
                        <div class="stage__icon">
                            <img src="<?= esc_url($stage['photo']['url']); ?>" alt="<?= esc_attr($stage['photo']['alt']); ?>"/>
                        </div>
                        <div class="stage__content">
                            <div class="stage__title"><?= $stage['title']; ?></div>
                            <p class="stage__text"><?= $stage['text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <section class="stages_area">
        <div class="container">
            <div class="s_title h2">Этапы сотрудничества <span>с нами</span></div>
            <div class="stages" data-aos>
                <div class="stage" data-aos="fade-down" data-aos-delay="0">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-search.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Проводим<br> анализ обьекта</div>
                        <p class="stage__text">Маркетинг / Конкурентный анализ / Потенциальная аудитория / Оптимальная торговая площадь.</p>
                    </div>
                </div>
                <div class="stage" data-aos="fade-down" data-aos-delay="100">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-plan.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Формируем<br> план развития</div>
                        <p class="stage__text">Формирование общей концепции объекта, на основе результатов анализа и исследований.</p>
                    </div>
                </div>
                <div class="stage" data-aos="fade-down" data-aos-delay="200">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-deal.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Договор<br> сотрудничества</div>
                        <p class="stage__text">Мы заключаем договора на индивидуальных условиях, выгодных для обеих сторон.</p>
                    </div>
                </div>
                <div class="stage" data-aos="fade-down" data-aos-delay="300">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-home.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Размещаем<br> арендаторов</div>
                        <p class="stage__text">Профессиональный брокеридж и B2B продвижение объекта.</p>
                    </div>
                </div>
                <div class="stage" data-aos="fade-down" data-aos-delay="400">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-cycle.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Замыкаем все<br> процессы на себе</div>
                        <p class="stage__text">Полное и долгосрочное сопровождение. От административной деятельности до финансовой стабильности объекта.</p>
                    </div>
                </div>
                <div class="stage" data-aos="fade-down" data-aos-delay="500">
                    <div class="stage__icon">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon/stage-profit.png" alt="">
                    </div>
                    <div class="stage__content">
                        <div class="stage__title">Стабильная<br> прибыль</div>
                        <p class="stage__text">Берем на себя всю ответственность.<br> Вам нужно только распорядиться свободным временем и стабильным доходом.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>