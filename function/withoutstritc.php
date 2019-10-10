<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
function addNumbers(int $a, int $b) { //menjalankan fungsi
    return $a + $b; //mengembalikan penjumlahan nilai variabel a dan b
}
echo addNumbers(5, "5 days"); 
// karena strict TIDAK diaktifkan "5 hari" diubah menjadi int (5), dan itu akan mengembalikan 10
?>

<!--Endtag php pada html--> 

</body>
</html>
