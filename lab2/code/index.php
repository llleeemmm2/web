<?php
// Task 1
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order = "\nI like web-programming";

echo "\nYour order is: $very_bad_unclear_name.";

echo "<br>";

// Task 2
$num1 = 20;
echo $num1;
echo "\n";

$num2 = 22;
echo $num2;
echo "\n";

$num3 = 22.12;
echo $num3;
echo "\n";

$num4 = 4;
$num5 = 8;
echo $num4 + $num5;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n";
echo $last_month - $this_month;

echo "<br>";

// Task 11

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

echo "<br>";

// Task 12

echo 8 ** 2 ;

echo "<br>";

// Task 13

$my_num = 5;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -= $my_num;
echo $answer;

echo "<br>";

// Task 14

$a=10;
$b=3;
echo $a % $b;
echo "\n";
if ($a % $b == 0)
{
    echo "It is divided";
    echo "\n";
    echo $a / $b;
}
else
{
    echo "It is divided with the remainder";
    echo "\n";
    echo $a % $b;
}
echo "\n";
$st = pow(2, 10);
echo $st;
echo "\n";
$s = sqrt(245);
echo $s;
echo "\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $arr)
{
    $sum += $arr ** 2;
}
echo sqrt($sum);

$sqrtof379 = sqrt(379);
echo"\n{$sqrtof379}\n";
echo round($sqrtof379), " ", round($sqrtof379, 1), " ", round($sqrtof379, 2), "\n";

$sqrtof587 = sqrt(587);
$arrof587 = [
    "floor" => floor($sqrtof587),
    "ceil" => ceil($sqrtof587)
];
echo $sqrtof587;
echo "\n";
echo $arrof587["floor"];
echo "\n";
echo $arrof587["ceil"];
echo "\n";

echo min(4, -2, 5, 19, -130, 0, 10);
echo "\n";
echo max(4, -2, 5, 19, -130, 0, 10);
echo "\n";

$random = rand(1, 100);
echo $random;
echo "\n";

$randomArr = [];
for ($i = 0; $i <= 9; $i++)
{
    $randomArr[$i] = rand(1, 100);
}
foreach ($randomArr as $number) {
    echo $number . "\n";
}

$a = 333;
$b = 444;
echo abs($a - $b);
echo "\n";
$a = 222;
$b = 111;
echo abs($b - $a);
echo "\n";

$noabsArr = [1, 2, -1, -2, 3, -3];
$absArr = [];
foreach($noabsArr as $value){
    $absArr[] = abs($value);
}
foreach ($absArr as $number) {
    echo $number . "\n";
}

$num40 = 40;
$dividers = [];
for ($i = 1; $i <= $num40; $i++)
{
    if ($num40 % $i ==0)
    {
        $dividers[] = $i;
    }
}
foreach ($dividers as $number) {
    echo $number . "\n";
}

$arr110 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum110 = 0;
$count = 0;
while ($sum110 <= 10)
{
    $sum110 += $arr110[$count];
    $count += 1;
}
echo $count;

echo "<br>";

// Task 15

function printStringReturnNumber($string)
{
    echo $string;
    return 322;
}

$my_num = printStringReturnNumber("I like web-programming");
echo "\n$my_num";

echo "<br>";

// Task 16

function increaseEnthusiasm($str)
{
    return $str . "!";
}
echo increaseEnthusiasm("I like web-programming");
echo "\n";

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}
echo repeatThreeTimes("I like web-programming");
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes("I like web-programming"));
echo "\n";

function cut($str, $num = 10)
{
    return substr($str, 0, $num);
}
echo cut("3222222222222", 3);
echo "\n";

$arr16 = [22, 12, 2004, 2024, 322];
function printArr16($arr16, $index = 0)
{
    if ($index < count($arr16))
    {
        echo $arr16[$index] . " ";
        printArr16($arr16, $index + 1);
    }
}
printArr16($arr16);
echo "\n";

$num16 = 22122004;
function SumOfDigits($num)
{
    $sum = 0;
    while ($num > 0)
    {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    if ($sum>9)
    {
        return SumOfDigits($sum);
    }
    return $sum;
}
echo SumOfDigits($num16);

echo "<br>";

// Task 17

function arrayFill($value, $count)
{
    $result = [];
    for ($i = 0; $i < $count; $i++)
    {
        $result[] = str_repeat($value, $i + 1);
    }
    return $result;
}
$arr17 = arrayFill('x', 7);
print_r($arr17);
echo "\n";

$arr171 = array
(
    array(1,2,3),
    array(4,5),
    array(6,7)
);
$sum = 0;
foreach ($arr171 as $row)
{
    foreach ($row as $value)
    {
        $sum += $value;
    }
}
echo $sum;
echo "\n";

$array = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = ($i * 3) + $j + 1;
    }
    $array[] = $subArray;
}

print_r($array);
echo "\n";

$arr172 = [2, 5, 3, 9];
$result = ($arr172[0] * $arr172[1]) + ($arr172[2] * $arr172[3]);
echo $result;
echo "\n";

$user = [
    'name' => 'Илья',
    'surname' => 'Мирошник',
    'patronymic' => 'Сергеевич'
];

echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
echo "\n";

$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];

echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];
echo "\n";

$arr173 = ['a', 'b', 'c', 'd', 'e'];
$arrCount = count($arr173);
echo $arrCount;
echo "\n";
echo end($arr173);
echo "\n";
echo prev($arr173);
echo "\n";

echo "<br>";

// Task 18

$num181 = 2004;
$num182 = 2024;
function checkSum($num181, $num182)
{
    if ($num181 + $num182 > 10)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function checkEqual($num181, $num182)
{
    if ($num181 + $num182 > 10)
    {
        return true;
    }
    else
    {
        return false;
    }
}
echo checkSum($num181, $num182);
echo "\n";
echo checkEqual($num181, $num182);
echo "\n";

$test = 0;
if ($test == 0) echo "Верно";
echo "\n";

$age = 19;
$sum = 0;

if ($age < 10 || $age > 99) {
    echo "Число меньше 10 или число больше 99";
} else {
    while ($age > 0) {
        $sum += $age % 10;
        $age = floor($age / 10);
    }

    if ($sum <= 9) {
        echo "Сумма цифр однозначна";
    } else {
        echo "Сумма цифр двузначна";
    }
}
echo "\n";

$arr18 = [22, 12, 2004];

if (count($arr18) == 3) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    echo "Сумма элементов массива: $sum";
} else {
    echo "Массив не содержит 3 элементов";
}