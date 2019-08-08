<?php ob_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link href='styleT.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<div class="login">
<div class="container">
  <h3 class="form-group">Conform a Package </h3>
  <form action="booking_data.php">
    <div class="form-group">
      

      <?php

$conn = mysqli_connect("localhost", "root", "", "webtech");
$result = mysqli_query($conn, "SELECT name FROM guide_details GROUP BY name ORDER BY name ASC");
$result2 = mysqli_query($conn, "SELECT package_name FROM package_details GROUP BY package_name ORDER BY package_name ASC");
 
while($row = mysqli_fetch_array($result))
{
 $Gname .= '<option value="'.$row["name"].'">'.$row["name"].'</option>';
}

while($row = mysqli_fetch_array($result2))
{
 $Pname .= '<option value="'.$row["package_name"].'">'.$row["package_name"].'</option>';
}

  ?>

    <div class="form-group">
      <label for="pwd">Select Guide:</label>

      <select name="country" id="country" class="form-control action">
    <option value=" hi">Select Guide</option>
    <?php echo $Gname; ?>
   </select>
    </div>
<div class="form-group">
      <label for="pwd">Select Package:</label>
      <select name="package" id="country" class="form-control action">
    <option value=" hi">Select Package</option>
     <?php echo $Pname; ?>
   </select>
    </div>

    <div class="form-group">
      <?php
session_start();
$y12=$_SESSION['UNAME'];
?>
      <label for="un">Tocken Number:</label>
      <input type="text" value="<?php echo htmlspecialchars($y12); ?>"  class="form-control" id="x" name="tocken">
    </div>   
   <p>Collect the tocken number and conform the tour in payment section.</p>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>
</body>
</html>
