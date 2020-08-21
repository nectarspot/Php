!function(o){Drupal.behaviors.initColorbox={attach:function(e,i){if(o.isFunction(o.colorbox)&&void 0!==i.colorbox){if(i.colorbox.mobiledetect&&window.matchMedia)if(window.matchMedia("(max-device-width: "+i.colorbox.mobiledevicewidth+")").matches)return;o(".colorbox",e).once("init-colorbox").colorbox(i.colorbox),o(e).bind("cbox_complete",function(){Drupal.attachBehaviors("#cboxLoadedContent")})}}}}(jQuery),function(o){Drupal.behaviors.initColorboxLoad={attach:function(e,i){o.isFunction(o.colorbox)&&void 0!==i.colorbox&&(o.urlParams=function(o){for(var e,i={},t=/\+/g,c=/([^&=]+)=?([^&]*)/g,r=function(o){return decodeURIComponent(o.replace(t," "))},n=o.split("?");e=c.exec(n[1]);){switch(e[1]=r(e[1]),e[2]=r(e[2]),e[2].toLowerCase()){case"true":case"yes":e[2]=!0;break;case"false":case"no":e[2]=!1}"width"==e[1]&&(e[1]="innerWidth"),"height"==e[1]&&(e[1]="innerHeight"),i[e[1]]=e[2]}return i},o(".colorbox-load",e).once("init-colorbox-load",function(){var e=o.urlParams(o(this).attr("href"));o(this).colorbox(o.extend({},i.colorbox,e))}))}}}(jQuery);


jQuery(document).ready(function () {
    jQuery("#loader").delay(3000).fadeOut("slow");
}); /**/
if (typeof CountryCode == 'undefined') {
    CountryCode = 'US';
}


var allProduct = ['home', 'CRM', 'Campaigns', 'ContactManager', 'Forms', 'Sites', 'SalesIQ', 'Survey', 'Social', 'Assist', 'Support', 'BugTracker', 'Connect', 'Docs', 'Mail', 'Meeting', 'Projects', 'ShowTime', 'Vault', 'Chat', 'Books', 'Invoice', 'Subscriptions', 'Expense', 'Checkout', 'People', 'Recruit', 'Creator', 'Reports', 'Motivator', 'Accounts', 'AppCreator', 'mdm', 'Seminar', 'crmplus', 'wiki', 'Desk', 'Cliq', 'Developer', 'SalesInbox', 'Sign', 'Calendar', 'WorkPlace', 'Events', 'officeapi', 'Sprints', 'pagesense', 'flow', 'show', 'sheet', 'writer', 'notebook', 'one', 'partnerstore', 'backstage', 'marketplace', 'Commerce', 'analytics-plus', 'teamdrive', 'officeplatform', 'peopleplus', 'inventory', 'workerly', 'zohoorchestly', 'phonebridge', 'knit', 'analytics', 'patchmanagerplus', 'mail360', 'marketinghub', 'workdrive', 'contacts', 'ziasearch', 'bookings', 'office', 'deluge', 'remoteaccessplus', 'dataprep', 'creatorplus', 'wallet', 'docscanner','commerceplus','fsm','learn','identity-management','log360-cloud', 'ink','catalyst', 'analyticsplusplugin', 'it-analytics', 'zohoscanner', 'apptics', 'Bigin', 'annotator', 'teaminbox', 'lens', 'Transmail', 'it-management', 'webinar', 'remotely'];




var allProductlowerCase = [];
for (var i = 0; i < allProduct.length; i++) {
    allProductlowerCase[i] = allProduct[i].toLowerCase();
}


$ = jQuery.noConflict();
var DCoption = '';
var onlycom = false;

var customvar = {
    
    cachedWidth: window.innerWidth,
    pathname: window.location.pathname,
    host: window.location.hostname,
    numberOfUsers: '50',
    
}


