"use strict"

jQuery(document).ready(function ($) {

	$('#show-modules').click(function(e) {
		e.preventDefault()
		$('#modules').toggle()
	})

	$('#close-modules').click(function(e) {
		e.preventDefault()
		$('#modules').fadeOut()
	})

})