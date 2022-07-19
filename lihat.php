<?php
	echo "<head><title> PESANAN ANDA </title></head>";
	$fp = fopen("file.txt", "r");

	while ($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);
		echo "<tr><td> Nama :</td><td> $pisah[0]</td></tr><br>";
		echo "<tr><td> Alamat :</td><td> $pisah[1]</td></tr><br>";
		echo "<tr><td> Email :</td><td> $pisah[2]</td></tr><br>";
		echo "<tr><td> Pesanan :</td><td> $pisah[3]</td></tr><br>";
		echo '<br>';

	}
	echo "<a href=2100018342.html> Klik Disini </a>";
?>