<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php //Tag pembuka php pada html
function setHeight(int $minheight = 50) { //menjalankan fungsi dengan mngetur Heigh yang bertipe int
    echo "The height is : $minheight <br>"; //menampilkan hasil output
}

setHeight(350);
setHeight(); //// akan menggunakan nilai default 50
setHeight(135);
setHeight(80);
?>
<!--Endtag php pada html--> 

</body>
</html>
