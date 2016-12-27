<?php
session_start();
$login = 0;
$status = "";
if(isset($_SESSION['UID'])){
		header('Location: loginbody.php');
}
else{
	$link = mysqli_connect("localhost", "root", "", "cloud");
if (isset($_POST['UID'])) {
    $UID = $_POST['UID'];
    $pass = $_POST['pass'];
    //$password = md5($pass);
	$password = $pass;

    $sql = "select * from user where UID='$UID'";
    $result = mysqli_query($link, $sql);

    $table_pass = "";

 if (mysqli_num_rows($result) > 0) {

 while ($rows = mysqli_fetch_assoc($result)) {
            $table_pass = $rows['password'];
            $fname = $rows['fname'];
            $lname = $rows['lname'];
			$email = $rows['email'];
            //$pic = $rows['profile_pic'];
            //$type = $rows['profile'];

        }
        if ($table_pass == $password) {
            $login = 1;
        } else {
            $status = "Incorrect Password";
			
            $login = 0;
	echo '<script type="text/javascript">',
	 'alert("'.$status.'");',
     '</script>';
        }


    } else {
        $login = 0;
        $status = "User ID not found";
    }
}
if ($login == 1) {
    $_SESSION['UID'] = $UID;
    $_SESSION['fullname'] = $fname." ".$lname;
	$_SESSION['fname'] = $fname;
	$_SESSION['email']=$email;
    //if($pic==null){
		//$_SESSION['pic'] = "lecturer/default.jpg";}
    //else{
	//	$_SESSION['pic'] = $pic;}
   // $_SESSION['type'] = $type;
//print_r($_SESSION['UID']);
    header('Location: loginbody.php');
}
}

//echo $UID;
?>