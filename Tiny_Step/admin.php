<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:interface.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="admin1.css" />
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
                            <li><a href="admin/adddesigner.php">Add Designer</a></li>
                            <li><a href="admin/viewdesigners.php">Show All Designers</a></li>
                            <li><a href="admin/viewcustomers.php">Show All Customers</a></li>
                            <li><a href="admin/viewappoinment.php">Show All Appoinments</a></li>
                            <li>
                                <label for="drop-2" class="toggle">Services +</label>
                                <a href="#">Services +</a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="feedback.php">Feedback</a></li>
                                </ul>
                            </li>
                            
                            <div class="log">
                                <li><a href="logout.php">Log Out</a></li>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><br>
</body>
</html>