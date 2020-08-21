<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from oribi.io/roi-calculator by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 07:35:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta property="og:image" content="../res.cloudinary.com/oribi/image/upload/fl_immutable_cache/v1518355594/static/logo.png" />
<meta property="og:description" content="" />
<meta property="og:title" content="Oribi - ROI Calculator "/>

    <link rel='icon' href='assets/images/common/favicon.png' type='image/x-icon' />
    <title>NectarSpot - ROI Calculator </title>
    <!-- <link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" >
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="../cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/site/css/styles.minc9e1.css?104">
    <link rel="stylesheet" href="assets/site/css/new-footer.mineccb.css?3"> -->

    <script type="application/javascript" src="code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="application/javascript" src="code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="application/javascript" async src="cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script type="application/javascript" async src="cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    <script type="application/javascript" async src="assets/site/js/jquery.scrollify.js"></script>
    <script type="application/javascript" defer src="cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="application/javascript" async src="assets/site/js/scrollspy.js"></script>
    <script type="application/javascript" async src="cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="application/javascript" async src="cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js"></script>
    <script type="application/javascript" async src="assets/site/js/scripts.min8f14.js?7"></script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <!--STATIC-->
        <!-- Facebook Pixel Code -->

<!-- End of profitwell -->
    <!-- Stripe -->
<script src="../widget.cloudinary.com/global/all.js" type="text/javascript"></script>
<!-- End Stripe -->


