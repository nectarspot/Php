// Plugin name: Slider
// Version: 1.0
// Author: George ic0de Damian (Qdev)
// Description: A plugin that handles the slider element
// Selector: com_slider
// Status: Enabled

function drop_slider() {
    theid = 'slider-' + genRand(5);
    $('#right-container #data').append('<div class="com_slider">' + $('#com_slider').html() + '</div>')
    $('#right-container .com_slider').each(function (index) {

    	//console.log(theid);

        if (!$(this).attr('id')) {
            $(this).attr('id', theid);
        }

		$("#" + theid).contextmenu({
		    menu: [
                {title: "Edit", cmd: theid, uiIcon: "ui-icon-copy",action: function(event, ui){
                  slider_modal(ui.cmd,2);
                  edit_slider_modal(ui.cmd);
                 }
                },
                {title: "----"},
                {
                title: "Delete", cmd: theid, uiIcon: "ui-icon-trash",action: function(event, ui){
					remove_element(ui.cmd);
	             }}
		        ]
		});


    });

    elements.push(theid);
    slider_modal(theid,1);
}


function edit_slider_modal(theid){

   tableData = '';
   for(var i = 0; i < slides.length; i++){
      tableData += '<tr id="tr_'+i+'">' + '<td><img class="thumbImg" src="data/images/'+slides[i][1]+'"></td><td>'+slides[i][2]+'</td><td>'+slides[i][3]+'</td><td><span class="blueboy handCursor" onClick="deleteSlide('+i+')">Delete</span></td>' + '</tr>';
   }

   $('#slidesHolder').html('\
       <table class="table table-bordered" >\
       <thead>\
       <tr class="oboy"><td>Image</td><td>Slide Title</td><td>Slide Subtitle</td><td>Actions</td></tr>\
       <tbody>'+
       tableData
       +'</tbody>\
       </thead>\
       </table>\
       <div class="clearfix"></div>\
       <button class="btn btn-primary pull-right" onClick="save_slider(\''+theid+'\')">Save <i class="fa fa-check"></i></button>\
       <br /><br />');

   $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('200px','500px') );
   $('#activeSlidesNum').html(slides.length);
   toggleHolders(2)

}



// The header customising modal box

function slider_modal(theid,mode) {
    
     $.post("com/php/core-ajax.php?req=slider-data", {subreq: 'resetSes'});

     if(mode == 1){
        slides = [];
     }

    

    $.modal.close();
    $.modal('\
			       	<p><h3><i class="fa fa-film"></i> Image slider</h3> customisation</p>\
                    <br />\
			         <h3 class="oboy">Active slides: <span id="activeSlidesNum" class="blackboy" > 0</span> <button class="btn btn-primary pull-right" onClick="toggleHolders(1)">Add slide <i class="fa fa-plus"></i></button> </h3>\
                    <br />\
                    <div class="clearfix"></div>\
                    <br />\
                    <div id="newSlideHolder" style="display:none" class="well">\
                    <div class="form-group">\
                    <label for="add-uplimage">Select the image</label>\
                    <input type="file" id="add-uplimage" name="add-uplimage" >\
                    </div>\
                    \
                    <div class="form-group">\
                    <input type="checkbox" id="add-incl-title" />\
                    <label for="add-slidetitle">Slide Title</label>\
                    <input type="text" id="add-slidetitle" class="form-control" >\
                    </div>\
                    \
                    <div class="form-group">\
                    <input type="checkbox" id="add-incl-subtitle" />\
                    <label for="add-slidesubtitle">Slide Subtitle</label>\
                    <input type="text" id="add-slidesubtitle" class="form-control" >\
                    </div>\
                    \
                    <button class="btn btn-warning" onClick="resetSlideHolder(2)"><i class="fa fa-angle-left"></i> Cancel</button>\
                    <button id="slider-submit-1" class="btn btn-primary pull-right" onClick="addNewSlide(\''+theid+'\')">Save <i class="fa fa-check"></i></button>\
                    <div class="clearfix"></div>\
                    <br /><p><span class="label label-warning">Note*</span> Allowed extensions: '+settings_upload_allowed_extensions.split("|").join(", ")+', Maximum upload size: '+settings_upload_maximum_size+'Mb</p>\
                    <p><span class="label label-warning">Note*</span> The slider will inerhit the size of the picture, so make sure you upload photos with same resolution.</p>\
                    <p><span class="label label-warning">Note*</span> For a proper visualisation, upload pictures with the width bigger than 1140 px.</p>\
                    </div>\
                    \
                    <div id="slidesHolder" style="display:none" class="well">\
                    No slides active\
                    </div>\
                    \
                     ',
                      {escClose:false});

                  // Making the form submitable onEnter

                      $('.form-control').keypress(function(e) {
                          if(e.which == 13) {
                              jQuery(this).blur();
                              jQuery('#slider-submit-1').focus().click();
                          }
                      });

                    $("#add-uplimage").pekeUpload({
                        theme:'bootstrap',
                        multi:true,
                        allowedExtensions: settings_upload_allowed_extensions,
                        maxSize: settings_upload_maximum_size,
                        onFileError:function(file,error){
                            alert(error);
                        },
                        onFileSuccess:function(file,error){
                            setFileName(file.name);
                        },

                     });

                    $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px','200px') );


}


