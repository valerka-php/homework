<?php
//while
//do while
//for
//foreach

//1. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//Развернуть этот массив в обратном направлении

$array = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

#for
$count = 0;
for ($i = 0; $i >= 0; $i++) {
    if ($array[$i] == '') {
        break;
    }
    $count++;
}
for ($q = $count; $q >= 0; $q--) {
    echo $array[$q] . '<br>';
}

#while
$count = 0;
while (true) {
    if ($array[$count] == '') {
        break;
    }
    $count++;
}
while ($count-- >= 0) {
    echo $array[$count] . '<br>';
}

#do_while
$count = 0;
do {
    if ($array[$count] == '') {
        break;
    }
    $count++;
} while (true);

do {
    if ($array[$count] == '') {
        continue;
    }
    $array1[] = $array[$count];
    $q++;

} while ($count-- >= 0);
print_r($array1);

#foreach
$count = 0;
foreach ($array as $k) {
    $count++;
}
foreach ($array as $k) {
    $count--;
    $arr[] = $array[$count];
}
print_r($arr);


//2. Дан массив
//[44, 12, 11, 7, 1, 99, 43, 5, 69]
//Развернуть этот массив в обратном направлении

$arr = [44, 12, 11, 7, 1, 99, 43, 5, 69];

#while
$count = 0;
while (true) {
    if ($arr[$count] == '') {
        break;
    }
    $count++;
}
while ($count-- >= 1) {
    $new_arr[] = $arr[$count] . '<br>';
}
print_r($new_arr);

#do_while
$count = 0;

do {
    if ($arr[$count] == '') {
        break;
    }
    $count++;

} while (true);
do {
    if ($arr[$count] == '') {
        continue;
    }
    $new_arr[] = $arr[$count];
} while ($count-- >= 0);
print_r($new_arr);

#for
$count = -1;
for ($i = 0; $i >= 0; $i++) {
    if ($arr[$i] == '') {
        break;
    }
    $count++;
}
$arr1 = [];
for ($q = $count; $q >= 0; $q--) {
    $arr1[] = $arr[$q];
}
print_r($arr1);

#foreach
$count = 0;
foreach ($arr as $k) {
    $count++;
}
foreach ($arr as $k) {
    $count--;
    $arr1[] = $arr[$count];
}
print_r($arr1);

//3. Дана строка
//let str = 'Hi I am Valerii'
//развенуть строку в обратном направлении.

$str = 'Hi I am Valerii';

#while
$count = 0;
while (true) {
    if ($str[$count] == '') {
        break;
    }
//    echo $str[$count];
    $count++;
}
while ($count-- >= 1) {
    echo $str_1[] = $str[$count];
}

#do_while
$count = 0;

do {
    if ($str[$count] == '') {
        break;
    }
    $count++;
} while (true);

do {
    if ($str[$count] == '') {
        continue;
    }
    echo $new_str[] = $str[$count];
} while ($count-- >= 1);

#for
$count = 0;
for ($i = 0; $i >= 0; $i++) {
    if ($str[$i] == '') {
        break;
    }
    $count++;
}
for ($q = $count; $q >= 0; $q--) {
    echo $str [$q];
}

#foreach
$new_arr = [];
$count = 0;
for ($i = 0; $i >= 0; $i++) { // нужно строку в массив переделать
    if ($str[$i] == '') {
        break;
    }
    $new_arr[] = $str[$i];
    $count = 0;
}
foreach ($new_arr as $k) {
    $count--;
    echo $str[$count];
}

// 4. Дана строка. готовую функцию toUpperCase() or tolowercase()
// let str = 'Hi I am ALex'
// сделать ее с с маленьких букв

$txt = 'Hi I aM VaLeRII';
$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';

#while
$count = 0;
while (true) {
    if ($txt[$count] == '') {
        break;
    }
    while (true) {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($txt[$count] == $str_up[$x] or $txt[$count] == $str_low[$x]) {
            echo $txt[$count] = $str_low[$x];
        }
        $x++;
    }
    $count++;
}

#do_while
$count = 0;
do {
    if ($txt[$count] == '') {
        break;
    }
    do {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($txt[$count] == $str_up[$x] or $txt[$count] == $str_low[$x]) {
            echo $txt[$count] = $str_low[$x];
        }
        $x++;
    } while (true);
    $count++;
} while (true);

