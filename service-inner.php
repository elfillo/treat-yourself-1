<?php
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта
?>


<!-- Begin header -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'header.php');?>
<!-- End header -->

<main class="main-content">

    <section class="service-inner">
        <button class="btn-fill service-inner__btn-fixed" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
            Записаться на прием
        </button>

        <div class="container">
            <!-- Begin breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Лимфедема
                </li>
            </ul>
            <!-- End breadcrumb-->


            <div class="row service-inner__row">
                <div class="service-inner__body">
                    <div class="service-inner__preview">
                        <h1 class="display display_size_big service-inner__name">
                            Лимфедема
                        </h1>
                        <div class="text">
                            <p>
                                Лечение лимфостаза представляет собой сложную задачу, так как <br>подразумевает
                                сочетание различных технологий консервативного <br>лечения. В НПЦ ЛИМФА - мы уже
                                более 20 лет используем комплексную <br>физическую противоотечную терапию, чтобы
                                помогать пациентам <br>с лимфедемой различной этиологии.
                            </p>
                        </div>
                    </div>
                    <div class="service-inner__desc">
                        <h2 class="service-inner__title">
                            Симптомы / Повод обратится к специалисту
                        </h2>
                        <div class="text">
                            <p>
                                Лечение лимфостаза представляет собой сложную задачу, так как <br>подразумевает
                                сочетание различных технологий консервативного <br>лечения. В НПЦ ЛИМФА - мы уже
                                более 20 лет используем комплексную <br>физическую противоотечную терапию, чтобы
                                помогать пациентам <br>с лимфедемой различной этиологии.
                            </p>
                        </div>
                    </div>
                    <!-- Begin symptoms -->
                    <ol class="symptoms">
                        <li class="symptoms__item">
                            Симптом
                        </li>
                        <li class="symptoms__item">
                            Симптом
                        </li>
                        <li class="symptoms__item">
                            Симптом
                        </li>
                        <li class="symptoms__item">
                            Симптом
                        </li>
                        <li class="symptoms__item">
                            Симптом
                        </li>
                    </ol>
                    <!-- End symptoms -->
                    <div class="service-inner__desc">
                        <h2 class="service-inner__title">
                            Что вас ожидает на приеме врача
                        </h2>
                        <div class="text">
                            <p>
                                Лечение лимфостаза представляет собой сложную задачу, так как <br>подразумевает
                                сочетание различных технологий консервативного <br>лечения. В НПЦ ЛИМФА - мы уже
                                более 20 лет используем комплексную <br>физическую противоотечную терапию, чтобы
                                помогать пациентам <br>с лимфедемой различной этиологии.
                            </p>
                        </div>
                    </div>

                    <!-- Begin service-slider -->
                    <div class="swiper-container service-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide service-slider__slide"
                                style="background-image: url(img/admin/service.jpg);"></div>
                            <div class="swiper-slide service-slider__slide"
                                style="background-image: url(img/admin/service.jpg);"></div>
                        </div>

                        <div class="slider-controls service-slider__controls">
                            <button class="slider-control slider-control_prev">
                                <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                    <use xlink:href="img/symbol_sprite.svg#icon-arrow-left"></use>
                                </svg>
                            </button>
                            <button class="slider-control slider-control_next">
                                <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                    <use xlink:href="img/symbol_sprite.svg#icon-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- End service-slider -->

                    <div class="doctors">
                        <div class="doctors__slider-wrapper">
                            <div class="swiper-container doctors-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide doctors-slider__slide">
                                        <a href="/team-inner.html" class="doctor-card">
                                            <div class="doctor-card__thumb">
                                                <img src="img/admin/doctor.png" width="266" height="345"
                                                    alt="Иванова Мария Ивановна">
                                            </div>
                                            <h3 class="doctor-card__name">
                                                Иванова Мария Ивановна
                                            </h3>
                                            <div class="doctor-card__desc">
                                                Стаж работы более 40 лет <br>
                                                Врач лимфолог
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide doctors-slider__slide">
                                        <a href="/team-inner.html" class="doctor-card">
                                            <div class="doctor-card__thumb">
                                                <img src="img/admin/doctor.png" width="266" height="345"
                                                    alt="Иванова Мария Ивановна">
                                            </div>
                                            <h3 class="doctor-card__name">
                                                Иванова Мария Ивановна
                                            </h3>
                                            <div class="doctor-card__desc">
                                                Стаж работы более 40 лет <br>
                                                Врач лимфолог
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide doctors-slider__slide">
                                        <a href="/team-inner.html" class="doctor-card">
                                            <div class="doctor-card__thumb">
                                                <img src="img/admin/doctor.png" width="266" height="345"
                                                    alt="Иванова Мария Ивановна">
                                            </div>
                                            <h3 class="doctor-card__name">
                                                Иванова Мария Ивановна
                                            </h3>
                                            <div class="doctor-card__desc">
                                                Стаж работы более 40 лет <br>
                                                Врач лимфолог
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide doctors-slider__slide">
                                        <a href="/team-inner.html" class="doctor-card">
                                            <div class="doctor-card__thumb">
                                                <img src="img/admin/doctor.png" width="266" height="345"
                                                    alt="Иванова Мария Ивановна">
                                            </div>
                                            <h3 class="doctor-card__name">
                                                Иванова Мария Ивановна
                                            </h3>
                                            <div class="doctor-card__desc">
                                                Стаж работы более 40 лет <br>
                                                Врач лимфолог
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-controls team-section__controls">
                                <button class="slider-control slider-control_prev">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="img/symbol_sprite.svg#icon-arrow-left"></use>
                                    </svg>
                                </button>
                                <button class="slider-control slider-control_next">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="img/symbol_sprite.svg#icon-arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="doctors__text">
                            <h2 class="service-inner__title">
                                Врачи, которые <br>будут вас лечить
                            </h2>
                            <div class="text">
                                <p>
                                    Попасть в нашу команду могут только <br>лучшие специалисты с многолетней
                                    <br>практикой и доказанным опытом.
                                </p>
                                <br>
                                <p>
                                    Наши врачи не только лечат. <br>Они помогают сохранить здоровье <br>и
                                    находят подход и ко всем пациентам.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="our-prices">
                        <h2 class="service-inner__title">
                            Стоимость услуг
                        </h2>
                        <ul class="preces">
                            <li class="price">
                                <h3 class="price__name">
                                    Первичная косультация врача Лимфолога
                                </h3>
                                <div class="price__value">
                                    1300 &#8381;
                                </div>
                                <button class="price__btn">
                                    Запись онлайн
                                </button>
                            </li>
                            <li class="price">
                                <h3 class="price__name">
                                    Первичная косультация врача Лимфолога
                                </h3>
                                <div class="price__value">
                                    1300 &#8381;
                                </div>
                                <button class="price__btn">
                                    Запись онлайн
                                </button>
                            </li>
                            <li class="price">
                                <h3 class="price__name">
                                    Первичная косультация врача Лимфолога
                                </h3>
                                <div class="price__value">
                                    1300 &#8381;
                                </div>
                                <button class="price__btn">
                                    Запись онлайн
                                </button>
                            </li>
                            <li class="price">
                                <h3 class="price__name">
                                    Первичная косультация врача Лимфолога
                                </h3>
                                <div class="price__value">
                                    1300 &#8381;
                                </div>
                                <button class="price__btn">
                                    Запись онлайн
                                </button>
                            </li>
                            <li class="price">
                                <h3 class="price__name">
                                    Первичная косультация врача Лимфолога
                                </h3>
                                <div class="price__value">
                                    1300 &#8381;
                                </div>
                                <button class="price__btn">
                                    Запись онлайн
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div class="service-inner__desc">
                        <h2 class="service-inner__title">
                            Как подготовится к приему
                        </h2>
                        <div class="text">
                            <p>
                                Лечение лимфостаза представляет собой сложную задачу, так как <br>подразумевает
                                сочетание различных технологий консервативного <br>лечения. В НПЦ ЛИМФА - мы уже
                                более 20 лет используем комплексную <br>физическую противоотечную терапию, чтобы
                                помогать пациентам <br>с лимфедемой различной этиологии.
                            </p>
                        </div>
                    </div>

                    <div class="service-reviews">
                        <h2 class="service-inner__title">
                            Отзывы наших пациентов
                        </h2>
                        <ul class="reviews__list">
                            <li class="reviews__item">
                                <!-- Begin review-->
                                <article class="review">
                                    <div class="review__part review__part_left">
                                        <a href="/" class="logo review__logo">
                                            <img src="img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                        </a>
                                        <div class="review__hero">
                                            <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                            <div class="rating review__rating" data-rating-count="2"></div>
                                            <h3 class="dispaly display_size_middle review__name">
                                                Александр
                                            </h3>
                                            <div class="review__date">
                                                28.10.2019
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__part review__part_right">
                                        <div class="review__text">
                                            <p>
                                                Забыла дома обед на работу, меня просто спасла пицца клаб. Очень
                                                вкусная
                                                пицца, доставка всегда вовремя.
                                            </p>
                                        </div>

                                        <div class="review__gallery">
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary1"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary1"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary1"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary1"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- End review-->
                            </li>
                            <li class="reviews__item">
                                <!-- Begin review-->
                                <article class="review">
                                    <div class="review__part review__part_left">
                                        <a href="/" class="logo review__logo">
                                            <img src="img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                        </a>
                                        <div class="review__hero">
                                            <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                            <div class="rating review__rating" data-rating-count="2"></div>
                                            <h3 class="dispaly display_size_middle review__name">
                                                Александр
                                            </h3>
                                            <div class="review__date">
                                                28.10.2019
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__part review__part_right">
                                        <div class="review__text">
                                            <p>
                                                Забыла дома обед на работу, меня просто спасла пицца клаб. Очень
                                                вкусная
                                                пицца, доставка всегда вовремя.
                                            </p>
                                        </div>

                                        <div class="review__gallery">
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary2"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary2"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary2"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary2"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- End review-->
                            </li>
                            <li class="reviews__item">
                                <!-- Begin review-->
                                <article class="review">
                                    <div class="review__part review__part_left">
                                        <a href="/" class="logo review__logo">
                                            <img src="img/logo.svg" alt="Л" width="70" height="70" class="logo__img">
                                        </a>
                                        <div class="review__hero">
                                            <!-- В data-rating-count содержится количество звезд для рейтинга -->
                                            <div class="rating review__rating" data-rating-count="2"></div>
                                            <h3 class="dispaly display_size_middle review__name">
                                                Александр
                                            </h3>
                                            <div class="review__date">
                                                28.10.2019
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__part review__part_right">
                                        <div class="review__text">
                                            <p>
                                                Забыла дома обед на работу, меня просто спасла пицца клаб. Очень
                                                вкусная
                                                пицца, доставка всегда вовремя.
                                            </p>
                                        </div>

                                        <div class="review__gallery">
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary3"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary3"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary3"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                            <a href="img/admin/rev.jpg" data-fancybox="gallary3"
                                                class="review__gallery-slide">
                                                <img src="img/admin/rev.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- End review-->
                            </li>
                        </ul>
                    </div>

                    <div class="faq">
                        <h2 class="service-inner__title">
                            Частые вопросы наших пациентов
                        </h2>
                        <div class="accardeon">
                            <div class="accardeon__item">
                                <button class="accardeon__head">
                                    Как проходит лечение?
                                </button>
                                <div class="accardeon__body">
                                    <div class="accardeon__inner-body">
                                        Лечение лимфостаза представляет собой сложную задачу, так как
                                        подразумевает сочетание различных технологий консервативного лечения. В
                                        НПЦ ЛИМФА - мы уже более 20 лет используем комплексную физическую
                                        противоотечную терапию, чтобы помогать пациентам с лимфедемой различной
                                        этиологии.
                                    </div>
                                </div>
                            </div>
                            <div class="accardeon__item">
                                <button class="accardeon__head">
                                    Как проходит лечение?
                                </button>
                                <div class="accardeon__body">
                                    <div class="accardeon__inner-body">
                                        Лечение лимфостаза представляет собой сложную задачу, так как
                                        подразумевает сочетание различных технологий консервативного лечения. В
                                        НПЦ ЛИМФА - мы уже более 20 лет используем комплексную физическую
                                        противоотечную терапию, чтобы помогать пациентам с лимфедемой различной
                                        этиологии.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Begin contact-us -->
                    <div class="contact-us">
                        <img src="img/svg/mess.svg" class="contact-us__mess">
                        <div class="contact-us__text">
                            <strong class="contact-us__label">Не нашли ответа на свой вопрос?</strong>
                            <p>
                                Свяжитесь с нами, и мы предоставим <br>необходимую информацию
                            </p>
                        </div>
                        <div class="contact-us__socials">
                            <div class="contact-us__socials-wrapper">
                                <a href="#" class="contact-us__soc">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="img/symbol_sprite.svg#icon-whats-app"></use>
                                    </svg>
                                </a>
                                <a href="#" class="contact-us__soc">
                                    <svg class="icon" width="40" height="40" viewBox="0 0 40 40">
                                        <use xlink:href="img/symbol_sprite.svg#icon-viber"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="contact-us__message">
                                <span>Отвечаем <br>в течение <br>5 минут</span>
                            </div>
                        </div>
                    </div>
                    <!-- End contact-us -->
                </div>

                <!-- Begin float-block -->
                <div class="float-block float-block_sticky js-sticky-block">
                    <div class="service-feedback">
                        <svg class="icon service-feedback__icon" width="70" height="70" viewBox="0 0 70 70">
                            <use xlink:href="img/symbol_sprite.svg#icon-stethoscope"></use>
                        </svg>
                        <h2 class="service-inner__title service-feedback__title">
                            Запишитесь <br>на прием
                        </h2>
                        <div class="text service-feedback__text">
                            <p>
                                Администатор клиники с радостью ответит на ваши вопросы и запишит к нужному
                                специалисту
                            </p>
                        </div>
                        <button class="btn-fill service-feedback__btn" data-fancybox data-src="#feedback"
                            data-touch="false">
                            Записаться на прием
                        </button>
                    </div>
                </div>
                <!-- End float-block -->
            </div>
        </div>
    </section>

    <section class="contacts-section contacts-section_bg_grey">
        <div class="container">
            <div class="row contacts-section__row">
                <div id="map" class="contacts-section__map"></div>
                <div class="contacts-section__text">
                    <h2 class="display display_size_big contacts-section__title">
                        Контакты
                    </h2>
                    <a href="tel:84912300317" class="contact-phone contacts-section__contact-phone">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="img/symbol_sprite.svg#icon-phone"></use>
                        </svg>
                        +7 (4912) 300‒317
                    </a>

                    <div class="address contacts-section__address">
                        <svg class="icon" width="15" height="20" viewBox="0 0 17 22">
                            <use xlink:href="img/symbol_sprite.svg#icon-pin"></use>
                        </svg>
                        Московский округ, Рязань, <br>Крупской, 25
                    </div>

                    <div class="time contacts-section__time">
                        <svg class="icon" width="14" height="14" viewBox="0 0 16 16">
                            <use xlink:href="img/symbol_sprite.svg#icon-time"></use>
                        </svg>
                        Режим работы -
                        10<sup>00</sup>-&nbsp;23<sup>00</sup>
                    </div>

                    <div class="socials contacts-section__socials">
                        <a href="/" class="socials__item socials__item_vk">
                            <svg class="icon" viewBox="0 0 80 80">
                                <use xlink:href="img/symbol_sprite.svg#icon-vk"></use>
                            </svg>
                        </a>

                        <a href="/" class="socials__item socials__item_inst">
                            <svg class="icon" viewBox="0 0 80 80">
                                <use xlink:href="img/symbol_sprite.svg#icon-inst"></use>
                            </svg>
                        </a>

                        Следите <br>за нашими <br>соц-сетями
                    </div>

                    <button class="btn-fill contacts-section__btn-fill" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
                        Записаться на прием онлайн
                    </button>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Begin review-pop-up -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'feedback.php');?>
<!-- End review-pop-up -->

<?php require (SITE_PATH . DS . 'modules' . DS . 'footer.php');?>