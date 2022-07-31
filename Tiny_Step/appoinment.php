<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="appoinment.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Booking History</h1>
	</div>

	<!-- this is for donor registraton -->
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('server.php');

					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
							<tr>
								<th>Designer Type</th>
								<th>My Designer</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['designerexpertise']."</td>";
								echo "<td>".$row['designername']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
								echo "<td><a href='cancel.php?id=".$row['booking_id']."'>Cancel</a></td>";
								
						?>
								
						<?php
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


	
	</div>	
</body>
</html>
