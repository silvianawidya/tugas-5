<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$numbers = array(4, 6, 2, 22, 11); //mendeklarasikan beberapa variabel array
sort($numbers); //mengurutkan number dari beberapa nilai variabel yang ada dalam array

$arrlength = count($numbers); //menghitung berapa nilai yang ada dalam number
for($x = 0; $x < $arrlength; $x++) { //menambah banyak sesuai nilai yang telah dimasukkan
    echo $numbers[$x]; //menampilkan hasil urutan numbers
    echo "<br>";
}
?>
<!--Endtag php pada html-->

</body>
</html>
