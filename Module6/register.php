<?php
include 'dbconfig.php';
?>

<html>
    <head>
        <title>Registration Form</title>

    </head>
    <body>
        <h1>User Registration </h1>

     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" enctype="multipart/form-data">
    Name:  <input type="text" name="name" placeholder="Name"><br>
    Last Name:  <input type="text" name="lname" placeholder="Last Name"><br>
    User Name:  <input type="text" name="uname" placeholder="User Name"><br>
    Email:  <input type="text" name="email1" placeholder="Email"><br>
   Confirm Email:  <input type="text" name="email2" placeholder="Confirm Email"><br>
   Password:  <input type="password" name="password1" placeholder="Password"><br>
   Confirm Password:  <input type="text" name="password2" placeholder="Confirm Password"><br>
Picture:<input type="file"name="file" placeholder="Profile Picture"><br>

    <input type="submit" name="submit" value="Register">
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

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
$name=valid($_POST['name']);
$lname=valid($_POST['lname']);
$uname=valid($_POST['uname']);

$email1=valid($_POST['email1']);
$email2=valid($_POST['email2']);

$pass1=valid($_POST['password1']);
$pass2=valid($_POST['password2']);



if($pass1==$pass2)
{
$pass1=md5($pass1);
}
if($email1==$email2)
{
$email1=$email1;
}

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
           //mysql_select_db($db,$con);
           /* $qry="select * from users where email='".$email."'";
            $sql=mysqli_query($con,$qry)or die(mysql_error());
            if(mysql_num_rows($sql)>0)
            {
            echo "sorry the email already registered";
            //exit();
            
            }
            else
            { */
                $sql=mysqli_query($con,"insert into users(name,lname,uname,email,password,picture)values('$name','$lname','$uname','$email1','$pass1','$fileName')") or die(mysql_error());
                echo "Registration Successful..";
                exit();
           // }

            
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
             }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
         }
}else{
    $statusMsg = 'Please select a file to upload.';
     // Display status message
echo $statusMsg;
    }
?>