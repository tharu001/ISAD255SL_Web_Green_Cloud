

 <link href="Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/form.css" type="text/css" rel="stylesheet">
<head>
<?php 
session_start();
require 'includes/header.php'; ?>
</head>

<div class="container">
        <div class="col-md-2">

        </div>
    <div class="col-md-6"> 
    <form name="registration" onsubmit="return validate()" class="form-horizontal" role="form" action="checkuser.php" method="post">
		<div class="form-group">
		<h2>Welcome to G-Cloud</h2>
		<h4>Leave us to keep your storage stuff</h4>
		<h5><?php if(isset($_SESSION['fullname']))echo 'Hi, '.$_SESSION['fullname']; ?></h5>
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
<?php
$link = mysqli_connect("localhost", "root", "", "cloud");
 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$mLast = $_POST['mlname'];
$hobby = $_POST['hobby'];
$born = $_POST['bplace'];
$tv = $_POST['TV'];
$celeb = $_POST['Cname'];
 
$sql = "UPDATE signup SET mLast='$mLast' WHERE studentID='$_SESSION[UID]'";
$sql1 = "UPDATE signup SET hobby='$hobby' WHERE studentID='$_SESSION[UID]'";
$sql2 = "UPDATE signup SET born='$born' WHERE studentID='$_SESSION[UID]'";
$sql3 = "UPDATE signup SET tv='$tv' WHERE studentID='$_SESSION[UID]'";
$sql4 = "UPDATE signup SET celeb='$celeb' WHERE studentID='$_SESSION[UID]'";
if(isset($_POST['mlname']))
mysqli_query($link, $sql);

if(isset($_POST['hobby']))
mysqli_query($link, $sql1);

if(isset($_POST['bplace']))
mysqli_query($link, $sql2);

if(isset($_POST['TV']))
mysqli_query($link, $sql3);

if(isset($_POST['Cname']))
mysqli_query($link, $sql4);


mysqli_close($link);

?>

