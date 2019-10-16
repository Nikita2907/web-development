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
			$ecode=$_POST['txt1'];
			$ename=$_POST['txt2'];
			$sql="Insert into employee(emp_code,emp_name) values('$ecode','$ename')";
			if(mysqli_query($conn,$sql))
			{
				echo "Record Added Successfully....!";
			}
			else
			{
				echo "error";
			}
				mysqli_close($conn);
		?>
	</body>
</html>