<?php


session_start();
include 'conn.php';
  

  	$Product_id=$_POST['product_id'];
  	$user_id=$_SESSION['user_id'];
    $quantity=$_POST['qty'];
  	$price=$_POST['product_price'];

    $tprice=$price*$quantity;

  	$sql="insert into cart (Product_id,user_id,tprice,quantity,price) values('$Product_id','$user_id','$tprice',$quantity,'$price')";
  	if ($conn->query($sql) === TRUE) 
		{
    		echo "New record created successfully";
    		
    			echo "
    		<script>
				window.open('cart.php','_self')
				</script>
			";
		

    		
		}
	else{
		echo "error";
	}



?>