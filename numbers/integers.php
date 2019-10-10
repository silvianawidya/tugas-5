<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
// Periksa apakah tipe variabel bilangan bulat 
$x = 5985; //$ diikuti variabel x dengan diberi nilai
var_dump(is_int($x));  //is_int menunjukkan bahwa tipe variabel tersebut adalah integer

echo "<br>"; //menampilkan hasil output pada layar website dalam baris yang beda

// Check lagi... 
$x = 59.85; //$ diikuti variabel x dengan nilai dari variabel yang telah ditentukan
var_dump(is_int($x)); //is-int menunjukkan bahwa tipe variabel tersebut adalah integer
?>  
<!--Tag penutup php pada html-->

</body>
</html>