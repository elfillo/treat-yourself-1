<?php
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта
?>


<!-- Begin header -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'header.php');?>
<!-- End header -->

<!-- Begin content-->
<main class="main-content">
    <section class="reviews reviews_page">
        <div class="container">

            <!-- Begin breadcrumb-->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Отзывы
                </li>
            </ul>
            <!-- End breadcrumb-->

            <h2 class="dispaly display_size_big reviews__title">
                Отзывы наших пациентов
            </h2>

            <div class="row reviews__row">
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
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary1"
                                        class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary1" class="review__gallery-slide">
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
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary2"
                                        class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary2" class="review__gallery-slide">
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
                                        Забыла дома обед на работу, меня просто спасла пицца клаб. Очень вкусная
                                        пицца, доставка всегда вовремя.
                                    </p>
                                </div>

                                <div class="review__gallery">
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="https://youtu.be/ioHHSinB_Bw" data-fancybox="gallary3"
                                        class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                    <a href="img/admin/rev.jpg" data-fancybox="gallary3" class="review__gallery-slide">
                                        <img src="img/admin/rev.jpg">
                                    </a>
                                </div>
                            </div>
                        </article>
                        <!-- End review-->
                    </li>
                </ul>

                <div class="float-block float-block_sticky js-sticky-block">
                    <div class="leave-review">
                        <div class="leave-review__icon">
                            <img src="img/svg/icon-rev.svg" width="39" height="44">
                        </div>
                        <h3 class="dispaly display_size_middle leave-review__title">
                            Оставьте ваш отзыв
                        </h3>
                        <p class="leave-review__text">
                            Нам важен каждый отзыв. <br>Ведь именно Вы делаете нас лучше.
                        </p>
                        <button class="btn-fill leave-review__btn-fill" data-options='{"touch" : false}'
                            data-fancybox data-src="#review-pop-up">
                            Оставить отзыв
                        </button>
                    </div>
                </div>


            </div>
    </section>
</main>
<!-- End content-->

<!-- Begin review-pop-up -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'feedback.php');?>
<!-- End review-pop-up -->

<!-- Begin review-pop-up -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'rewiewPopUp.php');?>
<!-- End review-pop-up -->

<?php require (SITE_PATH . DS . 'modules' . DS . 'footer.php');?>