<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<link href="<?php echo base_url()?>js/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<style type="text/css">
    .col-sm-3{
    /*    height: 150px;
        background-color:#01549b;*/
}
/*.col-sm-9{
    height: 160px;
    background-color:#2aabd2;
    border: 1px solid yellow;
    opacity: 0.9;
}*/

 #components{
        min-height: 600px;
        margin-top: 5px;
      }
      #target{
        min-height: 80%;
        border: 1px solid #ccc;
        padding: 5px;
      }
      #target .component{
        border: 1px solid #fff;
      }
      #temp{
        width: 500px;
        background: white;
        border: 1px dotted #ccc;
        border-radius: 10px;
      }

      .popover-content form {
        margin: 0 auto;
        width: 213px;
      }
      .popover-content form .btn{
        margin-right: 10px
      }
      #source{
        min-height: 500px;
      }


 label.error{
    
    color: red;
     font-family: "Times New Roman", Times, serif;
     
    font-size: 1.0em;
   
}

.nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #2e353d;
    position: fixed;
    top: 0px;
    width: 19%;
    height: 100%;
    color: #e1ffff;
}
.nav-side-menu .brand {
    background-color: #f3f3f3;
    line-height: 50px;
    display: block;
    text-align: center;
    font-size: 14px;
}
.nav-side-menu .toggle-btn {
    display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
    /*    
      .collapsed{
         .arrow:before{
                   font-family: FontAwesome;
                   content: "\f053";
                   display: inline-block;
                   padding-left:10px;
                   padding-right: 10px;
                   vertical-align: middle;
                   float:right;
              }
       }
    */
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
    color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
    color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
    background-color: #181c20;
    border: none;
    line-height: 28px;
    border-bottom: 1px solid #23282e;
    margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
    background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
}
.nav-side-menu li {
    padding-left: 0px;
    border-left: 3px solid #2e353d;
    border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
    text-decoration: none;
    color: #e1ffff;
}
.nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
}
.nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
@media (max-width: 767px) {
    .nav-side-menu {
        position: relative;
        width: 100%;
        margin-bottom: 10px;
    }
    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10 !important;
        padding: 3px;
        background-color: #ffffff;
        color: #000;
        width: 40px;
        text-align: center;
    }
    .brand {
        text-align: left !important;
        font-size: 22px;
        padding-left: 20px;
        line-height: 50px !important;
    }
}
@media (min-width: 767px) {
    .nav-side-menu .menu-list .menu-content {
        display: block;
    }
}
body {
    margin: 0px;
    padding: 0px;
}

.wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }

