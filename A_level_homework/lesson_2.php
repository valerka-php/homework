<?php

//все переменные выводим через echo/print/print_r
//создать переменную строку ваше имя и вывести на экран
//создать переменную возраст и вывести на экран
//создать переменную и присвоить ей число pi вывести переменную на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’] вести ее на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’]] вести ее на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’, [‘gosha’, mila]]] вести ее на экран
//создать переменную массив [[‘alex’, ‘vova’, ‘tolya’], [‘kostya’, ‘olya’], [‘gosha’, mila]] вести ее на экран

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . ' 1 Cоздать переменную строку ваше имя и вывести на экран' . '</b>' . '</div>';
echo '<hr>';

$name = 'Valerii';
echo $name;

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . ' 2 Cоздать переменную возраст и вывести на экран' . '</b>' . '</div>';
echo '<hr>';

$age = 25;
echo $age;

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . ' 3 Cоздать переменную и присвоить ей число pi вывести переменную на экран' . '</b>' . '</div>';
echo '<hr>';

$pi1 = M_PI;
$pi2 = pi();

echo $pi1 . '<br>';
echo $pi2;

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . '4 Cоздать переменную массив [‘alex’, ‘vova’, ‘tolya’] вести ее на экран' . '</b>' . '</div>';
echo '<hr>';

$arr = ['alex', 'vova', 'tolya'];
print_r($arr) . '<br>';

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . '5 создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’]] вести ее на экран' . '</b>' . '</div>';
echo '<hr>';

$arr2 = ['alex', 'vova', 'tolya', ['kostya', 'olya']];
print_r($arr2);

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . '6 создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’, [‘gosha’, mila]]] вести ее на экран' . '</b>' . '</div>';
echo '<hr>';

$arr3 = ['alex', 'vova', 'tolya', ['kostya', 'olya', ['gosha', 'mila']]];
print_r($arr3);

echo '<hr>';
echo '<div style="text-align: center;">' . '<b>' . '7 Cоздать переменную массив [[‘alex’, ‘vova’, ‘tolya’], [‘kostya’, ‘olya’], [‘gosha’, mila]] вести ее на экран' . '</b>' . '</div>';
echo '<hr>';

$arr4 = [['alex', 'vova', 'tolya'], ['kostya', 'olya'], ['gosha', 'mila']] ;
print_r($arr4) ;
