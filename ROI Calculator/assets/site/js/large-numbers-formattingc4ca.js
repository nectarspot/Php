// // AutoNumeric initialisation

// COMPANY type, default
[
  dmMainAddedComma,
  dmAdvtAddedComma,
  dmContAddedComma,
  dmSiteOptAddedComma,
  dmEmailMarkAddedComma,
  dmSocMediaAddedComma,
  dmOtherAddedComma
] = new AutoNumeric.multiple([
  '#digital-marketing',
  '#advertising',
  '#content',
  '#website-optimization',
  '#email-marketing',
  '#social-media',
  '#other' ], { decimalPlaces: 0 });

[
  avgProductPriceAddedComma,
  avgUnitSalesAddedComma
] = new AutoNumeric.multiple([
  '#avg-product-price',
  '#avg-monthly-unit-sales'
], { decimalPlaces: 0 });

[
  hrsTopAddedComma,
  hrsTrackAddedComma,
  hrsReportsAddedComma,
  hrsSetEventskAddedComma,
] = new AutoNumeric.multiple([
  '#monthly-hours-on-analytics',
  '#tracking-analysis',
  '#reports',
  '#setting-up-events' ], { decimalPlaces: 0 });


// MARKETING AGENCY type
[
  totalNumClientsAddedComma,
  monthlyRevPerClientAddedComma,
  avgHrsPerClientAddedComma
] = new AutoNumeric.multiple([
  '#total-number-clients',
  '#avg-revenue-per-client',
  '#avg-hours-per-client'
], { decimalPlaces: 0 });


// ECOMMERCE type
[
  dmMainAddedCommaEC,
  dmAdvtAddedCommaEC,
  dmContAddedCommaEC,
  dmSiteOptAddedCommaEC,
  dmEmailMarkAddedCommaEC,
  dmSocMediaAddedCommaEC,
  dmOtherAddedCommaEC
] = new AutoNumeric.multiple([
  '#digital-marketing-EC',
  '#advertising-EC',
  '#content-EC',
  '#website-optimization-EC',
  '#email-marketing-EC',
  '#social-media-EC',
  '#other-EC' ], { decimalPlaces: 0 });

[
  avgRevPerOrderAddedCommaEC,
  avgMonthNumOrdersAddedCommaEC
] = new AutoNumeric.multiple([
  '#avg-revenue-per-order-EC',
  '#avg-month-num-orders-EC' ], { decimalPlaces: 0 });

[
  monthlyHrsARAddedCommaEC,
  trackAnalysisAddedCommaEC,
  reportsAddedCommaEC,
  settingEventsAddedCommaEC,
] = new AutoNumeric.multiple([
  '#monthly-hours-on-analytics-EC',
  '#tracking-analysis-EC',
  '#reports-EC',
  '#setting-up-events-EC',
], { decimalPlaces: 0 });


// OTHER type
[
  dmMainAddedCommaOTH,
  dmAdvtAddedCommaOTH,
  dmContAddedCommaOTH,
  dmSiteOptAddedCommaOTH,
  dmEmailMarkAddedCommaOTH,
  dmSocMediaAddedCommaOTH,
  dmOtherAddedCommaOTH
] = new AutoNumeric.multiple([
  '#digital-marketing-OTH',
  '#advertising-OTH',
  '#content-OTH',
  '#website-optimization-OTH',
  '#email-marketing-OTH',
  '#social-media-OTH',
  '#other-OTH' ], { decimalPlaces: 0 });

[
  avgProductPriceAddedCommaOTH,
  avgUnitSalesAddedCommaOTH
] = new AutoNumeric.multiple([
  '#avg-product-price-OTH',
  '#avg-monthly-unit-sales-OTH'
], { decimalPlaces: 0 });

[
  hrsTopAddedCommaOTH,
  hrsTrackAddedCommaOTH,
  hrsReportsAddedCommaOTH,
  hrsSetEventskAddedCommaOTH,
] = new AutoNumeric.multiple([
  '#monthly-hours-on-analytics-OTH',
  '#tracking-analysis-OTH',
  '#reports-OTH',
  '#setting-up-events-OTH' ], { decimalPlaces: 0 });