<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1170">
    <title>Palladium</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="build/style.min.css">
</head>
<body>

<?php include "header.php"; ?>

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

                    Тест
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

<?php include "footer.php"; ?>
<script src="build/scripts.js"></script>
</body>
</html>