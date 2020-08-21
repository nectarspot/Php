const typeViewList = {
  'Company': $('.company-view'),
  'Marketing Agency': $('.agency-view'),
  'eCommerce': $('.ecommerce-view'),
  'Other': $('.other-view'),
};

const companyTypeInputs = {
  dmMain: $('#digital-marketing'),
  dmAdv: $('#advertising'),
  dmContentH: $('#content'),
  dmOptimizH: $('#website-optimization'),
  dmEmailMarketH: $('#email-marketing'),
  dmSocialMedH: $('#social-media'),
  dmOtherH: $('#other'),
  dmPercSaved: $('#percentage-saved-with-oribi-DM'),
  dmCostsPerH: $('#costs-per-hour-DM'),
  avgProdPrice: $('#avg-product-price'),
  avgMonthSls: $('#avg-monthly-unit-sales'),
  avgRevInc: $('#revenue-increase-with-oribi'),
  hrsTop: $('#monthly-hours-on-analytics'),
  hrsTrackAndAnalysis: $('#tracking-analysis'),
  hrsReports: $('#reports'),
  hrsEvents: $('#setting-up-events'),
  hrsPercSaved: $('#percentage-saved-with-oribi-AR'),
  hrsCostPerHour: $('#costs-per-hour-AR'),
};

const marketingAgencyTypeInputs = {
  mrktNumClients: $('#total-number-clients'),
  avgMonthRevPerClient: $('#avg-revenue-per-client'),
  avgMonthHrsPerClient: $('#avg-hours-per-client'),
  mrtkPercSaved: $('#mrtk-percentage-saved'),
  mrtkCostsPerHour: $('#mrtk-costs-per-hour'),
};

const eCommerceTypeInputs = {
  dmMain: $('#digital-marketing-EC'),
  dmAdv: $('#advertising-EC'),
  dmContentH: $('#content-EC'),
  dmOptimizH: $('#website-optimization-EC'),
  dmEmailMarketH: $('#email-marketing-EC'),
  dmSocialMedH: $('#social-media-EC'),
  dmOtherH: $('#other-EC'),
  dmPercSaved: $('#percentage-saved-with-oribi-DM-EC'),
  dmCostsPerH: $('#costs-per-hour-DM-EC'),
  avgRevPerOrder: $('#avg-revenue-per-order-EC'),
  avgMonthNumOrders: $('#avg-month-num-orders-EC'),
  avgRevInc: $('#revenue-increase-with-oribi-EC'),
  hrsTop: $('#monthly-hours-on-analytics-EC'),
  hrsTrackAndAnalysis: $('#tracking-analysis-EC'),
  hrsReports: $('#reports-EC'),
  hrsEvents: $('#setting-up-events-EC'),
  hrsPercSaved: $('#percentage-saved-with-oribi-AR-EC'),
  hrsCostPerHour: $('#costs-per-hour-AR-EC'),
};

const otherTypeInputs = {
  dmMain: $('#digital-marketing-OTH'),
  dmAdv: $('#advertising-OTH'),
  dmContentH: $('#content-OTH'),
  dmOptimizH: $('#website-optimization-OTH'),
  dmEmailMarketH: $('#email-marketing-OTH'),
  dmSocialMedH: $('#social-media-OTH'),
  dmOtherH: $('#other-OTH'),
  dmPercSaved: $('#percentage-saved-with-oribi-DM-OTH'),
  dmCostsPerH: $('#costs-per-hour-DM-OTH'),
  avgProdPrice: $('#avg-product-price-OTH'),
  avgMonthSls: $('#avg-monthly-unit-sales-OTH'),
  avgRevInc: $('#revenue-increase-with-oribi-OTH'),
  hrsTop: $('#monthly-hours-on-analytics-OTH'),
  hrsTrackAndAnalysis: $('#tracking-analysis-OTH'),
  hrsReports: $('#reports-OTH'),
  hrsEvents: $('#setting-up-events-OTH'),
  hrsPercSaved: $('#percentage-saved-with-oribi-AR-OTH'),
  hrsCostPerHour: $('#costs-per-hour-AR-OTH'),
};

const typesInputsAll = {
  'Company': companyTypeInputs,
  'Marketing Agency': marketingAgencyTypeInputs,
  'eCommerce': eCommerceTypeInputs,
  'Other': otherTypeInputs,
};

