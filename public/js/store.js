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
      count: 10,
      itemsToLoad: 5,
      counterInBtn: true,
      btnText: 'Afficher Plus {showing}/{total}'
    })

    // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
          $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
})