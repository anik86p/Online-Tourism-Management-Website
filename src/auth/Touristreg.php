<?php
$del=1;
session_start();
$conn = mysqli_connect("localhost", "root", "", "webtech");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	
}
$y=$_REQUEST['name'];
$y7=$_REQUEST['pwd'];
$y77=$_REQUEST['pwd1'];
$y1=$_REQUEST['uname'];
$y2=$_REQUEST['email'];
$y3=$_REQUEST['phn'];
$y4=$_REQUEST['add'];
$y5=$_REQUEST['city'];
$y6=$_REQUEST['country'];
if(isset($y) && isset($y1) && isset($y2))
{
	$del=0;
}
if($y7==$y77)
{
	$del=0;
}


//print_r($_REQUEST);
if($del==0){
	
	$sql="INSERT INTO tourist_reg VALUES ('".$_REQUEST['name']."','".$_REQUEST['uname']."','".$_REQUEST['pwd']."','".$_REQUEST['email']."','".$_REQUEST['phn']."','".$_REQUEST['add']."','".$_REQUEST['city']."','".$_REQUEST['country']."','".$_REQUEST['gender']."','2')";

}

	if(mysqli_query($conn, $sql))
	{
		$redirect='Home.html';
      header('Location:'.$redirect);
	}
	



?>


