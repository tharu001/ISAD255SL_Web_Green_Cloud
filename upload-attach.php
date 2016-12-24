<?php require 'functions/connection.php'; ?>
<html><body>

<?php
if (isset($_POST['submit1'])) {
	$name=$_FILES['file1']['name'];
	if($name!=null){
	$modid=$_GET['modid'];

	$bad = array_merge(array_map('chr', range(0,31)),array("<", ">", ":", '"', "/", "\\", "|", "?", "*"));
	$result = str_replace($bad, "", $name);

//echo "$name <br>";
//echo "$result";
$size=$_FILES['file1']['size'];
$type=$_FILES['file1']['type'];
$temp=$_FILES['file1']['tmp_name'];

date_default_timezone_set("Asia/Calcutta");
$dt=date("Y-m-d h:i:s");

    $insert=false;

$checkFile="uploads/".$result;

if (file_exists($checkFile)) {
    // file already exists error
   // echo "You have already uploaded this file.<br>";

    $actual_name = pathinfo($result,PATHINFO_FILENAME);
    $original_name = $actual_name;
    $extension = pathinfo($result, PATHINFO_EXTENSION);

    $i = 1;
    while(file_exists('uploads/'.$actual_name.".".$extension))
    {
        $actual_name = (string)$original_name."(".$i.")";
        $result = $actual_name.".".$extension;
        $i++;
    }
}
    move_uploaded_file($temp,"uploads/".$result);
    $insert=mysqli_query($conn,"insert into attachment(filename,type,size,date,modid)values('{$result}','{$type}','{$size}','{$dt}','{$modid}')");

    if($insert){
   header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else{

    die(mysqli_error($conn));
}
	}else{echo'File not Found';}
    
}

?>


</body></html>
