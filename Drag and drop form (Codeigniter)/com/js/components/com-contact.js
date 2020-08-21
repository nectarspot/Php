// Plugin name: Contact form
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the contact form element
// Selector: com_contact
// Status: Enabled

function drop_contact() {
    theid = 'contact-' + genRand(5);
    $('#right-container #data').append('<div class="com_contact">' + $('#com_contact').html() + '</div>')
    $('#right-container .com_contact').each(function (index) {

        //console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

        $("#" + theid).contextmenu({
            menu: [{
                title: "Edit",
                cmd: theid,
                uiIcon: "ui-icon-copy",
                action: function (event, ui) {
                    contact_modal(ui.cmd);
                    edit_contact_modal(ui.cmd);
                }
            }, {
                title: "----"
            }, {
                title: "Delete",
                cmd: theid,
                uiIcon: "ui-icon-trash",
                action: function (event, ui) {
                    remove_element(ui.cmd);
                }
            }]
        });


    });

    elements.push(theid);
    contact_modal(theid);
}

// The navbar customising modal box

function contact_modal(theid) {
    $.modal.close();
    $.modal('\
              <p><h3><i class="fa fa-info-circle"></i> Contact Form</h3> customisation</p>\
              \
                    <h4>Fields</h4>\
                <table class="table table-bordered">\
                      <thead>\
                      <tr class="oboy"><td>Fields</td><td>Mandatory</td></tr>\
                      <tbody>\
                      <tr><td>Name</td><td><input type="checkbox" id="form-opt-name" /></td></tr>\
                      <tr><td>Email</td><td><input type="checkbox" id="form-opt-email" /></td></tr>\
                      <tr><td>Subject</td><td><input type="checkbox" id="form-opt-subject" /></td></tr>\
                      <tr><td>Captcha</td><td><input type="checkbox" id="form-opt-captcha" /></td></tr>\
                      </tbody>\
                      </thead>\
                      </table>\
                      <h4>Messages</h4>\
                      <div class="form-group">\
                            <input type="text" class="form-control" id="form-msg-1" placeholder="Please fill all the fields and try again.">\
                      </div>\
                     <div class="form-group">\
                            <input type="text" class="form-control" id="form-msg-2" placeholder="Please enter a valid email.">\
                      </div>\
                     <div class="form-group">\
                            <input type="text" class="form-control" id="form-msg-3" placeholder="The captcha you`ve enter was invalid.">\
                      </div>\
                     <div class="form-group">\
                            <input type="text" class="form-control" id="form-msg-4" placeholder="Your message has been sent.">\
                      </div>\
                      <h4>Settings</h4>\
                      <!--<div class="form-group">\
                      <label for="form-set-3">Box size</label>\
                            <select id="form-set-3" class="form-control">\
                                <option selected>32% (span 4 )</option>\
                                <option selected>40% (span 5 )</option>\
                                <option selected>48% (span 6 )</option>\
                                <option selected>56% (span 7 )</option>\
                                <option selected>64% (span 8 )</option>\
                                <option selected>72% (span 9 )</option>\
                                <option selected>80% (span 10)</option>\
                                <option selected>88% (span 11)</option>\
                                <option selected>96% (span 12)</option>\
                            </select>\
                      </div>-->\
                     <div class="form-group">\
                            <input type="text" class="form-control" id="form-set-1" placeholder="Email address the message will be sent from">\
                      </div>\
                     <div class="form-group">\
                            <input type="text" class="form-control" id="form-set-2" placeholder="Email address where the message will be sent to">\
                      </div>\
            \
                      <p><span class="label label-warning">Note*</span> In order to have a functional captcha, your server must have the <span class="blueboy">GD</span> library active.</p>\
                      <p><span class="label label-warning">Note*</span> In order to have a functional contact form, your server must have the PHP <span class="blueboy">mail()</span> function enabled.</p>\
                      <p><span class="label label-warning">Note*</span> The email adress that will send the message to your email adress, can be whatever email adress you want(eg:messager@yourdomain.com), but some servers may not allow that, instad, the message will be sent from a allready setted email adress.</p>\
            <button id="form-submit-1" class="btn btn-primary pull-right" onClick="save_form(\'' + theid + '\')">Next <i class="fa fa-angle-right"></i></button>', {
        escClose: false
    });

    // Making the form submitable onEnter

    $('.form-control').keypress(function (e) {
        if (e.which == 13) {
            jQuery(this).blur();
            jQuery('#form-submit-1').focus().click();
        }
    });

}


// Step one of customising the navbar (Setting up the logo and number of links)

