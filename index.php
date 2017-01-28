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
<?php include "blocks/header-slider.php"; ?>

<main>
    <div class="wrapper">
        <?php include "blocks/countries-block.php"; ?>

        <section style="margin-bottom: 25px;">
            <?php include "blocks/baner-block.php"; ?>
        </section>

        <div class="wrapper-columns" style="margin-bottom: 25px;">
            <div class="wrapper-columns-left">
                <?php include "blocks/specials-block.php"; ?>
            </div>
            <div class="wrapper-columns-right">
                <div class="content-block">
                    <div class="content-block-tabs">
                        <div class="content-block-tabs-item content-block-tabs-item-active">
                            <a href="#" data-toggle="#news-module" data-toggle-group="sidebar">Новости</a>
                        </div>
                        <div class="content-block-tabs-item">
                            <a href="#" data-toggle="#news-module" data-toggle-group="sidebar">Важно</a>
                        </div>
                    </div>
                    <div id="news-module">
                        <?php include "blocks/news-module.php"; ?>
                    </div>
                    <?php include "blocks/custom-advantages.php"; ?>
                </div>
            </div>
        </div>

        <div class="wrapper-columns" style="margin-bottom: 25px;">
            <div class="wrapper-columns-left">
                <?php include "blocks/best-offers-block.php"; ?>
            </div>
            <div class="wrapper-columns-right">
                <section style="margin-bottom: 15px;">
                    <?php include "blocks/subscribe-module.php"; ?>
                </section>

                <?php include "blocks/join-us-module.php"; ?>
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