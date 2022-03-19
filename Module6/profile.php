<?php
require('dbconfig.php');
session_start();
if(isset($_SESSION['login_status'])==false)
{
header('Location:login.php');
echo 'Wrong username or password';
}

?>

<?php

if($_SESSION['picture']=='')
{
    echo "<img width='100' height='100' src='uploads/bot.jpg' alt='Profile Picture'><br>";
}
else{
    echo "<img width='100' height='100' src='uploads/".$_SESSION['picture']."' alt='Profile Picture'><br>";
}
?>
<?php 
echo 'Hello '.$_SESSION['name']."<br>";
?>
<a href="destroy.php">Logout</a>