#for

for ($i = 0; $i >= $i; $i++) {
    if ($txt[$i] == '') {
        break;
    }
    for ($p = 0; $p >= 0; $p++) {
        if ($str_up[$p] == '') {
            break;
        } elseif ($txt[$i] == $str_up[$p] or $txt[$i] == $str_low[$p]) {
            echo $txt[$i] = $str_low[$p];
        }
    }
}

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
foreach ($newArrStr as $value){
    foreach ($newArrLow as $k => $v){
        if ($v == $value){
            continue;
        }else{
            foreach ($newArrUp as $key => $item){
                if ($item == $value){
                    $value = $newArrLow[$key];
                }
            }
        }
    }
    echo $value . '<br>';
}

//5. Дана строка
//let str = 'Hi I am ALex'
//сделать все буквы большие


$txt = 'Hi I aM VaLeRII';
$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';

#while
$count = 0;
while (true) {
    if ($txt[$count] == '') {
        break;
    }
    while (true) {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($txt[$count] == $str_low[$x] or $txt[$count] == $str_up[$x]) {
            echo $txt[$count] = $str_up[$x];
        }
        $x++;
    }
    $count++;
}

#do_while
$count = 0;
do {
    if ($txt[$count] == '') {
        break;
    }
    do {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($txt[$count] == $str_low[$x] or $txt[$count] == $str_up[$x]) {
            echo $txt[$count] = $str_up[$x];
        }
        $x++;
    } while (true);
    $count++;
} while (true);

#for
$count = 0;
for ($i = 0; $i >= $count; $i++) {
    if ($txt[$count] == '') {
        break;
    }
    for ($p = 0; $p >= 0; $p++) {
        if ($str_up[$p] == '') {
            break;
        } elseif ($txt[$count] == $str_low[$p] or $txt[$count] == $str_up[$p]) {
            echo $txt[$count] = $str_up[$p];
        }
    }
    $count++;
}

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
    echo $value . '<br>';
}


//6. Дана строка
//let str = 'Hi I am VaLerIi'
//развернуть ее в обратном направлении

$str = 'Hi I am VaLerIi';

#while
$count = 0;

while (true) {
    if ($str[$count] == '') {
        break;
    }
    $count++;
}
while ($count-- >= 1) {
    echo $str[$count];
}

#do_while
$count = 0;
do {
    if ($str[$count] == '') {
        break;
    }
    $count++;
} while (true);
do {
    $str1 .= $str[$count];
} while ($count-- >= 1);

#for
$count = -1;
for ($i = 0; $i >= 0; $i++) {
    if ($str[$i] == '') {
        break;
    }
    $count++;
}
$str1 = '';
for ($q = $count; $q >= 0; $q--) {
    $str1 .= $str[$q];
}
echo $str1;

#foreach
// нужно строку в массив переделать
for ($i = 0; $i >= 0; $i++) {
    if ($str[$i] == '') {
        break;
    }
    $new_str[] = $str[$i];
}

$count = 0;
foreach ($new_str as $k) {
    $count++;
}
foreach ($new_str as $k) {
    $count--;
    echo $new_arr[] = $new_str[$count];
}

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


#do_while
$empty = ' ';
$count = 0 ;
$strArr = '';

do{
    if ($arr[$count] == ''){
        break;
    }
    $strArr .= $arr[$count];
    $strArr .= $empty;
    $count++;
}while (true);

//var_dump($strArr);

$y = 0;
do{
    if ($strArr[$y] == '') {
        break;
    }
    do{
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($strArr[$y] == $str_low[$x] or $strArr[$y] == $str_up[$x]) {
            $strArr[$y] = $str_low[$x];
        }
        $x++;
    }while(true);
    $y++;
}while(true);

$newArr = explode(' ', $strArr);
print_r($newArr);

#for
$strArr = '';
$empty = ' ';

for ($i = 0; $i >= 0 ; $i++){
    if ($arr[$i] == ''){
        break;
    }
    $strArr .= $arr[$i];
    $strArr .= $empty;
}
//var_dump($strArr);
for ($i = 0; $i >= 0 ; $i++){
    if ($strArr[$i] == '') {
        break;
    }
    for ($p = 0; $p >= 0; $p++) {
        if ($str_up[$p] == '' ) {
            break;
        } elseif ($strArr[$i] == $str_up[$p] or $strArr[$i] == $str_low[$p]) {
            $strArr[$i] = $str_low[$p];
        }
    }

}

