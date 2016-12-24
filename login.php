<?php require 'includes/header.php'; ?>
<?php require 'functions/connection.php'; ?>
<link href="Bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="Bootstrap/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="css/login.css" rel="stylesheet">
	
<html>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <div id="my-tab-content" class="tab-content">

                        <div class="tab-pane active" id="login">

                            <img class="profile-img"
                                 src=""
                                 alt="">

                            <form class="form-signin" action="loginbody.php" method="post">
                                <input name="UID" type="text" class="form-control" placeholder="Username" required
                                       autofocus>
                                <input name="pass" type="password" class="form-control" required>
                                <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In"/>
                            </form>
                            <div id="tabs" data-tabs="tabs">
                                <p class="text-center"><a href="join.php">Need an Account?</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








<?php
$login = 0;
$status = "";
if (isset($_POST['UID'])) {

    $UID = $_POST['UID'];
    $pass = $_POST['pass'];
    //$password = md5($pass);
	$password = $pass;

    $sql = "select * from User where UID='$UID'";
    $result = mysqli_query($conn, $sql);

    $table_pass = "";

 if (mysqli_num_rows($result) > 0) {

 while ($rows = mysqli_fetch_assoc($result)) {
            $table_pass = $rows['password'];
            $fname = $rows['fname'];
            $lname = $rows['lname'];
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
	//session_start();
    $_SESSION['UID'] = $UID;
    //$_SESSION['position'] = "Lecturer";
    $_SESSION['name'] = $fname;
    $_SESSION['name1'] = $lname;
    //if($pic==null){
		//$_SESSION['pic'] = "lecturer/default.jpg";}
    //else{
	//	$_SESSION['pic'] = $pic;}
   // $_SESSION['type'] = $type;
//print_r($_SESSION['UID']);
    header('Location: loginbody.php');
}

//echo $UID;

?>
</body>
</html>