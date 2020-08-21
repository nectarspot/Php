$(document).ready(function () {
  const $navbar = $("#header");

  const toggleNavbarBgColor = scrolledElem => {
    $navbar.toggleClass('scrolled', scrolledElem.scrollTop() > $navbar.height());
  };

  $('#wrapper').scroll(function () {
    toggleNavbarBgColor($(this));
  });

  window.onresize = () => {
    if ($(window).width() <= 767) {
      $(document).scroll(function () {
        toggleNavbarBgColor($(this));
      });
    }
  };
});
