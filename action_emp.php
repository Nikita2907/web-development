<?php
$server="localhost";
$user="root";
$password=" ";
$db="nikita";



$conn=mysqli_connect($server,$user,$password,$db);

if(!conn)
{
die("Connection failed".mysqli_connect_error());
}else{
echo "Connected Successfully";
}
$e_code=$_POST['emp_code'];
$e_name=$_POST['emp_name'];

$sql="INSERT INTO employee(emp_code,emp_name) VALUES('$e_code','$e_name')";

if(mysqli_query($conn,$sql))
{
echo "added successfully";
}else{
echo "error....";
}

mysqli_close($conn);
?>