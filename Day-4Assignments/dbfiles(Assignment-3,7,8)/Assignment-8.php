<!DOCTYPE html>
<html>
	<head>
		<title>Tech Support Table</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>Name</th>
				<th>Email ID</th>
			</tr>
		<?php
		
			$server="localhost:3306";
			$dbname="web-dev";
			$username="root";
			$password="";

			$conn=mysqli_connect($server,$username,$password,$dbname);	
			if(!$conn) {
				echo 'Connection Failure';
			}

			$sql="SELECT * FROM contact_form";

			$data=mysqli_query($conn,$sql);
			if(mysqli_num_rows($data)>0) {
				while($row=mysqli_fetch_assoc($data)) {
		?>
					<tr>
						<!--<td><?php echo $row['id'];?></td>-->
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['email'];?></td>
					</tr>
		<?php			
				}
			}
		?>
	</table>
	</body>
</html>
