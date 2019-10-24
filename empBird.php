
<?php
$server="localhost";
$user="root";
$pass='';
$db="s1";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
				die("Connection Failed".mysqli_connect_error());
}

$sql =  "select * from EMPLOYEE where Empcode='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$del_link ="<a href=empDelete.php?id=".$row['Empcode'].">Delete</a>";
$bird_link ="<a href=empBird.php?id=".$row['Empcode'].">".$row['Empcode']."</a>";
echo "<table border='2'><tr><th>Code</th><th>Name</th><th>Department</th><th>Designation</th><th>Delete</th></tr>";
if ($result)
	//header("refresh:1; url=empDisplay.php");
	echo "<tr><td>".$bird_link."</td><td> ".$row["Empname"]."</td><td> ".$row["Empdept"]."</td><td> ".$row["Empdes"]."</td><td> ".$del_link."</td></tr>";
else
	echo "Does not exist";
?>