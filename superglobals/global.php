<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$x = 75; //mendeklarasikan variabel x yang telah memiliki nilai
$y = 25; //mendeklarasikan variabel y yang telah memiliki nilai

function addition() { //menjalankan fungsi
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // Indeks dalam $GLOBALS menyimpan nama variabel
}

addition(); //memanggil fungsi
echo $z; //menampilkan hasil penjumlahan dari nilai variabel x dan y
?>
<!--Endtag php pada html-->

</body>
</html>
