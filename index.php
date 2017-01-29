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
    <?php include "blocks/header-slider.php"; ?>

    <div class="wrapper">
        <div class="m-t-md m-b-md">
            <?php include "blocks/countries-block.php"; ?>
        </div>

        <div class="m-b-md">
            <?php include "blocks/baner-block.php"; ?>
        </div>

        <div class="wrapper-columns wrapper-columns-equal m-b-md">
            <div class="wrapper-columns-left">
                <?php include "blocks/specials-block.php"; ?>
            </div>
            <div class="wrapper-columns-right">
                <div class="content-block">
                    <div class="content-block-tabs">
                        <div class="content-block-tabs-item">
                            <a href="#" class="active" data-toggle="#news-module" data-toggle-group="sidebar">Новости</a>
                        </div>
                        <div class="content-block-tabs-item">
                            <a href="#" data-toggle="#important-module" data-toggle-group="sidebar">Важно</a>
                        </div>
                    </div>
                    <div id="news-module" class="content-block-tab-container active">
                        <?php include "blocks/news-module.php"; ?>
                    </div>
                    <div id="important-module" class="content-block-tab-container">
                        important
                    </div>
                    <?php include "blocks/custom-advantages.php"; ?>
                </div>
            </div>
        </div>

        <div class="wrapper-columns" style="margin-bottom: 25px;">
            <div class="wrapper-columns-left">
                <?php include "blocks/best-offers-block.php"; ?>
            </div>
            <div class="wrapper-columns-right" style="display: flex; flex-direction: column;">
                <section style="flex: 0 1 auto; display: flex; flex-direction: column; padding-bottom: 10px;">
                    <?php include "blocks/subscribe-module.php"; ?>
                </section>
                <section style="flex: 1 1 auto; display: flex; flex-direction: column;">
                    <?php include "blocks/join-us-module.php"; ?>
                </section>
            </div>
        </div>
    </div>
</main>

<?php include "blocks/logo-module.php"; ?>
<?php include "blocks/feedback-block.php"; ?>
<?php include "footer.php"; ?>
<script src="build/scripts.js"></script>
</body>
</html>