const companyTypeResults = {
  $monthlyTotalSaved: $('.company-monthly-total-saved'),
  $yearlyTotalSaved: $('.company-yearly-total-saved'),
  $monthlyNewRev: $('.company-monthly-new-revenue'),
  $yearlyNewRev: $('.company-yearly-new-revenue'),
  $monthlyHoursSaved: $('.company-monthly-total-hours-saved'),
  $yearlyHoursSaved: $('.company-yearly-total-hours-saved'),
};

const marketingAgencyTypeResults = {
  $monthlyTotalSaved: $('.agency-monthly-total-saved'),
  $yearlyTotalSaved: $('.agency-yearly-total-saved'),
  $monthlyNewRev: $('.agency-monthly-new-revenue'),
  $yearlyNewRev: $('.agency-yearly-new-revenue'),
  $monthlyHoursSaved: $('.agency-monthly-total-hours-saved'),
  $yearlyHoursSaved: $('.agency-yearly-total-hours-saved'),
};

const eCommerceTypeResults = {
  $monthlyTotalSaved: $('.ecommerce-monthly-total-saved'),
  $yearlyTotalSaved: $('.ecommerce-yearly-total-saved'),
  $monthlyNewRev: $('.ecommerce-monthly-new-revenue'),
  $yearlyNewRev: $('.ecommerce-yearly-new-revenue'),
  $monthlyHoursSaved: $('.ecommerce-monthly-total-hours-saved'),
  $yearlyHoursSaved: $('.ecommerce-yearly-total-hours-saved'),
};

const otherTypeResults = {
  $monthlyTotalSaved: $('.other-monthly-total-saved'),
  $yearlyTotalSaved: $('.other-yearly-total-saved'),
  $monthlyNewRev: $('.other-monthly-new-revenue'),
  $yearlyNewRev: $('.other-yearly-new-revenue'),
  $monthlyHoursSaved: $('.other-monthly-total-hours-saved'),
  $yearlyHoursSaved: $('.other-yearly-total-hours-saved'),
};

const typesResultsGroups = {
  'Company': companyTypeResults,
  'Marketing Agency': marketingAgencyTypeResults,
  'eCommerce': eCommerceTypeResults,
  'Other': otherTypeResults,
};

const businessTypeSelected = $('#business-type');

const businessTypesValueList = {
  company: 'Company',
  marketingAgency: 'Marketing Agency',
  eCommerce: 'eCommerce',
  other: 'Other',
};

/* === Change currency signs in corresponding inputs === */
const currencyTypeSelected = $('#currency-type');

currencyTypeSelected.on('change', function (e) {
  $('.currency-change-scope:visible .currency').text(e.target.value);
});

/* ===  Parse values from inputs === */
const getVal = ($el) => {
  if ($el.val().includes(',')) {
    const rawStrValue = $el.val(); // string with comma
    let strWithOutComma = rawStrValue.replace(',', '');
    return parseInt(strWithOutComma || 0);
  } else {
    return parseInt($el.val() || 0);
  }
};

/* === Validation for unwanted symbols in all inputs === */
const invalidChars = [ "-", "+", "e", "E", " " ];
$("input[type='text']").on('keydown', function (e) {
  if (invalidChars.includes(e.key)) {
    e.preventDefault();
  }
});

/* === 'Company' calculations === */
const sumDigitMarketHours = type => {
  return (
      getVal(typesInputsAll[type].dmContentH) +
      getVal(typesInputsAll[type].dmOptimizH) +
      getVal(typesInputsAll[type].dmEmailMarketH) +
      getVal(typesInputsAll[type].dmSocialMedH) +
      getVal(typesInputsAll[type].dmOtherH)
  );
};

const onSecondaryDigitMarketInputsChange = e => {
  const res = getVal(typesInputsAll[e.data.type].dmAdv) +
      sumDigitMarketHours(e.data.type) *
      getVal(typesInputsAll[e.data.type].dmCostsPerH);

  typesInputsAll[e.data.type].dmMain
      .prop('disabled', true)
      .val(res.toLocaleString())
      .trigger('input');

  typesInputsAll[e.data.type].dmMain
      .siblings('.currency').css('color', 'rgba(182, 182, 182, 0.33');
  generateShareURL(e.data.type);
};

