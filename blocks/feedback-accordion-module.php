<div class="feedback-accordion-module">
    <a href="#feedback-accordion" data-toggle data-toggle-group="accordion" class="content-block-title content-block-title-border content-block-title-secondary feedback-accordion-module-title">
        Обратная связь
    </a>

    <form id="feedback-accordion" class="feedback-accordion-module-form" action="#" method="POST">
        <div class="content-block-padding">
            <div class="row">
                <div class="col-xs-4">
                    <div class="feedback-accordion-module-control">
                        <label>Ваше имя</label>
                        <input type="text" name="name" required class="feedback-accordion-module-input">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="feedback-accordion-module-control">
                        <label>Номер телефона</label>
                        <input type="text" name="phone" class="feedback-accordion-module-input">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="feedback-accordion-module-control">
                        <label>Электронная почта</label>
                        <input type="email" name="email" class="feedback-accordion-module-input">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="feedback-accordion-module-control">
                        <label>Текст сообщения</label>
                        <textarea name="message" required class="feedback-accordion-module-input"></textarea>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="feedback-accordion-module-submit-wrap">
                        <div class="feedback-accordion-module-submit-desc">
                            Мы свяжемся с вами, максимум, в течении 15 минут <br>
                            с момента отправки сообщения
                        </div>

                        <button type="submit" class="feedback-accordion-module-submit-btn">
                            <?php include "images/icon-paperplane-white.svg";?>
                            Отправить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

