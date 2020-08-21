<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

                              

                               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style type="text/css">
body{background: #EFF1F3 !important;}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

/* General Style */
/**/

/* General button style (reset) */


/* Special trash effect */
/**/


ul.chec-radio {
    margin: 15px;
}
ul.chec-radio li.pz {
    display: inline;
}
.chec-radio label.radio-inline input[type="checkbox"] {
    display: none;
}
.chec-radio label.radio-inline input[type="checkbox"]:checked+div {
    color: #fff;
    background-color: #000;
}
.chec-radio .radio-inline .clab {
    cursor: pointer;
    background: #e7e7e7;
    padding: 7px 20px;
    text-align: center;
    text-transform: uppercase;
    color: #333;
    position: relative;
    height: 34px;
    float: left;
    margin: 0;
    margin-bottom: 5px;
}
.chec-radio label.radio-inline input[type="checkbox"]:checked+div:before {
    content: "\e013";
    margin-right: 5px;
    font-family: 'Glyphicons Halflings';
}
.chec-radio label.radio-inline input[type="radio"] {
    display: none;
}
.chec-radio label.radio-inline input[type="radio"]:checked+div {
    color: #fff;
    background-color: #000;
}
.chec-radio label.radio-inline input[type="radio"]:checked+div:before {
    content: "\e013";
    margin-right: 5px;
    font-family: 'Glyphicons Halflings';
}



.inputGroup {
  background-color: #fff;
  display: block;
  margin: 10px 0;
  position: relative;
}
.inputGroup label {
  padding: 12px 30px;
  width: 100%;
  display: block;
  text-align: left;
  color: #3C454C;
  cursor: pointer;
  position: relative;
  z-index: 2;
  -webkit-transition: color 200ms ease-in;
  transition: color 200ms ease-in;
  overflow: hidden;
}
.inputGroup label:before {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  content: '';
  background-color: #5562eb;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
          transform: translate(-50%, -50%) scale3d(1, 1, 1);
  -webkit-transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
  transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
  opacity: 0;
  z-index: -1;
}
.inputGroup label:after {
  width: 32px;
  height: 32px;
  content: '';
  border: 2px solid #D1D7DC;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
  background-repeat: no-repeat;
  background-position: 2px 3px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  right: 71%;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  cursor: pointer;
  -webkit-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
.inputGroup input:checked ~ label {
  color: #fff;
}
.inputGroup input:checked ~ label:before {
  -webkit-transform: translate(-50%, -50%) scale3d(56, 56, 1);
          transform: translate(-50%, -50%) scale3d(56, 56, 1);
  opacity: 1;
}
.inputGroup input:checked ~ label:after {
  background-color: #54E0C7;
  border-color: #54E0C7;
}
.inputGroup input {
  width: 32px;
  height: 32px;
  -webkit-box-ordinal-group: 2;
          order: 1;
  z-index: 2;
  position: absolute;
  right: 30px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  cursor: pointer;
  visibility: hidden;
}

.form {
  padding: 0 16px;
  max-width: 550px;
  margin: 50px auto;
  font-size: 18px;
  font-weight: 600;
  line-height: 36px;
}




</style>

<script type="text/javascript">
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>

<script type="text/javascript">
    
     jQuery(document).ready(function(){
  $("#slider").slider({
      value:100000,
      min:100000,
      max:2000000,
      step:10,
      slide:function(event, ui){
        $("#amount").val(" "+ui.value)
      }
  });
  $("#amount").val(""+$("#slider").slider("value"));


   $("#slider1").slider({
      value:2.0,
      min:1.5,
      max:2.5,
      step:0.5,
      slide:function(event, ui){
        $("#amount1").val(""+ui.value)
      }
  });
  $("#amount1").val(""+$("#slider1").slider("value"));


  $("#slider2").slider({
      value:650,
      min:500,
      max:800,
      step:1,
      slide:function(event, ui){
        $("#amount2").val(""+ui.value)
      }
  });
  $("#amount2").val(""+$("#slider2").slider("value"));

  $("#slider3").slider({
      value:500000,
      min:100000,
      max:1000000,
      step:1,
      slide:function(event, ui){
        $("#amount3").val(""+ui.value)
      }
  });
  $("#amount3").val(""+$("#slider3").slider("value"));
  });

</script>
<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p class="mr-5"></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-12" type="button" class="btn btn-default btn-circle" disabled="disabled">12</a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-13" type="button" class="btn btn-default btn-circle" disabled="disabled">13</a>
                <p></p>
            </div>
        </div>
    </div>
    <div class="">
    <form role="form"  method="post" enctype="multipart/form-data" >
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" style="text-align: center;">
                <div class="form-group">
                      <h3 class="fs-title">Do you qualify for lower payments?</h3> 

                                    <p>Find out in 60 seconds (it's free)!</p>

                                    
                <h3 class="fs-title">   Have you or your spouse served in the Military?</h3>

<!--<div class="inputGroup">-->
<!--    <input id="radio1" name="radio" type="radio"/>-->
<!--    <label for="radio1">Yes</label>-->
<!--  </div>-->


                <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="lowerpayment" class=" button-3 button-3a pro-chx nextBtn" value="Yes">
            <div class="clab">Yes</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="lowerpayment" class=" button-3 button-3a pro-chx nextBtn" value="No" >
            <div class="clab">No</div>
        </label>
    </li><br>
    
</ul>


<!-- <button type="button" name="yes" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Yes</button><br>
<button type="button" name="no" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> No</button> -->
                 
                </div>
                
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" >
                <h2>What is your current interest rate?</h2>

                 <label for="amount">$</label>
              <input type="text" id="amount" name="interestrate" class="form-control" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider"></div> <br>

              <span><b>$100,000</b></span>
              <span style="float: right;"><b>$2000,000</b></span> <br>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" >
                 <h2>This is a range value</h2>

                 <label for="amount1"></label>
              <input type="text" id="amount1" name="range_value" class="form-control" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider1"></div> <br>
              <span><b>1.5%</b></span>
              <span style="float: right;"><b>2.5%</b></span> <br>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

         <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" >
                <h3 class="fs-title">Where are you working?</h3>

                <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="office">
            <div class="clab">Office</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="remote" >
            <div class="clab">Remote</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="Co Working" >
            <div class="clab">Co-Working</div>
        </label>
    </li><br>
    
</ul> 

                                   

<!-- <button type="button" name="office" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Office</button><br>
<button type="button" name="remote" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Remote</button><br>
<button type="button" name="coworking" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Co-Working</button> -->
                
            </div>
        </div>

       


        
        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="fs-title">Who should we send the results to?</h3> 
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                <div class="form-group">

                    

                    <label class="control-label"> Name</label>
                    <input maxlength="200" type="text" name="name"  class="form-control" placeholder="Enter Company Name" />
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">

                    <label class="control-label">Email</label>
                    <input maxlength="200" type="text" name="email"  class="form-control" placeholder="Enter Company Address" />
                </div>
            </div>
               <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
            </div>
        </div>

         <div class="panel panel-primary setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="fs-title">General Information</h3> 
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                <div class="form-group">

                    <label class="control-label">First Name</label>
                    <input maxlength="200" type="text" name="firstname"  class="form-control" placeholder="Enter Company Name" />
                </div>

                <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input maxlength="200" type="text" name="mail"  class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">

                    <label class="control-label">State</label>
                    <input maxlength="200" type="text" name="state"  class="form-control" placeholder="Enter Company Name" />
                </div>

                <div class="form-group">

                    <label class="control-label">Zipcode</label>
                    <input maxlength="200" type="text" name="zipcode"  class="form-control" placeholder="Enter Company Name" />
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">

                    <label class="control-label">Last Name </label>
                    <input maxlength="200" type="text" name="lastname"  class="form-control" placeholder="Enter Company Address" />
                </div>

                <div class="form-group">

                    <label class="control-label">City</label>
                    <input maxlength="200" type="text"  name="city"  class="form-control" placeholder="Enter Company Name" />
                </div>

                <div class="form-group">

                    <label class="control-label">Street</label>
                    <input maxlength="200" type="text" name="street" class="form-control" placeholder="Enter Company Name" />
                </div>

                <div class="form-group">

                    <label class="control-label">Date of birth</label>
                    <input maxlength="200" type="text" name="dob"  class="form-control" placeholder="YYYY-MM-DD" />
                </div>
            </div>
                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
            </div>
        </div>


        <div class="panel panel-primary setup-content" id="step-7">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">Credit Score</h3> 

                <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="excellent">
            <div class="clab">Excellent</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="good" >
            <div class="clab">Good</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="fair" >
            <div class="clab">Fair</div>
        </label>
    </li><br>

    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="poor" >
            <div class="clab">Poor</div>
        </label>
    </li><br>
    
</ul>

                                   


                
            </div>
        </div>


        <div class="panel panel-primary setup-content" id="step-8">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">Credit Score - 2</h3> 

                                   

<label for="amount2">Select Price:</label>
              <input type="text" id="amount2" name="credit_score2" class="form-control" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider2"></div> <br>

              <span><b>500</b></span>
              <span style="float: right;"><b>800</b></span> <br>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                
            </div>
        </div>

<div class="panel panel-primary setup-content" id="step-9">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">Are you currently employed?</h3> 

                <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="fulltime">
            <div class="clab">Full Time</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="parttime" >
            <div class="clab">Part Time</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="selfemployed" >
            <div class="clab">Self Employed</div>
        </label>
    </li><br>

    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-co" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="retired" >
            <div class="clab">Retired</div>
        </label>
    </li><br>

    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="notenployed" >
            <div class="clab">Not Employed</div>
        </label>
    </li><br>
    
</ul>

                                   



                
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-10">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">How often do you get paid?</h3>

                <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="weekly">
            <div class="clab">Weekly</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="biweekly" >
            <div class="clab">Biweekly</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="twicemonthly" >
            <div class="clab">Twice Monthly</div>
        </label>
    </li><br>

    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="monthly" >
            <div class="clab">Monthly</div>
        </label>
    </li><br>

    
    
</ul> 

                                   



                
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-11">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">What's your approx. annual income?</h3> 

                                   

<label for="amount3">Select Price:</label>
              <input type="text" id="amount3" name="annual_income" class="form-control" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider3"></div> <br>

              <span><b>10000</b></span>
              <span style="float: right;"><b>1000000</b></span> <br>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                
            </div>
        </div>


        <div class="panel panel-primary setup-content" id="step-12">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">Do you consent to FCRA?</h3> 

                 <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="fcra" class=" button-3 button-3a pro-chx nextBtn" value="yes">
            <div class="clab">Yes</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="fcra" class=" button-3 button-3a pro-chx nextBtn" value="no" >
            <div class="clab">No</div>
        </label>
    </li>
</ul>

                                   




                
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-13">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title">Do you consent to TCPA?</h3> 

            <ul class="chec-radio">
    <li class="pz">
        <label class="radio-inline">
            <input type="radio"  id="pro-chx-residential" name="tcpa" class=" button-3 button-3a pro-chx nextBtn" value="yes">
            <div class="clab">Yes</div>
        </label>
    </li><br>
    <li class="pz">
        <label class="radio-inline">
            <input type="radio" id="pro-chx-commercial" name="tcpa" class=" button-3 button-3a pro-chx nextBtn" value="no" >
            <div class="clab">No</div>
        </label>
    </li>
</ul>     

                                   

<button class="btn btn-success " type="submit">Finish!</button>


                
            </div>
        </div>

    </form>
</div>


<?php
  
if( $_POST){


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$state = $_POST["state"];
$lowerpayment = $_POST["lowerpayment"];
$interestrate = $_POST["interestrate"];

$zipcode = $_POST["zipcode"];
$city = $_POST["city"];
$street = $_POST["street"];
$dob = $_POST["dob"];
$range_value = $_POST["range_value"];
$working_status = $_POST["working_status"];
$credit_score = $_POST["credit_score"];
$credit_score2 = $_POST["credit_score2"];
$employee_status = $_POST["employee_status"];
$paid_status = $_POST["paid_status"];
$annual_income = $_POST["annual_income"];
$fcra = $_POST["fcra"];
$tcpa = $_POST["tcpa"];
// $interestrate = $_POST["interestrate"];
// $interestrate = $_POST["interestrate"];

    $email = $_POST["email"];
$to = "nectarspot@gmail.com";
$subject = "Re:Empoyee Details ";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

First Name: ".$firstname."\n Last Name:".$lastname."\n State :".$state."\n Lower Payment:".$lowerpayment."\n Interestrate:".$interestrate."\n Zipcode:".$zipcode."\n City:".city."\n Street:".$street."\n Date Of Birth:".$dob."\n Range Value:".$range_value."\n Working Status:".$working_status."\n Credit Score:".$credit_score."\n Credit Score2:".$credit_score2."\n Employee Status:".$employee_status."\n Paid Status:".$paid_status."\n Annual Income:".$annual_income."\n FCRA:".$fcra."\n TCPA:".$tcpa."\n
 Email Address: $email";

mail($to,$subject,$message,$headers);

$servername = "localhost";
$username = "marketf7_forms";
$password = "Forms@123";
$dbname = "marketf7_9b5";

// Create connection
 $link = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//Escape user inputs for security

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$mail = mysqli_real_escape_string($link, $_POST['mail']);
$state = mysqli_real_escape_string($link, $_POST['state']);
$zipcode = mysqli_real_escape_string($link, $_POST['zipcode']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$city = mysqli_real_escape_string($link, $_POST['city']);
$street = mysqli_real_escape_string($link, $_POST['street']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
 $lowerpayment = mysqli_real_escape_string($link, $_POST['lowerpayment']);
 
 $interestrate = mysqli_real_escape_string($link, $_POST['interestrate']);
 
 
 $range_value = mysqli_real_escape_string($link, $_POST['range_value']);
 $working_status = mysqli_real_escape_string($link, $_POST['working_status']);
 $credit_score = mysqli_real_escape_string($link, $_POST['credit_score']);
 $credit_score2 = mysqli_real_escape_string($link, $_POST['credit_score2']);
 $employee_status = mysqli_real_escape_string($link, $_POST['employee_status']);
 
 $paid_status = mysqli_real_escape_string($link, $_POST['paid_status']);
 $annual_income = mysqli_real_escape_string($link, $_POST['annual_income']);
 $fcra = mysqli_real_escape_string($link, $_POST['fcra']);
 $tcpa = mysqli_real_escape_string($link, $_POST['tcpa']);
 

 
// Attempt insert query execution
$sql = "INSERT INTO formdata (name,email, firstname, mail,state,zipcode,lastname, city,street,dob,lowerpayment,interestrate,range_value,working_status,credit_score,credit_score2,employee_status,paid_status,annual_income,fcra,tcpa)
 VALUES ('$name','$email', '$firstname', '$mail','$state', '$zipcode', '$lastname','$city','$street','$dob', '$lowerpayment', '$interestrate','$range_value', '$working_status','$credit_score', '$credit_score2', '$employee_status', '$paid_status', '$annual_income', '$fcra', '$tcpa' )";
if(mysqli_query($link, $sql)){
//echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}










?>
</div>