const initSecondaryDigitMarket = type => {
  const inputsArray = [
    typesInputsAll[type].dmAdv,
    typesInputsAll[type].dmContentH,
    typesInputsAll[type].dmOptimizH,
    typesInputsAll[type].dmEmailMarketH,
    typesInputsAll[type].dmSocialMedH,
    typesInputsAll[type].dmOtherH,
    typesInputsAll[type].dmCostsPerH
  ];
  inputsArray.map(el => el.on('input', { type: type }, onSecondaryDigitMarketInputsChange));
};

const onAvgChange = (e) => {
  const resMonthly = getVal(e.data.array[0]) * getVal(e.data.array[1]) * (getVal(e.data.array[2]) / 100);
  typesResultsGroups[e.data.type].$monthlyNewRev.text(Math.round(resMonthly).toLocaleString());
  typesResultsGroups[e.data.type].$yearlyNewRev.text(Math.round(resMonthly * 12).toLocaleString());
  generateShareURL(e.data.type);
};

const initAvgRevChange = type => {
  let inputsArray = [
    typesInputsAll[type].avgProdPrice,
    typesInputsAll[type].avgMonthSls,
    typesInputsAll[type].avgRevInc
  ];
  inputsArray.map(el => el.on('input', { type: type, array: inputsArray }, onAvgChange));
};

const onSecondaryHoursChange = (e) => {
  const res = getVal(e.data.array[0]) + getVal(e.data.array[1]) + getVal(e.data.array[2]);
  typesInputsAll[e.data.type].hrsTop
      .prop('disabled', true)
      .val(res.toLocaleString())
      .trigger("input");
  generateShareURL(e.data.type);
};

const initSecondaryHrsChange = type => {
  const inputsArray = [
    typesInputsAll[type].hrsTrackAndAnalysis,
    typesInputsAll[type].hrsReports,
    typesInputsAll[type].hrsEvents
  ];
  inputsArray.map(el => el.on('input', { type: type, array: inputsArray }, onSecondaryHoursChange));
};

const calcMonthlyTotalHoursSaved = (e) => {
  const upperVal = sumDigitMarketHours(e.data.type) * getVal(typesInputsAll[e.data.type].dmPercSaved) / 100;
  const lowerVal = getVal(typesInputsAll[e.data.type].hrsTop) * getVal(typesInputsAll[e.data.type].hrsPercSaved) / 100;
  const resMonthly = upperVal + lowerVal;
  typesResultsGroups[e.data.type].$monthlyHoursSaved.text(Math.round(resMonthly).toLocaleString());
  typesResultsGroups[e.data.type].$yearlyHoursSaved.text(Math.round(resMonthly * 12).toLocaleString());
  generateShareURL(e.data.type);
};

const initMonthTotalHrsSaved = type => {
  const inputsArray = [
    typesInputsAll[type].dmContentH,
    typesInputsAll[type].dmOptimizH,
    typesInputsAll[type].dmEmailMarketH,
    typesInputsAll[type].dmSocialMedH,
    typesInputsAll[type].dmOtherH,
    typesInputsAll[type].dmPercSaved,
    typesInputsAll[type].hrsTop,
    typesInputsAll[type].hrsPercSaved
  ];
  inputsArray.map(el => el.on('input', { type: type }, calcMonthlyTotalHoursSaved));
};

const calcTotalSaved = (e) => {
  const resMonthly = (
      getVal(typesInputsAll[e.data.type].dmMain) *
      getVal(typesInputsAll[e.data.type].dmPercSaved) / 100) +
      (
          (getVal(typesInputsAll[e.data.type].hrsTop) *
              getVal(typesInputsAll[e.data.type].hrsCostPerHour)
          ) *
          getVal(typesInputsAll[e.data.type].hrsPercSaved) / 100);
  typesResultsGroups[e.data.type].$monthlyTotalSaved.text(Math.round(resMonthly).toLocaleString());
  typesResultsGroups[e.data.type].$yearlyTotalSaved.text(Math.round(resMonthly * 12).toLocaleString());
  generateShareURL(e.data.type);
};

const initCalcTotalSaved = type => {
  const inputsArray = [
    typesInputsAll[type].dmMain,
    typesInputsAll[type].dmPercSaved,
    typesInputsAll[type].hrsTop,
    typesInputsAll[type].hrsPercSaved,
    typesInputsAll[type].hrsCostPerHour,
  ];
  inputsArray.map(el => el.on('input', { type: type }, calcTotalSaved));
};

// Collect all init-functions
const calculateCompany = type => {
  initSecondaryDigitMarket(type);
  initAvgRevChange(type);
  initSecondaryHrsChange(type);
  initMonthTotalHrsSaved(type);
  initCalcTotalSaved(type);
};

