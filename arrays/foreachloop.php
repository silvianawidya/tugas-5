<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Array akan menyimpan banyak nilai dalam satu variabel tunggal

foreach($age as $x => $x_value) { //untuk mencetak semua nilai array sociative
    echo "Key=" . $x . ", Value=" . $x_value; //menampilkan hasil output
    echo "<br>";
}
?>
<!--Endtag php pada html-->

</body>
</html>
