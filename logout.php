<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_SESSION['username']=null;
    $_SESSION['password']=null;
    header("Location:login.html");
}

?>