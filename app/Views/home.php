<!DOCTYPE html>
<html>

<head>
    <title>
        Halaman Utama
    </title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/style.css">
</head>

<body>
    <center>
        <h1 class="title">SIMPLE LAPOR!</h1>
        <input type="text" name="searchbar" class="searchBar" placeholder="Apa yang ingin anda cari ?">
        <button class="btnSearch">Cari</button>
        <br>
        <a href="<?= base_url('lapor'); ?>">Buat Laporan/Komentar</a>
    </center>
    <br>

    <div class="laporanTerakhir">
        <label>Laporan/Komentar Terakhir</label>
        <br>
        <hr class="pembatas">
        <p>
            <? //DATA LAPORAN TERAKHIR ?>
        </p>
    </div>

    <br>
    <?php foreach ($datalapor as $data) : //perulangan buat nampilin semua laporan 
    ?>

        <div class="listLaporan">
            <label class="judulLampiran"><?php $var = preg_split("#/#", $data['lampiran']);
                                            echo $var[count($var) - 1] ?></label>
            <label class="waktuLampiran">
                Waktu :
                <? //DATA WAKTU ?>
                <a href="<?php echo base_url('detail/' . $data['id']); ?>" class="lihatSelengkapnya">Lihat Selengkapnya ></a>
            </label>
            <br>
            <hr class="pembatas">
            <p class="textLaporan"><?= $data['laporan'] ?></p>
        </div>

    <?php endforeach; ?>
</body>

</html>