<?php  session_start();
$_SESSION['items']['00324'] = 'Iphone S2345XG';
$_SESSION['items']['00322'] = 'Kettle ';
$_SESSION['items']['00323'] = 'Audi a8';
?>

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

<!-- Форма заказа -->

<h1 class="center"> Оформить заказ </h1>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="POST">
    <input class="margin" name="name" type="text" placeholder="Введите ваше имя" ><br>
    <input class="margin" name="phone" type="number" placeholder="Введите ваш мобильный "><br>
    <input class="margin" name="address" type="text" placeholder="Укажите адрес" ><br>
    <select class="margin" name="delivery_type">
        <option disabled> Выберите тип доставки</option>
        <option value="personaly">Самовывоз</option>
        <option value="mail">Отправка почтой</option>
        <option value="dove">Отправка голубями</option>
    </select> <br>
    <p> Ваш заказ : <br>
        <?php
        foreach ($_SESSION['items'] as $key => $item) {
            echo 'id: '. $key . ' = ' . $item . '<br>';
        }
        ?>
    </p>
    <button> оформить заказ</button>
</form>

<p>
    <?php
    if (!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['address'])){
        $name = htmlspecialchars($_POST['name']);
        $phone = $_POST['phone'];
        $address = htmlspecialchars($_POST['address']);
        $delivery = $_POST['delivery_type'];
        if ($delivery == 'personaly'){
            echo 'Спасибо за ваш заказ , мы будем вас ожидать у нас в магазине ';
        }else{
            echo 'Спасибо за ваш заказ , мы доставим вам товар по указанному адресу ' . $address ;
        }
    }else{
        echo ' Укажите ваши данные для отправки ';
    }
    ?>
</p>
