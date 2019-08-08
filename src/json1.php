<?php
require("db_rw.php");
$jsonData= getJSONFromDB("select * from booking");
/*$jsonData='[{"id":"10","name":"test","cgpa":"9.99"},
{"id":"123","name":"xyz","cgpa":"3.90"},
{"id":"1256","name":"test2","cgpa":"2.30"}]';*/


$jsn=json_decode($jsonData,true);

foreach($jsn as $v){
	echo "<p>".$v["package_name"]." with cgpa : ".$v["guide_name"]."</p>";
	//echo "<p>".$v->name." with cgpa : ".$v->cgpa."</p>";
}
//echo "<pre>";print_r($jsn);echo "</pre>";
?>