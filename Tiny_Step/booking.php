<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="booking.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>Appoinment Booking</h1>
	</div>
	
<!-- result -->
<?php 
	$des_id = isset($_GET['des_id'])?$_GET['des_id']:"";
 ?>
					<?php 
					include('server.php');
							$sql="SELECT * FROM designers WHERE des_id = $des_id ";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $des_id   = $row["des_id"];
							        $designername 	= $row["designername"];
							        $designerexpertise 	= $row["designerexpertise"];
							        $designercontact 	= $row["designercontact"];
							    }
							}
							$conn->close();
					?>
		<div class="container">
			<div class="form">
				<form action="" method="post" class="body" enctype="multipath/form-data">
					<label>
						<input style="width:100%; height:30px;" type="text" name="designername" value="<?php echo  $designername; ?>" >
					</label><br><br>

 					<label>
						<input style="width:100%; height:30px;" type="text" name="designercontact" value="<?php echo $designercontact; ?>" />
					</label><br><br>
 					
					<label>
						<input style="width:100%; height:30px;" type="text" name="designerexpertise" value="<?php echo $designerexpertise; ?>" >
					</label><br><br>

					<label>
						<input style="width:100%; height:30px;" type="text" name="name" placeholder="Name" value="">
					</label><br><br>

 					<label>
						<input style="width:100%; height:30px;" type="text" name="contact" placeholder="Contact No" value=""/>
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="email" name="email" placeholder="Email" value=""/>
					</label><br><br>
 					
					<label>
						<input style="width:100%; height:30px;" type="text" name="address" placeholder="Address" value="">
					</label><br><br>
					<label>
						<input style="width:100%; height:30px;" type="date" name="dates" placeholder="date" value="">
					</label><br><br>
					<label>
						<select style="width:100%; height:30px;" name="tyme" required>
										<option value="">Time</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
						</select>
					</label><br><br>
					<label>
						<select style="width:100%; height:30px;" name="payment" required>
										<option value="">Payment</option>
										<option value="Cash">Cash</option>
										<option value="Card">Card</option>
						</select>
					</label><br><br>
					<label>
						  <input style="width:100%; height:30px;" type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:80px; height:30px;margin-left:500px;" name="submit" type="submit" >Confirm</button> 


				</form> <br><br>
			</div>
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('server.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (designername,designercontact,designerexpertise,name,contact,email,address,dates,tyme,payment)
							VALUES ('" . $_POST["designername"] . "','" . $_POST["designercontact"] . "','" . $_POST["designerexpertise"] . "','" . $_POST["name"] . "','". $_POST["contact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 	
</body>
</html>
