// Plugin name: Footer
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the footer element
// Selector: com_footer
// Status: Enabled

function drop_footer(theid){

		         	theid = 'footer-' + genRand(5);
		         	$('#right-container #data').append('<div class="com_footer">' + $('#com_footer').html() + '<!-- FooterEnds --></div>')
				 	$('#right-container .com_footer').each(function( index ) {

					 if(!$(this).attr('id')){
					 	$(this).attr('id', theid);
					 }

					$("#" + theid).contextmenu({
				    menu: [
						    {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
			              footer_modal(ui.cmd);
			              edit_footer_modal(ui.cmd);
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
		         footer_modal(theid);
}




function footer_modal(theid) {

    $.modal.close();
    $.modal('\
			<p><h3><i class="fa fa-arrow-circle-down"></i> Footer</h3> customisation</p>\
				 <div class="checkbox">\
				     <label>\
				       <input type="checkbox" id="footer-border"> <b>Custom border color</b>&nbsp;<input type="text" id="cp_border" value="#1990d5"/>\
				     </label>\
				   </div>\
				 <div class="checkbox">\
				     <label>\
				       <input type="checkbox" id="footer-background"> <b>Custom background color</b>&nbsp;<input type="text" id="cp_background"/>\
				     </label>\
				   </div>\
				   <p><span class="label label-warning">Note*</span> <i>Otherwise, the box will inherhit theme`s colors.</i></p>\
	              <div class="form-group">\
	                 <label for="footer-content">Box content:</label>\
					<textarea id="footer-content" class="tinyarea"></textarea>\
			  </div>\
			  <button id="content-submit" class="btn btn-primary pull-right" onClick="footer_save(\'' + theid + '\')">Save <i class="fa fa-check"></button>',
			  {escClose:false});


				// loading the tiny mce module
				load_tinymce();

				// and the color pickers
				$("#cp_border").spectrum({
					color:'#1990d5',
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});

				$("#cp_background").spectrum({
					color:'#f5f5f5',
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});

}


function edit_footer_modal(theid) {
	
		tinyMCE.activeEditor.setContent($('#' + theid + ' #subcontent').html());
		
		box_border = $.isNumeric(strpos($('#' + theid + ' #subcontent').attr('style'),'border:'));
		if(box_border == true){
			$('#footer-border').trigger('click')
			color =  $.trim($('#' + theid+ ' #subcontent').attr('style').match(/border:(.*?);/)[1].replace('1px solid',''));
				$("#cp_border").spectrum({
					color:color,
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});
		}
		box_background = $.isNumeric(strpos($('#' + theid + ' #subcontent').attr('style'),'background-color:'));
		if(box_background == true){
			$('#footer-background').trigger('click');
			color =  $.trim($('#' + theid + ' #subcontent').attr('style').match(/background-color(.*)/)[1].replace(':',''));
			$("#cp_background").spectrum({
					color: color,
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});
		}
}


function footer_save(theid){
	
	tinyMCE.activeEditor.dom.addClass(tinyMCE.activeEditor.dom.select('table'), 'table table-striped table-bordered');
	tinyMCE.triggerSave();
	
	box_border      = $('#footer-border').is(':checked');
	box_background  = $('#footer-background').is(':checked');
	box_content     = $('#footer-content').val();


	subid = 'subcontent';

	has_border = false;
	if(box_border == true){
		$('#'+ theid +' #' + subid).attr('style', 'border:' + $("#cp_border").spectrum('get').toHexString() + ' 1px solid;');
		has_border = true;
	}
	else{
			$('#'+ theid + ' #' + subid).removeAttr('style');
		}

	if(box_background == true){
		if(has_border == true){
			$('#'+ theid +' #' + subid).attr('style', $('#'+ theid +' #' + subid).attr('style') + 'background-color:' + $("#cp_background").spectrum('get').toHexString());
		}
		else{
			$('#'+ theid +' #' + subid).attr('style', 'background-color:' + $("#cp_background").spectrum('get').toHexString());
		}
		
	}
		else{
			if(has_border == true){
				$('#'+ theid + ' #' + subid).attr('style', $('#'+ theid).attr('style').replace(/background-color(.*)/,''));
			}
		}


	$('#'+ theid + ' #' + subid).html('<!-- FooterContent -->' + box_content + '<!-- EndofFooterContent -->');

	update_console('Element successfully edited');


	$.modal.close();

}

