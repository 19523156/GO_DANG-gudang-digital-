<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="pengaturan.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="btn">
		<span class="fas fa-bars"></span>
	</div>
	<nav class="sidebar">
		<div class="text">GO-Dang</div>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li>
				<a href="#" class="gud-btn">Daftar Gudang
					<span class="fas fa-caret-down first"></span>
				</a>
				<ul class="gud-show">
					<li><a href="basah.php">Gudang Basah</a></li>
					<li><a href="kering.php">Gudang Kering</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="pen-btn">Penyewaan
					<span class="fas fa-caret-down second"></span>
				</a>
				<ul class="pen-show">
					<li><a href="pp.php">Proses Penyewaan</a></li>
					<li><a href="cp.php">Cetak Penyewaan</a></li>
					<li><a href="rp.php">Riwayat Penyewaan</a></li>
				</ul>
			</li>
			<li><a href="pengaturan.php">Pengaturan</a></li>
			<li><a href="login.php">Keluar Akun</a></li>
		</ul>
	</nav>
	<div class="dashboard">
		<h1>Pengaturan</h1> <br>
		<div id="button"><a href="#">Bahasa</a></div> <br>
		<div id="button"><a href="#">Daftar Tarif Tiap Barang</a></div> <br>
		<div id="button"><a href="#">Atur Pembayaran</a></div> <br>
		<div id="button"><a href="#"></a>Pengaturan Akun</div> <br>
		<div id="button"><a href="#">Privasi dan Ketentuan Aplikasi</a></div> <br>
		<div id="button"><a href="#">Ketentuan Gudang</a></div>
	</div>
	<script>
		$('.btn').click(function(){
			$(this).toggleClass("click");
			$('.sidebar').toggleClass("show");
		});
		$('.gud-btn').click(function(){
			$('nav ul .gud-show').toggleClass("show");
			$('nav ul .first').toggleClass("rotate");
		});
		$('.pen-btn').click(function(){
			$('nav ul .pen-show').toggleClass("show1");
			$('nav ul .second').toggleClass("rotate");
		});
		$('nav ul li').click(function(){
			$(this).addClass("active").siblings().removeClass("active");
		});
	</script>

</body>
</html>