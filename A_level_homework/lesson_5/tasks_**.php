<?php

//1) Написать программу, которая выводит простые числа, т.е. делящиеся без
//остатка только на себя и на 1.

$numbers = [];
$check = 'число простое';

for ($i = 2; $i < 100; $i++){
    for ($p = 2 ; $p < $i ; $p++){
      if (($i % $p) == 0 ){
          $check = 'число не простое';
          break;
      }
    }
    if ($check == 'число простое'){
        $numbers[] = $i;
    }
    $check = 'число простое';
}

foreach ($numbers as $value){
    echo $value . '<br>';
}

//2) Сгенерируйте 100 раз новое число и выведите на экран количество четных чисел из этих 100.

$count = [];

for ($i = 0 ; $i <= 100; $i++){
    $num = mt_rand(2,1000);
    if(($num % 2) == 0 ){
        $count[] = 1;
    }
}

echo array_sum($count);

//3) Сгенерируйте 100 раз число от 1 до 5 и выведите на экран сколько раз сгенерировались эти числа (1, 2, 3, 4 и 5).

$count = [ 1 => '', 2 => '' , 3 => '', 4 => '', 5 => ''];

for ($i = 0; $i <= 100; $i++){
    $num = mt_rand(1,5);
    if ($num == 1){
        $count['1'] += 1;
    }elseif ($num == 2){
        $count['2'] += 1;
    }elseif ($num == 3){
        $count['3'] += 1;
    }elseif ($num == 4){
        $count['4'] += 1;
    }elseif ($num == 5){
        $count['5'] += 1;
    }
}

foreach ($count as $key => $value){
    echo 'цифра ' . $key . ' была ' . $value . ' раз' . '<br>';
}

//4) Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3), отметить разными цветами часть ячеек.

echo "<table border = '1'>";
for($i = 1; $i <= 3; $i++){
    echo '<tr>';
    for ($q = 1; $q <= 5; $q++){
        $green = mt_rand(0,255);
        $blue = mt_rand(0,255);
        $red = mt_rand(0,255);
        echo "<td style= background-color:rgb($green,$blue,$red) > `_______` </td> " ;
    }
    echo '</tr>';
}
echo '</table>';


//В переменной month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).

$month = mt_rand(1,12);
if ($month <= 2 or $month == 12){
    echo 'Winter is coming';
}elseif ($month <= 5){
    echo 'Is Spring';
}elseif ($month <= 8){
    echo 'yeah Summer';
}else {
    echo 'Is Autumn';
}
echo '<br>';
echo $month;

//Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.

$txt = 'abcde';

if ($txt[0] == 'a'){
    echo ' Yeah it is A';
}else {
    echo 'No it is not A';
}

//Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', в противном случае выведите 'нет'.

$nums = '123456';
if ($nums[0] <= 3){
    echo 'Yes num between 1 and 3 ';
}else {
    echo 'NO num more than 3';
}

//Если переменная test равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при test, равном true, false. Напишите два варианта скрипта - тернарка и if else.

$test = true;
$test2 = false;

echo ($test == true) ?  'TRUE' : 'FALSE';
echo ($test2 == false) ?  'TRUE' : 'FALSE';

if ($test == true){
    echo 'TRUE';
}else{
    echo 'FALSE';
}


//Дано Два массива рус и англ ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']
//Если переменная lang = ru вывести массив на русском языке, а если en то вывести на английском языке. Сделат через if else и через тернарку.

$ru = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$en = ['monday','tuesday','wednesday', 'thursday', 'friday','saturday', 'sunday'];
$lang = $ru;

if ($lang == $en){
    echo '<pre>';
    print_r($en);
    echo '</pre>';
}else{
    echo '<pre>';
    print_r($ru);
    echo '</pre>';
}

echo ($lang == $en) ? print_r($en) : print_r($ru);

//В переменной cloсk лежит число от 0 до 59 – это минуты. Определите в какую четверть часа попадает это число (в первую, вторую, третью или четвертую). тернарка и if else.

$clock = mt_rand(0,59);

if ($clock <= 15){
    echo 'first ';
}elseif ($clock <= 30){
    echo 'second';
}elseif ($clock <= 45){
    echo 'third';
}elseif ($clock <= 59){
    echo 'fourd';
}

echo ($clock <= 15) ? 'first' : (($clock <= 30 ? 'second' : ($clock <= 45 ? 'third' : ($clock <= 59 ? 'fourd' : '')))) ;