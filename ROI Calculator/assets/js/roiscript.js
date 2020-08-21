var _createClass=function(){function t(t,e){for(var i=0;i<e.length;i++){var s=e[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}return function(e,i,s){return i&&t(e.prototype,i),s&&t(e,s),e}}();function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var XSlider=function(){function t(e){var i=this;_classCallCheck(this,t);var s=this,o=$(e.el).data("xslider-instance");if(o)return o.setOptions(e),o;$(e.el).data("xslider-instance",this),this.opts=$.extend(!0,{el:"",min:0,max:0,value:0,step:1,width:"",height:"",className:"",isVertical:!1,handleAutoSize:!0,handleAutoSizeMin:10,handleWidth:10,handleHeight:10,handleWrapperSideStart:0,handleWrapperSideEnd:0,bgSideStart:0,bgSideEnd:0,clickToChange:!0,tooltip:!0,tooltipOffset:3,tooltipDirection:"",tooltipFormat:function(t){return t.toFixed(s.precision)+"/"+s.opts.max.toFixed(s.precision)},autoScroll:!0,autoScrollDelayTime:250,initRunOnChange:!0,isStopEvent:!1,onChange:function(t){},onChangeEnd:function(t){}},e),""===this.opts.tooltipDirection&&(this.opts.tooltipDirection=this.opts.isVertical?"right":"top"),this.stepNums=0,this.precision=0,this.isDrag=!1,this.disabled=!1,this.$bg=void 0,this.$handleWrapper=void 0,this.$handle=void 0,this.$body=$("body"),this.$root=$(window),this._initElement(),this._initEvent(),this.setOptions(this.opts),setTimeout(function(){return i.$handle.attr("data-isdrag","false")},100)}return _createClass(t,[{key:"_initElement",value:function(){this.$el=$(this.opts.el),this.$wrapper=$('<div class="xslide"><div class="xslide-bg"></div><div class="xslide-handle-wrapper"><div class="xslide-handle" data-isdrag="none"><input max="40" class="cal-users-val" name="week_rate" value="1" /></div></div></div>'),this.$bg=this.$wrapper.find(".xslide-bg"),this.$handleWrapper=this.$wrapper.find(".xslide-handle-wrapper"),this.$handle=this.$wrapper.find(".xslide-handle"),this.$el.append(this.$wrapper),this.$body.append(this.$tooltip)}},{key:"_initEvent",value:function(){var t=this;this.$root.on("resize",function(){t.resize()}),this.$handle.on("touchstart mousedown",function(e){if(e.preventDefault(),t.opts.min!==t.opts.max&&!t.disabled){var i=$(this),s="touchstart"===e.type?e.touches[0]:e,o=i.offset(),a={left:s.pageX-o.left,top:s.pageY-o.top};i.attr("data-isdrag","true"),t.isDrag=!0,t.$root.on("touchmove mousemove",h),t.$root.on("touchend mouseup",l),t.opts.isStopEvent&&e.stopPropagation()}function h(e){"mousemove"===e.type&&0===e.which&&l(e);var s="touchmove"===e.type?e.touches[0]:e,o={left:s.pageX-a.left-t.$handleWrapper.offset().left,top:s.pageY-a.top-t.$handleWrapper.offset().top};if(o.left<0?o.left=0:o.left+i.width()>t.$handleWrapper.width()&&(o.left=t.$handleWrapper.width()-i.outerWidth()),o.top<0?o.top=0:o.top+i.height()>t.$handleWrapper.height()&&(o.top=t.$handleWrapper.height()-i.outerHeight()),t.opts.isVertical?i.css("top",o.top):i.css("left",o.left),t.setValue(t._getHandlePositionValue(o.left,o.top),!1),t.opts.tooltip){var h=t._getTooltipPositionForHandle();t._tooltip(!0,h.left,h.top,t.opts.tooltipFormat(t.opts.value))}}function l(e){i.attr("data-isdrag","false"),t.isDrag=!1,t.$root.off("touchmove mousemove",h),t.$root.off("touchend mouseup",l),t.opts.tooltip&&(!e.touches&&$(e.target).closest(t.$wrapper).length||t._tooltip(!1)),t.opts.autoScroll&&(!e.touches&&$(e.target).closest(t.$wrapper).length||t._handleScrollToValuePosition()),t.opts.onChangeEnd(t.opts.value)}}),this.$handleWrapper.on("touchstart mousedown",function(e){if(t.opts.clickToChange&&!t.disabled){var i=e.touches?e.touches[0]:e,s=t.$handleWrapper.offset(),o=t.$handle.position(),a={left:i.pageX-s.left,top:i.pageY-s.top,handleLeft:i.pageX-s.left-t.$handle.width()/2,handleTop:i.pageY-s.top-t.$handle.height()/2};if(t.opts.isVertical){if(a.top>o.top&&a.top<o.top+t.$handle.height())return}else if(a.left>o.left&&a.left<o.left+t.$handle.width())return;a.handleLeft<0?a.handleLeft=0:a.handleLeft+t.$handle.width()>t.$handleWrapper.width()&&(a.handleLeft=t.$handleWrapper.width()-t.$handle.width()),a.handleTop<0?a.handleTop=0:a.handleTop+t.$handle.height()>t.$handleWrapper.height()&&(a.handleTop=t.$handleWrapper.height()-t.$handle.height());var h=t._getHandleWrapperPointValue(a.left,a.top);t.setValue(h,!1),t.opts.isVertical?t.$handle.css("top",a.handleTop):t.$handle.css("left",a.handleLeft),t.opts.onChangeEnd(t.opts.value)}}).on("mouseenter",function(e){clearTimeout(t._timer)}).on("mouseleave",function(e){t.opts.autoScroll&&(t.isDrag||t._handleScrollToValuePosition())}),this.opts.tooltip&&this.$handleWrapper.on("mousemove",function(e){var i=t.$handle.offset(),s={left:e.pageX-t.$handleWrapper.offset().left,top:e.pageY-t.$handleWrapper.offset().top};if(t.opts.isVertical)if(e.pageY>=i.top&&e.pageY<=i.top+t.$handle.height()){if(!t.isDrag){var o=t._getTooltipPositionForHandle();t._tooltip(!0,o.left,o.top,t.opts.tooltipFormat(t.opts.value))}}else{var a=t._getTooltipPositionForHandleWrapper(e.pageX,e.pageY),h=t._getHandleWrapperPointValue(s.left,s.top);t._tooltip(!0,a.left,a.top,t.opts.tooltipFormat(h))}else if(e.pageX>=i.left&&e.pageX<=i.left+t.$handle.width()){if(!t.isDrag){var l=t._getTooltipPositionForHandle();t._tooltip(!0,l.left,l.top,t.opts.tooltipFormat(t.opts.value))}}else{var p=t._getTooltipPositionForHandleWrapper(e.pageX,e.pageY),n=t._getHandleWrapperPointValue(s.left,s.top);t._tooltip(!0,p.left,p.top,t.opts.tooltipFormat(n))}}).on("mouseleave",function(e){t.isDrag||t._tooltip(!1)})}},{key:"setOptions",value:function(t){if("vertical"==this.opts.direction&&(t.isVertical=!0),this.opts=$.extend(!0,this.opts,t),void 0!==t.isVertical&&(this.$wrapper.attr("data-direction",t.isVertical?"vertical":"horizontal"),this.$bg.attr("style",""),this.$handle.attr("style","")),t.width&&this.$wrapper.width(t.width),t.height&&this.$wrapper.height(t.height),t.className&&this.$wrapper.addClass(t.className),t.handleWidth&&this.$handle.width(t.handleWidth),t.handleHeight&&this.$handle.height(t.handleHeight),void 0===t.min&&void 0===t.max||this.opts.min!==this.opts.max?this.$handle.css("visibility",""):this.$handle.css("visibility","hidden"),(t.handleAutoSize||this.opts.handleAutoSize&&(t.min||t.max||t.step))&&(this._autoHandleSize(),this.opts.autoScroll&&this._handleScrollToValuePosition()),void 0!==t.handleWrapperSideStart&&(this.opts.isVertical?this.$handleWrapper.css("top",t.handleWrapperSideStart):this.$handleWrapper.css("left",t.handleWrapperSideStart)),void 0!==t.handleWrapperSideEnd&&(this.opts.isVertical?this.$handleWrapper.css("bottom",t.handleWrapperSideEnd):this.$handleWrapper.css("right",t.handleWrapperSideEnd)),void 0!==t.bgSideStart&&(this.opts.isVertical?this.$bg.css("top",t.bgSideStart):this.$bg.css("left",t.bgSideStart)),void 0!==t.bgSideEnd&&(this.opts.isVertical?this.$bg.css("bottom",t.bgSideEnd):this.$bg.css("right",t.bgSideEnd)),void 0===t.min&&void 0===t.max&&void 0===t.step||(this.stepNums=(this.opts.max-this.opts.min)/this.opts.step),void 0!==t.min||void 0!==t.max||void 0!==t.step){var e=this.precision;if(void 0!==t.min){var i=this.opts.min.toString().split("."),s=i[1]?i[1].length:0;s>e&&(e=s)}if(void 0!==t.max){var o=this.opts.max.toString().split("."),a=o[1]?o[1].length:0;a>e&&(e=a)}if(void 0!==t.step){var h=this.opts.step.toString().split("."),l=h[1]?h[1].length:0;l>e&&(e=l)}this.precision=e}void 0!==t.value&&(this.opts.value<this.opts.min&&(this.opts.value=this.opts.min),this.opts.value>this.opts.max&&(this.opts.value=this.opts.max),this.setValue(this.opts.value))}},{key:"setValue",value:function(t){var e=arguments.length<=1||void 0===arguments[1]||arguments[1];t<this.opts.min||t>this.opts.max||(t!==this.opts.value&&this.opts.onChange(t,this.opts.value),this.opts.value=t,this.isDrag||!e||!this.opts.autoScroll&&this._getHandleValue()===t||this._setHandlePositionByValue(t))}},{key:"getValue",value:function(){return this.opts.value}},{key:"resize",value:function(){this.opts.handleAutoSize&&this._autoHandleSize(),this._setHandlePositionByValue(this.opts.value)}},{key:"enable",value:function(){this.disabled=!1,this.$wrapper.attr("data-disabled","false")}},{key:"disable",value:function(){this.disabled=!0,this.$wrapper.attr("data-disabled","true")}},{key:"_autoHandleSize",value:function(){var t=void 0;(t=this.opts.isVertical?this.$wrapper.height()/((this.opts.max-this.opts.min)/this.opts.step+1):this.$wrapper.width()/((this.opts.max-this.opts.min)/this.opts.step+1))<this.opts.handleAutoSizeMin&&(t=this.opts.handleAutoSizeMin),this.opts.isVertical?this.$handle.width(this.opts.handleWidth).height(t):this.$handle.width(t).height(this.opts.handleHeight)}},{key:"_value",value:function(t){return Number(t.toFixed(this.precision))}},{key:"_tooltip",value:function(t){var e=arguments.length<=1||void 0===arguments[1]?0:arguments[1],i=arguments.length<=2||void 0===arguments[2]?0:arguments[2],s=arguments.length<=3||void 0===arguments[3]?"":arguments[3];t?(this.$tooltip||(this.$tooltip=$('<div class="xslide-tooltip '+this.opts.tooltipDirection+'">'+s+"</div>"),this.$body.append(this.$tooltip)),this.$tooltip.html(s).css({left:e,top:i}).show()):this.$tooltip&&this.$tooltip.hide()}},{key:"_getHandlePositionValue",value:function(t,e){var i=void 0,s=void 0;return this.opts.isVertical?(s=(this.$handleWrapper.height()-this.$handle.outerHeight())/this.stepNums,i=parseInt((e+s/2)/s)*this.opts.step+parseFloat(this.opts.min)):(s=(this.$handleWrapper.width()-this.$handle.outerWidth())/this.stepNums,i=parseInt((t+s/2)/s)*this.opts.step+parseFloat(this.opts.min)),this._value(i)}},{key:"_getHandleValue",value:function(){var t=this.$handle.offset(),e=this.$handleWrapper.offset(),i=t.left-e.left,s=t.top-e.top;return this._getHandlePositionValue(i,s)}},{key:"_getHandleWrapperPointValue",value:function(t,e){var i=void 0,s=void 0;return this.opts.isVertical?this.stepNums?(s=this.$handleWrapper.height()/this.stepNums,i=parseInt((e+s/2)/s)*this.opts.step+parseFloat(this.opts.min)):i=this.opts.min:this.stepNums?(s=this.$handleWrapper.width()/this.stepNums,i=parseInt((t+s/2)/s)*this.opts.step+parseFloat(this.opts.min)):i=this.opts.min,this._value(i)}},{key:"_setHandlePositionByValue",value:function(t){var e=void 0;this.opts.isVertical?this.stepNums?(e=(this.$handleWrapper.height()-this.$handle.outerHeight())/this.stepNums,this.$handle.css("top",(t-this.opts.min)/this.opts.step*e)):this.$handle.css("top",0):this.stepNums?(e=(this.$handleWrapper.width()-this.$handle.outerWidth())/this.stepNums,this.$handle.css("left",(t-this.opts.min)/this.opts.step*e)):this.$handle.css("left",0)}},{key:"_getTooltipPositionForHandle",value:function(){var t=void 0,e=this.$handle.offset();switch(this.opts.tooltipDirection){case"top":t={left:e.left+this.$handle.outerWidth()/2,top:e.top-this.opts.tooltipOffset};break;case"bottom":t={left:e.left+this.$handle.outerWidth()/2,top:e.top+this.$handle.outerHeight()+this.opts.tooltipOffset};break;case"left":t={left:e.left-this.opts.tooltipOffset,top:e.top+this.$handle.outerHeight()/2};break;case"right":t={left:e.left+this.$handle.outerWidth()+this.opts.tooltipOffset,top:e.top+this.$handle.outerHeight()/2}}return t}},{key:"_getTooltipPositionForHandleWrapper",value:function(t,e){var i=void 0,s=this.$handle.offset();switch(this.opts.tooltipDirection){case"top":i={left:t,top:s.top-this.opts.tooltipOffset};break;case"bottom":i={left:t,top:s.top+this.$handle.outerHeight()+this.opts.tooltipOffset};break;case"left":i={left:s.left-this.opts.tooltipOffset,top:e};break;case"right":i={left:s.left+this.$handle.outerWidth()+this.opts.tooltipOffset,top:e}}return i}},{key:"_handleScrollToValuePosition",value:function(){var t=this;clearTimeout(this._timer),this._timer=setTimeout(function(){t._setHandlePositionByValue(t.opts.value)},this.opts.autoScrollDelayTime)}}]),t}();!function(t){t.fn.XSlider=function(e){var i=t(this);if(!(i.length>1))return e.el=i,new XSlider(e);i.each(function(t,s){i.XSlide(e)})}}(window.jQuery);



$('.zslider').each(function(e,i){
    $(this).XSlider({
    min: 0,
    max: 8,
    value: 1,
    step: 1,
    direction: 'vertical', //horizontal|vertical
    onChange: function onChange(val) {
        $('#cal-users'+e).val(val);

    },
    onChangeEnd: function onChangeEnd(val) {
        $('#cal-users'+e).val(val);

    }

    });
});




$('.zslider-m').each(function(e,i){
    $(this).XSlider({
    min: 0,
    max: 8,
    value: 1,
    step: 1,
    direction: 'vertical', //horizontal|vertical
    onChange: function onChange(val) {
        $('#cal-users'+(e+5)).val(val);

    },
    onChangeEnd: function onChangeEnd(val) {
        $('#cal-users'+(e+5)).val(val);

    }

    });
});

$(window).on('load', function() {
	textSize();
	saveCalc();
    $('.cal-users-val').each(function(e,i){
        $(this).attr('id','cal-users'+e);
        if(e>4){
            $(this).removeClass('cal-users-val').addClass('cal-users-val-m');
        }
    });

});



 //var currencyPriceArr = [['ALL', 'EUList', 'JP', 'SG', 'AU', 'NZ', 'IN', 'GB', 'CN', 'SA', 'AE', 'MX'], [1, 0.8, 120, 1.33, 1.33, 1.33, 27.78, 1, 7, 3.65, 3.65, 18]];
var cVal = 1, clickd = 0;
function saveCalc() {
   
	if(clickd == 1){
		var sumval = 0;
		var Obj = 'block' == $('.zslider').css('display') ?  $('.zslider') : $('.zcal-container-d');


		for (var i = 0; i < Obj.find('.xslide-handle').length; i++) {
    var appdevMaintain = (i == 0) ? 1: 1;
    sumval += (Number(Obj.find('.xslide-handle input').eq(i).val()) * appdevMaintain);
}

var hour_total = Number($('#hour1').val())+ Number($('#hour2').val())+ Number($('#hour3').val())+ Number($('#hour4').val())+ Number($('#hour5').val())+ Number($('#hour6').val());
//alert(hour_total);
var hour_rate = Number($('#teamvalue3').val()) - 20 ;
//alert(hour_rate);
		total_price = hour_total * Number($('#teamvalue').val()) * hour_rate ;
        //alert(total_price);
        //sumval =  Number($('#teamvalue').val()) * Number($('#teamvalue3').val())*8;
        //alert(sumval);
		// if ($('#teamvalue').val() != '') {
		// 	sumval = (sumval * Number($('#teamvalue').val()));
		// }
 	// 	$('.perhour-amt').html(1 * cVal)

    	//zcreatorVal = (20 * 12 * Number($('#teamvalue').val()));

        sumval =  Math.round(((total_price)));
        $('.calculated-result2, .calculated-result2-m').html(sumval);

		sumval1 = Math.round(((total_price*20)));
		$('.calculated-result1, .calculated-result1-m').html(sumval1);

        sumval2 = Math.round(((sumval1*12)));
        $('.calculated-result3, .calculated-result3-m').html(sumval2);

        sumval2 = Math.round(((sumval1*200/20)));
        $('.calculated-result, .calculated-result-m').html(sumval2);
		//setTimeout(function() { $('.show-signup-btn').addClass('show-btn') }, 1000);
	}
	clickd = 1;
 textSize()

}


function removefont(){
    $('.calculated-result, .calculated-result-m').removeClass('reduce-font');
    $('.calculated-result, .calculated-result-m').removeClass('reduce-font2');
}

 
function textSize() {
    removefont()
    if ($(".calculated-result, .calculated-result-m").html().length >= 8) {
        $('.calculated-result, .calculated-result-m').addClass('reduce-font2')
    }else if ($(".calculated-result, .calculated-result-m").html().length >= 6) {
        $('.calculated-result, .calculated-result-m').addClass('reduce-font')
    }
    
}

function moveTopbtn() {

    if (window.innerWidth < 1199) {
        $('.calc-btn').on('click', function() {
            $('html, body').animate({
                scrollTop: $('.zc-result-area ').position().top - 50
            }, 'slow');
        });
    }
}

$(document).on('click', '.calc-btn', function() {
    saveCalc();
    textSize()
    moveTopbtn()

});

$(document).on('keypress', function(e) {
    if (e.which == 13) {
        saveCalc();
        textSize()
        moveTopbtn()
    }
});

$(document).ready(function() {
	moveTopbtn()
	$('.zc-result-area > div').addClass('show-result')
	$('.zc-result-area').addClass('animate');

});