function save_form(theid) {

    var errors = new Array();

    //grabbin the values

    form_opt_name = $('#form-opt-name').prop('checked');
    form_opt_email = $('#form-opt-email').prop('checked');
    form_opt_subject = $('#form-opt-subject').prop('checked');
    form_opt_captcha = $('#form-opt-captcha').prop('checked');

    form_msg_1 = htmlEncode($('#form-msg-1').val());
    form_msg_2 = htmlEncode($('#form-msg-2').val());
    form_msg_3 = htmlEncode($('#form-msg-3').val());
    form_msg_4 = htmlEncode($('#form-msg-4').val());

    form_set_1 = htmlEncode($('#form-set-1').val());
    form_set_2 = htmlEncode($('#form-set-2').val());
    //form_set_3 = htmlEncode($('#form-set-3').val());

    //form_set_3 = Math.floor($.trim(form_set_3.replace(/%(.*)/g,'')));
    //
    //if(form_set_3 == 8 ){form_set_3 = 1 ;}
    //if(form_set_3 == 16){form_set_3 = 2 ;}
    //if(form_set_3 == 24){form_set_3 = 3 ;}
    //if(form_set_3 == 32){form_set_3 = 4 ;}
    //if(form_set_3 == 40){form_set_3 = 5 ;}
    //if(form_set_3 == 48){form_set_3 = 6 ;}
    //if(form_set_3 == 56){form_set_3 = 7 ;}
    //if(form_set_3 == 64){form_set_3 = 8 ;}
    //if(form_set_3 == 72){form_set_3 = 9 ;}
    //if(form_set_3 == 80){form_set_3 = 10;}
    //if(form_set_3 == 88){form_set_3 = 11;}
    //if(form_set_3 == 96){form_set_3 = 12;}


    if (form_opt_name == false && form_opt_email == false && form_opt_subject == false) {
        alert('You have to select at least 1 field.');
    } else {

        if (!form_msg_1.trim()) {
            form_msg_1 = 'Please fill all the fields and try again.';
        }
        if (!form_msg_2.trim()) {
            form_msg_2 = 'Please enter a valid email.';
        }
        if (!form_msg_3.trim()) {
            form_msg_3 = 'The captcha you`ve enter was invalid.';
        }
        if (!form_msg_4.trim()) {
            form_msg_4 = 'Your message has been sent.';
        }

        if (!form_set_1.trim() || !form_set_2.trim()) {
            alert('Please fill the mandatory fields and try again.');
            if (!form_set_1.trim()) {
                $('#form-set-1').addClass('error');
            }
            if (!form_set_2.trim()) {
                $('#form-set-2').addClass('error');
            }
        } else {


            if (validateEmail(form_set_1) && validateEmail(form_set_2)) {

                theForm = '<!-- ?n=contact&i=lkn56jhf5j -->\
                               <div class="clearfix"></div>\
                               <form class="form-horizontal col-md-8 well col-md-offset-2">'

                inputs = [];

                if (form_opt_name == true) {
                    theForm += '<div class="form-group">\
                                   <label for="form-field-name">Name</label>\
                                   <input type="text" name="form-field-name" class="form-control" id="form-field-name" />\
                                 </div>';
                    inputs.push('name');
                }

                if (form_opt_email == true) {
                    theForm += '<div class="form-group">\
                                   <label for="form-field-email">Email</label>\
                                   <input type="text" name="form-field-email" class="form-control" id="form-field-email" />\
                                 </div>';
                    inputs.push('email');
                }

                if (form_opt_subject == true) {
                    theForm += '<div class="form-group">\
                                   <label for="form-field-subject">Subject</label>\
                                    <textarea class="form-control" rows="3" id="form-field-subject" name="form-field-subject"></textarea>\
                                 </div>';
                    inputs.push('subject');
                }


                if (form_opt_captcha == true) {
                    theForm += '<div class="form-group">\
                                   <label for="form-field-captcha">Captcha</label>\
                                   <input type="text" name="form-field-captcha" class="form-control" id="form-field-captcha" />\
                                </div>';
                    inputs.push('captcha');
                }

                theForm += ' </form>\
                <div class="clearfix"></div>';

                // Updating the form

                $('#' + theid).html(theForm);

                // Saving the settings

                messages = [form_msg_1, form_msg_2, form_msg_3, form_msg_4];
                settings = [form_set_1, form_set_2];


                $.post("com/php/core-ajax.php?req=form-data", {
                    subreq: 'set',
                    m: messages,
                    s: settings,
                    i: inputs
                })
                    .done(function (data) {
                        //alert(data);
                    });

                $.modal.close();
                update_console('Element successfully generated.');

            } else {
                alert('Please insert a valid email adress and try again.');
                if (!validateEmail(form_set_1)) {
                    $('#form-set-1').addClass('error');
                }
                if (!validateEmail(form_set_2)) {
                    $('#form-set-2').addClass('error');
                }
            }
        }

    }


}


function edit_contact_modal(theid) {


    $('#' + theid + ' .form-control').each(function (index) {

        checkbox = $('#' + $('#' + theid + ' #' + $(this).attr('id')).attr('id').replace('form-field-', 'form-opt-'));
        if (checkbox.prop('checked') != true) {
            $('#' + $('#' + theid + ' #' + $(this).attr('id')).attr('id').replace('form-field-', 'form-opt-')).click();
        }

    });

    $.post("com/php/core-ajax.php?req=form-data", {
        subreq: 'read'
    })
        .done(function (data) {
            data = data.split('xoXDelXox');
            messages = JSON.parse(data[0]);
            settings = JSON.parse(data[1]);

            $('#form-msg-1').val(messages[0]);
            $('#form-msg-2').val(messages[1]);
            $('#form-msg-3').val(messages[2]);
            $('#form-msg-4').val(messages[3]);

            $('#form-set-1').val(settings[0]);
            $('#form-set-2').val(settings[1]);
        });



}