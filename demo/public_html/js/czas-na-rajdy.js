$(function(){
    $('#time-table td.hours').mouseover(function(){
        $n = $(this).attr('class').split(' ')[2];
        $('td.'+$n).css('background-color','#678');
    }).mouseout(function(){
        $n = $(this).attr('class').split(' ')[2];
        $('td.'+$n).removeAttr('style');
    });
    $('#time-table td.hours').click(function(){
        hour_toggle(this);
    });
    $('#time-table-summary').html($('td.checked').length);
    
    $('#czas-na-rajdy-submit').click(function(){
        return confirm('Liczba wybranych godzin: '+$('#time-table td.checked').length + '\nNa pewno wysłać?');
    });
    
    $('#time-table-reset').click(function(){
        $('#time-table tbody input').removeAttr('checked');
        $('#time-table td.checked').removeClass('checked');
        $('#time-table-summary').html($('td.checked').length);
        return false;
    })
    $('#time-table-morning').click(function(){
        $('#time-table-reset').click();
        $('#time-table td.hour8').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour9').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour10').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour11').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour12').addClass('checked').children('input').attr('checked','checked');
        $('#time-table-summary').html($('td.checked').length);
        return false;
    })
    $('#time-table-afternoon').click(function(){
        $('#time-table-reset').click();
        $('#time-table td.hour16').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour17').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour18').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour19').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour20').addClass('checked').children('input').attr('checked','checked');
        $('#time-table-summary').html($('td.checked').length);
        return false;
    })
    $('#time-table-evening').click(function(){
        $('#time-table-reset').click();
        $('#time-table td.hour19').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour20').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour21').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour22').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.hour23').addClass('checked').children('input').attr('checked','checked');
        $('#time-table-summary').html($('td.checked').length);
        return false;
    })
    $('#time-table-weekend').click(function(){
        $('#time-table-reset').click();
        $('#time-table td.day6').addClass('checked').children('input').attr('checked','checked');
        $('#time-table td.day7').addClass('checked').children('input').attr('checked','checked');
        $('#time-table-summary').html($('td.checked').length);
        return false;
    })
});

function hour_toggle($hour){
    $($hour).toggleClass('checked');
    if ($($hour).hasClass('checked')){
        $($hour).children('input').attr('checked','checked');
    } else {
        $($hour).children('input').removeAttr('checked');
    }
    $('#time-table-summary').html($('td.checked').length);
}