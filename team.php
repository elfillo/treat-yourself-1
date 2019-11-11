<?php
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта
?>


<!-- Begin header -->
<?php require (SITE_PATH . DS . 'modules' . DS . 'header.php');?>
<!-- End header -->

<main class="main-content">
    <section class="team-section team-section_page">
        <div class="container">

            <!-- Begin breadcrumb -->
            <ul class="breadcrumb">
                <li class="breadcrumb__item">
                    <a class="breadcrumb__link" href="/">
                        Главная
                    </a>
                </li>
                <li class="breadcrumb__item">
                    Врачи
                </li>
            </ul>
            <!-- End breadcrumb -->


            <h2 class="display display_size_big team-section__title">
                Лучшие врачи Рязани
            </h2>
            <p class="text team-section__text">
                Попасть в нашу команду могут только лучшие специалисты с многолетней практикой и доказанным
                опытом. <br>Наши врачи не только лечат. Они помогают сохранить здоровье и находят подход и ко
                всем пациентам.
            </p>

            <ul class="row team-section__body">
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
                <li class="team-section__item">
                    <a href="team-inner.php" class="doctor-card">
                        <div class="doctor-card__thumb">
                            <img src="img/admin/doctor.png" width="266" height="345" alt="Иванова Мария Ивановна">
                        </div>
                        <h3 class="doctor-card__name">
                            Иванова Мария Ивановна
                        </h3>
                        <div class="doctor-card__desc">
                            Стаж работы более 40 лет <br>
                            Врач лимфолог
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </section>
</main>


<?php require (SITE_PATH . DS . 'modules' . DS . 'footer.php');?>