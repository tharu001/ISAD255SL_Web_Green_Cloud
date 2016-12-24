

 <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<head>
<?php require 'includes/header.php'; ?>
<script>
        function validate() {
            if (document.registration.firstName.value.length==0) {
                alert("Please Type Your First Name");
                return false;
            }
			 if (document.registration.lastName.value.length==0) {
                alert("Please Type Your Last Name");
                return false;
            }
             if (document.registration.email.value.length==0){
                alert("Please Type Your E-mail");
                return false;
            }
        
            if (document.registration.passW.value.length==0){
                alert("Please Type Your Password");
                return false;
            }
            if (document.registration.rePassW.value.length==0){
                alert("Please Confirm Your PAsword");
                return false;
            }
            if (document.registration.birthDate.value.length==0){
                alert("Please Type Your Birth Date");
                return false;
            }
			else if (document.getElementById("gen1").checked == false && document.getElementById("gen2").checked == false) {
                  alert("Please select Gender");
                  return false;
				}
        }
    </script>
</head>

<div class="container">
        <div class="col-md-2">
           
        </div>
    <div class="col-md-6"> 
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="loginbody.php" method="post">
		<div class="form-group">
		<h2>Welcome to G-Cloud</h2>
		<h5>Leave us to keep your storage stuff</h5>
    <div id = "panel">
     <img src = "img/finish.png">
      </div>
	  </div>
	  <div id="alert">
 <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Congratulations!</h4>
  <p>You have successfuly activatied your account</p>
  <p class="mb-0"></p>
</div>
</div>		
   
            <div class="col-sm-10 col-sm-offset-1">
                <button type="submit" class="btn btn-success btn-block">Continue</button>
				<button type="submit" class="btn btn-secondary btn-block">What is G-Cloud</button>
            </div>


