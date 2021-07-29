"use strict";

jQuery(document).ready(function ($) {

	$('#show-modules').click(function(e) {
		e.preventDefault()
		$('#modules').show()
	})

	$('#close-modules').click(function(e) {
		e.preventDefault()
		$('#modules').hide()
	})

})