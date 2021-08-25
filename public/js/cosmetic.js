"use strict"

jQuery(document).ready(function ($) {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    })

    $("[data-toggle='tooltip']").tooltip()

    $(".lazyrate").lazyRate({
        delay: 1000
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

    $('#article-container a.cart').click(function(e) {
      e.preventDefault()
      const basketAddHref = $(this).attr('href')
      const basketIndexHref = laroute.route('basket.index')
      const cosmeticIndexHref = laroute.route('cosmetic.index')

      console.warn(laroute.route('basket.index'))

      swal({
        title: "Cosmétique",
        text: "Produit bien ajouter au panier",
        icon: "success",
        buttons: ['Poursuivre', 'Panier']
      }).then((willDelete) => {
        if (willDelete) {
          //check basket
          window.location.href = basketIndexHref
        } else {
          //continues purchase
          return fetch(basketAddHref)
        }
      }).then((result) => {
        console.log(result.json())
        return result.json()
      }).then((data) => {
        console.error(data.message)
      }).catch(err => {
        if (err) {
          swal("Désolé!", "Erreur d'ajout du produit dans le panier", "error")
        } else {
          swal("Succès!", "Produit ajouter dans le panier", "info")
          //swal.stopLoading()
          //swal.close()
          window.location.href = cosmeticIndexHref
        }
      })

    })
})