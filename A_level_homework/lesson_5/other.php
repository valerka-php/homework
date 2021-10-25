<?php

// 4. Дана строка. готовую функцию toUpperCase() or tolowercase()
// let str = 'Hi I am ALex'
// сделать ее с с маленьких букв

$txt = 'Hi I aM VaLeRII';
$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';



# foreach
$count = 0;

$newArrStr = [];
$newArrLow = [];
$newArrUp = [];
#раскладываю строки на массивы
while(true){
    if (isset($txt[$count])){
        $newArrStr[] = $txt[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrStr);
//echo '</pre>';

while(true){
    if (isset($str_low[$count])){
        $newArrLow[] = $str_low[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrLow);
//echo '</pre>';

while(true){
    if (isset($str_up[$count])){
        $newArrUp[] = $str_up[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrUp);
//echo '</pre>';
$newStr = '';
foreach ($newArrStr as $value){
    foreach ($newArrUp as $k => $v){
        if ($v == $value){
            continue;
        }else{
            foreach ($newArrLow as $key => $item){
                if ($item == $value){
                    $value = $newArrUp[$key];
                }
            }
        }
    }
    $newStr .= $value;
}
var_dump($newStr);


//5. Дана строка
//let str = 'Hi I am ALex'
//сделать все буквы большие
$txt = 'Hi I aM VaLeRII';
$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';


# foreach
$count = 0;

$newArrStr = [];
$newArrLow = [];
$newArrUp = [];
#раскладываю строки на массивы
while(true){
    if (isset($txt[$count])){
        $newArrStr[] = $txt[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrStr);
//echo '</pre>';

while(true){
    if (isset($str_low[$count])){
        $newArrLow[] = $str_low[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrLow);
//echo '</pre>';

while(true){
    if (isset($str_up[$count])){
        $newArrUp[] = $str_up[$count];
    }else{
        $count = 0;
        break;
    }
    $count++;
}
//echo '<pre>';
//print_r($newArrUp);
//echo '</pre>';
$newStr = '';
foreach ($newArrStr as $value){
    foreach ($newArrUp as $k => $v){
        if ($v == $value){
            continue;
        }else{
            foreach ($newArrLow as $key => $item){
                if ($item == $value){
                    $value = $newArrUp[$key];
                }
            }
        }
    }
    $newStr .= $value;
}
var_dump($newStr);




#решение где я пользовался explode`ом переделал.

//7. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//сделать все буквы с маленькой
$arr = ['ALEx', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';

#while
$count = 0 ;
$newStr = '';
$empty = ' ';
#здесь я массив разбиваю на строку
while (true){
    if (!isset($arr[$count])){
        $count = 0;
        break;
    }
    $newStr .= $arr[$count];
    $newStr .= $empty;
    $count++;
}
//var_dump($newStr);
#здесь я уже преобразованную строку проверяю на регистр и сравниваю со строкой символов.
$x = 0;
while (true) {
    if ($newStr[$count] == '') {
        $count = 0;
        break;
    }
    while (true) {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($newStr[$count] == $str_up[$x] or $newStr[$count] == $str_low[$x]) {
            $newStr[$count] = $str_low[$x];
        }
        $x++;
    }
    $count++;
}
//var_dump($newStr);
#а здесь я уже готовую строку уменьшенную\увеличенную преобразовую в исходный массив
$newArr = [];
$x = 0;
while (true){
    if ($newStr[$count] == ''){
        $count = 0;
        break;
    }elseif ($newStr[$count] == ' '){
        $x++;
    }

    $newArr[$x] .= $newStr[$count];
    $count++;
}
print_r($newArr);


//10. Дан массив отсортируй его в порядке убывания
$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

#while
$countArrAllItems = 1;
$a = 0;
$i = 0;

#получаю количество элеменов массива.
while (true) {
    if ($arr[$countArrAllItems] == ''){
        break;
    }
    $countArrAllItems++;
}

while ($a < $countArrAllItems) {
    while ($i < $countArrAllItems - 1) {
        $elemet1 = $arr[$i];
        $elemet2 = $arr[$i + 1];
        if ($elemet1 > $elemet2) {
            $arr[$i] = $elemet2;
            $arr[$i + 1] = $elemet1;
        }
        $i++;
    }
    if ($i == $countArrAllItems - 1)
        $i = 0;
    $a++;
}
print_r($arr);

#for
$countArrAllItems = 0;

for ($i = 0; $i >= 0 ; $i++ ){
    if ($arr[$i] == ''){
        break;
    }
    $countArrAllItems++;
}

for ($q = 0 ; $q < $countArrAllItems ; $q++){
    for ($p = 0; $p < $countArrAllItems - 1 ; $p++){
        $elemet1 = $arr[$p];
        $elemet2 = $arr[$p + 1];
        if ($elemet1 > $elemet2) {
            $arr[$p] = $elemet2;
            $arr[$p + 1] = $elemet1;
        }
    }
}

print_r($arr);

#foreach

$countArrAllItems = 0;
foreach ($arr as $v){
    $countArrAllItems++;
}

foreach ($arr as $key => $item){
    for ($p = 0; $p < $countArrAllItems - 1 ; $p++){
        $elemet1 = $arr[$p];
        $elemet2 = $arr[$p + 1];
        if ($elemet1 > $elemet2) {
            $arr[$p] = $elemet2;
            $arr[$p + 1] = $elemet1;
        }
    }
}
var_dump($arr);
