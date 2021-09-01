"use strict"

jQuery(document).ready(function ($) {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

    let spinner = new jQuerySpinner({
        parentId: 'body'
    })

    $("[data-toggle='tooltip']").tooltip()

    $("#navbarTop").fixit({
        zIndex: 999,
        //topMargin: 30,
        sameDimension :true,
        offset: 0,
        reset: false,
        direction: false
    })

    $("#navbarTop").on("fixed",function() {
      // when fixed
    })

  	$('.videoIcon').on('click', function(e) {
      	$('.videoPopup').show('slow')
      	$(this).hide('fast')
      })

    $('.closeVideoPopup').on('click', function(e) {
    	$('.videoPopup').hide('fast')
    	$('.videoIcon').show('slow')
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

    /*Cart JS*/
    //ADD PRODUCT TO CART
    $('.add-product-to-cart').click(function(e) {
      e.preventDefault()
      const href = $(this).attr('href')

      spinner.show()

      fetch(href)
      .then((response) => {
        console.log(response)

        if (response.ok) {
          
          spinner.hide()

          swal({
            title: "Cosmétique",
            text: "Produit bien ajouter au panier.",
            icon: "success",
            buttons: ['Poursuivre', 'Panier'],
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
              window.location.href = laroute.route('basket.index')
            } else {
              window.location.reload()
            }
          })
        }

      })

    })

    //REMOVE PRODUCT FROM CART
    $('.remove-product-from-cart').click(function(e) {
      e.preventDefault()
      const href = $(this).attr('href')

      swal({
        title: "Confirmez pour supprimer ?",
        text: "Confirmez pour poursuivre cette action.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Produit supprimé du panier", {
            icon: "success",
          })

          window.location.href = href
        }
      })
    })

    //TRUNCATE CART
    $('.truncate-cart').click(function(e) {
      e.preventDefault()
      const href = $(this).attr('href')

      swal({
        title: "Confirmez pour vider ?",
        text: "Confirmez pour poursuivre cette action.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Panier vidé", {
            icon: "success",
          })

          window.location.href = href
        }
      })
    })

      $("#introLoading").introLoader({

          animation: {
              name: 'simpleLoader',
              options: {
                  exitFx:'slideUp',
                  ease: "easeOutSine",
                  style: getIntroLoadingTheme(getRandomIntInclusive(0, 6)),
                  delayBefore: 1000, //delay time in milliseconds
                  exitTime: 500,
                  onBefore: function() {
                      $('#onAfterExample').hide();
                  },
                  onAfter: function() {
                      $('#onAfterExample').fadeIn();
                  }
              }
          },
          spinJs: {
              lines: 10, // The number of lines to draw
              length: 10, // The length of each line
              radius: 30, // The radius of the inner circle
              width: 8, // The line thickness
          }
      })

    $(".lazyrate").lazyRate({
        delay: 1000
    })

    $('#article-container').loadMoreResults({
    tag: {
      name: 'article',
        'class': 'article-item'
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
})

BACK2TOP(document.querySelector("#back2top"), 200)