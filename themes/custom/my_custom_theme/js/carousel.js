(function ($, Drupal) {
  Drupal.behaviors.carouselPagination = {
    attach: function (context, settings) {
      const pagerContainer = $('.carousel-pager', context);
      const carouselTrack = $('.carousel-track', context);

      // Function to handle AJAX for pager links with sliding animation
      function handleAjaxPagination(pagerLink, direction) {
        const slideDistance = direction === 'next' ? '-100%' : '100%'; // Set direction for sliding

        // Animate the current content out of view
        carouselTrack.animate({ 'left': slideDistance }, 50, function () {
          $.ajax({
            url: pagerLink.attr('href'), // Get the URL from the pager link
            type: 'GET',
            success: function (response) {
              const newContent = $(response).find('.carousel-track').html(); // Extract the new cards content

              // Temporarily hide new content before it slides in
              carouselTrack.css('left', direction === 'next' ? '100%' : '-100%');
              carouselTrack.html(newContent); // Replace old content with new

              // Slide the new content into view
              carouselTrack.animate({ 'left': '0%' }, 50);

              // Replace pager container with updated one from response
              const updatedPager = $(response).find('.carousel-pager').html();
              pagerContainer.html(updatedPager); // Update the pager content

              // Reattach behaviors and re-bind pagination links
              Drupal.attachBehaviors(carouselTrack[0]);
              attachPagination();
            },
            error: function (error) {
              console.log('Error loading page:', error);
            }
          });
        });
      }

      // Function to bind the click events for the pager
      function attachPagination() {
        const prevPagerLink = pagerContainer.find('.pager__item--previous a');
        const nextPagerLink = pagerContainer.find('.pager__item--next a');

        // Handle "Prev" button click with sliding animation
        $('#carousel-prev', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (prevPagerLink.length) {
            handleAjaxPagination(prevPagerLink, 'prev'); // Trigger AJAX load for previous page
          }
        });
        $('#carousel-prev-r', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (prevPagerLink.length) {
            handleAjaxPagination(prevPagerLink, 'prev'); // Trigger AJAX load for previous page
          }
        });
        $('#carousel-prev-p', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (prevPagerLink.length) {
            handleAjaxPagination(prevPagerLink, 'prev'); // Trigger AJAX load for previous page
          }
        });
        // Handle "Next" button click with sliding animation
        $('#carousel-next', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (nextPagerLink.length) {
            handleAjaxPagination(nextPagerLink, 'next'); // Trigger AJAX load for next page
          }
        });
        $('#carousel-next-r', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (nextPagerLink.length) {
            handleAjaxPagination(nextPagerLink, 'next'); // Trigger AJAX load for next page
          }
        });
        $('#carousel-next-p', context).off('click').on('click', function (e) {
          e.preventDefault(); // Prevent default behavior
          if (nextPagerLink.length) {
            handleAjaxPagination(nextPagerLink, 'next'); // Trigger AJAX load for next page
          }
        });
      }

      // Bind the initial pagination click events
      attachPagination();
    }
  };
})(jQuery, Drupal);
