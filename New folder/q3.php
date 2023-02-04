<?php
/*
CREATE PROCEDURE  `manufact` (IN name VARCHAR(50),IN address VARCHAR(100),IN contact VARCHAR(50))
BEGIN
insert into manufacturer values(NULL,name,address,contact);
END//

*/
require "connect.php";
if(isset($_POST['add'])){
    $q = "call manufact('".$_POST['name']."','".$_POST['address']."','".$_POST['contact']."')";
    $connect->query($q);
    $message = "Manufacturer Created!!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $message??''; ?></h3>
<form action="#" method="POST">    
<table style="width: 100%; border: 1px solid red" >
<!-- <tr><td>id</td><td>:</td><td><input type="text" name="id" id="id" readonly="readonly"/></td></tr> -->
<tr><td>name</td><td>:</td><td><input type="text" name="name" id="name"/></td></tr>
<tr><td>address</td><td>:</td><td><input type="text" name="address" id="address"/></td></tr>
<tr><td>contact_no</td><td>:</td><td><input type="text" name="contact" id="contact"/></td></tr>
<tr><td align="center" colspan="3">
    <input type="submit" name="add" value="Add">
   </td></tr>
</table>
</form>
</body>
</html>
