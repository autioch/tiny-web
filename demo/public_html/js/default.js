$(function() {
    /* Responsive menu */
    $("#menu").tinyNav({header: 'M e n u'});

    /* Banner - link */
    $('#banner-image').on('click', function() {
        document.location.href = '/';
    }).css('cursor', 'pointer');
    /* Progress summary */
    $('.progress-table').each(function() {
        var t = $(this);
        t.find('td.sum_boss').html(t.find('tbody>tr').length);
        t.find('td.sum_n10').html(t.find('.n10>.ok').length);
        t.find('td.sum_h10').html(t.find('.h10>.ok').length);
        t.find('td.sum_n25').html(t.find('.n25>.ok').length);
        t.find('td.sum_h25').html(t.find('.h25>.ok').length);
    });

    /* Theme changing */
    $('#theme-selector')
            .val(decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent('qbtheme').replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || 'alliance')
            .on('change', function() {
                document.cookie = encodeURIComponent('qbtheme') + "=" + encodeURIComponent($(this).val()) + '; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
                location.reload();
            });

    /* Language changing */
    $('#lang-selector')
            .val(decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent('qblang').replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || 'en')
            .on('change', function() {
                document.cookie = encodeURIComponent('qblang') + "=" + encodeURIComponent($(this).val()) + '; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';
                document.location.href = '/' + $(this).val();
            });

    $('.recruitment-table>tbody>tr').each(function() {
        /*$(this).addClass(($(this).children('td.need').length==0) ? 'pass' : 'need');*/
        if ($(this).children('td.recruit-need').length === 0) {
            $(this).css('display', 'none');
        }
    });

    /* Recruit form nick validation */
    var source = $('#form-recruitment-nick');
    var log = source.parent().next().children();
    source.blur(function() {
        log.html('Czekaj...');
        $.getJSON(window.recruitUrl + $('#form-recruitment-nick').val(), function(data) {
            log.html('Przetwarzam dane... ' + data);
            /*     $.each(data, function(key, val) {
             $('#form-recruitment-'+ key).val(val);
             //items.push('<li id="' + key + '">' + val + '</li>');
             });*/
            log.html(data.status);
        });
    });

    /* Raid groups summary */
    $('.raid-group').each(function() {
        for (var c in window.wowClasses) {
            $(this).find('.sum.' + window.wowClasses[c]).html($(this).find('a.' + window.wowClasses[c]).length);
        }
    });

    $('.sum').each(function() {
        switch (parseInt($(this).html())) {
            case 0:
                $col = '#b00';
                break;
            case 1:
                $col = '#0b0';
                break;
            default:
                $col = '#bb0';
                break;
        }
        $(this).css('color', $col);
    });


});