</style>
<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
        <div  class="container-fluid" style="padding-left: 0px;">
            <div class="row">
                <div class="col-sm-3">
                    <div class="nav-side-menu">
                        <div class="brand"><img src="<?php echo base_url()?>assets/NectarSpot.png"></div>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li class="active">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/index">
                                         Dashboard
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/alllist">List</a>
                                </li>

                                 
                                 <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/empform">Create a Form</a>
                                </li>
                <li>
                                    <i class="fa fa-list" aria-hidden="true"></i> <a href="<?php echo base_url()?>Form/emailtmp">Email Template</a>
                                </li>
                                <!-- <ul class="sub-menu collapse" id="new">
                                    <li>New New 1</li>
                                </ul> -->
                            </ul>
                        </div>
                    </div>
                </div><br>
                <div class="col-sm-9 ">
                 
              
      <div class="row clearfix">
        <div class="col-md-6">
          <div class="clearfix">
            <h2>Create a Form</h2>
            <hr>
            <div id="build"  >
              
              <form id="target" class="form-horizontal" action="http://localhost/webform/test_api.php?action=insert" method="POST">
                <fieldset>
                  <div id="legend" class="component" rel="popover" title="Form Title" trigger="manual"
                    data-content=
                    "<form class='form' id='form_type' action=''   method=''>
                      <div class='form-group col-md-12'>
                        <label class='control-label'>Form Name</label> <input class='form-control'  type='text' name='text' id='text'>
                        <hr/>
                        <button type='submit' name='submit' class='btn btn-info'>Save</button>
                        <button class='btn btn-danger'>Cancel</button>
                      </div>
                    </form>" data-html="true"
                    >
                    <legend class="valtype" data-valtype="text">Form Name</legend>

                  </div>
                </fieldset>
              </form>

             <!--  <div id="site-navbar" style=""><a href="https://nectarspot.com/" target="_blank" title="" style="background:none;"><img src="https://nectarspot.com/images/nectar.webp" style="padding:0;margin:0;border:0; background-color: #002e5b; -webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;width:100px"></a></div> -->

             <div id="site-navbar" style="position: absolute; top: -4px; right: -3px; border: 0; z-index: 2000;padding:0;margin:0;"><a href="https://nectarspot.com/" target="_blank" title="" style="background:none;" title="NectarSpot" style="background:none;"><img src="http://aral.github.io/fork-me-on-github-retina-ribbons/right-white@2x.png" style="padding:0;margin:0;border:0; -webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;width:100px"></a></div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <h2>Drag & Drop Fields</h2>
            <hr>
          <div class="tabbable">
            <ul class="nav nav-tabs" id="navtab">
              <li class="active"><a href="#1" data-toggle="tab">Input</a></li>
              <li class><a href="#2" data-toggle="tab">Select</a></li>
              <li class><a href="#3" data-toggle="tab">Checkbox / Radio</a></li>
              <li class><a href="#4" data-toggle="tab">Buttons</a></li>
              <li class><a id="sourcetab" href="#5" data-toggle="tab">View Html</a></li>
            </ul>
            <form class="form-horizontal" id="components">
              <fieldset>
                <div class="tab-content">

                  <div class="tab-pane active" id="1">

                    <div id="legend" class="form-group component" data-type="text" rel="popover" title="Text Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Database Field Name</label> <input type='text' name='db_name' id='db_name' class='form-control'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Text input-->
                      <label class="col-md-4 control-label valtype" for="input01" data-valtype='label'>Text input</label>
                      <div class="col-md-4">
                        <input type="text" placeholder="placeholder" name="db_name"  class="form-control input-md valtype" data-valtype="placeholder" data-valtype="db_name">
                        
                      </div>
                    </div>


                    <div  id="legend" class="form-group component" data-type="search" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Help Text</label> <input type='text' name='help' id='help' class='form-control'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Search input-->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Search input</label>
                      <div class="col-md-4">
                        <input type="text" placeholder="placeholder" class="form-control input-md search-query valtype" data-valtype="placeholder">
                       
                      </div>

                    </div>


                    <div  id="legend" class="form-group component" data-type="prep-text" rel="popover" title="Prepended Text Input" trigger="manual"

                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Prepend</label> <input type='text' name='prepend' id='prepend' class='form-control'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Help Text</label> <input type='text' name='help' id='help' class='form-control'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Prepended text-->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Prepended text</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon valtype" data-valtype="prepend"></span>
                          <input class="form-control valtype" placeholder="placeholder" id="prependedInput" type="text" data-valtype="placeholder">
                        </div>
                        
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" data-type="app-text" rel="popover" title="Appended Text Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Appepend</label> <input type='text' name='append' id='append' class='form-control'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Help Text</label> <input type='text' name='help' id='help' class='form-control'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Appended input-->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Appended text</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input name="appendedtext" class="form-control valtype" data-valtype="placeholder" placeholder="placeholder" type="text">
                          <span class="input-group-addon valtype" data-valtype="append"></span>
                        </div>
                        
                      </div>


                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Help Text</label> <input type='text' name='help' id='help' class='form-control'>
                          <label class='checkbox'><input type='checkbox' class='input-inline' name='checked' id='checkbox'>Checked</label>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Prepended checkbox -->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Prepended checkbox</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <input type="checkbox" class="valtype" data-valtype="checkbox">
                          </span>
                          <input class="form-control valtype" placeholder="placeholder" type="text" data-valtype="placeholder">
                        </div>
                        
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Placeholder</label> <input type='text' name='placeholder' id='placeholder' class='form-control'>
                          <label class='control-label'>Help Text</label> <input type='text' name='help' id='help' class='form-control'>
                          <label class='checkbox'><input type='checkbox' class='input-inline' name='checked' id='checkbox'>Checked</label>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Appended checkbox -->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Append checkbox</label>
                      <div class="col-md-4">
                        <div class="input-group">
                          <input class="form-control valtype" placeholder="placeholder" type="text" data-valtype="placeholder">
                          <span class="input-group-addon">
                            <input type="checkbox" class="valtype" data-valtype="checkbox">
                          </span>
                        </div>
                        
                      </div>
                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true" 
                      >

                      <!-- Textarea -->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Textarea</label>
                      <div class="col-md-4">
                        <div class="textarea">
                              <textarea class="form-control valtype" data-valtype="checkbox" /> </textarea>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="2">

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Options: </label>
                          <textarea class='form-control' style='min-height: 200px' id='option'> </textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >

                      <!-- Select Basic -->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Select - Basic</label>
                      <div class="col-md-4">
                        <select class="form-control input-md valtype" data-valtype="option">
                          <option>Enter</option>
                          <option>Your</option>
                          <option>Options</option>
                          <option>Here!</option>
                        </select>
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Options: </label>
                          <textarea class='form-control' style='min-height: 200px' id='option'></textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >

                      <!-- Select Multiple -->
                      <label class="col-md-4 control-label valtype" data-valtype="label">Select - Multiple</label>
                      <div class="col-md-4">
                        <select class="form-control input-md valtype" multiple="multiple" data-valtype="option">
                          <option>Enter</option>
                          <option>Your</option>
                          <option>Options</option>
                          <option>Here!</option>
                        </select>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="3">

                    <div  id="legend" class="form-group component" rel="popover" title="Multiple Checkboxes" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Options: </label>
                          <textarea class='form-control' style='min-height: 200px' id='checkboxes'> </textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">Checkboxes</label>
                      <div class="col-md-4 valtype" data-valtype="checkboxes">

                        <!-- Multiple Checkboxes -->
                        <label class="checkbox">
                          <input type="checkbox" value="Option one">
                          Option one
                        </label>
                        <label class="checkbox">
                          <input type="checkbox" value="Option two">
                          Option two
                        </label>
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Multiple Radios" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Group Name Attribute</label> <input class='form-control' type='text' name='name' id='name'>
                          <label class='control-label'>Options: </label>
                          <textarea class='form-control' style='min-height: 200px' id='radios'></textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">Radio buttons</label>
                      <div class="col-md-4 valtype" data-valtype="radios">

                        <!-- Multiple Radios -->
                        <label class="radio">
                          <input type="radio" value="Option one" name="group" checked="checked">
                          Option one
                        </label>
                        <label class="radio">
                          <input type="radio" value="Option two" name="group">
                          Option two
                        </label>
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Inline Checkboxes" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <textarea class='form-control' style='min-height: 200px' id='inline-checkboxes'></textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">Inline Checkboxes</label>

                      <!-- Multiple Checkboxes -->
                      <div class="col-md-4 valtype" data-valtype="inline-checkboxes">
                        <label class="checkbox inline">
                          <input type="checkbox" value="1"> 1
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" value="2"> 2
                        </label>
                        <label class="checkbox inline">
                          <input type="checkbox" value="3"> 3
                        </label>
                      </div>

                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Inline radioes" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Group Name Attribute</label> <input class='form-control' type='text' name='name' id='name'>
                          <textarea class='form-control' style='min-height: 200px' id='inline-radios'></textarea>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">Inline radios</label>
                      <div class="col-md-4 valtype" data-valtype="inline-radios">

                        <!-- Inline Radios -->
                        <label class="radio inline">
                          <input type="radio" value="1" checked="checked" name="group">
                          1
                        </label>
                        <label class="radio inline">
                          <input type="radio" value="2" name="group">
                          2
                        </label>
                        <label class="radio inline">
                          <input type="radio" value="3">
                          3
                        </label>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane" id="4">
                    <div  id="legend" class="form-group component" rel="popover" title="File Upload" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">File Button</label>

                      <!-- File Upload -->
                      <div class="col-md-4">
                        <input class="input-file" id="fileInput" type="file">
                      </div>
                    </div>

                    <div  id="legend" class="form-group component" rel="popover" title="Search Input" trigger="manual"
                      data-content="
                      <form class='form'>
                        <div class='form-group col-md-12'>
                          <label class='control-label'>Label Text</label> <input class='form-control' type='text' name='label' id='label'>
                          <label class='control-label'>Button Text</label> <input class='form-control' type='text' name='label' id='button'>
                          <label class='control-label' id=''>Type: </label>
                          <select class='form-control input-md' id='color'>
                            <option id='btn-default'>Default</option>
                            <option id='btn-primary'>Primary</option>
                            <option id='btn-info'>Info</option>
                            <option id='btn-success'>Success</option>
                            <option id='btn-warning'>Warning</option>
                            <option id='btn-danger'>Danger</option>
                            <option id='btn-inverse'>Inverse</option>
                          </select>
                          <hr/>
                          <button class='btn btn-info'>Save</button><button class='btn btn-danger'>Cancel</button>
                        </div>
                      </form>" data-html="true"
                      >
                      <label class="col-md-4 control-label valtype" data-valtype="label">Button</label>

                      <!-- Button -->
                      <div class="col-md-4 valtype"  data-valtype="button">
                        <button class='btn btn-success'>Button</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="5">

                    

                    <textarea id="source" class="col-md-12">
                      
                    </textarea>

                  </div>


                </fieldset>



              </form>
            </div>
          </div> <!-- row -->
      <div class="row clearfix">

       
       
      </div>
    
    
    <script src="<?php echo base_url()?>js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/fb.js"></script>
       
    </div>  
     </div>
            
        </div>

        <!-- <script type="text/javascript">
          
