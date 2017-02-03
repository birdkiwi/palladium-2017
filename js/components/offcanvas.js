(function() {
    $.fn.offcanvasToggler = function () {
        function hideEvent(e, closestEl, hideFunc) {
            if(!$(e.target).closest(closestEl).length) {
                hideFunc();
                $(document).off('click', 'body', hideEvent);
            }
        }

        this.each(function () {
            $(this).on('click', function () {
                var offcanvas = '.main-offcanvas';

                function show() {
                    $('.js-offcanvas-toggle, ' + offcanvas).addClass('active');

                    $(document).on('click', 'body', function (e) {
                        hideEvent(e, offcanvas, hide);
                    });
                }

                function hide() {
                    $('.js-offcanvas-toggle, ' + offcanvas).removeClass('active');
                }

                if ($(this).hasClass('active')) {
                    hide();
                } else {
                    show();
                }

                return false;
            });
        });
    }
})();