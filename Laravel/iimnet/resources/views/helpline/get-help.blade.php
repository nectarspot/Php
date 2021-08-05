<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="We will match, depending upon availability, you with a volunteer who can help to find critical information in your city." />
<meta property="og:description" content="We will match, depending upon availability, you with a volunteer who can help to find critical information in your city." />
<meta property="og:title" content="Helpline - Get Help | IIMnet" />
<title>Helpline - Get Help | IIMnet</title>
<?php// include '../includes/snippets/meta-data.php'; ?>
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"> 
<link href="{{ url('css/fontawesome.css') }}" rel="stylesheet"> 
<link href="{{ url('css/montserrat.css') }}" rel="stylesheet"> 
<link href="{{ url('css/color-change-hv8-up.css') }}" rel="stylesheet"> 
<link href="{{ url('css/tabs.css') }}" rel="stylesheet"> 
<link href="{{ url('css/table.css') }}" rel="stylesheet"> 
<link href="{{ url('css/animate.css') }}" rel="stylesheet"> 
<link href="{{ url('css/header-footer-updated.css') }}" rel="stylesheet"> 
<link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet"> 
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"> 
<link href="{{ url('css/owl.theme.default.min.css') }}" rel="stylesheet"> 
    
   <style>
   #more-list {
           display: none;
       }
       .mb-30 {
        margin-bottom: 30px;
       }
       .fs-1rem {
           font-size: 1rem;
       }
        .other-details-list li {
    padding: 0.5em 0 0;
    display: flex;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.rounded-pill {
    border-radius: 5px !important;
}
.btn-block {
    display: block;
    width: 50%;
}
.btn-primary {
    color: #fff;
    background-color: #CBB094;
    border-color: #CBB094;
}
.shadow {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.round-pill{
  border-radius: 5px !important;
}
#file-upload{
  display: none;
}
.file-upload input[type='file'] {
    display: none;
}
@media (max-width: 575px)
.form-group {
    margin-bottom: 10px;
}
.form-group {
    margin-bottom: 1rem;
}
 .other-details-list li::before {
    padding-right: 10px;
    font-size: 16px;
    line-height: 30px;
    color: var(--main-light-blue-color);
    font-weight: 700;
    font-family: "Font Awesome 5 Free";
    content: '\f058';
    display: inline-flex;
}
 .other-details-list li p{
    display: inline-flex;
    width: 95%;
    margin: 0;
    font-size: 15px

}
       .form-bg {
    background: url('/images/contact-form-bg.png');
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 43px 50px 35px 50px;
    border-radius: 10px 10px 10px 10px;
}
.container-checkbox {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* display: inline-flex; */
    width: 33%;
}
       /* Hide the browser's default checkbox */
.container-checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 5px;
}

/* On mouse-over, add a grey background color */
.container-checkbox:hover input ~ .checkmark {
  background-color: var(--main-green-color);
}

/* When the checkbox is checked, add a blue background */
.container-checkbox input:checked ~ .checkmark {
  background-color: var(--main-green-color);
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;

}

/* Show the checkmark when checked */
.container-checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container-checkbox .checkmark:after {
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
 font-size: 12px;
    line-height: 32px;
    color: var(--main-dark-blue-color);
    font-weight: 700;
    font-family: "Font Awesome 5 Free";
    content: '\f00c';
  
}

@media (max-width: 992px) {
    .container-checkbox {
        width: 49%
    }
}

@media (max-width: 767px) {
    .container-checkbox {
        width: 100%
    }
    .form-bg {
        padding: 20px;
    }
    .form-group{width:70% !important;}
}

@media (max-width: 575px) {
  .col-md-12, .col-md-6  {
        padding: 0 10px !important;
    }
    
}
.margin2{
  margin: 1em 0 !important;
}
.calendar{margin:2em 0;}
.calendar .form-input {padding-right:20px;}
.form-group{width:50%;}
.form-group label{padding: 10px 10px;}
.clg-name{margin:2em 0}

    </style>
<?php //include '../includes/snippets/under-head-tag.php' ?> 

