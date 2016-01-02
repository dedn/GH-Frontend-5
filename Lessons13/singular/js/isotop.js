$(document).ready(function() {
    $('ul.filter a').click(function() {
        $(this).css('outline','none');
        $('ul.filter .is-checked').removeClass('is-checked');
        $(this).parent().addClass('is-checked');

        var filterVal = $(this).text().toLowerCase().replace(' ','-');

        if(filterVal == 'is-checked') {
            $('ul.grid li.work-item').fadeIn('slow').removeClass('work-item');
        } else {

            $('ul.grid li').each(function() {
                if(!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('work-item');
                } else {
                    $(this).fadeIn('slow').removeClass('work-item');
                }
            });
        }

        return false;
    });
});
