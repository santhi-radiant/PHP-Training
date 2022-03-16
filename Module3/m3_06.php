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
//indexed array
echo '<br>';
for($i=0;$i<count($color);$i++)
{
    echo $color[$i].'<br>';
}
 ?>

<h3>Associative array</h3>
 <?php
 $days=array('Monday'=>"1",
                'Tuesday'=>"2",
                    'Wednessday'=>"3");
$days['Thursday']="4";
echo 'Monday is'.$days['Monday'];
//associative array
echo '<br>';
foreach($days as $value)
{
echo $value.'<br>';
}

 ?>

    </pre>
</body>

</html>