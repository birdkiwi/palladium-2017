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
                        Аккордеон

                        <div class="content-block-title-filter">
                            <form action="#">
                                <select style="width: 200px;">
                                    <option value="">За неделю</option>
                                    <option value="1">За день</option>
                                    <option value="2">За месяц</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="accordion-block">
                        <div class="accordion-block-item">
                            <a href="#accordion-1" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Особые правила авиаперелета на Гоа</a>
                            <div id="accordion-1" class="accordion-block-item-content">
                                <p>Уважаемые коллеги! <br> В соответствии с законом №47/2014/QH13 (принят 16.06.14г.), с 1 января 2015 г. будут действовать новые правила въезда во Вьетнам для граждан России. Основные изменения следующие: </p>

                                <p>1. Срок действия загранпаспорта должен будет составлять не менее 6 месяцев (ранее было 3 месяца) на момент въезда в страну.</p>
                                <p>2. Повторное посещение страны без оформления визы, может быть осуществлено не ранее чем через 30 дней, после даты последнего выезда. В случае если этот период меньше 30 дней, то для посещения Вьетнама необходимо будет оформить визу и оплатить визовый сбор.</p>

                                <p>Просим Вас проинформировать Ваших клиентов о данных изменениях и учитывать их в своей работе.</p>
                            </div>
                        </div>
                        <div class="accordion-block-item">
                            <a href="#accordion-2" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Особые правила авиаперелета в Таиланд</a>
                            <div id="accordion-2" class="accordion-block-item-content">
                                Text
                            </div>
                        </div>
                        <div class="accordion-block-item">
                            <a href="#accordion-3" class="accordion-block-item-link" data-toggle data-toggle-group="accordion">Правила въезда во Вьетнам для граждан России</a>
                            <div id="accordion-3" class="accordion-block-item-content">
                                Text
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-columns-right">
                <section style="margin-bottom: 25px;">
                    <div class="content-block">
                        <div class="content-block-title content-block-title-border">
                            Информация
                        </div>
                        <?php include "blocks/sidebar-menu-module.php"; ?>
                        <?php include "blocks/custom-advantages.php"; ?>
                    </div>
                </section>

                <section style="margin-bottom: 25px;">
                    <?php include "blocks/subscribe-module.php"; ?>
                </section>

                <?php include "blocks/join-us-module.php"; ?>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/footer.php"; ?>
<script src="build/scripts.js"></script>
</body>
</html>