<?php
require "connect.php";
if (isset($_POST['login'])) {
    $selectQ = "select * from user where username='" . $_POST['uname'] . "' and password = '" . sha1($_POST['upass']) . "'";
    $r = $connect->query($selectQ);
    if ($r->num_rows ) {
        $message = "You are a valid user!!";
    } else {
        $message = "You are a invalid user!!";
    }
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
    <h2>login form:<?php echo $message ?? ""; ?></h2>
    <form action="" method="post">
        usrename: <input type="text" name="uname" id="">
        password: <input type="password" name="upass" id=""><br>
        <input type="submit" value="Login" name="login">

    </form>
</body>

</html>