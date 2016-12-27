<link href="Bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
 <link href="includes/header.css" type="text/css" rel="stylesheet">
 <link href="css/loginbody.css" type="text/css" rel="stylesheet">
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['UID'])){
    header('Location: login.php');
}
?>
</head>
		<div class="container">
	  <div id="bar"></div>
<?php include 'includes/master_nav.php'; ?>
<?php require 'includes/loginheader.php'; ?>

</div>
