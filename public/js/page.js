"use strict";
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

})