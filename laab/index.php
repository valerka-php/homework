<?php
//
//
//Создайте функцию, которая подсчитывает количество директорий в массиве .
//Примеры:
//1 == solution(["C:/Projects/something.txt", "file.exe"])
//0 == solution(["brain-games.exe", "gendiff.sh", "task-manager.rb"])
//3 == solution(["C:/Users/JohnDoe/Music/Beethoven_5.mp3", "/usr/bin", "/var/www/myprojectt"])


function countPath($arr)
{
    $count = 0;
    foreach ($arr as $value) {
        if (strstr($value, '/')) {
            $count++;
        }
    }
    return $count;
}

$arr = ["C:/Users/JohnDoe/Music/Beethoven_5.mp3", "/usr/bin", "/var/www/myprojectt"];
echo countPath($arr);


$countPath = function ($arr) {
    $count = 0;
    foreach ($arr as $value) {
        if (strstr($value, '/')) {
            $count++;
        }
    }
    return $count;
};
echo $countPath($arr);

//Создайте функцию, которая принимает массив из трех элементов представляющих собой результат запуска слот - машины из казино . Проверьте, является ли комбинация элементов удачной(все элементы равны).
//Примеры:
//true == solution(["9919", "9919", "9919"])
//false == solution(["abc", "abc", "abb"])
//true == solution(["@", "@", "@"])


function checkElemSolution($arr)
{
    $check = true;
    foreach ($arr as $value) {
        if ($value === $arr[0]) {
            continue;
        } else {
            return false;
        }
    }
    return $check;
}


$arr = ["9919", "9919", "9919"];
echo checkElemSolution($arr);


$checkElem = function ($a, $b, $c) {
    $check = true;
    foreach ($arr as $value) {
        if ($value === $arr[0]) {
            continue;
        } else {
            return false;
        }
    }
    return $check;
};

echo $checkElem(1, 1, 1);


//Сэму и Фродо надо держаться вместе . Проверьте, нет ли между ними других персонажей .
//Примеры:
//true == solution(["Sam", "Frodo", "Troll", "Balrog", "Human"])
//false == solution(["Orc", "Frodo", "Treant", "Saruman", "Sam"])
//true == solution(["Orc", "Sam", "Frodo", "Gandalf", "Legolas"])

function checkSamAndFrodo($arr)
{
    $count = count($arr);
    for ($q = 0; $q < $count; $q++) {
        for ($p = 0; $p < $count - 1; $p++) {
            $elemet1 = $arr[$p];
            $elemet2 = $arr[$p + 1];
            if ($elemet1 === "Sam" && $elemet2 === "Frodo") {
                return true;
            }
        }
    }
}

$arr = ["Sam", "Frodo", "Troll", "Balrog", "Human"];
echo checkSamAndFrodo($arr);


$checkSamAndFrodo = function ($arr) {
    $count = count($arr);
    for ($q = 0; $q < $count; $q++) {
        for ($p = 0; $p < $count - 1; $p++) {
            $elemet1 = $arr[$p];
            $elemet2 = $arr[$p + 1];
            if ($elemet1 === "Sam" && $elemet2 === "Frodo") {
                return true;
            }
        }
    }
};
$arr = ["Sam", "Frodo", "Troll", "Balrog", "Human"];
echo $checkSamAndFrodo($arr);


//Найдите второе наибольшее число в массиве .
//Примеры:
//2 == solution([1, 2, 3])
//1 == solution([1, -2, 3])
//0 == solution([0, 0, 10])
//- 2  == solution([-1, -2, -3])


function findSecondBiggestNum($arr)
{
    $first = $arr[0];
    foreach ($arr as $value) {
        if ($value > $first) {
            $first = $value;
        }
        $second = $arr[1];

    }
    foreach ($arr as $value) {
        if ($value == $first) {
            continue;
        } elseif ($value > $arr[1])
            $second = $value;

    }
    return $second;
}

