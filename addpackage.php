<?php
$del=0;
$conn = mysqli_connect("localhost", "root", "", "webtech");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	
}
	
		$target = "uploads/".basename($_FILES['pic']['name']);

		$image = $_FILES['pic']['name'];
		echo $image;	
	
//print_r($_REQUEST);
if($del==0){
	
	$sql="INSERT INTO package_details VALUES ('".$_REQUEST['pname']."','".$_REQUEST['location']."','".$_REQUEST['details']."','".$_REQUEST['cost']."','$image','1')";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
	}
	else
	echo "no update !";
}

?>                