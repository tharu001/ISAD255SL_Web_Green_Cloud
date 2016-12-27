

 <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<head>
<?php
session_start();
require 'includes/header.php'; ?>
<script>
        function validate() {
			var count = 0;
            if (document.registration.mlname.value.length==0) {
				count++;
            }
			 if (document.registration.hobby.value.length==0) {
				count++;
            }
             if (document.registration.bplace.value.length==0){
				count++;
            }
			if (document.registration.TV.value.length==0){
				count++;
            }
			if (document.registration.Cname.value.length==0){
				count++;
            }
			var filled = 5 - count;
			if(filled < 3){
				alert("Please answer at least 3 questions!");
				return false;
			}
			else if(filled > 3){
				alert("Please answer only 3 questions!");
				return false;
			}
			else if(filled == 3){
				return true;
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
		<h4>Leave us to keep your storage stuff</h4>
		<h5><?php if(isset($_SESSION['fullname']))echo 'Hi, '.$_SESSION['fullname']; ?></h5>
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
                <input type="text" name="mlname" placeholder="Mother's last name" class="form-control" style="width:315px">
            </div>
        </div>
 <div class="form-group">
            <label for="lname" class="col-sm-3 control-label">Your hobby?</label>
            <div class="col-sm-8">
                <input type="text" name="hobby" placeholder="Hobby" class="form-control" style="width:315px">
            </div>
        </div>		
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Where were you born?</label>
            <div class="col-sm-8">
                <input type="text" name="bplace" placeholder="Born place" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Your Favourite TV show</label>
            <div class="col-sm-8">
                <input type="text" name="TV" placeholder="Favourite TV show name" class="form-control" style="width:315px">
            </div>
        </div>
		<div class="form-group">
            <label for="rePassword" class="col-sm-3 control-label">Your favourite celebrity name</label>
            <div class="col-sm-8">
                <input type="text" name="Cname" placeholder="Favourite celebrity name" class="form-control" style="width:315px">
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

<?php
$link = mysqli_connect("localhost", "root", "", "cloud");
 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "UPDATE signup SET plan='$_POST[plan]' WHERE studentID='$_SESSION[UID]'";
mysqli_query($link, $sql);


mysqli_close($link);

?>
