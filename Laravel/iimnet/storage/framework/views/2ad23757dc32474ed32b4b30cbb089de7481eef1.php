<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Contact us for more details" />
    <meta property="og:description" content="Contact us for more details" />
    <meta property="og:title" content="Contact Us | IIMnet" />
    <title>Contact Us | IIMnet</title>
   <?php //include 'includes/snippets/meta-data.php'; ?>
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
<?php //include 'includes/snippets/under-head-tag.php' ?> 
</head>
<body class="contact-page body">
<?php //include 'includes/snippets/header-updated.php' ?>  
<?php echo $__env->make('header-updated', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/thankyou.php';}"></iframe> 
<div class="top-section-pad">
    <div class="container">
    <center>
<h1 class="main-heading mb-half"><mark>Contact Us</mark></h1>
<p class="blue-heading">Get in touch with us!</p>
</center>
        <div class="ptb-3">
        <div class="form-bg">  
                <form  method="post" action="https://iimnet.com/contact" class="app-form fs-form fs-form-full"  enctype="multipart/form-data" >
               <div class="row">
               <div class="col-md-6">
                   <label for="full_name" class="hidden-label"> Name</label>
                    <input type="text" name="name" class="form-input" id="full_name" required placeholder="Name">
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
                   <label for="full_name" class="hidden-label">Best time to Call </label>
                   <input type="text" name="time_to_call" class="form-input" id="full_name"  placeholder="Best time to Call">
                   </div>
                   <div class="col-md-12">
                     <label for="help-you" class="hidden-label">Comments (optional)*</label>
                    <textarea name="description" class="form-textarea" id="help-you" cols="30" rows="15" placeholder="Comments" required></textarea>      
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


<?php //include 'includes/snippets/footer-updated-index2.php' ?>
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
</html><?php /**PATH C:\xampp\htdocs\iimnet\resources\views/contact-us.blade.php ENDPATH**/ ?>