"use strict"

jQuery(document).ready(function ($) {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

    $('body').materialScrollTop({
          revealElement: 'header',
          revealPosition: 'bottom',
          onScrollEnd: function() {
            console.log('Scrolling End');
          }
    })

    jQuery('#navbarTop').sticky({
    	outerWidth: true
  	})

	jQuery('.sticky-pin').sticky({
	    offsetY: 90
	})

  $("#introLoading").introLoader({

                    animation: {
                        name: 'cssLoader',
                        options: {
                            exitFx:'slideUp',
                            ease: "easeOutSine",
                            style: getIntroLoadingTheme(getRandomIntInclusive(0, 6)),
                            delayBefore: 1000, //delay time in milliseconds
                            exitTime: 500
                        }
                    }

      })

})