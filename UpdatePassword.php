<?php
session_start();
$conn=mysqli_connect("localhost","root","","uroci");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_SESSION['username'];
    $password=$_POST['password'];
    $password=hash("ripemd160",$password);
    $sql="Update users set Password='$password' Where Username='$name';";
    mysqli_query($conn,$sql);
    $_SESSION['password']=$password;
    header("Location:index.php");
}
?>