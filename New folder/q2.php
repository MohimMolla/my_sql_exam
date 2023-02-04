<?php
/*
CREATE TRIGGER log_manu_del AFTER DELETE on manufacturer
FOR EACH ROW
BEGIN
DELETE FROM products WHERE products.manid = old.id;
END//

*/
require "connect.php";
if(isset($_POST['del'])){
    $q = "delete from manufacturer where id='".$_POST['manid']."'";
    $connect->query($q);    
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
    <form action="" method="post">
    Manu: <select name="manid" id="">
            <?php
$q = "select * from manufacturer";
$r = $connect->query($q);
while($row = $r->fetch_assoc()){
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
            ?>
            <!--  
            <option value="1">A</option>
            <option value="2">B</option>
            -->
        </select>
        <input type="submit" value="Delete" name="del">

    </form>
    
</body>
</html>