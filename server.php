<?php
include("db_rw.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];

if(isset($_REQUEST["uname"])){
	//$sql="select * from student where name='".$_REQUEST["uname"]."'";
	$sql="select * from tourist_reg where uname like'".$_REQUEST["uname"]."%'";
	//echo $sql;
	$a=getDataFromDB($sql);
	if($a==null)
	{
		echo  "Not Available";
	}
	
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){
		
		if($_REQUEST["uname"]==$v["uname"])
		{
		echo "Availabe";
		return false;
		
	    break;
         }
	else if($_REQUEST["uname"]!=$v["uname"])
		{
		echo  "Not Available";
	break;
         }
	}
	
}
?>