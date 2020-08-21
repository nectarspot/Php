 /*
  *
  * General Functions
  *
  */
 Array.prototype.remove = function () {
     var what, a = arguments,
         L = a.length,
         ax;
     while (L && this.length) {
         what = a[--L];
         while ((ax = this.indexOf(what)) !== -1) {
             this.splice(ax, 1);
         }
     }
     return this;
 };

 function update_console(text) {
     $('#console-text').animate({
         opacity: 0
     }, function () {
         $(this).text(text).animate({
             opacity: 1
         });
     })
 }

 function genRand(Strlength) {
     var chars = 'abcdefgjklmnopqrst1234567890';
     var string = '';
     for (var i = 0; i < Strlength; i++) {
         string = string + chars.substr(Math.floor((Math.random() * 27)), 1);
     }
     return string;
 }

 function htmlEncode(value) {
     if (value) {
         return jQuery('<div />').text(value).html();
     } else {
         return '';
     }
 }

 function strpos(haystack, needle, offset) {
     var i = (haystack + '').indexOf(needle, (offset || 0));
     return i === -1 ? false : i;
 }


 function remove_element(theid) {
     space_left += getBoxSizeById(theid);
     if (confirm("Are you sure you want to delete this element?")) {
         $("#" + theid).fadeOut("slow", function () {
             $('#' + theid).remove();
             update_console("Element has been deleted");
         });

         elements.remove(theid);
     }
 }

 function getBoxSizeById(theid) {
     return parseInt($('#' + theid).attr('class').replace(/[^0-9\.]+/g, ''))
 }

 function load_tinymce() {

     tinymce.init({
         mode: "specific_textareas",
         editor_selector: "tinyarea",
         language: 'en_GB',
         plugins: "textcolor",


         plugins: [
             "textcolor",
             "advlist autolink lists link image charmap print preview anchor",
             "searchreplace visualblocks code fullscreen",
             "insertdatetime media table contextmenu paste jbimages"
         ],


         menu: {
             edit: {
                 title: 'Edit',
                 items: 'undo redo | cut copy paste | selectall | searchreplace'
             },
             view: {
                 title: 'View',
                 items: 'code preview fullscreen'
             },
         },

         toolbar: "insertfile | styleselect | bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent table | link image jbimages media | code hr",

         relative_urls: false

     });


 }


 function switch_tabs(obj) {
     $('.tab-content').hide();
     $('.tabs button').removeClass("selected");
     var id = obj.attr("rel");

     $('#' + id).show();
     obj.addClass("selected");
 }

 function validateEmail(email) {
     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(email);
 }

 function checkIfHasElement(element) {
     checkstr = '';
     for (var i = 0; i < elements.length; i++) {
         check = elements[i].substring(0, elements[i].length - 6).trim();
         if (element == check) {
             checkstr += '1';
         } else {
             checkstr += '0';
         }
     }
     if ($.isNumeric(strpos(checkstr, '1'))) {
         return true
     } else {
         return false;
     }
 }


 function windowRefresh(myPopup) {
     $.post("com/php/core-ajax.php?req=generateProject", {
         subreq: 'mkfile',
         theme: skin,
         seoFavicon: favicon,
         seoTitle: metaTItle,
         seoDescr: metaDescr,
         imgrwt: "1",
         content: $('#right-container #data').html()
     }).done(function (data) {
         //alert(data);
         myPopup.location = 'data/sites/' + sessid + '/index.php';
     });
 }


 //
 // Functions for the commands
 //

 // SEO Settings

 seoSettingSet = false;

 function save_settingsSeo() {

     seo_title = $('#setting-seo-title').val();
     seo_descr = $('#setting-seo-descr').val();
     seo_favicon = faviconfileName;

     errors = false;
     if (!seo_title.trim()) {
         $('#setting-seo-title').addClass('error');
         errors = true;
     } else {
         $('#setting-seo-title').removeClass('error');
     }
     if (!seo_descr.trim()) {
         $('#setting-seo-descr').addClass('error');
         errors = true;
     } else {
         $('#setting-seo-descr').removeClass('error');
     }
     if (!seo_favicon.trim()) {
         errors = true;
     }
     if (errors == true) {
         alert('All the fields are mandatory. Please fill them and try again!');
     } else {
         $.modal.close();
         update_console("SEO settings successfully updated.")
         seoSettingSet = true;
     }

 }


 // Theme Settings

 theme_skin = false;

 function theme_toggle(id) {


     if (id == 1) {

         $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('290px', '500px'));
         $("#theme-chooser").fadeOut("slow", function () {
             $("#theme-choose-holder").fadeIn("slow");
         });

     } else if (id == 2) {


         $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('290px', '360px'));
         $("#theme-chooser").fadeOut("slow", function () {
             $("#theme-upload-holder").fadeIn("slow");
         });

     } else if (id == 3) {


         $("#theme-choose-holder").fadeOut("slow", function () {
             $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px', '290px'));
             $("#theme-chooser").fadeIn("slow");
         });

     }

 }

 function theme_saveTheme(id, theme) {


     if (id == 1) {
         theme_skin = $('#theme-themelist').val();
         theme_skin_path = '../../data/themes/' + $('#theme-themelist').val().toLowerCase() + '.css';
     } else if (id == 2) {
         theme_skin = theme;
         theme_skin_path = '../../data/images/' + theme_skin;
     }

     $.modal.close();
     update_console('Theme successfully updated');

 }


 function dlProject(type) {



     if (type == 1) {

         $("#dlmessages").html("Your project download shoud begin any second. If not, here`s the <i><b><a class=\"bboy\" href=\"data/downloads/" + sessid + ".zip\">direct link</a></i></b> ");

         // grabbing some values

         if (seoSettingSet) {
             favicon = seo_favicon;
             metaTItle = seo_title;
             metaDescr = seo_descr;
         } else {
             favicon = 'default';
             metaTItle = 'default';
             metaDescr = 'default';
         }


         if (theme_skin == false) {
             skin = 'default';
         } else {
             skin = theme_skin_path;
         }


         // generating project`s skeleton

         $.post("com/php/core-ajax.php?req=generateProject", {
             subreq: 'mkfile',
             theme: skin,
             seoFavicon: favicon,
             seoTitle: metaTItle,
             seoDescr: metaDescr,
             imgrwt: "2",
             content: $('#right-container #data').html()
         }).done(function (data) {

             // zipping the project

             $.post("data/sites/downloader.php?cmd=zipIt&type=1", {
                 sid: sessid
             }).done(function (data) {

                 // autodownloading the archive
                 if (!strpos('Error while opening', data) && !strpos('Unable to locate zip file', data) && !strpos('PHP zip extension is not loaded', data)) {
                     startDownload("data/downloads/" + sessid + ".zip")
                     dlWindow.document.write("This window should close itself");
                     setTimeout(function () {
                         dlWindow.close()
                     }, 3000);
                 } else {
                     alert("Your download couldn`t be compledet due server incapabilities. Please contact the owner or try again.");
                 }


             });

         });

     } else if (type == 2) {

         $("#dlmessages").html("Your project download shoud begin any second. If not, here`s the <i><b><a class=\"bboy\" href=\"data/downloads/" + sessid + ".zip\">direct link</a></i></b> ");

         // grabbing some values

         if (seoSettingSet) {
             favicon = seo_favicon;
             metaTItle = seo_title;
             metaDescr = seo_descr;
         } else {
             favicon = 'default';
             metaTItle = 'default';
             metaDescr = 'default';
         }


         if (theme_skin == false) {
             skin = 'default';
         } else {
             skin = theme_skin_path;
         }


         // generating project`s skeleton

         $.post("com/php/core-ajax.php?req=generateProject", {
             subreq: 'mkfile',
             theme: skin,
             seoFavicon: favicon,
             seoTitle: metaTItle,
             seoDescr: metaDescr,
             imgrwt: "2",
             content: $('#right-container #data').html()
         }).done(function (data) {

             // zipping the project

             $.post("data/sites/downloader.php?cmd=zipIt&type=2", {
                 sid: sessid
             }).done(function (data) {

                 // autodownloading the archive

                 if (!strpos('Error while opening', data) && !strpos('Unable to locate zip file', data) && !strpos('PHP zip extension is not loaded', data)) {
                     startDownload("data/downloads/" + sessid + ".zip")
                     dlWindow.document.write("This window should close itself");
                     setTimeout(function () {
                         dlWindow.close()
                     }, 3000);
                 } else {
                     alert("Your download couldn`t be compledet due server incapabilities. Please contact the owner or try again.");
                 }

             });

         });

     }

     $(".dllabel").attr('class', 'dllabel dldisabled handCursor');

     console.log($('.dllabel').attr('onclick'));

     $('.dllabel').attr('onclick', '').unbind('click');




 }

 function startDownload(url) {
     dlWindow = window.open(url, 'Download', "width=200px,height=200px");
 }