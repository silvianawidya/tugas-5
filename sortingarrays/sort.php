<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$cars = array("Volvo", "BMW", "Toyota"); //mendeklarasikan beberapa variabel array
sort($cars); //mengurutkan nama variabel dalam array

$clength = count($cars); //menghitung banyak mobil
for($x = 0; $x < $clength; $x++) { //menambah banyak sesuai nilai yang telah dimasukkan
    echo $cars[$x]; //menampilkan hasil urutan nama mobil
    echo "<br>";
}
?>
<!--Endtag php pada html-->

</body>
</html>
