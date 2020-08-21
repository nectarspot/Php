let talkToUsFormPlanType = null;

$(document).ready(function () {

  const $businessType = $('[data-plan-type=\'Business\']');
  const $eCommerceType = $('[data-plan-type=\'Ecommerce\']');
  const $agencyType = $('[data-plan-type=\'Agency\']');

  const onTypesSelected = (e) => {
    // Get type from Step1
    talkToUsFormPlanType = e.currentTarget.getAttribute('data-plan-type');
  };

  [
    $businessType,
    $eCommerceType,
    $agencyType
  ].map(el => el.on('click', onTypesSelected));

  let modal = document.getElementById('contactFormPopup');
  let talkToUsButtons = $('.talkToUsButton');

  // Close X mark (top right position)
  let closePopupIcon = document.getElementsByClassName('close-popup-img')[0];

  // Close button in dialog after message was sent
  let closePopupButton = document.getElementById('close-popup-btn');

  let showThanks = document.getElementsByClassName('success-block-desktop')[0];
  let rightBlock = document.getElementsByClassName('talk-to-us-form')[0];

  talkToUsButtons.on('click', function (e) {
    modal.style.display = 'block';
    scrollLock.disablePageScroll(modal);

    if (window.selectedPlan === "tabBusiness" || window.selectedPlan === "tabEcommerce") {
      $('label[for=\'traffic\']').text('Traffic Volume');
    } else if (window.selectedPlan === "tabAgency") {
      $('label[for=\'traffic\']').text('Number of Clients');
    }
  });

  [
    closePopupIcon,
    closePopupButton,
  ].forEach(function (element) {
    element.addEventListener("click", function () {
      rightBlock.reset();
      rightBlock.style.display = 'block';
      showThanks.style.display = 'none';
      modal.style.display = 'none';
      scrollLock.clearQueueScrollLocks();
      scrollLock.enablePageScroll(modal);
    });
  });

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      rightBlock.reset();
      modal.style.display = 'none';
      scrollLock.enablePageScroll(modal);
    }
  };

});

function inputValidator(e) {
  let error = false;
  let talkToUsErrorMsg = $('.talk-to-us-error-message');

  talkToUsErrorMsg.removeClass('visible');
  $('.talk-to-us-users-data-input').each(function () {
    if (!this.value.length) {
      error = true;
    }
  });

  if (error) {
    e.preventDefault();
    talkToUsErrorMsg.addClass('visible');
  } else {
    e.preventDefault();
    let obj = {
      firstName: $('input[type=text][name=first-name]').val(),
      lastName: $('input[type=text][name=last-name]').val(),
      email: $('input[type=email][name=email]').val(),
      phoneNumber: $('input[type=number][name=phone-number]').val(),
      company: $('input[type=text][name=company]').val(),
      message: $('textarea#message').val(),
      planType: talkToUsFormPlanType,
      traffic: $('input[type=text][name=traffic]').val(),
    };

    submitModal(error, obj);
  }
}

function submitModal(isError, obj) {
  let showThanks = document.getElementsByClassName('success-block-desktop')[0];
  let rightBlock = document.getElementsByClassName('talk-to-us-form')[0];

  if (!isError) {
    rightBlock.style.display = 'none';
    showThanks.style.display = 'flex';
    sendModalInfo(obj);
  }
}

function sendModalInfo(obj) {
  let rightBlock = document.getElementsByClassName('talk-to-us-form')[0];

  $.ajax({
    type: 'POST',
    url: '/api/emails/pricing-plans/more-info',
    data: JSON.stringify(obj),
    contentType: 'application/json',
    dataType: 'json',
    success: function () {
      rightBlock.reset();
    },
  });
}
