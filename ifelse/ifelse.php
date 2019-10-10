<!DOCTYPE html>
<html>
<body>

<?php  //Tag pembuka php pada html
$t = date("H");

if ($t < "20") { //Pernyataan if ... else mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi itu salah
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
//Output "Have a good day!" jika waktu saat ini kurang dari 20, dan "Selamat malam!" jika tidak
?>
 <!--Endtag php pada html-->
 
</body>
</html>
