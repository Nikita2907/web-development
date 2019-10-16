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
			{while($row=mysqli_fetch_assoc($result))
			{
				echo $row["emp_code"]." ".$row["emp_name"]."<br>";
			}
			}
			else
			{
				echo "no records";
			}
				mysqli_close($conn);
		?>
	</body>
</html>