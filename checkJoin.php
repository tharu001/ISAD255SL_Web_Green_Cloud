<?php
session_start();
$_SESSION['error'];
$_SESSION['UID'] = $_POST['studentID'];
unset($_SESSION['error']);


$link = mysqli_connect("localhost", "root", "", "cloud");
 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$fname = mysqli_real_escape_string($link, $_POST['firstname']);
$lname = mysqli_real_escape_string($link, $_POST['lastname']);
$passW = mysqli_real_escape_string($link, $_POST['password']);
$repassW = mysqli_real_escape_string($link, $_POST['rePassword']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$birthDate = mysqli_real_escape_string($link, $_POST['birthDate']);
$terms = mysqli_real_escape_string($link, $_POST['terms']);
 

$sql = "INSERT INTO signup (studentID,first_name,last_name,password,repassword,email,birth_date,terms) VALUES ('$_POST[studentID]','$fname','$lname','$passW','$repassW','$email','$birthDate','$terms')";

if(!mysqli_query($link, $sql)){
	$result = mysqli_query($link, "SELECT studentID FROM signup WHERE studentID = '$_POST[studentID]'");
	$count = mysqli_num_rows($result);
	if($count>0){
		$_SESSION['error'] = " * You've already registered! *";
		 header('Location: join.php');
	}
	else{
		$_SESSION['error'] = "* Invalid student ID *";
		header('Location: join.php');
	}
	}
	else{
		$sql2 = "INSERT INTO user(UID,fname,lname,password,email) VALUES ('$_POST[studentID]','$fname','$lname','$passW','$email')";
		mysqli_query($link, $sql2);
		$_SESSION['fullname'] = $fname." ".$lname;
		$_SESSION['fname']=$fname;
		$_SESSION['email']=$email;
		header('Location: plan.php');
	}

mysqli_close($link);

?>