$(document).ready(function () {

    // scrool top begin
    $(window).scroll(function () {

        // scrool check scroolTop here
        if ($(this).scrollTop() > 100) {
            $('.scroll_top').css("display", "block");
        }
        else {
            $('.scroll_top').css("display", "none");
        }

        // scrool click event here
        $('.scroll_top').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    })
    // scrolltop end


});




