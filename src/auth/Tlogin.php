<?php
$flag=0;
session_start();
     $y=$_REQUEST['un'];
     $y1=$_REQUEST['pwd'];
$conn = mysqli_connect("localhost", "root", "", "webtech");
$row = mysqli_query($conn, "SELECT  password  FROM  tourist_reg where uname='$y'");
$row1 = mysqli_query($conn, "SELECT  name  FROM  tourist_reg where uname='$y'");
   $result = mysqli_fetch_array($row);
   $result2 = mysqli_fetch_array($row1);

    $x11=$result2['name'];
    $_SESSION['NAME'] = $x11;
    $_SESSION['UNAME'] = $y;
     $x1=$result['password'];
    
     
$redirect='thome.php';
     header('Location:'.$redirect);
  exit;

     if(!strcmp($x1,$y1) )
     {

  $flag=1;

  header('Location:'.$redirect);
  exit;
     }
     
  
 
  if($flag==0)
   echo "Login Failed";
else
    echo "Log in Successfully";
?>































