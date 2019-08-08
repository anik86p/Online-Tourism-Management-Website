<?php ob_start(); ?>
<?php

$del=0;
$conn = mysqli_connect("localhost", "root", "", "webtech");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	
}
$y=$_REQUEST['ap'];
$y2=$_REQUEST['tt'];
echo $y2;

session_start();
$y12=$_SESSION['UNAME'];
//print_r($_REQUEST);
if($y=='1'){
	
	$sql="UPDATE booking SET approve = '1' where token='$y2'  ";
}
if($y=='0'){
	
	$sql="UPDATE booking SET approve = '0' where token='$y2' ";
}
if($y=='3'){
	
	$sql="UPDATE booking SET approve = '3' where token='$y2' ";
}
	

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
	}
	else

	echo "no update !";


?>