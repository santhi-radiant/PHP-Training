<?php

//echo readfile('readfile.txt');
//complete file read operations

$myfile=fopen("readfile.txt","r")or die("unable to reach file");
//echo fread($myfile,filesize("readfile.txt"));
//echo fgets($myfile);//to read a single line 

while(!feof($myfile))
{
    echo fgets($myfile).'<br>';
}

fclose($myfile);

?>