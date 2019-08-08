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
	
	$sql="INSERT INTO hotel_details VALUES ('".$_REQUEST['hname']."','".$_REQUEST['location']."','".$_REQUEST['add']."','".$_REQUEST['phn']."','".$_REQUEST['rent']."','".$_REQUEST['ac']."','$image','1')";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
	}
	else
	echo "no update !";
}

?>