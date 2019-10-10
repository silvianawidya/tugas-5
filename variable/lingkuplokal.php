<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
function myTest() {
    $x = 5; // lingkup lokal
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest(); //menjalankan fungsi

// menggunakan x di luar fungsi akan menghasilkan kesalahan
echo "<p>Variable x outside function is: $x</p>";
?>
<!--Endtag php pada shtml-->

</body>
</html>