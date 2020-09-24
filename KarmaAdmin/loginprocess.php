
<?php
include_once('conn.php');
if (isset($_POST['btn'])) {
$username = $_POST['username'];
$password = $_POST['password'];


//Query the database for user
$sql="SELECT * from adminuser where UserName = '$username' and Password = '$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 if($row['UserName'] == $username && $row['Password'] == $password) {
    echo "Login Succcessful  Welcome ".$row['UserName'];
header("Refresh:2; url=index.html");
 }       
    }
} else {
    echo "Login failed";
}

}

?>
