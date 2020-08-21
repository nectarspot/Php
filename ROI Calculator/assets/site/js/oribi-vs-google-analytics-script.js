$(document).ready(function () {

  var bodyEl = document.getElementsByTagName('body')[0],
      screenWidth = window.innerWidth || document.documentElement.clientWidth || bodyEl.clientWidth;

  var mobileVersion = 1199;

  var accordionIndex,
      accordionSubIndex;
  var accordion = null;
  var questionAccordion = null;
  var block = null;


  questionAccordion = document.getElementsByClassName("question-toggle-arrow");

  for (accordionIndex = 0; accordionIndex < questionAccordion.length; accordionIndex++) {
    questionAccordion[accordionIndex].addEventListener("click", function () {

      var panel = this.nextElementSibling;
      var toggleButton = this.getElementsByClassName('toggle')[0];
      var isOpen = false;

      if (panel.style.maxHeight) {
        isOpen = true;
      }

      for (accordionSubIndex = 0; accordionSubIndex < questionAccordion.length; accordionSubIndex++) {
        block = questionAccordion[accordionSubIndex];
        block.nextElementSibling.style.maxHeight = null;
        block.getElementsByClassName('toggle')[0].style.transform = 'rotate(180deg)';
      }

      if (!panel.style.maxHeight && !isOpen) {
        toggleButton.style.transform = 'rotate(0deg)';
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }


  if (screenWidth > mobileVersion) {
    accordion = document.getElementsByClassName("events-building-header");

    for (accordionIndex = 0; accordionIndex < accordion.length; accordionIndex++) {
      accordion[accordionIndex].addEventListener("click", function () {
        var panel = this.nextElementSibling;
        var toggleButton = this.getElementsByClassName('toggle')[0];
        var isOpen = false;

        if (panel.style.maxHeight) {
          isOpen = true;
        }

        for (accordionSubIndex = 0; accordionSubIndex < accordion.length; accordionSubIndex++) {
          block = accordion[accordionSubIndex];

          var _toggleButton = block.getElementsByClassName('toggle');

          if (_toggleButton.length && toggleButton) {
            block.nextElementSibling.style.maxHeight = null;
            _toggleButton[0].style.display = 'block';
          }
        }

        if (!panel.style.maxHeight && !isOpen) {
          if (toggleButton) toggleButton.style.display = 'none';
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  } else {
    accordion = document.getElementsByClassName("mobile-read-more-block");

    for (accordionIndex = 0; accordionIndex < accordion.length; accordionIndex++) {

      accordion[accordionIndex].addEventListener("click", function () {

        var panel = this.previousElementSibling;
        var openButton = this.getElementsByClassName('read-more-btn')[0];
        var closeButton = this.getElementsByClassName('read-less-btn')[0];
        var isOpen = false;

        if (panel.style.maxHeight) {
          isOpen = true;
        }

        for (accordionSubIndex = 0; accordionSubIndex < accordion.length; accordionSubIndex++) {
          block = accordion[accordionSubIndex];

          var _readMoreBtn = block.getElementsByClassName('read-more-btn');
          var _readLessBtn = block.getElementsByClassName('read-less-btn');

          if (_readMoreBtn.length && _readLessBtn.length && openButton && closeButton) {
            block.previousElementSibling.style.maxHeight = null;
            _readMoreBtn[0].style = 'block';
            _readLessBtn[0].style = 'none';
          }
        }

        if (!panel.style.maxHeight && !isOpen) {
          if (openButton) openButton.style.display = 'none';
          if (closeButton) closeButton.style.display = 'block';
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  }
});
