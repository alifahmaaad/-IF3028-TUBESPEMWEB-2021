<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">
</head>

<body id="badan">
	<center>
		<h1>SIMPLE LAPOR!</h1>
	</center>
	<br><br>
	Buat Laporan/Komentar
	<hr>
	<form method="POST">
		<textarea id=laporan>Laporan/Komentar
		</textarea>
		<br>
		<select id=aspek>
			<option>Pilih Aspek Pelaporan/Komentar</option>
		</select><br>
		<input type="file" name="lampiran" id=lampiran>
		<br>
		<button type="submit" id=tambah>
			buat LAPOR!
		</button>
	</form>
	<br><br><br><br>
	<hr>
</body>

</html>
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
<script>
	$(document).on('click', '#tambah', function() {
		var laporan = $('#laporan').val();
		var aspek = $('#aspek').val();
		var lampiran = $('#lampiran').val();
		$.ajax({
			type: "POST",
			url: "lapor/simpanData",
			dataType: "JSON",
			data: {
				laporan: laporan,
				aspek: aspek,
				lampiran: lampiran
			},
			success: function(data) {
				$('#badan').load("detail.php");
			}
		});
		return false;
	});
</script>