</head>
<body class="oribi-for-ecommerce-only features-agencies-only">
<div id="wrapper" >
        



    
<div id="roi-calculator-main">
    <link rel="stylesheet" href="assets/site/css/roi-calculatora87f.css?4">

    <div class="roi-calc-wrapper">

        <section class="calculator-header">
            <div class="calculator-header__logo">
                <img src="https://nectarspot.com/images/nectar.png" style="height: 50px;" alt="logo">
            </div>
            <div class="calculator-header__sub-title">
                <span>ROI Calculator</span>
            </div>
            <div class="calculator-header__title">
                <span>Save Money with the right data</span>
            </div>
            <div class="calculator-header__description">
                <div>
                    With limited time and resources, we marketers need to focus on the efforts that actually draw
                    results. The right data will help you save money previously spent on the wrong activities, better
                    focus your resources, and increase your revenue. Find out how much you can earn with <strong>NectarSpot </strong>for
                    every dollar spent.
                </div>
            </div>
            <div class="calculator-header__select">
                <div class="calculator-header__select-type">
                    <label for="business-type">Business type</label>
                    <select name="businessType" id="business-type">
                        <option selected value="Company">Company</option>
                        <option value="Marketing Agency">Marketing Agency</option>
                        <option value="eCommerce">eCommerce</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="calculator-header__select-type">
                    <label for="currency-type">Currency</label>
                    <select name="currency" id="currency-type">
                        <option value="$">US Dollar</option>
                        <option value="€">Euro</option>
                        <option value="£">GBP</option>
                    </select>
                </div>
            </div>
        </section>

        <!--
            For convenient distinguish: "-DM-" in IDs names is short for "digital marketing";
            "-AR" is "analytics and reports";
            "-MA-" in IDs names is short for "marketing agency";
            "-EC" in IDs names is short for "eCommerce";
            "-OTH" in IDs names is short for "other";
        -->
        <article class="company-view currency-change-scope">
            <section class="digital-marketing">
                <div class="digital-marketing__header">
                    <div class="toggle-button" id="toggle">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly spend on digital marketing</span>
                    <div class="digital-marketing__header--input">
                        <span class="currency">$</span>
                        <input
                            id="digital-marketing"
                            name="digitalMarketing"
                            type="text"
                            min="0">
                    </div>
                </div>
                <div class="digital-marketing__items" id="content1">
                    <div class="digital-marketing__item-first">
                        <span>Advertising</span>
                        <div>
                            <span class="currency">$</span>
                            <input
                                id="advertising"
                                name="advertising"
                                type="text"
                                min="0">
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Content</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="content"
                                name="content"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Website optimization</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="website-optimization"
                                name="websiteOptimization"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Email marketing</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="email-marketing"
                                name="emailMarketing"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Social media</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="social-media"
                                name="socialMedia"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Other</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="other"
                                name="otherHours"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                    <input
                        class="cost-change"
                        id="percentage-saved-with-oribi-DM"
                        name="pctSavedWithOribi"
                        type="text"
                        min="0"
                        value="20">
                    <span class="item">%</span>
                </span>
                        <span>Costs per hour
                    <span class="currency">
                        $
                    </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-DM"
                            name="costsPerHour"
                            type="text"
                            min="0"
                            value="50">
                    </span>
                    </div>
                </div>

            </section>

            <section class="product-price">
                <div class="product-price__header">
                    <div class="product-price__header-left">
                        <div class="toggle-button" id="toggle2">
                            <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                        </div>
                        <span class="header-title">Avg product price</span>
                        <div class="digital-marketing__header--input">
                            <span class="currency">$</span>
                            <input
                                id="avg-product-price"
                                name="avgProductPrice"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                    <div class="product-price__header-right">
                        <span class="header-title">Avg monthly unit sales</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="avg-monthly-unit-sales"
                                name="avgMonthlyUnitSales"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content2">
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Revenue increase with Nectarspot
                            <input
                                class="cost-change"
                                id="revenue-increase-with-oribi"
                                name="revenueIncreaseWithOribi"
                                type="text"
                                min="0"
                                value="20">
                            <span class="item">%</span>
                        </span>
                    </div>
                </div>
            </section>

            <section class="analytics-report">
                <div class="analytics-report__header">
                    <div class="toggle-button" id="toggle3">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly hours spend on analytics and reports</span>
                    <div class="digital-marketing__item-input">
                        <input
                            id="monthly-hours-on-analytics"
                            name="avgMonthlyHoursAnalyticsReports"
                            type="text"
                            min="0"
                            value="">
                        <span>Hours/ <br> month </span>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content3">
                    <div class="digital-marketing__item">
                        <span>Tracking and analysis</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="tracking-analysis"
                                name="trackingAndAnalysis"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Reports</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="reports"
                                name="reports"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Setting up events</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="setting-up-events"
                                name="settingUpEvents"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                        <input
                            class="cost-change"
                            id="percentage-saved-with-oribi-AR"
                            name="pctSavedWithOribi"
                            type="text"
                            value="20"
                            min="0">
                        <span class="item">%</span>
                    </span>
                        <span>Costs per hour
                        <span class="currency">
                            $
                        </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-AR"
                            name="costsPerHour"
                            type="text"
                            value="50"
                            min="0">
                    </span>
                    </div>
                </div>
            </section>
        </article>

        <article class="agency-view currency-change-scope">
            <section class="digital-marketing">
                <div class="digital-marketing__header">
                    <span class="header-title">Total Number of members in your team</span>
                    <div class="digital-marketing__header--input">
                        <input
                            id="total-number-clients"
                            name="totalNumberOfClients"
                            type="text"
                            min="0"
                            value="">
                    </div>
                </div>
            </section>

            <section class="product-price">
                <div class="product-price__header">
                    <div class="product-price__header-left monthly-rev-per-client">
                        <span class="header-title">Avg monthly revenue per Team Member</span>
                        <div class="digital-marketing__header--input">
                            <span class="currency">$</span>
                            <input
                                id="avg-revenue-per-client"
                                name="avgMonthlyRevenuePerClient"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="analytics-report">
                <div class="analytics-report__header">
                    <span class="header-title">Avg monthly hours spent per Team Member</span>
                    <div class="digital-marketing__item-input">
                        <input
                            id="avg-hours-per-client"
                            name="avgMonthlyHoursPerClient"
                            type="text"
                            min="0"
                            value="">
                    </div>
                </div>
            </section>

            <section class="agency-calculation-based">
                <div class="digital-marketing__calculation-based">
                    <span>*Calculations based on:</span>
                    <span>Percentage saved with Nectarspot
                    <input
                        class="cost-change"
                        id="mrtk-percentage-saved"
                        name="pctSavedWithOribi"
                        type="text"
                        min="0"
                        value="20">
                    <span class="item">%</span>
                </span>
                    <span>Costs per hour
                    <span class="currency">
                        $
                    </span>
                        <input
                            class="cost-change"
                            id="mrtk-costs-per-hour"
                            name="costsPerHour"
                            type="text"
                            min="0"
                            value="50">
                </span>
                </div>
            </section>
        </article>

        <article class="ecommerce-view currency-change-scope">
            <section class="digital-marketing">
                <div class="digital-marketing__header">
                    <div class="toggle-button" id="toggle4">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly spend on digital marketing</span>
                    <div class="digital-marketing__header--input">
                        <span class="currency">$</span>
                        <input
                            id="digital-marketing-EC"
                            name="monthlyDigitalMarketing"
                            type="text"
                            min="0">
                    </div>
                </div>
                <div class="digital-marketing__items" id="content4">
                    <div class="digital-marketing__item-first">
                        <span>Advertising</span>
                        <div>
                            <span class="currency">$</span>
                            <input
                                id="advertising-EC"
                                name="advertising"
                                type="text"
                                min="0">
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Content</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="content-EC"
                                name="content"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Website optimization</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="website-optimization-EC"
                                name="websiteOptimization"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Email marketing</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="email-marketing-EC"
                                name="emailMarketing"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Social media</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="social-media-EC"
                                name="socialMedia"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Other</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="other-EC"
                                name="otherHours"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                    <input
                        class="cost-change"
                        id="percentage-saved-with-oribi-DM-EC"
                        name="pctSavedWithOribi"
                        type="text"
                        min="0"
                        value="20">
                    <span class="item">%</span>
                </span>
                        <span>Costs per hour
                    <span class="currency">
                        $
                    </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-DM-EC"
                            name="costsPerHour"
                            type="text"
                            min="0"
                            value="50">
                </span>
                    </div>
                </div>
            </section>

            <section class="product-price orders-details">
                <div class="product-price__header">
                    <div class="product-price__header-left">
                        <div class="toggle-button" id="toggle5">
                            <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                        </div>
                        <span class="header-title">Avg revenue per order</span>
                        <div class="digital-marketing__header--input">
                            <span class="currency">$</span>
                            <input
                                id="avg-revenue-per-order-EC"
                                name="avgRevenuePerOrder"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                    <div class="product-price__header-right">
                        <span class="header-title">Avg monthly number of orders</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="avg-month-num-orders-EC"
                                name="avgMonthlyNumOfOrders"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content5">
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Revenue increase with Nectarspot
                        <input
                            class="cost-change"
                            id="revenue-increase-with-oribi-EC"
                            name="revenueIncreaseWithOribi"
                            type="text"
                            min="0"
                            value="20">
                        <span class="item">%</span>
                    </span>
                    </div>
                </div>
            </section>

            <section class="analytics-report">
                <div class="analytics-report__header">
                    <div class="toggle-button" id="toggle6">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly hours spend on analytics and reports</span>
                    <div class="digital-marketing__item-input">
                        <input
                            id="monthly-hours-on-analytics-EC"
                            name="avgMonthlyHoursAnalyticsReports"
                            type="text"
                            min="0"
                            value="">
                        <span>Hours/ <br> month </span>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content6">
                    <div class="digital-marketing__item">
                        <span>Tracking and analysis</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="tracking-analysis-EC"
                                name="trackingAndAnalysis"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Reports</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="reports-EC"
                                name="reports"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Setting up events</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="setting-up-events-EC"
                                name="settingUpEvents"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                        <input
                            class="cost-change"
                            id="percentage-saved-with-oribi-AR-EC"
                            name="pctSavedWithOribi"
                            type="text"
                            value="20"
                            min="0">
                        <span class="item">%</span>
                    </span>
                        <span>Costs per hour
                        <span class="currency">
                            $
                        </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-AR-EC"
                            name="costsPerHour"
                            type="text"
                            value="50"
                            min="0">
                    </span>
                    </div>
                </div>
            </section>
        </article>

        <article class="other-view currency-change-scope">
            <section class="digital-marketing">
                <div class="digital-marketing__header">
                    <div class="toggle-button" id="toggle7">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly spend on digital marketing</span>
                    <div class="digital-marketing__header--input">
                        <span class="currency">$</span>
                        <input
                            id="digital-marketing-OTH"
                            name="monthlyDigitalMarketing"
                            type="text"
                            min="0">
                    </div>
                </div>
                <div class="digital-marketing__items" id="content7">
                    <div class="digital-marketing__item-first">
                        <span>Advertising</span>
                        <div>
                            <span class="currency">$</span>
                            <input
                                id="advertising-OTH"
                                name="advertising"
                                type="text"
                                min="0">
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Content</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="content-OTH"
                                name="content"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Website optimization</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="website-optimization-OTH"
                                name="websiteOptimization"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Email marketing</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="email-marketing-OTH"
                                name="emailMarketing"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Social media</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="social-media-OTH"
                                name="socialMedia"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Other</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="other-OTH"
                                name="otherHours"
                                type="text"
                                min="0">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                    <input
                        class="cost-change"
                        id="percentage-saved-with-oribi-DM-OTH"
                        name="pctSavedWithOribi"
                        type="text"
                        min="0"
                        value="20">
                    <span class="item">%</span>
                </span>
                        <span>Costs per hour
                    <span class="currency">
                        $
                    </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-DM-OTH"
                            name="costsPerHour"
                            type="text"
                            min="0"
                            value="50">
                </span>
                    </div>
                </div>
            </section>

            <section class="product-price">
                <div class="product-price__header">
                    <div class="product-price__header-left">
                        <div class="toggle-button" id="toggle8">
                            <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                        </div>
                        <span class="header-title">Avg product price</span>
                        <div class="digital-marketing__header--input">
                            <span class="currency">$</span>
                            <input
                                id="avg-product-price-OTH"
                                name="avgProductPrice"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                    <div class="product-price__header-right">
                        <span class="header-title">Avg monthly unit sales</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="avg-monthly-unit-sales-OTH"
                                name="avgMonthlyUnitSales"
                                type="text"
                                min="0"
                                value="">
                        </div>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content8">
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Revenue increase with Nectarspot
                        <input
                            class="cost-change"
                            id="revenue-increase-with-oribi-OTH"
                            name="revenueIncreaseWithOribi"
                            type="text"
                            min="0"
                            value="20">
                        <span class="item">%</span>
                    </span>
                    </div>
                </div>
            </section>

            <section class="analytics-report">
                <div class="analytics-report__header">
                    <div class="toggle-button" id="toggle9">
                        <img src="assets/images/roi-calculator/Chevron-down.svg" alt="check">
                    </div>
                    <span class="header-title">Monthly hours spend on analytics and reports</span>
                    <div class="digital-marketing__item-input">
                        <input
                            id="monthly-hours-on-analytics-OTH"
                            name="avgMonthlyHoursAnalyticsReports"
                            type="text"
                            min="0"
                            value="">
                        <span>Hours/ <br> month </span>
                    </div>
                </div>
                <div class="digital-marketing__items" id="content9">
                    <div class="digital-marketing__item">
                        <span>Tracking and analysis</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="tracking-analysis-OTH"
                                name="trackingAndAnalysis"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Reports</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="reports-OTH"
                                name="reports"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__item">
                        <span>Setting up events</span>
                        <div class="digital-marketing__item-input">
                            <input
                                id="setting-up-events-OTH"
                                name="settingUpEvents"
                                type="text"
                                min="0"
                                value="">
                            <span>Hours/ <br> month </span>
                        </div>
                    </div>
                    <div class="digital-marketing__calculation-based">
                        <span>Calculations based on:</span>
                        <span>Percentage saved with Nectarspot
                        <input
                            class="cost-change"
                            id="percentage-saved-with-oribi-AR-OTH"
                            name="pctSavedWithOribi"
                            type="text"
                            value="20"
                            min="0">
                        <span class="item">%</span>
                    </span>
                        <span>Costs per hour
                        <span class="currency">
                            $
                        </span>
                        <input
                            class="cost-change"
                            id="costs-per-hour-AR-OTH"
                            name="costsPerHour"
                            type="text"
                            value="50"
                            min="0">
                    </span>
                    </div>
                </div>
            </section>

        </article>

        <section class="result currency-change-scope" id="total-results">
            <div class="result_title">
                <span>Your MONTHLY Savings:</span>
            </div>
            <div class="result_image-items">
                <div class="result_image-item">
                    <img src="assets/images/roi-calculator/Wallet.svg" alt="wallet">
                    <span class="img-description">
                        <span class="currency close-to-sibling">$</span>
                        <span class="company-monthly-total-saved" id="monthly-total-saved">0</span>
                        <span class="agency-monthly-total-saved">0</span>
                        <span class="ecommerce-monthly-total-saved">0</span>
                        <span class="other-monthly-total-saved">0</span>
                    </span>
                    <span class="result_image-item-desc">saved</span>
                </div>
                <div class="result_image-item">
                    <img src="assets/images/roi-calculator/Graph.svg" alt="graph">
                    <span class="img-description">
                        <span class="currency close-to-sibling">$</span>
                        <span class="company-monthly-new-revenue" id="monthly-new-revenue">0</span>
                        <span class="agency-monthly-new-revenue">0</span>
                        <span class="ecommerce-monthly-new-revenue">0</span>
                        <span class="other-monthly-new-revenue">0</span>
                    </span>
                    <span class="result_image-item-desc">new revenue</span>
                </div>
                <div class="result_image-item">
                    <img src="assets/images/roi-calculator/Time.svg" alt="time">
                    <span class="img-description">
                        <span class="company-monthly-total-hours-saved" id="monthly-total-hours-saved">0</span>
                        <span class="agency-monthly-total-hours-saved">0</span>
                        <span class="ecommerce-monthly-total-hours-saved">0</span>
                        <span class="other-monthly-total-hours-saved">0</span>
                        hours
                    </span>
                    <span class="result_image-item-desc">you can now dedicate to </br> other projects</span>
                </div>
            </div>
            
        </section>

       

    </div>

    <script type="application/javascript" src="assets/site/js/roi-calc-refactorc81e.js?2"></script>
    <script type="application/javascript" src="assets/site/js/roi-calc-togglee4da.js?5"></script>
    

</div>



        

</div><!-- wrapper -->

    
</body>


</html>
