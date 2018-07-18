$(document).ready(function () {

    // best seller owl begin
    $('.latest-deals-product .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 5,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    })
    // best seller owl end
});




