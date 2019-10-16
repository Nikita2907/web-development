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
			$ecode=$_POST['emp_code'];
			$ename=$_POST['emp_name'];
			$sql="INSERT INTO employee(emp_code,emp_name) VALUES('$ecode','$ename')";
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