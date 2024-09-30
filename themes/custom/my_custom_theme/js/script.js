(function ($, Drupal) {
  Drupal.behaviors.customTabs = {
    attach: function (context, settings) {
      $('.tab-link', context).once('customTabs').click(function (e) {
        e.preventDefault();

        // Remove active class from all tabs and content
        $('.nav-tabs li').removeClass('active');
        $('.tab-pane').removeClass('active');

        // Add active class to the clicked tab and related content
        $(this).parent().addClass('active');
        var tabId = $(this).data('tab');
        $('#' + tabId).addClass('active');
      });
    }
  };
})(jQuery, Drupal);
