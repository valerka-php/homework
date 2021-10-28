<?php
function dd($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

//Найти площадь квадрата
# function expression
$square = function ($firstSide,$secondSide){
    $sq = $firstSide * $secondSide;
    return $sq;
};
echo $square(5,4);

# Стрелочной функцией
$square = fn($firstSide,$secondSide) => $sq = $firstSide * $secondSide;
echo $square(5,5);

//Теорема Пифагора
# function expression
$pifagor = function ($cathetus1,$cathetus2,$hypotenuse){
    if ($cathetus1 == 0 || $cathetus2 == 0 || $hypotenuse == 0 ){
        return 'side can`t be 0';
    }elseif (($hypotenuse**2) == ($cathetus2**2)+ ($cathetus1**2) ){
        return ' triangle isosceles';
    }else{
        return ' triangle isn`t isosceles';
    }
};
echo $pifagor(4,4,2);

# Стрелочной функцией
function pifagor ($cathetus1,$cathetus2,$hypotenuse){
    if ($cathetus1 == 0 || $cathetus2 == 0 || $hypotenuse == 0 ){
        return 'side can`t be 0';
    }elseif (($hypotenuse**2) == ($cathetus2**2)+ ($cathetus1**2) ){
        return ' triangle isosceles';
    }else{
        return ' triangle isn`t isosceles';
    }
};
$pifagor = fn($a,$b,$c) => pifagor($a,$b,$c) ;
echo  $pifagor(4,2,0);


//Найти периметр квадрата
# function expression
$perimetr = function ($sideA,$sideB){
    $result = ($sideA+$sideB)  * 2;
    return $result;
};
echo $perimetr(5,5);

# Стрелочной функцией
$perimetr = fn($sideA,$sideB) => ($sideA + $sideB) * 2;
echo $perimetr(5,3);

//Найти дискриминант
# function expression
$discrimant = function ($a,$b,$c){
    $result= ($b**2) - (4*$a*$c);
    return $result;
};
echo $discrimant(5,5,4);
//D = b2 – 4ac.

# Стрелочной функцией
$discrimat = fn($a,$b,$c) => ($b**2) - (4*$a*$c);
echo $discrimat(5,5,4);

//Создать только четные числа до 100
# function expression
$numEven = function ($count){
    $result = [] ;
    for ($i = 0 ; $i <= $count; $i++){
        if ($i % 2 == 0 ){
            $result[] = $i;
        }
    }
    return $result;
};
dd(($numEven(100)));

# Стрелочной функцией
function searchEvenNum($count){
    $result = [] ;
    for ($i = 0 ; $i <= $count; $i++){
        if ($i % 2 == 0 ){
            $result[] = $i;
        }
    }
    return $result;
};
$numEven = fn($value) => dd(searchEvenNum($value));
echo $numEven(10);


//Создать нечетные числа до 100
# function expression
$numEven = function ($count){
    $result = [] ;
    for ($i = 0 ; $i <= $count; $i++){
        if ($i % 2 !== 0 ){
            $result[] = $i;
        }
    }
    return $result;
};
dd(($numEven(100)));

# Стрелочной функцией
function searchEvenNum1($count){
    $result = [] ;
    for ($i = 0 ; $i <= $count; $i++){
        if ($i % 2 !== 0 ){
            $result[] = $i;
        }
    }
    return $result;
};

$numEven = fn($value) => dd(searchEvenNum1($value));
echo $numEven(10);

//Определите, есть ли в массиве повторяющиеся элементы.
# function expression
$findRepetition = function ($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        for ($p = $i + 1; $p <= $count; $p++) {
            if ($arr[$i] === $arr[$p]) {
                $arrNew[] = $arr[$i];
                break;
            }
        }
    }
    if (empty($arrNew))
        echo 'Повторяющихся элементов в массиве нет';
    else
        echo 'Повторяющиеся элементы в массиве есть';
};
$arr = [1,2,3,4,5,6,7,8,9];
echo $findRepetition($arr);

