<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signin</title>
    <link rel="stylesheet" href="signin1.css" />
</head>
<body>
    <div class="SignupContent">
        <h1 class="sign">Sign in</h1>
            <form enctype="multipart/form-data" class="Box" method="POST" > 
            <input type="text" name="name" value="" placeholder="Full Name" required>
            <input type="email" name="email"  value="" placeholder="Email" required>
            <input type="password" name="password"  placeholder="Password" >
            Gender:<select name="gender" style="width: 200px;height:50px; background-color: whitesmoke;border-radius:20px;" >
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <br>
            <br>
            Contact Information:
            <input type="number" name="contact"  placeholder="Mobile number">
            <br>
            Address details:
            <input type="text" name="home" placeholder="House Number and Society">
            <input type="text" name="street" placeholder="Street Name/Number">
            <input type="text" name="city" placeholder="City">
            <input type="text" name="state" placeholder="State">
            <input type="submit" value="Sign in" name="submit">
            <h1></h1><br><br><br><br><br><br>
        </form>
    </div>  
    <?php
						include('server.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM users WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO users (name,email,password,gender,contact,home,street,city,state)
							VALUES ('" . $_POST["name"] ."','" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["gender"] . "','" . $_POST["contact"] . "', '" . $_POST["home"] . "','" . $_POST["street"] . "', '" . $_POST["city"] . "', '" . $_POST["state"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('login.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?>   
</body>
</html>





				
</body>
</html>