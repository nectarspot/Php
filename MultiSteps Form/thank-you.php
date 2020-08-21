<!DOCTYPE html> 
<html>
<head>
	<title>Thank you!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="TSW WebCoder">
</head>
<style>
    .main-logo{margin: 0 auto;}
.logo {
    max-width: 100%
    max-height: 65px;
}

.nav-bar{position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    padding-top: 17px;
    /*background-color: #002e5b;*/
    
}
</style>
<body>
    
    <div class="nav-bar">
    <div class="main-logo">
    <a class="navbar-brand p-0 mx-auto" href="#"><img class="logo" alt="Brand" src="https://nectarspot.com/images/new-logo.png">
</a>
    </div>
</div>
    <div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
        <h3>Thank You. Your Data Saved Successfully</h3>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("form1.php"); //will redirect to main page (form1.php)
        }, 3000); //will call the function after 3 secs.
    </script>   
</body>
</html>