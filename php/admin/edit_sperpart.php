<?php
include_once('../connect.php');
include_once('../sumber.php');

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
<!-- materialize -->
<link href="../../materialize/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../materialize/css/materialize.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="../../materialize/js/materialize.js"></script>
<script src="../../materialize/js/init.js"></script>
<script src="../../materialize/js/jquery-2.1.1.min.js"></script>
<script src="../../materialize/js/materialize.min.js"></script>

<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<link href="../../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="../../js/simpleCart.min.js"> </script>
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
					<script src="../../js/classie.js"></script>
					<script src="../../js/uisearch.js"></script>
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
					<h1><a href="admin.php">Toko Sepeda</a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="admin.php">HOME</a></li>
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
				<li><a class="color4" href="../logout.php">Logout</a></li>
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
			<h2>Edit</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">
				<div class=" bottom-product">
          <table border="0" style="font-size:1.5em; color:#8b8585;">
					<?php
					$kode_edit = $_GET['kode_sperpart'];
			    $isi = "SELECT * FROM sperpart WHERE id_sperpart LIKE '%$kode_edit%' ";
			    $result2 = $db->query($isi);

	        $no = 1;
			        while ($hasil = $result2->fetch_assoc()) {
			            $uang = $hasil['harga_sperpart'];
			            $jlh_desimal = '0';
			            $pemisah_desimal = '.';
			            $pemisah_ribuan = ',';
			            ?>
									<form class="col s12" method="post" enctype="multipart/form-data">
										<div class="row">
							        <div class="input-field col s12">
							          <input name="nama_sperpart" type="text" class="validate" value="<?= $hasil['nama_sperpart'] ?>">
							          <label style="font-size:1em;">Nama Sperpart</label>
							        </div>
							      </div>
										<div class="row">
							        <div class="input-field col s12">
							          <input name="jenis_sperpart" type="text" class="validate" value="<?= $hasil['jenis'] ?>">
							          <label style="font-size:1em;">Jenis Sperpart</label>
							        </div>
							      </div>
										<div class="row">
							        <div class="input-field col s12">
							          <input name="harga_sperpart" type="text" class="validate" value="<?= $hasil['harga_sperpart'] ?>">
							          <label style="font-size:1em;">Harga Sperpart</label>
							        </div>
							      </div>
										<div class="row">
							        <div class="input-field col s12">
							          <input name="jumlah_sperpart" type="text" class="validate" value="<?= $hasil['jumlah_barang'] ?>">
							          <label style="font-size:1em;">Jumlah Sperpart</label>
							        </div>
							      </div>
							       <div class="file-field input-field">
							       <div class="btn">
							         <span>File</span>
							         <input name="gambar" type="file" value="<?= $hasil['gambar'] ?>">
							       </div>
							       <div class="file-path-wrapper">
							         <input class="file-path validate" type="text">
							       </div>
							     </div>
							   <button class="btn waves-effect waves-light" type="submit" name="Simpan">Submit</button>

					<?php
					$no++;
			}//end while
			?>
              </table>
            </form>
            <?php
            if (isset($_POST['simpan'])) {
                $data = array(
                    'gambar' => $_FILES['gambar']['name'],
                    'nama_sepeda' => $_POST['nama_sepeda'],
                    'size_sepeda' => $_POST['size_sepeda'],
                    'harga_sepeda' => $_POST['harga_sepeda'],
                    'jumlah_barang' => $_POST['jumlah_barang'],
                );
                $kode_sepeda = $_POST['id'];

                $sepeda = new sepeda();

                if ($sepeda->edit($data, $kode_sepeda)) {
                    header('location: products.php');
                } else {
                    echo "<script>alert('data tidak teredit');</script>";
                }
            }//end if submit
            ?>

					<div class="clearfix"> </div>
				</div>
				</div>

				<div class="pr-btm">
				<h4>Toko Sepeda Sederhana</h4>
					<img class="img-responsive" src="../../images/profil.jpg" alt="">
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
