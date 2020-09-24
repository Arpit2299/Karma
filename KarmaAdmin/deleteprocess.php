
<?php
include_once('conn.php');
if (isset($_POST['submit'])){
    $pname=$_POST['p_name'];

    $sql="Delete FROM product WHERE p_name='$pname'";
}

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>

