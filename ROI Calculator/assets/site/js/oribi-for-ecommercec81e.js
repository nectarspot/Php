$(document).ready(function () {

  const options = {
    loop: true,
    keyboard: true,
    buttons: ['close'],
    idleTime: false,
    infobar: false,
    thumbs: {
      autoStart: true,
      axis: 'x',
    },
    slideShow: {
      autoStart: false,
      progress: false
    },
    image: { preload: true },
    arrows: true,
    touch: {
      vertical: false,
      momentum: false
    },
    onInit: function () {
      $('body').css({ overflow: 'hidden' });
    },
    afterClose: function () {
      $('body').css({ overflow: 'initial' });
      $.fancybox.close(true);
    },
    mobile: {
      idleTime: 9999,
      clickContent: false,
      clickSlide: false,
      dblclickContent: function (current, event) {
        return current.type === "image" ? "zoom" : false;
      },
      dblclickSlide: function (current, event) {
        return current.type === "image" ? "zoom" : false;
      },
    },
  };

  $('.oribi-for-ecommerce [data-fancybox]').fancybox(options);

  window.onresize = function (event) {
    let currentInstance = $.fancybox.getInstance();
    let fbGallery = currentInstance.current.opts.fancybox;

    if (fbGallery.includes('2')) {
      if (document.documentElement.clientWidth <= 425) {
        currentInstance.current.opts.$orig[0].parentElement.parentElement.children[2].children[3].click();
      }
    }

    if (fbGallery.includes('3')) {
      if (document.documentElement.clientWidth > 425) {
        currentInstance.current.opts.$orig[0].parentElement.parentElement.children[1].children[3].click();
      }
    }

  };

});