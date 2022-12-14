<?php

$conn=mysqli_connect("localhost","root","","uroci");
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="Insert into users(Username,Password) Values('$username','$password')";
   mysqli_query($conn,$sql);

 
  
    
}
?>