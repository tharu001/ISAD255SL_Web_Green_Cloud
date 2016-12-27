<?php
session_start();
if(isset($_SESSION['UID'])){
	header('Location: loginbody.php');
    }else{
    header('Location: login.php');
}
?>