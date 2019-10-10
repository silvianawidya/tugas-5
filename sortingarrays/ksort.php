<!DOCTYPE html>
<html>
<body>

<?php  //Tag pembuka php pada html
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //mendeklarasikan beberapa variabel array
ksort($age); //array asosiatif dalam urutan menaik

foreach($age as $x => $x_value) { //array asosiatif dalam urutan menaik
    echo "Key=" . $x . ", Value=" . $x_value; //menampilkan hasil output
    echo "<br>";
}
?>
<!--Endtag php pada html-->

</body>
</html>
