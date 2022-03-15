<html>
<head>
<h1>This Excercise contains</h1>
<br>    <h2>Print System command-Variable-scope of variable- Print vs Echo</h2>
</head>
<body>
    <pre>
    <h3>Print System command</h3>
<?php
echo "Helloworld<br>";
Echo "Helloworld<br>";
echo "Helloworld<br>";
echo "Helloworld<br>";

$x=10;
print $x;
$cmd= "ping 127.0.0.1";
print shell_exec($cmd);
?>

<h3>Variable and scope of variable</h3>
<?php
$var1="Hello World";
echo "I want to Print".$var1."<br>";
$a=10;
$b=20;
echo $a+$b;
$firstVariableIs='Welcome';// camel case variable name
echo '<br>'.$firstVariableIs;


$price=50;//Global variable
function fruitprice()
{
    static $n=1;// static variable remember the value last time used or called
   $price=20;//local variable
   echo' apple price per kg is:'.$price; 
   $n++;
}


fruitprice();
fruitprice();
?>
    </pre>
</body>
</html>