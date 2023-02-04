<?php
// $db=new mysqli("localhost", "root", NULL, "r53_php");
require 'connect.php';
$createView= "CREATE or replace VIEW products_view AS
SELECT id, name,price FROM product WHERE price>5000";
if ($connect->query($createView)){
    echo "View creates successfully";   
}else echo "error";
?>