$newArr = explode(' ', $strArr);
print_r($newArr);

#foreach
$strArrUp = [];
$strArrLow = [];
#
# строки из букв конвертирую в массивы
#
for ($i = 0; $i >= 0; $i++) {
    if ($str_low[$i] == '') {
        break;
    }
    $strArrLow[] = $str_low[$i];
}
for ($i = 0; $i >= 0; $i++) {
    if ($str_up[$i] == '') {
        break;
    }
    $strArrUp[] = $str_up[$i];
}

# foreach перебираю массивы

$strArr = '';
$empty = ' '; # добавляю разделение в строке пробелом =)
$newArr = [];

# из массива делаю строку
foreach ($arr as $key){
    $strArr .= $key ;
    $strArr .= $empty ;

}
//var_dump($strArr);

# из строки делаю опять массив с ключами значениями  ( 0 => A и т.д.)

for ($i = 0; $i >= 0; $i++) {
    if ($strArr[$i] == '') {
        break;
    }
    $newStrArr[] = $strArr[$i];
}
//echo '<pre>';
//print_r($newStrArr);
//echo '</pre>';
#
# обхожу массив и в пустую строку складываю все уже в нижнем регистре
#
$emptyStr = '';
foreach ($newStrArr as $items ) {
    for ($i = 0; $i >= 0 ; $i++){
        if ($str_low[$i] == ''){
            break;
        }elseif ($str_up[$i] == $items or $str_low[$i] == $items){
            $items = $str_low[$i];
            $emptyStr .= $items;
        }
    }
}

$lastArr = explode(' ', $emptyStr);  #   возвращаю масиву исходный вид .
//print_r($lastArr);



