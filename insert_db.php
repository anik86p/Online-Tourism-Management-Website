<?php
$conn = mysqli_connect("localhost", "root", "", "record");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//print_r($_REQUEST);
if(isset($_REQUEST["uname"]) && isset($_REQUEST["cg"])  && isset($_REQUEST["dpt"])){
	
	$sql="INSERT INTO student VALUES (NULL,'".$_REQUEST['uname']."','".$_REQUEST['cg']."','".$_REQUEST['dpt']."')";
	echo $sql;
	if(mysqli_query($conn, $sql)){
		echo "New records updated successfully";
	}
}
else{
	echo "Invalid parameter !";
}
?>