<?php

//echo readfile('readfile.txt');
//complete file read operations

$myfile=fopen("readfile.txt","r")or die("unable to reach file");
//echo fread($myfile,filesize("readfile.txt"));
//echo fgets($myfile);//to read a single line 

//read line by line
while(!feof($myfile))
{
    echo fgets($myfile).'<br>';
}
//read character by character
while(!feof($myfile))
{
    echo fgetc($myfile).'<br>';
}


fclose($myfile);

?>