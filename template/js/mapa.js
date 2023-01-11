(function($) {
  "use strict"; // Start of use strict

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  $('body').scrollspy({
    target: '#mainNav',
    offset: 57
  });
  // Collapse Navbar
  var navbarCollapse = function() {
      $("#mainNav").addClass("navbar-shrink");

  };
  // Collapse
  navbarCollapse();

})(jQuery); // End of use strict
