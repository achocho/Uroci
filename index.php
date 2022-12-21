<html>
<head>
    <title>Index Page</title>
    </head>
    <body>
    <h1>Index</h1>
    <form action="logout.php" method='post'>
    <input type="submit" value="Logout">    
    </form>
        
        <form action='UpdatePassword.php' method='post'>
        <input type="password" placeholder="New Password" name="password">
        <input type="submit" value="Change Password">
        </form>
    </body>

</html>
<?php
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['password']))
{
header("Location:login.html");
}
?>