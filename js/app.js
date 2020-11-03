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

    $('.portfolio-grid').slick({
        arrows: true,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
});