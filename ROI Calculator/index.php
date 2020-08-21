<!DOCTYPE HTML>
<html lang="en">

<head><meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Savings Calculator </title>
	
	<link type="text/css" rel="stylesheet" href="assets/css/roical.css" media="all">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://codepen.io/nosurprisethere/pen/rJzKOe"></script>
	
	<style>.page-wrapper *{box-sizing:border-box;}
 .page-wrapper .content-wrap{padding:120px 0;max-width:1280px;}
 h1, h2, h3, h4, h5{font-family:'gilroybold';-webkit-font-feature-settings:"liga" 0, "clig" 0;-moz-font-feature-settings:"liga" 0, "clig" 0;font-feature-settings:"liga" 0, "clig" 0;}
 p{font-size:18px;}
.inline-block {display: inline-block;}
 .flex-wrap{display:flex;align-items:center;}
 .flex-wrap>div{width:50%;}
 .flex-item2{padding:0 0 0 50px;}
 .flex-item1{padding:0 50px 0 0;}
 #block-system-main, #block-panels-mini-product-menu{background:#eef0fc;}
 .banner-sec{padding:50px 0;text-align:center;}
 .banner-sec p{max-width:720px;margin:0 auto;}
 .zc-calc-part{border-radius:50px;background:#fff;display:table;box-shadow:0 0 50px rgba(0, 0, 0, 0.3);margin-bottom:100px;}
 .zc-calc-area h4{text-align:center;}
 .zc-calc-part>div{padding:50px;display:table-cell;box-sizing:border-box;vertical-align:middle }
 .zc-calc-part>div.zc-calc-area{width:68%;}
 .input-val-sec{padding:30px 0 20px;}
 .team-entry-sec{display:table;}
 .team-entry-sec h3{margin-bottom:0;}
 .team-entry-sec div{width:50%;display:table-cell;padding-right:10px;vertical-align:middle;}
 .team-entry-sec div:nth-child(2){width:30%;}
 input[type="text"]{width:100%;height:40px;line-height:32px;font-size:30px;border:none;border-bottom:2px solid #6549d8;margin-bottom:0px;box-sizing:border-box;max-width:100%;padding:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;}
 .calc-val-hint{font-size:16px;padding-top:10px;display:block;color:#666;}
 .slider-calc-sec{margin:50px 0;position:relative;}
 .slider-calc-sec h3{margin-bottom:40px;font-size:24px;}
 .slider-calc-sec h3 span{font-size:18px;color:#666;}
 .slider-calc-sec li{display:inline-block;width:19%;box-sizing:border-box;padding:0 30px 0 0;vertical-align:top;}
 .slider-calc-sec li:first-child{width:24%;}
 .slider-calc-sec li:last-child{padding:0 0 0 0;}
 .slider-calc-sec li h5{max-width:150px;margin-bottom:30px;}
 span.zslider-hl{position:absolute;width:0%;height:1px;top:50%;background:#47A6F1;z-index:2;left:0;}
 .show-signup-btn{position:absolute;width:85%;text-align:center;box-sizing:border-box;bottom:20px;opacity:0;visibility:hidden;transition:0.5s ease;}
 .show-signup-btn.show-btn{opacity:1;visibility:visible;}
 p.pay-info{padding:0;margin:0;}
 .zslider-input{height:20px;position:relative;width:100%;}
 #zslider-line{display:block;background:#d5d5d5;height:1px;position:absolute;left:0;top:50%;width:100%;margin-top:-0.5px;}
 #zslider-ball{position:absolute;width:20px;height:20px;background:#47A6F1;border-radius:100%;left:0;top:0;box-sizing:border-box;border:1.5px solid #fff;cursor:pointer;}
 .zbreakup-container{overflow:hidden;margin-top:25px;}
 .zbreakup{width:14%;margin:0 3%;float:left;text-align:center;border:1px solid #B9B9B9;border-radius:8px;padding:8px;line-height:1;box-sizing:border-box;position:relative;opacity:0.3;transition:all 0.5s ease;}
 .zbreakup.zshow{border:1px solid #47A6F1;opacity:1;}
 .user-limit{font-size:12px;display:block;}
 .zbreakup::after{content:"+";position:absolute;left:-28%;font-family:proxima_novasemibold;font-size:22px;top:50%;margin-top:-11px;}
 .zbreakup.zbreakup1::after{display:none;}
 .xslide{position:relative;box-sizing:border-box;width:45px;height:100%;margin-top:-28px;}
 .xslide .xslide-bg{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#ccc;border-radius:5px;}
 .zcal-button em:before{transform:rotate(-55deg);top:3px;right:-1px;}
 .xslide .xslide-handle-wrapper{position:absolute;top:1px;left:1px;right:1px;bottom:1px;}
 .xslide .xslide-handle-wrapper .xslide-handle{position:absolute;top:0;left:0;width:40px !important;height:40px !important;line-height:1.1 !important;background:#ff7b00;border:1px solid #fff;box-sizing:border-box;border-radius:100%;cursor:pointer;}
 .xslide .xslide-handle-wrapper .xslide-handle[data-isdrag="false"]{}
 .xslide[data-disabled="true"] .xslide-handle{cursor:not-allowed;}
 .xslide[data-direction="horizontal"] .xslide-bg{top:50%;height:1px;transform:translate(0, -50%);}
 .xslide[data-direction="horizontal"] .xslide-handle{top:50%;transform:translate(0, -50%);}
 .xslide[data-direction="vertical"] .xslide-bg{left:50%;width:5px;transform:translate(-50%, 0);}
 .xslide[data-direction="vertical"] .xslide-handle{left:0;width:10px;}
 .xslide-tooltip{display:none;}
 .xslide.mobile .xslide-bg{border-radius:15px;box-shadow:0 1px 1px rgba(0, 0, 0, 0.3) inset;}
 .xslide.mobile .xslide-handle-wrapper .xslide-handle{width:36px;height:36px;border-radius:36px;box-shadow:0 2px 5px rgba(0, 0, 0, 0.8);border:1px solid #5F5F5F;}
 .xslide.mobile[data-direction="horizontal"] .xslide-bg{height:16px;}
 .xslide.mobile[data-direction="vertical"] .xslide-bg{width:16px;}
 .zslider{height:150px;position:relative;width:auto;}
 .cal-users-val,.cal-users-val-m{width:40px;font-size:16px;border-radius:0;-moz-appearance:none;border:none;padding:0;float:left;height:40px;background:#00b36b;line-height:1;color:#fff;text-align:center;cursor:grab;margin:-1px 0 0 -1px;border:1px solid #fff;border-radius:100%;}
 .zc-calc-part>div.zc-result-area{width:32%;background:#6549d8;border-radius:0 50px 50px 0;color:#fff;padding:50px 10px;position:relative;}
 .zc-result-area::after{position: absolute;width: 100%;left: 0;top: 0;content: "";background-image: url('../sites/default/files/creator/header-bg.png');width: 100%;height: 100%;opacity: 0;transition: 1s;transform: scale(.1);background-size: 260%;background-position: 120px 40px;}
 .zc-result-area.animate::after{opacity:1;//height:100%;transform:scale(1) }
 .zc-result-area>div{background:#fff;padding:78px;display:inline-block;border-radius:20px;color:#6549d8;text-align:center;transform-origin:50% 100%;-moz-transform-origin:50% 100%;transform-box:fill-box;transform:scale(0);position:relative;opacity:0;z-index:9;}
 .zc-result-area>div.show-result{animation:bounceIn .95s 1;animation-timing-function:ease-in;animation-fill-mode:forwards;animation-delay:0.1s;}
 @-webkit-keyframes bounceIn{0%, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);animation-timing-function:cubic-bezier(.215, .61, .355, 1) }
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3) }
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1) }
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9) }
 60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03) }
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97) }
 to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1) }
 }
 @keyframes bounceIn{0%, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(.215, .61, .355, 1);animation-timing-function:cubic-bezier(.215, .61, .355, 1) }
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3) }
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1) }
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9) }
 60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03) }
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97) }
 to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1) }
 }
 .bounceIn{-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-name:bounceIn;animation-name:bounceIn }
 .zc-result-area>div h4{margin:0;}
 .calculated-result-area, .calculated-result-area-m{margin-top:20px;text-align:center;}
 .calculated-result, .calculated-result-m{font-family:'gilroybold';font-size:39px;color:#00b36b;display:inline-block;line-height:1;}
 .currecy-symbol, .currecy-symbol-m{display:inline-block;padding:5px;font-size:30px;}
 .calc-val-hint .currecy-symbol{display:inline-block;padding:0;font-style:normal;font-size:inherit;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:33px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:50px;display:block;}
 .calc-btn-sec{text-align:center;}
 .calc-btn{background:#00b36b;border:1px solid #00b36b;color:#fff;cursor:pointer;font-size:18px;padding:15px 40px;font-family:'proxima_nova_rgbold';width:100%;box-sizing:border-box;text-transform:uppercase;-webkit-appearance:none;-moz-appearance:none;appearance:none;max-width:300px;margin:0 auto;display:inline-block;}
 .addons-info-sec{padding:0 0 60px;display:table;}
 .note{display:table-cell;width:70%;padding:0 5% 0 0;font-size:14px;}
 .note p{font-size:14px;margin-bottom:10px;}
 .zcal-container-d, .calculated-result-area{display:block;}
 .zcal-container-m, .calculated-result-area-m{display:none;}
 @media all and (max-width:1140px){}
 @media all and (min-width:1200px) and (max-width:1360px){.slider-calc-sec li h5{font-size:14px;min-height:55px;}
 .team-entry-sec h3{margin-bottom:0;font-size:24px;}
 }
 @media all and (min-width:992px) and (max-width:1199px){.content-wrap{width:90%;}
.zc-result-area > div h4{font-size: 20px;}
 .page-wrapper .content-wrap{padding:90px 0;}
 .zc-calc-part>div.zc-result-area, .zc-calc-part>div.zc-calc-area{width:100%;border-radius:50px;display:block;}
 .show-signup-btn{position:relative;width:100%;bottom:auto;margin:50px auto 0;}
 .zc-result-area>div{display:block;max-width:450px;margin:0 auto;}
 .slider-calc-sec{text-align:center;}
 .xslide{margin:-28px auto 0;}
 .slider-calc-sec li h5{max-width:100%;}
 .slider-calc-sec li{display:inline-block;width:18%;}
 .input-val-sec{padding:30px 0 20px;max-width:630px;margin:0 auto;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-size:80px;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-size:60px;}
 .calculated-result, .calculated-result-m{font-size:90px;}

 .slider-calc-sec li h5{min-height:55px;}
 }
 @media all and (max-width:991px){.zcal-container-m, .calculated-result-area-m{display:block;}
 .zcal-container-d, .calculated-result-area{display:none;}
 .content-wrap{width:90%;}
 .page-wrapper .content-wrap{padding:90px 0;}
 .zc-calc-part>div.zc-result-area, .zc-calc-part>div.zc-calc-area{width:100%;border-radius:50px;display:block;}
 .show-signup-btn{position:relative;width:100%;bottom:auto;margin:50px auto 0;}
 .zc-result-area>div{display:block;max-width:450px;margin:0 auto;}
 .slider-calc-sec{text-align:center;}
 .xslide{margin:-28px auto 0;}
 .slider-calc-sec li h5{max-width:100%;}
 .slider-calc-sec li{display:inline-block;width:18%;}
 .input-val-sec{padding:30px 0 20px;max-width:630px;margin:0 auto;}
.slider-calc-sec{text-align:left;}
.slider-calc-sec li, .slider-calc-sec li:first-child, .slider-calc-sec li:last-child{display:inline-block;width:50%;text-align:left;padding:0 50px 50px 0;}
.xslide{margin:0;width:100%;height:10px;}
.xslide[data-direction="horizontal"] .xslide-bg{top:50%;height:5px;transform:translate(0, -50%);}
.slider-calc-sec li h5{max-width:100%;margin-bottom:10px;}
 .calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:80px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:60px;display:block;}
.zc-calc-part {
    margin-bottom: 50px;
display: block;
}
 }
 @media all and (max-width:767px){
.slider-calc-sec{margin-bottom: 0;}
.zc-calc-part{display: block; max-width: 600px; margin: 0 auto 50px;}
.zc-calc-part > div.zc-result-area, .zc-calc-part > div.zc-calc-area{padding:30px;}
.team-entry-sec div, .team-entry-sec div:nth-child(2){width:100%;display:block;}
.slider-calc-sec li, .slider-calc-sec li:first-child, .slider-calc-sec li:last-child{display:block;width:100%;text-align:left;padding:0 0 60px 0;}
.calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:70px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:50px;display:block;}
.note {
    display: block;
    width: 100%;
    padding: 0 5% 30px 0;
    font-size: 14px;
}
.zc-calc-part > div.zc-result-area, .zc-calc-part > div.zc-calc-area {
    border-radius: 30px;
}
zc-result-area > div {
padding: 20px;
}
}
@media all and (max-width:480px){
.calculated-result.reduce-font, .calculated-result-m.reduce-font{font-family:'gilroybold';font-size:60px;}
 .calculated-result.reduce-font2,.calculated-result-m.reduce-font2{font-size:40px;display:block;}
.zc-result-area > div h4 {
    font-size: 16px;
}
}

