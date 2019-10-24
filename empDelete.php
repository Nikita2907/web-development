
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

$sql =  "delete from employee where emp_code='$_GET[id]'";
$result = mysqli_query($conn, $sql);
if ($result)
	header("refresh:1; url=empDisplay.php");
else
	echo "Not deleted";
?>
