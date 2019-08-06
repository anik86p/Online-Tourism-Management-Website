<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title >Update Your Own Account</title>
  <meta charset="utf-8">
  <link href='regT.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body >
  
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "webtech");
$y12=$_SESSION['UNAME'];

$row = mysqli_query($conn, "SELECT * FROM  tourist_reg where uname='$y12'");
   $result = mysqli_fetch_array($row);

     $x=$result['name'];
     $x1=$result['uname'];
     $x2=$result['password'];
     $x3=$result['email'];
     $x4=$result['phn_num'];
     $x5=$result['address'];
     $x6=$result['city'];
     $x7=$result['country'];

  ?>



  
<div class="x">
<div class="container">
  <h2 class="n2">Update Your Own Account</h2>
 <form action="up.php" method="post">

    <div class="form-group">
      <label for="Name" class="n">Name:</label>
      <input type="text" class="form-control"  id="Name" name="name" value=" <?php echo $x; ?>">
    </div>
    
     <div class="form-group">
      <label for="uname" class="n">User Name:</label>
      <input type="text" class="form-control"  id="uname" name="uname" value="<?php echo $x1; ?>">
    </div>
    <div class="form-group">
      <label for="pwd" class="n">Password:</label>
      <input type="text" class="form-control" id="pwd" name="pwd" value="<?php echo $x2; ?>">
    </div>
    
     <div class="form-group">
      <label for="email" class="n">Email:</label>
      <input type="text" class="form-control"  id="email" name="email" value='<?php echo $x3; ?>'>
    </div>
     <div class="form-group">
      <label for="phn" class="n">Phn Number:</label>
      <input type="text" class="form-control" id="phn" name="phn" value='<?php echo $x4; ?>'>
    </div>
    
     <div class="form-group">
      <label for="add" class="n">Residential Address:</label>
      <input type="text" class="form-control"  id="add" name="add" value='<?php echo $x5; ?>'>
    </div>
     <div class="form-group">
      <label for="city" class="n">City:</label>
      <input type="text" class="form-control" id="city" name="city" value='<?php echo $x6; ?>'>
    </div>

    <div class="form-group">
      <label for="country" class="n">Country:</label>
      <input type="text" class="form-control" id="country" name="country" value='<?php echo $x7; ?>'>
    </div>
    <br>
    <br>
    

    <button type="submit" class="btn-btn-default">Update</button>
  </form>
</div>
</div>





</body>
</html>
