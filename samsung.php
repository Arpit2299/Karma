<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/samsung.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="mi.php">MI</a></li>
									<li class="nav-item"><a class="nav-link" href="samsung.php">SAMSUNG</a></li>
									<li class="nav-item"><a class="nav-link" href="vivo.php">VIVO</a></li>
									<li class="nav-item"><a class="nav-link" href="apple.php">APPLE</a></li>
									<li class="nav-item"><a class="nav-link" href="oneplus.php">ONEPLUS</a></li>
								</ul>
							</li>
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login1.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.php">Tracking</a></li>
									
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
				

	</header>
	<main>
		<table>
<?php
include_once 'conn.php';
$sql="SELECT * FROM product WHERE brand_id=1";
$res=mysqli_query($conn,$sql);
$i=0;
if(mysqli_num_rows($res)>0) {
    while($row =mysqli_fetch_assoc($res)){
      if($i%4==0){
        echo "<tr>";
    }
		?>
		<td>

<div class="container-fluid">
	<div class="row" style="margin-top: 100px; margin-left: 100px;">
	<div class=" col-md-12">
						<div class="single-product">
							<img class="img-fluid" <?php echo 'src="'.$row["image"].'"';?> alt="" style="width: 275px;height: 250px;">

							<div class="product-details">
								
								 <?php echo  "<h6><a href='viewmore.php?id=".$row["id"]."'>".$row['p_name']."</a><br><h6>";?> 
								<!-- echo  "<td><h3><a href='individual.php?id=".$row["id"]."'>".$row['name']."</a><br><h3></td>"; -->
								<div class="price">
									<h6>₹ <?php echo $row['p_price'] ?> </h6>
								</div>
								<!-- <div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									 <a href="" class="social-info"> 
										<span class="lnr lnr-move">
											
										</span>
										<p class="hover-text">view more</p>
									</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
		</div>
</td>
		<?php 
  if($i%3==3){
    echo "</tr>";
}$i++;
}
    }
?>
</table>
	</main>

</body>
</html>