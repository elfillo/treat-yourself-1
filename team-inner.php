<?php
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта
?>


<!-- Begin header -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'header.php');?>
<!-- End header -->

<main class="main-content">

    <section class="team-inner">
        <div class="container">

            <!-- Begin breadcrumb-->
            <ul class="breadcrumb team-inner__breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    <a href="/team.html" class="breadcrumb__link">
                        Врачи
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Иванова Мария Ивановна
                </li>
            </ul>
            <!-- End breadcrumb-->

            <div class="row team-inner__row">
                <div class="doctor-info team-inner__doctor-info">
                    <h2 class="display display_size_big doctor-info__name">
                        Иванова Мария Ивановна
                    </h2>
                    <div class="text doctor-info__position">
                        Врач лимфолог
                    </div>
                    <div class="doctor-info__desc">
                        <div class="doctor-info__education">
                            <h2 class="doctor-info__education-name">
                                Образовние
                            </h2>
                            <p class="text doctor-info__text">
                                Обучался у специалистов Foeldi Klinik <br>и Sharite Klinik (Германия)
                            </p>
                        </div>
                        <div class="doctor-info__education">
                            <h2 class="doctor-info__education-name">
                                Интернатура / Ординатура
                            </h2>
                            <p class="text doctor-info__text">
                                Обучался у специалистов Foeldi Klinik <br>и Sharite Klinik (Германия)
                            </p>
                        </div>
                        <div class="doctor-info__education">
                            <h2 class="doctor-info__education-name">
                                Дополнительное образование
                            </h2>
                            <p class="text doctor-info__text">
                                Обучался у специалистов Foeldi Klinik <br>и Sharite Klinik (Германия)
                            </p>
                        </div>
                        <h2 class="doctor-info__education-name doctor-info__education-name_sertificate">
                            Сертификаты 
                        </h2>
                        <div class="swiper-container doctor-info__sertifaicate-list">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="img/admin/sertificate.png" class="doctor-info__sertifaicate"
                                        data-fancybox="gallery">
                                        <img src="img/admin/sertificate.png" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="img/admin/sertificate.png" class="doctor-info__sertifaicate"
                                        data-fancybox="gallery">
                                        <img src="img/admin/sertificate.png" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="img/admin/sertificate.png" class="doctor-info__sertifaicate"
                                        data-fancybox="gallery">
                                        <img src="img/admin/sertificate.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn-fill doctor-info__btn" data-options='{"touch" : false}'
                            data-fancybox data-src="#feedback">
                            Записаться на прием онлайн
                        </button>
                    </div>
                </div>
                <div class="doctor-avatar team-inner__doctor-avatar js-sticky-doctor-avatar">
                    <img src="img/admin/doctor.png" alt="">
                </div>
            </div>

        </div>
    </section>

</main>

<!-- Begin review-pop-up -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'feedback.php');?>
<!-- End review-pop-up -->

<?php require (SITE_PATH . DS . 'modules' . DS . 'footer.php');?>