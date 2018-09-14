<?php
$uanghari = 50000;
$makanan = 25000;
$minuman = 10000;
$menghabiskan = ($makanan + $minuman);
$sisauang = ($uanghari - $makanan - $minuman);
$hemat = ($sisauang > 0)? "hemat" : "Boros";
echo "Uang hari = Rp. $uanghari <br>";
echo "Makanan = Rp. $makanan <br>";
echo "Minuman = Rp. $minuman<br>";
echo "Hari menghabiskan uang sebesar = Rp. $menghabiskan <br>";
echo "Sisa uang hari :   RP. $sisauang<br>";
echo "Dan adalah orang yang $hemat<br>";