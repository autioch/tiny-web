$(function() {

    /* expandable tables */
    $('table').wrap('<div/>').before('<div class="toggle-button" >&gt;&gt;&gt;</div>').after('<div>&nbsp;</div>');
    $('table').hide();
    $('.toggle-button').click(function() {
        $(this).next().fadeToggle();
        return false;
    });

    var w = $(window), hm = $('#header-menu'), sm = $('#layout-side-menu>ul'), lh = $('#layout-header');

    w.on('scroll', menu_check).on('resize', menu_check);

    /* TODO rewrite that shit */
    function menu_check() {
        if ((w.width() > 960) && (w.width() < 1440) && (w.height() > 300) && (w.scrollTop() > lh.outerHeight())) {
            $('#header-menu-container').css('height', hm.height());
            hm.addClass('header_menu_fixed');
            sm.addClass('side_menu_fixed');
        } else {
            $('#header-menu-container').removeAttr('style');
            hm.removeClass('header_menu_fixed');
            sm.removeClass('side_menu_fixed');
        }
    }

    menu_check();


});
