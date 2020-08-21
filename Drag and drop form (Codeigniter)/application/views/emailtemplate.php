<!DOCTYPE html>
<html lang="en">

  <!--
  #
  # PHP Beaver v. 1.1
  #
  -->

  
<!-- Mirrored from beaver.qwebdev.eu/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 10:48:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META -->

    <title> Email Template</title>
    <meta name="description" content="This script it`s great!">

    <!-- THE CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>com/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>com/css/layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>com/css/jQuery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>com/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>com/css/spectrum.css">
       <!--  <link rel="shortcut icon" href="<?php echo base_url()?>com/img/favicon.ico" /> -->
    
    <!-- THE JS -->

    <!-- Plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>com/js/jQuery/jQuery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/jQuery/jQuery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/jQuery/jQuery.simplemodal.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/jQuery/jQuery.ui-contextmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/jQuery/jQuery.upload.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/plugins/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/spectrum.js"></script>


    <!-- Components -->
    <script type="text/javascript" src="<?php echo base_url()?>com/js/functions.js"></script>

        <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-contact.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-content.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-footer.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-header.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-navbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-secnav.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-share.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>com/js/components/com-slider.js"></script>
 



        
    <!-- Loader -->
    <script type="text/javascript" src="<?php echo base_url()?>com/js/loader.js"></script>


      <script>

      var elements = [];

    $(function() {

      /* Initialising some neccessary variables */

      sessid = "p8q9q1b3mskpne6av3n0it8me6";
      settings_upload_allowed_extensions = "jpeg|jpg|png|ico|css";
      settings_upload_maximum_size = 9;
      update_console('PHP Beaver v. 1.1 loaded');

    });

      $(function() {

        /*
         *
         * Generating the drag and drop handlers
         *
         */

        

    $( "#com_contact" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_contentbox-draggable" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_footer" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_header" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_navbar" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_secnav" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_share" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });


    $( "#com_slider" ).draggable({
         revert: true,
         cursor: "move",
          start: function() {
            update_console("Now drag it in the right.");
          },
          stop: function(){
        update_console("Idle");
          }
      });
 


        /*
         *
         *  Making the components droppable in the preview sections
         *
         */

       $( "#right-container" ).droppable({
          drop: function( event, ui ) {
             
            idCheck = ui.draggable.context['innerHTML'];



            // if user drops a navbar
            if(strpos(idCheck,'?n=navbar&i=8465Fgfsj33') > 0){
              if(!checkIfHasElement('navbar')){
                drop_nav();
              }
              else{
                alert('You can only have one navigation bar per page.');
              }
            }
            // if user drops a contentbox
            else if(strpos(idCheck,'?n=contentbox&i=opol23d75j') > 0){
              drop_content_box(0);

            }
            else if(strpos(idCheck,'<!-- ?n=header&i=olK87FX34 -->') > 0){
              drop_header();
            }
            else if(strpos(idCheck,'<!-- ?n=secnavx&i=9jyb57ofnr -->') > 0){
              drop_secnav();
            }
            else if(strpos(idCheck,'<!-- ?n=contact&i=lkn56jhf5j -->') > 0){
              if(!checkIfHasElement('contact')){
                drop_contact();
              }
              else{
                alert('You can only have one contact form per page.');
              }
            }
            else if(strpos(idCheck,'<!-- ?n=slider&i=lj5n6m00of -->') > 0){
              if(!checkIfHasElement('slider')){
                drop_slider();
              }
              else{
                alert('You can only have one slider per page.');
              }
            }
            else if(strpos(idCheck,'<!-- ?n=share&i=p67j4n79cv -->') > 0){
              if(!checkIfHasElement('share')){
                drop_share();
              }
              else{
                alert('You can only have one share plugin per page.');
              }
            }
            else if(strpos(idCheck,'<!-- ?n=footer&i=olk7g5rnl0 -->') > 0){
              if(!checkIfHasElement('footer')){
                drop_footer();
              }
              else{
                alert('You can only have one footer per page.');
              }
            }


          },  
        });

      });

      </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-44829010-1', 'qwebdev.eu');
          ga('send', 'pageview');
        
        </script>

  </head>

  <body>

        <div class="main-container">

          <div id="header">
            <span id="data">
              
              <span id="logo">
                <a href="index-2.html">Create Email Template</a>
              </span>
            <!--   <span id="menu" class="pull-right">
                <a href="about.html">About</a>&nbsp;
                &nbsp;<a href="help.html">Help</a>
              </span> -->
            
            </span>
          </div>

          <div id="left-container">
            <div id="data">
              
              <div class="ind tabs">
                <!-- <h2 style="display: inline;"><i class="fa fa-code"></i> Elements </h2> -->
              
                <button class="btn btn-warning btn-sm tabbtn defaulttab" role="button" rel="tabs1">1</button> <button class="btn btn-warning btn-sm tabbtn" role="button" rel="tabs2">2</button> <button class="btn btn-warning btn-sm tabbtn" role="button" rel="tabs3">3</button> <button class="btn btn-warning btn-sm tabbtn" role="button" rel="tabs4">4</button>            
              </div>

              <!-- TAB 1 -->

              <div class="tab-content" id="tabs1">
              

                
              <!-- Navigation bar -->

              <h4><i class="fa fa-bars"></i> Primary navigation bar</h4>

              <div id="com_navbar" >
                <!-- ?n=navbar&i=8465Fgfsj33 -->
              <nav class="navbar navbar-default inverse" role="navigation">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav left-links">
                    <li ><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                  </ul>

                  <ul class="nav navbar-nav navbar-right right-links">
                    <li><a href="#">Link 3</a></li>
                  </ul>
                </div>
              </nav>
            </div>                        <!-- Page header -->

                        
                        
                        <h4><i class="fa fa-toggle-up"></i> Page headers</h4>

                        <div style="margin-top:-18px">
                        <div id="com_header">
                            <!-- ?n=header&i=olK87FX34 -->
                            <div class="page-header well">
                              <h2>Page header example</h2>
                              <small>Subtext for header</small>
                            </div>
                        </div>
                        </div>            <!-- Content boxes -->

            <h4><i class="fa fa-square-o"></i> Content boxes</h4>


            <div id="com_contentbox-draggable">
            <!-- ?n=contentbox&i=opol23d75j -->
            
              
              <div class="col-md-12 well subcontent" id="subcontent">
                <i>Here, you can add whatever you want</i>
              </div>

            </div>

            </div>

            <!-- [END OF] TAB 1 -->

            <!-- TAB 2 -->


            <div class="tab-content" id="tabs2">

                                    <!-- Secondary navigation bars -->

                        <h4><i class="fa fa-list"></i> Secondary navigation bars</h4>

                        <div id="com_secnav">
                            <!-- ?n=secnavx&i=9jyb57ofnr -->
                            <div class="well">
                                <ul class="nav nav-pills items">
                                  <li class="active"><a href="#">Home</a></li>
                                  <li><a href="#">Profile</a></li>
                                  <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="clearfix"></div>
            <!-- Sliders -->

            <h4><i class="fa fa-film"></i> Image sliders</h4>

            <div id="com_slider">
              <!-- ?n=slider&i=lj5n6m00of -->

              
              <!-- SliderWrap --><div class="col-md-12 well">

              <div id="thecarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#thecarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#thecarousel" data-slide-to="1"></li>
                  <li data-target="#thecarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  
                  <div class="item active">
                    <img src="<?php echo base_url()?>com/img/slider/slide-1.png" alt="...">
                    <div class="carousel-caption">
                      <h3>First slide</h3>
                      <p>first slide subtitle</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url()?>com/img/slider/slide-2.png" alt="...">
                    <div class="carousel-caption">
                      <h3>Second slide</h3>
                      <p>second slide subtitle</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="<?php echo base_url()?>com/img/slider/slide-3.png" alt="...">
                    <div class="carousel-caption">
                      <h3>Third slide</h3>
                      <p>third slide subtitle</p>
                    </div>
                  </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#thecarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#thecarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>

              
              <!-- EndOfSliderWrap --></div>

                  </div>


            </div>

            <!-- [END OF] TAB 2 -->


            <!-- TAB 3 -->

            <div class="tab-content" id="tabs3">


              
                            <!-- Contact form -->


                            <h4><i class="fa fa-info-circle"></i> Contact Forms</h4>

                            <div id="com_contact">
                                <!-- ?n=contact&i=lkn56jhf5j -->

                                    <div class="clearfix"></div>

                                    <form class="form-horizontal col-md-8 well">

                                        <div class="form-group">
                                            <label for="form-field-name">Name</label>
                                            <input type="text" name="form-field-name" class="form-control" id="form-field-name" />
                                        </div>

                                        <div class="form-group">
                                            <label for="form-field-email">Email</label>
                                            <input type="text" name="form-field-email" class="form-control" id="form-field-email" />
                                        </div>

                                        <div class="form-group">
                                            <label for="form-field-subject">Subject</label>
                                              <textarea class="form-control" rows="3" id="form-field-subject" name="form-field-subject"></textarea>
                                          </div>

                                        <div class="form-group">
                                            <label for="form-field-captcha">Captcha</label>
                                            <input type="text" name="form-field-captcha" class="form-control" id="form-field-captcha" />
                                        </div>


                                    </form>

                                <div class="clearfix"></div>

                            </div>

            </div>

            <!-- [END OF] TAB 3 -->

            <!-- TAB 4 -->

            <div class="tab-content" id="tabs4">

              
                            <h4><i class="fa fa-share"></i> Share Plugin</h4>

                            <div id="com_share">
                                <!-- ?n=share&i=p67j4n79cv -->

                                <div class="col-md-12 well">
                                    <h3>Share Plugin 
                                        <span id="activeItems">
                                    &nbsp;<i class="fa fa-facebook"></i>&nbsp;
                                    &nbsp;<i class="fa fa-twitter"></i>&nbsp;
                                    &nbsp;<i class="fa fa-google-plus"></i>&nbsp;
                                    &nbsp;<i class="fa fa-linkedin"></i>&nbsp;
                                    &nbsp;<i class="fa fa-pinterest"></i>&nbsp;
                                    &nbsp;<i class="fa fa-plus"></i>&nbsp;
                                        </span>
                                     </h3>
                                      <p><span class="label label-warning">Note*</span> <i>This is not how the plugin will look like. This box will not appear on the page. It is preferably to insert this box at the end or at the begging of the page.</i></p>
                                </div>
                            <!-- EndOfSHarePlugin --></div>
              <div class="clearfix"></div>

              <h4><i class="fa fa-arrow-circle-down"></i> Footer</h4>

              <div id="com_footer">
                  <!-- ?n=footer&i=olk7g5rnl0 -->
                 <div class="col-md-12 well" id="subcontent">

                 <h3>Footer</h3>

                 <span>
                  <span class="pull-left" style="color:#ff6707;">Copyright &copy; 2014 - PHP BEAVER</span>
                  <span class="pull-right">by <a href="http://qwebdev.eu/" style="color:#286f9a;">Qdev</a></span>
                 </spa>

                    </div>
                  
              </div>

            </div>

            <!-- [END OF] TAB 4 -->


            </div>
          </div>

          <div id="right-container">
            
            <div class="ind">
            <h2><i class="fa fa-eye"></i>View Template</h2>
            </div>

            <div id="data">
              
              
              


            </div>
          </div>

          <div class="clearfix">
          </div>
          

          <div id="footer">
            <span id="data">

              <span id="options">
              
              <span id="cmdMenu_layout">
                <span><i class="fa fa-bars"></i><a href="#">&nbsp;Layout&nbsp;</a></span> 
                <span class="SubCmdMenu_layout"><i class="fa fa-refresh"></i><a class="handCursor" id="cmdReset"><i> Reset Layout</i></a> |</span>
                <span class="SubCmdMenu_layout"><i class="fa fa-expand"></i><a class="handCursor" id="cmdGoFull"><i> Full Screen Preview</a> </i> </span>
              </span>

                <span id="cmdMenu_project">
                  &nbsp;<span><i class="fa fa-folder-o"></i><a href="#">&nbsp;Project&nbsp;</a></span>
                  <!-- <span class="SubCmdMenu_project"><i class="fa fa-bar-chart-o"></i><a class="handCursor" id="cmdSetSeo"> <i>SEO Settings</i></a> | </span>
                  <span class="SubCmdMenu_project"><i class="fa fa-tint"></i><a class="handCursor" id="cmdSetTheme"> <i>Theme Settings</i></a> | </span> -->
                  <span class="SubCmdMenu_project"><i class="fa fa-cloud-download"></i> <a class="handCursor" id="cmdGoDl" href="#"> <i>Download</i> </a></span>
                </span>

              </span>

             <!--  <span id="console">
                <i class="fa fa-info-circle"></i> Console:
                <span id="console-text">
                   Idle
                </span>
              </span> -->

            </span>
          </div>

        </div>

  </body>


<!-- Mirrored from beaver.qwebdev.eu/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2020 10:48:42 GMT -->
</html>
