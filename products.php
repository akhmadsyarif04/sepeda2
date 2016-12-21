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
					<h1><a href="index.php">Toko Sepeda</a></h1>
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
<!-- products -->
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Products</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">
				<div class=" bottom-product">
					<?php
					$pilihanmenu = $_GET['id'];
					$perpage = 12;
			    $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
			    $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

			    $isi = "SELECT * FROM sepeda WHERE merek LIKE '%$pilihanmenu%' ORDER BY nama_sepeda ASC LIMIT $start, $perpage";
			    $result2 = $db->query($isi);

			    $result = $db->query("SELECT *FROM sepeda");
			    $total = $result->num_rows;

			    $pages = ceil($total / $perpage);

			        $no = 1;
			        while ($hasil = $result2->fetch_assoc()) {
			            $uang = $hasil['harga_sepeda'];
			            $jlh_desimal = '0';
			            $pemisah_desimal = '.';
			            $pemisah_ribuan = ',';
			            ?>
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="single.php?kode=<?= $hasil['kode_sepeda']; ?>"><img class="img-responsive" src="gambar_sepeda/<?= $hasil['gambar']; ?>" alt="">
						</a>
						</div>
						<p class="tun"><span><?= $hasil['merek']; ?></span><br><?= $hasil['nama_sepeda']; ?></p>
						<div class="ca-rt">
							<p class="number item_price"><i> </i>Rp. <?= number_format($uang, $jlh_desimal, $pemisah_desimal, $pemisah_ribuan);  ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<?php
					$no++;
			}//end while
			?>
					<div class="clearfix"> </div>
				</div>
				<h2>Halaman {
				<?php
				for ($i = 1; $i <= $pages; $i++) {
				?>
								<a href="?halaman=<?= $i ?>"><?= $i ?></a>
								<?php
						}//end for
						?>
					}
				</div>

				<div class="pr-btm">
				<h4>Toko Sepeda Sederhana</h4>
					<img class="img-responsive" src="images/profil.jpg" alt="">
					<h6>Tanjung/Tabalong</h6>
					<p>Jln. Jendral Basuki Rahmat Rt.1 Kelurahan Agung</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- products -->

		<div class="footer-class">
		<p>© 2015 Mattress . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
