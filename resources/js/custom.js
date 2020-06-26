// Basic initialization is like this:
// $('.your-class').slick();

// I added some other properties to customize my slider
// Play around with the numbers and stuff to see
// how it works.



var $st = $('.pagination');
var $slickEl = $('.center');

$slickEl.slick({
    // centerMode: true,
    slidesToShow: 4,
    dots: false,
    infinite: true,
    nextArrow: $(".next"),
    prevArrow :$(".prev"),
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});


