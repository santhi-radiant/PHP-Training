<html>
<head>
<h1>This Excercise contains</h1>
<br>    <h2>Print System command-Variable-scope of variable- Print vs Echo</h2>
</head>
<body>
    <pre>
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
    </pre>
</body>
</html>