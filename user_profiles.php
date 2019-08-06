
<?php
$conn = mysqli_connect("localhost", "root", "", "webtech");
$result = mysqli_query($conn, "SELECT * FROM  tourist_reg where dele ='2'");


	while ($row = mysqli_fetch_array($result)) {
		
	
	?>
	<form  action="del.php">
    <link href='sample.css' rel='stylesheet'>
  Name:<br>
  <input type="text" name="firstname" value="<?php echo $row['name']; ?>">
  <br>
  User Name:<br>
  <input type="text" name="tt" value="<?php echo $row['uname']; ?>">
  <br>

  Email:<br>
  <input type="text" name="firstname" value="<?php echo $row['email']; ?>">
  <br>
  Phone Number:<br>
  <input type="text" name="firstname" value="<?php echo $row['phn_num']; ?>">
  <br>
  Address:<br>
  <input type="text" name="firstname" value="<?php echo $row['address']; ?>">
  <br>
  City:<br>
  <input type="text" name="firstname" value="<?php echo $row['city']; ?>">
  <br>
  country:<br>
  <input type="text" name="firstname" value="<?php echo $row['country']; ?>">
  <br>
  Delete ?:<br>
  <select name="ap">

  <option value="0">YES</option>
  <option value="1">NO</option>
  
  
</select>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
		
	
	<?php
}
	?>
	