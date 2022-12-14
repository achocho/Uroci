<?php

$conn=mysqli_connect("localhost","root","","uroci");
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $id="";
 $choice=0;
    for($i=0;$i<10;$i++)
    {
        $choice=rand(1,3);
        if($choice==1){
        $id.=chr(rand(97,122));
        }
        else if($choice==2){
        $id.=chr(rand(65,90));
        }
        else if($choice==3){
        $id.=chr(rand(48,57));
        }
    }
    
    echo "<script>console.log('$id')</script>";
  $sql="Insert into users(Username,Password) Values('$username','$password')";
   mysqli_query($conn,$sql);

 
  
    
}
?>