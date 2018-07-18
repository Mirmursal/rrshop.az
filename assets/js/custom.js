$(document).ready(function () {

    let socket = $(".current-open");

    let content = $(".dropdown-menu");

    let count = 0;

    socket.click(function () {

        if (count % 2) {
            content.addClass("w3-animate-bottom");

        }
        else {
            content.removeClass("w3-animate-bottom");
        }
        count++;
    });


    // owl carousel scripts begin
    $('#mainSlider .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // owl nav editing begin
    var owl = $('#mainSlider .owl-carousel');
    owl.owlCarousel();
    // Go to the next item
    $('#mainSlider  #customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('#mainSlider #customPrevBtn').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
    // owl nav editing end

 
});




