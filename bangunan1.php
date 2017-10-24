<?php
require_once 'bangunan.php';

$siswa = new siswa('5 truk', '1 mobil BBS', '5 truk', '10.000.000');

echo "Butuh Besi............ ".$organisasi->besi(). "<br>";
echo "Banyak nya Semen....... ".$organisasi->semen(). "<br>";
echo "Banyak nya Pasir....... ".$organisasi->Pasir()."<br>";
echo "Uang yang Dibutuh kan.. ".$organisasi->uang();
?>