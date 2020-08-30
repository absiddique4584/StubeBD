$(function () {

    showHideNav();

    $(window).scroll(function () {

        // show/hide nav on window's scroll
        showHideNav();
    });


    function showHideNav() {

        if ($(window).scrollTop() > 100) {
            $('nav.navbar').addClass('sticky');
            $(".bottomTotop_button").fadeIn();
        } else {
            $('nav.navbar').removeClass("sticky");
            $(".bottomTotop_button").fadeOut();
        }
    }


});

$(function () {

    $("a.smooth_scroll").click(function (event) {

        event.preventDefault();

        // get section id like #about, #servcies, #work, #team and etc.
        var section_id = $(this).attr("href");

        $("html, body").animate({
            scrollTop: $(section_id).offset().top - 64
        }, 1000, "easeInOutExpo")
    });

});


$(function () {

    $("a.nav_mobile_link").click(function (event) {
        event.preventDefault();

        var section_id = $(this).attr("href");

        $("html, body").animate({
            scrollTop: $(section_id).offset().top
        }, 1000, "easeInOutExpo")

        $('a.nav_mobile_link').removeClass('active');
        $(this).addClass('active');

    });

})

// Mobile Navbar Toggle Button

$(document).ready(function () {
    $(".mobile_toggle").click(function () {
        $(".mobile_navbar").toggleClass("mobile_navbar_show")
        $(".mobile_nav").toggleClass("mobile_nav_show")
        $(".mobile_nav").addClass("mobile_nav_show")
        $("span.bar_1").toggleClass("bar_roted_1")
        $("span.bar_2").toggleClass("bar_roted_2")
        $("span.bar_3").toggleClass("bar_roted_3")
    })
    $("a.nav_mobile_link").click(function () {
        $(".mobile_navbar").removeClass("mobile_navbar_show")
        $(".mobile_nav").removeClass(".mobile_nav_show")
        $("span.bar_1").toggleClass("bar_roted_1")
        $("span.bar_2").toggleClass("bar_roted_2")
        $("span.bar_3").toggleClass("bar_roted_3")
    });

    $(".modal_closs_btn").click(function () {
        $(".video_model").removeClass("video_model_show");
    })
    $(".presentation_btn").click(function () {
        $(".video_model").addClass("video_model_show");
    })
    $(".like").click(function () {
        $("span.like_icon").toggleClass("active");
    })
});