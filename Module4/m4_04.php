<?php
//cookie example

$cookie_name="fname";
$cookie_value="This is value of cookie";
setcookie($cookie_name,$cookie_value,time()+(86400*10),"/");

?>

<html>
    <head>
        <title><h2>cookie example</h2></title>
    </head>
    <body>
        <h1>Body of the cookie file</h1>


        <?php
            echo "The cookie name is ".$cookiename."<br>";
            

        ?>
    </body>


</html>
