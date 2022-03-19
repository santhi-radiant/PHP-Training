<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
<body>
    <h1>Login Page    </h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">


    <input type="text" name="uname" placeholder="User Name">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php
include 'dbconfig.php';
if(isset($_POST['submit']))
{
   echo $uname=mysql_escape_string($_POST['uname']);
 echo   $pass=mysql_escape_string($_POST['password']);
 echo   $pass=md5($pass);
    $qry="select * from users where uname='".$uname."' and password='".$pass."'";

    $sql=mysqli_query($con,$qry)or die(mysql_error());
    $count=mysqli_num_rows($sql);
    $row=mysqli_fetch_array($sql,MYSQLI_ASSOC)or die(mysql_error());
    if($count>0)
    {
        session_start();
        $_SESSION['login_status']=true;
       echo $_SESSION['uname']=$row['uname'];
        $_SESSION['name']=$row['name'];
        $_SESSION['lname']=$row['lname'];
        $_SESSION['email']=$row['email'];
      echo  $_SESSION['picture']=$row['picture'];

        header('Location:profile.php');
    }
    else
    {
        header('Location:login.php');
    }


}



?>