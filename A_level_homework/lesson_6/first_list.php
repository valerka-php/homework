<?php

//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand).
//Далее, вычислить произведение тех элементов, которые больше нуля и у которых четные индексы.
//После вывести на экран элементы, которые больше нуля и у которых нечетный индекс.

function createArr ($length){
    for ($i = 0; $i < $length; $i++) {
        $arr[$i] = rand(1, 100);
    }
    return $arr;
}
$arr = createArr(5);
//dd(createArr(15));

function multiplicationElemArr($arr){
    $newArr = 1;
    foreach ($arr as $value){
        if ($value > 0 && ($value % 2) == 0 ){
            $newArr *= $value;
        }
    }
    return $newArr;
}
$multpl = multiplicationElemArr($arr);
//echo $multpl;

function showElemOdd ($arr){
    foreach ($arr as $value){
        if ($value > 0 && ($value % 2) !== 0 ){
            echo $value  . '<br>';
        }
    }
    return true;
}
//showElemOdd($arr);

//Даны два числа. Найти их сумму и произведение.
// Даны два числа. Найдите сумму их квадратов.
$num1 = rand(1,25);
$num2 = rand(1,25);

function calcSumNums ($firstNum,$secondNum){
    echo $firstNum + $secondNum;
    return true;
}
calcSumNums($num1,$num2);

function calcMultiplicationNums ($firstNum,$secondNum){
    echo $firstNum * $secondNum;
    return true;
}
calcMultiplicationNums($num1,$num2);

function calcSquareNums ($firstNum,$secondNum){
    echo ($firstNum*$firstNum) + ($secondNum*$secondNum);
    return true;
}
calcSumNums($num1,$num2);


//Даны три числа. Найдите их среднее арифметическое.

$num1 = 5;
$num2 = 14;
$num3 = 26;

function calcAverage (...$nums){
    $sumNum = 0;
    $count = 0;
    foreach ($nums as $value){
        $sumNum += $value;
        $count++;
    }
    return $sumNum / $count;
}
echo calcAverage($num1,$num2,$num3);

//Дано число. Увеличьте его на 30%, на 120%.

$num = 45;

function increasePercent($num,$percent){
    $result = $num + $num * $percent / 100;
    return $result;
}

echo increasePercent($num,30);
echo increasePercent($num,120);

//Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.

function createArrNullOne($lenght)
{
    $array = [];
    for ($i = 0; $i <= $lenght;$i++){
        if($i % 2 == 0 ){
            $array[$i] = 0;
        }else{
            $array[$i] = 1;
        }
    }

    return $array;
}

$arr = createArrNullOne(10);
echo '<pre>';
print_r($arr);
echo '</pre>';


//Определите, есть ли в массиве повторяющиеся элементы.

function checkRepeatElem($arr){
    for ($i = 0; $i <= $arr[$i]; $i++){
        for ($p = $i+1; $p <= $arr[$i];$p++){
            if ($arr[$i] === $arr[$p]){
                $boxArr = $arr[$i];
                break;
            }
        }
    }
    $boxArr = [];
    if ($boxArr == ''){
        return 'Array has not repeating item';
    }else{
        return 'Array has repeating item';
    }
}

$arr = [10,1,2,3,4,5,6,7,8,9,10];
echo checkRepeatElem($arr);

//Найти площадь

function findSquare ($first,$second){
    $square = $first*$second;
    return $square;
}
echo findSquare(5,55);

//Теорема Пифагора

function calcPifagor ($cathetus1,$cathetus2,$hypotenuse){
    if ($cathetus1 == 0 || $cathetus2 == 0 || $hypotenuse == 0 ){
        return 'side can`t be 0';
    }elseif (($hypotenuse**2) == ($cathetus2**2)+ ($cathetus1**2) ){
        return ' triangle isosceles';
    }else{
        return ' triangle isn`t isosceles';
    }
}

echo calcPifagor(4,3,5);

//Найти периметр


function calcPerimeter($side){
    $perimeter = ($side + $side) * 2;
    return 'периметр прямоугольника =   ' . $perimeter ;
}
echo calcPerimeter(5);

//Создать только четные числа до 100

function createNumEven($count = 100){
    for ($i = 0; $i <= $count ; $i++){
        if ($i % 2 == 0 ){
            $arr[$i] = $i;
        }
    }
    return $arr;
}
echo '<pre>';
print_r(createNumEven());
echo '</pre>';


//Создать не четные числа до 100

function createNumNotEven($count = 100){
    for ($i = 0; $i <= $count ; $i++){
        if ($i % 2 !== 0 ){
            $arr[$i] = $i;
        }
    }
    return $arr;
}
echo '<pre>';
print_r(createNumNotEven());
echo '</pre>';

//Найти дискриминант

function findDiscriminant($a,$b,$c){
    $discrimant = ($b**2) - (4*$a*$c);
    return $discrimant;
}

echo findDiscriminant(5,5,4);
//D = b2 – 4ac.



//Найти минимальное и максимальное среди 3 чисел

function findMinNum(...$arr){
    $min = $arr[0];
    foreach ($arr as $value){
        if ($value <= $min){
            $min = $value;
        }
    }
    return $min;
}
echo findMinNum(5,4,7,9,9,5,4,3,2);

function findMaxNum(...$arr){
    $min = $arr[0];
    foreach ($arr as $value){
        if ($value >= $min){
            $min = $value;
        }
    }
    return $min;
}
echo findMaxNum(5,4,7,9,10,9,5,4,3,2);

//Создать функцию по нахождению числа в степени

function calcDegree($num,$degree){
    $result = $num;
    for ($i = 1;$i < $degree ; $i++){
        $result *= $num;
    }
    return $result;
}

echo calcDegree(5,5);

//написать функцию поиска в массиве.
//функция будет принимать два параметра.
//Первый массив, второй поисковое число. search(arr, find)


function searchInArr($arr,$find){
    foreach ($arr as $value){
        if($value == $find){
            return "Element $find found";
        }
    }
}

$array = [4,5,6,7,9,2,44,3,5,654,4];
echo searchInArr($array,44);

//написать функцию сортировки. Функция принимает массив случайных чисел и сортирует их по порядку.
//По дефолту функция сортирует в порядке возрастания.
//Но если передать в сторой параметр то функция будет сортировать по убыванию.
//sort(arr)
//sort(arr, 'asc')
//sort(arr, 'desc')


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
}

$arr= [1,5,55,4,36,634,6373,473,433,44];
print_r(sortInArr($arr));

