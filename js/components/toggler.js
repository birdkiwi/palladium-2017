(function( $ ) {
    $.fn.toggler = function() {
        this.each(function() {
            $(this).on('click', function () {
                var toggleTarget = $(this).data('toggle') || $(this).attr('href'),
                    toggleClass = $(this).data('toggle-class') || 'active',
                    toggleGroup = $(this).data('toggle-group');

                console.log(toggleTarget, toggleClass, toggleGroup);

                $('[data-toggle-group="' + toggleGroup + '"]').each(function () {
                    var target = $(this).data('toggle') || $(this).attr('href'),
                        targetClass = $(this).data('toggle-class') || 'active';

                    $(target).removeClass(targetClass);
                    $(this).removeClass(targetClass);
                });

                $(this).addClass(toggleClass);
                $(toggleTarget).addClass(toggleClass);

                return false;
            });
        });

        return this;
    };
}( jQuery ));