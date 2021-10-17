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

</body>
</html>

<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" enctype="multipart/form-data" method="post">
    Send this file: <input name="filename" type="file"  > <br>
    <input type="submit" value="Send File">
</form>

<?php

$upload_types = ['.png' , '.jpg' ,'.pdf', '.exel','.word'];

if ($_FILES['filename']['size'] >  5*1024*1024 ){
    exit('Размер файла больше чем 5мб');
}

if (in_array(strstr($_FILES['filename']['name'], '.') , $upload_types  )){
    $load_file = move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__ . '/temp/' . $_FILES['filename']['name']);
    echo 'Ваш файл успешно загружен';

}else{
    echo 'Данный тип файла не поддерживается';
}



?>

