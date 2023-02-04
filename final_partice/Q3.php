<?php
require 'connect.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $addr = $_POST['address'];
    $num = $_POST['num'];
    // $quree="call manufacturer('".$name."','".$addr."','".$num."')";
    $qurey = "call manufact('" . $name . "','" . $addr . "','" . $num . "')";
    $connect->query($qurey);
    $message = "Manufacturer Created!!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?php echo $message ?? ''; ?></h3>
    <form action="" method="post">
        Name : <br>
        <input type="text" name="name"> <br>
        address : <br>
        <input type="text" name="address"> <br>
        contact_no : <br>
        <input type="text" name="num"> <br>
        <br>
        <input type="submit" name="add" value="ADD">
    </form>
</body>

</html>
