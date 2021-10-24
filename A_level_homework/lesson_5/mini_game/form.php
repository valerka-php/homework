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
<?php
require_once "index.php";

?>


<?php if (isset ($_POST['start']) or isset($_POST['number'])) : ?>
    Попробуй угадать цифру от 1го до 10 :
    <form action="index.php" method="post">
        <input type="number" name="number" placeholder="угадай число от 0 до 10">
        <button> отправить</button>
    </form>

<?php elseif (!isset ($_POST['start']) and !isset($_SESSION['msg'])): ?>
    'Давай сыграем в игру угадайку?'
    <form action="index.php" method="post">
        <button name="start"> Начать</button>
    </form>

<?php elseif (isset ($_SESSION['msg'])): ?>
    <p><h1> <?php echo $_SESSION['msg'] ;
    unset($_SESSION['msg']);
    ?> Сыграем еще ?</h1></p>
    <form action="index.php" method="post">
        <button name="start"> Давай </button>
    </form>
<?php endif ?>

</body>
</html>