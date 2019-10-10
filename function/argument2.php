<!DOCTYPE html>
<html>
<body>

<?php  //Tag pembuka php pada html
function familyName($fname, $year) { //menjalankan fungsu familyname dengan diikuti 2 variabel
    echo "$fname Refsnes. Born in $year <br>";// menampilkan hasil output di tampilan web
}

familyName("Hege","1975"); //semua familyname dengan 2 variabel tersebut akan terpanggil ketika fungsi sudah dijalankan
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>
<!--Endtag php pada html--> 

</body>
</html>
