'use strict';

$(document).ready(function()
{
    var slideshow = $('#slideshow > .owl-carousel').owlCarousel({
        stagePadding: 0,
        items: 3,
        margin: 5,
        nav: false,
        dots: false,
        autoplay: false,
        rewind: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
        }
    });

    $('[data-action="prev_slideshow"]').on('click', function()
    {
        slideshow.trigger('prev.owl.carousel');
    });

    $('[data-action="next_slideshow"]').on('click', function()
    {
        slideshow.trigger('next.owl.carousel');
    });
});