//8. Дан массив
//['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
//сделать все буквы с большой
$arr = ['ALEx', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$str_low = ' abcdefghijklmnopqrstuvwxyz';
$str_up = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';


#while
$count = 0;
$str_arr = '';
$empty = ' ';
while (true) {
    if ($arr[$count] == '') {
        break;
    }
    $str_arr .= $arr[$count];
    $str_arr .= $empty;
    $count++;
}
//var_dump($str_arr);
$y = 0;
while (true) {
    if ($str_arr[$y] == '') {
        break;
    }
    while (true) {
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($str_arr[$y] == $str_low[$x] or $str_arr[$y] == $str_up[$x]) {
            $str_arr[$y] = $str_up[$x];
        }
        $x++;
    }
    $y++;
}
$newArr = explode(' ', $str_arr);
print_r($newArr);

#do_while
$empty = ' ';
$count = 0 ;
$strArr = '';

do{
    if ($arr[$count] == ''){
        break;
    }
    $strArr .= $arr[$count];
    $strArr .= $empty;
    $count++;
}while (true);

//var_dump($strArr);

$y = 0;
do{
    if ($strArr[$y] == '') {
        break;
    }
    do{
        if ($str_up[$x] == '') {
            $x = 0;
            break;
        } elseif ($strArr[$y] == $str_low[$x] or $strArr[$y] == $str_up[$x]) {
            $strArr[$y] = $str_up[$x];
        }
        $x++;
    }while(true);
    $y++;
}while(true);

$newArr = explode(' ', $strArr);
print_r($newArr);

#for
$strArr = '';
$empty = ' ';

for ($i = 0; $i >= 0 ; $i++){
    if ($arr[$i] == ''){
        break;
    }
    $strArr .= $arr[$i];
    $strArr .= $empty;
}
//var_dump($strArr);
for ($i = 0; $i >= 0 ; $i++){
    if ($strArr[$i] == '') {
        break;
    }
    for ($p = 0; $p >= 0; $p++) {
        if ($str_up[$p] == '' ) {
            break;
        } elseif ($strArr[$i] == $str_up[$p] or $strArr[$i] == $str_low[$p]) {
            $strArr[$i] = $str_up[$p];
        }
    }

}

$newArr = explode(' ', $strArr);
print_r($newArr);


#foreach
$strArrUp = [];
$strArrLow = [];
#
# строки из букв конвертирую в массивы
#
for ($i = 0; $i >= 0; $i++) {
    if ($str_low[$i] == '') {
        break;
    }
    $strArrLow[] = $str_low[$i];
}
for ($i = 0; $i >= 0; $i++) {
    if ($str_up[$i] == '') {
        break;
    }
    $strArrUp[] = $str_up[$i];
}

# foreach перебираю массивы

$strArr = '';
$empty = ' '; # добавляю разделение в строке пробелом =)
$newArr = [];

# из массива делаю строку
foreach ($arr as $key){
    $strArr .= $key ;
    $strArr .= $empty ;

}
//var_dump($strArr);

# из строки делаю опять массив с ключами значениями  ( 0 => A и т.д.)

for ($i = 0; $i >= 0; $i++) {
    if ($strArr[$i] == '') {
        break;
    }
    $newStrArr[] = $strArr[$i];
}
//echo '<pre>';
//print_r($newStrArr);
//echo '</pre>';
//#
# обхожу массив и в пустую строку складываю все уже в нижнем регистре
#
$emptyStr = '';
foreach ($newStrArr as $items ) {
    for ($i = 0; $i >= 0 ; $i++){
        if ($str_low[$i] == ''){
            break;
        }elseif ($str_up[$i] == $items or $str_low[$i] == $items){
            $items = $str_up[$i];
            $emptyStr .= $items;
        }
    }
}

$lastArr = explode(' ', $emptyStr);  #   возвращаю масиву исходный вид .
//print_r($lastArr);


//9. Дано число
//let num = 1234678
//развернуть ее в обратном направлении

#while
$num = 12346789;
$str = '';
$strNum = $str .= $num;
$count = 0;
$strReverse = '';
while(true){
    if ($strNum[$count] == '') {
        break;
    }
    $count++;
}
while ($count-- >= 1) {
    $str1 = $strNum[$count];
    $strReverse .= $str1;
}

$qwerty = (int)$strReverse;
var_dump($qwerty);

#do_while
$num = 12346789;
$str = '';
$strNum = $str .= $num;
$count = 0;
$strReverse = '';

do{
    if ($strNum[$count] == '') {
        break;
    }
    $count++;
}while(true);

do{
    $str1 = $strNum[$count];
    $strReverse .= $str1;
}while ($count-- >= 1);


$qwerty = (int)$strReverse;
//var_dump($qwerty);


#for
$num = 12346789;
$str = '';
$strNum = $str .= $num;
$count = 0;
$strReverse = '';


for ($i = 0;$i >= 0;$i++){
    if ($strNum[$i] == '') {
        break;
    }
    $count++;
}
for ($i = $count ; $i > 0; $i--){
    $str1 = $strNum[$i];
    $strReverse .= $str1;
}

$qwerty = (int)$strReverse;
//var_dump($qwerty);

#foreach
$num = 123456789;
$str = '';
$strNum = $str .= $num;
$count = 0;
$arrNum = [];

#создаю массив из строки чисел
while (true) {
    if ($strNum[$count] == '') {
//        $count = 0;
        break;
    }
    $arrNum[] = $strNum[$count];
    $count++;
}
//echo $count;
//print_r($arrNum);

#раскладываю массив в обратном порядке
$arrReverse = [];
foreach ($arrNum as $v) {
    $count--;
    $arrReverse[] = $arrNum[$count];
}

#конвертирую массив обратно в строку обратного порядка
$newStr = '';
foreach ($arrReverse as $value){
    $newStr .= $value;
}

$newNum =  (int)$newStr; #а здесь уже привожу строку к числу.
var_dump($newNum);


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


#do_while
$countArrAllItems = 1;
$a = 0;
$i = 0;

do{
    if ($arr[$countArrAllItems] == ''){
        break;
    }
    $countArrAllItems++;
}while(true);


do{
    if ($i == $countArrAllItems - 1){
        $i = 0;
    }
    do{

        $elemet1 = $arr[$i];
        $elemet2 = $arr[$i + 1];
        if ($elemet1 > $elemet2) {
            $arr[$i] = $elemet2;
            $arr[$i + 1] = $elemet1;
        }
        $i++;
    }while($i < $countArrAllItems - 1);
    $a++;
}while($a < $countArrAllItems);

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