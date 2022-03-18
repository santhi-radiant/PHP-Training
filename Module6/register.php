<?php
?>

<html>
    <head>
        <title>Registration Form</title>

    </head>
    <body>
        <h1>User Registration </h1>

        <form action="upload.php" method="post" role="form">
    Name:  <input type="text" name="name" placeholder="Name">
    Last Name:  <input type="text" name="lname" placeholder="Last Name">
    User Name:  <input type="text" name="uname" placeholder="User Name">
    Email:  <input type="text" name="email1" placeholder="Email">
   Confirm Email:  <input type="text" name="email2" placeholder="Confirm Email">
   Password:  <input type="text" name="password1" placeholder="Password">
   Confirm Password:  <input type="text" name="password2" placeholder="Confirm Password">


    <input type="submit" name="submit" value="Register">
</form>

    </body>
</html>