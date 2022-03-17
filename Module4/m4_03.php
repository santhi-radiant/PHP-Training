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
/* 
Write file
*/
$myfile=fopen("writefile.txt","w")or die("unable to create file");
$value1="This is First content to write in file.";
fwrite($myfile,$value1);
$value2="This is Second content to write in file.";
fwrite($myfile,$value2);
fclose($myfile);
?>