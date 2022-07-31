<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="viewcustomers.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:370px; margin-right:395px;">
		<h1>Customers</h1>
	</div>				<?php 
					include('server.php');

					$sql = " SELECT * FROM users";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
							<tr>
								<th>Customer ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
							</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
								echo "<td>".$row['contact']."</td>";
								echo "</tr>";
						}
								echo "</tbody>";
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>	
</body>
</html>
