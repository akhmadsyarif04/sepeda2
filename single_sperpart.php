<?php
include_once('php/connect.php');
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Toko Sepeda Sederhan Tanjung</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/imagezoom.js"></script>
</head>
<body>
<!--header-->
<!-- <div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>
				</ul>
			</div>
			<div class="header-left">

				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div> -->

<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<!-- <div class="ca-r">
					<div class="cart box_1">
					</div>
				</div>
					<div class="clearfix"> </div>
			</div>

		</div>
		</div> -->
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="index.html">Toko Sepeda</a></h1>
				</div>
				<div class=" h_menu4">
					<ul class="memenu skyblue">
						  <li><a class="color8" href="index.php">HOME</a></li>
					      <li><a class="color1" href="#">SEPEDA</a>
					      	<div class="mepanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<ul>
											<li><a href="products.php?id=polygon">Polygon</a></li>
											<li><a href="products.php?id=wimcycle">Wimcycle</a></li>
											<li><a href="products.php?id=wtp">WTP</a></li>

										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<ul>
											<li><a href="products.php?id=family">Family</a></li>
											<li><a href="products.php?id=thrill">Thrill</a></li>

										</ul>
									</div>
								</div>

							  </div>
							</div>
						</li>
					    <li class="grid"><a class="color2" href="#">SPERPART</a>
						  	<div class="mepanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<ul>
											<li><a href="products_sperpart.php?id=frame">Frame</a></li>
											<li><a href="products_sperpart.php?id=helm">Helm</a></li>
											<li><a href="products_sperpart.php?id=headset">Headset</a></li>
											<li><a href="products_sperpart.php?id=pedal">Pedal</a></li>


										</ul>
									</div>
								</div>

							  </div>
							</div>
				    </li>
					<li><a class="color4" href="login.html">Login</a></li>
					<li><a class="color6" href="contact.html">Contact</a></li>
				  </ul>
				</div>

				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Single</h2>
		</div>
	</div>
	<!-- grow -->
		<div class="product">
			<div class="container">

				<div class="product-price1">
				<div class="top-sing">
				<div class="col-md-7 single-top">
						<div class="flexslider">
			  <ul class="slides">
					<?php
					$product = $_GET['kode'];
					$isi = "SELECT * FROM sperpart WHERE id_sperpart LIKE '%$product%'";
			    $result2 = $db->query($isi);

					$no = 1;
					$hasil = $result2->fetch_assoc();
							$uang = $hasil['harga_sperpart'];
							$jlh_desimal = '0';
							$pemisah_desimal = '.';
							$pemisah_ribuan = ',';
							?>
			    <li data-thumb="images/si.jpg">
			        <div class="thumb-image"> <img src="gambar_sepeda/<?= $hasil['gambar']; ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			  </ul>
		</div>

	<div class="clearfix"> </div>
<!-- slide -->


						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

					</div>
					<div class="col-md-5 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?= $hasil['nama_sperpart']; ?></h4>
							<div class="star-on">
								<div class="review">
									Jumlah Barang : <?= $hasil['jumlah_barang']; ?>
								</div>
							<div class="clearfix"> </div>
							</div>

							<h5 class="item_price">Rp. <?= number_format($uang, $jlh_desimal, $pemisah_desimal, $pemisah_ribuan);  ?></h5>
							<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
diam nonummy nibh euismod tincidunt ut laoreet dolore
magna aliquam erat </p> -->


						</div>
					</div>
				<div class="clearfix"> </div>
				</div>
			<!---->

		<div class=" bottom-product">


		</div>
</div>

		<div class="clearfix"> </div>
		</div>
		</div>
<!--//content-->

		<div class="footer-class">
		<p>© 2015 Mattress . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