/* === 'Marketing Agency' calculations === */
const calcTotalSavedAgency = e => {
  const resMonthly = getVal(marketingAgencyTypeInputs.avgMonthHrsPerClient) *
      (getVal(marketingAgencyTypeInputs.mrtkPercSaved) / 100) *
      getVal(marketingAgencyTypeInputs.mrtkCostsPerHour) *
      getVal(marketingAgencyTypeInputs.mrktNumClients);
  const resYearly = resMonthly * 12;

  if (!isNaN(resMonthly) && !isNaN(resYearly)) {
    typesResultsGroups[e.data.type].$monthlyTotalSaved.text(Math.round(resMonthly).toLocaleString());
    typesResultsGroups[e.data.type].$yearlyTotalSaved.text(Math.round(resYearly).toLocaleString());
  }
  generateShareURL(e.data.type);
};

const calcNewRevenueAgency = e => {
  const resMonthly = (
          (getVal(marketingAgencyTypeInputs.avgMonthHrsPerClient) *
              (getVal(marketingAgencyTypeInputs.mrtkPercSaved) / 100) *
              getVal(marketingAgencyTypeInputs.mrktNumClients)
          ) / getVal(marketingAgencyTypeInputs.avgMonthHrsPerClient)
      ) *
      getVal(marketingAgencyTypeInputs.avgMonthRevPerClient);

  const resYearly = resMonthly * 12;

  if (!isNaN(resMonthly) && !isNaN(resYearly)) {
    typesResultsGroups[e.data.type].$monthlyNewRev.text(Math.round(resMonthly).toLocaleString());
    typesResultsGroups[e.data.type].$yearlyNewRev.text(Math.round(resYearly).toLocaleString());
  }
  generateShareURL(e.data.type);
};

const calcTotalHoursSavedAgency = e => {
  const resMonthly = getVal(marketingAgencyTypeInputs.avgMonthHrsPerClient) *
      (getVal(marketingAgencyTypeInputs.mrtkPercSaved) / 100);
  typesResultsGroups[e.data.type].$monthlyHoursSaved.text(Math.round(resMonthly).toLocaleString());
  typesResultsGroups[e.data.type].$yearlyHoursSaved.text(Math.round(resMonthly * 12).toLocaleString());
  generateShareURL(e.data.type);
};

const initAgencySecondaryAllChange = type => {
  const inputsArray = [
    typesInputsAll[type].mrktNumClients,
    typesInputsAll[type].avgMonthRevPerClient,
    typesInputsAll[type].avgMonthHrsPerClient,
    typesInputsAll[type].mrtkPercSaved,
    typesInputsAll[type].mrtkCostsPerHour,
  ];
  inputsArray.map(el => el.on('input', { type: type }, e => {
    calcTotalSavedAgency(e, type);
    calcNewRevenueAgency(e, type);
    calcTotalHoursSavedAgency(e, type);
  }));
};

// Collect all init-functions
const calculateMarketingAgency = type => {
  initAgencySecondaryAllChange(type);
};


/* === 'eCommerce' calculations === */
const initAvgRevenueOrdersChange = type => {
  const inputsArray = [
    typesInputsAll[type].avgRevPerOrder,
    typesInputsAll[type].avgMonthNumOrders,
    typesInputsAll[type].avgRevInc
  ];
  inputsArray.map(el => el.on('input', { type: type, array: inputsArray }, onAvgChange));
};

// Collect all init-functions
const calculateECommerce = type => {
  initSecondaryDigitMarket(type);
  initAvgRevenueOrdersChange(type);
  initSecondaryHrsChange(type);
  initMonthTotalHrsSaved(type);
  initCalcTotalSaved(type);
};

/* === 'Other' calculations === */
// Collect all init-functions
const calculateOther = type => {
  initSecondaryDigitMarket(type);
  initAvgRevChange(type);
  initSecondaryHrsChange(type);
  initMonthTotalHrsSaved(type);
  initCalcTotalSaved(type);
};

const selectCalculationFormulas = type => {
  switch (type) {
    case businessTypesValueList.company:
      calculateCompany(type);
      break;
    case businessTypesValueList.marketingAgency:
      calculateMarketingAgency(type);
      break;
    case businessTypesValueList.eCommerce:
      calculateECommerce(type);
      break;
    case businessTypesValueList.other:
      calculateOther(type);
      break;
  }
};