$(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div><label>New Field </label>  <input type="text" class="form-control" name="newfield"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});

        </script> -->

<script type="text/javascript">
  
   $("form#addform").submit(function(e) {
    e.preventDefault();      
    var formData = new FormData(this);
 var IsValid=$("#addform").valid();
  if(IsValid){
    $.ajax({
        url: "<?php echo base_url();?>Form/addformdata",
        type: 'POST',
        data: formData,
        success: function (data) {
          //alert(data);
           if ($.trim(data)=="success") {
               swal({
                title: "Congratulations!",
                text: "Data added successfully",
                type: "success",
                confirmButtonText: "Ok"
            }, function() {
                 window.location = "<?php echo base_url();?>Form/empform";
            }, 1000);
    
           $("#addform")[0].reset();
         }
               
        },
        cache: false,
        contentType: false,
        processData: false
    });
  }

  });


   $("form#form_type").submit(function(e) {
    e.preventDefault();      
    var formData = new FormData(this);
 var IsValid=$("#form_type").valid();
  if(IsValid){
    $.ajax({
        url: "<?php echo base_url();?>Form/formname",
        type: 'POST',
        data: formData,
        success: function (data) {
          //alert(data);
           if ($.trim(data)=="success") {
               swal({
                title: "Congratulations!",
                text: "Data added successfully",
                type: "success",
                confirmButtonText: "Ok"
            }, function() {
                 window.location = "<?php echo base_url();?>Form/empform";
            }, 1000);
    
           $("#form_type")[0].reset();
         }
               
        },
        cache: false,
        contentType: false,
        processData: false
    });
  }

  });
</script>
