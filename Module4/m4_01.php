<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
NAME:<input type="name" name="name">
<input type="submit" name="submit" value="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($fname))
    {
        echo 'Name field Empty ';
    }
    else
    {
    $fname=$_REQUEST['name'];
    echo $fname;
    }
}
?>
