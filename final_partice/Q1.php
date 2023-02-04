<?php
require "connect.php";

if (isset($_POST['submit'])){
    $uname=$_POST["name"];
    $password=$_POST["pass"];
    $myquery="select * from user where username ='$uname' and password='$password'";
    $result=$connect->query($myquery);
    if ($result->num_rows){
        echo "You are regester user";
    }
    else{
        echo "You are not regester user";
    }
$result->free();
$connect->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loigain form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" name="name">User Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" name="pass">Password</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
