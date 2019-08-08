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
	
	$sql="UPDATE tourist_reg SET dele = '2' where uname='$y2'  ";
}
if($y=='0'){
	
	$sql="UPDATE tourist_reg SET dele = '0' where uname='$y2'  ";

}
	

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
	}
	else

	echo "no update !";


?>