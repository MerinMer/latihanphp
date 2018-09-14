<html>
<head><title>Sistem Raport Sederhana</title></head>
<body>
<FORM ACTION="proseslatihan2.php" METHOD="POST" NAME="input">
<center><h2>RAPOT SEDERHANA</h2></center>
Nama          :  <input type="text" name="nama"><br>
Nis           :  <input type="number" name="nis"><br>
Alamat        :  <input type="textarea" name="alamat"><br>
Jenis Kelamin :  <input type="radio" name="jeniskelamin" value="Perempuan" > Perempuan
                 <input type="radio" name="kelamin" value="Laki-Laki"> Laki-Laki
                 <input type="radio" name="kelamin" value="Transgender"> Transgender<br>
Agama         :  <select name="agama" cols="20" rows="3"><br>
                 <option value="Agama Islam">Agama Islam</option>
                 <option value="Agama Kristen">Agama Kristen</option>
                 <option value="Agama Budha">Agama Budha</option></br>
                 </select><br>
Asal Sekolah  :  <input type="text" name="asalsekolah"><br>
Nama Orang Tua:  <input type="text" name="ortu"><br>  
Sekolah       :  <input type="text" name="sekolah"><br>
Email         :  <input type="text" name="Email"><br>
Pengajar      :  <input type="text" name="Pengajar"><br>
Pelajaran yang disukai : <br>
                <input type="checkbox" name="pel" value="B SUNDA" checked>Bahasa sunda<br>
                <input type="checkbox" name="pel1" value="MTK">Matematika<br>
                <input type="checkbox" name="pel2" value="IPA">Ilmu pengetahuan alam<br>
                <input type="checkbox" name="pel3" value="PAI">Pelajaran agama Islam<br>
                <input type="checkbox" name="pel4" value="PLH">Pelajaran Lingkungan Olahraga<br>
Nilai Ijasah Anda:<input type="number" name="ijasah"><br>
                <input type="submit" name="Login" value="Login">
</FORM>
</body>
</html>