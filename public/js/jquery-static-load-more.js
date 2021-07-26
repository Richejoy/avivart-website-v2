$(function() {

  // items to show
  var increment = 4;

  var startFilter = 0;
  var endFilter = increment;

  // item selector
  var $this = $('.static-load-more');

  var elementLength = $this.find('.ad-item').length;
  $('.listLength').text(elementLength);

  // show/hide the Load More button
  if (elementLength > 4) {
    $('.buttonToogle').show();
  }

  $('.static-load-more .ad-item').slice(startFilter, endFilter).addClass('shown');
  $('.shownLength').text(endFilter);
  $('.static-load-more .ad-item').not('.shown').hide();
  $('.buttonToogle .showMore').on('click', function() {
    if (elementLength > endFilter) {
      startFilter += increment;
      endFilter += increment;
      $('.static-load-more .ad-item').slice(startFilter, endFilter).not('.shown').addClass('shown').toggle(500);
      $('.shownLength').text((endFilter > elementLength) ? elementLength : endFilter);
      if (elementLength <= endFilter) {
          $(this).remove();
      }
    }
  });

});