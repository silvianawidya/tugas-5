<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$x = 5; //$ diikuti dengan varibale x dengan variable 5
$y = 10;//$ diikuti dengan varibale x dengan variable 10

function myTest() { //menjalankan fungsi
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; //array dapat digunakan untuk memperbarui variabel global secara langsung.$GLOBALS[index]index
} 

myTest(); //menjalankan fungsi
echo $y; //untuk menampilkan output pada tampilan website
?>
<!--endtag penutup php pada html-->
</body>
</html>
