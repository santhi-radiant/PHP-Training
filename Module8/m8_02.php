<?php
//connect mysql database using pdo
$server_name='localhost';
$username='root';
$password='';
$dbname='db_lco_demo';
try
{
    $conn=new PDO("mysql:host=$server_name;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'There was a successful connection...';
}
catch(PDOException $e)
{
    echo 'connection failed'.$e->getMessage();
}



?>