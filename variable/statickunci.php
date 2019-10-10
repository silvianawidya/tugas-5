<!DOCTYPE html>
<html>
<body>

<?php //tag pembuka php pada html
function myTest() { //menjalankan fungsi
//setiap kali fungsi dipanggil, variabel yang akan masih memiliki informasi yang terkandung dari terakhir kali fungsi dipanggil.
    static $x = 0; //untuk membuat variable lokal tidak terhapus
    echo $x; //echo untuk menampilkan hasil teks output pada tampilan website
    $x++;
}

myTest(); //menjalanakan fungsi
echo "<br>"; //untuk menampilkan hasil dalam ganti baris
myTest();
echo "<br>";
myTest();
?> 
<!--Endtag php pada html-->

</body>
</html>
