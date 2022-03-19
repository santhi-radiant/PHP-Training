<!DOCTYPE html>
<html>
    <head><title>Login Page</title></head>
<body>
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
    $uname=mysql_escape_string($_POST['uname']);
    $pass=mysql_escape_string($_POST['password']);
    $pass=md5($pass);
    $qry="select * from users where uname='".$uname."' and password='".$pass."'";

    $sql=mysqli_query($con,$qry);
    $count=mysql_num_rows($sql);
    $row=mysqli_fetch_assoc($sql);
    if($count>0)
    {
        sesstion_start();
        $_SESSION['login_status']=true;
        $_SESSION['uname']=$row['uname'];
        $_SESSION['name']=$row['name'];
        $_SESSION['lname']=$row['lname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['picture']=$row['picture'];

        header('Location:profile.php');
    }
    else
    {
        header('Location:login.php');
    }


}



?>