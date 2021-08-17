<?php /* Template Name: Услуги */
get_header();
?>
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_link">
        <div class="container">
            <a href="#">Главная</a>
            <a class="active" href="#">Услуги</a>
        </div>
    </section>
    <!--================End Breadcrumb Area =================-->
    <!--================About Studio Area =================-->
    <section class="about_studio_area bg-pattern-section">
        <div class="container bg-pattern bg-pattern-2">
            <div class="ab_studio_text">
                <p>Мы специализируемся на торговой недвижимости в регионах России и оказываем полный спектр услуг в данном сегменте.</p>
                <p>Мы предлагаем только уникальные и профессиональные решения в секторе коммерческой недвижимости и индивидуальный подход к каждому проекту.</p>
                <p>В своей работе мы всегда опираемся на уже наработанные и доказавшие свою эффективность методики, разработке концепций, брокериджу и архитектурному проектированию и при этом учитываем специфику рынка в каждом регионе.</p>
            </div>
        </div>
    </section>
    <!--================End About Studio Area =================-->
    <!--================Our Speciallization Area =================-->
    <section class="speciallization_area ab_spec">
        <div class="container">
            <h6 class="s_title">Все услуги</h6>
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                            <h4>DEVELOPER</h4>
                        </a>
                        <p>Вы занимаетесь созданием новых объектов  недвижимости и вам требуется решить ряд коммерческих задач. Сотрудничество лучший способ создать максимально эффективный проект.</p>
                        <ul>
                            <li>Управление арендными отношениями</li>
                            <li>Стратегический консалтинг</li>
                            <li>Поиск и продажа активов</li>
                            <li>Разработка концепции развития</li>
                            <li>Маркетинговые исследования</li>
                            <li>Архитектурное проектирование</li>
                            <li>Разработка коммерческой концепции</li>
                            <li>Подготовка объекта к сдаче в эксплуатацию</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                            <h4>СОБСТВЕННИК</h4>
                        </a>
                        <p>Вы строите торговые центры или владеете коммерческой недвижимостью и ваша цель достичь максимальных экономических результатов мы с удовольствием сделаем это за вас.</p>
                        <ul>
                            <li>Полное ведение ТРЦ без вашего участия</li>
                            <li>Координация и контроль СМР арендаторов</li>
                            <li>Аудит действующего объекта</li>
                            <li>Брокеридж</li>
                            <li>Управление эксплуатацией</li>
                            <li>Юридическое сопровождение</li>
                            <li>Финансовое управление</li>
                            <li>Администрирование объектов</li>
                            <li>Маркетинг и реклама</li>
                            <li>Продвижение на профессиональном рынке</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="spec_item">
                        <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                            <h4>RETAILER</h4>
                        </a>
                        <p>Вы имеете собственный бизнес или развиваете сетевую ритейл-компанию, и выходе в конкретный город или регион, ищите подходящие именно вам варианты помещений.</p>
                        <ul>
                            <li>Разработка стратегии развития</li>
                            <li>Подбор площадок для развития сети</li>
                            <li>Анализ эффективности работы сети</li>
                            <li>Представление интересов сети</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Speciallization Area =================-->
    

<?php 
get_template_part('template-parts/sections/section', 'office-in');
get_template_part('template-parts/sections/section', 'our-projects');
get_footer(); ?>