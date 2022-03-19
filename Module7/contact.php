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
$fname=valid($_POST['fname']);
$lname=valid($_POST['lname']);
$email=valid($_POST['email']);
$phone=valid($_POST['phone']);
$message=valid($_POST['message']);

if($_POST['fname']==" ")
{
    echo 'First Name Required..';
}
else if($_POST['lname']==" ")
{
    echo 'Last Name Required..';
}
else if($_POST['email']==" ")
{
    echo 'Email Required..';
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo 'Enter Valid Email..';
}
else if($_POST['phone']==" ")
{
    echo 'Phone Number Required..';
}
else if($_POST['message']==" ")
{
    echo 'Message Required..';
}
else
{
    $to="info@radiantcloud.co";
    $subject="My Subject for test purpose";
    $message1="Some Message for test purpose";
    $header="From: webmaster@website.com";
    mail($to,$subject,$message1,$header);
    echo '<script type="text/javascript">alert("Your message submitted successfully"); window.location=redirectpage.php; </script>';

}

}
?>
