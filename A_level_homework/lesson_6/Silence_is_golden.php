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

<form  action="Silence_is_golden.php" method="post">
    <input class="margin" type="number" name="num" placeholder="number" required> <br>
    <button> Silence is golden</button>
</form>


</body>
</html>

<?php

function showSilence($number){
    if (isset($number) && $number <= 0 ){
        return 'Bad number';
    }
    $text = '';
    for ($i = 1 ;$i <= $number ; $i++){
        $text .= 'Silence is golden' . '<br>';
    }

    return $text;
}

echo showSilence($_POST['num']);
