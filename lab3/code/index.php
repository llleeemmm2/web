<?php
// Находим строки 'abba', 'adca', 'abea'
$pattern = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);

// Преобразуем цифры в их кубы
$str = 'a1b2c3';
$result = preg_replace_callback('/\d/', function($matches) {
    return pow($matches[0], 3);
}, $str);
echo $result;