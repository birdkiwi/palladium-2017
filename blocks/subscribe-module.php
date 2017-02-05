<div class="content-block shadow-block subscribe-module">
    <div class="content-block-title content-block-title-border subscribe-module-title">
        <?php include "images/icon-email-magenta.svg"; ?>
        <span class="tt-uppercase">Подписка</span>
    </div>

    <form action="#" method="POST" class="subscribe-module-form">
        <div class="subscribe-module-subtitle">
            На рассылку важных новостей
        </div>
        <label>
            <select name="type">
                <option value="1">Агентство</option>
                <option value="2">Агентство</option>
                <option value="3">Агентство</option>
            </select>
        </label>

        <label>
            Ваш e-mail
            <input type="email" name="email">
        </label>

        <label>
            Регион
            <input type="text" name="region">
        </label>

        <button type="submit">
            <?php include "images/icon-paperplane-white.svg"; ?>
            Подписаться
        </button>
    </form>
</div>