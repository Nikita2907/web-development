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
				die("Connection Failed".mysqli_connect_error());
			}
		
			$sql="SELECT * FROM employee";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{    echo "<table border='2'><tr><th>Code</th><th>Name</th></tr>";
				while($row=mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row["emp_code"]."</td><td> ".$row["emp_name"]."</td></tr>";
			}
			echo "</table>";
			}
			else
			{
				echo "no records";
			}
				mysqli_close($conn);
		?>
	</body>
</html>
