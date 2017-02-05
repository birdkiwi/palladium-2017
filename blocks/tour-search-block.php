<div class="tour-search-block">
    <div class="wrapper">
        <div class="tour-search-block-tabs">
            <a href="#tour-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item active">
                <span class="tour-search-block-tabs-item-icon tour-search-block-tabs-item-icon-tours"></span>
                Туры
            </a>
            <a href="#ticket-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item">
                <span class="tour-search-block-tabs-item-icon tour-search-block-tabs-item-icon-tickets"></span>
                Билеты
            </a>
            <a href="#hotel-search" data-toggle data-toggle-group="tour-search" class="tour-search-block-tabs-item">
                <span class="tour-search-block-tabs-item-icon tour-search-block-tabs-item-icon-hotels"></span>
                Отели
            </a>
            <a href="#" class="tour-search-block-tabs-item tour-search-block-tabs-item-client">
                <?php include "images/icon-double-arrows-right-white.svg"; ?>
                Поиск для частных клиентов
            </a>
        </div>
        <form id="tour-search" action="#" method="post" class="tour-search-block-form active">
            <div class="tour-search-block-form-control">
                <label>Откуда</label>
                <div class="custom-select">
                    <select name="from">
                        <option value="1">Москва</option>
                        <option value="2">Новосибирск</option>
                        <option value="3">Омск</option>
                    </select>
                </div>
            </div>
            <div class="tour-search-block-form-control">
                <label>Куда</label>
                <div class="custom-select">
                    <select name="where">
                        <option value="1">Москва</option>
                        <option value="2">Новосибирск</option>
                        <option value="3">Омск</option>
                    </select>
                </div>
            </div>
            <div class="tour-search-block-form-control">
                <label>Когда</label>
                <input type="text" name="date" class="tour-search-block-form-control-input tour-search-block-form-control-input-date js-tour-search-date">
            </div>
            <div class="tour-search-block-form-control">
                <label>Ночей</label>
                <input type="text" name="nights" class="tour-search-block-form-control-input tour-search-block-form-control-input-nights">
            </div>
            <div class="tour-search-block-form-control">
                <label>Категория</label>
                <div class="custom-select">
                    <select name="category">
                        <option value="1">1 *</option>
                        <option value="2">2 *</option>
                    </select>
                </div>
            </div>
            <div class="tour-search-block-form-control">
                <label>Человек</label>
                <input type="text" name="persons" class="tour-search-block-form-control-input tour-search-block-form-control-input-persons">
            </div>
            <div class="tour-search-block-form-control">
                <label>&nbsp;</label>
                <button type="submit" class="tour-search-block-form-submit">
                    <?php include "images/icon-tour-search-white.svg"; ?>
                </button>
            </div>
        </form>
        <form id="ticket-search" action="#" method="post" class="tour-search-block-form">
            <div class="tour-search-block-form-control">
                <label>Откуда</label>
                <div class="custom-select">
                    <select name="from">
                        <option value="1">Москва</option>
                        <option value="2">Новосибирск</option>
                        <option value="3">Омск</option>
                    </select>
                </div>
            </div>
        </form>
        <form id="hotel-search" action="#" method="post" class="tour-search-block-form">
            <div class="tour-search-block-form-control">
                <label>Откуда</label>
                <div class="custom-select">
                    <select name="from">
                        <option value="1">Москва</option>
                        <option value="2">Новосибирск</option>
                        <option value="3">Омск</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="tour-search-block-news">
            <a href="#" class="tour-search-block-news-item">
                <div class="tour-search-block-news-item-label">
                    от 12 000р.
                </div>
                <div class="tour-search-block-news-item-title">
                    Анонсы
                </div>
                Новый тур в Доминикану с 31 марта
            </a>
            <a href="#" class="tour-search-block-news-item">
                <div class="tour-search-block-news-item-title">
                    Новости
                </div>
                Открыт офис продаж в Екатеринбурге
            </a>
            <a href="#" class="tour-search-block-news-item">
                <div class="tour-search-block-news-item-label">
                    от 12 000р.
                </div>
                <div class="tour-search-block-news-item-title">
                    Акции
                </div>
                Тур в Тунис с 5 мая с 30% скидкой успейте приобрести
            </a>
        </div>
    </div>
</div>