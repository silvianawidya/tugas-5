<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka html
//Periksa apakah variabelnya numerik
$x = 5985; //$ diikuti dengan variabel x yang sudah diberi nilai
var_dump(is_numeric($x)); //Fungsi PHP var_dump () mengembalikan tipe dan nilai data

echo "<br>";

$x = "5985"; //$ diikuti dengan variabel x yang sudah diberi nilai
var_dump(is_numeric($x)); //Fungsi PHP var_dump () mengembalikan tipe dan nilai data


echo "<br>";

$x = "59.85" + 100; //$ diikuti dengan variabel x dengan menjumlahakan nilai yanga ada dalam variabel
var_dump(is_numeric($x)); //Fungsi PHP var_dump () mengembalikan tipe dan nilai data


echo "<br>";

$x = "Hello"; //$ diikuti dengan avriabel x yang sudah diberi nilai berupa teks
var_dump(is_numeric($x));//Fungsi PHP var_dump () mengembalikan tipe dan nilai data

?>  
<!--Endtag php pada html-->

</body>
</html>
