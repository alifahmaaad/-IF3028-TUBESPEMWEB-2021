<!DOCTYPE html>
<html>
<head>
	<title>
		Halaman Utama
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h1 class="title">SIMPLE LAPOR!</h1>
		<input type="text" name="searchbar" class="searchBar" placeholder="Apa yang ingin anda cari ?">
		<button class="btnSearch">Cari</button>
		<br>
		<a href="">Buat Laporan/Komentar</a>
	</center>
	<br>

	<div class="laporanTerakhir">
		<label>Laporan/Komentar Terakhir</label>
		<br>
		<hr class="pembatas">
		<p><? //DATA LAPORAN TERAKHIR ?></p>
	</div>

	<br>
	<?php foreach(): //perulangan buat nampilin semua laporan ?>

		<div class="listLaporan">
			<label class="judulLampiran">Lampiran <? //DATA JUDUL LAMPIRAN ?></label>
			<label class="waktuLampiran">
				Waktu : <? //DATA WAKTU ?>
				<a href="" class="lihatSelengkapnya">Lihat Selengkapnya ></a>
			</label>
			<br>
			<hr class="pembatas">
			<p class="textLaporan"><?= //DATA TEKS ?></p>
		</div>

	<?php endforeach; ?>
	</body>
</html>