fileName = '';
function setFileName(vari){
    fileName = vari;
}

function deleteSlide(id){
    id = parseInt(id);
    $('#tr_' + String(id)).fadeOut( "slow", function() {
        $.post("com/php/core-ajax.php?req=slider-data", {subreq: 'del',fn:slides[id][1]})
        slides.splice(id,1);
        $('#activeSlidesNum').html(parseInt($('#activeSlidesNum').html())-1);
    });

    //check if there are any slides left

    nrOfslides =  parseInt($('#activeSlidesNum').html()) - 1;
    console.log(nrOfslides)
    if(nrOfslides == 0){
        $( "#slidesHolder" ).fadeOut( "slow", function() {
            $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('500px','200px') );
            $('#slidesHolder').html('');
        });
        
    }

}

function toggleHolders(id){

    if(id == 1){
    $('.simplemodal-container').attr('style', $('.simplemodal-container').attr('style').replace('200px','500px') );
      $( "#newSlideHolder" ).fadeIn( "slow", function() {
        });
      $( "#slidesHolder" ).fadeOut( "slow", function() {
        });
    }
    else{
      $( "#slidesHolder" ).fadeIn( "slow", function() {
        });
      $( "#newSlideHolder" ).fadeOut( "slow", function() {
        });
    }
}

function resetSlideHolder(id){
        $('.file').remove();
        $('#add-incl-title').prop('checked', false);
        $('#add-slidetitle').val('');
        $('#add-slidetitle').prop('class','form-control');
        $('#add-incl-subtitle').prop('checked', false);
        $('#add-slidesubtitle').val('');
        $('#add-slidesubtitle').prop('class','form-control');
        fileName = ''
        toggleHolders(id);
}

function addNewSlide(theid){
    
    slide_incl_title    = $('#add-incl-title').prop('checked');
    slide_title         = htmlEncode($('#add-slidetitle').val());
    slide_incl_subtitle = $('#add-incl-subtitle').prop('checked'); 
    slide_subtitle      = htmlEncode($('#add-slidesubtitle').val());

    error = false;
    if(slide_incl_title == true){
        if(!slide_title.trim()){
             $('#add-slidetitle').addClass('error');
            error = true;
        }
    }
    if(slide_incl_subtitle == true){
        if(!slide_subtitle.trim()){
             $('#add-slidesubtitle').addClass('error');
            error = true;
        }
    }

        if(alert == true){
            alert('If checked, you must enter a value for the title or subtitle.')
        }
    

    if(!fileName.trim()){
        error = true
        alert('Please select an image before you try to save the slide.')
    }

    if(error == false){
        
    slide_data = [theid,fileName,slide_title,slide_subtitle];
    slides.push(slide_data);

    //updating the slides holder

    tableData = '';

    for(var i = 0; i < slides.length; i++){
       tableData += '<tr id="tr_'+i+'">' + '<td><img class="thumbImg" src="data/images/'+slides[i][1]+'"></td><td>'+slides[i][2]+'</td><td>'+slides[i][3]+'</td><td><span class="blueboy handCursor" onClick="deleteSlide('+i+')">Delete</span></td>' + '</tr>';
    }

    $('#slidesHolder').html('\
        <table class="table table-bordered" >\
        <thead>\
        <tr class="oboy"><td>Image</td><td>Slide Title</td><td>Slide Subtitle</td><td>Actions</td></tr>\
        <tbody>'+
        tableData
        +'</tbody>\
        </thead>\
        </table>\
        <div class="clearfix"></div>\
        <button class="btn btn-primary pull-right" onClick="save_slider(\''+theid+'\')">Save <i class="fa fa-check"></i></button>\
        <br /><br />');


   

     $.post("com/php/core-ajax.php?req=slider-data", {subreq: 'set',si: theid, fn: fileName,st: slide_title,ss:slide_subtitle});

      $( "#newSlideHolder" ).fadeOut( "slow", function() {

        resetSlideHolder(2)

        $('#activeSlidesNum').html(parseInt($('#activeSlidesNum').html())+1);

      });

    }

}


function save_slider(theid){
    
    carouselId = 'carousel-' + theid;

    $('#' + theid + ' #thecarousel').prop('id', carouselId);

    $('#' + theid + ' .left').prop('href','#'+ carouselId);
    $('#' + theid + ' .right').prop('href','#'+ carouselId);
    

    sliderIndicators = '';
    sliderItems      = '';

    for(var i=0;i < slides.length;i++){

        //creating the indicators

        if(i == 0){
            active = 'active';
        }
        else{
           active = ''; 
        }

        sliderIndicators += '<li data-target="#'+carouselId+'" data-slide-to="'+i+'" class="'+active+'"></li>';

        sliderItems += ' <div class="item '+active+'">\
                       <img src="data/images/'+slides[i][1]+'" alt="...">\
                       <div class="carousel-caption">\
                         <h3>'+slides[i][2]+'</h3>\
                         <p>'+slides[i][3]+'</p>\
                       </div>\
                      </div>'

    }
    
    $('#' + theid + ' .carousel-indicators').html(sliderIndicators);
    $('#' + theid + ' .carousel-inner').html(sliderItems);

    $.modal.close();
    update_console('Element successfully generated.');

}