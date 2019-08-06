<?php
$flag=0;


    $x11=$_REQUEST['un'];     
   
     $x1=$_REQUEST['pwd']; 
     $pass="7736259";
     $uname="admin86p";
    
     


     if($x1 == $pass && $x11 == $uname )
     {

  $redirect='Ahome.html';
     header('Location:'.$redirect);
  exit;
     }
     
  
 
 else 
   echo "Login Failed";

?>































