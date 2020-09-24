<?php
session_start();
include 'conn.php';
if (isset($_POST['btn'])) {
$username = $_POST['name'];
$password = $_POST['password'];

//Query the database for user
$sql="SELECT * from users where username = '$username' and pass = '$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 if($row['username'] == $username && $row['pass'] == $password) {
    echo "Login Succcessful  Welcome ".$row['username'];
    $user_id=$row['id'];
      $_SESSION['user_id']=$user_id;
    header("Refresh:0; url=index.php");
 }       
    }
} else {
    echo "Login failed";
     header("Refresh:5; url=login1.php");
}
}
?>