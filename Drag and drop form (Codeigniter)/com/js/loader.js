$(function () {

    //
    // Loading the tabs (for the elements picker)
    //

    $('.tabs button').click(function () {
        switch_tabs($(this));
    });
    switch_tabs($('.defaulttab'));

    $("#cmdMenu_layout").click(function () {
        $('.SubCmdMenu_layout').toggle("slow");
        if ($('.SubCmdMenu_project').is(':visible')) {
            $('.SubCmdMenu_project').toggle("slow");
        }
    });

    $("#cmdMenu_project").click(function () {
        $('.SubCmdMenu_project').toggle("slow");
        if ($('.SubCmdMenu_layout').is(':visible')) {
            $('.SubCmdMenu_layout').toggle("slow");
        }
    });


    //
    // Turning the preview area into a sortable section
    //

    var is_dragging = false;

    $("#right-container #data").sortable({
        start: function (event, ui) {
            is_dragging = true;
        },
        stop: function (event, ui) {
            is_dragging = false;
            $('#' + ui.item["context"]["id"]).removeAttr('style');
        },
        opacity: 1
    });

    $("#right-container #data").on('mousemove', function (e) {
        $("#right-container").css({
            opacity: 1
        });
        if (is_dragging) {
            $("#right-container").droppable("disable")
        } else {
            $("#right-container").droppable("enable")
        }
    });


    //
    // Binding the Commands 
    //


    $("#cmdReset").bind("click", function () {

        if (confirm("Are you sure you want to delete the template?")) {
            for (i = 0; i < elements.length; i++) {
                //console.log(elements[i]);
                //$('#' + elements[i]).remove();
                $("#" + elements[i]).fadeOut("slow", function () {});
                $('#' + elements[i]).remove();
            }
            elements = [];
        }
        update_console("Layout has been cleared");

    });

    $("#cmdGoFull").bind("click", function () {

        if (elements.length != 0) {

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

            var previeWindow = window.open('data/sites/' + sessid + '/index.php', '_new', '');
            windowRefresh(previeWindow);

        } else {
            alert('Your template is empty');
        }

    });

    $("#cmdSetSeo").bind("click", function () {

        faviconfileName = '';

        function setFaviconFileName(file) {
            faviconfileName = file;
        }

        $.modal('\
        <p><h3><i class="fa fa-bar-chart-o"></i> SEO </h3> settings</p>\
        \
        <div class="form-group">\
            <label for="setting-seo-title">Page Title:</label>\
            <input type="text" class="form-control" id="setting-seo-title" >\
          </div>\
          \
        <div class="form-group">\
            <label for="setting-seo-descr">Page Description:</label>\
            <textarea class="form-control" id="setting-seo-descr" ></textarea>\
          </div>\
        \
        <div class="form-group">\
            <label for="setting-seo-favicon" id="setting-seo-favicon-label">Favicon:</label>\
            <input type="file" id="setting-seo-favicon" name="setting-seo-favicon" >\
        </div><br />\
        \
        <button id="slider-submit-1" class="btn btn-primary pull-right" onClick="save_settingsSeo()">Save <i class="fa fa-check"></i></button>\
        <div class="clearfix"></div>\
        <br /><p><span class="label label-warning">Note*</span> Allowed extensions: <b>ICO</b>, Maximum upload size: ' + settings_upload_maximum_size + 'Mb</p>', {
            escClose: false
        });

        $("#setting-seo-favicon").pekeUpload({
            theme: 'bootstrap',
            multi: false,
            allowedExtensions: 'ico',
            maxSize: settings_upload_maximum_size,
            onFileError: function (file, error) {
                alert(error);
            },
            onFileSuccess: function (file, error) {
                setFaviconFileName(file.name);
            },

        });

        $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px', '470px'))

        if (seoSettingSet) {

            $('#setting-seo-title').val(seo_title);
            $('#setting-seo-descr').val(seo_descr);
            $('#setting-seo-favicon-label').html('Favicon: (Loaded: <span class="text-success">' + seo_favicon + '</span>)')

        }

    });


    $("#cmdSetTheme").bind("click", function () {

        $.modal('\
        <p><h3><i class="fa fa-tint"></i> Theme </h3> settings</p>\
        \
        <div id="theme-chooser">\
        <p><h4>Current theme: <span id="theme-current-name">Default</span></h4></p>\
        <br /><br /><br /><center><h3><span class="handCursor" onClick="theme_toggle(1);">Choose themes</span> / <span class="handCursor" onClick="theme_toggle(2);">Upload theme</span></h3></center><br /><br /></div>\
        \
        <div id="theme-choose-holder" style="display:none">\
          <div class="form-group">\
          <select class="form-control" id="theme-themelist">\
          <option>Amelia</option>\
          <option>Cerulean</option>\
          <option>Cosmo</option>\
          <option>Cupid</option>\
          <option>Cyborg</option>\
          <option>Flatly</option>\
          <option>Journal</option>\
          <option>Lumen</option>\
          <option>Readable</option>\
          <option>Simplex</option>\
          <option>Slate</option>\
          <option>Spacelab</option>\
          <option>Superhero</option>\
          <option>United</option>\
          <option>Yeti</option>\
          </select>\
          </div>\
          \
          <center>\
          <img id="theme-imgPreview" src="com/img/themes/amelia.png"  />\
          </center>\
          <div class="clearfix"> </div>\
          <br />\
          <button class="btn btn-warning" onClick="theme_toggle(3);"><i class="fa fa-angle-left"></i> Cancel</button>\
          <button id="slider-submit-1" class="btn btn-primary pull-right" onClick="theme_saveTheme(1,\'abc\');">Save <i class="fa fa-check"></i></button>\
          <div class="clearfix"></div>\
          <br /><p><span class="label label-success">Themes powered by</span> <a href="http://bootswatch.com">Bootswatch</a> - Free bootstrap themes</p>\
        </div>\
        <div id="theme-upload-holder" style="display:none">\
        <h4>Upload your Bootstrap 3 theme</h4><br />\
        <center>\
        <div class="form-group">\
        <label for="theme-uploadTheme">File:</label>\
        <input type="file" id="theme-uploadTheme" name="theme-uploadTheme" >\
        </div>\
        </center>\
        <div class="clearfix"> </div>\
        <br />\
        <button class="btn btn-warning" onClick="theme_toggle(3);"><i class="fa fa-angle-left"></i> Cancel</button>\
        <br /><br /><p><span class="label label-warning">Note*</span> Allowed extensions: <b>CSS</b>, Maximum upload size: ' + settings_upload_maximum_size + 'Mb</p>\
        </div>\
        <div class="clearfix"></div>\
        <br />', {
            escClose: false
        });

        $("#theme-uploadTheme").pekeUpload({
            theme: 'bootstrap',
            multi: false,
            allowedExtensions: settings_upload_allowed_extensions,
            maxSize: settings_upload_maximum_size,
            btnText: "Upload and Set Theme",
            onFileError: function (file, error) {
                alert(error);
            },
            onFileSuccess: function (file, error) {
                theme_saveTheme(2, file.name);
            },

        });

        if (theme_skin == false) {
            $('#theme-current-name').html('Default');
        } else {
            $('#theme-current-name').html(theme_skin);
        }

        $('#theme-themelist').change(function () {
            $('#theme-imgPreview').attr('src', 'com/img/themes/' + $(this).val().toLowerCase() + '.png');
        });

        $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px', '290px'));

    });

    $("#cmdGoDl").bind("click", function () {

        if (elements.length > 0) {

            $.modal('\
        <p><h3><i class="fa fa-cloud-download"></i> Download </h3> your project</p>\
        \
        <div>\
        <br /><br /><br /><center><h3><span  class="handCursor dllabel" onClick="dlProject(1);"><i class="fa fa-folder-o thetrueblueboy"></i> Whole project</span> / <span class="handCursor dllabel" onClick="dlProject(2);"><i class="fa fa-file-o thetrueblueboy"></i> This file</span></h3></center><br />\
        </div>\
        <div id="dlmessages">\
        </div><br />\
        \
        <br />', {
                escClose: false
            });

            $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px', '270px'));




            $("#dlmessages").fadeIn("slow");

        } else {
            alert("Your template is empty")
        }

    });


});