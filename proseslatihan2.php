<?php
if (isset($_POST['Login'])) {
$Nama = $_POST['nama'];
echo "nama anda adalah :";
echo "<b><font color='red'>$Nama</font></br></b>";

$nis  = $_POST['nis'];
echo "nis anda adalah :";
echo "<b><font color='red'>$nis</font></br></b>";

$alamat = $_POST['alamat'];
echo "alamat anda adalah :";
echo "<b><font color='red'>$alamat</font></br></b>";

$jeniskelamin = nl2br($_POST['jeniskelamin']);
echo "jeniskelamin Anda adalah :";
echo "<b><font color='red'>$jeniskelamin</font></br></b>";

$agama  = $_POST['agama'];
echo "agama anda adalah :";
echo "<b><font color='red'>$agama</font></br></b>";

$asalsekolah = $_POST['asalsekolah'];
echo "asalsekolah anda adalah :";
echo "<b><font color='red'>$asalsekolah</font></br></b>";

$namaorangtua = $_POST['ortu'];
echo " nama orang tua anda adalah :";
echo "<b><font color='red'>$namaorangtua</font></br></b>";

$sekolah = $_POST['sekolah'];
echo "sekolah anda adalah :";
echo "<b><font color='red'>$sekolah</font></br></b>";

echo "pelajaran yang anda sukai adalah : <br>";
if(isset($_POST['pel'])){
    echo "+ " . $_POST['pel'] . "<br>";
}
if(isset($_POST['pel1'])){
    echo "+ " . $_POST['pel1'] . "<br>";
}
if(isset($_POST['pel2'])){
    echo "+ " . $_POST['pel2'] . "<br>";
}
if(isset($_POST['pel3'])){
    echo "+ " . $_POST['pel3'] . "<br>";
}
if(isset($_POST['pel4'])){
    echo "+ " . $_POST['pel4'] . "<br>";
}

$email  = $_POST['Email'];
echo "Email anda adalah :";
echo "<b><font color='red'>$email</font></br></b>";


$pengajar = $_POST['Pengajar'];
echo "pengajar :";
echo "<b><font color='red'>$pengajar</font></br></b>";
}
$ijasah = $_POST['ijasah'];
echo "Nilai ijasah SD anda:";
if($ijasah >=23){
    echo "Selamat Anda Diterima";
}else{
    echo "Anda Ditolak";
}
?>  