$(function() {
    $('.hero-link').each(function(index) {
        var selector = index + 1;

        $(this).on('mouseenter', function() {
            $('.home.segment__' + selector).addClass('active');
        });
        $(this).on('mouseleave', function() {
            $('.home.segment__' + selector).removeClass('active');
        })
    });

    $('.small-graphic').each(function(index) {
        var selector = index + 1;
        var segment = $(this).find('.segment__' + selector);
        segment.addClass('active');
    });
});