//# Стрелочной функцией
$arr = [1,2,3,4,5,5,6,7,8,9];
function findRepetition ($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        for ($p = $i + 1; $p <= $count; $p++) {
            if ($arr[$i] === $arr[$p]) {
                $arrNew[] = $arr[$i];
                break;
            }
        }
    }
    if (empty($arrNew))
        echo 'Повторяющихся элементов в массиве нет';
    else
        echo 'Повторяющиеся элементы в массиве есть';
};

$findRepetition = fn($arr) => findRepetition($arr);
echo $findRepetition($arr);

//Сортировка из прошлого задания
# function expression
$arr= [1,5,55,4,36,634,6373,473,433,44];
$sortInArr = function ($arr, $sort = 'asc'){
    $count = count($arr);
    if ($sort == 'asc'){
        foreach ($arr as $key => $item){
            for ($p = 0; $p < $count - 1 ; $p++){
                $elemet1 = $arr[$p];
                $elemet2 = $arr[$p + 1];
                if ($elemet1 > $elemet2) {
                    $arr[$p] = $elemet2;
                    $arr[$p + 1] = $elemet1;
                }
            }
        }
    }else{
        foreach ($arr as $key => $item){
            for ($p = 0; $p < $count - 1 ; $p++){
                $elemet1 = $arr[$p];
                $elemet2 = $arr[$p + 1];
                if ($elemet1 < $elemet2) {
                    $arr[$p] = $elemet2;
                    $arr[$p + 1] = $elemet1;
                }
            }
        }
    }
    return $arr;
};
print_r($sortInArr($arr,'desc'));

# Стрелочной функцией
$arr = [1,5,55,4,36,634,6373,473,433,44];
function sortInArr ($arr, $sort = 'asc'){
    $count = count($arr);
    if ($sort == 'asc'){
        foreach ($arr as $key => $item){
            for ($p = 0; $p < $count - 1 ; $p++){
                $elemet1 = $arr[$p];
                $elemet2 = $arr[$p + 1];
                if ($elemet1 > $elemet2) {
                    $arr[$p] = $elemet2;
                    $arr[$p + 1] = $elemet1;
                }
            }
        }
    }else{
        foreach ($arr as $key => $item){
            for ($p = 0; $p < $count - 1 ; $p++){
                $elemet1 = $arr[$p];
                $elemet2 = $arr[$p + 1];
                if ($elemet1 < $elemet2) {
                    $arr[$p] = $elemet2;
                    $arr[$p + 1] = $elemet1;
                }
            }
        }
    }
    return $arr;
};

$sort = fn($arr) => sortInArr($arr);
dd($sort($arr));

//Найти минимальное и максимальное среди 3 чисел
# function expression
$arr = [21,33,41,53,78,84,22,44,333];
$minNum = function ($arr){
    $min = $arr[0];
    foreach ($arr as $value){
        if ($value <= $min){
            $min = $value;
        }
    }
    return $min;
};
echo $minNum($arr);


$arr = [21,33,41,53,78,84,22,44,333];
$maxNum = function ($arr){
    $max = $arr[0];
    foreach ($arr as $value){
        if ($value >= $max){
            $max = $value;
        }
    }
    return $max;
};
echo $maxNum($arr);


# Стрелочной функцией
$arr = [21,33,41,53,78,84,22,44,333];
function findMinNum($arr){
    $min = $arr[0];
    foreach ($arr as $value){
        if ($value <= $min){
            $min = $value;
        }
    }
    return $min;
}
function findMaxNum($arr){
    $min = $arr[0];
    foreach ($arr as $value){
        if ($value >= $min){
            $min = $value;
        }
    }
    return $min;
}

$minNum = fn ($arr) => findMinNum($arr);
$minMax = fn ($arr) => findMaxNum($arr);
echo $minNum($arr);
echo $minMax($arr);