"use strict";
jQuery(document).ready(function ($) {

    $("[data-toggle='tooltip']").tooltip()

    $('.videoIcon').on('click', function(e) {
    	$('.videoPopup').show('slow')
    	$(this).hide('fast')
    })

    $('.closeVideoPopup').on('click', function(e) {
    	$('.videoPopup').hide('fast')
    	$('.videoIcon').show('slow')
    })

    $(".lazyrate").lazyRate({
        delay: 1000
    })

    $('#product-container').loadMoreResults({
		tag: {
			name: 'article',
			'class': 'product-item'
		},
		button: {
			'class': 'btn-load-more',
			'text': 'Afficher Plus...',
		},
		displayedItems: 20,
		showItems: 4
	})

    $('ul.simple-load-more').simpleLoadMore({
      item: 'li',
      count: 2,
      itemsToLoad: 2,
      counterInBtn: true,
      btnText: 'Afficher Plus {showing}/{total}'
    })
})