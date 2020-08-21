// Plugin name: Content Box
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the content boxes element
// Selector: com_contentbox-draggable
// Status: Enabled

var space_left = 12;

function drop_content_box(theid){
		         

				if(space_left <= 0){
					space_left = 12;
				}

		         if(theid == 0){
		         	space_left = 12;
		         	theid = 'contentbox-' + genRand(5);
		         	$('#right-container #data').append('<div class="row custom-row">' + $('#com_contentbox-draggable').html() + '</div>')
				 	$('#right-container .custom-row').each(function( index ) {

					 if(!$(this).attr('id')){
					 	$(this).attr('id', theid);
					 }

					$("#" + theid).contextmenu({
				    menu: [
				        {title: "Delete", cmd: theid, uiIcon: "ui-icon-trash",action: function(event, ui){
							remove_element(ui.cmd);
			             }}
				        ]
					});

				 });
				 
		         elements.push(theid);

		         }
		         else{

		         	

		        	$('#right-container #data #' + theid).append($('#com_contentbox-draggable').html());
		         }
		         content_modal(theid,1);
}




function content_modal(theid,mode) {

	availableSpans    = new Array();
	availableSpans[0] =  '<option selected>8 % (span 1 )</option>';
	availableSpans[1] =  '<option selected>16% (span 2 )</option>';
	availableSpans[2] =  '<option selected>24% (span 3 )</option>';
	availableSpans[3] =  '<option selected>32% (span 4 )</option>';
	availableSpans[4] =  '<option selected>40% (span 5 )</option>';
	availableSpans[5] =  '<option selected>48% (span 6 )</option>';
	availableSpans[6] =  '<option selected>56% (span 7 )</option>';
	availableSpans[7] =  '<option selected>64% (span 8 )</option>';
	availableSpans[8] =  '<option selected>72% (span 9 )</option>';
	availableSpans[9] = '<option selected>80% (span 10)</option>';
	availableSpans[10] = '<option selected>88% (span 11)</option>';
	availableSpans[11] = '<option selected>96% (span 12)</option>';

	theSpans = '';

	for(var i = 0; i < space_left; i++){
		if(i == space_left - 1){
			theSpans += availableSpans[i];
		}
		else{
			theSpans += availableSpans[i].replace('selected','');
		}
	}


    $.modal.close();
    $.modal('\
			<p><h3><i class="fa fa-square-o"></i> Content boxes</h3> customisation</p>\
			  <div class="form-group">\
			    <label for="box-width">Box width:</label>\
				<select class="form-control" id="box-width">' +
					theSpans
	             + '</select>\
	              </div>\
				 <div class="checkbox">\
				     <label>\
				       <input type="checkbox" id="box-border"> <b>Custom border color</b>&nbsp;<input type="text" id="cp_border" value="#1990d5"/>\
				     </label>\
				   </div>\
				 <div class="checkbox">\
				     <label>\
				       <input type="checkbox" id="box-background"> <b>Custom background color</b>&nbsp;<input type="text" id="cp_background"/>\
				     </label>\
				   </div>\
				   <p><span class="label label-warning">Note*</span> <i>Otherwise, the box will inherhit theme`s colors.</i></p>\
	              <div class="form-group">\
	                 <label for="box-content">Box content:</label>\
					<textarea id="box-content" class="tinyarea"></textarea>\
			  </div>\
			  <button id="content-submit" class="btn btn-primary pull-right" onClick="content_save(\'' + theid + '\','+mode+')">Save <i class="fa fa-check"></button>',
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


function edit_content_modal(theid) {
	

		tinyMCE.activeEditor.setContent($('#' + theid).html());
		
		box_border = $.isNumeric(strpos($('#' + theid).attr('style'),'border:'));
		if(box_border == true){
			$('#box-border').trigger('click')
			color =  $.trim($('#' + theid).attr('style').match(/border:(.*?);/)[1].replace('1px solid',''));
				$("#cp_border").spectrum({
					color:color,
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});
		}
		box_background = $.isNumeric(strpos($('#' + theid).attr('style'),'background-color:'));
		if(box_background == true){
			$('#box-background').trigger('click');
			color =  $.trim($('#' + theid).attr('style').match(/background-color(.*)/)[1].replace(':',''));
			$("#cp_background").spectrum({
					color: color,
					preferredFormat: "hex",
					showInput: true,
					chooseText: "Save",
					showInitial: false,
				});
		}
}


function content_save(theid,mode){
	tinyMCE.activeEditor.dom.addClass(tinyMCE.activeEditor.dom.select('table'), 'table table-striped table-bordered');
	

	if(mode == 1){

		box_border = $('#box-border').is(':checked');
		box_background = $('#box-background').is(':checked');

		box_size        = $('#box-width').val();
		tinyMCE.triggerSave();
		box_content     = $('#box-content').val();

		// cleaning and setting the box_size a little
		regex = /%(.*)/g;
		box_size = Math.floor($.trim(box_size.replace(regex,'')));

		if(box_size == 8 ){box_size = 1 ;}
		if(box_size == 16){box_size = 2 ;}
		if(box_size == 24){box_size = 3 ;}
		if(box_size == 32){box_size = 4 ;}
		if(box_size == 40){box_size = 5 ;}
		if(box_size == 48){box_size = 6 ;}
		if(box_size == 56){box_size = 7 ;}
		if(box_size == 64){box_size = 8 ;}
		if(box_size == 72){box_size = 9 ;}
		if(box_size == 80){box_size = 10;}
		if(box_size == 88){box_size = 11;}
		if(box_size == 96){box_size = 12;}

		subid = 'subcontentbox-' + genRand(5);

		$('#'+ theid +' #subcontent').attr('class','col-md-'+ box_size +' well cbox-preview');
		$('#'+ theid +' #subcontent').attr('id', subid);
		$('#'+ theid +' #subcontent').attr('class',$('#'+ theid +' #subcontent').attr('class') + ' cbox-preview');


		

		// Setting up the context menu for this subcontent box

		//console.log(subid);

		$("#" + subid).contextmenu({
		 menu: [
		     {title: "Edit", cmd: subid, uiIcon: "ui-icon-copy",action: function(event, ui){
		       space_left = box_size;
		       space_left = 12;
		       content_modal(ui.cmd,2);
		       edit_content_modal(ui.cmd);
		      }
		  	},
		     {title: "----"},
		     {title: "Delete", cmd: subid, uiIcon: "ui-icon-trash",action: function(event, ui){
				remove_element(ui.cmd);
		      }}
		     ]
		});

		//seting up the content of the box
		$('#'+ theid +' #' + subid).html(box_content);


		// Setting up the border and background if wanted

		has_border = false;
		if(box_border == true){
			$('#'+ theid +' #' + subid).attr('style', 'border:' + $("#cp_border").spectrum('get').toHexString() + ' 1px solid;');
			has_border = true;
		}

		if(box_background == true){
			if(has_border == true){
				$('#'+ theid +' #' + subid).attr('style', $('#'+ theid +' #' + subid).attr('style') + 'background-color:' + $("#cp_background").spectrum('get').toHexString());
			}
			else{
				$('#'+ theid +' #' + subid).attr('style', 'background-color:' + $("#cp_background").spectrum('get').toHexString());
			}
			
		}

		//updating the remaining space in the box
		space_left = space_left - box_size;
		
			$('#'+ theid).droppable({
		      	
				accept:'#com_contentbox-draggable',
				greedy: true,
			      drop: function( event, ui ) {
			      	idCheck = ui.draggable.context['innerHTML'];
			      	if(strpos(idCheck,'?n=navbar&i=8465Fgfsj33') > 0){
			      		update_console('Can`t do that.')
			      		return;

			      	}
			      	drop_content_box(theid);

			      },
				 //over:function(){alert(1)}
				 hoverClass: "ui-drop-hover"	
			 });
		
		elements.push(subid);
	}
	else if(mode == 2){
		
		tinyMCE.triggerSave();
		box_content = $('#box-content').val();
		box_width   = getBoxSizeById(theid);
		box_border = $('#box-border').is(':checked');
		box_background = $('#box-background').is(':checked');


		box_size        = $('#box-width').val();
		// cleaning and setting the box_size a little
		regex = /%(.*)/g;
		box_size = Math.floor($.trim(box_size.replace(regex,'')));

		if(box_size == 8 ){box_size = 1 ;}
		if(box_size == 16){box_size = 2 ;}
		if(box_size == 24){box_size = 3 ;}
		if(box_size == 32){box_size = 4 ;}
		if(box_size == 40){box_size = 5 ;}
		if(box_size == 48){box_size = 6 ;}
		if(box_size == 56){box_size = 7 ;}
		if(box_size == 64){box_size = 8 ;}
		if(box_size == 72){box_size = 9 ;}
		if(box_size == 80){box_size = 10;}
		if(box_size == 88){box_size = 11;}
		if(box_size == 96){box_size = 12;}


		$('#' + theid).attr('class', $('#' + theid).attr('class').replace('col-md-'+box_width,'col-md-' + box_size))

		// Setting up the border and background if wanted

		has_border = false;
		if(box_border == true){
			$('#'+ theid).attr('style', 'border:' + $("#cp_border").spectrum('get').toHexString() + ' 1px solid;');
			has_border = true;
		}
		else{
			$('#'+ theid).removeAttr('style');
		}

		if(box_background == true){
			if(has_border == true){
				$('#'+ theid).attr('style', $('#'+ theid).attr('style') + 'background-color:' + $("#cp_background").spectrum('get').toHexString());
			}
			else{
				$('#'+ theid).attr('style', 'background-color:' + $("#cp_background").spectrum('get').toHexString());
			}
			
		}
		else{
			if(has_border == true){
				$('#'+ theid).attr('style', $('#'+ theid).attr('style').replace(/background-color(.*)/,''));
			}
		}

		$('#'+ theid).html(box_content);

		update_console('Element successfully edited');

		space_left = 12;


	}

	$.modal.close();

}

