$(document).ready(function(){
    $('body').append(
        '<div id="verstka" style="position: fixed; top: 40%; right: 0; background: #fff; border: 1px solid #cecece; box-shadow: 2px 3px 10px #808080; padding: 15px; z-index: 999;"><span  id="close" style="cursor:pointer; border: 1px solid #cecece;">X</span> Страницы верстки:<br />' +
        '1. √ <a href="index.php">Главная</a><br />' +
        '2. √ <a href="static-page.php">Статичная страница</a><br />' +
        '3. √ <a href="news-page.php">Новости</a><br />' +
        '4. √ <a href="specials-page.php">Акции</a><br />' +
        '5. √ <a href="accordion-page.php">Аккордеон</a><br />' +
        '6. √ <a href="contacts-page.php">Контакты</a><br />' +
        '404. √ <a href="404.php">404</a><br />' +
        '</div>');
    $('#close').click(function(e) {
        $('#verstka').hide();
        e.preventDefault();
    });
});