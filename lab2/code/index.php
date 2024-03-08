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