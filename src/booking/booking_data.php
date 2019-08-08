<?php
$del=0;
$conn = mysqli_connect("localhost", "root", "", "webtech");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	
}
session_start();
$y12=$_SESSION['UNAME'];
//print_r($_REQUEST);
if($del==0){
	
	$sql="INSERT INTO booking VALUES ('".$_REQUEST['country']."','".$_REQUEST['package']."','$y12','0','1')";

}
	if(mysqli_query($conn, $sql))
	{
		
		$redirect='thome.php';
     header('Location:'.$redirect);
  exit;
	}
	
	else
		echo "no update !";


?>