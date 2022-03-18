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

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            $sql=mysql_query("select * from users where email='".$email."'");
            if(mysql_num_rows($sql))
            {
            echo "sorry the email already registered";
            //exit();
            
            }
            else
            {
                $sql=mysql_query("insert into users(name,lname,uname,email,password,picture)values($name,$lname,$uname,$email,$password,$fileName)") or die(mysql_error());
                echo "Registration Successful..";
                exit();
            }

            
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;


?>

<html>
    <head>
        <title>Registration Form</title>

    </head>
    <body>
        <h1>User Registration </h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" enctype="multipart/form-data">
    Name:  <input type="text" name="name" placeholder="Name">
    Last Name:  <input type="text" name="lname" placeholder="Last Name">
    User Name:  <input type="text" name="uname" placeholder="User Name">
    Email:  <input type="text" name="email1" placeholder="Email">
   Confirm Email:  <input type="text" name="email2" placeholder="Confirm Email">
   Password:  <input type="text" name="password1" placeholder="Password">
   Confirm Password:  <input type="text" name="password2" placeholder="Confirm Password">
Picture:<input type="file"name="file" placeholder="Profile Picture">

    <input type="submit" name="submit" value="Register">
</form>

    </body>
</html>