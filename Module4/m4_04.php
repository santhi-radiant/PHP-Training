<?php
//cookie example

$cookie_name="fname";
$cookie_value="santhi";
setcookie($cookie_name,$cookie_value,time()+(86400*10),"/");

?>

<html>
    <head>
        <title><h2>cookie example</h2></title>
    </head>
    <body>
        <h1>Body of the cookie file</h1>


        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "The cookie name is ".$cookie_name."<br>";
        }
        else
        {
            echo "Cookie ".$cookie_name."is set<br>";
            echo "Value is ".$_COOKIE[$cookie_name];
        }

        ?>
    </body>


</html>
