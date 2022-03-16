<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
NAME:<input type="name" name="fname">
<input type="submit" name="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $fname=$_REQUEST['fname'];
    echo $fname;
    
}
?>
<br>
<br>
<a href="get.php?name=santhi&link=google.com">Link</a>