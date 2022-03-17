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
w-for write the file-it overwrite the file
a-for append the file but it appends file
*/
$myfile=fopen("writefile.txt","a")or die("unable to create file");
$value1="This is Third content to write in file.\n";
fwrite($myfile,$value1);
$value2="This is Fourth content to write in file.\n";
fwrite($myfile,$value2);
fclose($myfile);
?>