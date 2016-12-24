

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
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="plan.php" method="post">
		<div class="form-group">
		<h2>Join G-Cloud</h2>
		<h5>Leave us to keep your storage stuff</h5>
    <div id = "panel">
     <img src = "img/join.png">
      </div>
	  </div>

		   
  <div class="form-group">
            <label for="fname" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-8">
                <input type="text" name="fname" placeholder="First Name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-8">
                <input type="text" name="lname" placeholder="Last Name" class="form-control" style="width:315px">
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
                <input type="password" name="passW" placeholder="Password" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-8">
                <input type="password" name="rePassW" placeholder="Confirm Password" class="form-control" style="width:315px">
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
            <div class="col-sm-8">
                <input type="date" name="birthDate" class="form-control" style="width:315px">
            </div>
        </div><hr> 
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
