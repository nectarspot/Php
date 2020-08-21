// Plugin name: Navigation bar
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the navbar element
// Selector: com_navbar
// Status: Enabled

function drop_nav() {
    theid = 'navbar-' + genRand(5);
    $('#right-container #data').append($('#com_navbar').html())
    $('#right-container .navbar').each(function (index) {

    	//console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

		$("#" + theid).contextmenu({
		    menu: [
		        {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
	              nav_modal(ui.cmd);
	              nav_edit_modal(ui.cmd);
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
    nav_modal(theid);
}

// The navbar customising modal box


function nav_modal(theid) {
    
    $.modal.close();

    $.modal('\
			       	<p><h3><i class="fa fa-bars"></i> Navigation Bar</h3> customisation</p>\
			       	\
			       	  <div class="form-group">\
					    <label for="nav-brand">Logo text:</label>\
					    <input type="text" class="form-control" id="nav-brand">\
					  </div>\
					  \
			       	  <div class="form-group">\
					    <label for="nav-links-left">Number of links on left:</label>\
					    <input type="text" class="form-control" id="nav-links-left" placeholder="0">\
					  </div>\
					  \
			       	  <div class="form-group">\
					    <label for="nav-links-right">Number of links on right:</label>\
					    <input type="text" class="form-control" id="nav-links-right" placeholder="0">\
					  </div>\
					  <button id="nav-submit-1" class="btn btn-primary pull-right" onClick="nav_step1(\'' + theid + '\')">Next <i class="fa fa-angle-right"></i></button>',
                      {escClose:false});

    // resising the modal box
    $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px','380px') );

    // Making the form submitable onEnter

        $('.form-control').keypress(function(e) {
            if(e.which == 13) {
                jQuery(this).blur();
                jQuery('#nav-submit-1').focus().click();
            }
        });

}


// Step one of customising the navbar (Setting up the logo and number of links)

function nav_step1(theid) {

    var errors = new Array();

    nav_logo_text = htmlEncode($('#nav-brand').val());
    nav_links_left = $('#nav-links-left').val();
    nav_links_right = $('#nav-links-right').val();

    if (!nav_links_left.trim()) {
        nav_links_left = 0;
    }
    if (!nav_links_right.trim()) {
        nav_links_right = 0;
    }

    //errors checking

    if (!nav_logo_text.trim()) {
        errors.push('You have to enter a value for the logo text.');
    }

    if (!$.isNumeric(nav_links_left)) {
        errors.push('You have to enter a numer value for the number of left links.');
    }

    if (!$.isNumeric(nav_links_right)) {
        errors.push('You have to enter a numer value for the number of right links.');
    }

    if (errors.length != 0) {
        for (var i = 0; i < errors.length; i++) {
            alert(errors[i]);
        }
    } else {

        if (nav_links_left == 0 && nav_links_right == 0) {
            // setting up the logo text if no links were desired
            // cleaning the link list
            $('#' + theid + ' .left-links').html('');
            $('#' + theid + ' .right-links').html('');
            $('#' + theid + ' .navbar-brand').html(nav_logo_text);
            $.modal.close();
            update_console('Element successfully generated.');
        } else {
            $('#simplemodal-data').html('<p><h3><i class="fa fa-bars"></i> Navigation Bar</h3> customisation / links</p><p><span class="label label-warning">Note*</span> Use <i>"http://"</i> for external links.</p>');
            if (nav_links_left != 0) {
                $('#simplemodal-data').append('<p class="blueboy"><i class="fa fa-angle-double-left"></i> Left side links</p>');

                for (var i = 0; i < nav_links_left; i++) {
                    // generating the form for the left links
                    $('#simplemodal-data').append('\
							<span class="small-input-label">Link ' + (i + 1) + ':</span>\
							<input type="text" class="form-control small-input" placeholder="Link text" id="left-text-' + i + '">\
							<input type="text" class="form-control small-input" placeholder="Link adress" id="left-address-' + i + '">\
							<br /><br /><div class="clearfix"></div>');
                }
            }
            if (nav_links_right != 0) {
                // generating the form for the rigt links
                $('#simplemodal-data').append('<p class="blueboy"><i class="fa fa-angle-double-right"></i> Right side links</p>');
                for (var i = 0; i < nav_links_right; i++) {
                    $('#simplemodal-data').append('\
							<span class="small-input-label">Link ' + (i + 1) + ':</span>\
							<input type="text" class="form-control small-input" placeholder="Link text" id="right-text-' + i + '">\
							<input type="text" class="form-control small-input" placeholder="Link adress" id="right-address-' + i + '">\
							<br /><br /><div class="clearfix"></div>');
                }
            }
            $('#simplemodal-data').append('<div class="clearfix"></div>\
						<br />\
						<button class="btn btn-warning pull-left" onClick="nav_modal(\'' + theid + '\')"><i class="fa fa-angle-left"></i> Back</button>\
						<button id="nav-submit-2" class="btn btn-primary pull-right" onClick="nav_step2(\'' + theid + '\',' + nav_links_left + ',' + nav_links_right + ')">Save <i class="fa fa-check"></i></button>');
         
            $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('380px','500px'));

        }

        

        // Making the form submitable onEnter

            $('.form-control').keypress(function(e) {
                if(e.which == 13) {
                    jQuery(this).blur();
                    jQuery('#nav-submit-2').focus().click();
                }
            });

    }

}


// Step 2 of customising the navabr (Generating the links)

function nav_step2(theid, links_left, links_right) {

    generalErrors = new Array();

    // cleaning the link list

    $('#' + theid + ' .left-links').html('');
    $('#' + theid + ' .right-links').html('');

    // generating the left links

    for (var i = 0; i < links_left; i++) {
        var errors = new Array();

        link_text = htmlEncode($('#left-text-' + i).val());
        link_addr = htmlEncode($('#left-address-' + i).val());

        if (!link_text.trim()) {
            $('#left-text-' + i).addClass('error');
            errors.push(1);
            generalErrors.push(link_text);

        }
        if (!link_addr.trim()) {
            $('#left-address-' + i).addClass('error');
            errors.push(1);
            generalErrors.push(link_addr);
        }

        if (errors.length == 0) {
            $('#' + theid + ' .left-links').append('<li><a href="' + link_addr + '">' + link_text + '</a></li>')
        }

    }

    // generating the right links


    for (var i = 0; i < links_right; i++) {

        var errors = new Array();

        link_text = htmlEncode($('#right-text-' + i).val());
        link_addr = htmlEncode($('#right-address-' + i).val());

        if (!link_text.trim()) {
            $('#right-text-' + i).addClass('error');
            errors.push(1);
            generalErrors.push(link_text);

        }
        if (!link_addr.trim()) {
            $('#right-address-' + i).addClass('error');
            errors.push(1);
            generalErrors.push(link_addr);
        }

        if (errors.length == 0) {
            $('#' + theid + ' .right-links').append('<li><a href="' + link_addr + '">' + link_text + '</a></li>')
        }

    }

    if (generalErrors.length == 0) {
        update_console('Element successfully generated.');
            $('#' + theid + ' .navbar-brand').html(nav_logo_text);
            $.modal.close();
    } else {
        alert('Fields can`t be empty. Please fill them and try again.')
    }



}

// function to edit the nav_modal()`s forms 

function nav_edit_modal(theid) {

    //getting the previous values
    nav_logo_text = htmlEncode($('#' + theid + ' .navbar-brand').html());
    nav_links_left = 0
    $('#' + theid + ' .left-links li').each(function (index) {
        nav_links_left++;
    });
    nav_links_right = 0

    $('#' + theid + ' .right-links li').each(function (index) {
        nav_links_right++;
    });

    // and setting them up

    $('#nav-brand').val(nav_logo_text);
    $('#nav-links-left').val(nav_links_left);
    $('#nav-links-right').val(nav_links_right);

}