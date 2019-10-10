<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$x = 5; // ruang lingkup global
 
function myTest() {
    // menggunakan x di dalam fungsi ini akan mengahsilkan kesalahan
    echo "<p>Variable x inside function is: $x</p>"; //echo akan menampilkan hasil teks output pada tampilan website
} 
myTest();

echo "<p>Variable x outside function is: $x</p>"; //echo akan menampilkan hasil teks output pada tampilan website
?>
<!--Endtag php pada html-->

</body>
</html>