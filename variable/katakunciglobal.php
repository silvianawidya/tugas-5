<!DOCTYPE html>
<html>
<body>

<?php //pembuka tag php pada html
$x = 5; //$ diikuti dengan varibale x dengan variable 5
$y = 10; ///$ diikuti dengan varibale y dengan variabel 10

function myTest() { //menjalankan fungsi
    global $x, $y; //gunakan global kata kunci sebelum variabel dalam fungsi
    $y = $x + $y;
} 

myTest();  // menjalankan fungsi
echo $y; // output dengan nilai baru untuk variabel $y
?>
<!--penutup endtag php pada html-->

</body>
</html>
