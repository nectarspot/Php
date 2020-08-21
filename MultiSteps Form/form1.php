<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

                              
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
</head>

<style type="text/css">
body{     background: #EFF1F3 !important;
    font-family: 'Source Sans Pro', sans-serif;
        overflow-x: hidden;
}
/*.setup-content{min-height: calc(100vh - 211px - 58px);*/
.section {min-height: calc(100vh - 105px - 100px);}
.shadow-fix {
    box-shadow: 0px 10px 20px #DBE2EA;
}


.radio-inline{width: 400px;
    background-color: #fff;
    border-radius: 10px;
    background-clip: border-box;
    height: 58px;}
.col-lg-12{display: flex;}
.img-box img{height: 30px;}
.main-box{padding: 14px 10px;}
label{margin-bottom: 0;}
.yn-inline{cursor: pointer; color: #333;}
.yn-inline:hover{    background: #002e5b;
    color: #fff;
    border: 0 !important;
    box-shadow: 0px 10px 20px #002e5b40;
}
.mt-5{
    margin-top: 3rem !important;
}
.mb-5{
    margin-bottom: 3rem !important;
}
.sub-f1{font-weight: bold;
    font-size: 32px;
    line-height: 130%;
    color: #333335;}
.sub-f{font-weight: bold;
    font-size: 32px;
    line-height: 130%;
    color: #333335;}
.small-f{font-weight: normal;
    font-size: 20px;
    line-height: 140%;
    color: #818181;}
.nav-bar{position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    padding-top: 17px;
    /*background-color: #002e5b;*/
    
}
.main-logo{margin: 0 auto;}
.logo {
    max-width: 100%
    max-height: 65px;
}
.footer{
    background-color: #333333;
    color: #9B9B9B;
    font-size: 10px;
    letter-spacing: -0.02px;
    line-height: 13px;
    padding: 100px 0;

}
.step2-sec{margin: 0 auto;
    display: table;
    width: 500px;}
.step2-sec .sep2-body{
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
}
.fix-price{border: none; background-color: #fff !important;}
.fix-price:focus{border-color: #fff !important; box-shadow: none;}
.ui-slider-horizontal{height: 5px;
    border-radius: 5px;
    background: #ddd;
    outline: none;
    padding: 0;
    margin: 0;}
.ui-slider .ui-slider-handle{border: 8px solid #002e5b;
    padding: 7px;
    border-radius: 50px;
    top: -0.9em;
        outline: none; 
}
.label-lighter {
    color: #9B9B9B;
}

.step2-head{margin-bottom: 2em;
    margin-top: 1em;
    font-weight: bold;
    color: #333335;
    font-size: 32px;
    text-align: center;}
.step2-but{box-shadow: 0px 10px 20px #002e5b20;
    background-color: #002e5b;
    width: 500px;
    display: block;
    padding: 18px 28px;
    border-radius: 10px;
    margin: 30px 302px auto;
    text-transform: uppercase;
    border: none;
    font-family: 'Roboto-Bold', sans-serif;
    letter-spacing: 2px;
        margin: 40px auto;
}
.btn-primary:hover {
    color: #fff;
    background-color: #002e5b;
    border-color: #002e5b;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
    color: #fff;
     background-color: #002e5b;
    border-color: #002e5b;
}
.mb10{margin-bottom: 10px;}
.grey-dot {
    width: 25px;
    height: 25px;
    background: #EFF1F3;
    border-radius: 30px;
}
.step4-sec{margin: 0 auto; display: table;}
.step4-img-box{display: flex; padding: 3px 0 3px 10px;}
.yn-inline:hover .grey-dot {
    background: #fff;
    position: relative;
}
.yn-inline:hover .grey-dot:after {
    width: 15px;
    height: 15px;
    background: #002e5b;
    margin-top: 5px;
    margin-left: 5px;
    border-radius: 10px;
    content: "";
    position: absolute;
}
.pad-0{padding: 0;}
.step-head {
    margin-bottom: 1em;
    margin-top: 1em;
    font-weight: bold;
    color: #333335;
    font-size: 32px;
    text-align: center;
}
.finish-but {
    box-shadow: 0px 10px 20px #002e5b20;
    background-color: #28a745;
    width: 400px;
    display: block;
    padding: 18px 28px;
    border-radius: 10px;
    margin: 30px auto;
    text-transform: uppercase;
    border: none;
    font-family: 'Roboto-Bold', sans-serif;
    letter-spacing: 2px;
}
.step5-body{width: 65%;
    background-color: #fff;
    border-radius: 10px;
    padding: 3em 4em 1em 4em;
    margin: 0 auto;}
.step5-form{
    height: calc(2.875rem + 2px);
    border-radius: 10px;
    background: #FFFFFF;
    border: 2px solid rgba(129,129,129,0.2);
}
.step5-form:focus {
    color: #495057;
    background-color: #fff;
    border-color: rgba(129,129,129,0.2);
    outline: 0;
    box-shadow: none;
}
.step5-label{margin-bottom: 10px;
    color: #818181;
    font-weight: 600;
    font-size: 16px;}
.step5-but{box-shadow: 0px 10px 20px #002e5b20;
    background-color: #002e5b;
    width: 300px;
    display: block;
    padding: 15px 28px;
    border-radius: 10px;
    margin: 30px auto;
    text-transform: uppercase;
    border: none;
    font-family: 'Roboto-Bold', sans-serif;
    letter-spacing: 2px;}
.ui-state-active, .ui-widget-content .ui-state-active{background: #fde428;}
.sel-sec{border-radius: 10px;}





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
    padding-top:2px;
}
.btn-circle {
    width: 100px;
    height: 21px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.btn-success{
    
    color: #fff;
    background-color: #002e5b;
    border-color: #002e5b;
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
    font-weight: 600;
    cursor: pointer;
    
    padding: 3px 20px;
    text-align: center;
    text-transform: uppercase;
    
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
/*.chec-radio label.radio-inline input[type="radio"]:checked+div {*/
/*    color: #fff;*/
/*    background-color: #000;*/
/*}*/
/*.chec-radio label.radio-inline input[type="radio"]:checked+div:before {*/
/*    content: "\e013";*/
/*    margin-right: 5px;*/
/*    font-family: 'Glyphicons Halflings';*/
/*}*/



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
.sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
        padding-right: 15px;
    padding-left: 15px;}

@media(max-width: 1300px){.btn-circle {
    width: 70px;}
}
@media(max-width: 1000px){
.sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.radio-inline {
    width: 600px;
        height: 91px;
}
.main-box {
    padding: 30px 1px;
}
.finish-but {

    width: 600px;}
    .step5-body {
    width: 100%;}
.step2-but {
    width: 600px;}
    .step2-sec {

    width: 600px;}
.step-head {

    font-size: 55px;}
.step2-head{
    font-size: 55px;}
.chec-radio .radio-inline .clab {
    font-size: 25px;
    padding: 0px 20px;}
.img-box img {
    height: 45px;
}
.sub-f1{
    font-size: 55px;
}
.sub-f{
    font-size: 55px;
}
.small-f{
    font-size: 35px;
 }
 .main-logo{width: 35%;}
 .navbar-brand{display: block;}
 .logo{width: 100%;}
 .stepwizard{display: none;}
 .nav-bar{border-bottom: 2px solid #002e5b;}
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
        $("#amount").val("$"+ui.value)
      }
  });
  $("#amount").val(""+$("#slider").slider("value"));


   $("#slider1").slider({
      value:2.0,
      min:1.5,
      max:2.5,
      step:0.5,
      slide:function(event, ui){
        $("#amount1").val(""+ui.value+"%")
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


<script>
function myFunction() {
  var inpObj = document.getElementById("name");
  var inpObj1 = document.getElementById("email");


  if (!inpObj.checkValidity()) {
    document.getElementById("demo").innerHTML = " Please Enter Name";
  } else {
    document.getElementById("demo").innerHTML = "Input OK";
  } 

  if (!inpObj1.checkValidity()) {
    document.getElementById("demo1").innerHTML = "Please Enter Email";
  } else {
    document.getElementById("demo1").innerHTML = "Input OK";
  } 
} 

function myFunction1() {
  var inpObj2 = document.getElementById("firstname");
  var inpObj3 = document.getElementById("mail");
  var inpObj4 = document.getElementById("state");
  var inpObj5 = document.getElementById("zipcode");
  var inpObj6 = document.getElementById("lastname");
  var inpObj7 = document.getElementById("city");
  var inpObj8 = document.getElementById("street");
  var inpObj9 = document.getElementById("dob");
  

  if (!inpObj2.checkValidity()) {
    document.getElementById("demo2").innerHTML = "Please Enter First Nname";
  } else {
    document.getElementById("dem02").innerHTML = "Input OK";
  } 

  if (!inpObj3.checkValidity()) {
    document.getElementById("demo3").innerHTML = "Please Enter Mail Id";
  } else {
    document.getElementById("demo3").innerHTML = "Input OK";
  } 

   if (!inpObj4.checkValidity()) {
    document.getElementById("demo4").innerHTML = "Please Enter State";
  } else {
    document.getElementById("demo4").innerHTML = "Input OK";
  } 

   if (!inpObj5.checkValidity()) {
    document.getElementById("demo5").innerHTML = "Please Enter Zipcode";
  } else {
    document.getElementById("demo5").innerHTML = "Input OK";
  } 
   if (!inpObj6.checkValidity()) {
    document.getElementById("demo6").innerHTML = "Please Enter Last Name";
  } else {
    document.getElementById("demo6").innerHTML = "Input OK";
  } 
   if (!inpObj7.checkValidity()) {
    document.getElementById("demo7").innerHTML = "Please Enter City";
  } else {
    document.getElementById("demo7").innerHTML = "Input OK";
  } 
   if (!inpObj8.checkValidity()) {
    document.getElementById("demo8").innerHTML = "Please Enter Street";
  } else {
    document.getElementById("demo8").innerHTML = "Input OK";
  } 
   if (!inpObj9.checkValidity()) {
    document.getElementById("demo9").innerHTML = "Please Enter Date Of Birth";
  } else {
    document.getElementById("demo9").innerHTML = "Input OK";
  } 
} 


</script>
<body>
<div class="nav-bar">
    <div class="main-logo">
    <a class="navbar-brand p-0 mx-auto" href="#"><img class="logo" alt="Brand" src="https://nectarspot.com/images/new-logo.png">
</a>
    </div>
</div>
<div class="section">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle"></a>
                <p class="mr-5"></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
             <div class="stepwizard-step col-xs-3"> 
                <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-12" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-13" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                <p></p>
            </div>
        </div>
    </div>
    
    
     <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        // unset($_SESSION['success_message']);
                    }
                    ?>
    <div class="container">
    <form role="form"  method="post" action="save.php" enctype="multipart/form-data" >
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" style="text-align: center;">
                <div class="form-group">
                      <h3 class="fs-title mt-5 sub-f">Do you qualify for lower payments?</h3> 

                                    <p class=small-f>Find out in 60 seconds (it's free)!</p>

                                    
                <h3 class="fs-title mb-5 mt-5 sub-f1">Have you or your spouse served in the Military?</h3>

<!--<div class="inputGroup">-->
<!--    <input id="radio1" name="radio" type="radio"/>-->
<!--    <label for="radio1">Yes</label>-->
<!--  </div>-->


                <ul class="chec-radio">
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio"  id="pro-chx-residential" name="lowerpayment" class=" button-3 button-3a pro-chx nextBtn" value="Yes">
            

                <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYm89IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8ee7ab631b2cb85e6e2ab795694e288084c04f3f/check%20yes%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">Yes</div>
                  </div> 
                </div>
                
          
            
            
            
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio" id="pro-chx-commercial" name="lowerpayment" class=" button-3 button-3a pro-chx nextBtn" value="No" >
           
            <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYnM9IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--43adb00fdc62d4e73e664a52ba002b5e1a7b5487/check%20no%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">No</div>
                  </div> 
                </div>
        </label>
        </div>
    </li><br>
    
</ul>


<!-- <button type="button" name="yes" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Yes</button><br>
<button type="button" name="no" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> No</button> -->
                 
                </div>
                
            </div>
        </div>
        
        <div class="panel panel-primary setup-content ht-50" id="step-2">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
            <h2 class="step2-head">What is your current interest rate?</h2>
            <div class="step2-sec">
                <div class="shadow-fix sep2-body">
                 <label for="amount"></label>
              <input type="text" id="amount" name="interestrate" class="form-control fix-price" value="$" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider"></div> <br>

              <span class="label-lighter"><b>$100,000</b></span>
              <span style="float: right;" class="label-lighter"><b>$2000,000</b></span> <br>
              </div>
              </div>
                <button class="btn btn-primary nextBtn step2-but" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content ht-50" id="step-3">
            <div class="panel-heading">
                 
          </div>
            <div class="panel-body" >
                 <h2 class="step2-head">This is a range value</h2>
            <div class="step2-sec">
                <div class="shadow-fix sep2-body">
                 <label for="amount1"></label>
              <input type="text" id="amount1" name="range_value" class="form-control fix-price" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider1" class="mb10"></div> 
              <span class="label-lighter"><b>1.5%</b></span>
              <span class="label-lighter" style="float: right;"><b>2.5%</b></span> 
              </div>
               </div>
                <button class="btn btn-primary nextBtn step2-but" type="button">Next</button>
            </div>
        </div>
       
        
        
        <!--   <div class="panel panel-primary setup-content" id="step-3">-->
        <!--    <div class="panel-heading">-->
                 
        <!--    </div>-->
        <!--    <div class="panel-body" >-->
        <!--         <h2>This is a range value</h2>-->

        <!--         <label for="amount1"></label>-->
        <!--      <input type="text" id="amount1" name="range_value" class="form-control" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">-->
            
        <!--      <div id="slider1"></div> <br>-->
        <!--      <span><b>1.5%</b></span>-->
        <!--      <span style="float: right;"><b>2.5%</b></span> <br>-->
        <!--        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>-->
        <!--    </div>-->
        <!--</div>-->
        
        

         <div class="panel panel-primary setup-content ht-50" id="step-4">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body" >
                <h3 class="fs-title step-head">Where are you working?</h3>
        <div class="step4-sec">
                <ul class="chec-radio pad-0">
    <li class="pz">
        <div class="sel-sec shadow-fix">
            <label class="radio-inline main-box yn-inline">
                <input type="radio"  id="pro-chx-residential" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="office">
                <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Office</div>
                    </div>
                </div>
            </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="remote" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Remote</div>
                    </div>
            </div>
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="working_status" class=" button-3 button-3a pro-chx nextBtn" value="Co Working" >
             <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Co-Working</div>
                    </div>
            </div>
        </label>
        </div>
    </li><br>
    
</ul> 

    </div>                               

<!-- <button type="button" name="office" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Office</button><br>
<button type="button" name="remote" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Remote</button><br>
<button type="button" name="coworking" class="button button-3 button-3a icon-cart nextBtn"><i class="fa fa-shopping-cart"></i> Co-Working</button> -->
                
            </div>
        </div>

       


        
        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="fs-title step2-head">Who should we send the results to?</h3> 
            </div>
            <div class="panel-body step5-body shadow-fix">
                <div class="row">
                    <div class="sm-6">
                <div class="form-group">

                    <label class="control-label step5-label"> Name</label>
                    <input maxlength="200" type="text"id="name" name="name"  class="form-control step5-form" placeholder="Enter Company Name" required />
                    <p id="demo" style="color: red;"></p>
                </div>
                </div>
                <div class="sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">Email</label>
                    <input maxlength="200" type="text" id="email" name="email"  class="form-control step5-form" placeholder="Enter Company Address" required/>
                     <p id="demo1" style="color: red;"></p>
                </div>
            </div>
               <button class="btn btn-primary nextBtn step5-but" type="button" onclick="myFunction()">Next</button>
            </div>
            </div>
        </div>

         <div class="panel panel-primary setup-content ht-100" id="step-6">
            <div class="panel-heading">
                 <h3 class="fs-title step2-head">General Information</h3> 
            </div>
            <div class="panel-body step5-body shadow-fix">
                <div class="row">
                    <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">First Name</label>
                    <input maxlength="200" type="text" id="firstname" name="firstname"  class="form-control step5-form" placeholder="Enter First Name" required/>
                    <p id="demo2" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">Last Name </label>
                    <input maxlength="200" type="text" id="lastname" name="lastname"  class="form-control step5-form" placeholder="Enter Last Name" required/>
                    <p id="demo6" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">
                    <label class="control-label step5-label">Email Address</label>
                    <input maxlength="200" type="text" id="mail" name="mail"  class="form-control step5-form" placeholder="Enter Email" required/>
                     <p id="demo3" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">State</label>
                    <input maxlength="200" type="text" id="state" name="state"  class="form-control step5-form" placeholder="Enter State" required />
                    <p id="demo4" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">Zipcode</label>
                    <input maxlength="200" type="text" id="zipcode" name="zipcode"  class="form-control step5-form" placeholder="Enter Zipcode" required/>
                    <p id="demo5" style="color: red;"></p>
                </div>
                </div>
                
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">City</label>
                    <input maxlength="200" type="text" id="city" name="city"  class="form-control step5-form" placeholder="Enter City" required/>
                    <p id="demo7" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">Street</label>
                    <input maxlength="200" type="text" id="street" name="street" class="form-control step5-form" placeholder="Enter Street"  required/>
                    <p id="demo8" style="color: red;"></p>
                </div>
                </div>
                <div class="md-12 sm-6">
                <div class="form-group">

                    <label class="control-label step5-label">Date of birth</label>
                    <input maxlength="200" type="text" id="dob" name="dob"  class="form-control step5-form" placeholder="YYYY-MM-DD" required/>
                    <p id="demo9" style="color: red;"></p>
                </div>
                
            </div>
            <div class="col-sm-12">
                 <button class="btn btn-primary nextBtn step5-but" type="button" onclick="myFunction1()">Next</button>
                 </div>
            </div>
            </div>
        </div>


        <div class="panel panel-primary setup-content" id="step-7">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step-head">Credit Score</h3> 
    <div class="step4-sec">
                <ul class="chec-radio pad-0">
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio"  id="pro-chx-residential" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="excellent">
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Excellent</div>
                    </div>
            </div>

        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="good" >
            
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Good</div>
                    </div>
            </div>
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="fair" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Fair</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>

    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="credit_score" class=" button-3 button-3a pro-chx nextBtn" value="poor" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Poor</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    
</ul>
</div>
                                   


                
            </div>
        </div>


        <div class="panel panel-primary setup-content" id="step-8">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
        <h3 class="fs-title step2-head">Credit Score - 2</h3>
        <div class="step2-sec">
                <div class="shadow-fix sep2-body">
<label for="amount2">Select Price:</label>
              <input type="text" id="amount2" name="credit_score2" class="form-control fix-price" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider2"></div> <br>

              <span class="label-lighter"><b>500</b></span>
              <span style="float: right;" class="label-lighter"><b>800</b></span> <br>
              
            </div>
        </div>
                <button class="btn btn-primary nextBtn step2-but" type="button">Next</button>
                
            </div>
        </div>

<div class="panel panel-primary setup-content" id="step-9">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step-head">Are you currently employed?</h3> 
    <div class="step4-sec">
                <ul class="chec-radio pad-0">
    <li class="pz pad-0">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio"  id="pro-chx-residential" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="fulltime">
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Full Time</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="parttime" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Part Time</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="selfemployed" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                        <div class="clab">Self Employed</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>

    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-co" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="retired" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Retired</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>

    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="employee_status" class=" button-3 button-3a pro-chx nextBtn" value="notenployed" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Not Employed</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    
</ul>
</div>
                                   



                
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-10">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step-head">How often do you get paid?</h3>
            <div class="step4-sec">
                <ul class="chec-radio pad-0">
                
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio"  id="pro-chx-residential" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="weekly">
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Weekly</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="biweekly" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Biweekly</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="twicemonthly" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Twice Monthly</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>

    <li class="pz">
        <div class="sel-sec shadow-fix">
        <label class="radio-inline main-box yn-inline">
            <input type="radio" id="pro-chx-commercial" name="paid_status" class=" button-3 button-3a pro-chx nextBtn" value="monthly" >
            <div class="col-lg-12">
                    <div class="col-lg-3 step4-img-box">
                        <span class="grey-dot"></span>
                    </div>
                    <div class="col-lg-9">
                       <div class="clab">Monthly</div>
                    </div>
            </div>
            
        </label>
        </div>
    </li><br>

    
    
</ul> 
    </div>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-11">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step2-head">What's your approx. annual income?</h3> 

<div class="step2-sec">
                <div class="shadow-fix sep2-body">
<label for="amount3">Select Price:</label>
              <input type="text" id="amount3" name="annual_income" class="form-control fix-price" value="" readonly="" style="font-weight: bold;color: #000000;margin-bottom: 15px ; text-align: center; font-size: 20px;">
            
              <div id="slider3"></div> <br>

              <span class="label-lighter"><b>10000</b></span>
              <span class="label-lighter" style="float: right;"><b>1000000</b></span> <br>
               </div>
        </div>
                <button class="btn btn-primary nextBtn step2-but" type="button">Next</button>
            </div>
        </div>


        <div class="panel panel-primary setup-content ht-50" id="step-12">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step-head">Do you consent to FCRA?</h3> 
    <div class="step4-sec">
    <ul class="chec-radio pad-0">
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio"  id="pro-chx-residential" name="fcra" class=" button-3 button-3a pro-chx nextBtn" value="yes">
            <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYm89IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8ee7ab631b2cb85e6e2ab795694e288084c04f3f/check%20yes%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">Yes</div>
                  </div> 
            </div>
           
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio" id="pro-chx-commercial" name="fcra" class=" button-3 button-3a pro-chx nextBtn" value="no" >
            <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYnM9IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--43adb00fdc62d4e73e664a52ba002b5e1a7b5487/check%20no%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">No</div>
                  </div> 
                </div>
        </label>
        </div>
    </li>
    </ul>
</div>
                                   
            </div>
        </div>

        <div class="panel panel-primary setup-content ht-50" id="step-13">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <h3 class="fs-title step-head">Do you consent to TCPA?</h3> 
    <div class="step4-sec">
    <ul class="chec-radio pad-0">
       
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio"  id="pro-chx-residential" name="tcpa" class=" button-3 button-3a pro-chx nextBtn" value="yes">
            <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYm89IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--8ee7ab631b2cb85e6e2ab795694e288084c04f3f/check%20yes%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">Yes</div>
                  </div> 
            </div>
           
        </label>
        </div>
    </li><br>
    <li class="pz">
        <div class="yes-sec">
        <label class="radio-inline yn-inline shadow-fix">
            <input type="radio" id="pro-chx-commercial" name="tcpa" class=" button-3 button-3a pro-chx nextBtn" value="no" >
             <div class="col-lg-12 main-box">
                   <div class="col-lg-3 img-box"><img src="https://demo.flipforms.io/rails/active_storage/blobs/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBYnM9IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--43adb00fdc62d4e73e664a52ba002b5e1a7b5487/check%20no%20icon.png"></div>
                   <div class="col-lg-9">
                    <div class="clab">No</div>
                  </div> 
            </div>
        </label>
        </div>
    </li>
</ul>     
</div>
                                   

<button class="btn btn-success finish-but" name="submit" type="submit">Finish!</button>


                
            </div>
        </div>

    </form>
</div>



</div>
<div class="footer"></div>
</body>
</html>