<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<link rel="stylesheet" href="room.css" />
</head>
<body>
<section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <nav>
                        <div id="logo">Tiny Steps</div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="#">My Profile</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li>
                                <label for="drop-2" class="toggle">Services +</label>
                                <a href="#">Services +</a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="interior.html">Interior</a></li>
                                    <li><a href="floorplan.html">Floor Plan</a></li>
									<li><a href="appoinment.php">Appoinment Details</a></li>
                                </ul>
                            </li>
                            <div class="log">
                                <li><a href="#">Log Out</a></li>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><br>
    <div class="container">    
    <?php 
					include('server.php');
					$sql = " SELECT * FROM designers";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' class='styled-table'>
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Mobile</th>
									<th>Email</th>
									<th>Expertise in</th>
									<th>Book</th>
								</tr>
							</thead>";
						while($row=mysqli_fetch_array($result)){
								echo "<tbody>";
								echo "<tr>";
								echo "<td>".$row['des_id']."</td>";
								echo "<td>".$row['designername']."</td>";
								echo "<td>".$row['designercontact']."</td>";
								echo "<td>".$row['designeremail']."</td>";
								echo "<td>".$row['designerexpertise']."</td>";
						?>
							<td><a style="color:black;" href="booking.php?des_id=<?php echo $row['des_id'] ?>">Book</a></td>
						<?php 		
								echo "</tr>";
						}
								echo "</tbody>";
						echo "</table>";
					}
					?>
    </div>
</body>
</html>
