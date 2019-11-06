<?php
$file=fopen("emp.txt","r");
//echo fread($file, filesize("emp.txt"));
//echo filesize("emp.txt");
while(!feof($file))
{
echo fgets($file)."<br>";
}
//echo fgetc($file);
fclose($file);
?>