<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
$t = date("H");
echo "<p>The hour (of the server) is " . $t;  //Pernyataan if ... elseif ... else mengeksekusi kode yang berbeda untuk lebih dari dua syarat
echo ", and will give the following message:</p>";

if ($t < "10") { //kondisi pertama
    echo "Have a good morning!";
} elseif ($t < "20") { //kondisi kedua
    echo "Have a good day!";
} else { //kondisi ketiga
    echo "Have a good night!";
}
//Output good morning jika waktu saat ini kurang dari 10,
?>
 <!--Endtag php pada html-->
 
</body>
</html>
