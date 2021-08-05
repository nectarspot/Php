<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helpline - Get Help Details | IIMnet</title>
    <?php// include '../includes/snippets/meta-data.php'; ?>
    <meta property="og:title" content="IIMnet is a network of professionals" />
    <meta name="description" content="Get help from our volunteer to find critical information in your city much faster and better way." />
    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/fontawesome.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/montserrat.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/color-change-hv8-up.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/tabs.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/table.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/animate.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/header-footer-updated.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/owl.carousel.min.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet"> 
<link href="<?php echo e(url('css/owl.theme.default.min.css')); ?>" rel="stylesheet"> 
   <style>
/*    #event-selection {*/
/*        position: relative;*/
/*    }*/
/*    .select-icon {*/
/*    z-index: 100;*/
/*    position: absolute;*/
/*    right: 28px;*/
/*    top: 22px;*/
/*    width: 20px;*/
/*    height: 20px;*/
/*    margin-top: -10px;*/
/*    font-size: 18px;*/
/*    line-height: 20px;*/
/*    text-align: center;*/
/*    color: var(--main-dark-blue-color);*/
/*    z-index: 2;*/
/*}*/

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
<?php echo $__env->make('header-updated', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/thankyou.php';}"></iframe> 
<div class="top-section-pad">
    <div class="container">
    <center>
<h1 class="main-heading mb-half"> Covid-19 Volunteer<mark>Helpline</mark> </h1>
<p class="blue-heading">Get help from our volunteer to find critical information in your city much faster and better way.</p>
</center>


        <div class="ptb-3">
        <div class="form-bg">  
                <form  method="post" action="https://iimnet.com/get_help_details_bknd" class="app-form fs-form fs-form-full"  enctype="multipart/form-data" >
                 <!--<form  method="post" action="" class="app-form fs-form fs-form-full"  enctype="multipart/form-data" >-->
               <div class="row">
               <div class="col-md-6">
                   <label for="full_name" class="hidden-label">Your Name</label>
                    <input type="text" name="name" class="form-input" id="full_name" required placeholder="First Name">
                    <input type="hidden" name="status"  class="form-input" id="full_name" required placeholder="Full Name" value="Pending">
                   </div>
                   <div class="col-md-6">
                   <label for="email_id" class="hidden-label">Your Email</label>
                   <input type="email" name="email" class="form-input" id="email_id" required placeholder="Email">
                   </div>
                  <div class="col-md-6">
                    <label for="full_name" class="hidden-label">Your Phone (with country code) </label>
                    <input type="text" name="phone_number" class="form-input" id="full_name" required placeholder="Phone (with Country Code)">
                   </div>
                   <div class="col-md-6">
                   <label for="full_name" class="hidden-label">Your City </label>
                   <input type="text" name="city" class="form-input" id="full_name" required placeholder="City">
                   </div>
                   <div class="col-md-6">
                   <label for="patient_name" class="hidden-label">Patient Name</label>
                    <input type="text" name="patient_name" class="form-input" id="patient_name" required placeholder="Patient Name">
                   
                   </div>
                   <div class="col-md-6">
                   <label for="Age" class="hidden-label">Patient Age </label>
                   <input type="text" name="patient_age" class="form-input" id="Age" required placeholder="Patient Age">
                   </div>
                   <div class="col-md-6">
                   <label for="city" class="hidden-label">Patient City </label>
                   <input type="text" name="patient_city" class="form-input" id="city" required placeholder="Patient City">
                   </div>
                   <div class="col-md-6">
                    <label for="patient_phone_number" class="hidden-label">Patient Phone (with country code) </label>
                    <input type="text" name="patient_phone" class="form-input" id="patient_phone_number" required placeholder="Patient Phone (with Country Code)">
                   </div>
                   <div class="col-md-6">
                     <label for="address" class="hidden-label">Area / Location/Address </label>
                    <input type="text" name="location" class="form-input" id="address" cols="30" rows="15" placeholder="Area / Location/Address"></textarea>      
                   </div>
                   <div class="col-md-6">
                         <label for="event-selection" class="hidden-label">Symptoms</label>
                         <!--<i class="fas fa-caret-down select-icon"></i>-->
                          <select name="symptoms" class="form-input" id="event-selection" required>
                            <option value="Symptoms">Symptoms</option>
                            
                            <option value="chest congestion">chest congestion</option>
                            <option value="heavy breathing">heavy breathing</option>
                            <option value="others">others</option>
                          </select>    
                    </div>
                    <div class="col-md-6">
                         <label for="event-selection" class="hidden-label">Is patient on Oxygen Cylinder ?</label>
                         <!--<i class="fas fa-caret-down select-icon"></i>-->
                          <select name="oxygen_cylinder" class="form-input" id="event-selection" required>
                            <option value="Is patient on Oxygen Cylinder">Is patient on Oxygen Cylinder ?</option>
                            
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>    
                    </div>
                    
                    <div class="col-md-6">
                     <label for="oxygen_level" class="hidden-label">SPO2 Level (Oxygen level)</label>
                    <input type="text" name="level" class="form-input" id="oxygen_level" cols="30" rows="15" placeholder="SPO2 Level (Oxygen level)">   
                   </div>
                   <div class="col-md-6">
                     <label for="hospital_visited" class="hidden-label">List of Hospitals Visited</label>
                    <input type="text" name="hospital_visit" class="form-input" id="hospitals_visited" cols="30" rows="15" placeholder="List of Hospitals Visited">     
                   </div>
                   
                   <div class="col-md-6">
                     <label for="hospital_beds" class="hidden-label">Searching Hospital Bed Since ?</label>
                    <input type="text" name="hospital_bed" class="form-input" id="hospital_beds" cols="30" rows="15" placeholder="Searching Hospital Bed Since ?">
                   </div>
                   <div class="col-md-6">
                     <label for="hospital_name" class="hidden-label"> Hospital name if admitted ?</label>
                    <input type="text" name="hospital_name" class="form-input" id="hospital_name" cols="30" rows="15" placeholder=" Hospital name if admitted ?">
                   </div>
                   <div class="col-md-6">
                     <label for="ward_name" class="hidden-label"> Ward No/Name </label>
                    <input type="text" name="ward_numner" class="form-input" id="ward_name" cols="30" rows="15" placeholder="  Ward No/Name">
                   </div>
                   
                   <div class="col-md-6">
                         <label for="event-selection" class="hidden-label">Covid Test Done ? ?</label>
                         <!--<i class="fas fa-caret-down select-icon"></i>-->
                          <select name="covid_test" class="form-input" id="event-selection" required>
                            <option value="Covid Test Done">Covid Test Done ?</option>
                            
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>    
                    </div>
                   <div class="col-md-6">
                     <label for="prefer_hospital" class="hidden-label"> Prefer Govt/Pvt/Any Hospital ?</label>
                    <input type="text" name="pvt_govt" class="form-input" id="prefer_hospital" cols="30" rows="15" placeholder=" Prefer Govt/Pvt/Any Hospital ?">
                   </div>
                   <div class="col-md-6">
                     <label for="bed_type" class="hidden-label"> Type of Bed required</label>
                    <input type="text" name="bed_type" class="form-input" id="bed_type" cols="30" rows="15" placeholder=" Type of Bed required ?">
                   </div>
                   <div class="col-md-6">
                     <label for="attender_no" class="hidden-label"> Attender Mobile No</label>
                    <input type="text" name="attender_no" class="form-input" id="attender_no" cols="30" rows="15" placeholder=" Attender Mobile No">
                   </div>
                   <div class="col-md-6">
                     <label for="relation" class="hidden-label"> Relation to the Patient</label>
                    <input type="text" name="patient_relation" class="form-input" id="relation" cols="30" rows="15" placeholder=" Relation to the Patient">
                   </div>
                   <div class="col-md-6">
                     <label for="srf" class="hidden-label"> SRF ID</label>
                    <input type="text" name="srf" class="form-input" id="srf" cols="30" rows="15" placeholder=" SRF ID">
                   </div>
                   <div class="col-md-6">
                     <label for="bu" class="hidden-label"> BU Number</label>
                    <input type="text" name="bu_number" class="form-input" id="bu" cols="30" rows="15" placeholder=" BU Number">
                   </div>
                   <div class="col-md-6">
                     <label for="comorbid" class="hidden-label">  Co-morbid conditions(Critical condition)</label>
                    <input type="text" name="condition_type" class="form-input" id="comorbid" cols="30" rows="15" placeholder=" Co-morbid conditions">
                   </div>
                   <div class="col-md-6">
                     <label for="doctor_name" class="hidden-label"> Doctor Name</label>
                    <input type="text" name="doctor_name" class="form-input" id="doctor_name" cols="30" rows="15" placeholder="Doctor Name ">
                   </div>
                   <div class="col-md-6">
                     <label for="remarks" class="hidden-label"> Other Remarks</label>
                    <input type="text" name="remarks" class="form-input" id="remarks" cols="30" rows="15" placeholder=" Other Remarks">
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


<?php //include '../includes/snippets/footer-updated-index2.php' ?>
<?php echo $__env->make('footer-updated-index2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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


   <?php /**PATH C:\xampp\htdocs\iimnet\resources\views/helpline/get-help-details.blade.php ENDPATH**/ ?>