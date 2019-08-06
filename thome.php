<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<link href='thome.css' rel='stylesheet'>
<body>

<ul>

<li><a href="thome.php"  >Home </a></li>
  <li><a href="showGuideDetails.php"  >Select Guide </a></li>
  <li><a  href="showHotelDetails.php">Hotel Availablity</a></li>
  <li><a href="showPackageDetails.php">Packages</a></li>
  <li><a href="booking.php">Booking Tour </a></li>
  <li><a href="payment.html">Payment</a></li>
  <li><a>Cancelation</a></li>
  <li><a href="update.php">Update Profile</a></li>
  
  
  <li><a a href="Home.html" >Sign Out</a></li>
  
 
</ul>
<br>
<br>
<br>
<br>
<br>
<div style="background-color:red;padding:20px;">

<?php
session_start();
header('Cache-control: private');
$y12=$_SESSION['NAME'];
$y13=$_SESSION['UNAME'];
$conn = mysqli_connect("localhost", "root", "", "webtech");
$yy='2';

$row = mysqli_query($conn, "SELECT approve FROM  booking where token='$y13'");
 $result = mysqli_fetch_array($row);
 $x=$result['approve'];
 
 if($x==NULL)
 {
  $x=$yy;
 }
 
 if($x=='3')
 {
print "WELCOME " . $y12 . "You Request has been canceled,Pls call at +8801791208859";
 }
  if($x=='1')
 {
  print "WELCOME " . $y12 . "Your Request is approved successfully";
 }
  if($x=='0')
 {
  print "WELCOME " . $y12 . "Your Request is not yet been approved";
 }
 else 
 {
print "WELCOME " . $y12 . "You have no pending Reqquest";
 }

?>
</div> 
<br>
<br>

<img src="bd3.jpg" width="100%" height="400px" possition="fixed" class="img-rounded" alt="Cinque Terre">
  
</body>
</html>