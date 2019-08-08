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
	
	$sql="INSERT INTO guide_details VALUES ('".$_REQUEST['gname']."','".$_REQUEST['age']."','".$_REQUEST['phnn']."','".$_REQUEST['ln']."','".$_REQUEST['S']."','$image','1')";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
	}
	else
	echo "no update !";
}

?>