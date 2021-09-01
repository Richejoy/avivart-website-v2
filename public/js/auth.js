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
                exitFx:'fadeOut',
                ease: "linear",
                style: getIntroLoadingTheme(getRandomIntInclusive(0, 6)),
                delayBefore: 500, //delay time in milliseconds
                exitTime: 300
            }
        },    

        spinJs: {}
        
    })
})