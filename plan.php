
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
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="settings.php" method="post">
        <h2>Welcome to G-Cloud</h2>
		<h5>Leave us to keep your storage stuff</h5>
		 <div class="form-group">
		 <div id = "panel">
     <img src = "img/plan.png" width = "650" height="60">
      </div><br>
	  <h4>Choose your personal plan</h4>
            <label class="control-label col-sm-3"></label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="radio-inline">
                            <input id="plan1" type="radio" name="plan" value="p1">Limited 5GB space for free
                    </div><br>
                    <div class="col-sm-12">
                        <label class="radio-inline">
                            <input id="plan2" type="radio" name="plan" value="p2"> Unlimited GB space for <a href="#">Rs.xxx-xx</a>
                        </label>
                    </div>
                </div>
            </div>
        </div><hr> 
		 <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <button type="submit" class="btn btn-success btn-block">Proceed</button>
            </div>
        </div>
		<div id="graph2">
        <img src = "img/notice2.png" width = "190" height="247">
		</div>
    </form> 
    </div>
</div> <!-- ./container -->
