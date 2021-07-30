"use strict";

jQuery(document).ready(function ($) {

	//
    $("time.timeago").timeago();

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
    });

    //deleteCookie('securityCookie')

    if (checkCookie('securityCookie')) {
    	$('#securityModal').modal()
    }

    $('#securityModal').on('hidden.bs.modal', function (event) {
	  setCookie('securityCookie', 'accepted', 1)
	})

})