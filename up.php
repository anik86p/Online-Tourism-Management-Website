<?php
$flag=0;

$conn = mysqli_connect("localhost", "root", "", "webtech");
session_start();
$y11=$_SESSION['UNAME'];
$row = mysqli_query($conn, "SELECT * FROM  tourist_reg where uname='$y11'");
   $result = mysqli_fetch_array($row);

     $x=$result['name'];
     $x1=$result['uname'];
     $x2=$result['password'];
     $x3=$result['email'];
     $x4=$result['phn_num'];
     $x5=$result['address'];
     $x6=$result['city'];
     $x7=$result['country'];


     $y=$_REQUEST['name'];
     $y1=$_REQUEST['uname'];
     $y2=$_REQUEST['pwd'];
     $y3=$_REQUEST['email'];
     $y4=$_REQUEST['phn'];
     $y5=$_REQUEST['add'];
     $y6=$_REQUEST['city'];
     $y7=$_REQUEST['country'];
   

     if($x!=$y)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET name='$y' where uname='$x1'");
echo $y;

  $flag=1;

     }
     

 if($x1!=$y1)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET uname='$y1' where uname='$x1'");
   $flag=1;
     }
   


 if($x2!=$y2)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET password='$y2' where uname='$x1'");
  $flag=1;

     }
     
    


 if($x3!=$y3)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET email='$y3' where uname='$x1'");
   $flag=1;
     }
   

 if($x4!=$y4)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET phn_num='$y4' where uname='$x1'");
   $flag=1;
     }
  

 if($x5!=$y5)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET address='$y5' where uname='$x1'");
   $flag=1;
     }
     
   

 if($x6!=$y6)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET city='$y6' where uname='$x1'");
   $flag=1;
     }
     
   

if($x7!=$y7)
     {
  $row = mysqli_query($conn," UPDATE  tourist_reg SET country='$y7' where uname='$x1'");
   $flag=1;
     }
    
  $redirect='thome.php';
     header('Location:'.$redirect);
  exit;
?>































