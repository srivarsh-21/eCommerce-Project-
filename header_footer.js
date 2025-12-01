document.addEventListener("DOMContentLoaded", function () {
  // ----- Header Hide on Scroll -----
  var lastScrollTop = 0;
  var header = document.querySelector('header');
  var headerHeight = header ? header.offsetHeight : 0;
  var scrollThreshold = 5;

  window.addEventListener("scroll", function () {
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > headerHeight && Math.abs(currentScroll - lastScrollTop) > scrollThreshold) {
      if (currentScroll > lastScrollTop) {
        header.classList.add('header-hidden');
      } else {
        header.classList.remove('header-hidden');
      }
    } else if (currentScroll <= headerHeight) {
      header.classList.remove('header-hidden');
    }

    lastScrollTop = currentScroll;
  });

  // ----- Show search bar once & hide icon after click -----
  if (typeof jQuery !== 'undefined') {
    $('#toggleSearch').on('click', function () {
      $('#searchForm').removeClass('d-none');   // Show the search bar
      $(this).addClass('d-none');               // Hide the search icon button
    });
  } else {
    console.warn('jQuery not loaded — search icon will not function');
  }
});
