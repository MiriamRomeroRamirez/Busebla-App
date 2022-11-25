jQuery('document').ready(function ($) {
    var menub = $('.menu-icon'),
        menu = $('.navigation ul');

    menub.click(function () {

        if (menu.hasClass('show')) {
            menu.removeClass('show');
        }
        else {
            menu.addClass('show');
        }
    });
});