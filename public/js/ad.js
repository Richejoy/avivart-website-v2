"use strict"

jQuery(document).ready(function($) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    })

    //
    $("time.timeago").timeago()

    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus")
    })

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus")
    }).on('hide.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus")
    })

    $(".slick-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,

        // the magic
        responsive: [{

            breakpoint: 900,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: true,
                arrows: false
            }

        }, {

            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }

        }, {

            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }

        }, {

            breakpoint: 300,
            settings: "unslick"

        }]
    })

    //deleteCookie('securityCookie')

    if (checkCookie('securityCookie')) {
        $('#securityModal').modal()
    }

    $('#securityModal').on('hidden.bs.modal', function(event) {
        setCookie('securityCookie', 'accepted', 1)
    })

    $('#navbarTop').scrollFix()

    $.gdprcookie.init()
        //$.gdprcookie.display()

    $("#introLoading").introLoader({

        animation: {
            name: 'simpleLoader',
            options: {
                exitFx: 'slideUp',
                ease: "easeInOutCirc",
                style: getIntroLoadingTheme(getRandomIntInclusive(0, 6))
            }
        },
        spinJs: {
            lines: 10, // The number of lines to draw
            length: 10, // The length of each line
            radius: 30, // The radius of the inner circle
            width: 8, // The line thickness
            color: '#fff' // #rgb or #rrggbb or array of colors
        }

    })

})

up({

    // bottom position
    bottom: '20px',

    // left position
    left: '20px',

    // width
    width: '45px',

    // height
    height: '45px',

    // background color
    bg: 'green',

    // custom icon
    src: 'https://avivart.net/plugins/up_btn/chevron-up-solid.svg',

    // distance from the top to show the back to top button
    whenShow: 400,

    // circular button?
    circle: true

})