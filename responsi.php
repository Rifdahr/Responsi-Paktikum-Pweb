<?php
	echo "<head><title> PESANAN ANDA </head></title>";
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$pesanan = $_POST ['pesanan'];
	$fp = fopen("file.txt", "a+");
	fputs($fp, "$nama|$alamat|$email|$pesanan\n");
	fclose($fp);

	echo "Terima Kasih Telah Mengunjungi Toko Bangunan Kami <br>";
	echo "<a href=2100018342.html> Pesan </a></br>";
	echo "<a href=lihat.php> Lihat Pesanan </a></br>";
?>