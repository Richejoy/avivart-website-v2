"use strict"

jQuery(document).ready(function ($) {

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

    $("#navbarTop").on("unfixed",function() {
      // when unfixed
    })

    $('body').ihavecookies({
      title: "Cookies & Privacy",
      message: "This website uses cookies to ensure you get the best experience on our website.",
      link: "terms"
    });

})

addBackToTop({
    diameter: 56,
    backgroundColor: 'rgb(255, 82, 82)',
    textColor: '#fff'
})