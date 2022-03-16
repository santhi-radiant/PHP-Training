<html>
<head>
    <title>
        <h1>strings-Auto converters</h1>
    </title>
</head>
<body>
    <h2>Strings</h2>

<?php
$string="Hello World! Welcome Back";

echo strlen($string).'<br>';
echo strrev($string).'<br>';
echo strpos($string,"world").'<br>';
echo str_word_count($string).'<br>';

?>
    <h2>Auto converters</h2>
    <?php
    define('wwww',''world wide web);
    echo www;
    ?>
</body>

</html>