</head>
<body class="contact-page body">
<?php //include '../includes/snippets/header-updated.php' ?> 
@include('header-updated') 
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/thankyou.php';}"></iframe> 
<div class="top-section-pad">
    <div class="container">
    <center>
<h1 class="main-heading mb-half">IIMnet Covid-19 <mark>Helpline</mark> </h1>
<p class="blue-heading">We will match, depending upon availability, you with a volunteer who can help to find critical information in your city.</p>
</center>


        <div class="ptb-3">
        <div class="form-bg">  
                <form  method="post" action="https://iimnet.com/get_help" class="app-form fs-form fs-form-full"  enctype="multipart/form-data" >
               <div class="row">
               <div class="col-md-6">
                   <label for="full_name" class="hidden-label">Full Name</label>
                    <input type="text" name="first_name" class="form-input" id="full_name" required placeholder="First Name">
                    <input type="hidden" name="status"  class="form-input" id="full_name" required placeholder="Full Name" value="Pending">
                   </div>
                   <div class="col-md-6">
                   <label for="last_name" class="hidden-label">Last Name</label>
                    <input type="text" name="last_name" class="form-input" id="last_name" required placeholder="Last Name">
                    <!--<input type="hidden" name="status"  class="form-input" id="full_name" required placeholder="Full Name" value="Pending">-->
                   </div>
                   <div class="col-md-6">
                   <label for="email_id" class="hidden-label">Email</label>
                   <input type="email" name="email" class="form-input" id="email_id" required placeholder="Email">
                   </div>
                  <div class="col-md-6">
                    <label for="full_name" class="hidden-label">Phone (with country code) </label>
                    <input type="text" name="phone_number" class="form-input" id="full_name" required placeholder="Phone (with Country Code)">
                   </div>
                   <div class="col-md-6">
                   <label for="full_name" class="hidden-label">City </label>
                   <input type="text" name="city" class="form-input" id="full_name" required placeholder="City">
                   </div>
                   
                      <div class="col-md-6">
                         <label for="event-selection" class="hidden-label"> WhatsApp no.</label>
                          <select name="whatsup_number" class="form-input" id="event-selection" required>
                            <option value="">WhatsApp no.</option>
                            
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>    
                      </div>
                      <div class="col-md-6">
                         <label for="event-selection" class="hidden-label"> Language Preference*</label>
                          <select name="language" class="form-input" id="event-selection" required>
                            <option value="">Language Preference</option>
                            
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Other">Others</option>
                          </select>    
                      </div>
                   <div class="col-md-12">
                        <p class="fs-1rem"> I am looking for </p>
                      <label for="webform_type_of_project_checkbox_15" class="container-checkbox">Oxygen Cylinder
                        <input id="webform_type_of_project_checkbox_15" type="checkbox" name="category_type[]" value="Oxygen Cylinder">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_14" class="container-checkbox">Hospital Bed (Normal)
                        <input id="webform_type_of_project_checkbox_14" type="checkbox" name="category_type[]"  value="Hospital Bed (Normal)">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_16" class="container-checkbox">Hospital Bed (Oxygen)
                        <input id="webform_type_of_project_checkbox_16" type="checkbox" name="category_type[]"  value="Hospital Bed (Oxygen)">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_17" class="container-checkbox">ICU
                        <input id="webform_type_of_project_checkbox_17" type="checkbox" name="category_type[]"  value="ICU">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_18" class="container-checkbox">Medicines
                        <input id="webform_type_of_project_checkbox_18" type="checkbox" name="category_type[]"  value="Medicines">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_20" class="container-checkbox">COVID Advise
                        <input id="webform_type_of_project_checkbox_20" type="checkbox" name="category_type[]"  value="COVID Advise">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_21" class="container-checkbox">Plasma
                        <input id="webform_type_of_project_checkbox_21" type="checkbox" name="category_type[]"  value="Plasma">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_22" class="container-checkbox">Ambulance
                        <input id="webform_type_of_project_checkbox_22" type="checkbox" name="category_type[]"  value="Ambulance">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_23" class="container-checkbox">Food for patients
                        <input id="webform_type_of_project_checkbox_23" type="checkbox" name="category_type[]"  value="Food for patients">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_24" class="container-checkbox">Testing Services
                        <input id="webform_type_of_project_checkbox_24" type="checkbox" name="category_type[]"  value="Testing Services">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_24" class="container-checkbox">Oximeter
                        <input id="webform_type_of_project_checkbox_24" type="checkbox" name="category_type[]"  value="Oximeter">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_24" class="container-checkbox">Doctor
                        <input id="webform_type_of_project_checkbox_24" type="checkbox" name="category_type[]"  value="Doctor">
                        <span class="checkmark"></span>
                      </label>
                      <label for="webform_type_of_project_checkbox_24" class="container-checkbox">Others
                        <input id="webform_type_of_project_checkbox_24" type="checkbox" name="category_type[]"  value="Others">
                        <span class="checkmark"></span>
                      </label>
                   </div>
                    <!--<div class="col-md-6">-->
                    <!--                        <div class="calendar" id="datetimepicker1">-->
                    <!--                            <label>Internship Start Date</label>-->
                                               
                    <!--                            <input type="date" class="form-input" name="start_date" placeholder="Internship Start Date"  required>-->
                    <!--                        </div>-->
                                       
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--                        <div class="calendar" id="datetimepicker1">-->
                    <!--                            <label>Internship End Date</label>-->
                                               
                    <!--                            <input type="date" class="form-input" name="end_date" placeholder="Internship End Date"  required>-->
                    <!--                        </div>-->
                                       
                    <!--</div>--><br>
                    <div class="col-md-6">
                         <label for="event-selection" class="hidden-label">Timeline</label>
                         <!--<i class="fas fa-caret-down select-icon"></i>-->
                          <select name="looking_for" class="form-input" id="event-selection" required>
                            <option value="I am looking for the above within...">Timeline</option>
                            
                            <option value="As soon as possible">As soon as possible</option>
                            <option value="Within 24 hours">Within 24 hours</option>
                            <option value="For future use">For future use</option>
                            <option value="None of the above">None of the above</option>
                            <option value="Others">Others</option>
                            
                          </select>    
                      </div>
                   <div class="col-md-12">
                     <label for="help-you" class="hidden-label">Brief description about your need (optional)</label>
                    <textarea name="description" class="form-textarea" id="help-you" cols="30" rows="15" placeholder="Brief description about your need"></textarea>      
                   </div>
                    <div class="col-lg-12">
                    <span class="tnc-span">*Please verify your answers before submission, Someone will reach out to you soon.</span>
                    <!--<span class="tnc-span">By clicking below submit, you are agreeing to our <a href="/privacy-policy-at-nectarspot-inc" aria-label="Privacy Policy"><u>Terms of Use and Privacy Policy</u></a></span>-->
                   </div>
                   <div class="col-lg-12">
                       <button type="submit" value="Submit" class="form-submit-btn">Submit ➞</button>
                   </div>
               </div>
         </form>
            </div>
           
    </div>
