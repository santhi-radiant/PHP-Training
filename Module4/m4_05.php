<?php
//session example
session_start();
echo "The session variable going to set<br>";
$_SESSION["name"]="SuperMan";
$_SESSION["power"]="Fly";
echo "The session variable was set";

?>