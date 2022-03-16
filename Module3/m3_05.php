<html>
<head>
    <title>
        <h1>Operators And IF Else</h1>
    </title>
</head>
<body>
    <pre>
    <h2>Operators</h2>
    <h3>Arithmetic Operators</h3>
    <?php
$a=10;
$b=20;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>';
    ?>
    <h3>Increment-Decrement Operators</h3>
    <?php
    $x=100;
    echo $x.'<br>';
    ++$x;
    echo $x.'<br>';
    $x++;
    echo $x.'<br>';
    --$x;
    echo $x.'<br>';
    $x--;
    echo $x.'<br>';
    ?>
<h2>Ifelse condition</h2>
<?php
$age=30;
if($age>=18)
{
    echo 'You Are Eligible to Vote';
}
else
{
    echo 'You Are Not Eligible to Vote';
}

?>
<h2>Switch case</h2>

<?php
$day='monday';
switch($day)
{
    case 'monday':
        echo 'welcome monday';
        break;
    case 'tuesday':
        echo 'welcome tuesday';
        break;
    default:
    echo 'the day is not a monday and tuesday';
    break;
}
?>
    </pre>
</body>

</html>