/* === Show/hide forms/results for corresponding business type === */
let prevBusinessType = 'Company';
let activeBusinessType = null;

const displayBusinessTypeForm = (prevType, activeType) => {
  typeViewList[prevType].hide();
  let prevBusinessTypeResults = typesResultsGroups[prevType];
  Object.keys(prevBusinessTypeResults).forEach(el => prevBusinessTypeResults[el].hide());

  typeViewList[activeType].show();
  let activeBusinessTypeResults = typesResultsGroups[activeType];
  Object.keys(activeBusinessTypeResults).forEach(el => activeBusinessTypeResults[el].show());

  prevBusinessType = activeType;
  selectCalculationFormulas(activeType);
};

businessTypeSelected.on('change', function () {
  activeBusinessType = $(this).val();
  displayBusinessTypeForm(prevBusinessType, activeBusinessType);
});

// Initialize default calculations for 'Company' type
selectCalculationFormulas(businessTypeSelected.val());

/* === Generation of URL for sharing === */
const $shareUrl = $('#urlInput');

const generateShareURL = type => {
  let url = 'www.oribi.io/roi-calculator?';

  // Generate initial 2 parts of URL: business and currency parameters
  url += businessTypeSelected[0].name + '=' + businessTypeSelected.val() + '&' +
      currencyTypeSelected[0].name + '=' + currencyTypeSelected.val() + '&';

  // Join rest parameters
  const typeInputsObj = typesInputsAll[type];
  url = Object.keys(typeInputsObj).reduce((url, key) => {
    return url += typeInputsObj[key][0].name + '=' + getVal(typeInputsObj[key]) + '&';
  }, url);

  $shareUrl.val(url).trigger("input");
};

/* === Copy URL to clipboard === */
const copyUrl = () => {
  const copyUrl = document.getElementById("urlInput");
  copyUrl.select();
  copyUrl.setSelectionRange(0, 99999);
  document.execCommand("copy");
};

/* === Parse URL by parameters names and return its values === */
const parseUrlParams = paramName => {
  const results = new RegExp('[\?&]' + paramName + '=([^&#]*)').exec(window.location.href);
  if (results == null) return null;
  if (typeof results[1] === 'string') return decodeURI(results[1]);
  return parseInt(decodeURI(results[1])) || 0;
};

/* === Fill the form with values from parsed URL === */
const triggerInputsAndFillParsedData = type => {
  // Get corresponding form with inputs
  const typeInputsObj = typesInputsAll[type];
  const parsedDataNumbers = Object.keys(typeInputsObj).map(el => parseUrlParams(typeInputsObj[el][0].name));

  parsedDataNumbers.forEach(() => {
    Object.keys(typeInputsObj).forEach((el, index) => {
          typeInputsObj[el].val(parsedDataNumbers[index].toLocaleString());

          switch (type) {
            case 'Company':
            case "Other":
              [ typeInputsObj.dmMain,
                typeInputsObj.avgProdPrice,
                typeInputsObj.avgMonthSls,
                typeInputsObj.hrsTop ].forEach(el => el.trigger('input'));
              break;
            case 'eCommerce':
              [ typeInputsObj.dmMain,
                typeInputsObj.avgRevPerOrder,
                typeInputsObj.avgMonthNumOrders,
                typeInputsObj.hrsTop ].forEach(el => el.trigger('input'));
              break;
            case 'Marketing Agency':
              typeInputsObj[el].val(parsedDataNumbers[index].toLocaleString()).trigger('input');
              break;
          }
        }
    );
  });
};

const fillFormWithParsedData = type => {

  const parsedBusinessType = parseUrlParams(businessTypeSelected[0].name);
  businessTypeSelected.val(parsedBusinessType).change();

  const parsedCurrencyType = parseUrlParams(currencyTypeSelected[0].name);
  currencyTypeSelected.val(parsedCurrencyType).trigger('change');
  $('.currency-change-scope:visible .currency').text(parsedCurrencyType);

  triggerInputsAndFillParsedData(type);
};

const searchUrlPart = window.location.search;

/* === Check if there is pasted URL in address bar and invoke URL parsing === */
if (searchUrlPart) {
  // Get business type from URL
  const type = decodeURIComponent(searchUrlPart
      .substring(searchUrlPart.indexOf('=') + 1, searchUrlPart.indexOf('&')));
  fillFormWithParsedData(type);
}