$arr = [1, -2, 3];
echo findSecondBiggestNum($arr);


$findSecondNum = function ($arr) {
    $first = $arr[0];
    foreach ($arr as $value) {
        if ($value > $first) {
            $first = $value;
        }
        $second = $arr[1];

    }
    foreach ($arr as $value) {
        if ($value == $first) {
            continue;
        } elseif ($value > $arr[1])
            $second = $value;

    }
    return $second;
};

$arr = [1, 2, 3];
echo $findSecondNum($arr);


//Рассчитайте финальную оценку студента по пяти предметам . Если средняя оценка больше 90, то итоговая A . Если средняя оценка больше 80, то итоговая B . Если средняя оценка больше 70, то итоговая оценка C . Если средняя оценка больше 60, то итоговая оценка D . В остальных случаях итоговая оценка F .
//Примеры:
//"Grade: A" == solution([90, 91, 99, 93, 100])
//"Grade: B" == solution([92, 77, 85, 84, 84])
//"Grade: C" == solution([70, 72, 78, 72, 70])
//"Grade: D" == solution([60, 61, 62, 63, 70])
//"Grade: F" == solution([50, 42, 20, 31, 0])
//"Grade: F" == solution([10, 9, 2, 3, 5])

function calcValue($arr)
{
    $summ = 0;
    $count = 0;
    foreach ($arr as $value) {
        $summ += $value;
        $count++;
    }
    $result = $summ / $count;
    if ($result >= 90) {
        echo 'value A';
    } elseif ($result >= 80) {
        echo 'value B';
    } elseif ($result >= 70) {
        echo 'value C';
    } elseif ($result >= 60) {
        echo 'value D';
    } elseif ($result >= 50) {
        echo 'value E';
    }

}

$arr = [60, 61, 62, 63, 70];
//calcValue($arr);


$calcValue = function ($arr) {

    $summ = 0;
    $count = 0;
    foreach ($arr as $value) {
        $summ += $value;
        $count++;
    }
    $result = $summ / $count;
    if ($result >= 90) {
        echo 'value A';
    } elseif ($result >= 80) {
        echo 'value B';
    } elseif ($result >= 70) {
        echo 'value C';
    } elseif ($result >= 60) {
        echo 'value D';
    } elseif ($result >= 50) {
        echo 'value E';
    }


};
echo $calcValue($arr);


//Создайте функцию которая принимает целое число и возвращает строку с названием фигуры, состоящий из переданного количество сторон .
//Примеры:
//"circle" == solution(1)
//"semi-circle" == solution(2)
//"triangle" == solution(3)
//"square" == solution(4)
//"pentagon" == solution(5)
//"hexagon" == solution(6)
//"heptagon" == solution(7)
//"octagon" == solution(8)
//"nonagon" == solution(9)
//"decagon" == solution(10)

function findFigure($sides)
{

    switch ($sides) {

        case 1 :
            echo "circle";
            break;
        case 2 :
            echo "semi-circle";
            break;
        case 3 :
            echo "triangle";
            break;
        case 4 :
            echo "square";
            break;
        case 5 :
            echo "pentagon";
            break;
        case 6 :
            echo "hexagon";
            break;
        case 7 :
            echo "heptagon";
            break;
        case 8 :
            echo "octagon";
            break;
        case 9 :
            echo "nonagon";
            break;
        case 10 :
            echo "decagon";
            break;

    }

}

findFigure(8);


$findSides = function ($sides) {

    switch ($sides) {

        case 1 :
            echo "circle";
            break;
        case 2 :
            echo "semi-circle";
            break;
        case 3 :
            echo "triangle";
            break;
        case 4 :
            echo "square";
            break;
        case 5 :
            echo "pentagon";
            break;
        case 6 :
            echo "hexagon";
            break;
        case 7 :
            echo "heptagon";
            break;
        case 8 :
            echo "octagon";
            break;
        case 9 :
            echo "nonagon";
            break;
        case 10 :
            echo "decagon";
            break;

    }
};

