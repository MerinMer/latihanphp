<?php
$nim = "78946946";
$nama = 'Merin Meira';
$umur = 23;
$nilai = 82.25;
$status = true;
echo "NIM : " . $nim ."<br>";
echo "Nama : " . $nama ."<br>";
print "Umur : " . $umur;
print"<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status) {
    echo"Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}               