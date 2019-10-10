<!DOCTYPE html>
<html>
<body>

<!--data formulir dikirim ke file yang ditentukan dalam atribut tindakan dari tag <form>-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"> <!--menginputkan variabel dengan memberi nama-->
  <input type="submit">
</form>
<!--Endtag dari form-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // kumpulkan nilai input field
    $name = $_POST['fname'];
    if (empty($name)) { //kondisi if else
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<!--Endtag php pada html-->

</body>
</html>