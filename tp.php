<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="tp.css">
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
			<li><a href="dashboard.php">Tambah Pengguna</a></li>
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
		<h1>Tambah Pengguna</h1>
		<form>
			<img src="the best partner your warehouse.png" class="the best partner your warehouse"> <br><br><br><br><br><br>
			<label>Nama :</label>
			<input type="text" name="nama" value="Silahkan diisi"> 
			<label>NIK :</label>
			<input type="text" name="nik" value="Silahkan diisi">
			<label for="tl">Tanggal Lahir</label>
			<input type="date" name="ttl">
			<label>Alamat :</label>
			<textarea rows="3">Silahkan diisi</textarea>
			<label>Daerah</label>
			<input type="text" name="dae" value="Silahkan diisi">
			<label>Nomor Telepon</label>
			<input type="text" name="nom" value="Silahkan diisi">
			<label>E-Mail :</label>
			<input type="text" name="email" value="Silahkan diisi">
			<div id="button"><a href="tp.php">Tambahkan Pengguna</a></div>
		</form>
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