</div>
</div>

<div class="container-band-bg">
  <div class="container wrapper">
    <div class="row align-item-center">
      <div class="col-lg-8">
        <h5 class="white-font fw-700">Provide additional information of COVID-19 symptoms</h5>
        <!-- <p class="white-font mb-0 fs-15">Join Now, Free for a Limited Time</p> -->
      </div>
      <div class="col-lg-4">
        <a href="/helpline/get-help-details" class="btn-white d-block tab-center float-right tab-float-none get-help-details-btn">Get Help ➞</a>
        <!-- <p class="mt-3 white-font">Join Now, Free for a Limited Time</p> -->
      </div>
    </div>
  </div>
</div>

<?php //include '../includes/snippets/footer-updated-index2.php' ?>
@include('footer-updated-index2')
<script>
$(document).ready(function(){
$(".click-more").click(function(){
        $(".click-more").toggleClass("fa-plus-circle fa-times-circle");
        
       

   
  });
  $("#golden-trumpet-award").hide();
    
    $(".click-more").click(function(){
    $("#golden-trumpet-award").slideToggle("fast");
    
  });
 
  });

</script>

<script type="text/javascript">
                $('#datetimepicker1').datepicker();
$('#datetimepicker2').datepicker();
// $("button").click(function(){
//     $(".acc-info").toggle();
//   });
            </script>
          
</body>
</html>