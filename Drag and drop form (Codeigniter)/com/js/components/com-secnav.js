// Plugin name: Secondary navigation bar
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the secondary navbar element
// Selector: com_secnav
// Status: Enabled

function drop_secnav() {
    theid = 'secnav-' + genRand(5);
    $('#right-container #data').append('<div class="com_secnav">' + $('#com_secnav').html() + '</div>')
    $('#right-container .com_secnav').each(function (index) {

    	//console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

		$("#" + theid).contextmenu({
		    menu: [
		        {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
	              secnav_modal(ui.cmd);
	              secnav_edit_modal(ui.cmd);
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
    secnav_modal(theid);
}

// The navbar customising modal box

function secnav_modal(theid) {
    $.modal.close();
    $.modal('\
			       	<p><h3><i class="fa fa-list"></i> Secondary Navigation Bar</h3> customisation</p>\
			       	\
			       	  <div class="form-group">\
					    <label for="nav-brand">Number of items:</label>\
					    <input type="text" class="form-control" id="secnav-nritems">\
					  </div>\
					  \
			       	  <div class="form-group">\
					    <label for="nav-links-left">Type of listing:</label>\
					   <select class="form-control" id="secnav-type">\
                       <option>Pills</option>\
                       <option>Tabs</option>\
                       </select>\
                       \
					  </div>\
					  \
					  <button id="secnav-submit-1" class="btn btn-primary pull-right" onClick="secnav_step1(\'' + theid + '\')">Next <i class="fa fa-angle-right"></i></button>',
                      {escClose:false});

    // Making the form submitable onEnter

        $('.form-control').keypress(function(e) {
            if(e.which == 13) {
                jQuery(this).blur();
                jQuery('#secnav-submit-1').focus().click();
            }
        });


    // Resizing the modal box

     $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px','300px') );
}


// Step one of customising the navbar (Setting up the logo and number of links)

function secnav_step1(theid) {

    var errors = new Array();

    nav_nritems = $('#secnav-nritems').val();
    nav_type    = $('#secnav-type').val();

    if(nav_type == 'Tabs'){
        nav_type = 'nav-tabs';
    }
    else if(nav_type == 'Pills'){
        nav_type = 'nav-pills';
    }



   if (!nav_nritems.trim()) {
       alert('Please enter the number of items you want in the navigation bar.')
   }
   else{
        if(parseInt(nav_nritems) == 0 || !$.isNumeric(nav_nritems)){
            alert('The number of items must be a number different than 0.')
        }
        else{
            
             $('#simplemodal-data').html('<p><h3><i class="fa fa-list"></i> Secondary Navigation Bar</h3> customisation</p><p><b>Note*</b> Use <i>"http://"</i> for external links.</p>');
             $('#simplemodal-data').append('<p class="blueboy pull-right"><i class="fa fa-check-circle-o"></i> Selected item</p><div class="clearfix"></div>');

                 for (var i = 0; i < parseInt(nav_nritems); i++) {
                     $('#simplemodal-data').append('\
                            <span class="small-input-label">Item ' + (i + 1) + ':</span>\
                            <input type="text" class="form-control small-input" placeholder="Item text" id="item-text-' + i + '">\
                            <input type="text" class="form-control small-input" placeholder="Item adress" id="item-address-' + i + '">\
                            <input type="radio" style="margin-top:14px;margin-left:3px;" name="item-selected" value="selected-'+(i + 1)+'"/>\
                            <br /><br /><div class="clearfix"></div>');
                 }

            $('input[type="radio"][name="item-selected"][value="selected-1"').click();

            $('#simplemodal-data').append('<div class="clearfix"></div>\
            <br />\
            <button class="btn btn-warning pull-left" onClick="secnav_modal(\''+theid+'\')"><i class="fa fa-angle-left"></i> Back</button>\
            <button id="secnav-submit-2" class="btn btn-primary pull-right" onClick="secnav_step2(\''+theid+'\','+parseInt(nav_nritems)+',\''+ nav_type +'\')">Save <i class="fa fa-check"></i></button>');          
           
            // Making the form submitable onEnter

                $('.form-control').keypress(function(e) {
                    if(e.which == 13) {
                        jQuery(this).blur();
                        jQuery('#secnav-submit-2').focus().click();
                    }
                });

            // Resizing the modal Boz

            $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('300px','400px') );

        }
   }

}


// Step 2 of customising the navabr (Generating the links)

function secnav_step2(theid, nritems, type) {

    generalErrors = new Array();
    secnav_selitem = $('input[type="radio"][name="item-selected"]:checked').attr('value');


     $('#' + theid + ' .items').html('');

     for (var i = 0; i < nritems; i++) {
         var errors = new Array();

         link_text = htmlEncode($('#item-text-' + i).val());
         link_addr = htmlEncode($('#item-address-' + i).val());

         if (!link_text.trim()) {
             $('#item-text-' + i).addClass('error');
             errors.push(1);
             generalErrors.push(link_text);

         }
         if (!link_addr.trim()) {
             $('#item-address-' + i).addClass('error');
             errors.push(1);
             generalErrors.push(link_addr);
         }

         if (errors.length == 0) {
             if(i+1 == parseInt(secnav_selitem.split('-')[1])){
                 $('#' + theid + ' .items').append('<li class="active"><a href="' + link_addr + '">' + link_text + '</a></li>')
            }
            else{
               $('#' + theid + ' .items').append('<li><a href="' + link_addr + '">' + link_text + '</a></li>')
            }
         }

     }

    if (generalErrors.length == 0) {
         $('#' + theid + ' .items').attr('class','nav ' + type + ' items');
        update_console('Element successfully generated.');
        $.modal.close();
    } else {
        alert('Fields can`t be empty. Please fill them and try again.')
    }  

}

// function to edit the nav_modal()`s forms 

function secnav_edit_modal(theid) {

    secnav_type = $('#' + theid + ' .items').attr('class');
    if(strpos(secnav_type,'nav-pills') > 0){
        secnav_type = 1;
    }
    else{
        secnav_type = 2;
    }

   secnav_nritems = 0;
   $('#' + theid + ' .items li').each(function (index) {
       secnav_nritems++;
   });


   //// and setting them up

   $('#secnav-nritems').val(secnav_nritems);
   $('#secnav-type :nth-child('+secnav_type+')').prop('selected', true);

}