<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
</head>
<body>
    <div class="container">
        <div class="contact-parent">
            <div class="contact-child child2">
                <form class="inside-contact" method="post">
                    <h2>Contact Us</h2>
                    <h3>
                        <span id="confirm">
                    </h3>
                    <p>Name</p>
                    <input id="txt_name" name="name" type="text" Required="required">
                    <p>Email</p>
                    <input id="txt_email" name="email" type="text" Required="required">
                    <p>Phone</p>
                    <input id="txt_phone" name="phone" type="text" Required="required">
                    <p>Subject</p>
                    <input id="txt_subject" name="subject" type="text" Required="required">
                    <p>Message</p>
                    <textarea name="feedback" id="txt_message" rows="5" cols="20" Required="required"></textarea>
                    <input name="submit" type="submit" id="btn_send" value="SEND">

                    <?php 
							include('server.php');
							if(isset($_POST['submit'])){
							$sql = "INSERT INTO feedback (name,email,phone,subject,feedback)	VALUES ('" . $_POST["name"] ."','" . $_POST["email"] ."','" . $_POST["phone"] ."','" . $_POST["subject"] ."','" . $_POST["feedback"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Thanks for your feedback!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					
 			        ?>
                </form><br>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>
</body>
</html>
			
				</form> 
				<br>
	</div>
</div>
</body>
</html>
