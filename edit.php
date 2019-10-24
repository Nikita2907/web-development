<?php
$server="localhost";
$user="root";
$pass='';
$db="nikita";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
				die("Connection Failed".mysqli_connect_error());
}

$sql =  "select * from employee where emp_code='001'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	echo "Employee Name: <input type='text' value=".$row['emp_name'].">";
    echo "Employee Code: <input type='text' value=".$row['emp_code'].">";
	echo "Employee Department: <input type='text' value=".$row['department'].">";
	echo "Employee Designation: <input type='text' value=".$row['designation'].">";
}
else
{
   echo "No record found";
}
mysqli_free_result($result);
mysqli_close($conn);
?>