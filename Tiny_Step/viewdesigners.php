<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="viewdesigners.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:370px; margin-right:380px;">
		<h1>Designers</h1>
	</div>
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('server.php');

					$sql = " SELECT * FROM designers";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>
							</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['designername']."</td>";
								echo "<td>".$row['designeraddress']."</td>";
								echo "<td>".$row['designercontact']."</td>";
								echo "<td>".$row['designeremail']."</td>";
								echo "<td>".$row['designerexpertise']."</td>";
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
