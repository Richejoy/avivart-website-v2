"use strict"

jQuery(document).ready(function ($) {

	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  })

	$('#show-modules').click(function(e) {
		e.preventDefault()
		$('#modules').toggle()
	})

	$('#close-modules').click(function(e) {
		e.preventDefault()
		$('#modules').fadeOut()
	})

	let loader = $('#introLoading').data('introLoader');
  loader.stop()

  $('ul.navbar-nav > li > a').matchactive();

	/*setTimeout(function () {
        $('#introLoading').hide()
    }, 3000)*/
})

new WOW().init()