<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1170">
    <title>Palladium</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="build/style.min.css">
</head>
<body>

<?php include "blocks/header.php"; ?>

<main class="main-content">
    <?php include "blocks/header-search-block.php"; ?>

    <div class="wrapper">
        <div class="wrapper-columns" style="margin-top: 25px; margin-bottom: 25px;">
            <div class="wrapper-columns-left">
                <div class="content-block shadow-block">
                    <div class="content-block-title content-block-title-border">
                        Контакты

                        <div class="content-block-title-filter">
                            <form action="#">
                                <select style="width: 200px;">
                                    <option value="">Выбрать город</option>
                                    <option value="1">Новосибирск</option>
                                    <option value="2">Москва</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="content-block-title content-block-title-secondary">
                        Мы находимся по адресу:
                    </div>

                    <div class="content-block-padding">
                        <div class="contacts-page-maps">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="contacts-page-maps-padding">
                                        <div class="m-b-md">
                                            <div class="contacts-page-maps-title">
                                                г. Новосибирск
                                            </div>
                                            <div class="contacts-page-maps-title">
                                                ул. Урицкого, д. 36
                                            </div>
                                        </div>

                                        <div class="m-b-md">
                                            <div class="contacts-page-maps-title">
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                т. (383) 383-25-25
                                            </div>
                                            <div class="contacts-page-maps-title">
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="mailto:info@pd46.ru">info@pd46.ru</a>
                                            </div>
                                        </div>

                                        <div class="m-b-md">
                                            <div style="color: #707070; margin-bottom: 5px;">
                                                Режим работы
                                            </div>
                                            ежедневно c 9:00 до 18:00, вс. -выходной
                                        </div>

                                        <div style="color: #707070; margin-bottom: 5px;">
                                            Почтовую корреспонденцию направлять по адресу:
                                        </div>
                                        630004, г. Новосибирск. Ул. Урицкого, 36
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <iframe src="https://api-maps.yandex.ru/frame/v1/-/CVTpZCID" width="100%" height="310" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include "blocks/feedback-accordion-module.php"; ?>

                    <div class="content-block-title content-block-title-border content-block-title-secondary">
                        Контакты отделов
                    </div>

                    <div class="accordion-block">
                        <div class="accordion-block-item">
                            <a href="#accordion-1" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Отдел рекламы и маркетинга</a>
                            <div id="accordion-1" class="contacts-page-departments">
                                <div class="contacts-page-departments-item">
                                    <div class="contacts-page-departments-item-title">
                                        Бронирование туров
                                    </div>

                                    <table class="contacts-page-departments-table">
                                        <tr>
                                            <td style="width: 35%">
                                                Иванова Мария
                                            </td>
                                            <td style="width: 31%">
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="#">mariah-bron@pd46.ru</a>
                                            </td>
                                            <td>
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                345-67-89 доб 103,  456-78-90
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Петрова Наталья
                                            </td>
                                            <td>
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="#">natali-charter@pd46.ru</a>
                                            </td>
                                            <td>
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                345-67-89 доб 103
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Длиннофамильная Оксана
                                            </td>
                                            <td>
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="#">oxana-visa@pd46.ru</a>
                                            </td>
                                            <td>
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                345-67-89 доб 103
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="contacts-page-departments-item">
                                    <div class="contacts-page-departments-item-title">
                                        Билеты на чартер
                                    </div>

                                    <table class="contacts-page-departments-table">
                                        <tr>
                                            <td style="width: 33%">
                                                Петрова Наталья
                                            </td>
                                            <td style="width: 33%">
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="#">mariah-bron@pd46.ru</a>
                                            </td>
                                            <td>
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                345-67-89 доб 103
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="contacts-page-departments-item">
                                    <div class="contacts-page-departments-item-title">
                                        Визовые вопросы
                                    </div>

                                    <table class="contacts-page-departments-table">
                                        <tr>
                                            <td style="width: 33%">
                                                Петрова Наталья
                                            </td>
                                            <td style="width: 33%">
                                                <?php include "images/icon-email-blue.svg"; ?>
                                                <a href="#">mariah-bron@pd46.ru</a>
                                            </td>
                                            <td>
                                                <?php include "images/icon-phone-magenta-2.svg"; ?>
                                                345-67-89 доб 103
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-block-item">
                            <a href="#accordion-2" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Отдел бронирования</a>
                            <div id="accordion-2" class="accordion-block-item-content">
                                Test
                            </div>
                        </div>
                        <div class="accordion-block-item">
                            <a href="#accordion-3" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Финансовый отдел</a>
                            <div id="accordion-3" class="accordion-block-item-content">
                                Test
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-columns-right">
                <div class="m-b-md">
                    <div class="content-block">
                        <div class="content-block-title">
                            Информация
                        </div>
                        <?php include "blocks/sidebar-menu-module.php"; ?>
                        <?php include "blocks/custom-advantages.php"; ?>
                    </div>
                </div>

                <div class="m-b-md">
                    <?php include "blocks/subscribe-module.php"; ?>
                </div>

                <div class="m-b-md">
                    <?php include "blocks/join-us-module.php"; ?>
                </div>

                <div class="anner m-b-md" style="height: 200px;">
                    Banner
                </div>
                <div class="anner m-b-md" style="height: 200px;">
                    Banner
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>
<script src="build/scripts.js"></script>
</body>
</html>