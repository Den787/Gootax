<?php
include_once 'funcCalculator.php';

$x = '';
$result = 0;

if  (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $znak = $_POST['znak'];


         if (is_numeric($a) && is_numeric($b)) {

            $result = calc($a, $znak, $b);
            $x = $result;

        }
         else {

            echo "Введены не числа";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="Calculator.php" method="post">
    <p> Введите число 1: </p>
    <input type="text" name="a"><br>
    <p> Введите арифметическую операцию(+-*/): </p>
    <input type="text" name="znak"><br>
    <p> Введите число 2: </p>
    <input type="text" name="b"><br><br>
    <input type="submit" value="Посчитать" name="submit">
    <input type="reset" value="Очистить форму">
    <p> Ответ: </p>
    <input type="text" disabled  value="<?php echo $x ?>">

</form>

</body>
</html>
