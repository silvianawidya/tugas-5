<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
echo $_SERVER['PHP_SELF']; //Mengembalikan nama file dari skrip yang sedang dieksekusi
echo "<br>";
echo $_SERVER['SERVER_NAME']; //Mengembalikan nama penyajian host server
echo "<br>";
echo $_SERVER['HTTP_HOST']; //Mengembalikan header Host dari permintaan saat ini
echo "<br>";
echo $_SERVER['HTTP_REFERER']; //Mengembalikan URL lengkap dari halaman saat ini
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //mengembalikan agen pengguna saat ini
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; //menunjukkan script name yang digunakan saat ini
?>
<!--Endtag php pada html-->

</body>
</html>