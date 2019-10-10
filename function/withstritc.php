<!DOCTYPE html>
<html>
<body>

<?php declare(strict_types=1); // persyaratan strict

function addNumbers(int $a, int $b) { //menjalankan fungsi dengan variabel a dan b bertipe integer
    return $a + $b; //mengembalikan penjumlahan nilai a dan b
}
echo addNumbers(5, "5 days"); 
// karena strict diaktifkan dan "5 hari" bukan bilangan bulat, kesalahan akan terjadi
?>
<!--Endtag php pada html--> 

</body>
</html>

