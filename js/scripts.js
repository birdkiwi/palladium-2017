(function () {

})();

window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;

    if (scrolled > 80) {
        document.querySelector('.main-header').classList.add('main-header-shadow');
    } else {
        document.querySelector('.main-header').classList.remove('main-header-shadow');
    }
};

// data-toggle="#news-module" data-toggle-group="sidebar"