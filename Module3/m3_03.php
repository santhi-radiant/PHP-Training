<html>
<head>
    <title>
        <h1>Data Types - Classes and Objects</h1>
    </title>
</head>
<body>
    <h2>Data Types</h2>

<?php
//string
$str="Hello";
$s="10";
echo $str.$s.'<br>';
//integer
$in=50;
var_dump($in);
//float
$flo=35.6;
var_dump($flo);
//bool
$bool=TRUE;
var_dump($bool);
//null
$condition=null;
var_dump($condition);

?>
<h3>classes and objects</h3>
<?php
//class creation
class Fruit
{
    function fname()
    {
        $this->name="Apple";
    }
}
//object creation
$obj=new Fruit();
$obj->fname();

?>
    
</body>

</html>