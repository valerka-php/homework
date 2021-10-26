<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form  action="registration.php" method="post">
    <input class="margin" type="text" name="name" placeholder="name" required> <br>
    <input class="margin" type="email" name="email" placeholder="email" required> <br>
    <input class="margin" type="password" name="password" placeholder="password" required> <br>
    <input class="margin" type="password" name="confirmPass" placeholder="confirm password" required> <br>
    <button> registration </button>
</form>

</body>
</html>


<?php

//var_dump($_POST);
function registration($name,$email,$password,$confirmPass){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    if ($password !== $confirmPass){
        return 'пароли не совпадают';
    }else{
        return  $name .   ': Спасибо за регистрацию';
    }

}

echo registration($_POST['name'],$_POST['email'],$_POST['password'],$_POST['confirmPass']);