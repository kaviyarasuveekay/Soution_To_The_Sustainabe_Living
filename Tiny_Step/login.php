<?php session_start();  ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login1.css" />
</head>

<body>
    <div class="SignupContent">
        <h1 class="sign">Login</h1>
        <form class="Box" action="login.php" method="POST">
            <input type="email" name="email"  placeholder="Email" required>
            <input type="password" name="password"  placeholder="Password" required>
            <input type="submit" name="submit">
				<?php 
					$_SESSION['patient']="";
							
							include('server.php');
							if(isset($_POST["submit"])){
							$sql= "SELECT * FROM users WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('home.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


		</form> <br>&nbsp;&nbsp;&nbsp;
		<br>
	</div>	
</body>
</html>

