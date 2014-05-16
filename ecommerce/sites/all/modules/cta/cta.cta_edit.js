(function ($) {

/**
 * Provide the summary information for the block settings vertical tabs.
 */
Drupal.behaviors.cta_cta_edit = {
  attach: function (context) {
    // check if intel form elements exist
	if (jQuery('#edit-cta-data-ga-event').length > 0) {
	  if ($('#edit-cta-selectors input:checked').length) {
	    $('#edit-cta-data-ga-event').css('display', 'block');
	  }
	  else {
		$('#edit-cta-data-ga-event').css('display', 'none');
	  }
      $('#edit-cta-selectors input').change(function () {
        if ($('#edit-cta-selectors input:checked').length) {
          $('#edit-cta-data-ga-event').css('display', 'block');
        }
        else {
            $('#edit-cta-data-ga-event').css('display', 'none');
        }
      });
    }
  },
};

})(jQuery);