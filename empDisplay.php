
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
$sql =  "select * from employee";

; 
 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0)
{
	echo "<table border='2'><tr><th>Code</th><th>Name</th><th>Department</th><th>Designation</th><th>Delete</th></tr>";
	while($row = mysqli_fetch_assoc($result))
	{
		$del_link ="<a href=empDelete.php?id=".$row['emp_code'].">Delete</a>";
		echo "<tr><td>".$row["emp_code"]."</td><td> ".$row["emp_name"]."</td><td> ".$row["department"]."</td><td> ".$row["designation"]."</td><td> ".$del_link."</td></tr>";
	}
}
else
{
   echo "No record found";
}
mysqli_free_result($result);
mysqli_close($conn);
?>
	