echo $findSides(5);


//Создайте функцию, которая трансформирует массив слов в массив длин этих слов .
//Примеры:
//[5, 5] == solution(["hello", "world"])
//[4,4,4,7]  == solution(["some", "test", "data", "strings"])
//[7] == solution(["clojure"])


function findCountStr($arr)
{
    $result = [];
    $count = 0;
    foreach ($arr as $value) {
        $result[$count] = strlen($value);
        $count++;
    }

    return $result;
}

$arr = ["some", "test", "data", "strings"];
print_r(findCountStr($arr));


$findCountStr = function ($arr) {
    $result = [];
    $count = 0;
    foreach ($arr as $value) {
        $result[$count] = strlen($value);
        $count++;
    }

    return $result;
};

$arr = ["clojure"];
print_r($findCountStr($arr));


//Дан массив строк, создайте функцию, которая создает новый массив, содержащий строки, длины которых соответствуют наидлиннейшей строке .
//Примеры:
//["programms"] == solution(["in", "Soviet", "Russia", "frontend", "programms", "you"])
//["clojure","greater"]  == solution(["using", "clojure", "makes", "your", "life", "greater"])
//["a","b","c","d"]  == solution(["a", "b", "c", "d"])

function findStr($arr)
{
    $arrNum = [];
    $count = 0;
    foreach ($arr as $value) {
        $arrNum[$count] = strlen($value);
        $count++;
    }

    $max = $arrNum[0];
    foreach ($arrNum as $value) {
        if ($value >= $max) {
            $max = $value;
        }
    }

    $newStr = '';
    $explode = ' - ';
    foreach ($arr as $value) {
        if (strlen($value) == $max) {
            $newStr .= $value;
            $newStr .= $explode;
        }

    }

    return $newStr;


}

$arr = ["using", "clojure", "makes", "your", "life", "greater"];
echo findStr($arr);

$findStr = function ($arr) {
    $arrNum = [];
    $count = 0;
    foreach ($arr as $value) {
        $arrNum[$count] = strlen($value);
        $count++;
    }

    $max = $arrNum[0];
    foreach ($arrNum as $value) {
        if ($value >= $max) {
            $max = $value;
        }
    }

    $newStr = '';
    $explode = ' - ';
    foreach ($arr as $value) {
        if (strlen($value) == $max) {
            $newStr .= $value;
            $newStr .= $explode;
        }

    }

    return $newStr;

};

$arr = ["a", "b", "c", "d"];
echo $findStr($arr);


//Фермер просит вас посчитать сколько ног у всех его животных . Фермер разводит три вида: курицы = 2 ноги коровы = 4 ноги свиньи = 4 ноги Фермер посчитал своих животных и говорит вам, сколько их каждого вида . Вы должны написать функцию, которая возвращает общее число ног всех животных .
//Примеры:
//
//36 == solution(2, 3, 5)
//22 == solution(1, 2, 3)
//50 == solution(5, 2, 8)


function calcAnimalLegs($chicken, $cow, $pig)
{
    $result = ($chicken * 2) + ($cow * 4) + ($pig * 4);
    return $result;
}

echo calcAnimalLegs(2, 3, 5);


$calcAnimalLegs = function ($chicken, $cow, $pig) {
    $result = ($chicken * 2) + ($cow * 4) + ($pig * 4);
    return $result;
};

echo $calcAnimalLegs(1, 2, 3);


function findSecondBiggestNum($arr)
{
    $first = $arr[0];
    foreach ($arr as $value) {
        if ($$value > $first) {
            $first = $value;
        }
        $second = $arr[1];

    }
    foreach ($arr as $value) {
        if ($value == $first) {
            continue;
        } elseif ($value > $arr[1])
            $second = $arr[1];

    }
    return $second;
}