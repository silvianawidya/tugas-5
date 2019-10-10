<!DOCTYPE html>
<html>
<body>

<?php  //Tag pembuka php pada html
$favcolor = "red"; //menentukan variabel warna favorit

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break; //break untuk mencegah kode dari berlari ke kasus berikutnya secara otomatis
    case "blue":
        echo "Your favorite color is blue!";
        break; //break untuk mencegah kode dari berlari ke kasus berikutnya secara otomatis
    case "green":
        echo "Your favorite color is green!";
        break; //break untuk mencegah kode dari berlari ke kasus berikutnya secara otomatis
    default: //The default pernyataan digunakan jika tidak ada yang cocok
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 <!--Endtag php pada html-->
 
</body>
</html>
