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
/*$emp_code=$_POST['ecode'];
$emp_name=$_POST['ename'];
$dept=$_POST['dept'];
$desg=$_POST['desg'];
*/
$emp_name=$_POST['ename'];
$sql="DELETE FROM employee WHERE emp_name='$emp_name'";
if(mysqli_query($conn,$sql))
{
	echo "RECORD DELETED!";
	
}   
else
{
	echo "Error";
}
mysqli_close($conn);
?>