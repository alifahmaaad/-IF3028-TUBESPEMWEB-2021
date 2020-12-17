<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">

<body id="badan">
	<center>
		<h1>SIMPLE LAPOR!</h1>
	</center>
	<br><br>
	Detail Laporan/Komentar
	<hr>
	<p><?= $datalapor->aspek ?>
		<br><br>
		<?= $datalapor->laporan ?><br><br><br>
		Lampiran:
		<br><br>
		<img src="<?= base_url(); ?>/img/example.png">
		<br><br><br>
		<div id="waktu"></div>
		<div id="aspek"></div>
		<a href="<?php echo base_url('detail/hapus/' . $datalapor->id); ?>">Hapus Laporan/Komentar <img id="close" src="<?= base_url(); ?>/img/close.png"></a>
		<br><br>
</body>

</html>