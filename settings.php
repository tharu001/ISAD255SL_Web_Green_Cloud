

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
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="finish.php" method="post">
		<div class="form-group">
		<h2>Welcome to G-Cloud</h2>
		<h5>Leave us to keep your storage stuff</h5>
    <div id = "panel">
     <img src = "img/settings.png">
      </div>
	  </div>

 <div class="alert alert-warning" role="alert">
  <h4 class="alert-heading">Read this carefuly!</h4>
  <p>Answer only 3 of following</p>
  <p class="mb-0">Keep remember or note down the answers somewhere which you have answered if you 're forgeting things.This will help you to reset your password.</p>
</div>
		   
  <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Your mother's last name?</label>
            <div class="col-sm-8">
                <input type="text" name="fname" placeholder="Mother's last name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Your hobby?</label>
            <div class="col-sm-8">
                <input type="text" name="lname" placeholder="Hobby" class="form-control" style="width:315px">
            </div>
        </div>		
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Where were you born?</label>
            <div class="col-sm-8">
                <input type="email" name="email" placeholder="Born place" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Your Favourite TV show</label>
            <div class="col-sm-8">
                <input type="password" name="passW" placeholder="Favourite TV show name" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Your favourite celebrity name</label>
            <div class="col-sm-8">
                <input type="password" name="rePassW" placeholder="Favourite celebrity name" class="form-control" style="width:315px">
            </div>
        </div><hr> 
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <button type="submit" class="btn btn-success btn-block">Finish</button>
            </div>
        </div>
    </form> 
    </div>
    <div class="col-md-4">
		
    </div>
	
</div> <!-- ./container -->
