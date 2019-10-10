<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$cars = array("Volvo", "BMW", "Toyota"); //Array akan menyimpan banyak nilai dalam satu variabel tunggal
$arrlength = count($cars); //menghitung nilai yang ada di dalam array

for($x = 0; $x < $arrlength; $x++) { //Untuk mengulang dan mencetak semua nilai array yang diindeks
    echo $cars[$x];
    echo "<br>";
}
?>
<!--Endtag php pada html-->


</body>
</html>