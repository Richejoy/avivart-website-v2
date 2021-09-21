"use strict"

jQuery(document).ready(function ($) {

	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
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