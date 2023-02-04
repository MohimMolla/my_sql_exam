<?php
// $db=new mysqli("localhost", "root", NULL, "r53_php");
require 'connect.php';
$q = "select * from products_view";
$r = $connect->query($q);
while($row = $r->fetch_assoc()){
    echo "ID : " .  $row['id'] . "<br>";
    echo "Name : " .  $row['name'] . "<br>";
    echo "Price : " .  $row['price'] . "<hr>";
}
