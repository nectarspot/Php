// Plugin name: Sharer
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the share element
// Selector: com_share
// Status: Enabled

function drop_share() {
    theid = 'share-' + genRand(5);
    $('#right-container #data').append('<div class="com_share">' + $('#com_share').html() + '</div>')
    $('#right-container .com_share').each(function (index) {

    	//console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

		$("#" + theid).contextmenu({
		    menu: [
		        {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
	              share_modal(ui.cmd);
	              edit_share_modal(ui.cmd);
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
    share_modal(theid);
}

function edit_share_modal(theid) {


    for(var i=0;i<share_items.length;i++){
 
        if(share_items[i] == 'facebook'){
            $('#incl-facebook').click();
        }
        if(share_items[i] == 'twitter'){
            $('#incl-twitter').click();
        }
        if(share_items[i] == 'google'){
            $('#incl-google').click();
        }
        if(share_items[i] == 'linkedin'){
            $('#incl-linkedin').click();
        }
        if(share_items[i] == 'pinterest'){
            $('#incl-pinterest').click();
        }
        if(share_items[i] == 'more'){
            $('#incl-more').click();
        }

    }

    $('#share-position #' + share_position).prop('selected', true);
}

// The header customising modal box

function share_modal(theid) {
    
    $.modal.close();
    $.modal('\
			       	<p><h3><i class="fa fa-share"></i> Share plugin</h3> customisation</p>\
			       	\
			       	  <div class="form-group">\
					    <label for="share-position">Box position:</label>\
					    <select class="form-control" id="share-position">\
                        <option id="Right" value="Right">Right</option>\
                        <option id="Left" value="Left">Left</option>\
                        </select>\
					  </div>\
					  \
                      <div class="form-group">\
                        <label for="share-Servicess">Services:</label>\
                        &nbsp;<label><input type="checkbox" id="incl-facebook"> <i class="fa fa-facebook"></i> Facebook</label>\
                        &nbsp;<label><input type="checkbox" id="incl-twitter"> <i class="fa fa-twitter"></i> Twitter</label>\
                        &nbsp;<label><input type="checkbox" id="incl-google"> <i class="fa fa-google-plus"></i> Google Plus</label>\
                        &nbsp;<label><input type="checkbox" id="incl-linkedin"> <i class="fa fa-linkedin"></i> Linkedin</label>\
                        &nbsp;<label><input type="checkbox" id="incl-pinterest"> <i class="fa fa-pinterest"></i> Pinterest</label>\
                        &nbsp;<label><input type="checkbox" id="incl-more"> <i class="fa fa-plus"></i> More</label>\
                      </div>\
                      <img src="com/img/share-preview.png" style="border:1px solid #2fa4e7"/>\
					  <button style="margin-top:10px;" class="btn btn-primary pull-right" onClick="share_save(\'' + theid + '\')">Save <i class="fa fa-check"></i></button>',
                      {escClose:false});




}


function share_save(theid){

    share_position = $('#share-position').val();

    incl_facebook  = $('#incl-facebook').prop('checked');
    incl_twitter   = $('#incl-twitter').prop('checked');
    incl_google    = $('#incl-google').prop('checked');
    incl_linkedin  = $('#incl-linkedin').prop('checked');
    incl_pinterest = $('#incl-pinterest').prop('checked');
    incl_more      = $('#incl-more').prop('checked');

    share_items       = [];
    share_activeItems = [];

    if(incl_facebook == true){
        share_items.push('facebook');
        share_activeItems.push('&nbsp;<i class="fa fa-facebook"></i>&nbsp;')
    }
    if(incl_twitter == true){
        share_items.push('twitter');
        share_activeItems.push('&nbsp;<i class="fa fa-twitter"></i>&nbsp;')
    }
    if(incl_google == true){
        share_items.push('google');
        share_activeItems.push('&nbsp;<i class="fa fa-google-plus"></i>&nbsp;')
    }
    if(incl_linkedin == true){
        share_items.push('linkedin');
        share_activeItems.push('&nbsp;<i class="fa fa-linkedin"></i>&nbsp;')
    }
    if(incl_pinterest == true){
        share_items.push('pinterest');
        share_activeItems.push('&nbsp;<i class="fa fa-pinterest"></i>&nbsp;')
    }
    if(incl_more == true){
        share_items.push('more');
        share_activeItems.push('&nbsp;<i class="fa fa-plus"></i>&nbsp;')
    }

    if(share_items.length > 0){
         $.post("com/php/core-ajax.php?req=share-data", {subreq: 'set',p: share_position,i:share_items})
         share_activeItems.push(' - ' + share_position);
         $('#' + theid + ' #activeItems').html(share_activeItems.join(''));
         $.modal.close();
         update_console('Element successfully edited');
    }
    else{
        alert('You must select at least one service.')
    }

}
