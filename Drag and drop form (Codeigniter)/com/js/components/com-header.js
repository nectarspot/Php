// Plugin name: Header
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the header element
// Selector: com_header
// Status: Enabled

function drop_header() {
    theid = 'header-' + genRand(5);
    $('#right-container #data').append('<div class="com_header">' + $('#com_header').html() + '</div>')
    $('#right-container .com_header').each(function (index) {

    	//console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

		$("#" + theid).contextmenu({
		    menu: [
		        {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
	              header_modal(ui.cmd);
	              edit_header_modal(ui.cmd);
	             }
	         	},
		        {title: "----"},
		        {title: "Delete", cmd: theid, uiIcon: "ui-icon-trash",action: function(event, ui){
					remove_element(ui.cmd);
	             }}
		        ]
		});


    });

    elements.push(theid);
    header_modal(theid);
}

function edit_header_modal(theid) {

    // setting up the text

    header_main = $('#' + theid + ' h2').html();
    header_sub  = $('#' + theid + ' small').html();

    $('#header-main').val(header_main);
    $('#header-sub').val(header_sub);

    // setting up the colors
    color1 = $('#' + theid + ' h2').attr('style').match(/color:(.*?);/)[1]
    color2 = $('#' + theid + ' small').attr('style').match(/color:(.*?);/)[1]

                $("#cp_main").spectrum({
                    color: color1,
                    preferredFormat: "hex",
                    showInput: true,
                    chooseText: "Save",
                    showInitial: false,
                });

                $("#cp_sub").spectrum({
                    color: color2,
                    preferredFormat: "hex",
                    showInput: true,
                    chooseText: "Save",
                    showInitial: false,
                });

}

// The header customising modal box

function header_modal(theid) {
    
    $.modal.close();
    $.modal('\
			       	<p><h3><i class="fa fa-toggle-up"></i> Page header</h3> customisation</p>\
			       	\
			       	  <div class="form-group">\
					    <label for="nav-brand">Main text:</label>\
					    <input type="text" class="form-control" id="header-main">\
                        Color:<input type="text" id="cp_main" value="#4b4b4b"/>\
					  </div>\
					  \
                      <div class="form-group">\
                        <label for="nav-brand">Subtext:</label>\
                        <input type="text" class="form-control" id="header-sub">\
                        Color:<input type="text" id="cp_sub" value="#4b4b4b"/>\
                      </div>\
                      \
					  <button id="header-submit" class="btn btn-primary pull-right" onClick="header_save(\'' + theid + '\')">Save <i class="fa fa-check"></i></button>',
                      {escClose:false});

    // Making the form submitable onEnter

        $('.form-control').keypress(function(e) {
            if(e.which == 13) {
                jQuery(this).blur();
                jQuery('#header-submit').focus().click();
            }
        });

    // Resizing the modal

    $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px','320px') );

                $("#cp_main").spectrum({
                    color:'#4b4b4b"',
                    preferredFormat: "hex",
                    showInput: true,
                    chooseText: "Save",
                    showInitial: false,
                });

                $("#cp_sub").spectrum({
                    color:'#4b4b4b"',
                    preferredFormat: "hex",
                    showInput: true,
                    chooseText: "Save",
                    showInitial: false,
                });

}


function header_save(theid){


    header_main = htmlEncode($('#header-main').val());
    header_sub  = htmlEncode($('#header-sub').val());

    if(header_main.length != 0 && header_sub.length != 0 ){

        // setting up the text
        $('#' + theid + ' h2').html(header_main)
        $('#' + theid + ' small').html(header_sub)

        // setting up the colors
        $('#' + theid + ' h2').attr('style','color:' + $("#cp_main").spectrum('get').toHexString() + ';')
        $('#' + theid + ' small').attr('style','color:' + $("#cp_sub").spectrum('get').toHexString() + ';')

        $.modal.close();

        update_console('Element successfully generated');

    }
    else{
        alert('Both fields are mandatory. Please fill them and try again');
    }

}
