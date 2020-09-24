<?php
session_start();
include 'conn.php';

$user_id = $_SESSION['user_id'];
$address = $_POST['add1'];
$city = $_POST['city'];
$country = $_POST['country'];
$postcode = $_POST['zip'];

$sql="INSERT INTO checkout(user_id,address,city,country,postcode)
VALUES('$user_id','$address','$city','$country','$postcode')";

$result=mysqli_query($conn,$sql);

echo "
                     
                        <script>
                        window.open('confirmation.php','_self')
                        </script>
                      ";


?>