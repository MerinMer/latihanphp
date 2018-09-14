<!DOCTYPE html>
<html lang="en">
<head><title>pengolahan login</title></head>
<body>
<FORM ACTION="" METHOD="POST">
email :  <input type="text" name="email"><br>
password :  <input type="password" name="password"><br>
 <input type="submit" name="input" value="silahkan^_^"><br>
</FROM>
</body>
</html>
<?php
if (isset($_POST['input'])) {
$email = $_POST['email'];
$password= $_POST['password'];
if ($email == "merin@gmail.com" && $password == "123") {
echo "Login Berhasil";
} else {
echo "Login Gagal";
}
}
?>