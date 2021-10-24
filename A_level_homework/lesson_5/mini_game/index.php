<?php
require_once "form.php";
session_start();

if (isset($_POST['number'])) {
    $mysteryNum = rand(5, 8);
    if ($_POST['number'] == $mysteryNum) {
        $_SESSION['msg'] =  'Mолодец  ты угадал !';
        header('location: form.php');
    } elseif (empty($_POST['number'])) {
        $msg = 'Введите ваше число';
    } elseif ($_POST['number'] < 5) {
        $msg = 'число маленькое';
    }elseif ($_POST['number'] > 8) {
        $msg = 'число , большое';
    } else {
        $msg = 'Ты не угадал попробуй еще';
    }

}
?>

    <h1> <?= $msg ?> </h1>

