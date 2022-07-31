<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="feedback.css" />
</head>
<body>
    <div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Feedback History</h1>
	</div>
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('server.php');
					$sql = " SELECT * FROM feedback";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<tr>
								<th>ID</th>
                                <th>Name</th>
								<th>Email</th>
                                <th>Subject</th>
								<th>FeedBack</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['subject']."</td>";
								echo "<td>".$row['feedback']."</td>";
								echo "</tr>";
						}
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
