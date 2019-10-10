
<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
function sum(int $x, int $y) { //menjalankan fungsi dengan menjumlahkan nilai variabel x dan y
    $z = $x + $y; //memebrikan variabel dari hasil penjumlahan
    return $z; //mengembalikan nilai penjumlahan
}

echo "5 + 10 = " . sum(5,10) . "<br>"; //echo akan menampilkan hasil penjumlahan
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>
<!--Endtag php pada html--> 

</body>
</html>
