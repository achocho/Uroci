<?php
session_start();
$conn=mysqli_connect("localhost","root","","uroci");


if($_SERVER['REQUEST_METHOD']=="POST")
{

    
  $username=$_POST['username'];
  $password=$_POST['password'];
    $password=hash('ripemd160',$password);
  $sql="Select * from users Where Username='$username' and Password='$password'";
  $result=mysqli_query($conn,$sql);
    
  while($row=$result->fetch_assoc())
    {
        echo $row["Username"]."<br>".$row["Password"]."<br>";
    }
  $count=mysqli_num_rows($result);
  if($count==1)
  {
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;
     header("Location:index.php");
  }else
  {
      echo "Wrong username or password";
  }
  
    
}
?>