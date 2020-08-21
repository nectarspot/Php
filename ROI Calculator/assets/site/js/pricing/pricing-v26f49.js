const TABLET_WIDTH = 768;

$(document).ready(function () {

  const $window = $(window);

  const $pricingOnboardingStep1 = $("#pricing-onboarding-step1");

  const pricingPlans = {
    tabBusiness: {
      annuallyCosts: {
        business_traffic_0_10K: 300,
        business_traffic_10K_100K: 450,
        business_traffic_100K_1M: 600,
      },
      monthlyCosts: {
        business_traffic_0_10K: 350,
        business_traffic_10K_100K: 550,
        business_traffic_100K_1M: 750,
      }
    },
    tabEcommerce: {
      annuallyCosts: {
        ecommerce_traffic_0_10K: 350,
        ecommerce_traffic_10K_100K: 500,
        ecommerce_traffic_100K_1M: 650,
      },
      monthlyCosts: {
        ecommerce_traffic_0_10K: 400,
        ecommerce_traffic_10K_100K: 600,
        ecommerce_traffic_100K_1M: 800,
      }
    },
    tabAgency: {
      annuallyCosts: {
        agency_traffic_1_5Cl: 650,
        agency_traffic_6_10Cl: 850,
        agency_traffic_11_25Cl: 1250,
        agency_traffic_26_50Cl: 1750,
      },
      monthlyCosts: {
        agency_traffic_1_5Cl: 750,
        agency_traffic_6_10Cl: 1000,
        agency_traffic_11_25Cl: 1500,
        agency_traffic_26_50Cl: 2000,
      },
    }
  };

  let isInit = true;

  /* ===== Select Actual Plan ===== */

  let selectedPlan = null;
  let previousSelectedPlan = null;
  let selectedPeriod = null;

  const sliderMinValue = 1;
  const sliderMaxValue = 900000;


  const businessSliderRange = [
    {
      range: '0-10K',
      intRange: {
        start: 0,
        end: 10000,
      },
      start: 0,
      end: 300000,
      prev_coefficient: 30,
      coefficient: 30
    },
    {
      range: '10K-100K',
      intRange: {
        start: 10001,
        end: 100000,
      },
      start: 300000,
      end: 600000,
      prev_coefficient: 30,
      coefficient: 6
    },
    {
      range: '100K-1M',
      intRange: {
        start: 100001,
        end: 999999,
      },
      start: 600000,
      end: 900000,
      prev_coefficient: 6,
      coefficient: 0.9
    },
    {
      range: '1M+',
      intRange: {
        start: 1000000,
        end: 1000000,
      },
      start: 900000,
      end: 900001,
      prev_coefficient: 0.9,
      coefficient: 0.9
    }
  ];

  const businessCardRange = [
    {
      range: '0-10K',
      id: 'business_option_0_10K_visitors'
    },
    {
      range: '10K-100K',
      id: 'business_option_10K_100K_visitors'
    },
    {
      range: '100K-1M',
      id: 'business_option_100K_1M_visitors'
    },
    {
      range: '1M+',
      id: 'business_option_over1M_visitors'
    }
  ];

  const agencyCardRange = [
    {
      range: '1-5',
      id: 'agency_option_1_5_clients'
    },
    {
      range: '6-10',
      id: 'agency_option_6_10_clients'
    },
    {
      range: '11-25',
      id: 'agency_option_11_25_clients'
    },
    {
      range: '26-50',
      id: 'agency_option_26_50_clients'
    },
    {
      range: '50+',
      id: 'agency_option_over50_clients'
    }
  ];

  const agencySliderRange = [
    {
      range: '1-5',
      intRange: {
        start: 0,
        end: 5,
      },
      start: 0,
      end: 225000,
      prev_coefficient: 45000,
      coefficient: 45000,
    },
    {
      range: '6-10',
      intRange: {
        start: 6,
        end: 10,
      },
      start: 225000,
      end: 450000,
      prev_coefficient: 45000,
      coefficient: 45000,
    },
    {
      range: '11-25',
      intRange: {
        start: 11,
        end: 25,
      },
      start: 450000,
      end: 675000,
      prev_coefficient: 45000,
      coefficient: 27000,
    },
    {
      range: '26-50',
      intRange: {
        start: 26,
        end: 49,
      },
      start: 675000,
      end: 900000,
      prev_coefficient: 27000,
      coefficient: 18000,
    },
    {
      range: '50+',
      intRange: {
        start: 50,
        end: 50,
      },
      start: 900000,
      end: 900001,
      prev_coefficient: 18000,
      coefficient: 18000
    }
  ];

  const eCommerceCardRange = [
    {
      range: '0-10K',
      id: 'ecommerce_option_0_10K_visitors'
    },
    {
      range: '10K-100K',
      id: 'ecommerce_option_10K_100K_visitors'
    },
    {
      range: '100K-1M',
      id: 'ecommerce_option_100K_1M_visitors'
    },
    {
      range: '1M+',
      id: 'ecommerce_option_over1M_visitors'
    }
  ];

  const eCommerceSliderRange = [
    {
      range: '0-10K',
      intRange: {
        start: 0,
        end: 10000,
      },
      start: 0,
      end: 300000,
      prev_coefficient: 30,
      coefficient: 30
    },
    {
      range: '10K-100K',
      intRange: {
        start: 10001,
        end: 100000,
      },
      start: 300000,
      end: 600000,
      prev_coefficient: 30,
      coefficient: 6,
    },
    {
      range: '100K-1M',
      intRange: {
        start: 100001,
        end: 999999,
      },
      start: 600000,
      end: 900000,
      prev_coefficient: 6,
      coefficient: 0.9
    },
    {
      range: '1M+',
      intRange: {
        start: 1000000,
        end: 1000000,
      },
      start: 900000,
      end: 900001,
      prev_coefficient: 0.9,
      coefficient: 0.9
    }
  ];

  const getSliderRangesByPlan = (activePlan) => {
    return activePlan === 'tabBusiness' ? businessSliderRange : (activePlan === 'tabEcommerce' ? eCommerceSliderRange : agencySliderRange);
  };

  const getPriceCardsArray = (activePlan) => {
    return activePlan === 'tabBusiness' ? businessCardRange : (activePlan === 'tabEcommerce' ? eCommerceCardRange : agencyCardRange);
  };

  const getPriceCardId = (activePlan, range) => {
    let cardRanges = getPriceCardsArray(activePlan);
    for (let i = 0; i < cardRanges.length; i++) {
      if (cardRanges[i].range === range) {
        return cardRanges[i].id;
      }
    }
  };

  const getPriceCardRange = (activePlan, priceCardId) => {
    let cardRanges = getPriceCardsArray(activePlan);
    for (let i = 0; i < cardRanges.length; i++) {
      if (cardRanges[i].id === priceCardId) {
        return cardRanges[i].range;
      }
    }
  };

  const getSliderValueByRanges = (activePlan, range) => {
    let sliderRanges = getSliderRangesByPlan(activePlan);
    for (let i = 0; i < sliderRanges.length; i++) {

      if (sliderRanges[i].range === range) {
        if (sliderRanges[sliderRanges.length - 1].range === range) {
          return sliderRanges[i].end;
        }
        return ((sliderRanges[i].end - sliderRanges[i].start) / 2) + sliderRanges[i].start;
      }
    }
  };

  const setSliderValueFromPriceCard = (activePlan, priceCardId) => {
    let priceCardRange = getPriceCardRange(activePlan, priceCardId);
    $(`#${activePlan} .plans-aside_card`).removeClass("active");
    $(`#${priceCardId}`).parents('.plans-aside_card').addClass("active");
    return getSliderValueByRanges(activePlan, priceCardRange);
  };

  const initAnimation = selectedPlan => {
    $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .slider__initial-tooltip`)
      .addClass("init-slider-tooltip");

    $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .tab-content__price-tag`)
      .addClass("init-animation-label");

    $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .slider-range-circle > .ui-slider-handle`)
      .addClass("slider-circle-toggle");

  };

  const init = (selectedPlan) => {
    $pricingOnboardingStep1.hide();

    if (getWindowWidth() <= 375) {
      $("#pricing-slider-step2").show();
    } else {
      $("#pricing-slider-step2").show("slide", { direction: "down" }, 'slow');
    }

    initSlider(selectedPlan);
    switchTypeTabs(selectedPlan);

    if (isInit) {
      initAnimation(selectedPlan);
    }
    isInit = false;
    const divider = document.createElement('div');
    divider.className = 'slider-range-divider';

    $(`.slider-range-circle`).append(divider);
  };

  $(".onboarding-types__item").on("click", (e) => {
    selectedPlan = e.currentTarget.getAttribute('data-tab');
    window['selectedPlan'] = selectedPlan;
    init(selectedPlan);
  });

  /* ==== Switch Plan Tabs ==== */

  $("#pricing-plan-tab > .tabs-panel__tab").on("click", (e) => {

    if (!isInit) {

      $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .tab-content__price-tag`)
        .removeClass("init-animation-label");

      $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .slider__initial-tooltip`)
        .removeClass("init-slider-tooltip");

      $(`.tab-content_wrapper > #${selectedPlan} > .tab-content__slider > .slider-range-circle > .ui-slider-handle`)
        .removeClass("slider-circle-toggle");
    }

    previousSelectedPlan = selectedPlan;
    selectedPlan = e.currentTarget.getAttribute('data-tab');
    window['selectedPlan'] = selectedPlan;

    // De-activate previous tab/hide slider
    $("#" + previousSelectedPlan).removeClass("active");
    $(".tabs-panel__tab" + '[data-tab=' + previousSelectedPlan + ']').removeClass("active");
    $(".tab-content").removeClass("active");

    // Makes selected tab-content visible below tab
    $(".tabs-panel__tab" + '[data-tab=' + selectedPlan + ']').addClass("active");
    $("#" + selectedPlan).addClass("active");


    initSlider(selectedPlan);
    switchTypeTabs(selectedPlan, previousSelectedPlan);
  });

  /* ==== Switch price period ==== */

  $(".plans-aside__general-options > .plans-aside__period").on("click", (e) => {
    selectedPeriod = e.currentTarget.getAttribute('data-id');
    let activePlan = getActivePlan();
    let pricesNodes = getPricesNodesArray(activePlan);
    switchChargePeriod(activePlan, pricesNodes);
  });


  // HELPER FUNCTIONS ====================================
  const trafficNodesGetter = (tab_id, str) => $("#" + tab_id + " #" + str);

  const getWindowWidth = () => {
    return $window.width();
  };

  const getChargePeriodLabel = chargePeriodType => {
    const typesToLabelMap = {
      annuallyCosts: 'Billed Annually',
      monthlyCosts: 'Billed Monthly',
    };
    return typesToLabelMap[chargePeriodType] || 'Billed Annually';
  };


  const getActivePlan = () => {
    return $('.tabs-panel__tab.active').attr('data-tab');
  };

  const setPriceTagPosition = (priceTag, moveFromLeft) => {
    moveFromLeft += 1.3;
    // tooltip should be static centered in tablet/mobile view
    if (getWindowWidth() > TABLET_WIDTH) {
      priceTag.css({
        "left": `calc(${moveFromLeft}%)`,
        "transform": `translateX(-50%)`,
      });
    }
  };

  // Annually-Monthly toggling with related prices/text changes below
  const switchChargePeriod = (tab_id, pricesNodesArray) => {
    // Toggles highlighting
    $("#" + tab_id + " .plans-aside__period").on("click", ({ target: elem }) => {
      $("#" + tab_id + " .plans-aside__period.active").removeClass("active");
      $(elem).addClass("active");
      let clickedOptionID = $(elem).attr("data-id");

      // Changes prices in cards
      pricesNodesArray.map(el => {
        el.text(pricingPlans[tab_id][clickedOptionID][el.attr("id")]);
        const $billedPeriodText = el
          .closest('.plans-aside__price-sum_emphasized')
          .siblings('.plans-aside__price-sum_period');
        $billedPeriodText.text(getChargePeriodLabel($(elem).data('id')));
      });
    });
  };


  const getPricesNodesArray = (tab_id) => {
    let pricesNodes = null;

    let pricesNodesBusiness = [
      trafficNodesGetter(tab_id, "business_traffic_0_10K"),
      trafficNodesGetter(tab_id, "business_traffic_10K_100K"),
      trafficNodesGetter(tab_id, "business_traffic_100K_1M")
    ];

    let pricesNodesEcommerce = [
      trafficNodesGetter(tab_id, "ecommerce_traffic_0_10K"),
      trafficNodesGetter(tab_id, "ecommerce_traffic_10K_100K"),
      trafficNodesGetter(tab_id, "ecommerce_traffic_100K_1M")
    ];

    let pricesNodesAgency = [
      trafficNodesGetter(tab_id, "agency_traffic_1_5Cl"),
      trafficNodesGetter(tab_id, "agency_traffic_6_10Cl"),
      trafficNodesGetter(tab_id, "agency_traffic_11_25Cl"),
      trafficNodesGetter(tab_id, "agency_traffic_26_50Cl")
    ];

    if (tab_id === "tabBusiness") {
      pricesNodes = pricesNodesBusiness;
    } else if (tab_id === "tabEcommerce") {
      pricesNodes = pricesNodesEcommerce;
    } else if (tab_id === "tabAgency") {
      pricesNodes = pricesNodesAgency;
    }
    return pricesNodes;
  };

  const switchTypeTabs = (tab_id) => {
    $(".tabs-panel__tab" + '[data-tab=' + tab_id + ']').addClass("active");
    $("#" + tab_id + ".tab-content").addClass("active");
    let pricesNodes = getPricesNodesArray(tab_id);
    switchChargePeriod(tab_id, pricesNodes);
  };

  const getValuePositionOnRange = (countOfIteration, value, priceItem) => {
    let part = (priceItem.end - priceItem.start) / countOfIteration;
    for (i of Array(countOfIteration).keys()) {
      if (value <= priceItem.start + (part * i) && value < priceItem.start + (part * i - 1)) {
        return i + 1
      }
    }
  };

  let getWeightCoefficient = (priceItem, countOfIteration, specifiedIteration) => {
    return priceItem.prev_coefficient - (((priceItem.prev_coefficient - priceItem.coefficient) / countOfIteration) * specifiedIteration);
  };

  const getValueCoefficient = (value, priceItem) => {
    if (priceItem.prev_coefficient) {
      let countOfIteration = 20;
      let valuePositionInRange = getValuePositionOnRange(countOfIteration, value, priceItem);
      if (valuePositionInRange) {
        return getWeightCoefficient(priceItem, countOfIteration, valuePositionInRange);
      }
      return priceItem.coefficient;
    }
    return priceItem.coefficient
  };

  const getValueRelatedToRange = (value, priceItem) => {
    if (value < priceItem.intRange.start) {
      return priceItem.intRange.start
    }
    return value
  };

  const getWeightValue = (value, priceItem) => {
    return Math.round(getValueRelatedToRange(value / getValueCoefficient(value, priceItem), priceItem));
  };

  const setValueForSliderLabel = (activePlan, value, priceItem, showRange = false) => {
    const weightValue = getWeightValue(value, priceItem);
    if (showRange === true) {
      document.getElementById(`${activePlan}-current-selected-visitors`).innerText = priceItem.range
    } else if (weightValue < sliderMinValue) {
      document.getElementById(`${activePlan}-current-selected-visitors`).innerText = '1';
    } else if (value >= sliderMaxValue || weightValue === priceItem.intRange.end) {
      let sliderRanges = getSliderRangesByPlan(selectedPlan);
      document.getElementById(`${activePlan}-current-selected-visitors`).innerText =
        sliderRanges[sliderRanges.length - 1].range;
    } else {
      document.getElementById(`${activePlan}-current-selected-visitors`).innerText =
        Math.round(weightValue).toLocaleString();
    }
  };

  const getDefaultPriceTagUsersCount = (activePlan) => {
    if (activePlan === 'tabAgency') {
      return 3;
    } else if (activePlan === 'tabBusiness') {
      return Number(5000).toLocaleString();
    } else {
      return Number(5000).toLocaleString();
    }
  };

  const getDefaultSliderValue = (selectedPlan) => {
    let priceCardLabel = $(`#${selectedPlan} .tab-content__plans-aside form .plans-aside__cards > .plans-aside_card.active > .plans-aside__radio-label`);
    if (priceCardLabel) {
      let priceCardID = priceCardLabel.attr('for');
      return setSliderValueFromPriceCard(selectedPlan, priceCardID);
    }
    if (selectedPlan === 'tabAgency') {
      return 3 * agencySliderRange[0].coefficient;
    } else if (selectedPlan === 'tabBusiness') {
      return 5000 * businessSliderRange[0].coefficient;
    } else {
      return 5000 * eCommerceSliderRange[0].coefficient;
    }
  };

  const getPriceItemBySliderValue = (activePlan, value) => {
    let sliderRanges = getSliderRangesByPlan(activePlan);
    for (let i = 0; i < sliderRanges.length; i++) {
      let weightValue = getWeightValue(value, sliderRanges[i]);
      if (sliderRanges[i].intRange.start <= weightValue) {
        if (weightValue < sliderRanges[i].intRange.end) {
          return sliderRanges[i];
        } else if (sliderRanges[i] === sliderRanges[sliderRanges.length - 1]) {
          return sliderRanges[i]
        }
      }
    }
  };

  const setActivePriceCard = (activePlan, range) => {
    let priceCardId = getPriceCardId(activePlan, range);
    $(`#${priceCardId}`).prop('checked', true).trigger('change');
    $(`#${activePlan} .plans-aside_card`).removeClass("active");
    $(`#${priceCardId}`).parents('.plans-aside_card').addClass("active");
  };

  const initSlider = (tab_id) => {
    const $priceTag = $("#" + tab_id + " .tab-content__price-tag");
    const $currentVisitors = $("#" + tab_id + " .bubble__visitors-thumb-position");
    const $sliderDOMNode = $("#" + tab_id + " [data-id='slider-range-min']" + "." + tab_id);

    $sliderDOMNode.slider({
      range: "min",
      value: getDefaultSliderValue(selectedPlan),
      min: sliderMinValue,
      max: sliderMaxValue,
      slide: function (e, ui) {
        let priceItem = getPriceItemBySliderValue(selectedPlan, ui.value);
        setValueForSliderLabel(selectedPlan, ui.value, priceItem);
        setActivePriceCard(selectedPlan, priceItem.range);
      },
      create: function () {
        $currentVisitors[0].innerText = getDefaultPriceTagUsersCount(selectedPlan);
      },
      stop: function (e, ui) {
        let priceItem = getPriceItemBySliderValue(selectedPlan, ui.value);
        setValueForSliderLabel(selectedPlan, ui.value, priceItem);
        $currentVisitors
          .css({
            "color": "#46535D",
          });

        if (getWindowWidth() <= TABLET_WIDTH) {
          $sliderHandler
            .css({
              "width": "40px",
              "height": "40px",
              "top": "-1em",
            });
        } else {
          $sliderHandler
            .css({
              "width": "30px",
              "height": "30px",
              "top": "-.8em",
            });
        }

      }
    });

    let $sliderHandler = $sliderDOMNode.slider("widget").children(".ui-slider-handle");

    let handlerPosition = parseInt($sliderHandler[0].style.left);
    setPriceTagPosition($priceTag, handlerPosition);


    // Default position for price tag
    if (getWindowWidth() > 425 && getWindowWidth() <= TABLET_WIDTH) {
      setPriceTagPosition($priceTag, 100);
    } else if (getWindowWidth() <= 425) {
      setPriceTagPosition($priceTag, 40);
      $sliderDOMNode.slider("option", "classes.ui-slider-handle", "margin-left");
    }


    $sliderDOMNode.on("slide", function (event, ui) {
      setPriceTagPosition($priceTag, parseInt($sliderHandler[0].style.left));
    });

    $sliderDOMNode.on("slidechange", function (event, ui) {
      setPriceTagPosition($priceTag, parseInt($sliderHandler[0].style.left));
      //  Set default value in price tag after value was changed programmatically
      let priceItem = getPriceItemBySliderValue(selectedPlan, ui.value);
      setValueForSliderLabel(selectedPlan, ui.value, priceItem);
    });

    $sliderDOMNode.on("slidestart", function () {
      $currentVisitors
        .css({
          "color": "#ECB100",
        });

      if (getWindowWidth() <= TABLET_WIDTH) {
        $sliderHandler
          .css({
            "width": "42px",
            "height": "42px",
            "top": "-1.1em",
          });
      } else {
        $sliderHandler
          .css({
            "width": "34px",
            "height": "34px",
            "top": "-.9em",
          });
      }

    });

    $sliderDOMNode.on("slidestop", function () {
      // To avoid hiding of thumb shift it in min/max positions on mobile M screens
      if (getWindowWidth() <= 375 && parseInt($sliderHandler[0].style.left) >= 95) {
        $sliderHandler.css({ "marginLeft": "-1.1em" });
      } else if (getWindowWidth() <= 375 && parseInt($sliderHandler[0].style.left) <= 5) {
        $sliderHandler.css({ "marginLeft": "-.6em" });
      }
    });

    // Switch active price card with click on whole collapsed card
    $(`#${selectedPlan} .tab-content__plans-aside form .plans-aside__cards > .plans-aside_card`).on("click", (e) => {
      let priceCardId = e.currentTarget.children[0].getAttribute('for');
      $(`#${priceCardId}`).prop('checked', true).trigger('change');


      let newSliderValue = setSliderValueFromPriceCard(selectedPlan, priceCardId);
      let sliderDOMNode = $("#" + selectedPlan + " [data-id='slider-range-min']" + "." + selectedPlan);
      sliderDOMNode.slider("option", "value", newSliderValue);
      let priceItem = getPriceItemBySliderValue(selectedPlan, newSliderValue);

      setValueForSliderLabel(selectedPlan, newSliderValue, priceItem, true);

      const priceTag = $("#" + selectedPlan + " .tab-content__price-tag");
      let $sliderHandler = $sliderDOMNode.slider("widget").children(".ui-slider-handle");

      let handlerPosition = parseInt($sliderHandler[0].style.left);
      setPriceTagPosition(priceTag, handlerPosition);
    });

  };

  // Toggles features list on tablet/mobile screen
  let lastWindowWidth = getWindowWidth();
  if(lastWindowWidth <= 768) {
    $('.features-item').click(function () {
      $(this).children('.chevron-icon').toggleClass('active');
      $(this).next().slideToggle('slow');
    })
  }

});
