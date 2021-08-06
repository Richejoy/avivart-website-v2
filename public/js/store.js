"use strict"

jQuery(document).ready(function ($) {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

    $("[data-toggle='tooltip']").tooltip()

    $('#navbarTop').fixx({
      endElement: 'footer',
      endAt: 'top'
    })

    $('.bck').backToTop({
      iconName : 'fa fa-arrow-up',
      fxName : 'bottomToTop'  // 'rightToLeft', 'leftToRight', 'bottomToTop', 'topToBottom'
      //fxTransitionDuration : 300
      //trigger : 300
      //scrollDuration : 300
    })

    $.cookit({
      messageText: "<b>This site uses cookies. By continuing to browse the site you are agreeing to our use of cookies.</b>",
      linkText: "Learn more",
      linkUrl: 'terms',
      buttonText: "I accept",
      backgroundColor: '#1c1c1c',
      messageColor: '#fff',
      linkColor: '#fad04c',
      buttonColor: '#fad04c'
    })

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
      $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus")
    })
        
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
      $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus")
    }).on('hide.bs.collapse', function(){
      $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus")
    })
})