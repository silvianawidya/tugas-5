<!DOCTYPE html>
<html>
<body>

<?php //Pembuka tag php pada html
class Car { //membuat class
    function Car() { //menjalankan fungsi
        $this->model = "VW";
    }
}
// membuat sebuah object
$herbie = new Car();

// tampilan properti objek
echo $herbie->model;
?>
<!--Endtag php pada html-->

</body>
</html>
