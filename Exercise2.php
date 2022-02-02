<?php

#1.Write PhP script with two string variables
$data1 = "Red";
$data2 = "Blue";


$result = $data1 . $data2;

echo $result;

#Prints the length
echo strlen($result);

#2. No effect

#3. It gives syntax error "unexpected identifier" in line 5

#4 It gives parse error

#5.It gives error "unxpected variable"

#6.

echo '"It is Markkus car"';

$s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);

echo "Random characters: $s ";

#Operators 1.

$number1 = 298;
$number2 = 234;
$number3 = 46;

$total = $number1 + $number2 + $number3;

echo $total;


echo "    ";

#Operators 2.

$num1 = 87;
$num2 = 44;
$num3 = 200;
$num4 = 15;
$num5 = 10;

$totalsum = ( $num1 + $num2 ) + ($num3 * $num4) / $num5;

echo $totalsum;

?>