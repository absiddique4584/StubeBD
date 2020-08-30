$(window).on('load', function () { // makes sure that whole site is loaded
    $('.status').fadeOut();
    $('.preloader').delay(350).fadeOut('slow');
});




$(function () {

    showHideNav();

    $(window).scroll(function () {

        // show/hide nav on window's scroll
        showHideNav();
    });


    function showHideNav() {

        if ($(window).scrollTop() > 50) {
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

$(window).scroll(function () {
    var hT = $('#skill-bar-wrapper').offset().top,
        hH = $('#skill-bar-wrapper').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT + hH - 1.4 * wH)) {
        jQuery(document).ready(function () {
            jQuery('.skillbar-container').each(function () {
                jQuery(this).find('.skills').animate({
                    width: jQuery(this).attr('data-percent')
                }, 5000); // 5 seconds
            });
        });
    }
});


$(document).ready(function () {

    $(".all_team_members").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 15,
        dots: false,
        responsive: {

            320: {
                items: 1
            },
            768: {
                items: 3
            },
            769: {
                items: 4
            }
        }
    });


    // Client Js

    $(".all_client_items").owlCarousel({
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        responsive: {

            320: {
                items: 1
            },
            768: {
                items: 1
            },
            769: {
                items: 2
            }
        }
    });

    // Happy Client Js
    $(".happy_clients").owlCarousel({
        items: 7,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        smartSpeed: 2000,
        margin: 10,
        dots: false,
        responsive: {

            320: {
                items: 4
            },
            768: {
                items: 6
            },
            769: {
                items: 9
            }
        }
    });

});


// CounterUp Js

$(function () {

    $(".counter").counterUp({
        delay: 10,
        time: 2000
    });

});


$(document).ready(function () {
    $('.image-link').magnificPopup({
        type: 'image',
        closeOnBgClick: true,
        mainClass: 'mfp-with-zoom',

        zoom: {
            enabled: true,
            duration: 600,
            easing: 'ease-in-out',
        },
        gallery: {
            enabled: true
        }

    });
});


/* =========================================
              Google Map
============================================ */
$(window).on('load', function () {

    // Map Variables
    var addressString = 'DC Road, Chawkbazar, Chittagong, Bangladesh';
    var myLatlng = {
        lat: 22.3517652,
        lng: 91.8381634
    };

    // 1. Render Map
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: myLatlng
    });

    // 2. Add Marker
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: "Click To See Address"
    });

    // 3. Add Info Window
    var infowindow = new google.maps.InfoWindow({
        content: addressString
    });

    // Show info window when user clicks marker
    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });

    // 4. Resize Function
    google.maps.event.addDomListener(window, 'resize', function () {

        var center = map.getCenter();
        google.maps.event.trigger(map, 'resize');
        map.setCenter(center);

    });


});

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
});