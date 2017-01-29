<div class="tour-search-block">
    <div class="wrapper">
        <div class="tour-search-block-tabs">
            <a href="#tour-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item active">
                <img src="images/icon-search-tours.png" alt="">
                Туры
            </a>
            <a href="#ticket-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item">
                <img src="images/icon-search-tickets.png" alt="">
                Билеты
            </a>
            <a href="#hotel-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item">
                <img src="images/icon-search-hotels.png" alt="">
                Отели
            </a>
            <a href="#" class="tour-search-block-tabs-item tour-search-block-tabs-item-client">
                <?php include "images/icon-double-arrows-right-white.svg"; ?>
                Поиск для частных клиентов
            </a>
        </div>
        <form id="tour-search" action="#" method="post" class="tour-search-block-form active">
            <div>
                <label>Откуда</label>
                <select name="from">
                    <option value="1">Москва</option>
                    <option value="2">Новосибирск</option>
                    <option value="3">Омск</option>
                </select>
            </div>
            <div>
                <label>Куда</label>
                <select name="where">
                    <option value="1">Москва</option>
                    <option value="2">Новосибирск</option>
                    <option value="3">Омск</option>
                </select>
            </div>
            <div>
                <label>Когда</label>
                <input type="text" name="date">
            </div>
            <div>
                <label>Ночей</label>
                <input type="text" name="nights">
            </div>
            <div>
                <label>Категория</label>
                <select name="category">
                    <option value="1">1 *</option>
                    <option value="2">2 *</option>
                </select>
            </div>
            <div>
                <label>Человек</label>
                <input type="text" name="persons">
            </div>
            <div>
                <label>&nbsp;</label>
                <button type="submit" class="tour-search-block-form-submit">
                    <?php include "images/icon-tour-search-white.svg"; ?>
                </button>
            </div>
        </form>
        <form id="ticket-search" action="#" method="post" class="tour-search-block-form">
            <div>
                <label>Откуда</label>
                <select name="from">
                    <option value="1">Москва</option>
                    <option value="2">Новосибирск</option>
                    <option value="3">Омск</option>
                </select>
            </div>
        </form>
        <form id="hotel-search" action="#" method="post" class="tour-search-block-form">
            <div>
                <label>Откуда</label>
                <select name="from">
                    <option value="1">Москва</option>
                    <option value="2">Новосибирск</option>
                    <option value="3">Омск</option>
                </select>
            </div>
        </form>
    </div>
</div>