$shade-10: #2c3e50 !default;
$shade-1: #d7dcdf !default;
$shade-0: #fff !default;
$teal: #1abc9c !default;

// Reset
* {
  &,
  &:before,
  &:after {
    box-sizing: border-box;
  }
}

body {
  
  
  @media (min-width: 600px) {
    padding: 60px;
  }
}

.range-slider {
  margin: 60px 0 0 0%;
}


// Range Slider
$range-width: 100% !default;

$range-handle-color: $shade-10 !default;
$range-handle-color-hover: $teal !default;
$range-handle-size: 20px !default;

$range-track-color: $shade-1 !default;
$range-track-height: 10px !default;

$range-label-color: $shade-10 !default;
$range-label-width: 60px !default;

.range-slider {
  width: $range-width;
}

.range-slider__range {
  -webkit-appearance: none;
  width: calc(100% - (#{$range-label-width + 13px}));
  height: $range-track-height;
  border-radius: 5px;
  background: $range-track-color;
  outline: none;
  padding: 0;
  margin: 0;

  // Range Handle
  &::-webkit-slider-thumb {
    appearance: none;
    width: $range-handle-size;
    height: $range-handle-size;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-webkit-slider-thumb {
    background: $range-handle-color-hover;
  }

  &::-moz-range-thumb {
    width: $range-handle-size;
    height: $range-handle-size;
    border: 0;
    border-radius: 50%;
    background: $range-handle-color;
    cursor: pointer;
    transition: background .15s ease-in-out;

    &:hover {
      background: $range-handle-color-hover;
    }
  }

  &:active::-moz-range-thumb {
    background: $range-handle-color-hover;
  }
  
  // Focus state
  &:focus {
    
    &::-webkit-slider-thumb {
      box-shadow: 0 0 0 3px $shade-0,
                  0 0 0 6px $teal;
    }
  }
}


// Range Label
.range-slider__value {
  display: inline-block;
  position: relative;
  width: $range-label-width;
  color: $shade-0;
  line-height: 20px;
  text-align: center;
  border-radius: 3px;
  background: $range-label-color;
  padding: 5px 10px;
  margin-left: 8px;

  &:after {
    position: absolute;
    top: 8px;
    left: -7px;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-right: 7px solid $range-label-color;
    border-bottom: 7px solid transparent;
    content: '';
  }
}


// Firefox Overrides
::-moz-range-track {
    background: $range-track-color;
    border: 0;
}

input::-moz-focus-inner,
input::-moz-focus-outer { 
  border: 0; 
}

.calculated-result1, .calculated-result1-m {
    font-family: 'gilroybold';
    font-size: 30px;
    color: #00b36b;
    display: inline-block;
    line-height: 1;
}
.calculated-result2, .calculated-result2-m {
    font-family: 'gilroybold';
    font-size: 30px;
    color: #00b36b;
    display: inline-block;
    line-height: 1;
}
.calculated-result3, .calculated-result3-m {
    font-family: 'gilroybold';
    font-size: 30px;
    color: #00b36b;
    display: inline-block;
    line-height: 1;
}
</style>
</head>
<body class="html not-front not-logged-in no-sidebars page-node-65687 node-type-just-html og-context-node-100 i18n-en">
	<div class="main-container-wrapper" >
	<div class="main-container blog">
		<div class="col-lg-12 padding0i">
			<div id="header" class="column">
				<div class="region region-blog-top-bar">
					<section id="block-block-3" class="block block-block clearfix">
						
					</section>
					
					<section id="block-panels-mini-product-menu" class="block block-panels-mini clearfix">
						<div id="mini-panel-product_menu">
							<div class="content-wrap">
								<div class="menu-icon-help-header pull-left">
									<a href="index.html">
										
									</a>
										<div class="product-title">
											
										</div>
									</div>
									<div class="product-nav-links">
										<span class="mobile-menu-icon">
											
										</span>
										</div>
									</div>
								</div>

							</section>
						</div>
					</div><!-- header close -->
				</div>
				<div class="row nomargin">
					<section>
						<div class="region region-content">
							<section id="block-system-main" class="block block-system clearfix" style="width: 121%">
								<div class="field-body">
									<div class="zcprice-calc-saving">
										<div class="content-wrap">
											
											<div class="zc-calc-part">
												<div class="zc-calc-area">
													<h4 style="font-size: 30px;"> Managed Savices Savings Calculator</h4>
													<div class="input-val-sec">


														<!-- <fieldset class="team-entry-sec">
															<div>
																<p><b>Total Number of Members in a Typical Project</b></p>
															</div>
															<div>
																<input name="ReportedBy" id="teamvalue" placeholder="" maxlength="5" value="1" type="text">
															</div>
														</fieldset> -->
														<!-- <fieldset class="team-entry-sec">
															<div>
																<p><b>Your Average Hourly Rate per Member (USD/Hr)</b></p>
															</div>
															<div>
																<input name="ReportedBy" id="teamvalue1" placeholder="$" maxlength="5" value="" type="text">
															</div>
														</fieldset> -->

														<div class="range-slider">
														<div class="row">
															<div class="col-sm-8">
													<p><strong>Total Number of Members in a Typical Project</strong > <b style="color: red;">*</b></p>
													</div>
												
													<div class="col-sm-4">
													  <input class="range-slider__range"  type="range" id="teamvalue" value="1" min="1" max="250" style="width: 180px;">
													  <span class="range-slider__value">1<span>
													  </div>
													  </div>
													</div>
														
													<div class="range-slider">
														<div class="row">
															<div class="col-sm-8">
													<p><b>AS IS  : Average Hourly Rate per Member (USD/Hr)</b> <b style="color: red;">*</b></p>
													</div>
												
													<div class="col-sm-4">
													  <input class="range-slider__range"  type="range" id="teamvalue3" value="21" min="21" max="250">
													  <b>$</b><span class="range-slider__value">21<span>
													  </div>
													  </div>
													</div>
													<div>
														<p>TO BE : Managed Services Blended Rate  at<b> $20</b> USD/Hr</p>
													</div>

													
														<h3 style="margin-top: 40px; margin-bottom: -41px;">Number of hours spent per member:</h3>
														<div class="row">


															<div class="col-sm-6">
															<div class="range-slider">

													<h5>Application Development and Enhancements</h5>
													  <input class="range-slider__range"  type="range" id="hour1" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>

													  </div>
													  </div>
													  <div class="col-sm-6">
													  <div class="range-slider">
													<h5>Application Support and Maintainence</h5>
													  <input class="range-slider__range"  type="range" id="hour2" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>
													  </div>
													  </div>
													</div>


													<div class="row">
															<div class="col-sm-6">
															<div class="range-slider">
													<h5>Data Base Backup, Security Monitoring etc.</h5>
													  <input class="range-slider__range"  type="range" id="hour3" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>
													  </div>
													  </div>
													  <div class="col-sm-6">
													  <div class="range-slider">
													<h5>Project Management Tasks</h5>
													  <input class="range-slider__range"  type="range" id="hour4" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>
													  </div>
													  </div>
													</div>


													<div class="row">
															<div class="col-sm-6">
															<div class="range-slider">
													<h5>Analytics and Reporrting</h5>
													  <input class="range-slider__range"  type="range" id="hour5" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>
													  </div>
													  </div>
													  <div class="col-sm-6">
													  <div class="range-slider">
													<h5>Others</h5>
													  <input class="range-slider__range"  type="range" id="hour6" value="0" min="0" max="8">
													  <span class="range-slider__value">0<span>
													  </div>
													  </div>
													</div>
													  
														<!-- <span class="calc-val-hint">Hourly wage set and calculated as <strong>

														</strong>
													<b><input name="ReportedBy" id="teamvalue1" placeholder="$" maxlength="" value="" type="text"></b>/Day </span> -->
												</div>
												<!-- <div class="slider-calc-sec">
													<h3>Number of hours spent per member :</h3>
													<ul class="zcal-container-d">
														<li>
															<h5>Application Development and Enhancements</h5>
															<div class="range-slider">
													
													  <input class="range-slider__range"  type="range" id="teamvalue3" value="2" min="0" max="8">
													  <span class="range-slider__value">2<span>
													</div>

														</li>

														<li>
															<h5>Application Support and Maintainence </h5>
															<div>
																<div class="zslider">
																 </div>
															</div>
															
														</li>

														<li>
															<h5>Data Base Backup, Security Monitoring etc.</h5>
															<div>
																<div class="zslider">
																 </div>
															</div>
															
														</li>
														<li>
															<h5>Project Management Tasks </h5>
															<div>
																<div class="zslider">
																 </div>
															</div>
															
														</li>
														<li>
															<h5>Analytics and Reporrting </h5>
															<div>
																<div class="zslider">
																 </div>
															</div>
															
														</li>
														<li>
															<h5>Others</h5>
															<div>
																<div class="zslider">
																 </div>
															</div>
															
														</li>

														<li><h5>Manual data entry </h5>
															<div>
																<div class="zslider">
																 </div>
															</div></li> 
															<li><h5>E-mail notifications </h5><div><div class="zslider"> </div></div></li><li><h5>Analytics/ Reporting </h5><div><div class="zslider"> </div></div></li><li><h5>Internal Approvals </h5><div><div class="zslider"> </div></div></li></ul><ul class="zcal-container-m"><li><h5>App development &amp; maintenance </h5><div><div class="zslider-m"> </div></div></li><li><h5>Manual data entry </h5><div><div class="zslider-m"> </div></div></li><li><h5>E-mail notifications </h5><div><div class="zslider-m"> </div></div></li><li><h5>Analytics/ Reporting </h5><div><div class="zslider-m"> </div></div></li><li><h5>Internal Approvals </h5><div><div class="zslider-m"> </div></div></li>
															</ul></div> -->
															<p class="calc-btn-sec">
																<input name="submit-btn" class="calc-btn" type="submit" value="Calculate Now">
															</p>
															</div>
															<div class="zc-result-area animate">
																<div class="show-result">
																	<h4>Calculate Your Savings</h4>
																	<p style="font-size: 15px;">Typical Savings Accured in Managed Services Model</p>

																	<div class="calculated-result-area">
																		<span class="currecy-symbol">$</span>
																		<span class="calculated-result2">0</span>
																	</div>
																	
																	<div class="calculated-result-area-m">
																		<span class="currecy-symbol-m"></span>
																		<span class="calculated-result2-m">?</span>
																	</div>
																	<p class="pay-info">Per Day</p>

																	<div class="calculated-result-area">
																		<span class="currecy-symbol">$</span>
																		<span class="calculated-result1">0</span>
																	</div>
																	
																	<div class="calculated-result-area-m">
																		<span class="currecy-symbol-m"></span>
																		<span class="calculated-result1-m">?</span>
																	</div>
																	<p class="pay-info">Per month(20 days)</p>

																	<div class="calculated-result-area">
																		<span class="currecy-symbol">$</span>
																		<span class="calculated-result">0</span>
																	</div>

																	<div class="calculated-result-area-m">
																		<span class="currecy-symbol-m"></span>
																		<span class="calculated-result-m">?</span>
																	</div>
																	<p class="pay-info">Per year(200 days)</p>


																	<div class="calculated-result-area">
																		<span class="currecy-symbol">$</span>
																		<span class="calculated-result3">0</span>
																	</div>

																	<div class="calculated-result-area-m">
																		<span class="currecy-symbol-m"></span>
																		<span class="calculated-result3-m">?</span>
																	</div>
																	<p class="pay-info">Per year (12months)</p>
																</div>
																<br><br>
																
														</div>
														</div>
															<div class="addons-info-sec">
																<div class="note">
																	
																</div>
															</div>
										</div>
										</div>
											<script src="assets/js/roical.js"></script>
											<script src="assets/js/roi.js">
											
										</script>

											<script src="assets/js/roiscript.js"></script>
<script type="text/javascript">
	// I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


// First let's set the colors of our sliders
const settings={
  fill: '#1abc9c',
  background: '#d7dcdf'
}

// First find all our sliders
const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders,(slider)=>{
  // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider.querySelector('input').addEventListener('input', (event)=>{
    // 1. apply our value to the span
    slider.querySelector('span').innerHTML = event.target.value;
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill(slider.querySelector('input'));
});

// This function applies the fill to our sliders by using a linear gradient background
function applyFill(slider) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
  slider.style.background = bg;
}

</script>

											
										</body>

</html>
