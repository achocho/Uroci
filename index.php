<html>
<head>
    <title>Index Page</title>
    </head>
    <body>
    <h1>Index</h1>
    
    </body>

</html>
<?php
session_start();
if(!isset($_SESSION['name']) or !isset($_SESSION['pass']))
{
header("Location:login.html");
}
?>