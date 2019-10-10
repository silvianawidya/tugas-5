<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$cars = array("Volvo", "BMW", "Toyota"); //mendeklarasikan beberapa variabel array
rsort($cars); //mengurutkan number dari beberapa nilai variabel yang ada dalam array dengan menuruni urutan abjad

$clength = count($cars); //menghitung berapa banyak cars 
for($x = 0; $x < $clength; $x++) { //menambah banyak sesuai nilai yang telah dimasukkan
    echo $cars[$x]; ////menampilkan hasil urutan cars dengan uutan menururni huruf abjad
    echo "<br>";
}
?>
<!--Endtag php pada html-->

</body>
</html>
