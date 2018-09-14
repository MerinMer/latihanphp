<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="login">
Nama Anda :  <input type="text" name="nama"><br>
<input type="submit" name="Input" value="login">
</FORM>
</body>
</html>
<?php
if (isset($_POST['login'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>