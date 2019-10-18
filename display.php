<html>
	<body bgcolor="#ffcccc">
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
			{   echo "<center><table border=2><tr><th>CODE</th><th>NAME</th><th>DEPARTMENT</th><th>DESIGNATION</th></tr>";
				while($row=mysqli_fetch_assoc($result))
			{
				echo "<tr><td>".$row["emp_code"]."</td><td>".$row["emp_name"]."</td><td>".$row["department"]."</td><td>".$row["designation"]."</td></tr>";
			}
			echo "</table></center>";
			}
			else
			{
				echo "no records";
			}
				mysqli_close($conn);
		?>
	</body>
</html>