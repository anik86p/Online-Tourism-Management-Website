<?php
$conn = mysqli_connect("localhost", "root", "", "webtech");
$result = mysqli_query($conn, "SELECT * FROM  experience");

  while ($row = mysqli_fetch_array($result)) {   
  ?>
<form>
  <link href='sample.css' rel='stylesheet'>
  Location:<br>
  <input type="text" name="firstname" value="<?php echo $row['location']; ?>">
<br>
   How To Go :<br>
  <input type="text" name="firstname" value="<?php echo $row['how_to_go']; ?>">
  <br>
   Date:<br>
  <input type="text" name="firstname" value="<?php echo $row['date']; ?>">
  <br>
   Cost:<br>
  <input type="text" name="firstname" value="<?php echo $row['cost']; ?>">
  <br>
   Child:<br>
  <input type="text" name="firstname" value="<?php echo $row['child']; ?>">
   <br>
   Experience:<br>
  <input type="text" name="firstname" value="<?php echo $row['experience']; ?>">
  <br>
  <br>
  <form>
  <?php
}
?> 
