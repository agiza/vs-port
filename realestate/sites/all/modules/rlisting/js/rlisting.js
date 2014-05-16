(function ($) {
  Drupal.rlisting = {};
  $(document).ready(function() {

    $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());

    // clear the photo slideshow nav so only the background image is shown.
    $('.field-slideshow-carousel-wrapper a.carousel-next').html('');
    $('.field-slideshow-carousel-wrapper a.carousel-prev').html('');

    // Tooltip the calendar.
    $("a.calendar-pop").mouseover(function (e) {
      var open_id = $(this).attr('id');
      var theUrl = Drupal.settings.rlisting.ajaxListingTooltip + '/' + open_id;

      if ($.browser.chrome) {
        var l_offset = 360; // bClean theme
        var t_offset = 400; // bClean theme
        //var l_offset = 290; // blue theme
        //var t_offset = 280; //blue theme
        //var l_offset = 160; // buzz theme
        //var t_offset = 450; //buzz theme
      }else{
        var l_offset = 200; // bClean theme
        var t_offset = 400; // bClean theme
        //var l_offset = 260; // blue theme
        //var t_offset = 280; //buzz theme
        //var l_offset = 160; // buzz theme
        //var t_offset = 460; //buzz theme
      };
      
      var pos = $(this).offset();
      $('.tooltip').css({
        'left': (pos.left - l_offset) + 'px',
        'top':  (pos.top - t_offset) + 'px'
      });
      $('.tooltip').html(Drupal.rlisting.loadingAnimationTP());
      $('.tooltip').fadeIn();
      // ajax time
      $.ajax({
        url: theUrl,
        success: function (response){
          $('.tooltip').html(response);
        }
      });
    });

    // hide the tooltip if user click outside of tool
    $(document).click(function(e){
      var clicked = $(e.target).attr('class');
      if(clicked != 'tooltip')
        $('.tooltip').fadeOut('slow');
    }); 

  });

  /**
   * Load the loading image.
   */
  Drupal.rlisting.loadingAnimationTP = function() {
  var html = '<div>';

  html += '<img src="' + Drupal.settings.rlisting['loadingimage'] + '" border="0" />';
  html += '</div>';


  return html;
  }


})(jQuery);
