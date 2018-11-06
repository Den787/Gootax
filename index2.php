<?php

/*
 * 1. Объявите в начале скрипта две целочисленных переменных $a и $b, начальные значения определите с помощью констант.
 *  Написать скрипт:
 *  a. если $a и $b положительные – выведите их сумму.
 * b. если $а и $b отрицательные – выведите из разность.
 * c. если $а и $b разных знаков – выведите их произведение.
 * Ноль можно считать положительным числом
 */


const number1 = 5;
const number2 = 10;

$a = number1;
$b = number2;

   function doArithmeticOperations($a,$b)
   {
       if ($a >= 0 && $b >= 0) {
            return $a + $b;
       }

       elseif ($a < 0 && $b < 0) {
           return $a - $b;
       }

       elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b <0)) {
           return $a * $b;
       }


   }

    print_r(doArithmeticOperations($a,$b));
   echo '<br>';
    print_r(doArithmeticOperations(-$a,$b));
   echo '<br>';
    print_r(doArithmeticOperations(-$a,-$b));
   echo '<br>';

echo '<br/>';
echo '-----------------------------------------------------';
echo '<br/>';

/*
 * 2. Выведите большее из чисел используя тернарный оператор.
 */

   print_r($a > $b ? $a : $b);
echo '<br/>';
echo '-----------------------------------------------------';
echo '<br/>';

   /*
    * 3. Присвойте $а значение в промежутке [0..9]. С помощью оператора switch организуйте вывод чисел от $a до 9;
    */

   switch ($a) {
       case 0:
           echo '0,1,2,3,4,5,6,7,8,9';
           break;
       case 1:
           echo '1,2,3,4,5,6,7,8,9';
           break;
       case 2:
           echo '2,3,4,5,6,7,8,9';
           break;
       case 3:
           echo '3,4,5,6,7,8,9';
           break;
       case 4:
           echo '4,5,6,7,8,9';
           break;
       case 5:
           echo '5,6,7,8,9';
           break;
       case 6:
           echo '6,7,8,9';
           break;
       case 7:
           echo '7,8,9';
           break;
       case 8:
           echo '8,9';
           break;
       case 9:
           echo '9';

   }

echo '<br/>';
echo '-----------------------------------------------------';
echo '<br/>';