

 <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<head>
<?php 
session_start();
require 'includes/header.php';
?>
<script>
        function validate() {
			if (document.registration.studentID.value.length==0) {
                alert("Please Type your Student ID you've recieved from the university!");
                return false;
            }
            if (document.registration.firstname.value.length==0) {
                alert("Please Type Your First Name");
                return false;
            }
			 if (document.registration.lastname.value.length==0) {
                alert("Please Type Your Last Name");
                return false;
            }
             if (document.registration.email.value.length==0){
                alert("Please Type Your E-mail");
                return false;
            }
        
            if (document.registration.password.value.length==0){
                alert("Please Type Your Password");
                return false;
            }
            if (document.registration.rePassword.value.length==0){
                alert("Please Confirm Your Pasword");
                return false;
            }
			if (document.registration.password.value!=document.registration.rePassword.value){
                alert("Passwords fields do not conflict with each other!");
                return false;
            }
            if (document.registration.birthDate.value.length==0){
                alert("Please Type Your Birth Date");
                return false;
            }
			if(!document.registration.terms.checked){
				alert("Please select that you agree with our terms!");
				return false;
			}
        }
    </script>
</head>

<div class="container">
        <div class="col-md-2">
           
        </div>
    <div class="col-md-6"> 
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="checkJoin.php" method="post">
		<div class="form-group">
		<h2>Join G-Cloud</h2>
		<h4>We care your storage stuff...</h4>
    <div id = "panel">
     <img src = "img/join.png">
      </div>
	  </div>
	<div class="form-group">
            <label for="sid" class="col-sm-9 col-sm-offset-1 control-label" style="font-size:12px;color:red;"><?php if(isset($_SESSION['error']))echo $_SESSION['error']; ?></label>
        </div>
	<div class="form-group">
            <label for="sid" class="col-sm-3 control-label">Student ID</label>
            <div class="col-sm-8">
                <input type="text" name="studentID" placeholder="Student ID" class="form-control" style="width:315px">
            </div>
        </div>
  <div class="form-group">
            <label for="fname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-8">
                <input type="text" name="firstname" placeholder="First Name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-8">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control" style="width:315px">
            </div>
        </div>		
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" placeholder="Email" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
                <input type="password" name="password" placeholder="Password" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-8">
                <input type="password" name="rePassword" placeholder="Confirm Password" class="form-control" style="width:315px">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-8">
                <input type="date" name="birthDate" class="form-control" style="width:315px">
            </div>
        </div>
            <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="terms">I accept <a href="terms.php" target="_blank">terms</a>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
               <button type="submit" class="btn btn-success btn-block">Join</button>
            </div>
        </div>
	
	<div id="graph1">
        <img src = "img/notice1.png" width = "190" height="247">
		</div>
    </form> 
    </div>
	
</div> <!-- ./container -->
