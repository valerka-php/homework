<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .margin {
            margin-bottom: 15px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Форма комментария -->

<h1 class="center"> Форма комментария </h1>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">

    <p>Ваше Имя </p>
    <input class="margin" name="name" type="text" value="Аноним"><br>
    <textarea  class="margin" name="text"  cols="45" rows="5"> </textarea><br>
    <button> Оставить отзыв </button>

</form>

<p>
    <?php
    if(isset($_POST['text'])) {
    $comment = htmlspecialchars( $_POST['text']);
    $name = htmlspecialchars($_POST['name']);
    if (strlen($comment) <= 2 ){
        echo 'введите ваш коментарий';
    }else{
    echo 'Спасибо за ваш отзыв'; ?>
<hr>
<p> <?= $name . ':' ?> </p>
<p> <?= $comment ?> </p> <?php
}
}else{
    echo 'Поделитесь вашим мнением о нас';
}
?>
</p>



<!-- Форма корзины -->
<?php
$iphone = 'Iphone 324SX';
$id_iphone = '00345';
?>

<h1 class="center"> Форма корзины </h1>
<p> Купить <?= $iphone ?> </p> <img src="https://ireland.apollo.olxcdn.com/v1/files/r8kbin6dgbd1-UA/image;s=644x461" width="200" height="200">

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">

    <input class="margin" name="id" type="hidden" value="00345"><br>
    <input class="margin" name="count" type="number" placeholder="количество" ><br>

    <button> Заказать </button>

</form>


<?php
if (isset($_POST['count'])){
    if ($_POST['id'] === $id_iphone){
        echo 'Поздравляем вы купили ' . $_POST['count'] . ' ' .$iphone;
    }
}
?>

<!-- Обратная связь с клиентом -->
<h1 class="center"> Обратная связь с клиентом  </h1>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">

    <p> Укажите ваше имя </p>
    <input class="margin" name="name_1" type="text"   > <br>
    <p> Введите ваш мобильный номер телефона </p>
    <input class="margin" name="number" type="text" placeholder="+380 " maxlength="9" ><br>

    <button> Заказать обратный звонок </button>

</form>

<p>
    <?php
    if (!empty($_POST['name_1'])){
        if (is_numeric($_POST['number'])){
            if (strlen($_POST['number']) < 9 ){
                echo 'Номер слишком короткий';
            }else {
                $name_1 = htmlspecialchars($_POST['name_1']) ;
                $phone = $_POST['number'];
                echo 'Cпасибо , вам скоро перезвонят';
            }
        }else{
            echo 'Введите номер цифрами ';
        }
    }else {
        echo 'Введите ваше имя';
    }
    ?>
</p>
<hr>
<p>
    <?php
    echo 'Имя заказчика : ' . $name_1 ;
    echo '<br>';
    echo 'Номер телефона заказчика +380' . $phone;
    ?>
</p>




</body>
</html>

