$(function() {
    $('.hero-link').each(function(index) {
        var selector = index + 1;

        $(this).on('mouseenter', function() {
            $('.segment__' + selector).addClass('active');
        });
        $(this).on('mouseleave', function() {
            $('.segment__' + selector).removeClass('active');
        })
    });
});