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

   function doOperations($a, $b)
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

    print_r(doOperations($a,$b));
   echo '<br>';
    print_r(doOperations(-$a,$b));
   echo '<br>';
    print_r(doOperations(-$a,-$b));
   echo '<br>';

echo '<br/>';
echo '<hr>';
echo '<br/>';

/*
 * 2. Выведите большее из чисел используя тернарный оператор.
 */

   print_r($a > $b ? $a : $b);
echo '<br/>';
echo '<hr>';
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
echo '<hr>';
echo '<br/>';

/*
 * 4. Реализуйте все арифметические операции в виде функций с двумя параметрами.
*/
function doSum($num1,$num2) {
    return $num1 + $num2;
}
print_r(doSum(5,2));
echo '<br/>';

function doDiff($num1,$num2) {
    return $num1 - $num2;
}
print_r(doDiff(5,2));
echo '<br/>';

function doDiv($num1,$num2) {
    return $num1 / $num2;
}
print_r(doDiv(5,2));
echo '<br/>';

function doMult($num1,$num2) {
    return $num1 * $num2;
}
print_r(doMult(5,2));


echo '<br/>';
echo '<hr>';
echo '<br/>';

/*
 * 5. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1,
 * $arg2 – значения аргументов. $operation – строка с названием операции. В зависимости от переданного значения
 *  операции выполните одну из арифметических операций (используйте функции из пункта 4) и верните полученное
 * значение (используйте switch).
 */

function mathOperation($arg1,$arg2,$operation) {
    switch ($operation) {
        case '-' :
            return doDiff($arg1,$arg2);
            break;
        case '+':
            return doSum($arg1,$arg2);
            break;
        case '*':
            return doMult($arg1,$arg2);
            break;
        case '/':
            return doDiv($arg1,$arg2);
            break;
    }
}


print_r(mathOperation(5,2,'-'));
echo '<br/>';
print_r(mathOperation(5,2,'+'));
echo '<br/>';
print_r(mathOperation(5,2,'*'));
echo '<br/>';
print_r(mathOperation(5,2,'/'));

echo '<br/>';
echo '<hr>';
echo '<br/>';

/*
 * 6. С помощью рекурсии организуйте функцию возведения числа в степень. Формат: function power($val, $pow),
 * где $val – заданное число, $pow – степень
 */
function power($val,$pow) {
if($pow === 0) {
    return 1;
}
elseif ($pow > 0) {
    return $val * power($val, $pow - 1); //2*2*2*2*1
}
elseif ($pow < 0) {
    return power(1/$val, -$pow);   //математическая формула для отриц. степени
}
}
print_r(power(2, 4));

echo '<br/>';
echo '<hr>';
echo '<br/>';

/*
 * 7. Написать функцию, которая принимают в качестве аргументов два числа и вычисляет из них большее. Написать такую
 *  же функцию, чтобы она вычисляла меньшее число. Проверить, если произведение $a и $b больше 100, но меньше 1000,
 *  то от большего числа отнять меньшее и вывести результат на экран. А если произведение этих чисел больше 1000,
 *  то произведение этих чисел разделить на большее из чисел.
 */
function highNumber($num1,$num2) {
    if($num1 > $num2) {
        return $num1;
    }
    elseif ($num1 < $num2) {
        return $num2;
    }
    elseif ($num1 === $num2) {
        return $num1;
    }
}
print_r(highNumber(9,8));
echo '<br/>';

function smallNumber($num1,$num2) {
    if($num1 > $num2) {
        return $num2;
    }
    elseif ($num1 < $num2) {
        return $num1;
    }
    elseif ($num1 === $num2) {
        return $num1;
    }
}
print_r(smallNumber(9,8));
echo '<br/>';

function doCheck($a,$b){
    if(($a * $b > 100) && ($a * $b < 1000)) {
       return highNumber($a,$b) - smallNumber($a,$b);
    }
    elseif ($a * $b > 1000) {
        return ($a * $b) / highNumber($a,$b);
    }
}
print_r(doCheck(100,15)); //5

echo '<br/>';
echo '<hr>';
echo '<br/>';
