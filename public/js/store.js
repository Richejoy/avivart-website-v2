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

          Swal.fire({
            title: "Boutique",
            text: "Produit bien ajouter au panier.",
            icon: "success",
            showCancelButton: true,
            cancelButtonText: 'Poursuivre',
            cancelButtonColor: '#d33d33',
            confirmButtonText: 'Panier',
            confirmButtonColor: '#3085d6',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = laroute.route('cart.index')
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

      Swal.fire({
        title: "Confirmez pour supprimer ?",
        text: "Confirmez pour poursuivre cette action.",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: 'Annuler',
        cancelButtonColor: '#d33d33',
        confirmButtonText: 'Confirmer',
        confirmButtonColor: '#3085d6',
      })
      .then((result) => {
        if (result.isConfirmed) {
          Swal.fire("Produit supprimé du panier", {
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

      Swal.fire({
        title: "Confirmez pour vider ?",
        text: "Confirmez pour poursuivre cette action.",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: 'Annuler',
        cancelButtonColor: '#d33d33',
        confirmButtonText: 'Confirmer',
        confirmButtonColor: '#3085d6',
      })
      .then((result) => {
        if (result.isConfirmed) {
          Swal.fire("Panier vidé", {
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
              exitFx:'slideRight',
              ease: "easeInOutCirc",
              style: getIntroLoadingTheme(getRandomIntInclusive(0, 6)),
              delayBefore: 1000, //delay time in milliseconds
              exitTime: 500
          },
          spinJs: {
              lines: 13, // The number of lines to draw
              length: 20, // The length of each line
              radius: 30, // The radius of the inner circle
              width: 10, // The line thickness
              color: '#fff' // #rgb or #rrggbb or array of colors
          }
      }
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

})
