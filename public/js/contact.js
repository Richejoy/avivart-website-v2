"use strict"

jQuery(document).ready(function ($) {

	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

	$("#introLoading").introLoader({

	    animation: {
	        name: 'simpleLoader',
	        options: {
	            exitFx:'slideUp',
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