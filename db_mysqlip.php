<?php
$conn = mysqli_connect("localhost", "root", "","testdb2");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ar=array();
	$sql = "SELECT * FROM student";
	if(isset($_REQUEST["cg"]))
		$sql = "SELECT * FROM student where cgpa>".$_REQUEST["cg"];
	echo $sql."<br/>";
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["name"]." is from ".$row["dept"]." with cgpa : ".$row["cgpa"];
		//echo "<br>";
		$ar[]=$row;
	}
	echo "<pre>";print_r($ar);echo "</pre>";
	//echo $ar[0]["name"];
	mysqli_close($conn);
?>