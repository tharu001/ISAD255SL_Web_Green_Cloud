
 <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<head>
<?php require 'includes/header.php';
session_start();
?>
<script>
        function validate() {
           
              if (document.getElementById("plan1").checked == false && document.getElementById("plan2").checked == false) {
                  alert("Please select your plan");
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
		<h4>We care your storage stuff...</h4>
		<h5><?php if(isset($_SESSION['fullname']))echo 'Hi, '.$_SESSION['fullname']; ?></h5>
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
                            <input id="plan1" type="radio" name="plan" value="limited">Limited 5GB space for free
                    </div><br>
                    <div class="col-sm-12">
                        <label class="radio-inline">
                            <input id="plan2" type="radio" name="plan" value="unlimited"> Unlimited GB space for <a href="#">Rs.xxx-xx</a>
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