<html>
<body>
<?php

$server="localhost";
$user="root";
$pass="";
$db="nikita";

$conn=mysqli_connect($server,$user,$pass,$db);

if(!$conn)
{
	echo("connection failed").mysqli_connect_error();
}
else
{
	echo "Connection successful"."<br>";
}

$emp_code=$_POST['ecode'];
$emp_name=$_POST['ename'];
$dept=$_POST['dept'];
$desg=$_POST['desg'];
$sql="INSERT INTO employee(emp_code,emp_name,department,designation) VALUES('$emp_code','$emp_name','$dept','$desg')";

if(mysqli_query($conn,$sql))
{
	echo "RECORDS ADDED SUCCESSFULLY";
}
else
{
	echo "Error";
}
mysqli_close($conn);
?>
