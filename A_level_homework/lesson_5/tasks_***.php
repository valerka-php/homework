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
    $arr1[] = $arr[$q] ;
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
$count = 0;
for ($i = 0; $i >= $count; $i++) {
    if ($txt[$count] == '') {
        break;
    }
    for ($p = 0; $p >= 0; $p++) {
        if ($str_up[$p] == '') {
            break;
        } elseif ($txt[$count] == $str_up[$p] or $txt[$count] == $str_low[$p]) {
            echo $txt[$count] = $str_low[$p];
        }
    }
    $count++;
}

// foreach пока нету , не могу понять как им два массива сравнить.

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

//foreach  здесь такая же беда .

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
    $str1 .= $str[$q] ;
}
echo $str1;

#foreach
for ($i = 0; $i >= 0; $i++) { // нужно строку в массив переделать
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