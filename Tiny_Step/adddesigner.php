<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<html>
<head>
	<link rel="stylesheet" href="adddesigner.css" />
</head>
<body>
	<div align="center" class="search form-group"  style="background-color: #7faf81; margin-left:350px; margin-right:350px;">
		<h1>ADD Designer</h1>
	</div>
	<div class="container">
		<div class="form">
			<form enctype="multipart/form-data" action=""  method="post" class="body">	
					<label>
					    <input style="width:100%; height:30px;" type="text" name="designername" value="" placeholder="Full name" autocomplete="on">
					</label><br><br>
					<label>
						 <input style="width:100%; height:30px;" type="text" name="designeraddress" value="" placeholder="address" >
					</label><br><br>
					<label>
						 <input style="width:100%; height:30px;" type="text" name="designercontact" value="" placeholder="contact" >
					</label><br><br>

					<label>
						 <input style="width:100%; height:30px;" type="email" name="designeremail"  value="" placeholder="email" >
					</label><br><br>
					
					<label>
						 <select style="width:100%; height:30px;" name="designerexpertise" >
										<option>Interior</option>
										<option>Floor Plan</option>
										</select>
					</label><br><br>
					<label>
					   <input style="width:100%; height:30px;" type="password" name="designerpassword" value="" placeholder="password" >
					</label><br><br>
					<label>
						 <input style="width:100%; height:30px;" type="file" name="pic" value="" id="pic" required>
					</label><br><br>
					
					<button style="border:1px solid #337ab7; background-color: #337ab7; border-radius:8px; width:120px; height:30px;margin-left:400px;" name="submit" type="submit" >Add Designer</button> <br>
			</form>
		</div>
	</div>
					<?php  
						 if(isset($_POST['submit'])){
							$target_dir = "../photo/";
							$target_file = $target_dir . basename($_FILES["pic"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image

						    $check = getimagesize($_FILES["pic"]["tmp_name"]);
						    if($check !== false) {
						        // echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }

							// Check if file already exists
							if (file_exists($target_file)) {
							    echo "<script>alert('Sorry, file already exists.');</script>";
							    $uploadOk = 0;
							}
							//aloow certain file formats
							if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								echo "sorry, only jpg, jpeg, png & gif files are allowed.";
								$uploadok=0;
							}	
						else{
							if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
									include('server.php');
									$sql1 = "SELECT * FROM designers WHERE designeremail= '" . $_POST["designeremail"] . "' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Userid or E-mail already exist!');</script>";
	              					}
	              					else{
									$sql = "INSERT INTO designers (designername,designeraddress,designercontact,designeremail,designerexpertise,designerpassword,pic)
										VALUES ('" . $_POST["designername"] . "','" . $_POST["designeraddress"] . "','" . $_POST["designercontact"] . "','" . $_POST["designeremail"] . "', '" . $_POST["designerexpertise"] . "','" . $_POST["designerpassword"] . "','" . basename($_FILES["pic"]["name"]) ."' )";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
										} else {
										    echo "<script>alert('There was an Error')<script>";
										}
									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							
							
						}
				}
				?>
					<!-- inserting data -->
</body>
</html>