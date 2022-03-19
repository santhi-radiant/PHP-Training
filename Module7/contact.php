<html>
    <head>
        <title>Contact Form</title>

    </head>
    <body>
        <h1>Contact Form</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" enctype="multipart/form-data">

        <table>
            <tr>
                <td><label>First Name: </label></td>
                <td><input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            <tr>
                <td><label>Last Name: </label></td>
                <td><input type="text" name="lname" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td><label>Email: </label></td>
                <td><input type="text" name="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td><label>Phone Number: </label></td>
                <td><input type="text" name="phone" placeholder="Phone Number"></td>
            </tr>
            <tr>
                <td><label>Message: </label></td>
                <td><textarea name="message"> </textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
</form>

    </body>
</html>

<?php

include 'dbconfig.php';
function valid($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
$data=mysql_escape_string($data);
return $data;

}

if(isset($_POST["submit"]))
{
$name=valid($_POST['name']);
$lname=valid($_POST['lname']);
$uname=valid($_POST['uname']);

$email1=valid($_POST['email1']);
$email2=valid($_POST['email2']);

$pass1=valid($_POST['password1']);
$pass2=valid($_POST['password2']);



if($pass1==$pass2)
{
$pass=md5($pass1);
}
if($email1==$email2)
{
$email=$email1;
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    
                $sql=mysql_query("insert into users(name,lname,uname,email,password,picture)values($name,$lname,$uname,$email,$password,$fileName)") or die(mysql_error());
                echo "Registration Successful..";
                exit();
            

?>
