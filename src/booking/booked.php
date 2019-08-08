
<?php
$conn = mysqli_connect("localhost", "root", "", "webtech");
$result = mysqli_query($conn, "SELECT * FROM  booking");


	while ($row = mysqli_fetch_array($result)) {
		$v=$row['approve'];
      $v2=$row['del'];
    if($v=='0')
    {
$f="New";
    }

    if($v=='1')
    {
      $f="Approaved";
    }

    if($v=='3')
    {
      $f="Cancelled";
    }
    if($v2=='1')
    {
$f1="Payment Not Done";
    }

    if($v2!='1')
    {
      $f1=$row['del'];
    }

    
	
	?>
	<form action="approve.php" >
    <link href='sample.css' rel='stylesheet'>
    Tocken number:<br>
  <input type="text" name="tt" value="<?php echo $row['token']; ?>">
  <br>
  Package Name:<br>
  <input type="text" name="firstname" value="<?php echo $row['guide_name']; ?>">
  <br>
  Guide Name:<br>
  <input type="text" name="lastname" value="<?php echo $row['package_name']; ?>">
  <br>
Payment status:<br>
  <input type="text" name="PS" value="<?php echo $f1; ?>">
  <br>
Approved status:<br>
  <input type="text" name="AS" value="<?php echo $f; ?>">
  <br>
  
  
  Approve ?:<br>
  <select name="ap">

  <option value="1">YES</option>
  <option value="0">NO</option>
  <option value="3">Cancel</option>
  
</select>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
		
	
	<?php
}
	?>
	