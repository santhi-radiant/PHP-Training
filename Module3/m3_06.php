<html>
<head>
    <title>
        <h1>Arrays and For loop</h1>
    </title>
</head>
<body>
    <pre>
    <h2>Arrays</h2>
    <h3>Indexed array</h3>
 <?php
 $color=array('Red','Green','Blue');
$color[3]="Orange";
echo 'The second color is'.$color[1];
//print all colors
echo '<br>';
for($i=0;$i<count($color);$i++)
{
    echo $color[i];
}
 ?>

    </pre>
</body>

</html>