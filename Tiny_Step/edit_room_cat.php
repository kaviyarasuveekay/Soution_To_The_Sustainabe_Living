<?php
include_once 'include/class.user.php'; 
$user=new User(); 
$room_cat=$_GET['name'];
$sql="SELECT * FROM room_category WHERE name='$room_cat'";
$query=mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->edit_room_cat($name, $Email, $Contact, $type,$price,$room_cat);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('".$result."');
         </script>";
    }  
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <div class="container">
        <div class="well">
            <h2>Add Room Category</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="name">Designer :</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email :</label>
                    <input type="text" class="form-control" name="Email" value="<?php echo $row['Email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="Contact">Contact :</label>
                    <input type="text" class="form-control" name="Contact" value="<?php echo $row['Contact'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="type">Designing Category:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <select name="type">
                     <option value="<?php echo $row['type'] ?>"><?php echo $row['type'] ?></option>
                      <option value="Interior Designer">Interior Designer</option>
                      <option value="Floor Plan Designer">Floor Plan Designer</option>
                    </select>
                </div>
               <div class="form-group">
                    <label for="price">Salary:</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>

               <br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>