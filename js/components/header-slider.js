(function() {
    var headerSlider = $('.js-header-slider').bxSlider({
        infiniteLoop: true,
        pager: false,
        controls: false
    });

    $('.js-header-slider-next').click(function(){
        headerSlider.goToNextSlide();
        return false;
    });

    $('.js-header-slider-prev').click(function(){
        headerSlider.goToPrevSlide();
        return false;
    });

    $(window).resize(function(){
        headerSlider.reloadSlider();
    });
})();