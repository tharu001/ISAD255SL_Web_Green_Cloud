<?php require 'functions/connection.php'; ?>
<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
$password=md5($pass);

$sql ="select * from student where email='$email'";
$result = mysqli_query($conn,$sql);
$status="";
$login=0;
if(mysqli_num_rows($result)>0){
    
    while ($rows=mysqli_fetch_assoc($result)) {
        $table_pass=$rows['password'];
        $fname=$rows['fname'];
        }
    if($table_pass==$password){
        $login=3;
    }else {
      $status="Incorrect Password";
      $login=0;
    }
  
    
}else{
    $login=0;
    $status= "email not found";
    
    
}


if ($login==3){
    $status="Dear Student, ".$fname." login Successfull";
}
echo $status;
?> 
