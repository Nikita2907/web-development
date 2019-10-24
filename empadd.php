<html>
<body>
<?php
$server="localhost";
$user="root";
$pass="";
$dbname="employee";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn)
{
 die("Connection failed ".mysqli_connect_error());
}
$ecode=$_POST['txt1'];
$ename=$_POST['txt2'];
$sql="Insert into employee(EmpCode,EmpName) values('$ecode','$ename')";
if(mysqli_query($conn,$sql))
{
 echo "Record added succesfully";
}else
{
echo "ERROR";
}
mysqli_close($conn);
?>

</body>
</html>
